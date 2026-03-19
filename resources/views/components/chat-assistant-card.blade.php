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
            <button type="button" class="chatbot-suggestion" data-room-id="25" data-room-name="Payment">
                Take me to the Payment
            </button>

            <button type="button" class="chatbot-suggestion" data-room-id="22" data-room-name="Sewing Department">
                Take me to the Sewing Department
            </button>

            <button type="button" class="chatbot-suggestion" data-room-id="50" data-room-name="C203 REGISTRATION OFFICE">
                Take me to the C203 REGISTRATION OFFICE
            </button>
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
    window.chatAssistantRooms = [
        { id: 1, name: 'Student Affairs Office' },
        { id: 2, name: 'Guidance Office' },
        { id: 3, name: 'PESCA Office' },
        { id: 4, name: 'Clinic' },
        { id: 5, name: 'Campus Youth Ministry' },
        { id: 6, name: 'Catechetical Center Library' },
        { id: 7, name: 'Food Stand' },
        { id: 8, name: 'College Chapel' },
        { id: 9, name: 'V102' },
        { id: 10, name: 'CR - Women 1st Floor' },
        { id: 11, name: 'CR - Women (PWD) 1st Floor' },
        { id: 12, name: 'CR - Men (PWD) 1st Floor' },
        { id: 13, name: 'CR - Men 1st Floor' },
        { id: 14, name: 'CR - Men 1st Floor' },
        { id: 15, name: 'CR - Women 1st Floor' },
        { id: 16, name: 'Social Work Office' },
        { id: 17, name: 'V104' },
        { id: 18, name: 'V105' },
        { id: 19, name: 'V106' },
        { id: 20, name: 'V107' },
        { id: 21, name: 'V108' },
        { id: 22, name: 'Sewing Department' },
        { id: 23, name: 'Office of the President' },
        { id: 24, name: 'Jubilee Conference Room' },
        { id: 25, name: 'Payment' },
        { id: 26, name: 'Information' },
        { id: 27, name: 'Canteen' },
        { id: 28, name: 'C102 Faculty Lounge' },
        { id: 29, name: 'C100' },
        { id: 30, name: 'Maintenance Office' },
        { id: 31, name: 'Physical Plant & Facilities' },
        { id: 32, name: 'NSTP' },
        { id: 33, name: 'A102 CBA Faculty Room' },
        { id: 34, name: 'A103 Education Strategy Room' },
        { id: 35, name: 'A104' },
        { id: 36, name: 'A105' },
        { id: 37, name: 'A106' },
        { id: 38, name: 'A107' },
        { id: 39, name: 'A101 Electrical Room' },
        { id: 40, name: 'H101' },
        { id: 41, name: 'AVR' },
        { id: 42, name: 'H103' },
        { id: 43, name: 'Business Executive Room' },
        { id: 44, name: 'The Premier Post Office' },
        { id: 45, name: 'CASED Faculty' },
        { id: 46, name: 'IDCC Office' },
        { id: 47, name: 'Printing Center' },
        { id: 48, name: 'C201 TREASURES OFFICE' },
        { id: 49, name: 'C202 FINANCE AND ADMINISTRATION' },
        { id: 50, name: 'C203 REGISTRATION OFFICE' },
        { id: 51, name: 'C204' },
        { id: 52, name: 'MIS Office' },
        { id: 53, name: 'C206 IBA FINANCE OFFICE' },
        { id: 54, name: 'C207 AB COMLAB' },
        { id: 55, name: 'C208' },
        { id: 56, name: 'C209' },
        { id: 57, name: 'B201 COMPUTER LAB4' },
        { id: 58, name: 'B202 BLIS SIMULATION ROOM' },
        { id: 59, name: 'B203 CONSULTATION ROOM' },
        { id: 60, name: 'B204' },
        { id: 61, name: 'Male Restroom 2nd Floor' },
        { id: 62, name: 'V203 ID services' },
        { id: 63, name: 'V201 College Library' },
        { id: 64, name: 'Female Restroom 2nd Floor' },
        { id: 65, name: 'Graduate School Library' },
        { id: 66, name: 'H202' },
        { id: 67, name: 'H203' },
        { id: 68, name: 'H204' },
        { id: 69, name: 'H205' },
        { id: 70, name: 'H206' },
        { id: 71, name: 'H207' },
        { id: 72, name: 'H208 ZAMBAL MUSEUM' },
        { id: 73, name: 'H209' },
        { id: 74, name: 'H210' },
        { id: 75, name: 'A201' },
        { id: 76, name: 'A202 FACULTY LOUNGE' },
        { id: 77, name: 'A203' },
        { id: 78, name: 'A204' },
        { id: 79, name: 'A205 DEIFI Finance Office' },
        { id: 80, name: 'A206 HUMAN RESOURCES DEPARTMENT' },
        { id: 81, name: 'A207 OFFICE OF THE VICE PRESIDENT' },
        { id: 82, name: 'A208 QUALITY ASSURANCE OFFICE' },
        { id: 83, name: 'TESDA TRAINING OFFICE' },
        { id: 84, name: 'A301 TOURISM TRAVEL BUILDING' },
        { id: 85, name: 'A304' },
        { id: 86, name: 'A305' },
        { id: 87, name: 'A306' },
        { id: 88, name: 'Female Restroom 3rd Floor' },
        { id: 89, name: 'C301' },
        { id: 90, name: 'C302' },
        { id: 91, name: 'C303' },
        { id: 92, name: 'C304 MANAGEMENT SIMULATION ROOM' },
        { id: 93, name: 'B305 WAR ROOM' },
        { id: 94, name: 'B304 CISCO LABORATORY' },
        { id: 95, name: 'B303 CHAIRPERSON OFFICE' },
        { id: 96, name: 'B302 CCS FACULTY ROOM' },
        { id: 97, name: 'B301 DEANS OFFICE' },
        { id: 98, name: 'V307 COMPUTER LAB' },
        { id: 99, name: 'V306 SERVER ROOM' },
        { id: 100, name: 'v305 MICRO BIOLOGY LAB' },
        { id: 101, name: 'V304 BIOLOGY LAB' },
        { id: 102, name: 'V303 SCIENCE LECTURE ROOM' },
        { id: 103, name: 'V302 STOCK ROOM' },
        { id: 104, name: 'V301 CHEMISTRY LAB' },
        { id: 105, name: 'Female Restroom 4th Floor' },
        { id: 106, name: 'B403' },
        { id: 107, name: 'B402' },
        { id: 108, name: 'B401' },
        { id: 109, name: 'Male Restroom 4th Floor' },
        { id: 110, name: 'B101' },
        { id: 111, name: 'B102' },
        { id: 112, name: 'B103' },
        { id: 113, name: 'C110' },
        { id: 114, name: 'CR Female 2nd Floor' },
        { id: 115, name: 'CR Male 2nd Floor' },
        { id: 116, name: 'H201' },
        { id: 117, name: 'H211' },
        { id: 118, name: 'A302/A303' },
        { id: 119, name: 'Comfort Room 3rd Floor' },
        { id: 120, name: 'B300' },
        { id: 121, name: 'Female Restroom 4th Floor' },
        { id: 122, name: 'Male Restroom 4th Floor' },
        { id: 123, name: 'Convery Hall' },
        { id: 124, name: 'CR - Female 4th Floor' },
        { id: 125, name: 'CR - Male 4th Floor' },
        { id: 126, name: 'C111' }
    ];
</script>