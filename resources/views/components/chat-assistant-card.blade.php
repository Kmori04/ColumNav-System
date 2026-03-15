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
        <p class="chatbot-card__subtitle">How can I asist you today?</p>

        <div class="chatbot-card__suggestions" id="roomSuggestionList">
            <button type="button" class="chatbot-suggestion" data-room="Canteen">
                Take me to the Canteen
            </button>

            <button type="button" class="chatbot-suggestion" data-room="Comfort Room">
                Take me to the Comfort Room
            </button>

            <button type="button" class="chatbot-suggestion" data-room="B102">
                Take me to the B102
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
        'Student Affairs Office',
        'Guidance Office',
        'PESCA Office',
        'Clinic',
        'Campus Youth Ministry',
        'Catechetical Center Library',
        'Food Stand',
        'College Chapel',
        'V102',
        'CR - Women',
        'CR - Women (PWD)',
        'CR - Men (PWD)',
        'CR - Men',
        'CR - Men (2)',
        'CR - Women (2)',
        'Social Work Office',
        'V104',
        'V105',
        'V106',
        'V107',
        'V108',
        'Sewing Department',
        'Office of the President',
        'Jubilee Conference Room',
        'Payment',
        'Information',
        'Canteen',
        'C102 Faculty Lounge',
        'C100',
        'Maintenance Office',
        'Physical Plant & Facilities',
        'NSTP',
        'A102 CBA Faculty Room',
        'A103 Education Strategy Room',
        'A104',
        'A105',
        'A106',
        'A107',
        'A101 Electrical Room',
        'H101',
        'AVR',
        'H103',
        'Business Executive Room',
        'The Premier Post Office',
        'CASED Faculty',
        'IDCC Office',
        'Printing Center',
        'C201 TREASURES OFFICE',
        'C202 FINANCE AND ADMINISTRATION',
        'C203 REGISTRATION OFFICE',
        'C204',
        'MIS Office',
        'C206 IBA FINANCE OFFICE',
        'C207 AB COMLAB',
        'C208',
        'C209',
        'B201 COMPUTER LAB4',
        'B202 BLIS SIMULATION ROOM',
        'B203 CONSULTATION ROOM',
        'B204',
        'Male Restroom',
        'V203 ID services',
        'V201 College Library',
        'Female Restroom',
        'Graduate School Library',
        'H202',
        'H203',
        'H204',
        'H205',
        'H206',
        'H207',
        'H208 ZAMBAL MUSEUM',
        'H209',
        'H210',
        'A201',
        'A202 FACULTY LOUNGE',
        'A203',
        'A204',
        'A205 DEIFI Finance Office',
        'A206 HUMAN RESOURCES DEPARTMENT',
        'A207 OFFICE OF THE VICE PRESIDENT',
        'A208 QUALITY ASSURANCE OFFICE',
        'TESDA TRAINING OFFICE',
        'A301 TOURISM TRAVEL BUILDING',
        'A304',
        'A305',
        'A306',
        'Female Restroom',
        'C301',
        'C302',
        'C303',
        'C304 MANAGEMENT SIMULATION ROOM',
        'B305 WAR ROOM',
        'B304 CISCO LABORATORY',
        'B303 CHAIRPERSON OFFICE',
        'B302 CCS FACULTY ROOM',
        'B301 DEANS OFFICE',
        'V307 COMPUTER LAB',
        'V306 SERVER ROOM',
        'v305 MICRO BIOLOGY LAB',
        'V304 BIOLOGY LAB',
        'V303 SCIENCE LECTURE ROOM',
        'V302 STOCK ROOM',
        'V301 CHEMISTRY LAB',
        'Female Restroom',
        'B403',
        'B402',
        'B401',
        'Male Restroom',
        'B101',
        'B102',
        'B103',
        'C110',
        'CR Female',
        'CR Male',
        'H201',
        'H211',
        'A302/A303',
        'Comfort Room',
        'B300',
        'Female Restroom (2)',
        'Male Restroom (2)',
        'Convery Hall',
        'CR - Female (3)',
        'CR - Male (3)',
        'C111'
    ];
</script>