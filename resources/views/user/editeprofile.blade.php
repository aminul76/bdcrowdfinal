@extends('layouts.app')
@section('styles')
<!--====== select css ======-->
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
@endsection

@section('content')

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57173176.00670385!2d99.99999999999999!3d29!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3663f18a24cbe857%3A0xa9416bfcd3a0f459!2sAsia!5e0!3m2!1sen!2sbd!4v1625798386613!5m2!1sen!2sbd"
            width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>


        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3 text-center">
                    <img class="user-profile-img mb-3" src="{{asset('uploads/profile/'.$users->image)}}" id="one" alt="">
                    <h5>{{$users->name}}</h5>
                    <p>There are many variations of passages</p>
                    <a class="btn btn-first" href="{{route('user.mydashboard')}}">View Profile</a>
                </div>
            </div>
        </div>
        <!--============= user profile start ===============-->
        <div class="mt-4">
            <div class="invest-details-header">
                <div class="container">
                    <nav>
                        <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
                            <!-------user about button ---------->
                            <button class="nav-link active" id="nav-about-tab" data-bs-toggle="tab" data-bs-target="#nav-about" type="button" role="tab" aria-controls="nav-about" aria-selected="true">My Profile</button>

                            <!------- user setting  button ---------->
                            <button class="nav-link" id="nav-setting-tab" data-bs-toggle="tab" data-bs-target="#nav-setting" type="button" role="tab" aria-controls="nav-setting" aria-selected="false"> Account setting</button>                        </div>
                    </nav>
                </div>
            </div>
            <div class="container py-3 py-md-5 ">
                <div class="tab-content" id="nav-tabContent">
                    <form action="{{route('user.update.profile',$users->id)}}" method="POST" enctype="multipart/form-data" >
                        @csrf
                        <div class="tab-content" id="nav-tabContent">
                            <!------------- invest Overview ------------->
                            <div class="tab-pane fade show active" id="nav-about" role="tabpane2" aria-labelledby="nav-about-tab">
                                <div class="row my-3">
                                    <div class="col-md-4">
                                        <h6>Upload profile Image</h6>
                                        <p>profile image height will 150px and width 150px.</p>
        
                                    </div>
        
                                    <div class="col-md-4">
                                       
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile"
                                                name="image" onchange="readURL1(this);">
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                    
        
                                    </div>
                                </div>
                                <div class="row my-3">
                                    <div class="col-md-4">
                                        <h6>Persons Details </h6>
                                        <p>please ensure your persons details. Ii will change your all name and address</p>
        
                                    </div>
        
                                    <div class="col-md-4">
                                        <div class="pb-3">
                                            <label for="1" class="form-label">Name</label>
                                            <input placeholder="name" type="text" class="form-control" id="1" name="name" value="{{$users->name}}">
                                        </div>
        
                                        <div class="pb-3">
                                            <label for="1" class="form-label">National Id Noumber</label>
                                            <input type="number" placeholder="National Id " type="number" class="form-control" id="1" name="national_id" value="{{$users->national_id}}">
                                        </div>
                                        <div class="pb-3">
                                            <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                                            <textarea placeholder="your bio" class="form-control" id="exampleFormControlTextarea1" rows="4" name="address" >{{$users->address}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
        
                                        <div class="pb-3">
                                            <label for="1" class="form-label">Mobile Number</label>
                                            <input placeholder="your Number" type="number" class="form-control" id="1" name="phone"  value="{{$users->phone}}">
                                        </div>
        
                                        <div class="pb-3">
                                            <label for="1" class="form-label">profession</label>
                                            <input placeholder="your profession" type="text" class="form-control" id="1" name="profession" value="{{$users->profession}}">
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
                                            <input placeholder="your home address" type="text" class="form-control" id="1" name="persent_village" value="{{$users->persent_village}}">
                                        </div>
                                        <div class="pb-3">
                                            <label for="1" class="form-label">Thana </label>
                                            <input placeholder="Thana" type="text" class="form-control" id="1" name="persent_thana" value="{{$users->persent_thana}}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
        
                                        <div class="pb-3">
                                            <label for="1" class="form-label">Thana and post code</label>
                                            <input placeholder="Thana" type="text" class="form-control" id="1" name="persent_post_code" value="{{$users->persent_post_code}}">
                                        </div>
                                        <div class="pb-3">
                                            <label for="1" class="form-label">District</label>
                                            <input placeholder="your District" type="text" class="form-control" id="1" name="persent_district" value="{{$users->persent_district}}">
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
                                            <input placeholder="your home address" type="text" class="form-control" id="1" name="parmanent_village" value="{{$users->parmanent_village}}">
                                        </div>
                                        <div class="pb-3">
                                            <label for="1" class="form-label">Thana and post code</label>
                                            <input placeholder="Thana and post code" type="text" class="form-control" id="1" name="parmanent_post_code" value="{{$users->parmanent_post_code}}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
        
                                        <div class="pb-3">
                                            <label for="1" class="form-label">Thana</label>
                                            <input placeholder="Thana and post code" type="text" class="form-control" id="1" name="parmanent_thana" value="{{$users->parmanent_thana}}">
                                        </div>
                                        <div class="pb-3">
                                            <label for="1" class="form-label">District</label>
                                            <input placeholder="your District" type="text" class="form-control" id="1" name="parmanent_district" value="{{$users->parmanent_district}}">
                                        </div>
                                    </div>
        
                                    <div class="col-md-4">
        
                                        <div class="pb-3">
                                            
                                           </div>
                                        <div class="pb-3">
                                           
                                            </div>
                                    </div>
                                    <div class="col-md-4">
        
                                        <div class="pb-3">
                                            <button type="submit"  class="btn btn-icon icon-left btn-success">Save</button>
                                        </div>
                                        <div class="pb-3">
                                           
                                            </div>
                                    </div>
                                </div>
                            </form>
                                
                            </div>
                            <!------------- user setting ------------->
                            <div class="tab-pane fade" id="nav-setting" role="tabpane2" aria-labelledby="nav-setting-tab">
                                <form method="POST" action="{{ route('password.update') }}" class="form-horizontal">
                                    @csrf
                                    @method('PUT')
                                <div class="row py-3 py-md-5">
                                    <div class="col-md-4">
                                        <h6>Password Change</h6>
                                        <p>Simple just type your Password</p>
                                    </div>
                                    <div class="col-md-4">

                                        <div class="pb-3">
                                            <div class="pb-3">
                                                <label for="1" class=" form-label">Current password</label>
                                                <input type="password" id="old_password" class="form-control" placeholder="Enter your old password" name="old_password">
                                            </div>
                                            <div class="pb-3">
                                                <label for="1" class=" form-label">New password</label>
                                                <input type="password" id="password" class="form-control" placeholder="Enter your new password" name="password">
                                            </div>
                                            <div class="pb-3">
                                                <label for="1" class=" form-label">Confirm password</label>
                                                <input type="password" id="confirm_password" class="form-control" placeholder="Enter your new password again" name="password_confirmation">
                                            </div>
                                            <button class="mt-3 btn btn-first">Save </button>
                                        </div>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                </div>
            </div>
        </div>

        <!--====== select js ======-->
@section('script')

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>


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

  $("#nameid").select2({
        dropdownParent: $("#admininvest")
    });
</script>



@endsection
@endsection