document.addEventListener("DOMContentLoaded", () => {
    const input = document.getElementById("roomSearchInput");
    const suggestionList = document.getElementById("roomSuggestionList");
    const floorSelect = document.getElementById("floorSelect");

    if (!input || !suggestionList) return;

    
    
    const rawRooms = Array.isArray(window.chatAssistantRooms) ? window.chatAssistantRooms : [];

    const normalizedRooms = rawRooms
        .map((room, index) => {
            if (typeof room === "string") {
                return {
                    id: index + 1,
                    name: room.trim()
                };
            }

            if (room && typeof room === "object") {
                return {
                    id: Number(room.id),
                    name: String(room.name || "").trim()
                };
            }

            return null;
        })
        .filter(room => room && room.name);

    const uniqueRoomsMap = new Map();
    normalizedRooms.forEach(room => {
        if (!uniqueRoomsMap.has(room.id)) {
            uniqueRoomsMap.set(room.id, room);
        }
    });

    const roomList = Array.from(uniqueRoomsMap.values());

    const defaultSuggestionIds = [25, 22, 50]; // Canteen, Comfort Room, B102

    function normalizeText(text) {
        return (text || "")
            .toLowerCase()
            .replace(/[\(\)\-\/]/g, " ")
            .replace(/\s+/g, " ")
            .trim();
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

    function getRoomById(roomId) {
        return roomList.find(room => Number(room.id) === Number(roomId)) || null;
    }

    function getDefaultSuggestions() {
        const defaults = defaultSuggestionIds
            .map(id => getRoomById(id))
            .filter(Boolean);

        if (defaults.length > 0) return defaults;

        return roomList.slice(0, 3);
    }

    function getTopSuggestions(query) {
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

    function findRoomFloor(roomId, roomName = "") {
        const floors = ["1F", "2F", "3F", "4F"];

        for (const floor of floors) {
            const tpl = document.getElementById(`tpl-${floor}`);
            if (!tpl) continue;

            const temp = document.createElement("div");
            temp.innerHTML = tpl.innerHTML;

            const rooms = temp.querySelectorAll(".room");

            for (const roomEl of rooms) {
                const templateRoomId = roomEl.dataset.roomId || roomEl.dataset.id || "";
                if (String(templateRoomId) === String(roomId)) {
                    return floor;
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
                    return floor;
                }
            }
        }

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

    input.addEventListener("input", updateSuggestions);

    suggestionList.addEventListener("click", (event) => {
        const button = event.target.closest(".chatbot-suggestion");
        if (!button) return;

        const selectedRoomId = Number(button.dataset.roomId || 0);
        const selectedRoomName = button.dataset.roomName || "";

        if (!selectedRoomId && !selectedRoomName) return;

        animateSuggestionClick(button);
        input.value = selectedRoomName;

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
                triggerMapRoomClick(results[0].id, results[0].name);
            }
        }
    });

    renderSuggestions(getDefaultSuggestions());
});