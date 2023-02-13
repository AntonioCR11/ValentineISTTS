<div class="container">
    <ul class="nav py-3">
        <div class="row w-100 m-0">
            {{-- LOGO --}}
            <div class="col p-0">
                <h2 class="m-0" style="cursor: pointer;">
                    <span class="bg-dark p-4">
                        <a class="text-light" style="text-decoration: none" href="{{route('home')}}">
                            𝔳𝔞𝔩𝔢𝔫𝔱𝔦𝔫𝔢<span style="font-size: 0.3em">.istts</span>
                        </a>
                    </span>
                </h2>
            </div>
            {{-- NAVIGATION --}}
            <div class="col d-none d-lg-flex justify-content-center align-items-center">
                <li class="nav-item" style=" {{($currPage === 'home') ? 'border-bottom: 1px solid black' : ''}}">
                    <a class="nav-link text-dark navigation" href="{{route("home")}}">Home</a>
                </li>
                <li class="nav-item" style=" {{($currPage === 'posts') ? 'border-bottom: 1px solid black' : ''}}">
                    <a class="nav-link text-dark navigation" href="{{route("posts")}}">Posts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark navigation" href="https://www.instagram.com/bemistts/" target="_blank">About</a>
                </li>
            </div>
            {{-- SEARCH BAR --}}
            <div class="col d-none d-lg-flex align-items-center">
                <div class="input-group">
                    <input id="recipientName" type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-dark" type="button" id="button-addon2" onclick="searchClicked($('#recipientName').val())">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg>
                    </button>
                </div>
            </div>

            {{-- PROFILE --}}
            <div class="col d-flex d-lg-none justify-content-end align-items-center p-0">
                <div class="hamburger d-lg-none ms-3">
                    <a data-bs-toggle="offcanvas" href="#offCanvas" role="button" aria-controls="offCanvas">
                        <img class="dropdown-toggle" role="button" data-bs-toggle="dropdown" src="{{ asset('storage/images/icons/more.png') }}" alt="" width="30px" height="30px">
                    </a>
                    <div class="offcanvas offcanvas-end w-75" tabindex="-1" id="offCanvas" aria-labelledby="offcanvasExampleLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Valentine ISTTS</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <div class="mb-3">
                                Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.
                            </div>
                            <li class="nav-item">
                                <a class="btn mb-2" href="{{route("home")}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-house-door-fill me-2" viewBox="0 0 16 16" >
                                        <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z"/>
                                    </svg>
                                    Home
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="btn mb-2" href="{{route("posts")}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-postage-heart me-2" viewBox="0 0 16 16">
                                        <path d="M3.5 1a1 1 0 0 0 1-1h1a1 1 0 0 0 2 0h1a1 1 0 0 0 2 0h1a1 1 0 1 0 2 0H15v1a1 1 0 1 0 0 2v1a1 1 0 1 0 0 2v1a1 1 0 1 0 0 2v1a1 1 0 1 0 0 2v1a1 1 0 1 0 0 2v1h-1.5a1 1 0 1 0-2 0h-1a1 1 0 1 0-2 0h-1a1 1 0 1 0-2 0h-1a1 1 0 1 0-2 0H1v-1a1 1 0 1 0 0-2v-1a1 1 0 1 0 0-2V9a1 1 0 1 0 0-2V6a1 1 0 0 0 0-2V3a1 1 0 0 0 0-2V0h1.5a1 1 0 0 0 1 1ZM3 3v10a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1Z"/>
                                        <path d="M8 11C2.175 7.236 6.336 4.31 8 5.982 9.664 4.309 13.825 7.236 8 11Z"/>
                                    </svg>
                                    Posts
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="btn mb-2" href="https://www.instagram.com/bemistts/" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-people-fill me-2" viewBox="0 0 16 16">
                                            <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                                        </svg>
                                    About
                                </a>
                            </li>
                        </div>
                    </div>
                </div>
            </div>

            {{-- <div class="col d-flex justify-content-end align-items-center">
                <div class="hamburger d-lg-none ms-3">
                    <li class="dropdown-center">
                        <img class="dropdown-toggle" role="button" data-bs-toggle="dropdown" src="{{ asset('storage/images/icons/more.png') }}" alt="" width="30px" height="30px">
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('home')}}">Home</a></li>
                            <li><a class="dropdown-item" href="{{route('posts')}}">Posts</a></li>
                            <li><a class="dropdown-item" href="https://www.instagram.com/bemistts/" target="_blank">About</a></li>
                        </ul>
                    </li>
                </div>
            </div> --}}
        </div>
    </ul>
</div>
