@extends('layouts.master')


@section('content')

<!--Card-->
@foreach($category->products as $product)
@include('card', compact('product'))
@endforeach

@endsection
