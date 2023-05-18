<!-- Main navigation container -->
<nav class="flex-no-wrap absolute top-0 left-60 flex w-[1296px] items-center justify-between bg-neutral-100 py-2 shadow-md shadow-black/5 dark:bg-neutral-600 dark:shadow-black/10 lg:flex-wrap lg:justify-start lg:py-4"
    data-te-navbar-ref>
    <div class="flex w-[95%] flex-wrap items-center justify-between px-3">
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
            <a href="{{ route('homepage') }}"
                class=" mb-4 mr-2 mt-3 flex items-center text-neutral-900 hover:text-neutral-900 focus:text-neutral-900 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400 lg:mb-0 lg:mt-0"
                href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                    class="bi bi-arrow-left-short md:hidden lg:inline" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"
                        loading="lazy" />
                </svg>
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
                    <img src="@if ($user->image != null) {{ $user->image }} @else ../images/user.png @endif " class="rounded-full" style="height: 25px; width: 25px" alt=""
                        loading="lazy" />
                    <!-- Notification counter -->
                    <span
                        class="absolute -mt-6 ml-4 rounded-[0.37rem] bg-danger px-[0.45em] py-[0.2em] text-[0.6rem] leading-none text-white">1</span>
                </a>
                <!-- Second dropdown menu -->
                <ul class="absolute left-auto right-0 z-[1000] float-left m-0 mt-4 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:bg-neutral-700 [&[data-te-dropdown-show]]:block"
                    aria-labelledby="dropdownMenuButton2" data-te-dropdown-menu-ref>
                    <!-- Second dropdown menu items -->
                    <li>
                        <form class="w-full" method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-white/30"
                                data-te-dropdown-item-ref>Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
