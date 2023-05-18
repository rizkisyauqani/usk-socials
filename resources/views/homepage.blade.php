<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- <script src="https://kit.fontawesome.com/39b7581ae8.js" crossorigin="anonymous"></script> --}}
    <script src="https://unpkg.com/feather-icons"></script>
</head>

<body>
    <div class="overlay absolute top-0 left-0 bg-gray-600 z-20 opacity-50"></div>


    <div class="container relative flex sm:flex-col">
        <!-- Toggler -->
        <button
            class="sm:top-0 sm:left-0 lg:top-1/2 lg:left-40 absolute bg-primary px-6 py-2.5 text-xs font-medium uppercase leading-tight text-white shadow-md transition duration-150 ease-in-out hover:bg-primary-700 hover:shadow-lg focus:bg-primary-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-primary-800 active:shadow-lg"
            data-te-sidenav-toggle-ref data-te-target="#sidenav-5" aria-controls="#sidenav-5" aria-haspopup="true">
            <span class="block [&>svg]:h-5 [&>svg]:w-5 [&>svg]:text-white">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5">
                    <path fill-rule="evenodd"
                        d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
                        clip-rule="evenodd" />
                </svg>
            </span>
        </button>
        <!-- Toggler -->

        <!-- Sidenav -->
        <nav id="sidenav-5"
            class="fixed left-0 top-0 z-[1035] h-screen w-[384px] -translate-x-full overflow-hidden bg-white shadow-[0_4px_12px_0_rgba(0,0,0,0.07),_0_2px_4px_rgba(0,0,0,0.05)] sm:data-[te-sidenav-hidden='true']:translate-x-0 lg:data-[te-sidenav-hidden='false']:translate-x-0 dark:bg-zinc-800"
            data-te-sidenav-init data-te-sidenav-hidden="false" data-te-sidenav-accordion="true">
            <ul class="relative m-0 list-none px-[0.2rem]" data-te-sidenav-menu-ref>
                <li class="relative">
                    <a href="{{ route('homepage') }}"
                        class="flex h-12 cursor-pointer items-center truncate rounded-[5px] px-6 py-4 text-[0.875rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
                        data-te-sidenav-link-ref>
                        <span class="text-[#1BBE00] text-lg">USK <span class="text-[#FFD600]">SOCIALS</span></span>
                    </a>
                </li>
                <li class="relative">
                    <a href="/messages"
                        class="flex h-12 cursor-pointer items-center truncate rounded-[5px] px-6 py-4 text-[0.875rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
                        data-te-sidenav-link-ref>
                        <span class="mr-4 [&>svg]:h-4 [&>svg]:w-4 [&>svg]:text-gray-400 dark:[&>svg]:text-gray-300">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-envelope" viewBox="0 0 16 16">
                                <path
                                    d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                            </svg>
                        </span>
                        <span>Messages</span>
                    </a>
                </li>
                <li class="relative">
                    <a href="/dashboard-profile"
                        class="flex h-12 cursor-pointer items-center truncate rounded-[5px] px-6 py-4 text-[0.875rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
                        data-te-sidenav-link-ref>
                        <span class="mr-4 [&>svg]:h-4 [&>svg]:w-4 [&>svg]:text-gray-400 dark:[&>svg]:text-gray-300">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-person-gear" viewBox="0 0 16 16">
                                <path
                                    d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm.256 7a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Zm3.63-4.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382l.045-.148ZM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0Z" />
                            </svg>
                        </span>
                        <span>Account Settings</span>
                    </a>
                </li>
                <li class="relative">
                    <a href="#"
                        class="flex h-12 cursor-pointer items-center truncate rounded-[5px] px-6 py-4 text-[0.875rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
                        data-te-sidenav-link-ref>
                        <span class="mr-4 [&>svg]:h-4 [&>svg]:w-4 [&>svg]:text-gray-400 dark:[&>svg]:text-gray-300">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z" />
                                <path fill-rule="evenodd"
                                    d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
                            </svg>
                        </span>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- Sidenav -->


        <main class="w-[637px] bg-[#FAFAFA] lg:relative left-[384px]">
            <div>

                {{-- tweet place --}}
                <div class="head-tweet flex justify-between items-center px-4 py-2 ">
                    <a href="/homepage" class="font-bold text-lg">Home</a>
                    <img src="../images/star.png" alt="">
                </div>
                <hr>
                <div class="body-tweet px-2 py-3" id="bodyTweet">
                    <div class=" flex gap-3 mb-4 items-center">
                        <img src="../images/user.png" class="w-11 h-11">
                        <textarea placeholder="What's happening?" name="tweet" id="" cols="80" rows="3"
                            class="text-sm resize-none bg-[#FAFAFA] border-b placeholder:pt-5 placeholder:font-medium focus:outline-none text-left focus:placeholder:text-left"></textarea>
                        {{-- <input type="text" placeholder="What's happening?"
                            class="text-sm bg-[#FAFAFA] border-b w-10/12 focus:outline-none placeholder:font-medium focus:placeholder:opacity-0"> --}}
                    </div>
                    <div class="extra-options-container flex justify-between items-center pl-14 pr-4">
                        <div class="extra-options-content flex gap-6" id="extraOptions">
                            <!-- modal-toggler -->
                            <img src="../images/image-logo.png" alt="post image" class="w-4 h-4 cursor-pointer"
                                data-te-toggle="modal" data-te-target="#exampleModal" data-te-ripple-init
                                data-te-ripple-color="light">
                            <!-- Modal -->
                            <div data-te-modal-init
                                class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
                                id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div data-te-modal-dialog-ref
                                    class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px]">
                                    <div
                                        class="min-[576px]:shadow-[0_0.5rem_1rem_rgba(#000, 0.15)] pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
                                        <div
                                            class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                                            <!--Modal title-->
                                            <h5 class="text-xl font-medium leading-normal text-neutral-800 dark:text-neutral-200"
                                                id="exampleModalLabel">
                                                Tweet with image
                                            </h5>
                                            <!--Close button-->
                                            <button type="button"
                                                class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                                                data-te-modal-dismiss aria-label="Close">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="h-6 w-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M6 18L18 6M6 6l12 12" />
                                                </svg>
                                            </button>
                                        </div>

                                        <!--Modal body-->
                                        <ul class="w-[80%] mx-auto py-4">
                                            <li class="flex flex-col w-[90%] mb-4">
                                                <label for="img-description"
                                                    class="mb-2 text-neutral-200">Description</label>
                                                <input type="text" name="img-description" id="img-description"
                                                    placeholder="description"
                                                    class="py-2 px-2 rounded-md text-xs bg-neutral-100 focus:outline-none">
                                            </li>
                                            <li class="flex flex-col w-[90%] mb-4">
                                                <label for="img-description"
                                                    class="mb-2 text-neutral-200">Image</label>
                                                <input type="file" name="img-tweet" id="img-tweet"
                                                    placeholder="description"
                                                    class="py-2 px-2 rounded-md text-xs bg-neutral-100 focus:outline-none">
                                            </li>
                                        </ul>

                                        <!--Modal footer-->
                                        <div
                                            class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                                            <button type="button"
                                                class="inline-block rounded bg-primary-100 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-primary-400 transition duration-150 ease-in-out hover:bg-primary-accent-100 focus:bg-primary-accent-100 focus:outline-none focus:ring-0 active:bg-primary-accent-200"
                                                data-te-modal-dismiss data-te-ripple-init data-te-ripple-color="light">
                                                Close
                                            </button>
                                            <button type="button"
                                                class="ml-1 inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                                                data-te-ripple-init data-te-ripple-color="light">
                                                Post
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <img src="../images/gif-logo.png" alt="post gif" class="w-4 h-4 cursor-pointer"
                                id="gifSelectorIcon"> --}}
                            {{-- <img src="../images/text-left-logo.png" alt="text alignment"
                                class="w-4 h-4 cursor-pointer"> --}}
                            <img src="../images/emot-logo.png" alt="post emot" id="emojiSelectorIcon"
                                class="w-4 h-4 cursor-pointer relative">
                        </div>
                        <div class="gif-selector bg-slate-100 absolute w-0 h-0 left-52 top-2 overflow-auto"
                            id="gifSelector">
                            <div class="input-container flex gap-1 mx-auto p-2">
                                <input type="text" placeholder="search gif"
                                    class="w-full py-1 px-3 bg-slate-100 border-b-2 text-xs font-thin focus:outline-none"
                                    id="gifSearch">
                                <button id="searchBtn"
                                    class="text-xs text-white py-1 px-2 bg-slate-500 rounded-full">Search</button>
                            </div>
                            <ul class="gif-list flex-wrap gap-1" id="gifList"></ul>
                        </div>
                        <div class="emoji-selector bg-slate-100 w-0 h-0 absolute left-52 top-2 overflow-auto"
                            id="emojiSelector">
                            <div class="input-container mx-auto">
                                <input type="text" placeholder="searc emoji"
                                    class="w-full py-1 px-3 bg-slate-100 border-b-2 text-xs font-thin focus:outline-none"
                                    id="emojiSearch">
                            </div>
                            <ul class="emoji-list flex flex-wrap gap-1" id="emojiList"></ul>
                        </div>
                        <div class="tweet-btn">
                            <button
                                class="py-2 px-8 bg-[#1BBE00] text-white text-sm font-semibold rounded-full">Tweet</button>
                        </div>
                    </div>
                </div>

                {{-- delimiter between tweet place and posts place --}}
                <div class="section delimiter p-1 bg-slate-400"></div>


                {{-- posts place --}}
                <div class="posts px-2 py-3 border-b-2 border-b-slate-400">
                    <div class="post-user flex items-center">
                        <img src="../images/user.png" alt="" class="w-11 h-11 mr-3">
                        <p class="text-sm font-medium mr-1">Brie</p>
                        <p class="text-xs text-[#9A9A9A]">@blabla</p>
                    </div>
                    <div class="post-description">
                        <p class="text-sm pl-14 -mt-2">Lorem ipsum dolor, sit amet consectetur adipisicing
                            elit.
                            Tenetur
                            aperiam,
                            natus ipsum maxime
                            adipisci velit a repellendus magnam ut voluptates.
                    </div>
                    <div class="post-extra-options flex justify-center items-center gap-20 mt-4 pl-14">
                        <div class="comment-container flex items-center w-[30.44px]">
                            <img src="../images/comment-logo.png" alt="" class="w-4 h-4 cursor-pointer">
                        </div>
                        {{-- <div class="refresh-container flex items-center w-[30.44px]">
                            <img src="../images/refresh-logo.png" alt="" class="w-4 h-4 cursor-pointer">
                        </div> --}}
                        <div class="like-container flex justify-between items-center w-[30.44px]">
                            <img src="../images/like.png" alt="" class="w-4 h-4 cursor-pointer">
                            <img src="../images/like-fill.png" alt="" class="w-4 h-4 cursor-pointer hidden">
                            <p class="font-medium leading-4 scale-x-0 duration-200 transition-transform"></p>
                        </div>
                        {{-- <div class="upload-container flex items-center w-[30.44px]">
                            <img src="../images/upload-logo.png" alt="" class="w-4 h-4 cursor-pointer">
                        </div> --}}
                    </div>
                    <div class="comment-section hidden">
                        <input type="text" placeholder="comment here..."
                            class="border-b border-black w-10/12 ml-14 text-sm focus:outline-none">
                        <span class="cursor-pointer"><i data-feather="send" class="w-4 mt-3 ml-2"></i></span>
                    </div>
                </div>
                <div class="posts px-2 py-3 border-b-2 border-b-slate-400">
                    <div class="post-user  flex items-center">
                        <img src="../images/user.png" alt="" class="w-11 h-11 mr-3">
                        <p class="text-sm font-medium mr-1">Brie</p>
                        <p class="text-xs text-[#9A9A9A]">@blabla</p>
                    </div>
                    <div class="post-description">
                        <p class="text-sm pl-14 -mt-2">Lorem ipsum dolor, sit amet consectetur adipisicing
                            elit.
                            Tenetur
                            aperiam,
                            natus ipsum maxime
                            adipisci velit a repellendus magnam ut voluptates.</p>
                        <img src="../images/image-post.jpg" alt=""
                            class="pl-14 w-[585px] h-[270px] overflow-hidden my-2">
                    </div>
                    <div class="post-extra-options flex justify-center items-center gap-20 mt-4 pl-14">
                        <div class="comment-container flex items-center w-[30.44px]">
                            <img src="../images/comment-logo.png" alt="" class="w-4 h-4 cursor-pointer">
                        </div>
                        {{-- <div class="refresh-container flex items-center w-[30.44px]">
                            <img src="../images/refresh-logo.png" alt="" class="w-4 h-4 cursor-pointer">
                        </div> --}}
                        <div class="like-container flex justify-between items-center w-[30.44px]">
                            <img src="../images/like.png" alt="" class="w-4 h-4 cursor-pointer">
                            <img src="../images/like-fill.png" alt="" class="w-4 h-4 cursor-pointer hidden">
                            <p class="font-medium leading-4 scale-x-0 delay-100 transition-transform"></p>
                        </div>
                        {{-- <div class="upload-container flex items-center w-[30.44px]">
                            <img src="../images/upload-logo.png" alt="" class="w-4 h-4 cursor-pointer">
                        </div> --}}
                    </div>
                </div>

                {{-- socmed share overlay --}}
                <div class="socmed-overlay absolute top-1/3 w-full h-28 bg-gray-50 p-4 rounded-lg z-30 scale-x-0">
                    <div class="close-socmed-overlay absolute -right-1 -top-1 cursor-pointer">
                        <i data-feather="x-circle"></i>
                    </div>
                    <h2 class="text-xl font-semibold text-gray-600 mb-2 ">Share Via :</h2>
                    <hr class="mb-4">
                    <div class="socmed-container flex justify-center items-center gap-8">
                        <a href="#" class="facebook-btn inline-block">
                            <i class="fa-brands fa-facebook fa-2xl text-blue-500"></i>
                        </a>

                        <a href="#" class="twitter-btn">
                            <i class="fa-brands fa-twitter fa-2xl text-blue-300"></i>
                        </a>

                        <a href="#" class="linkedin-btn">
                            <i class="fa-brands fa-linkedin fa-2xl text-blue-600"></i>
                        </a>

                        <a href="#" class="whatsapp-btn">
                            <i class="fa-brands fa-whatsapp fa-2xl text-green-400"></i>
                        </a>
                    </div>
                </div>
        </main>

        <aside class="side-content bg-[#FAFAFA] absolute top-0 left-[1016px] w-[33.5%] h-full" id="sideContent">

            {{-- search place --}}
            {{-- <div class="search flex items-center mt-8 ml-14" id="searchContainer">
                <img src="../images/search-logo.png" alt="" id="searchIcon"
                    class="absolute w-5 ml-2 cursor-pointer">
                <input type="text" name="" id="globalSearch" placeholder="search"
                    class="bg-[#D7FFE9] py-2 px-8 rounded-full text-sm scale-x-0 transition-transform focus:outline-none placeholder:text-sm placeholder:font-medium placeholder:text-[#9A9A9A] placeholder:pl-1">
                <img src="../images/close-logo.png" id="closeIcon" alt=""
                    class="w-5 -ml-7 cursor-pointer hidden z-10">
            </div> --}}

            {{-- other posts --}}
            {{-- <div class="other-posts-core-container w-[80%] ml-10">
                <div class="other-posts-header mt-5 mb-3">
                    <h2 class="text-[#949494] font-medium">Other Posts</h2>
                </div>
                <div class="other-posts-content-container bg-[#EFEFEF] px-5 pt-5 pb-1 rounded-lg">
                    <div class="other-posts-content wrapper flex border border-black rounded-lg mb-5">
                        <div class="other-posts-content-description text-sm p-2">
                            <h3 class="font-medium mb-1">Football</h3>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi, quia?</p>
                        </div>
                        <div class="other-posts-content-image p-0">
                            <img src="../images/resize-football-image.jpg" alt=""
                                class="w-full h-full rounded-r-lg">
                        </div>
                    </div>
                    <div class="other-posts-content wrapper flex border border-black rounded-lg mb-5">
                        <div class="other-posts-content-description text-sm p-2">
                            <h3 class="font-medium mb-1">Football</h3>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi, quia?</p>
                        </div>
                        <div class="other-posts-content-image p-0">
                            <img src="../images/resize-football-image.jpg" alt=""
                                class="w-full h-full rounded-r-lg">
                        </div>
                    </div>
                    <div class="other-posts-content wrapper flex border border-black rounded-lg mb-5">
                        <div class="other-posts-content-description text-sm p-2">
                            <h3 class="font-medium mb-1">Football</h3>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi, quia?</p>
                        </div>
                        <div class="other-posts-content-image p-0">
                            <img src="../images/resize-football-image.jpg" alt=""
                                class="w-full h-full rounded-r-lg">
                        </div>
                    </div>
                </div>
            </div> --}}

            {{-- follow more people --}}
            <div class="follow-people-core-container w-[80%] mx-auto mt-4 ml-10">
                <div class="follow-people-header mt-5 mb-3">
                    <h2 class="text-[#949494] font-medium">People in this chat app</h2>
                </div>
                <div class="wrap-helper bg-[#EFEFEF] rounded-lg mt-4">
                    <div
                        class="other-posts-content-container bg-white px-5 pt-5 pb-1 rounded-lg flex justify-between flex-wrap cursor-pointer">
                        <div
                            class="follow-people-content-wrapper w-[48%] flex justify-center items-center border border-black rounded-lg mb-5 p-2 gap-3">
                            <div class="follow-people-content-image text-sm">
                                <img src="../images/user.png" alt="" class="w-5 h-5">
                            </div>
                            <div class="follow-people-content-user">
                                <div class="follow-people-content-user-name flex items-center">
                                    <p class="text-xs font-medium mr-1">Brie</p>
                                    <p class="text-xs text-[#9A9A9A]">@blabla</p>
                                </div>
                                <div class="follow-people-content-user-bio-status">
                                    <p class="text-xs">mending</p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="follow-people-content-wrapper w-[48%] flex justify-center items-center border border-black rounded-lg mb-5 p-2 gap-3">
                            <div class="follow-people-content-image text-sm">
                                <img src="../images/user.png" alt="" class="w-5 h-5">
                            </div>
                            <div class="follow-people-content-user">
                                <div class="follow-people-content-user-name flex items-center">
                                    <p class="text-xs font-medium mr-1">Brie</p>
                                    <p class="text-xs text-[#9A9A9A]">@blabla</p>
                                </div>
                                <div class="follow-people-content-user-bio-status">
                                    <p class="text-xs">mending</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
    </div>

    <script src="../js/script.js"></script>
    <script>
        feather.replace()
    </script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
</body>

</html>
