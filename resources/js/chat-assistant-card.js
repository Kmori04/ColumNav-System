document.addEventListener("DOMContentLoaded", () => {
    const input = document.getElementById("roomSearchInput");
    const suggestionList = document.getElementById("roomSuggestionList");
    const floorSelect = document.getElementById("floorSelect");
    const chatCard = document.getElementById("chatAssistantCard");

    if (!input || !suggestionList) return;

    let greetingTimeout = null;
    const defaultSuggestionIds = [25, 22, 50];

    function showAssistantReply(message) {
        if (!chatCard) return;

        let bubble = document.querySelector(".chatbot-floating-greeting");

        if (!bubble) {
            bubble = document.createElement("div");
            bubble.className = "chatbot-floating-greeting";
            document.body.appendChild(bubble);
        }

        bubble.textContent = message;

        const cardRect = chatCard.getBoundingClientRect();
        const top = window.scrollY + cardRect.top + 12;
        const left = window.scrollX + cardRect.right - 60;

        bubble.style.top = `${top}px`;
        bubble.style.left = `${left}px`;

        bubble.classList.remove("hide");
        bubble.classList.remove("show");
        void bubble.offsetWidth;
        bubble.classList.add("show");

        clearTimeout(greetingTimeout);
        greetingTimeout = setTimeout(() => {
            bubble.classList.remove("show");
            bubble.classList.add("hide");
        }, 3000);
    }

    function normalizeText(text) {
        return (text || "")
            .toLowerCase()
            .replace(/[\(\)\-\/]/g, " ")
            .replace(/\s+/g, " ")
            .trim();
    }

    function normalizeRoomNameForDisplay(name) {
        let cleaned = String(name || "").trim();

        cleaned = cleaned.replace(/\s+/g, " ").trim();

        const lower = cleaned.toLowerCase();

        if (
            lower === "male restroom" ||
            lower === "female restroom" ||
            lower === "comfort room" ||
            lower === "cr" ||
            lower === "cr male" ||
            lower === "cr female" ||
            lower === "cr - male" ||
            lower === "cr - female" ||
            lower === "cr - men" ||
            lower === "cr - women"
        ) {
            const floor = inferFloorFromRoomId(null, cleaned);
            if (floor) {
                return `${cleaned} ${floor}`;
            }
        }

        return cleaned;
    }

    function scoreRoom(roomName, query) {
        const room = normalizeText(roomName);
        const search = normalizeText(query);

        if (!search) return 0;
        if (room === search) return 1000;
        if (room.startsWith(search)) return 800;
        if (room.includes(search)) return 600;

        const searchWords = search.split(" ").filter(Boolean);
        let score = 0;

        searchWords.forEach(word => {
            if (room.startsWith(word)) score += 120;
            else if (room.includes(word)) score += 80;
        });

        return score;
    }

    function buildRoomList() {
        const rawRooms = Array.isArray(window.chatAssistantRooms) ? window.chatAssistantRooms : [];

        const normalizedRooms = rawRooms
            .map((room, index) => {
                if (typeof room === "string") {
                    const name = normalizeRoomNameForDisplay(room);
                    return {
                        id: index + 1,
                        name
                    };
                }

                if (room && typeof room === "object") {
                    const id = Number(room.id);
                    const originalName = String(room.name || "").trim();
                    const name = normalizeRoomNameForDisplay(originalName);

                    return {
                        id,
                        name
                    };
                }

                return null;
            })
            .filter(room => room && room.name);

        const uniqueRoomsMap = new Map();

        normalizedRooms.forEach(room => {
            if (!uniqueRoomsMap.has(room.id)) {
                uniqueRoomsMap.set(room.id, room);
            } else {
                const existing = uniqueRoomsMap.get(room.id);
                if ((!existing.name || existing.name.length < room.name.length) && room.name) {
                    uniqueRoomsMap.set(room.id, room);
                }
            }
        });

        return Array.from(uniqueRoomsMap.values());
    }

    function getRoomList() {
        return buildRoomList();
    }

    function getRoomById(roomId) {
        return getRoomList().find(room => Number(room.id) === Number(roomId)) || null;
    }

    function getDefaultSuggestions() {
        const roomList = getRoomList();

        const defaults = defaultSuggestionIds
            .map(id => getRoomById(id))
            .filter(Boolean);

        if (defaults.length > 0) return defaults;

        return roomList.slice(0, 3);
    }

    function getTopSuggestions(query) {
        const roomList = getRoomList();
        const cleanQuery = normalizeText(query);

        if (!cleanQuery) {
            return getDefaultSuggestions();
        }

        const exactMatch = roomList.find(room => normalizeText(room.name) === cleanQuery);
        if (exactMatch) {
            return [exactMatch];
        }

        const startsWithMatches = roomList.filter(room =>
            normalizeText(room.name).startsWith(cleanQuery)
        );

        if (startsWithMatches.length === 1) {
            return [startsWithMatches[0]];
        }

        const matched = roomList
            .map(room => ({
                room,
                score: scoreRoom(room.name, cleanQuery)
            }))
            .filter(item => item.score > 0)
            .sort((a, b) => b.score - a.score || a.room.name.localeCompare(b.room.name))
            .slice(0, 3)
            .map(item => item.room);

        if (matched.length === 0) {
            return getDefaultSuggestions();
        }

        return matched;
    }

    function animateSuggestionClick(button) {
        button.classList.remove("is-clicked");
        void button.offsetWidth;
        button.classList.add("is-clicked");

        setTimeout(() => {
            button.classList.remove("is-clicked");
        }, 220);
    }

    function createSuggestionButton(room) {
        const button = document.createElement("button");
        button.type = "button";
        button.className = "chatbot-suggestion";
        button.dataset.roomId = room.id;
        button.dataset.roomName = room.name;
        button.textContent = `Take me to the ${room.name}`;
        return button;
    }

    function renderSuggestions(rooms) {
        suggestionList.innerHTML = "";
        rooms.forEach(room => {
            suggestionList.appendChild(createSuggestionButton(room));
        });
    }

    function updateSuggestions() {
        const query = input.value;
        const results = getTopSuggestions(query);
        renderSuggestions(results);
    }

    function findRoomElementById(roomId, roomName = "") {
        const allRooms = document.querySelectorAll(".room");

        for (const roomEl of allRooms) {
            const elRoomId = roomEl.dataset.roomId || roomEl.dataset.id || "";
            if (String(elRoomId) === String(roomId)) {
                return roomEl;
            }
        }

        const targetName = normalizeText(roomName);

        for (const roomEl of allRooms) {
            const mapRoomName = normalizeText(roomEl.dataset.name || "");
            if (mapRoomName === targetName) {
                return roomEl;
            }
        }

        for (const roomEl of allRooms) {
            const mapRoomName = normalizeText(roomEl.dataset.name || "");
            if (mapRoomName.includes(targetName) || targetName.includes(mapRoomName)) {
                return roomEl;
            }
        }

        return null;
    }

    function inferFloorFromRoomId(roomId, roomName = "") {
        const floors = ["1F", "2F", "3F", "4F"];

        for (const floor of floors) {
            const tpl = document.getElementById(`tpl-${floor}`);
            if (!tpl) continue;

            const temp = document.createElement("div");
            temp.innerHTML = tpl.innerHTML;

            const rooms = temp.querySelectorAll(".room");

            for (const roomEl of rooms) {
                const templateRoomId = roomEl.dataset.roomId || roomEl.dataset.id || "";
                if (roomId !== null && roomId !== undefined && String(templateRoomId) === String(roomId)) {
                    if (floor === "1F") return "1st Floor";
                    if (floor === "2F") return "2nd Floor";
                    if (floor === "3F") return "3rd Floor";
                    if (floor === "4F") return "4th Floor";
                }
            }
        }

        const targetName = normalizeText(roomName);

        for (const floor of floors) {
            const tpl = document.getElementById(`tpl-${floor}`);
            if (!tpl) continue;

            const temp = document.createElement("div");
            temp.innerHTML = tpl.innerHTML;

            const rooms = temp.querySelectorAll(".room");

            for (const roomEl of rooms) {
                const templateRoomName = normalizeText(roomEl.dataset.name || "");
                if (templateRoomName === targetName) {
                    if (floor === "1F") return "1st Floor";
                    if (floor === "2F") return "2nd Floor";
                    if (floor === "3F") return "3rd Floor";
                    if (floor === "4F") return "4th Floor";
                }
            }
        }

        return "";
    }

    function findRoomFloor(roomId, roomName = "") {
        const floorLabel = inferFloorFromRoomId(roomId, roomName);

        if (floorLabel === "1st Floor") return "1F";
        if (floorLabel === "2nd Floor") return "2F";
        if (floorLabel === "3rd Floor") return "3F";
        if (floorLabel === "4th Floor") return "4F";

        const floors = ["1F", "2F", "3F", "4F"];

        const targetName = normalizeText(roomName);

        for (const floor of floors) {
            const tpl = document.getElementById(`tpl-${floor}`);
            if (!tpl) continue;

            const temp = document.createElement("div");
            temp.innerHTML = tpl.innerHTML;

            const rooms = temp.querySelectorAll(".room");

            for (const roomEl of rooms) {
                const templateRoomName = normalizeText(roomEl.dataset.name || "");
                if (templateRoomName.includes(targetName) || targetName.includes(templateRoomName)) {
                    return floor;
                }
            }
        }

        return null;
    }

    function clickRenderedRoom(roomId, roomName = "") {
        const roomEl = findRoomElementById(roomId, roomName);
        if (!roomEl) return;

        roomEl.scrollIntoView({
            block: "center",
            inline: "center",
            behavior: "smooth"
        });

        setTimeout(() => {
            roomEl.dispatchEvent(new MouseEvent("click", {
                bubbles: true,
                cancelable: true,
                view: window
            }));
        }, 120);
    }

    function triggerMapRoomClick(roomId, roomName = "") {
        const targetFloor = findRoomFloor(roomId, roomName);

        if (!targetFloor || !floorSelect) {
            clickRenderedRoom(roomId, roomName);
            return;
        }

        if (floorSelect.value !== targetFloor) {
            floorSelect.value = targetFloor;
            floorSelect.dispatchEvent(new Event("change", { bubbles: true }));

            setTimeout(() => {
                clickRenderedRoom(roomId, roomName);
            }, 220);
        } else {
            clickRenderedRoom(roomId, roomName);
        }
    }

    function upsertChatAssistantRoom(roomId, roomName) {
        if (!roomId) return;

        if (!Array.isArray(window.chatAssistantRooms)) {
            window.chatAssistantRooms = [];
        }

        const normalizedName = normalizeRoomNameForDisplay(roomName);
        const numericId = Number(roomId);

        const existingIndex = window.chatAssistantRooms.findIndex(room => Number(room.id) === numericId);

        if (existingIndex >= 0) {
            window.chatAssistantRooms[existingIndex] = {
                ...window.chatAssistantRooms[existingIndex],
                id: numericId,
                name: normalizedName
            };
        } else {
            window.chatAssistantRooms.push({
                id: numericId,
                name: normalizedName
            });
        }

        const defaultButtons = suggestionList.querySelectorAll(".chatbot-suggestion");

        defaultButtons.forEach(btn => {
            const btnId = Number(btn.dataset.roomId || 0);
            if (btnId === numericId) {
                btn.dataset.roomName = normalizedName;
                btn.textContent = `Take me to the ${normalizedName}`;
            }
        });

        if (input.value && Number(input.dataset.selectedRoomId || 0) === numericId) {
            input.value = normalizedName;
        }

        updateSuggestions();
    }

    window.updateChatAssistantRoom = function (roomId, roomName) {
        upsertChatAssistantRoom(roomId, roomName);
    };

    window.refreshChatAssistantSuggestions = function () {
        updateSuggestions();
    };

    window.addEventListener("chat-assistant-room-updated", (event) => {
        const detail = event.detail || {};
        upsertChatAssistantRoom(detail.id, detail.name);
    });

    input.addEventListener("input", () => {
        input.dataset.selectedRoomId = "";
        updateSuggestions();
    });

    suggestionList.addEventListener("click", (event) => {
        const button = event.target.closest(".chatbot-suggestion");
        if (!button) return;

        const selectedRoomId = Number(button.dataset.roomId || 0);
        const selectedRoomName = button.dataset.roomName || "";

        if (!selectedRoomId && !selectedRoomName) return;

        animateSuggestionClick(button);
        input.value = selectedRoomName;
        input.dataset.selectedRoomId = selectedRoomId;

        showAssistantReply(`Going to ${selectedRoomName}`);

        setTimeout(() => {
            updateSuggestions();
            triggerMapRoomClick(selectedRoomId, selectedRoomName);
        }, 120);
    });

    input.addEventListener("keydown", (event) => {
        if (event.key === "Enter") {
            event.preventDefault();

            const results = getTopSuggestions(input.value);
            renderSuggestions(results);

            if (results.length > 0) {
                input.value = results[0].name;
                input.dataset.selectedRoomId = results[0].id;
                showAssistantReply(`Going to ${results[0].name}`);
                triggerMapRoomClick(results[0].id, results[0].name);
            }
        }
    });

    renderSuggestions(getDefaultSuggestions());
});