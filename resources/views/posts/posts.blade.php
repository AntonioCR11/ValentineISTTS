@extends("layout.layout")

@section("pagename")
    Valentine ISTTS
@endsection

@section("custom_css")
    <style>
        html,body{
            /* background-color: rgb(18,18,18); */
        }
    </style>
@endsection

@section("dependencies")
    {{-- POSTPAGE JS --}}
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://cdn.rawgit.com/nnattawat/flip/master/dist/jquery.flip.min.js"></script>
    <script src="{{asset('storage/js/post.js')}}"></script>
@endsection


@section("header")
    @include("partial.flashMessage")
    @include('posts.partial.navbar')
@endsection

@section("content")
    <div class="container">
        {{-- CATALOG --}}
        <div class="catalog">
            <div class="row m-0">
                <div class="col-sm-12 col-md-6 col-lg-3 p-0" style="position: relative;">
                    {{-- CARD CONTENT --}}
                    <div class="restaurant_card p-2" style="background-color: rgb(100, 51, 80);">
                        <div class="image_container">
                            <img class="navigation" src="{{asset("storage/images/posts/postcard/postcard_1.jpg")}}" alt="" width="100%" height="100%">
                        </div>
                        {{-- RESTAURANT INFO --}}
                        <p class="m-0 text-end text-light" style="font-family: helvetica_regular">To: Jipi punyaku - SIB</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 p-0" style="position: relative;">
                    {{-- CARD CONTENT --}}
                    <div class="restaurant_card p-2" style="background-color: rgb(158, 91, 144)">
                        <div class="image_container">
                            <img class="navigation" src="{{asset("storage/images/posts/postcard/postcard_2.jpg")}}" alt="" width="100%" height="100%">
                        </div>
                        {{-- RESTAURANT INFO --}}
                        <p class="m-0 text-end text-light" style="font-family: helvetica_regular">To: Kosmannya sachio - DKV</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 p-0" style="position: relative;">
                    {{-- CARD CONTENT --}}
                    <div class="restaurant_card p-2" style="background-color: rgb(158, 91, 144)">
                        <div class="image_container">
                            <img class="navigation" src="{{asset("storage/images/posts/postcard/postcard_3.jpg")}}" alt="" width="100%" height="100%">
                        </div>
                        {{-- RESTAURANT INFO --}}
                        <p class="m-0 text-end text-light" style="font-family: helvetica_regular">To: Ivananya Marco</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 p-0" style="position: relative;">
                    {{-- CARD CONTENT --}}
                    <div class="restaurant_card p-2" style="background-color: rgb(251, 134, 178)">
                        <div class="image_container">
                            <img class="navigation" src="{{asset("storage/images/posts/postcard/postcard_4.jpg")}}" alt="" width="100%" height="100%">
                        </div>
                        {{-- RESTAURANT INFO --}}
                        <p class="m-0 text-end text-light" style="font-family: helvetica_regular">To: Felpangnya cung</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 p-0" style="position: relative;">
                    {{-- CARD CONTENT --}}
                    <div class="restaurant_card p-2" style="background-color: rgb(83, 41, 43)">
                        <div class="image_container">
                            <img class="navigation" src="{{asset("storage/images/posts/postcard/postcard_5.jpg")}}" alt="" width="100%" height="100%">
                        </div>
                        {{-- RESTAURANT INFO --}}
                        <p class="m-0 text-end text-light" style="font-family: helvetica_regular">To: Memenya timot - DKV</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 p-0" style="position: relative;">
                    {{-- CARD CONTENT --}}
                    <div class="restaurant_card p-2" style="background-color: rgb(176, 96, 131)">
                        <div class="image_container">
                            <img class="navigation" src="{{asset("storage/images/posts/postcard/postcard_6.jpg")}}" alt="" width="100%" height="100%">
                        </div>
                        {{-- RESTAURANT INFO --}}
                        <p class="m-0 text-end text-light" style="font-family: helvetica_regular">To: Sansan kandas - DKV</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 p-0" style="position: relative;">
                    {{-- CARD CONTENT --}}
                    <div class="restaurant_card p-2" style="background-color: rgb(253, 150, 177)">
                        <div class="image_container">
                            <img class="navigation" src="{{asset("storage/images/posts/postcard/postcard_7.jpg")}}" alt="" width="100%" height="100%">
                        </div>
                        {{-- RESTAURANT INFO --}}
                        <p class="m-0 text-end text-light" style="font-family: helvetica_regular">To: Siapapun yang mau</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@section("footer")
@endsection
