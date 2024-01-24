

@extends('layouts.main')

@section('title','Uploaded flyers')

@section('content')
     <!-- Page Heading -->
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Flyers</h1>
    </div>

    <!-- Content Row -->

    <div class="row">
        @include('errors.error_message')
        @forelse ( $flyers as $flyer )
          <div class="col-md-4 mb-3">               
            <img src="{{asset($flyer->flyer_path)}}" width="97%" title="{{$flyer->name??'Flyers'}}" alt="{{$flyer->name??'Flyers'}}">
            
            <a href="#" data-toggle="modal" data-target="#delete-flyer-{{$flyer->id}}" class="btn btn-danger mr-3 mt-1">Delete</a>
            
            @if ($flyer->status == 1)
            <a href="#" data-toggle="modal" data-target="#status-flyer-{{$flyer->id}}" class="btn btn-outline-danger mt-1">Disable</a>
            @else
            <a href="#" data-toggle="modal" data-target="#status-flyer-{{$flyer->id}}" class="btn btn-outline-info mt-1">Enable</a>
            @endif
         
          </div>

          @include('backoffice.flyers.delete')
          @include('backoffice.flyers.status')
        @empty
          <div class="col-md-6 mx-auto text-center mb-5">               
              No Flyers or Promo found
          </div>
        @endforelse        
    </div>
@endsection

