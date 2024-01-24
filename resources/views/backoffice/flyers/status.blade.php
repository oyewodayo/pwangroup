<div class="modal fade text-left" id="status-flyer-{{$flyer->id}}" data-backdrop="true" tabindex="-1" role="dialog" aria-labelledby="myModalLabel20" aria-hidden="false">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-full">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel20"> Delete Flyer </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="bx bx-x"></i>
                </button>
            </div>
            <div class="modal-body">
                <p class="mb-2 ">
                    <img src="{{asset($flyer->flyer_path)}}" width="97%" title="{{$flyer->name??'Flyers'}}" alt="{{$flyer->name??'Flyers'}}">
                    @if ($flyer->status == 1)
                        <div class="text-center mt-2">Are you sure you want to disable this flyer from public view?</div>  
                    @else
                    <div class="text-center mt-2">Are you sure you want to enable this flyer to public view?</div>  
                   
                    @endif
           
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                    Close
                </button>
                <form method="POST" action="{{ route('backoffice.flyers.status',['id'=>$flyer->id]) }}" class="mt-n3">
                    @csrf
                    @if ($flyer->status == 1)

                    <button type="submit" class="btn btn-danger" onclick="this.form.submit(); this.readonly=true;this.innerHTML=`Processing...`;">Yes, disable</button>
                
                    @else
                    <button type="submit" class="btn btn-info" onclick="this.form.submit(); this.readonly=true;this.innerHTML=`Processing...`;">Yes, enable</button>
                
                    @endif
               </form>
                
            </div>
        </div>
    </div>
</div>