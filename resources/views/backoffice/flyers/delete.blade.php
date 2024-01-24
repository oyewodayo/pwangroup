<div class="modal fade text-left" id="delete-flyer-{{$flyer->id}}" data-backdrop="true" tabindex="-1" role="dialog" aria-labelledby="myModalLabel20" aria-hidden="false">
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
                    <div class="text-center">Are you sure you want to delete this flyer?</div>           
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                    Close
                </button>
                <form method="POST" action="{{ route('backoffice.flyers.destroy',['id'=>$flyer->id]) }}" class="mt-n3">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="this.form.submit(); this.readonly=true;this.innerHTML=`Deleting...`;">Yes, delete</button>
                </form>
                
            </div>
        </div>
    </div>
</div>