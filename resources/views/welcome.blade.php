@extends('layouts.app')

@section('content')
<div class="bg-white bg-opacity-50 w-full h-screen pt-8">

    <div class="flex flex-col items-center space-y-6 pt-8">

        <div>
            <H1 class="text-center font-bold text-pink text-6xl ">SAVE THE DATE – 28th MAY 2021</H1>
        </div>
        <div class="sm:w-1/2 ">
            <x-input.centered.text />
        </div>
        <div class="w-3/4 sm:w-1/4 text-pink-500">
            <livewire:register.emailcapture />
        </div>
    </div>
</div>
@endsection