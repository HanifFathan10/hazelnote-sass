@extends('layouts.app')

@section('layout')
    <x-layouts.app>
        <x-ui.navbar />

        <section class="note">
            <div class="note__container">
                <form action="{{ route('notes.update', $note->id) }}" class="note__container__form" method="POST">
                    @method('PATCH')
                    @csrf
                    <h1>Edit Note</h1>
                    <div class="note__container__form__wrapper">
                        <div class="note__container__form__input">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title" placeholder="Title"
                                value="{{ old('title', $note->title) }}" required>
                            @error('title')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="note__container__form__input">
                            <label for="priority">Priority</label>
                            <select name="priority" id="priority" required>
                                @foreach ($priorities as $priority)
                                    <option value="{{ $priority->id }}"
                                        {{ $priority->id == $note->priority_id ? 'selected' : '' }}>
                                        {{ $priority->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('priority')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="note__container__form__input">
                        <x-ui.tinymce name="body" value="{!! old('body', $note->body) !!}" />
                        @error('body')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <button type="submit" class="btn btn-success">Edit</button>
                    </div>
                </form>
            </div>
        </section>
    </x-layouts.app>
@endsection
