@extends('layouts.master')

@section('title','Store show')

@section('content')

@foreach($song as $item)

        <div class="container">

        {!! Form::open(array('action' => 'CartController@store', 'class'=>'form-horizontal')) !!}
        <div class="row">

            <div class="col-md-8">
                <h3>Title : {{ $item->songTitle }} </h3>
                <h3>Artist : {{ $item->artistName }} </h3>
                <h3>Album : {{ $item->albumName }} </h3>
                <h3>Price :{{ $item->price }}</h3>
                <!-- <form action = "CartController@store" method="POST" class="side-by-side"> --> 

                    {!! csrf_field() !!}
                    <input type="hidden" name="songId" value="{{ $item->songId }}">
                    <input type="hidden" name="songTitle" value="{{ $item->songTitle }}">
                    <input type="hidden" name="price" value="{{ $item->price }}">
                    <input type="submit" class="btn btn-success btn-lg" value="Add to Cart">
                </form>

                <br><br>
            </div> <!-- end col-md-8 -->
            {{!! Form::close() !!}}
        </div> <!-- end row --> 

@endforeach

@stop
