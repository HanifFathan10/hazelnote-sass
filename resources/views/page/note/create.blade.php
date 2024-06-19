@extends('layouts.app')

@section('layout')
    <x-layouts.app>
        <x-ui.navbar />

        <section class="note">
            <div class="note__container">
                <form action="{{ route('notes.store') }}" class="note__container__form" method="POST">
                    @csrf
                    <h1>Create Note</h1>
                    <div class="note__container__form__wrapper">
                        <div class="note__container__form__input">
                            <label for="">Title</label>
                            <input type="text" name="title" id="title" placeholder="Title">
                        </div>
                        <div class="note__container__form__input">
                            <label for="priority">Priority</label>
                            <select name="priority" id="priority">
                                <option selected disabled>Select Priority</option>

                                @foreach ($priorities as $priority)
                                    <option value="{{ $priority->id }}">{{ $priority->name }}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>
                    <div class="note__container__form__input">
                        <x-ui.tinymce name="body" />

                        <button type="submit" class="btn btn-success">Create</button>
                    </div>
                </form>
            </div>
        </section>

    </x-layouts.app>
@endsection
