@extends('layouts.app')

@section('content')
            <App company="{{ auth()->user() }}"/>

            {{-- <project-timeline /> --}}
@endsection
