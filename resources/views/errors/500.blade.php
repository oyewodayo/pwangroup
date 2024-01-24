@extends('errors::minimal')

@section('title', __('Server Error'))
@section('code', '500')
@section('message')
 {{-- {{$exception->getMessage()? :'Server error'}} --}}
 Server error
<div><a href="mailto:help@solomonhills.com" style="color: #4f86f7; text-align:center">Report this</a></div>
@endsection
