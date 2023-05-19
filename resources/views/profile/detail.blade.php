<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</head>
<body>
    <main class="px-4 md:px-8 lg:px-24 xl:px-32 w-full">
        <div class="flex mt-8">
            <div class="1/3">
                <img class="w-64 h-64 rounded-full" src="@if ($user->image != null) {{ $user->image }} @else {{ asset('assets/blank-photo.png') }} @endif" alt="">
            </div>
            <div class="w-2/3 pl-8">
                <h4 class="text-4xl mt-8 font-semibold">{{ $user->name }}</h4>
                <h4 class="text-3xl mt-4 text-gray-700">{{ "@".$user->email }}</h4>
                @if (Illuminate\Support\Facades\Auth::user()->id == $user->id)
                    <div class="flex mt-8">
                        <a href="/dashboard-profile" class="px-6 py-2 bg-gray-400 hover:bg-gray-500 hover:text-white rounded-lg" href="">Account Setting</a>
                    </div>
                @endif

            </div>
        </div>
        <div class="w-full h-1 bg-gray-400 mt-6"></div>
        <div class="w-full">
            <div class="w-2/3 mx-auto">
                @foreach ($tweets as $tweet)
                    <div class="posts px-2 py-3 border-b-2 border-b-slate-400">
                        <div class="post-user flex items-center">
                            <img src="@if ( $tweet->user->image != null) {{  $tweet->user->image }} @else ../images/user.png @endif" alt="" class="w-11 h-11 mr-3 rounded-full">
                            <p class="text-sm font-medium mr-1">{{ $tweet->user->name }}</p>
                            <p class="text-xs text-[#9A9A9A]">{{ $tweet->user->email }}</p>
                        </div>
                        <div class="post-description">
                            <p class="text-sm pl-14 -mt-2">{{ $tweet->content }}</p>
                            @if ($tweet->image != null)
                                <img src="{{ $tweet->image }}" alt=""
                                class="pl-14 w-[585px] h-[270px] overflow-hidden my-2">
                            @endif
                        </div>
                        <div class="post-extra-options flex justify-start items-center gap-20 mt-4 pl-14">
                            <div class="like-container flex justify-between items-center w-[30.44px]">
                                <img src="../images/like.png" alt="" class="w-4 h-4 cursor-pointer">
                                <img src="../images/like-fill.png" alt="" class="w-4 h-4 cursor-pointer hidden">
                                <p>0</p>
                                <p class="hidden"> {{ $tweet->id }}</p>
                            </div>
                        </div>
                        <div class="comment-section hidden">
                            <input type="text" placeholder="comment here..."
                                class="border-b border-black w-10/12 ml-14 text-sm focus:outline-none">
                            <span class="cursor-pointer"><i data-feather="send" class="w-4 mt-3 ml-2"></i></span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        @if (count($tweets) == 0)
            <div class="w-full flex justify-center mt-6">
                <div class="py-2 px-4 bg-orange-200">
                    This account has no posts yet!
                </div>
            </div>
        @endif
    </main>

    <input type="hidden" id="like-url" value="{{ route('like-tweet') }}">
    <input type="hidden" id="dislike-url" value="{{ route('dislike-tweet') }}">
    <input type="hidden" id="id-user-login" value="{{ $auth->id }}">
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{ asset('js/like-post.js') }}"></script>
</body>
</html>
