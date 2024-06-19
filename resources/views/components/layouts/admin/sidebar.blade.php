<aside class="sidebar">
    <header class="sidebar__header">
        <h1>Hazelnote Admin</h1>
    </header>
    <ul class="sidebar__items">
        <a href="{{ route('admin.dashboard') }}" class="sidebar__items__list">
            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <path
                        d="M13 12C13 11.4477 13.4477 11 14 11H19C19.5523 11 20 11.4477 20 12V19C20 19.5523 19.5523 20 19 20H14C13.4477 20 13 19.5523 13 19V12Z"
                        stroke="#ffffff" stroke-width="2" stroke-linecap="round"></path>
                    <path
                        d="M4 5C4 4.44772 4.44772 4 5 4H9C9.55228 4 10 4.44772 10 5V12C10 12.5523 9.55228 13 9 13H5C4.44772 13 4 12.5523 4 12V5Z"
                        stroke="#ffffff" stroke-width="2" stroke-linecap="round"></path>
                    <path
                        d="M4 17C4 16.4477 4.44772 16 5 16H9C9.55228 16 10 16.4477 10 17V19C10 19.5523 9.55228 20 9 20H5C4.44772 20 4 19.5523 4 19V17Z"
                        stroke="#ffffff" stroke-width="2" stroke-linecap="round"></path>
                    <path
                        d="M13 5C13 4.44772 13.4477 4 14 4H19C19.5523 4 20 4.44772 20 5V7C20 7.55228 19.5523 8 19 8H14C13.4477 8 13 7.55228 13 7V5Z"
                        stroke="#ffffff" stroke-width="2" stroke-linecap="round"></path>
                </g>
            </svg>
            Dashboard
        </a>
        <a href="{{ route('admin.note') }}" class="sidebar__items__list">
            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <path
                        d="M16 3.98999H8C6.93913 3.98999 5.92178 4.41135 5.17163 5.1615C4.42149 5.91164 4 6.92912 4 7.98999V17.99C4 19.0509 4.42149 20.0682 5.17163 20.8184C5.92178 21.5685 6.93913 21.99 8 21.99H16C17.0609 21.99 18.0783 21.5685 18.8284 20.8184C19.5786 20.0682 20 19.0509 20 17.99V7.98999C20 6.92912 19.5786 5.91164 18.8284 5.1615C18.0783 4.41135 17.0609 3.98999 16 3.98999Z"
                        stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M9 2V7" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    </path>
                    <path d="M15 2V7" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                    <path d="M8 16H14" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                    <path d="M8 12H16" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                </g>
            </svg>
            Note
        </a>
        <a href="#" class="sidebar__items__list">
            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <path
                        d="M12 16.99V17M12 7V14M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z"
                        stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </g>
            </svg>
            Priority
        </a>
    </ul>
    <form action="{{ route('admin.logout') }}" method="post" class="sidebar__form">
        @csrf
        <button type="submit" class="sidebar__form__logout">Logout</button>
    </form>
</aside>
