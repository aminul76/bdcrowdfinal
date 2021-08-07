@extends('admin.layouts.app')

@section('AdminDashbordContent')
<!-- Start app main Content -->
<div class="main-content ">
                <section class="section ">
                    <div class="d-flex justify-content-between align-items-center py-3 px-4">
                        <p>write a New project </p>
                        <div>
                            <a href="{{route('admin.projects')}}" class="btn btn-primary">Go Project List</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <form action="{{route('project.store')}}" method="POST" enctype="multipart/form-data" >
                                    @csrf

                                        <div class="row">
                                            <div class="col-md-2">
                                                <h6>Project titel</h6>
                                                <p>Write a clear brief title.</p>
                                        
                                            </div>
                                            <div class="col-md-10">  
                                                <div class="form-group ">
                                                    <label>project Name</label>
                                                    <input type="text" class="form-control" name="projectName">
                                                </div>
                                           
                                            </div>
                                  
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <h6>Address</h6>
                                                <p>Write a clear brief address.</p>
                                            </div>
                                            <div class="col-md-10">
                                            <div class="form-group ">
                                                    <label>project Address</label>
                                                    <input type="text" class="form-control"
                                                    name="projectAddress" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <h6>Funding info</h6>
                                                <p>Write a clear, brief Funding info.</p>

                                            </div>
                                            <div class="col-md-5">
                                                 <div class="form-group ">
                                                    <label>Unit Price</label>
                                                    <input type="text" class="form-control"
                                                    name="unitPrice">
                                                </div>
                                                <div class="form-group ">
                                                    <label>Maximum Goal</label>
                                                    <input type="text" class="form-control"
                                                    name="maxGoal" >
                                                </div>
                                             
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group ">
                                                    <label>Unit quantity</label>
                                                    <input type="text" class="form-control" name="unitQuantity">
                                                </div>
                                                <div class="form-group">
                                                    <label>Project End date</label>
                                                    <input type="text" class="form-control datepicker"
                                                    name="endTime">
                                                </div>
                                                <div class="form-group d-none">
                                                    <label>Project Start Date</label>
                                                    <input type="text" class="form-control datepicker"
                                                    name="startTime">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                            
                                            </div>
                                            <div class="col-md-4">
                                             
                                            </div>
                                            <div class="col-md-4">
                                              
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-2">
                                                 <h6>Project video</h6>
                                                <p>Embeded link of youtube or vimeo </p>
                                            </div>
                                            <div class="col-md-10">
                                                <div class="form-group ">
                                                    <label>Video Link</label>
                                                    <input type="text" class="form-control"
                                                    name="videoLink">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                             <p> image width:1024, height:1024</p>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group ">
                                                        <label for="myfile">Image (Main Thumbnail)</label>
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="customFile"
                                                            name="imageOne" onchange="readURL1(this);">
                                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label for="myfile">Image Three</label>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="customFile" name="imageThree" onchange="readURL3(this);">
                                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group ">
                                                    <label for="myfile">Image two </label>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="customFile"
                                                        name="imageTwo" onchange="readURL2(this);" >
                                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label for="myfile">Image Four</label>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="customFile" name="imageFour" onchange="readURL4(this);" >
                                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-2 offset-md-2">
                                                 <img style="width:100px;border:1px solid #E9ECEF;" src="{{asset('frontend/images/projectdemo.png')}}" id="one" alt="">
                                            </div>
                                            <div class="col-md-2 ">
                                                 <img style="width:100px;border:1px solid #E9ECEF;" src="{{asset('frontend/images/projectdemo.png')}}" id="two" alt="">
                                            </div>
                                            <div class="col-md-2 ">
                                                 <img style="width:100px;border:1px solid #E9ECEF;" src="{{asset('frontend/images/projectdemo.png')}}" id="three" alt="">
                                            </div>
                                            <div class="col-md-2">
                                                 <img style="width:100px;border:1px solid #E9ECEF;" src="{{asset('frontend/images/projectdemo.png')}}" id="four" alt="">
                                            </div>
                                        </div>
                                    
                                        <div class="row">
                                            <div class="col-md-10 offset-md-2">
                                                <div class="buttons pt-4">
                                                    <button type="submit"  class="btn btn-icon icon-left btn-primary"><i class="fas fa-upload"></i> Upload project</button>


                                                    <a href="#" class="btn btn-icon icon-left btn-secondary"><i class="fas fa-times"></i> Cancel project</a>
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
<!-- # fron end show image in project page -->
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