

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
            <div class="mt-2 text-center"><h4> Create New Region</h4></div>
            <div class="card shadow mb-4">
                <div class="card-body">
                    <form method="POST" action="{{route('region.store')}}" enctype="multipart/form-data" class="mt-2">
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
    <script>
        var lunch_time = document.querySelectorAll('#lunch-time');
        var lunch_slot = document.querySelectorAll('#lunch-slot');
        var _token                   = document.querySelector('input[name="_token"]'); 

        lunch_time.forEach((time)=>{
            time.addEventListener('focus',(event)=>{

                let event_message = document.createElement('div');
                event_message.classList.add('text-success','category_message');
                event_message.innerHTML = `<small> Press enter to update changes</small>`;

                if (event.currentTarget == document.activeElement) {              
                    time.after(event_message);
                    setTimeout(()=>{
                        event_message.innerHTML = "";
                    },5000)
                } 
                else{
                    let event_message = document.createElement('div');
                    event_message.classList.add('text-success');
                    event_message.innerHTML = ""; 
                }
            
            
                // category.append(event_message)
                // console.log(event_message);
                time.addEventListener('keyup',(event)=>{
                
                    console.log(event.key);
                    if (event.key === 'Enter') {
                        //console.log(category.value);
                        let reference = time.dataset.reference;
                        updateLunchTime(time,reference);
                    }
                });             
            });

        });


        lunch_slot.forEach((slot)=>{
            slot.addEventListener('focus',(event)=>{

                let event_message = document.createElement('div');
                event_message.classList.add('text-success','category_message');
                event_message.innerHTML = `<small> Press enter to update changes</small>`;

                if (event.currentTarget == document.activeElement) {              
                    slot.after(event_message);
                    setTimeout(()=>{
                        event_message.innerHTML = "";
                    },5000)
                } 
                else{
                    let event_message = document.createElement('div');
                    event_message.classList.add('text-success');
                    event_message.innerHTML = ""; 
                }
            
            
                // category.append(event_message)
                // console.log(event_message);
                slot.addEventListener('keyup',(event)=>{
                
                    console.log(event.key);
                    if (event.key === 'Enter') {
                        let reference = slot.dataset.reference;
                        updateLunchSlot(slot,reference);
                    }
                });             
            });

        })


        var confirm_status = document.querySelectorAll('#confirm-status');


        Array.from(confirm_status).filter((status)=>{
            status.addEventListener('click',()=>{
                console.log(status.dataset.reference)
                console.log(status.value)
                postData('/backoffice/lunch-status-update',{ _token: _token.value,status:status.value,reference:status.dataset.reference})
                .then(response =>{
                    alert(response.message);
                    window.location.reload();  
                })
                .catch((error)=>{
                    console.log(response)
                })
                
            });
        });


        


        async function updateLunchTime(time,reference){
            let url = "/backoffice/lunch-time-update"
            let payload = {
                _token:_token.value,
                reference:reference,
                new_time:time.value
            }

            console.log(payload);
            const response = await fetch(url,{
                method:'POST',
                headers:{
                    'Content-Type':'application/json',
                    'X-CSRF-TOKEN':_token.value,
                    // 'Authorization': access_token
                },
                body:JSON.stringify(payload)
            })
            .then((response)=>response.json())
            .then(response =>{
                if (response.error == false) {
                    alert(response.message);
                }
                else{
                    alert(response.message);
                }
            })
            .catch((error)=>{
                console.log(response)
            })
        }
    
    

        async function updateLunchSlot(slot,reference){
            let url = "/backoffice/lunch-slot-update"
            let payload = {
                _token:_token.value,
                reference:reference,
                slot:slot.value
            }

            console.log(payload);
            const response = await fetch(url,{
                method:'POST',
                headers:{
                    'Content-Type':'application/json',
                    'X-CSRF-TOKEN':_token.value,
                    // 'Authorization': access_token
                },
                body:JSON.stringify(payload)
            })
            .then((response)=>response.json())
            .then(response =>{
                if (response.error == false) {
                    alert(response.message);
                
                }
                else{
                    alert(response.message);
                }
            })
            .catch((error)=>{
                console.log(response)
            })
        }      


        
        async function deleteLunchSlot(reference){
            let url = "/backoffice/delete-lunch-slot";

            let payload = {
                _token:_token.value,
                reference:reference,
            }

            console.log(payload);
            const response = await fetch(url,{
                method:'DELETE',
                headers:{
                    'Content-Type':'application/json',
                    'X-CSRF-TOKEN':_token.value,
                    // 'Authorization': access_token
                },
                body:JSON.stringify(payload)
            })
            .then((response)=>response.json())
            .then(response =>{
                if (response.error == false) {
                    alert(response.message);
                
                }
                else{
                    alert(response.message);
                }
            })
            .catch((error)=>{
                console.log(response)
            })
        }      


        async function postData(url="", data={}){
            const response = await fetch(url,{
                method:"POST",
                mode:"cors",
                cache:"no-cache",
                credentials:"same-origin",
                headers:{
                    "Content-Type":"application/json",
                    "X-CSRF-TOKEN":_token.value,
                },
                body: JSON.stringify(data)
            });

            return response.json();
        }
    </script>
@endsection

