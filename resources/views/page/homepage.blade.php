@extends('layouts.app')

@section('layout')
    <x-layouts.app>
        <x-ui.navbar />

        <div class="task">
            <div class="task__container">
                <div class="task__container__header">
                    <h1>{{ now()->format('j F Y') }}</h1>
                    <div class="task__container__create">
                        <a href="{{ route('notes.create') }}">Create Task</a>
                    </div>
                </div>
            </div>
            <div class="task__cards">

                @foreach ($notes as $note)
                    <a href="{{ route('notes.show', $note->slug) }}" class="task__cards__card">
                        <div class="task__cards__card__name">
                            <h1>{{ $note->title }}</h1>
                            <h3>{{ $note->created_at->diffForHumans() }}</h3>
                        </div>
                        <span
                            class="task__cards__card__priority color-{{ strtolower($note->priority->name) }}">{{ strtoupper($note->priority->name) }}</span>
                    </a>
                @endforeach


            </div>
            @if ($notes->hasPages())
                <div class="pagination" onclick="event.stopPropagation()">
                    <span class="pagination__number-indicator"></span>
                    <button class="pagination__arrow {{ $notes->onFirstPage() ? 'pagination__arrow--disabled' : '' }}"
                        {{ $notes->onFirstPage() ? 'disabled' : '' }}
                        onclick="window.location.href='{{ $notes->previousPageUrl() }}'">
                        <span class="pagination__arrow-half"></span>
                        <span class="pagination__arrow-half"></span>
                    </button>
                    @foreach ($notes->getUrlRange(1, $notes->lastPage()) as $page => $url)
                        <button
                            class="pagination__number {{ $page == $notes->currentPage() ? 'pagination__number--active' : '' }}"
                            onclick="window.location.href='{{ $url }}'">{{ $page }}</button>
                    @endforeach
                    <button
                        class="pagination__arrow pagination__arrow--right {{ $notes->hasMorePages() ? '' : 'pagination__arrow--disabled' }}"
                        {{ $notes->hasMorePages() ? '' : 'disabled' }}
                        onclick="window.location.href='{{ $notes->nextPageUrl() }}'">
                        <span class="pagination__arrow-half"></span>
                        <span class="pagination__arrow-half"></span>
                    </button>
                </div>
            @endif
        </div>
    </x-layouts.app>

    @push('scripts')
        {{-- PAGINATION --}}
        <script>
            const pagination = document.querySelector('.pagination')

            if (pagination) {
                const paginationNumbers = document.querySelectorAll('.pagination__number')
                let paginationActiveNumber = document.querySelector('.pagination__number--active')
                const paginationNumberIndicator = document.querySelector('.pagination__number-indicator')
                const paginationLeftArrow = document.querySelector('.pagination__arrow:not(.pagination__arrow--right)')
                const paginationRightArrow = document.querySelector('.pagination__arrow--right')

                const postionIndicator = (element) => {
                    const paginationRect = pagination.getBoundingClientRect()
                    const paddingElement = parseInt(window.getComputedStyle(element, null).getPropertyValue('padding-left'),
                        10)
                    const elementRect = element.getBoundingClientRect()
                    paginationNumberIndicator.style.left = `${elementRect.left + paddingElement - paginationRect.left}px`
                    paginationNumberIndicator.style.width = `${elementRect.width - paddingElement * 2}px`
                    if (element.classList.contains('pagination__number--active')) {
                        paginationNumberIndicator.style.opacity = 1
                    } else {
                        paginationNumberIndicator.style.opacity = .2
                    }
                }

                const setActiveNumber = (element) => {
                    if (element.classList.contains('pagination__number--active')) return
                    element.classList.add('pagination__number--active')
                    paginationActiveNumber.classList.remove('pagination__number--active')
                    paginationActiveNumber = element
                    setArrowState()
                }

                const disableArrow = (arrow, disable) => {
                    if (
                        (!disable && !arrow.classList.contains('pagination__arrow--disabled')) ||
                        (disable && arrow.classList.contains('pagination__arrow--disabled'))
                    )
                        return
                    if (disable) {
                        arrow.classList.add('pagination__arrow--disabled')
                    } else {
                        arrow.classList.remove('pagination__arrow--disabled')
                    }
                }

                const setArrowState = () => {
                    const previousElement = paginationActiveNumber.previousElementSibling
                    const nextElement = paginationActiveNumber.nextElementSibling
                    if (previousElement.classList.contains('pagination__number')) {
                        disableArrow(paginationLeftArrow, false)
                    } else {
                        disableArrow(paginationLeftArrow, true)
                    }

                    if (nextElement.classList.contains('pagination__number')) {
                        disableArrow(paginationRightArrow, false)
                    } else {
                        disableArrow(paginationRightArrow, true)
                    }
                }

                paginationLeftArrow.addEventListener('click', () => {
                    setActiveNumber(paginationActiveNumber.previousElementSibling)
                    postionIndicator(paginationActiveNumber)
                })

                paginationRightArrow.addEventListener('click', () => {
                    setActiveNumber(paginationActiveNumber.nextElementSibling)
                    postionIndicator(paginationActiveNumber)
                })

                Array.from(paginationNumbers).forEach((element) => {
                    element.addEventListener('click', () => {
                        setActiveNumber(element)
                        postionIndicator(paginationActiveNumber)
                    })

                    element.addEventListener('mouseover', () => {
                        postionIndicator(element)
                    })

                    element.addEventListener('mouseout', () => {
                        postionIndicator(paginationActiveNumber)
                    })
                })

                postionIndicator(paginationActiveNumber)
            }
        </script>
    @endpush
@endsection
