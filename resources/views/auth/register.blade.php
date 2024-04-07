<x-auth-layout>

    <main class="main-auth">
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form class="form auth-form" method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form__input-block">
                <input type="text" name="name" placeholder="name" value="" required autofocus />
            </div>

            <div class="form__input-block">
                <input name="email" type="email" placeholder="email" value="" required/>
            </div>

            <div class="form__input-block">
                <input name="password" type="password" placeholder="password" value="" required autocomplete="new-password" />
            </div>

            <div class="form__input-block">
                <input name="password_confirmation" type="password" placeholder="password" value="" required />
            </div>


            <div class="form__btn-block">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>
                @endif
                <button type="submit" class="btn btn-green">{{ __('Register') }}</button>
            </div>            

        </form>
    </main>

</x-auth-layout>
