<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

   {{-- <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script> --}}

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    <div class="flex h-screen overflow-hidden">

        <!-- Left -->
        <aside id="sidebar-chat" class="w-full lg:w-1/3 xl:w-1/4 border flex flex-col h-screen">

            <!-- Header -->
            <div class="py-2 px-3 bg-grey-lighter flex flex-row justify-left items-center gap-4">
                <a href="/">
                    <svg xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="w-8" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                    </svg>
                </a>

                <div class="flex">
                    <p class="text-2xl font-semibold">Messages</p>
                </div>
            </div>

            <!-- Contacts -->
            <div id="list-users" class="bg-grey-lighter overflow-auto h-[93%]">
                @foreach($friends as $friend)
                    <div class="user-list user-chat">
                        <div>
                            <img class="h-12 w-12 rounded-full"
                                 src="@if($friend->image == null) {{ asset('assets/blank_photo.png') }} @else {{$friend->image}} @endif "/>
                        </div>
                        <div class="ml-4 flex-1 border-b border-grey-lighter py-4">
                            <div class="flex items-bottom justify-between">
                                <p class="name text-grey-darkest">{{ $friend->name }}</p>
                                <p class="hidden">{{$friend->id}}</p>
                                <p class="text-xs text-grey-darkest">
                                    12:45 pm
                                </p>
                            </div>
                            <p class="text-grey-dark mt-1 text-sm">
                                {{ "@" . $friend->email }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>

        </aside>
        <!-- Right -->
        <main id="show-messege-layer" class="hidden w-full lg:w-2/3 xl:w-3/4 border h-screen">

            <!-- Header -->
            <div class="py-2 px-3 bg-grey-lighter flex flex-row justify-between items-center">
                <div class="flex items-center">
                    <div id="back-chat" class="mr-4 lg:hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                        </svg>
                    </div>
                    <div>
                        <img id="photo-friend" class="w-10 h-10 rounded-full" src=""/>
                    </div>
                    <div class="ml-4">
                        <p id="name-friend" class="text-grey-darkest"> New Movie! Expendables 4 </p>
                    </div>
                </div>
            </div>

            <!-- Messages -->
            <div id="messages" class="flex-1 h-[82%] w-full overflow-auto scroll-smooth" style="background-color: #DAD3CC">
                <div class="py-2 px-3">

{{--                    <div class="flex justify-center mb-2">--}}
{{--                        <div class="rounded py-2 px-4" style="background-color: #DDECF2">--}}
{{--                            <p class="text-sm uppercase">--}}
{{--                                February 20, 2018--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="flex justify-center mb-4">--}}
{{--                        <div class="rounded py-2 px-4" style="background-color: #FCF4CB">--}}
{{--                            <p class="text-xs">--}}
{{--                                Messages to this chat and calls are now secured with end-to-end encryption. Tap for more info.--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}


                </div>
            </div>

            <!-- Input -->
            <div class="bg-grey-lighter px-4 py-4 flex gap-2 items-center">
                <div class="flex-1 ">
                    <input id="form-input-message" class="w-full border rounded px-2 py-2" type="text" autocomplete="off"/>
                </div>
                <button id="buttom-input-message" type="submit" class="px-4 py-3 h-full text-white bg-gray-500 hover:bg-gray-600 rounded">
                    Kirim
                </button>
            </div>
        </main>

        <section id="banner-chat" class="hidden lg:block lg:w-2/3 xl:w-3/4 h-full bg-white flex justify-center justify-center">
            <div class="mt-24">
                <div class="flex justify-center">
                    <img class="lg:w-96" src="{{ asset('assets/vektor-chat.jpg') }}" alt="">
                </div>
                <div class="text-center mt-2">
                    <p class="lg:text-4xl">USK Social Chat</p>
                </div>
            </div>
        </section>

    </div>

    <input type="hidden" id="room-url" value="{{ route('room.create') }}">
    <input type="hidden" id="create-chat-url" value="{{ route('chat.save') }}">
    <input type="hidden" id="id-user-login" value="{{ \Illuminate\Support\Facades\Auth::user()->id }}">
    <input type="hidden" id="nama-user-login" value="{{ \Illuminate\Support\Facades\Auth::user()->name }}">
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{ asset('js/chat.js') }}"></script>
</body>
</html>
