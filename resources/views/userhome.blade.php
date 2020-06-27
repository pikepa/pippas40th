@extends('layouts.app')

@section('content')
<div class="container mx-auto flex items-center">
    <div class="w-full">

        @if (session('status'))
        <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
            {{ session('status') }}
        </div>
        @endif

        <div class="flex flex-col break-words bg-white border border-2 rounded shadow-md">

            <div class="font-semibold bg-gray-200 text-gray-700 py-3 px-6 mb-0">
                User Dashboard
            </div>

            <div class="w-full p-6">
            </div>
        </div>
    </div>
</div>
@endsection