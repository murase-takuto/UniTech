<x-guest-layout>
    <div class="container sm:px-10">
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <div class="block xl:grid grid-cols-2 gap-4">
            <!-- BEGIN: Login Info -->
            <div class="hidden xl:flex flex-col min-h-screen">
                <a href="" class="-intro-x flex items-center pt-5">
                    <img alt="Tinker Tailwind HTML Admin Template" class="w-6" src="{{ asset('dist/images/logo.png') }}">
                    <span class="text-white text-lg ml-3"> Tinker </span>
                </a>
                <div class="my-auto">
                    <img alt="Tinker Tailwind HTML Admin Template" class="-intro-x w-1/2 -mt-16"
                        src="{{ asset('dist/images/illustration.svg') }}">
                    <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">
                        A few more clicks to
                        <br>
                        sign in to your account.
                    </div>
                    <div class="-intro-x mt-5 text-lg text-white text-opacity-70 dark:text-slate-400">
                        Manage all your e-commerce accounts in one place
                    </div>
                </div>
            </div>
            <!-- END: Login Info -->
            <!-- BEGIN: Login Form -->
            <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
                <div
                    class="my-auto mx-auto xl:ml-20 bg-white dark:bg-darkmode-600 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                    <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
                        Sign In
                    </h2>
                    <div class="intro-x mt-2 text-slate-400 xl:hidden text-center">
                        A few more clicks to sign in to your account. Manage all your e-commerce accounts in one place
                    </div>
                    <a href="https://slack.com/openid/connect/authorize?scope=openid%20email%20profile&amp;response_type=code&amp;redirect_uri=https%3A%2F%2Fdev.unitech.takuto1999.com%2Flogin%2Fslack%2Fcallback&amp;client_id=3002921507750.3048346783120" style="align-items:center;color:#000;background-color:#fff;border:1px solid #ddd;border-radius:4px;display:inline-flex;font-family:Lato, sans-serif;font-size:18px;font-weight:600;height:56px;justify-content:center;text-decoration:none;width:296px">
                        <svg xmlns="http://www.w3.org/2000/svg" style="height:24px;width:24px;margin-right:12px" viewBox="0 0 122.8 122.8">
                            <path d="M25.8 77.6c0 7.1-5.8 12.9-12.9 12.9S0 84.7 0 77.6s5.8-12.9 12.9-12.9h12.9v12.9zm6.5 0c0-7.1 5.8-12.9 12.9-12.9s12.9 5.8 12.9 12.9v32.3c0 7.1-5.8 12.9-12.9 12.9s-12.9-5.8-12.9-12.9V77.6z" fill="#e01e5a"></path>
                            <path d="M45.2 25.8c-7.1 0-12.9-5.8-12.9-12.9S38.1 0 45.2 0s12.9 5.8 12.9 12.9v12.9H45.2zm0 6.5c7.1 0 12.9 5.8 12.9 12.9s-5.8 12.9-12.9 12.9H12.9C5.8 58.1 0 52.3 0 45.2s5.8-12.9 12.9-12.9h32.3z" fill="#36c5f0"></path>
                            <path d="M97 45.2c0-7.1 5.8-12.9 12.9-12.9s12.9 5.8 12.9 12.9-5.8 12.9-12.9 12.9H97V45.2zm-6.5 0c0 7.1-5.8 12.9-12.9 12.9s-12.9-5.8-12.9-12.9V12.9C64.7 5.8 70.5 0 77.6 0s12.9 5.8 12.9 12.9v32.3z" fill="#2eb67d"></path>
                            <path d="M77.6 97c7.1 0 12.9 5.8 12.9 12.9s-5.8 12.9-12.9 12.9-12.9-5.8-12.9-12.9V97h12.9zm0-6.5c-7.1 0-12.9-5.8-12.9-12.9s5.8-12.9 12.9-12.9h32.3c7.1 0 12.9 5.8 12.9 12.9s-5.8 12.9-12.9 12.9H77.6z" fill="#ecb22e"></path>
                        </svg>
                        Sign in with Slack
                    </a>
                    <div class="intro-x mt-6 xl:mt-12 text-slate-600 dark:text-slate-500 text-center xl:text-left">
                        By signin up, you agree to our
                        <a class="text-primary dark:text-slate-200" href="">
                            Terms and Conditions
                        </a>
                        &
                        <a class="text-primary dark:text-slate-200" href="">
                            Privacy Policy
                        </a>
                    </div>
                    <!-- <form method="POST" action="{{ route('user.login') }}">
                        @csrf
                        <div class="intro-x mt-8">
                            <x-input id="email" class="intro-x login__input form-control py-3 px-4 block" type="email"
                                name="email" :value="old('email')" required autofocus />
                            <x-input id="password" class="intro-x login__input form-control py-3 px-4 block mt-4"
                                type="password" name="password" required autocomplete="current-password" />
                        </div>
                        <div class="intro-x flex text-slate-600 dark:text-slate-500 text-xs sm:text-sm mt-4">
                            <div class="flex items-center mr-auto">
                                <input id="remember-me" type="checkbox" class="form-check-input border mr-2"
                                    name="remember">
                                <label class="cursor-pointer select-none" for="remember-me">Remember me</label>
                            </div>
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}">Forgot Password?</a>
                            @endif
                        </div>
                        <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                            <button type="submit"
                                class="btn btn-primary py-3 px-4 w-full xl:w-32 xl:mr-3 align-top">Login</button>
                            <button class="btn btn-outline-secondary py-3 px-4 w-full xl:w-32 mt-3 xl:mt-0 align-top">Register</button>
                        </div>
                        <div class="intro-x mt-10 xl:mt-24 text-slate-600 dark:text-slate-500 text-center xl:text-left">
                            By signin up, you agree to our
                            <a class="text-primary dark:text-slate-200" href="">
                                Terms and Conditions
                            </a>
                            &
                            <a class="text-primary dark:text-slate-200" href="">
                                Privacy Policy
                            </a>
                        </div>
                    </form> -->
                </div>
            </div>
            <!-- END: Login Form -->
        </div>
    </div>
    <!-- BEGIN: Dark Mode Switcher-->
    <div data-url="login-dark-login.html"
        class="dark-mode-switcher cursor-pointer shadow-md fixed bottom-0 right-0 box dark:bg-dark-2 border rounded-full w-40 h-12 flex items-center justify-center z-50 mb-10 mr-10">
        <div class="mr-4 text-gray-700 dark:text-gray-300">Dark Mode</div>
        <div class="dark-mode-switcher__toggle border"></div>
    </div>
    <!-- END: Dark Mode Switcher-->
</x-guest-layout>
