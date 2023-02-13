@extends("layout.layout")

@section("pagename")
    Valentine ISTTS
@endsection

@section("custom_css")
    <style>
        html,body{
            /* background-color: rgb(18,18,18); */
            background-image: url("../../storage/images/posts/bg.jpg");
            background-size: cover;
            background-position: center;
            /* height: 100%; */

            height: calc(100vh - 73px);
        }
    </style>
@endsection

@section("dependencies")
    {{-- POSTPAGE JS --}}
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://cdn.rawgit.com/nnattawat/flip/master/dist/jquery.flip.min.js"></script>
    <script src="{{asset('storage/js/post.js')}}"></script>

    {{-- HEART ANIMATION --}}
    <link rel="stylesheet" href="{{asset('storage/css/heart.css')}}">
    <script src="{{asset('storage/js/heart.js')}}"></script>
@endsection


@section("header")
    @include("partial.flashMessage")
    @include('posts.partial.navbar')
@endsection

@section("content")
    <div id="header-plugin"></div>
    <div class="bg_heart">
        {{-- HEART ANIMATION --}}
        <div class="container">
            {{-- CATALOG --}}
            <div class="catalog">
                <div class="row m-0 overflow-auto" style="height: calc(100vh - 73px)">
                    @forelse ($posts as $post)
                        <div class="col-sm-12 col-md-6 col-lg-3 p-0" style="position: relative;">
                            {{-- CARD CONTENT --}}
                            <div id="{{$post->id}}" class="postcard" onclick="postClicked(this.id)" style="position: relative">

                                <div id="message{{$post->id}}" class="message p-3 bg-light overflow-auto" style="position: absolute;height: 100%;width: 100%;">
                                    @if ($post->anonymus==1)
                                        <h5>From : Anonymous</h5>
                                    @else
                                        <h5>From : {{$post->user->username}}</h5>
                                    @endif

                                    <p>{{$post->content}}</p>
                                </div>

                                <div class="image_container">
                                    <img class="navigation" src="{{asset("storage/images/posts/postcard/postcard_$post->postcard.jpg")}}" alt="" width="100%" height="100%">
                                </div>
                                {{-- RESTAURANT INFO --}}
                                @if ($post->postcard == 1)
                                    <p class="m-0 p-2 text-end text-light" style="font-family: helvetica_regular; background-color: rgb(100, 51, 80);">To: {{$post->recipient}}</p>
                                @elseif ($post->postcard == 2)
                                    <p class="m-0 p-2 text-end text-light" style="font-family: helvetica_regular; background-color: rgb(158, 91, 144);">To: {{$post->recipient}}</p>
                                @elseif ($post->postcard == 3)
                                    <p class="m-0 p-2 text-end text-light" style="font-family: helvetica_regular; background-color: rgb(158, 91, 144);">To: {{$post->recipient}}</p>
                                @elseif ($post->postcard == 4)
                                    <p class="m-0 p-2 text-end text-light" style="font-family: helvetica_regular; background-color: rgb(251, 134, 178);">To: {{$post->recipient}}</p>
                                @elseif ($post->postcard == 5)
                                    <p class="m-0 p-2 text-end text-light" style="font-family: helvetica_regular; background-color: rgb(83, 41, 43);">To: {{$post->recipient}}</p>
                                @elseif ($post->postcard == 6)
                                    <p class="m-0 p-2 text-end text-light" style="font-family: helvetica_regular; background-color: rgb(176, 96, 131);">To: {{$post->recipient}}</p>
                                @elseif ($post->postcard == 7)
                                    <p class="m-0 p-2 text-end text-light" style="font-family: helvetica_regular;background-color: rgb(253, 150, 177);">To: {{$post->recipient}}</p>
                                @elseif ($post->postcard == 8)
                                    <p class="m-0 p-2 text-end text-light" style="font-family: helvetica_regular;background-color: rgb(175, 125, 163);">To: {{$post->recipient}}</p>
                                @elseif ($post->postcard == 9)
                                    <p class="m-0 p-2 text-end text-light" style="font-family: helvetica_regular;background-color: rgb(1, 155, 181);">To: {{$post->recipient}}</p>
                                @elseif ($post->postcard == 10)
                                    <p class="m-0 p-2 text-end text-light" style="font-family: helvetica_regular;background-color: rgb(152, 74, 54);">To: {{$post->recipient}}</p>
                                @endif
                            </div>
                        </div>
                    @empty
                        <div class="d-flex w-100 justify-content-center">
                            <p class="m-0">There is no restaurant registered!</p>
                        </div>
                    @endforelse

                </div>
            </div>
        </div>
    </div>
@endsection

@section("footer")
@endsection
