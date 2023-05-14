<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
    <script src="https://cdn.tailwindcss.com/3.3.0"></script>
</head>

<body>
    {{-- tailwindelements --}}


    <!-- Main navigation container -->
    <nav class="flex-no-wrap absolute top-0 left-60 flex w-[1296px] items-center justify-between bg-neutral-100 py-2 shadow-md shadow-black/5 dark:bg-neutral-600 dark:shadow-black/10 lg:flex-wrap lg:justify-start lg:py-4"
        data-te-navbar-ref>
        <div class="flex w-full flex-wrap items-center justify-between px-3">
            <!-- Hamburger button for mobile view -->
            <button
                class="block border-0 bg-transparent px-2 text-neutral-500 hover:no-underline hover:shadow-none focus:no-underline focus:shadow-none focus:outline-none focus:ring-0 dark:text-neutral-200 lg:hidden"
                type="button" data-te-collapse-init data-te-target="#navbarSupportedContent1"
                aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
                <!-- Hamburger icon -->
                <span class="[&>svg]:w-7" id="hamburgerIcon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-7 w-7">
                        <path fill-rule="evenodd"
                            d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
                            clip-rule="evenodd" />
                    </svg>
                </span>
            </button>

            <!-- Collapsible navigation container -->
            <div class="!visible hidden flex-grow basis-[100%] items-center lg:!flex lg:basis-auto z-50"
                id="navbarSupportedContent1" data-te-collapse-item>
                <!-- Logo -->
                <a class=" mb-4 mr-2 mt-3 flex items-center text-neutral-900 hover:text-neutral-900 focus:text-neutral-900 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400 lg:mb-0 lg:mt-0"
                    href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                        class="bi bi-arrow-left-short md:hidden lg:inline" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"
                            loading="lazy" />
                    </svg>
                    {{-- <img src="https://tecdn.b-cdn.net/img/logo/te-transparent-noshadows.webp" style="height: 15px"
                        alt=""  /> --}}
                </a>
                <!-- Left navigation links -->
            </div>

            <!-- Right elements -->
            <div class="relative flex items-center">
                <!-- Cart Icon -->

                <!-- Container with two dropdown menus -->
                <div class="relative" data-te-dropdown-ref>
                    <!-- First dropdown trigger -->
                    <a class="hidden-arrow mr-4 flex items-center text-neutral-500 hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 dark:text-neutral-200 dark:hover:text-neutral-300 dark:focus:text-neutral-300 [&.active]:text-black/90 dark:[&.active]:text-neutral-400"
                        href="#" id="dropdownMenuButton1" role="button" data-te-dropdown-toggle-ref
                        aria-expanded="false">
                        <!-- Dropdown trigger icon -->
                        <span class="[&>svg]:w-5">
                            {{ $user->name }}
                        </span>

                    </a>
                    <!-- First dropdown menu -->
                </div>

                <!-- Second dropdown container -->
                <div class="relative" data-te-dropdown-ref>
                    <!-- Second dropdown trigger -->
                    <a class="hidden-arrow flex items-center whitespace-nowrap transition duration-150 ease-in-out motion-reduce:transition-none"
                        href="#" id="dropdownMenuButton2" role="button" data-te-dropdown-toggle-ref
                        aria-expanded="false">
                        <!-- User avatar -->
                        <img src="{{ $user->image }}" class="rounded-full" style="height: 25px; width: 25px"
                            alt="" loading="lazy" />
                        <!-- Notification counter -->
                        <span
                            class="absolute -mt-6 ml-4 rounded-[0.37rem] bg-danger px-[0.45em] py-[0.2em] text-[0.6rem] leading-none text-white">1</span>
                    </a>
                    <!-- Second dropdown menu -->
                    <ul class="absolute left-auto right-0 z-[1000] float-left m-0 mt-4 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:bg-neutral-700 [&[data-te-dropdown-show]]:block"
                        aria-labelledby="dropdownMenuButton2" data-te-dropdown-menu-ref>
                        <!-- Second dropdown menu items -->
                        <li>
                            <a class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-white/30"
                                href="#" data-te-dropdown-item-ref>Action</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- Sidenav -->
    <nav id="sidenav-3"
        class="fixed left-0 top-0 z-[1035] h-screen w-60 -translate-x-full overflow-hidden bg-zinc-800 shadow-[0_4px_12px_0_rgba(0,0,0,0.07),_0_2px_4px_rgba(0,0,0,0.05)] data-[te-sidenav-hidden='false']:translate-x-0"
        data-te-sidenav-init data-te-sidenav-hidden="false" data-te-sidenav-color="white">
        <ul class="relative m-0 list-none px-[0.2rem]" data-te-sidenav-menu-ref>
            <li class="relative">
                <a class="flex h-12 cursor-pointer items-center truncate rounded-[5px] px-6 py-4 text-[0.875rem] text-gray-300 outline-none transition duration-300 ease-linear hover:bg-white/10 hover:outline-none focus:bg-white/10 focus:outline-none active:bg-white/10 active:outline-none data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none"
                    data-te-sidenav-link-ref>
                    <span class="mr-4 [&>svg]:h-4 [&>svg]:w-4 [&>svg]:text-gray-400 dark:[&>svg]:text-gray-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                            class="bi bi-person-gear" viewBox="0 0 16 16">
                            <path
                                d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm.256 7a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Zm3.63-4.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382l.045-.148ZM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0Z" />
                        </svg>
                    </span>
                    <span>Account Settings</span>
                </a>
            </li>
            <li class="relative">
                <a href="{{ route('profile') }}"
                    class="flex h-12 cursor-pointer items-center truncate rounded-[5px] px-6 py-4 text-[0.875rem] text-gray-300 outline-none transition duration-300 ease-linear hover:bg-white/10 hover:outline-none focus:bg-white/10 focus:outline-none active:bg-white/10 active:outline-none data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none"
                    data-te-sidenav-link-ref>
                    <span class="mr-4 [&>svg]:h-4 [&>svg]:w-4 [&>svg]:text-gray-400 dark:[&>svg]:text-gray-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                            class="bi bi-caret-right" viewBox="0 0 16 16">
                            <path
                                d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z" />
                        </svg>
                    </span>
                    <span>Profile</span>
                    {{-- <span
                        class="absolute right-0 ml-auto mr-[0.8rem] transition-transform duration-300 ease-linear motion-reduce:transition-none [&>svg]:text-gray-600 dark:[&>svg]:text-gray-300"
                        data-te-sidenav-rotate-icon-ref>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
                            <path fill-rule="evenodd"
                                d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                clip-rule="evenodd" />
                        </svg>
                    </span> --}}
                </a>
            </li>
            <li class="relative">
                <a class="flex h-12 cursor-pointer items-center truncate rounded-[5px] px-6 py-4 text-[0.875rem] text-gray-300 outline-none transition duration-300 ease-linear hover:bg-white/10 hover:outline-none focus:bg-white/10 focus:outline-none active:bg-white/10 active:outline-none data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none"
                    data-te-sidenav-link-ref>
                    <span class="mr-4 [&>svg]:h-4 [&>svg]:w-4 [&>svg]:text-gray-400 dark:[&>svg]:text-gray-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                            class="bi bi-caret-right" viewBox="0 0 16 16">
                            <path
                                d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z" />
                        </svg>
                    </span>
                    <span>Preferences</span>
                    {{-- <span
                        class="absolute right-0 ml-auto mr-[0.8rem] transition-transform duration-300 ease-linear motion-reduce:transition-none [&>svg]:text-gray-600 dark:[&>svg]:text-gray-300"
                        data-te-sidenav-rotate-icon-ref>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
                            <path fill-rule="evenodd"
                                d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                clip-rule="evenodd" />
                        </svg>
                    </span> --}}
                </a>
            </li>
        </ul>
    </nav>
    <!-- Sidenav -->

    <!-- Toggler -->
    <button
        class="inline-block w-60 bg-primary px-6 py-[17px] text-xs font-medium uppercase leading-tight text-white shadow-md transition duration-150 ease-in-out hover:bg-primary-700 hover:shadow-lg focus:bg-primary-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-primary-800 active:shadow-lg"
        data-te-sidenav-toggle-ref data-te-target="#sidenav-3" aria-controls="#sidenav-3" aria-haspopup="true">
        <span class="block [&>svg]:h-7 [&>svg]:w-7 [&>svg]:text-white">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                class="h-5 w-5 block mx-auto">
                <path fill-rule="evenodd"
                    d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
                    clip-rule="evenodd" />
            </svg>
        </span>
    </button>
    <!-- Toggler -->













    {{-- <aside class="absolute top-0 left-0 w-[396px] h-full pt-12 px-12 border-2 border-slate-100">
        <div class="flex items-center gap-3">
            <span><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                    class="bi bi-person-gear" viewBox="0 0 16 16">
                    <path
                        d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm.256 7a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Zm3.63-4.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382l.045-.148ZM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0Z" />
                </svg></span>
            <span class="text-2xl font-semibold">Account Settings</span>
        </div>
        <div class="mt-7 px-12">
            <a href="#" class="flex items-center gap-2 mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                    class="bi bi-caret-right" viewBox="0 0 16 16">
                    <path
                        d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z" />
                </svg>
                <p class="font-semibold text-lg">Profile</p>
            </a>
            <a href="#" class="flex items-center gap-2 mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                    class="bi bi-caret-right" viewBox="0 0 16 16">
                    <path
                        d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z" />
                </svg>
                <p class="font-semibold text-lg">Change Password</p>
            </a>
            <a href="#" class="flex items-center gap-2 mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                    class="bi bi-caret-right" viewBox="0 0 16 16">
                    <path
                        d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z" />
                </svg>
                <p class="font-semibold text-lg">Preferences</p>
            </a>
            <a href="{{ route('profile-page-delete') }}" class="flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                    class="bi bi-caret-right" viewBox="0 0 16 16">
                    <path
                        d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z" />
                </svg>
                <p class="font-semibold text-lg">Delete Accout</p>
            </a>
        </div>
    </aside> --}}
    <main class="absolute w-[1200px] left-[300px] h-[650px] delay-75 transition-all" id="mainProfile">
        {{-- <div class="flex justify-between items-center bg-slate-400 px-3 py-2">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor"
                    class="bi bi-arrow-left-short" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z" />
                </svg>
            </span>
            <span class="flex items-center gap-2">
                <img src="{{ $user->image }}" width="25" height="25">
                <p class="font-medium">Name</p>
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                    class="bi bi-caret-down mt-[6px] ml-1" viewBox="0 0 16 16">
                    <path
                        d="M3.204 5h9.592L8 10.481 3.204 5zm-.753.659 4.796 5.48a1 1 0 0 0 1.506 0l4.796-5.48c.566-.647.106-1.659-.753-1.659H3.204a1 1 0 0 0-.753 1.659z" />
                </svg>
            </span>
        </div> --}}
        <div class="pl-24 pt-8">
            <form action="{{ route('profile-edit') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <span class="flex items-center mb-7 ">
                    <label class="font-semibold w-20">Name</label>
                    <p class="font-semibold text-xl ml-60 mr-4">:</p>
                    <input type="text"
                        class="text-sm w-80 mt-1 px-2 py-[6px] bg-slate-200 rounded-md focus:outline-none"
                        value="{{ $user->name }}" name="name">
                </span>
                <span class="flex items-center mb-7">
                    <label class="font-semibold w-20">Username</label>
                    <p class="font-semibold text-xl ml-60 mr-4">:</p>
                    <input type="text"
                        class="text-sm w-80 mt-1 px-2 py-[6px] bg-slate-200 rounded-md focus:outline-none"
                        name="username" value="{{ $user->username }}">
                </span>
                <span class="flex items-center mb-7">
                    <label class="font-semibold w-20">Hp</label>
                    <p class="font-semibold text-xl ml-60 mr-4">:</p>
                    <input type="number"
                        class="text-sm w-80 mt-1 px-2 py-[6px] bg-slate-200 rounded-md focus:outline-none"
                        name="hp" value="{{ $user->hp }}">
                </span>
                <span class="flex items-center mb-7">
                    <label class="font-semibold w-20">Address</label>
                    <p class="font-semibold text-xl ml-60 mr-4">:</p>
                    <input type="text"
                        class="text-sm w-80 mt-1 px-2 py-[6px] bg-slate-200 rounded-md focus:outline-none"
                        name="address" value="{{ $user->address }}">
                </span>
                <span class="flex items-center">
                    <label class="font-semibold w-20">Image</label>
                    <p class="font-semibold text-xl ml-60 mr-4">:</p>
                    <input type="file" name="image">
                </span>
        </div>
        <div class="absolute bottom-8 right-14" id="formButtons">
            <!-- Button trigger modal -->
            <span class="bg-green-400 text-white font-semibold py-1.5 px-6 rounded-2xl cursor-pointer"
                data-te-toggle="modal" data-te-target="#exampleModal" data-te-ripple-init
                data-te-ripple-color="light">save</span>
            <span class="bg-red-400 text-white font-semibold py-1.5 px-4 rounded-2xl ml-3 cursor-pointer"
                data-te-toggle="modal" data-te-target="#exampleModalCenter" data-te-ripple-init>cancel</span>
        </div>
        <!-- Modal -->
        <div data-te-modal-init
            class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
            id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div data-te-modal-dialog-ref
                class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px]">
                <div
                    class="min-[576px]:shadow-[0_0.5rem_1rem_rgba(#000, 0.15)] pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
                    <div
                        class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                        <!--Modal title-->
                        <h5 class="text-xl font-medium leading-normal text-neutral-800 dark:text-neutral-200"
                            id="exampleModalLabel">
                            Modal title
                        </h5>
                        <!--Close button-->
                        <button type="button"
                            class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                            data-te-modal-dismiss aria-label="Close">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>

                    <!--Modal body-->
                    <div class="relative flex-auto p-4" data-te-modal-body-ref>
                        Modal body text goes here.
                    </div>

                    <!--Modal footer-->
                    <div
                        class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                        <button type="button"
                            class="inline-block rounded bg-primary-100 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:bg-primary-accent-100 focus:bg-primary-accent-100 focus:outline-none focus:ring-0 active:bg-primary-accent-200"
                            data-te-modal-dismiss data-te-ripple-init data-te-ripple-color="light">
                            Close
                        </button>
                        <button type="submit"
                            class="ml-1 inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                            data-te-ripple-init data-te-ripple-color="light">
                            Save changes
                        </button>
                    </div>
                </div>
            </div>
        </div>
        </form>

        <!--Verically centered modal-->
        <div data-te-modal-init
            class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
            id="exampleModalCenter" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-modal="true"
            role="dialog">
            <div data-te-modal-dialog-ref
                class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-auto translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:min-h-[calc(100%-3.5rem)] min-[576px]:max-w-[500px]">
                <div
                    class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
                    <div
                        class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                        <!--Modal title-->
                        <h5 class="text-xl font-medium leading-normal text-neutral-800 dark:text-neutral-200"
                            id="exampleModalScrollableLabel">
                            Modal title
                        </h5>
                        <!--Close button-->
                        <button type="button"
                            class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                            data-te-modal-dismiss aria-label="Close">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>

                    <!--Modal body-->
                    <div class="relative p-4">
                        <p>Are you sure want to delete the filled form fields?</p>
                    </div>

                    <!--Modal footer-->
                    <div
                        class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                        <button type="button"
                            class="inline-block rounded bg-primary-100 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:bg-primary-accent-100 focus:bg-primary-accent-100 focus:outline-none focus:ring-0 active:bg-primary-accent-200"
                            data-te-modal-dismiss data-te-ripple-init data-te-ripple-color="light">
                            No
                        </button>
                        <button type="button" id="deleteFields"
                            class="ml-1 inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                            data-te-modal-dismiss data-te-ripple-init data-te-ripple-color="light">
                            Yes
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>

    <script src="../js/profile.js"></script>
</body>

</html>
