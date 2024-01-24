

@extends('layouts.main')

@section('title','Create Department')

@section('content')
     <!-- Page Heading -->
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Department</h1>
    </div>

    <!-- Content Row -->

    <div class="row">
        <div class="col-xl-6 mx-auto">
            <div class="mt-2 text-center"><h4> Create New Departments</h4></div>
            <div class="card shadow mb-4">
                <div class="card-body">
                    <form method="POST" action="{{route('backoffice.department.store')}}" enctype="multipart/form-data" class="mt-2">
                        @csrf
                        <div>
                            <label for="affiliate_name" >Name</label>
                            <input  type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="affiliate_name" value="{{old('name')}}" placeholder="Name of affiliate" />
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mt-3">
                            <label for="lastname">Description</label>
                            <textarea id="description" name="description" class="form-control @error('description') is-invalid @enderror" value="{{old('description')}}" placeholder="Affiliate description" required autofocus autocomplete="description"></textarea>
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    
                        <div class="flex items-center gap-4">
                            <button type="submit" onclick="this.form.submit(); this.readonly=true;this.innerHTML=`Saving...`" class="btn btn-primary mt-3">{{ __('Create') }}</button>                          
                        </div>
                        <div class="mt-2">
                            @include('errors.error_message')
                        </div>
                    </form>
                   
                </div>
            </div>
        </div>         
    </div>
@endsection

