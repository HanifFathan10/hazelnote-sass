@extends('layouts.app')

@section('layout')
    <x-layouts.app>
        <x-ui.admin.navbar />

        @yield('content')
    </x-layouts.app>
@endsection
