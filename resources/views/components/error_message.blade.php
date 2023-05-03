

@if(Session::has('success'))
<div class="flex p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
    {{-- <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg> --}}
    <svg fill="none" class="flex-shrink-0 inline w-5 h-5 mr-3" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
      </svg>
    <span class="sr-only">Info</span>
    <div>
      <span class="font-medium">Success alert!</span>  {{ Session::get('success') }}.
    </div>
  </div>
@endif

@if(Session::has('error'))
<div class=" col-md-12 alert alert-danger left-icon-alert  alert-dismissible" id="alert-danger">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
     {{ Session::get('error') }}</button>
</div>
@endif
@if(Session::has('status'))
<div class=" col-md-12 alert alert-info left-icon-alert  alert-dismissible" id="alert-info">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
     {{ Session::get('status') }}</button>
</div>
@endif
@if(Session::has('info'))
<div class=" col-md-12 alert alert-info left-icon-alert  alert-dismissible" id="alert-info" >
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
     {{ Session::get('info') }}</button>
</div>
@endif

<div class=" col-md-12 alert alert-info left-icon-alert  alert-dismissible" id="alert-info" style="display:none">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
     {{ Session::get('status') }}</button>
</div>