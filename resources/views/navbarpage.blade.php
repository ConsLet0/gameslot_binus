<!DOCTYPE html>
<html lang="en">

<head>
    @include('homepagescript')
</head>

<nav class="navbar navbar-expand-lg navbar-light shadow">
    <div class="container d-flex justify-content-between align-items-center">

        <a class="navbar-brand text-success logo h1 align-self-center" href="/">
            GameSlot
        </a>

        <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="homepage_main_nav">
            <div class="flex-fill">
                <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/aboutuspage">About Us</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/shoppage">Shop</a>
                    </li>

                    @auth
                        @if(Auth::user()->usertype === '1')
                        <li class="nav-item">
                            <a class="nav-link" href="/adminhome">txAdmin</a>
                        </li>
                        @endif
                    @endauth

                    <li>
                        <a>
                            @if (Route::has('login'))
                            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                @auth
                                
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/cartviewpage') }}">Cart</a>
                                </li>
                               
                                <li>
                                    <a>
                                        <x-app-layout>
                                        </x-app-layout>
                                    </a>
                                </li>
                                @else
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
                                </li>
                                    @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>    
                                    </li>
                                    @endif
                                @endauth
                            </div>
                        @endif
                        </a>
                    </li>
                </ul>
            </div>
            <div class="navbar align-self-center d-flex">
                <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                    <div class="input-group">
                        <input type="text" class="form-control" id="inputMobileSearch" placeholder="Search ...">
                        <div class="input-group-text">
                            <i class="fa fa-fw fa-search"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</nav>
</body>
</html>