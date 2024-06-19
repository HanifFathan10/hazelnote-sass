@extends('layouts.app')

@section('layout')
    <x-layouts.app>
        <x-ui.navbar />

        <section class="note">
            <div class="note__container">
                <div class="single">
                    <div class="single__header">
                        <div class="single__header_title">{!! $note->title !!}</div>
                        <div class="single__header__priority color-{{ strtolower($note->priority->name) }}">
                            {{ $note->priority->name }}</div>
                    </div>
                    <hr>
                    <div class="single__body">{!! $note->body !!}</div>
                </div>
                <div class="action">
                    <button class="btn btn-success"
                        onclick="window.location.href='{{ route('notes.edit', $note->slug) }}'">Edit</button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">Delete</button>
                </div>
            </div>
        </section>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Are you sure you want to delete this?</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <form action="{{ route('notes.destroy', $note->slug) }}" method="POST">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </x-layouts.app>
@endsection
