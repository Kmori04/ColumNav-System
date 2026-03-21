@php
    use App\Models\Room;

    $chatAssistantRooms = Room::where('is_active', 1)
        ->orderBy('room_id')
        ->get(['room_id', 'room_name']);

    // Keep the same 3 suggested room IDs
    $defaultSuggestionIds = [25, 22, 50];

    $defaultSuggestions = $chatAssistantRooms
        ->whereIn('room_id', $defaultSuggestionIds)
        ->sortBy(function ($room) use ($defaultSuggestionIds) {
            return array_search($room->room_id, $defaultSuggestionIds);
        })
        ->values();
@endphp

<div class="chatbot-card" id="chatAssistantCard">
    <div class="chatbot-card__header">
        <div class="chatbot-card__title-wrap">
            <div class="chatbot-card__icon">
                <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                    <path d="M12 3C7.03 3 3 6.58 3 11c0 2.28 1.08 4.33 2.82 5.79V21l3.39-1.88c.88.24 1.82.38 2.79.38 4.97 0 9-3.58 9-8s-4.03-8.5-9-8.5Z" fill="currentColor" opacity=".18"/>
                    <path d="M12 4.25c-4.25 0-7.75 3.01-7.75 6.75 0 1.99 1 3.83 2.67 5.09l.33.25v2.52l2.11-1.18.44.12c.7.19 1.43.28 2.2.28 4.25 0 7.75-3.01 7.75-6.75S16.25 4.25 12 4.25Z" stroke="currentColor" stroke-width="1.2"/>
                    <circle cx="9" cy="11" r="1.1" fill="currentColor"/>
                    <circle cx="15" cy="11" r="1.1" fill="currentColor"/>
                    <path d="M9 14.2c.72.53 1.75.8 3 .8s2.28-.27 3-.8" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/>
                </svg>
            </div>

            <div class="chatbot-card__title-text">
                <span class="chatbot-card__bot">BOT</span>
                <span class="chatbot-card__sep">-</span>
                <span class="chatbot-card__name">Chat Assistant</span>
            </div>
        </div>
    </div>

    <div class="chatbot-card__body">
        <p class="chatbot-card__subtitle">How can I assist you today?</p>

        <div class="chatbot-card__suggestions" id="roomSuggestionList">
            @forelse($defaultSuggestions as $room)
                <button
                    type="button"
                    class="chatbot-suggestion"
                    data-room-id="{{ $room->room_id }}"
                    data-room-name="{{ $room->room_name }}"
                >
                    Take me to the {{ $room->room_name }}
                </button>
            @empty
                <button type="button" class="chatbot-suggestion" data-room-id="25" data-room-name="Payment">
                    Take me to the Payment
                </button>

                <button type="button" class="chatbot-suggestion" data-room-id="22" data-room-name="Sewing Department">
                    Take me to the Sewing Department
                </button>

                <button type="button" class="chatbot-suggestion" data-room-id="50" data-room-name="C203 REGISTRATION OFFICE">
                    Take me to the C203 REGISTRATION OFFICE
                </button>
            @endforelse
        </div>

        <div class="chatbot-card__input-wrap">
            <input
                type="text"
                id="roomSearchInput"
                class="chatbot-card__input"
                placeholder="Type your message..."
                autocomplete="off"
            >
        </div>
    </div>
</div>

<script>
    window.chatAssistantRooms = @json(
        $chatAssistantRooms->map(function ($room) {
            return [
                'id' => $room->room_id,
                'name' => $room->room_name
            ];
        })->values()
    );
</script>