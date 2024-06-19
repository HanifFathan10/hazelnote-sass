<section class="auth">
    <div class="auth__container">
        <div class="auth__container__header">
            <h1>{{ $header }}</h1>
        </div>
        {{ $slot }}
        @if ($link == 'register')
            <div class="auth__container__link">
                Already have an account?
                <a href="{{ route('account.login') }}"> Login</a>
            </div>
        @else
            <div class="auth__container__link">
                Don't have an account?
                <a href="{{ route('account.register') }}"> Register</a>
            </div>
        @endif
    </div>
</section>
