@extends('layouts.web.master')
@section('title', 'Blog Details')

@section('content')

    <div class="max-w-[1200px] mx-auto py-12 px-4 max-md:py-8">

        <h2 class="text-2xl font-bold text-center mb-8 text-[#111]">Blog Details</h2>
        <p>{{$slug}}</p>

    </div>

@endsection