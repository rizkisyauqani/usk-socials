@extends('custom-layouts.main-profile')

@section('content')
    <main class="absolute w-[1200px] left-[300px] h-[650px] delay-75 transition-all" id="mainProfile">
        <div class="pl-24 pt-8">
            <h2 class="text-xl text-neutral-600 font-medium text-center mb-4">Navbar Color</h2>
            <div class="flex justify-center gap-6" id="colorContainer">
                <div class="w-4 h-4 bg-green-500 rounded-full"></div>
                <div class="w-4 h-4 bg-blue-500 rounded-full"></div>
                <div class="w-4 h-4 bg-stone-500 rounded-full"></div>
                <div class="w-4 h-4 bg-red-500 rounded-full"></div>
            </div>
        </div>
    </main>
@endsection
