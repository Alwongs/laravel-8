<x-site-layout>
    <main class="main-auth">
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form class="form auth-form" method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form__input-block">
                <input name="email" type="email" placeholder="email" value="alwong@ya.ru" required/>
            </div>        

            <div class="form__input-block">
                <input name="password" type="password" placeholder="password" value="" required/>
            </div>  

            <div class="form__checkbox">
                <label for="remember_me" class="inline-flex items-center">{{ __('Remember me') }}</label>
                <input id="remember_me" type="checkbox" class="" name="remember">
            </div>

            <div class="form__btn-block">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
                <button type="submit" class="btn btn-green">{{ __('login') }}</button>
            </div>
        </form>
    </main>
</x-site-layout>
