@extends("layout.layout")

@section("pagename")
    Valentine ISTTS
@endsection

@section("custom_css")
    <style>
        .left-content{
            background-image: url("../../storage/images/home/banner2.png");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100%;
        }
        .right-content{
            background-color: rgb(12, 21, 51);
            height: 100%;
        }
        .title{
            font-family: skritch_skratch;
            font-size: 5em;
        }

        @media (max-width: 1025px){
            .title{
                font-size: 4em;
            }
        }
        @media (max-width: 981px){
            .left-content{
                height: 50%;
            }
            .title{
                font-size: 4em;
            }
        }
        @media (max-width: 641px){
            .title{
                font-size: 3.5em;
            }
        }
        @media (max-width: 481px){
            .left-content{
                height: 50%;
            }
            .title{
                font-size: 2.5em;
            }
        }
    </style>
@endsection

@section("dependencies")
    {{-- HOMEPAGE JS --}}
    <script src="{{asset('storage/js/home.js')}}"></script>

    {{-- HEART ANIMATION --}}
    <link rel="stylesheet" href="{{asset('storage/css/heart.css')}}">
    <script src="{{asset('storage/js/heart.js')}}"></script>
@endsection


@section("header")
    {{-- <div class="container">
        @include('home.partial.navbar')
    </div> --}}
    @include("partial.flashMessage")
@endsection

@section("content")
    <div class="row w-100 m-0" style="height: 100vh;">
        {{-- LEFT CONTENT --}}
        <div id="left-content" class="col-sm-12 col-lg-6 left-content p-0">
            {{-- HEART ANIMATION --}}
            <div id="header-plugin"></div>
            <div class="bg_heart"></div>
        </div>
        {{-- RIGHT CONTENT --}}
        <div id="right-content" class="col-sm-12 col-lg-6 px-5 pt-5 right-content text-light overflow-auto" style="height: 100%">
            <p class="m-0 pt-4 title" style="">
                To Tell
            </p>
            <p class="m-0 pt-4 title" >
                Your Crush
            </p>
            <p class="text-secondary mb-5">
                Yup! It's Valentine Day. Kita dari BEM ada little event called "Day of Love". Di event kali ini kalian bisa kasih Gift buat orang yang kalian sayang, ga harus pacar ya, mau bestie, saudara atau temen deket kalian. Disini BEM udah sediain nih Gift yang pastinya lucu, menarik dan juga terjangkau buat kalian.
                💌 Post Love / @2K. Kalian bisa beli Gift ini besok di depan gedung U yaa, akan ada Booth BEM yang berjaga seharian!
            </p>

            {{-- NAVIGATION --}}
            <div class="row w-100 m-0">
                <div class="col-sm-12 col-lg-4 mb-2">
                    <a href="{{route('posts')}}">
                        <button class="btn btn-outline-light w-100 fs-5 py-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" fill="currentColor" class="bi bi-postage-heart" viewBox="0 0 16 16">
                                <path d="M3.5 1a1 1 0 0 0 1-1h1a1 1 0 0 0 2 0h1a1 1 0 0 0 2 0h1a1 1 0 1 0 2 0H15v1a1 1 0 1 0 0 2v1a1 1 0 1 0 0 2v1a1 1 0 1 0 0 2v1a1 1 0 1 0 0 2v1a1 1 0 1 0 0 2v1h-1.5a1 1 0 1 0-2 0h-1a1 1 0 1 0-2 0h-1a1 1 0 1 0-2 0h-1a1 1 0 1 0-2 0H1v-1a1 1 0 1 0 0-2v-1a1 1 0 1 0 0-2V9a1 1 0 1 0 0-2V6a1 1 0 0 0 0-2V3a1 1 0 0 0 0-2V0h1.5a1 1 0 0 0 1 1ZM3 3v10a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1Z"/>
                                <path d="M8 11C2.175 7.236 6.336 4.31 8 5.982 9.664 4.309 13.825 7.236 8 11Z"/>
                            </svg><br>
                            Posts
                        </button>
                    </a>
                </div>
                <div class="col-sm-12 col-lg-4 mb-2 d-none" id="postButton">
                    <button class="btn btn-outline-light w-100 fs-5 py-3" onclick="generateConfessionPage()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                        </svg><br>
                        Confess
                    </button>
                </div>
                <div class="col-sm-12 col-lg-4 mb-2">
                    <a href="https://www.instagram.com/bemistts/" target="_blank">
                        <button class="btn btn-outline-light w-100 fs-5 py-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                            </svg><br>
                            About
                        </button>
                    </a>
                </div>
            </div>

            <div class="copyright py-4">
                <p class="m-0 text-light">
                    &copy; {{date("Y")}}. <span><a class="text-light" style="text-decoration: none" onclick="generatePostButton()">BEM</a></span> Institus Sains dan Teknologi Terpadu Surabaya<br>
                </p>
            </div>

        </div>
    </div>
@endsection

@section("footer")

@endsection
