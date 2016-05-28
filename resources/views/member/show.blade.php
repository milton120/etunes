@extends('layouts.master')

@section('title','show edit')

@section('content')

    <div class="container">

        <h1>Profile</h1>

        <hr>

         @if (session()->has('success_message'))
            <div class="alert alert-success">
                {{ session()->get('success_message') }}
            </div>
        @endif

        <h3>Name : {{ $member->memberName }}</h3>
        <h3>Email : {{ $member->email }} </h3>
        <hr>

         <a href="{{ url('/').'/'.'member/'.$member->memberId.'/edit' }}" class="btn btn-primary btn-lg">Update Profile</a>

   	</div>

@stop