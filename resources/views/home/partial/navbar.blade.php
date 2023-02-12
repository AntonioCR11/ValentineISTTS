<ul class="nav py-3">
    <div class="row w-100">
        {{-- LOGO --}}
        <div class="col">
            <h1 class="m-0" style="cursor: pointer;">
                <span class="text-light bg-dark p-3">
                    𝔳𝔞𝔩𝔢𝔫𝔱𝔦𝔫𝔢<span style="font-size: 0.3em">.istts</span>
                </span>
            </h1>
        </div>
        {{-- NAVIGATION --}}
        <div class="col d-none d-lg-flex justify-content-center align-items-center">
            <li class="nav-item" style=" {{($currPage === 'home') ? 'border-bottom: 1px solid black' : ''}}">
                <a class="nav-link text-dark navigation" href="{{route("home")}}">Home</a>
            </li>
            <li class="nav-item" style=" {{($currPage === 'request') ? 'border-bottom: 1px solid black' : ''}}">
                <a class="nav-link text-dark navigation" href="{{route("request")}}">Request</a>
            </li>
            <li class="nav-item" style=" {{($currPage === 'about') ? 'border-bottom: 1px solid black' : ''}}">
                <a class="nav-link text-dark navigation" href="{{route("about_us")}}">About</a>
            </li>
        </div>
        {{-- PROFILE --}}
        <div class="col d-flex justify-content-end align-items-center">
            <div class="hamburger d-lg-none ms-3">
                <li class="dropdown-center">
                    <img class="dropdown-toggle" role="button" data-bs-toggle="dropdown" src="{{ asset('storage/images/icons/more.png') }}" alt="" width="30px" height="30px">
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('home')}}">Home</a></li>
                        <li><a class="dropdown-item" href="{{route('request')}}">Request</a></li>
                        <li><a class="dropdown-item" href="{{route('about_us')}}">About</a></li>
                    </ul>
                </li>
            </div>
        </div>
    </div>
</ul>
