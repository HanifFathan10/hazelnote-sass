@extends('layouts.app')

@section('layout')
    <x-layouts.admin.authentication header="Welcome to Admin Hazelnote" link="login">
        <form action="{{ route('admin.authenticate') }}" method="POST" class="form">
            @csrf
            @if (Session::has('error'))
                <h1 class="form__input__error">
                    {{ Session::get('error') }}
                </h1>
            @endif
            <div class="form__input">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="haniffathan@example.com"
                    value="{{ old('email') }}">
                @error('email')
                    <p class="form__input__error">{{ $message }}</p>
                @enderror
            </div>
            <div class="form__input">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="********" value="{{ old('password') }}">
                @error('password')
                    <p class="form__input__error">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit">Login</button>
        </form>
    </x-layouts.admin.authentication>
@endsection
