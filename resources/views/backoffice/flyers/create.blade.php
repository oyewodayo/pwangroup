

@extends('layouts.main')

@section('title','Create Estate')

@section('content')
     <!-- Page Heading -->
     {{-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Affiliate</h1>
    </div> --}}

    <!-- Content Row -->

    <div class="row">
        <div class="col-xl-6 mx-auto">
            <div class="mt-2 text-center"><h4> Upload Flyers and Promotions </h4></div>
            <div class="card shadow mb-4">
                <div class="card-body">
                    <form method="POST" action="{{route('backoffice.flyers.store')}}" enctype="multipart/form-data" class="mt-2">
                        @csrf
                        <div>
                            <label for="flyer_name" >Name</label>
                            <input  type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="flyer_name" value="{{old('name')}}" placeholder="Name of flyer" />
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mt-3">
                            <label for="flyer_path">Flyer</label>
                            <input id="flyer_path" name="flyer_path" type="file" class="form-control @error('flyer_path') is-invalid @enderror" required autofocus autocomplete="flyer_path" />
                            
                            @error('flyer_path')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror                        
                        </div>

                        <div class="mt-3">
                            <label for="flyer_type" >Type</label>
                            <select name="type" id="flyer_type" class="form-control">
                                <option value="flyer">Flyer</option>
                                <option value="promo">Promo</option>
                            </select>
                           @error('type')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    
                        <div class="flex items-center gap-4">
                            <button type="submit" onclick="this.form.submit(); this.readonly=true;this.innerHTML=`Saving...`" class="btn btn-primary mt-3">{{ __('Create') }}</button>                          
                        </div>
                    </form>
                   
                </div>
            </div>
        </div> 
        
    </div>

@endsection

