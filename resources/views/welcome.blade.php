@extends('layouts.app')

@section('content')
<div class="bg-white bg-opacity-50 w-full h-screen pt-8">

    <div class="flex flex-col items-center ">
        <div>

            <H1 class="text-pink text-semibold text-6xl ">Pippa's 40 on 28th May 2021!</H1>
        </div>
        <div class="w-1/2 ">
            <x-input.centered.text />
        </div>
        <div class="w-1/2 text-pink-500">
            <livewire:register.emailcapture />
        </div>
    </div>
</div>
@endsection