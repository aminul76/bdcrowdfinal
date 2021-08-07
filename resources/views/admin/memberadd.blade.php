@extends('admin.layouts.app')

@section('AdminDashbordContent')
<!-- Start app main Content -->
<div class="main-content ">
                <section class="section ">
                    <div class="d-flex justify-content-between align-items-center py-3 px-4">
                        <p>write a New member </p>
                        <div>
                            <a href="{{route('member.index')}}" class="btn btn-primary">Go member List</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <form action="{{route('member.store')}}" method="POST" enctype="multipart/form-data" >
                                        @csrf
                                       
                                        <div class="row my-3">
                                            <div class="col-md-4">
                                                <h6>Persons Details </h6>
                                                <p>please ensure your persons details. Ii will change your all name and address</p>
                
                                            </div>
                
                                            <div class="col-md-4">
                                                <div class="pb-3">
                                                    <label for="1" class="form-label">Name</label>
                                                    <input placeholder="name" type="text" class="form-control" id="1" name="name" >
                                                </div>
                
                                                <div class="pb-3">
                                                    <label for="1" class="form-label">National Id Noumber</label>
                                                    <input type="number" placeholder="National Id " type="number" class="form-control" id="1" name="national_id">
                                                </div>
                                                <div class="pb-3">
                                                    <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                                                    <textarea placeholder="your bio" class="form-control" id="exampleFormControlTextarea1" rows="4" name="address" ></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                
                                                <div class="pb-3">
                                                    <label for="1" class="form-label">Mobile Number</label>
                                                    <input placeholder="your Number" type="number" class="form-control" id="1" name="phone"  >
                                                </div>
                
                                                <div class="pb-3">
                                                    <label for="1" class="form-label">profession</label>
                                                    <input placeholder="your profession" type="text" class="form-control" id="1" name="profession" >
                                                </div>
                                            </div>
                                        </div>
                
                                        <div class="row my-3">
                                            <!-- present address -->
                                            <div class="col-md-4 ">
                                                <h6>present Address details </h6>
                                                <p>please ensure your persons details. Ii will change your address</p>
                
                                            </div>
                                            <div class="col-md-4">
                                                <div class="pb-3">
                                                    <label for="1" class="form-label">Home / village</label>
                                                    <input placeholder="your home address" type="text" class="form-control" id="1" name="persent_village">
                                                </div>
                                                <div class="pb-3">
                                                    <label for="1" class="form-label">Thana </label>
                                                    <input placeholder="Thana" type="text" class="form-control" id="1" name="persent_thana" >
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                
                                                <div class="pb-3">
                                                    <label for="1" class="form-label">Thana and post code</label>
                                                    <input placeholder="Thana" type="text" class="form-control" id="1" name="persent_post_code" >
                                                </div>
                                                <div class="pb-3">
                                                    <label for="1" class="form-label">District</label>
                                                    <input placeholder="your District" type="text" class="form-control" id="1" name="persent_district" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row my-3">
                                            <!-- parmanet address -->
                                            <div class="col-md-4 ">
                                                <h6>parmanent Address details </h6>
                                                <p>please ensure your persons details. Ii will change your address</p>
                
                                            </div>
                                            <div class="col-md-4">
                                                <div class="pb-3">
                                                    <label for="1" class="form-label">Home / village</label>
                                                    <input placeholder="your home address" type="text" class="form-control" id="1" name="parmanent_village" >
                                                </div>
                                                <div class="pb-3">
                                                    <label for="1" class="form-label">Thana and post code</label>
                                                    <input placeholder="Thana and post code" type="text" class="form-control" id="1" name="parmanent_post_code" >
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                
                                                <div class="pb-3">
                                                    <label for="1" class="form-label">Thana</label>
                                                    <input placeholder="Thana and post code" type="text" class="form-control" id="1" name="parmanent_thana" >
                                                </div>
                                                <div class="pb-3">
                                                    <label for="1" class="form-label">District</label>
                                                    <input placeholder="your District" type="text" class="form-control" id="1" name="parmanent_district">
                                                </div>
                                            </div>
                
                                            <div class="col-md-4">
                
                                                <div class="pb-3">
                                                    
                                                   </div>
                                                <div class="pb-3">
                                                   
                                                    </div>
                                            </div>
                                            <div class="col-md-4">
                               
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="customFile"
                                                    name="image" onchange="readURL1(this);">
                                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2 offset-md-2">
                                                   
                                                    <img style="width:100px;border:1px solid #E9ECEF;" src="{{asset('frontend/images/projectdemo.png')}}" id="one" alt="">  
                                                   
                                                   
                                                </div>
                                               
                                              
                                                
                                            </div>
                                        
            
                                        </div>
                                        
                                        </div>

                                        <div class="row my-3">
                                            <div class="col-md-4">
                                                <h6>Login Details </h6>
                                                <p>please ensure Login  details</p>
                
                                            </div>
                
                                            <div class="col-md-4">
                                                <div class="pb-3">
                                                    <label for="1" class="form-label">Email</label>
                                                    <input placeholder="name" type="text" class="form-control" id="1" name="email" >
                                                </div>
                
                                               
                                              
                                            </div>
                                            <div class="col-md-4">
                
                                                <div class="pb-3">
                                                    <label for="1" class="form-label">Password</label>
                                                    <input placeholder="Password" type="text" class="form-control" id="1" name="password_text"  >
                                                </div>
                
                                               
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-10 offset-md-2">
                                                <div class="buttons pt-4">
                                                    <button type="submit"  class="btn btn-icon icon-left btn-primary"><i class="fas fa-upload"></i>Save</button>


                                                    <a href="{{route('member.index')}}" class="btn btn-icon icon-left btn-secondary"><i class="fas fa-times"></i> Cancel</a>
                                                </div>
                                            </div>
                                        </div>

                                    


                                    </form>
                                </div>
                            </div>
                        </div>
                </section>
                </div>
            </div>
@endsection
<!-- # fron end show image in member page -->
<script type="text/javascript">
  function readURL1(input){
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        $('#one')
        .attr('src', e.target.result)
        .width(100)
        .height(100);
      };
      reader.readAsDataURL(input.files[0]);
    }
  }
  function readURL2(input){
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        $('#two')
        .attr('src', e.target.result)
        .width(100)
        .height(100);
      };
      reader.readAsDataURL(input.files[0]);
    }
  }
  function readURL3(input){
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        $('#three')
        .attr('src', e.target.result)
        .width(100)
        .height(100);
      };
      reader.readAsDataURL(input.files[0]);
    }
  }
  function readURL4(input){
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        $('#four')
        .attr('src', e.target.result)
        .width(100)
        .height(100);
      };
      reader.readAsDataURL(input.files[0]);
    }
  }

</script>