@extends('layouts.app')

@section('content')
<div>

    <div class="flex flex-col items-center ">
        <div class="bg-gray-400 rounded-lg p-2 bg-opacity-50">

            <H1 class="text-pink text-6xl ">Pippa's 40 on 28th May 2021!</H1>
        </div>
        <div class="w-1/2 bg-gray-400 rounded-lg p-2 m-4 bg-opacity-50">
            <x-input.centered.text />
        </div>
        <div class="w-1/2 bg-gray-400 rounded-lg p-2 m-4 bg-opacity-50">
            <livewire:register.emailcapture />
        </div>
    </div>
</div>
@endsection