@extends('layouts.admin.dashboard')

@section('body')
    <section class="note-dashboard">
        <div class="note-dashboard__header">
            <div class="note-dashboard__header__wrapper">
                <h1 class="note-dashboard__header__wrapper__title">Hazelnote</h1>

                <button class="note-dashboard__header__wrapper__create">
                    <svg width="38px" height="38px" viewBox="0 0 24 24" fill="" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path d="M4 12H20M12 4V20" stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                        </g>
                    </svg>
                </button>
            </div>
        </div>

        <div class="note-dashboard__content">
            <div class="note-dashboard__content__wrapper">
                <div class="note-dashboard__content__wrapper__note">
                    <div class="note-dashboard__content__wrapper__note__body">
                        <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h1>
                        <p>{{ now()->format('j F Y') }}</p>
                    </div>
                    <span class="note-dashboard__content__priority">
                        Easy
                    </span>
                </div>
            </div>
        </div>
    </section>
@endsection
