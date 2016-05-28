@extends('layouts.master')

@section('title','Store show')

@section('content')
<h3>this is store.show page</h3>


    <div class="container">

        <h1>{{ $song[0]->songTitle}}</h1>

        <hr>
        {!! Form::open(array('action' => 'CartController@store', 'class'=>'form-horizontal')) !!}
        <div class="row">

            <div class="col-md-8">
                <h3>${{ $song[0]->price }}</h3>
                <!-- <form action = "CartController@store" method="POST" class="side-by-side"> --> 

                    {!! csrf_field() !!}
                    <input type="hidden" name="songId" value="{{ $song->songId }}">
                    <input type="hidden" name="songTitle" value="{{ $song->songTitle }}">
                    <input type="hidden" name="price" value="{{ $song->price }}">
                    <input type="submit" class="btn btn-success btn-lg" value="Add to Cart">
                </form>

                <br><br>

                {{ $song[0]->description }}

            </div> <!-- end col-md-8 -->
             {{!! Form::close() !!}}
        </div> <!-- end row -->


@stop
