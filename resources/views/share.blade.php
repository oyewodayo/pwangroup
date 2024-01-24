<div class="modal fade text-left" id="share-flyer-{{$flyer->id}}" data-backdrop="true" tabindex="-1" role="dialog" aria-labelledby="myModalLabel20" aria-hidden="false">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-full">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel20"> Share to your network </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="bx bx-x"></i>
                </button>
            </div>
            <div class="modal-body">
                <p class="mb-2 ">
                    <div class="input-group mb-3">
                    <input type="text" class="form-control" value="{{ request()->url() }}" id="url_text" >
                    <i class="fas fa-fw fa-copy" style="font-size:23px;padding-top:4px;cursor:pointer" id="copy_link"></i> 
                    </div>
                    
                    
                    <div class="mb-2">Click the icons below to share</div>
                    <div class="text-center mt-5"> 

                        <a class="twitter-share-button" target="new" href="https://twitter.com/intent/tweet?text=Subscribe to my newsletter &url={{config('app.url').'/subscribe/Hello&tale_source=twitter'}}"> <i class="fab fa-fw fa-twitter text-primary mr-2" style="cursor:pointer;font-size:23px;"></i> </a>
                        <a href="https://facebook.com/sharer/sharer.php?t=Subscribe to my newsletter &u={{config('app.url').'/subscribe/Hello&tale_source=facebook'}}" target="new"><i class="fab fa-fw fa-facebook text-primary mr-2" style="cursor:pointer;font-size:23px;"></i></a>
                        <a href="https://www.linkedin.com/sharing/share-offsite/?url={{config('app.url').'/subscribe/Hello&tale_source=facebook'}}" target="new"><i class="fab fa-fw fa-linkedin text-primary mr-2" style="cursor:pointer;font-size:23px;"></i> </a>
                        <a href="https://api.whatsapp.com/send?text= Subscribe to my newsletter {{config('app.url').'/subscribe/Hello&tale_source=facebook'}}"  data-action="share/whatsapp/share" target="new"><i class="fab fa-fw fa-whatsapp text-success" style="cursor:pointer;font-size:23px;"></i> </a>
                        
                  </div>                  
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                    Close
                </button>
                
            </div>
        </div>
    </div>
</div>