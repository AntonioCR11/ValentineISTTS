@extends("layout.layout")

@section("pagename")
    Valentine ISTTS
@endsection

@section("custom_css")
    <style>
        html,body{
            /* background-color: rgb(18,18,18); */
            /* background-image: url("../../storage/images/posts/bg.jpg");
            background-size: cover;
            background-position: center;
            height: 100%; */
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
                @forelse ($posts as $post)
                    <div class="col-sm-12 col-md-6 col-lg-3 p-0" style="position: relative;">
                        {{-- CARD CONTENT --}}
                        {{-- <a href=""> --}}
                            <div class="restaurant_card p-2" style="background-color: rgb(100, 51, 80);">
                                <div class="image_container">
                                    <img class="navigation" src="{{asset("storage/images/posts/postcard/postcard_$post->postcard.jpg")}}" alt="" width="100%" height="100%">
                                </div>
                                {{-- RESTAURANT INFO --}}
                                <p class="m-0 text-end text-light" style="font-family: helvetica_regular">To: {{$post->recipient}}</p>
                            </div>
                        {{-- </a> --}}
                    </div>
                @empty
                    <div class="d-flex w-100 justify-content-center">
                        <p class="m-0">There is no restaurant registered!</p>
                    </div>
                @endforelse

            </div>
        </div>
    </div>
@endsection

@section("footer")
@endsection
