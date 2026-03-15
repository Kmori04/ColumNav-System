document.addEventListener("DOMContentLoaded", () => {
    const input = document.getElementById("roomSearchInput");
    const suggestionList = document.getElementById("roomSuggestionList");

    if (!input || !suggestionList) return;

    const rawRooms = Array.isArray(window.chatAssistantRooms) ? window.chatAssistantRooms : [];
    const uniqueRooms = [...new Set(rawRooms.map(room => (room || "").trim()).filter(Boolean))];
    const defaultSuggestions = ["Canteen", "Comfort Room", "B102"];

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

    function getTopSuggestions(query) {
        const cleanQuery = normalizeText(query);

        if (!cleanQuery) {
            return defaultSuggestions;
        }

        const exactMatch = uniqueRooms.find(room => normalizeText(room) === cleanQuery);
        if (exactMatch) {
            return [exactMatch];
        }

        const startsWithMatches = uniqueRooms.filter(room =>
            normalizeText(room).startsWith(cleanQuery)
        );

        if (startsWithMatches.length === 1) {
            return [startsWithMatches[0]];
        }

        const matched = uniqueRooms
            .map(room => ({
                room,
                score: scoreRoom(room, cleanQuery)
            }))
            .filter(item => item.score > 0)
            .sort((a, b) => b.score - a.score || a.room.localeCompare(b.room))
            .slice(0, 3)
            .map(item => item.room);

        if (matched.length === 0) {
            return defaultSuggestions;
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

    function createSuggestionButton(roomName) {
        const button = document.createElement("button");
        button.type = "button";
        button.className = "chatbot-suggestion";
        button.dataset.room = roomName;
        button.textContent = `Take me to the ${roomName}`;
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

    input.addEventListener("input", updateSuggestions);

    suggestionList.addEventListener("click", (event) => {
        const button = event.target.closest(".chatbot-suggestion");
        if (!button) return;

        animateSuggestionClick(button);
        input.value = button.dataset.room || "";

        setTimeout(() => {
            updateSuggestions();
        }, 120);
    });

    input.addEventListener("keydown", (event) => {
        if (event.key === "Enter") {
            event.preventDefault();
            updateSuggestions();
        }
    });

    renderSuggestions(defaultSuggestions);
});