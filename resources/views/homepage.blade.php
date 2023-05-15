<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/39b7581ae8.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/feather-icons"></script>
</head>

<body>
    <div class="overlay absolute top-0 left-0 bg-gray-600 z-20 opacity-50"></div>

    <div class="container relative flex">

        {{-- sidebar --}}
        <aside class="sidebar absolute top-0 left-0 h-full w-96 bg-[#FAFAFA]">
            <h2 class="text-[#1BBE00] mt-10 mb-12 pl-20 text-2xl font-bold">USK <span
                    class="text-[#FFD600]">SOCIALS</span>
            </h2>
            <ul>
                <li class="flex ml-20 mb-6 gap-4">
                    <img src="../images/home-logo.png" class="w-6 h-6">
                    <a href="/homepage" class="font-bold">Home</a>
                </li>
                <li class="flex ml-20 mb-6 gap-4">
                    <img src="../images/explore-logo.png" alt="" class="w-6 h-6">
                    <a href="/explore" class="font-bold">Explore</a>
                </li>
                <li class="flex ml-20 mb-6 gap-4">
                    <img src="../images/notif-logo.png" alt="" class="w-6 h-6">
                    <a href="/notif" class="font-bold">Notifications</a>
                </li>
                <li class="flex ml-20 mb-6 gap-4">
                    <img src="../images/message-icon.png" alt="" class="w-6 h-6">
                    <a href="/messages" class="font-bold">Messages</a>
                </li>
                <li class="dropdown-btn flex ml-20 mb-6 gap-4">
                    <img src="../images/more-logo.png" alt="" class="w-6 h-6">
                    <a href="#" class="font-bold">More</a>
                </li>
                <li class="dropdown-container hidden">
                    <ul class="dropdown-menu ml-28 mb-6 ">
                        <li class="flex gap-4 mb-2">
                            <img src="../images/person-setting-logo.png" alt="" class="w-6 h-6">
                            <a href="/dashboard-profile" class="font-bold">Account</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <button class="ml-[66px] py-2 px-16 bg-[#1BBE00] rounded-full text-white font-bold">Tweet</button>
        </aside>

        <main class="w-[637px] bg-[#FAFAFA] relative left-[384px]">
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
                        <textarea placeholder="What's happening?" name="" id="" cols="80" rows="3"
                            class="text-sm resize-none bg-[#FAFAFA] border-b placeholder:pt-5 placeholder:font-medium focus:outline-none text-left focus:placeholder:text-left"></textarea>
                        {{-- <input type="text" placeholder="What's happening?"
                            class="text-sm bg-[#FAFAFA] border-b w-10/12 focus:outline-none placeholder:font-medium focus:placeholder:opacity-0"> --}}
                    </div>
                    <div class="extra-options-container flex justify-between items-center pl-14 pr-4">
                        <div class="extra-options-content flex gap-6" id="extraOptions">
                            <img src="../images/image-logo.png" alt="post image" class="w-4 h-4 cursor-pointer">
                            <img src="../images/gif-logo.png" alt="post gif" class="w-4 h-4 cursor-pointer"
                                id="gifSelectorIcon">
                            <img src="../images/text-left-logo.png" alt="text alignment" class="w-4 h-4 cursor-pointer">
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
                            adipisci velit a repellendus magnam ut voluptates. <span
                                class="text-blue-400">#heregoesnthing</span></p>
                    </div>
                    <div class="post-extra-options flex items-center gap-20 mt-4 pl-14">
                        <div class="comment-container flex items-center w-[30.44px]">
                            <img src="../images/comment-logo.png" alt="" class="w-4 h-4 cursor-pointer">
                        </div>
                        <div class="refresh-container flex items-center w-[30.44px]">
                            <img src="../images/refresh-logo.png" alt="" class="w-4 h-4 cursor-pointer">
                        </div>
                        <div class="like-container flex justify-between items-center w-[30.44px]">
                            <img src="../images/like.png" alt="" class="w-4 h-4 cursor-pointer">
                            <img src="../images/like-fill.png" alt="" class="w-4 h-4 cursor-pointer hidden">
                            <p class="font-medium leading-4 scale-x-0 duration-200 transition-transform"></p>
                        </div>
                        <div class="upload-container flex items-center w-[30.44px]">
                            <img src="../images/upload-logo.png" alt="" class="w-4 h-4 cursor-pointer">
                        </div>
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
                            adipisci velit a repellendus magnam ut voluptates. <span
                                class="text-blue-400">#heregoesnthing</span></p>
                        <img src="../images/image-post.jpg" alt=""
                            class="pl-14 w-[585px] h-[270px] overflow-hidden my-2">
                    </div>
                    <div class="post-extra-options flex items-center gap-20 mt-4 pl-14">
                        <div class="comment-container flex items-center w-[30.44px]">
                            <img src="../images/comment-logo.png" alt="" class="w-4 h-4 cursor-pointer">
                        </div>
                        <div class="refresh-container flex items-center w-[30.44px]">
                            <img src="../images/refresh-logo.png" alt="" class="w-4 h-4 cursor-pointer">
                        </div>
                        <div class="like-container flex justify-between items-center w-[30.44px]">
                            <img src="../images/like.png" alt="" class="w-4 h-4 cursor-pointer">
                            <img src="../images/like-fill.png" alt="" class="w-4 h-4 cursor-pointer hidden">
                            <p class="font-medium leading-4 scale-x-0 delay-100 transition-transform"></p>
                        </div>
                        <div class="upload-container flex items-center w-[30.44px]">
                            <img src="../images/upload-logo.png" alt="" class="w-4 h-4 cursor-pointer">
                        </div>
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
            <div class="search flex items-center mt-8 ml-14" id="searchContainer">
                <img src="../images/search-logo.png" alt="" id="searchIcon"
                    class="absolute w-5 ml-2 cursor-pointer">
                <input type="text" name="" id="globalSearch" placeholder="search"
                    class="bg-[#D7FFE9] py-2 px-8 rounded-full text-sm scale-x-0 transition-transform focus:outline-none placeholder:text-sm placeholder:font-medium placeholder:text-[#9A9A9A] placeholder:pl-1">
                <img src="../images/close-logo.png" id="closeIcon" alt=""
                    class="w-5 -ml-7 cursor-pointer hidden z-10">
            </div>

            {{-- other posts --}}
            <div class="other-posts-core-container w-[80%] ml-10">
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
            </div>

            {{-- follow more people --}}
            <div class="follow-people-core-container w-[60%] ml-10">
                <div class="follow-people-header mt-5 mb-3">
                    <h2 class="text-[#949494] font-medium">Follow More People</h2>
                </div>
                <div class="wrap-helper bg-[#EFEFEF] rounded-lg">
                    <div class="other-posts-content-container px-5 pt-5 pb-1 rounded-lg flex">
                        <div
                            class="follow-people-content-wrapper w-[70%] flex justify-between items-center border border-black rounded-lg mb-3 p-2">
                            <div class="follow-people-content-image text-sm">
                                <img src="../images/user.png" alt="" class="w-9 h-9">
                            </div>
                            <div class="follow-people-content-user">
                                <div class="follow-people-content-user-name flex items-center">
                                    <p class="text-sm font-medium mr-1">Brie</p>
                                    <p class="text-xs text-[#9A9A9A]">@blabla</p>
                                </div>
                                <div class="follow-people-content-user-bio-status">
                                    <p class="text-sm">mending</p>
                                </div>
                            </div>
                            <div class="add-btn">
                                <img src="../images/add-logo.png" alt="" class="w-7 h-7">
                            </div>
                        </div>
                        <div class="user-status mt-1 ml-4">
                            <p>Status</p>
                            <div class="user-status-icon flex items-center px-1 ">
                                <img src="../images/ellipse-on-logo.png" alt="" class="w-2">
                                <p class="text-sm text-[#5FE449] ml-1">On</p>
                            </div>
                        </div>
                    </div>
                    <div class="other-posts-content-container bg-[#EFEFEF] px-5 pt-5 pb-1 rounded-lg flex">
                        <div
                            class="follow-people-content-wrapper w-[70%] flex justify-between items-center border border-black rounded-lg mb-5 p-2">
                            <div class="follow-people-content-image text-sm">
                                <img src="../images/user.png" alt="" class="w-9 h-9">
                            </div>
                            <div class="follow-people-content-user">
                                <div class="follow-people-content-user-name flex items-center">
                                    <p class="text-sm font-medium mr-1">Brie</p>
                                    <p class="text-xs text-[#9A9A9A]">@blabla</p>
                                </div>
                                <div class="follow-people-content-user-bio-status">
                                    <p class="text-sm">mending</p>
                                </div>
                            </div>
                            <div class="add-btn">
                                <img src="../images/add-logo.png" alt="" class="w-7 h-7">
                            </div>
                        </div>
                        <div class="user-status mt-1 ml-4">
                            <p>Status</p>
                            <div class="user-status-icon flex items-center px-1 ">
                                <img src="../images/ellipse-on-logo.png" alt="" class="w-2">
                                <p class="text-sm text-[#5FE449] ml-1">On</p>
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
</body>

</html>
