

@extends('layouts.main')

@section('title','Create affiliate')

@section('content')
     <!-- Page Heading -->
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Affiliate</h1>
    </div>

    <!-- Content Row -->

    <div class="row">
        <div class="col-xl-6 mx-auto">
            <div class="mt-2 text-center"><h4> Create New Affiliate</h4></div>
            <div class="card shadow mb-4">
                <div class="card-body">
                    <form method="POST" action="{{route('backoffice.affiliates.store')}}" enctype="multipart/form-data" class="mt-2">
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

                        <div class="mt-3">
                            <label for="affiliate_website" >Website</label>
                            <input  type="text" name="website" class="form-control @error('website') is-invalid @enderror" placeholder="https://affiliate-domain.com" id="affiliate_website" value="{{old('website')}}" />
                            @error('website')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mt-3">
                            <label for="phone">Phone</label>
                            <input id="phone" name="phone" type="text" class="form-control @error('phone') is-invalid @enderror" value="" placeholder="Affiliate phone number" required autofocus autocomplete="phone" />
                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        
                        </div> 
                        
                        <div class="mt-3">
                            <label for="affiliate_logo">Logo</label>
                            <input id="affiliate_logo" name="logo" type="file" class="form-control @error('logo') is-invalid @enderror" required autofocus autocomplete="logo" />
                            @error('logo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        
                        </div> 

                        <div class="mt-3">
                            <label for="art_design">Art design</label>
                            <input id="art_design" name="art_design" type="file" class="form-control @error('art_design') is-invalid @enderror" required autofocus autocomplete="logo" />
                            @error('art_design')
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

