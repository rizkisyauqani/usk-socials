<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-neutral-900 opacity-90">
    <div
        class="p-2 mt-20 lg:mt-14 mx-auto w-8/12 lg:w-4/12 block rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700 z-50 dark:bg-opacity-[0.98]">
        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="white"
                class="bi bi-arrow-left ml-4 mb-3" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
            </svg></a>
        <a href="#!">
            <img class="w-20 h-20 lg:w-24 lg:h-24 block mx-auto overflow-hidden rounded-full"
                src="https://tecdn.b-cdn.net/img/new/standard/nature/184.jpg" alt="" />
        </a>
        <div class="p-6">
            <h5
                class="mb-2 text-base lg:text-xl text-center font-medium leading-tight text-neutral-800 dark:text-neutral-50">
                Nama
            </h5>
            <p class="mb-8 text-sm lg:text-base text-neutral-600 dark:text-neutral-100">
                status bio Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis libero nobis voluptate
                magnam veritatis. Illum.
            </p>

            {{-- postingan --}}
            <div class="grid grid-cols-4 mb-3">
                <div class="col-span-3">
                    <div data-te-spy="scroll" data-te-target="#scrollspy1" data-te-offset="200"
                        class="relative h-48 overflow-auto">
                        <section id="example-1">
                            <h3 class="pb-3 pt-5 text-base lg:text-xl text-neutral-50 font-semibold">Post 1</h3>
                            <p class="text-sm lg:text-base text-neutral-100">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore
                                earum natus vel minima quod error maxime, molestias ut. Fuga
                                dignissimos nisi nemo necessitatibus quisquam obcaecati et
                                reiciendis quaerat accusamus numquam.
                            </p>
                            <p class="text-sm lg:text-base text-neutral-100">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore
                                earum natus vel minima quod error maxime, molestias ut. Fuga
                                dignissimos nisi nemo necessitatibus quisquam obcaecati et
                                reiciendis quaerat accusamus numquam.
                            </p>
                        </section>
                    </div>
                </div>

                <div>
                    <!-- Scrollspy -->
                    <div id="scrollspy1" class="sticky-top pl-3 text-sm">
                        <ul data-te-nav-list-ref>
                            <li class="py-1">
                                <a data-te-nav-link-ref data-te-nav-link-active
                                    class="bg-transparent px-[5px] text-neutral-600 shadow-none dark:text-neutral-200"
                                    href="#example-1">Post 1</a>
                            </li>
                    </div>
                    <!-- Scrollspy -->
                </div>
            </div>

            <div class="flex justify-between items-center mt-8">
                <span type="button"
                    class="inline-block rounded bg-primary px-6 pb-1.5 pt-1.5 text-xs font-medium uppercase leading-normal text-white cursor-pointer shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                    data-te-ripple-init data-te-ripple-color="light">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-chat-left-text" viewBox="0 0 16 16">
                        <path
                            d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                        <path
                            d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
                    </svg>
                </span>
                <span class="text-[#1BBE00] text-lg">USK <span class="text-[#FFD600]">SOCIALS</span></span>
            </div>
        </div>
    </div>

    <div
        class="bg-yellow-300 absolute top-24 lg:top-20 left-[15%] lg:left-[32.5%] w-[70%] h-[545px] md:h-[530px] lg:w-[35%] lg:h-[567px] 2xl:h-[547px] -z-30 rounded-lg">
    </div>

    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>

</body>

</html>
