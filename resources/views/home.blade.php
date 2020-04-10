@extends('layouts.app')

@section('content')
    <div class="flex">
        <div class="w-2/12 bg-white shadow my-2 ">
            <ul class="list-reset">
                <li >
                <a href="#" class="block p-4 text-grey-darker font-bold border-purple hover:bg-grey-lighter border-r-4">Home</a>
                </li>
                <li >
                <a href="#" class="block p-4 text-grey-darker font-bold border-grey-lighter hover:border-purple-light hover:bg-grey-lighter border-r-4">About us</a>
                </li>
                <li >
                <a href="#" class="block p-4 text-grey-darker font-bold border-grey-lighter hover:border-purple-light hover:bg-grey-lighter border-r-4">Services</a>
                </li>
                <li >
                <a href="#" class="block p-4 text-grey-darker font-bold border-grey-lighter hover:border-purple-light hover:bg-grey-lighter border-r-4">Contact us</a>
                </li>
            </ul>
        </div>
        <div class="w-full">
            <App></App>
            {{-- <project-timeline /> --}}
        </div>
    </div>
@endsection
