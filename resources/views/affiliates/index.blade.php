

@extends('layouts.main')

@section('title','All Affiliates')

@section('content')
     <!-- Page Heading -->
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Affiliate</h1>
    </div>

    <!-- Content Row -->
    @include('errors.error_message')
    <div class="row">
      @forelse ($affiliates as $affiliate)
      <div class=" col-md-4 mb-5">
        <div class="card">
         
          <div class="" style="height:240px; background: url({{asset($affiliate->art_design)}}); -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
          background-position: center;
          background-size: cover;">
           <div class="calendar" style="background-color: #000000;opacity:0.4; padding:10px;height:60px;position: absolute;width:100%;border-radius:5px">

           </div>
           <div class="calendar float-right" style="z-index:2;padding:5px;position:relative">
             <img src="{{asset($affiliate->logo)}}" alt="{{$affiliate->name}}" width="120px">
           </div>
        
          </div>
          <div class="card-body">
            <div><h4> {{$affiliate->name}} </h4></div>
            <p class="mb-5">
              {{$affiliate->description}}
            </p>

            <div class="footer mt-3">
              <div class="time">
                <div><i class="fas fa-globe fa-fw"></i><a href="{{ $affiliate->website }}" target="new"> {{ $affiliate->website }}</a></div>
              </div>
              <div class="comments">
                <div><i class="fas fa-phone fa-fw"></i> {{ is_null($affiliate->phones)?'':json_decode($affiliate->phones)->phone1 }}</div>
              </div>

              <div class="d-flex justify-content-between">
                <div class="mt-4">
                  Status: 
                  @switch($affiliate->status)
                    @case(1)
                      <span class="text-success">Active</span>
                      @break
                    @case(0)
                      <span class="text-danger">Inactive</span>
                      @break
                  
                    @default
                      
                  @endswitch
                </div>

                <div class="mt-4 d-flex">
                  <a href="{{route('backoffice.affiliates.edit',['name'=>$affiliate->name,'id'=>$affiliate->id])}}" class="btn btn-primary btn-sm mr-1">Edit</a>
                  <a href="#" data-toggle="modal" data-target="#delete-affiliate" class="btn btn-danger btn-sm mr-1">Delete</a>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="modal fade" id="delete-affiliate" role="dialog" data-backdrop="static" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="text-bold-900 text-primary">Affiliate.</h5>
                   
                    <button type="button" class="close text-danger" data-dismiss="modal">
                        <span class='bx bx-x bx-sm text-danger'></span>
                    </button>
                 
                </div>
                <div class="modal-body">
                    <div>
                        Are you sure you want to delete  <span class="text-primary">{{$affiliate->name}}</span>?
                    </div>
                </div>

                <div class="modal-footer">
                    {{-- @csrf --}}
                    <button type="button" class="btn  btn-sm btn-light-secondary" data-dismiss="modal">                    
                        Close
                    </button>  
                    <form action="{{route('backoffice.affiliates.destroy',$affiliate->id)}}" method="post">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                    </form>                 
                </div>
            </div>
        </div>
      </div>
      @empty
        
      @endforelse   
    </div>
@endsection

