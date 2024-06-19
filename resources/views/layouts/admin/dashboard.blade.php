@extends('layouts.app')

@section('layout')
    <main class="dashboard">
        <x-layouts.admin.sidebar />

        <section class="dashboard__main">
            <x-ui.admin.header />

            <div class="dashboard__main__body">
                @yield('body')
            </div>
        </section>
    </main>
@endsection
