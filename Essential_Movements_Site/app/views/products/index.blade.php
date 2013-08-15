@extends('layouts.master')
@section('container')
	@foreach($products as $product)
		{{ $product->id }} 
	@endforeach
@stop