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
                                    <form action="{{route('project.update',$project->id)}}" method="POST" enctype="multipart/form-data" >
                                        @csrf
                                       

                                        <div class="row">
                                            <div class="col-md-2">
                                                <h6>Project titel</h6>
                                                <p>Write a clear brief title.</p>
                                        
                                            </div>
                                            <div class="col-md-10">  
                                                <div class="form-group ">
                                                    <label>project Name</label>
                                                    <input type="text" class="form-control" name="projectName" value="{{$project->project_name}}">
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
                                                    name="projectAddress" value="{{$project->address}}">
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
                                                    name="unitPrice" value="{{$project->unit_price}}">
                                                </div>
                                                <div class="form-group ">
                                                    <label>Maximum Goal</label>
                                                    <input type="text" class="form-control"
                                                    name="maxGoal"  value="{{$project->max_goal}}">
                                                </div>
                                             
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group ">
                                                    <label>Unit quantity</label>
                                                    <input type="text" class="form-control" name="unitQuantity" value="{{$project->unit_quantity}}">
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
                                            <div class="col-md-6">
                                                <div class="form-group ">
                                                    <label>Video Link</label>
                                                    <input type="text" class="form-control"
                                                    name="videoLink">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group ">
                                                    @if($project->video == true)
                                                    @else
                                                    No Video
                                                    @endif
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
                                                            name="imageOne" onchange="readURL1(this);" value="{{$project->image_one}}">
                                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label for="myfile">Image Three</label>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="customFile" name="imageThree" onchange="readURL3(this);" value="{{$project->image_two}}">
                                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group ">
                                                    <label for="myfile">Image two </label>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="customFile"
                                                        name="imageTwo" onchange="readURL2(this);" value="{{$project->image_three}}">
                                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label for="myfile">Image Four</label>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="customFile" name="imageFour" onchange="readURL4(this);" value="{{$project->image_four}}">
                                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-2 offset-md-2">
                                                @if ('public/media/project/'.$project->image_one!=null)
                                                <img style="width:100px;border:1px solid #E9ECEF;" src="{{asset('public/media/project/'.$project->image_one)}}" id="one" alt="">  
                                                @else
                                                <img style="width:100px;border:1px solid #E9ECEF;" src="{{asset('frontend/images/projectdemo.png')}}" id="one" alt="">  
                                                @endif
                                            </div>
                                            <div class="col-md-2 ">
                                                @if ('public/media/project/'.$project->image_two!=null)
                                                <img style="width:100px;border:1px solid #E9ECEF;" src="{{asset('public/media/project/'.$project->image_two)}}" id="two" alt="">  
                                                @else
                                                <img style="width:100px;border:1px solid #E9ECEF;" src="{{asset('frontend/images/projectdemo.png')}}" id="two" alt="">  
                                                @endif                                            </div>
                                            <div class="col-md-2 ">
                                                @if ('public/media/project/'.$project->image_three!=null)
                                                <img style="width:100px;border:1px solid #E9ECEF;" src="{{asset('public/media/project/'.$project->image_three)}}" id="three" alt="">  
                                                @else
                                                <img style="width:100px;border:1px solid #E9ECEF;" src="{{asset('frontend/images/projectdemo.png')}}" id="three" alt="">  
                                                @endif                                            </div>
                                            <div class="col-md-2">
                                                @if ('public/media/project/'.$project->image_four!=null)
                                                <img style="width:100px;border:1px solid #E9ECEF;" src="{{asset('public/media/project/'.$project->image_four)}}" id="four" alt="">  
                                                @else
                                                <img style="width:100px;border:1px solid #E9ECEF;" src="{{asset('frontend/images/projectdemo.png')}}" id="four" alt="">  
                                                @endif                                            </div>
                                        </div>
                                    
                                        <div class="row">
                                            <div class="col-md-10 offset-md-2">
                                                <div class="buttons pt-4">
                                                    <button type="submit"  class="btn btn-icon icon-left btn-primary"><i class="fas fa-upload"></i> Save</button>


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