<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <aside class="absolute top-0 left-0 w-[396px] h-full pt-12 px-12 border-2 border-slate-100">
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
    </aside>
    <main class="absolute left-[396px] w-[1139px] h-full">
        <div class="flex justify-between items-center bg-slate-400 px-3 py-2">
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
        </div>
        <div class="pl-24 pr-10 pt-8">
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
        <div class="absolute bottom-8 right-14">
            <button type="submit" class="bg-green-400 text-white font-semibold py-1 px-6 rounded-2xl">save</button>
            <button class="bg-red-400 text-white font-semibold py-1 px-4 rounded-2xl ml-3">cancel</button>
        </div>
        </form>
    </main>
</body>

</html>
