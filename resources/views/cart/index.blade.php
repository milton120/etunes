@extends('layouts.master')

@section('title','cart page')

@section('content')


    <div class="container">

        <h1>Your Cart</h1>

        <hr>

         @if (session()->has('success_message'))
            <div class="alert alert-success">
                {{ session()->get('success_message') }}
            </div>
        @endif

        @if (session()->has('error_message'))
            <div class="alert alert-danger">
                {{ session()->get('error_message') }}
            </div>
        @endif

        
        @if (sizeof(Cart::content()) > 0)

            <table class="table">
                <thead>
                    <tr>
                        <th>Song Id</th>
                        <th>Title</th>
                        <th>Price</th>
                        <th class="column-spacer"></th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach (Cart::content() as $item)
                    <tr>
                        
                        <!-- <td><a href="{{ url('/cart', [$item->song->songId]) }}">{{ $item->songTitle }}</a></td>
                        <td>${{ $item->subtotal }}</td>
                        <td class=""></td> -->
                        <td>{{ $item->song->songId }}</td>
                        <td>{{ $item->song->songTitle }}</td>
                        <td>{{ $item->song->price }}</td>
                        <td>
                            <form action="{{ url('cart', [$item->rowid]) }}" method="POST" class="side-by-side">
                                {!! csrf_field() !!}
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="submit" class="btn btn-danger btn-sm" value="Remove">
                            </form>
                        </td>
                    </tr>
                    @endforeach

                    <tr class="border-bottom">
                        <td style="padding: 40px;"></td>
                        <td class="small-caps table-bg" style="text-align: right">Your Total</td>
                        <td class="table-bg">${{ Cart::total() }}</td>
                        <td class="column-spacer"></td>
                        <td></td>
                    </tr>

                </tbody>
            </table>

            <a href="{{ route('store.index') }}" class="btn btn-primary btn-lg">Continue Shopping</a> &nbsp;
            <a href="#" class="btn btn-success btn-lg">Proceed to Checkout</a>

        @else

            <h3>You have no items in your shopping cart</h3>
            <a href="{{ route('store.index') }}" class="btn btn-primary btn-lg">Continue Shopping</a>

        @endif

        <div class="spacer"></div>

    </div> <!-- end container -->


@stop