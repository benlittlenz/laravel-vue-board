@extends('layouts.app')

@section('content')
            <App company="{{ auth()->user()->company_id }}"></App>

            {{-- <project-timeline /> --}}
@endsection
