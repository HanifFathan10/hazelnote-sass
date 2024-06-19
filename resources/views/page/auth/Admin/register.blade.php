@extends('layouts.app')

@section('layout')
    <x-layouts.authentication header="Register to Hazelnote" link="register">
        <form action="{{ route('account.create') }}" method="POST" class="form">
            @csrf
            <div class="form__input">
                <label for="username">Username</label>
                <input type="username" name="username" id="username" placeholder="username" value="{{ old('username') }}">
                @error('username')
                    <p class="form__input__error">{{ $message }}</p>
                @enderror
            </div>
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
            <div class="form__input">
                <label for="password2">Confirm Password</label>
                <input type="password" name="password2" id="password2" placeholder="********"
                    value="{{ old('password2') }}">
                @error('password2')
                    <p class="form__input__error">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit">Register</button>
        </form>
    </x-layouts.authentication>
@endsection
