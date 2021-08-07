@extends('layouts.app')
@section('styles')
<!--====== select css ======-->
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
@endsection
@section('content')

 <!--============= invest intro section start ===============-->
 <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 text-center py-3 py-md-5">
                    <h2>{{$project->project_name}}</h2>
                    <p>Address:{{$project->address}}</p>
                </div>
            </div>
        </div>
        <!--============= invest intro section end ===============-->

        <!--============= invest hero section start ===============-->
        <div class="py-3 py-md-5 bg-first">
            <div class="container py-3 py-md-5">
                <div class=" row">
                    <div class="preview col-md-5">
                        <div class="preview-pic tab-content">
                            <div class="tab-pane active" id="inv-one" role="tabpanel" aria-labelledby="inv-one-tab">
                                @if($project->video == true)

                                {!!$project->video!!}
                          
                                @else
                                <img class="card-img-top" src="{{asset('public/media/project/'.$project->image_one)}}">
                              

                                @endif

                               
                            </div>
                            <div class="tab-pane" id="inv-two" role="tabpanel" aria-labelledby="inv-two-tab">
                                <img src="{{asset('public/media/project/'.$project->image_two)}}" alt="">
                            </div>
                            <div class="tab-pane " id="inv-three" role="tabpanel" aria-labelledby="inv-three-tab">
                                <img src="{{asset('public/media/project/'.$project->image_three)}}" alt="">
                            </div>
                            <div class="tab-pane " id="inv-four" role="tabpanel" aria-labelledby="inv-four-tab">
                                <img src="{{asset('public/media/project/'.$project->image_four)}}" alt="">
                            </div>
                        </div>

                        <ul class="preview-thumbnail nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="inv-one-tab" data-bs-toggle="tab" data-bs-target="#inv-one" role="tab" aria-controls="inv-one" aria-selected="true">
                                    <img src="{{asset('public/media/project/'.$project->image_one)}}" alt="">
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="inv-two-tab" data-bs-toggle="tab" data-bs-target="#inv-two" role="tab" aria-controls="inv-two" aria-selected="false">
                                    <img src="{{asset('public/media/project/'.$project->image_two)}}" alt="">

                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="inv-three-tab" data-bs-toggle="tab" data-bs-target="#inv-three" role="tab" aria-controls="inv-three" aria-selected="false">
                                    <img src="{{asset('public/media/project/'.$project->image_three)}}" alt="">
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="inv-four-tab" data-bs-toggle="tab" data-bs-target="#inv-four" role="tab" aria-controls="inv-four" aria-selected="false">
                                    <img src="{{asset('public/media/project/'.$project->image_four)}}" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-5 offset-md-1">
                        <div class=" project-card-1">
                            <ul class="list-unstyled pb-3">
                                <li class="d-flex justify-content-between">
                                    <div>
                                        <span></span>
                                        <a class="text-decoration-none" href=""></a>
                                    </div>
                                    <div>
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        <span>{{$project->address}}</span>
                                    </div>
                                </li>
                            </ul>

                            <p class="text-end">Interested: {{number_format(((($project->inersets->sum('amount'))/($project->max_goal))*100),2)}}%</p>
                            <div class="progress mb-3">
                              <div class="progress-bar bg-progress progress-bar-animated" role="progressbar " aria-valuenow="75 " aria-valuemin="0 " aria-valuemax="100 " style="width:{{((($project->inersets->sum('amount'))/($project->max_goal))*100)}}% "></div>
                            </div>

                            <p class="text-end">Raised: {{number_format(((($project->payments->where('status','=','1')->sum('amount'))/($project->max_goal))*100),2)}}%</p>
                            <div class="progress mb-5">
                              <div class="progress-bar bg-progress progress-bar-animated" role="progressbar " aria-valuenow="75 " aria-valuemin="0 " aria-valuemax="100 " style="width:{{((($project->payments->where('status','=','1')->sum('amount'))/($project->max_goal))*100)}}% "></div>
                            </div>

                            <ul class="list-unstyled project-info">
                                <li class="d-flex justify-content-between  py-3">
                                    <span>Unit Price</span>
                                    <span>BDT: {{$project->unit_price}}</span>
                                </li>
                                <li class="d-flex justify-content-between py-3">
                                    <span>Unit quantity</span>
                                    <span>{{$project->unit_quantity}}</span>
                                </li>
                                <li class="d-flex justify-content-between py-3">
                                    <span>Maximum Goal</span>
                                    <span>BDT: {{$project->max_goal}}</span>
                                </li>
                                <li class="d-flex justify-content-between py-3">
                                    <span>Raised</span>
                                    <span>BDT:  63,000,000</span>
                                </li>
                                <li class="d-flex justify-content-between py-3">
                                    <span>Time Remaining</span>
                                    <span>{{$project->rtime}}</span>
                                </li>

                                <p class="pt-3">Minimum Investment is BDT: 1,00,000/-</p>

                                <li class="d-flex justify-content-end align-items-center ">
                                    
                                   


                                </li>
                                    
                                <div class="d-flex my-2  inv-btn justify-content-between text-center">
                                    
                                    
                                    @if (Auth::user())
                                    @if(Auth::user()->role==2)
                                          <button style="border-radius: 20px 0px 0px 20px;" class="inv1 w-50 btn  btn-lg my-2  border-0 btn btn-success"data-toggle="modal" data-target="#interset"
                                          data-whatever="@mdo">INTERESTED</button>
                                          <button style="border-radius: 0px 20px 20px 0px;" class="inv2 w-50 bt  btn-lg my-2  border-0 btn btn-success" data-toggle="modal" data-target="#invest"
                                          data-whatever="@mdo">INVEST</button>
                                      </div>
                                      
                                   
                                    @elseif(Auth::user()->role==1)
                                      
                                    <button style="border-radius:20px;" class="inv2 w-50 bt  btn-lg my-2  border-0 btn btn-success" data-toggle="modal" data-target="#admininvest"
                                    data-whatever="@mdo">INVEST</button></div>
                 {{-- start model --}}
                    <script>                   
                        $.fn.modal.Constructor.prototype.enforceFocus = function() {};
                       </script>
                         <div class="modal fade" id="admininvest" tabindex="-1" role="dialog" aria-labelledby="admininvestLabel"
                         aria-hidden="true">
                         <div class="modal-dialog" role="document">
                           <div class="modal-content">
                             <div class="modal-header">
                               <h5 class="modal-title" id="admininvestLabel">Member Payment By Admin</h5>
                               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                               </button>
                             </div>
                             <div class="modal-body">
                               <form class="py-5" action="{{route('adminstoreinvest')}}" method="POST" enctype="multipart/form-data" class="panel"  > 
                                 @csrf
                             
                                 <div class="form-group">
                                   <label for="inputAddress2">Select Member phone Number</label>
   
                                 <select style="width:100%" class="form-control" id="nameid" name="user_id" required>
                                  @foreach ($selectusers as $row)
                                 <option value="{{$row->id}}">{{$row->name}} {{$row->phone}}</option>
                                 
                                  @endforeach
                                
                                    
                                 </select>
                             
                               </div>
                                   <div class="form-group">
                                  <label for="inputAddress2">Total Amonut</label>
                                  <input type="text" class="form-control" id="inputAddress2" placeholder="Total Amonut" name="amount" required>
                                </div>
                              
                                
                                  <div class="form-group">
                                         <h4>Bank Reception Check</h4>
                                  <input type="file" class="form-control" id="inputAddress2" placeholder="recived check" name="image">
                                </div>
                                 
                         
                                {{-- <input type="hidden" class="form-control" id="inputAddress2"  name="user_id" value="{{$user->id}}"> --}}
                                
                                <input type="hidden" class="form-control" id="inputAddress2"  name="project_id" value="{{$project->id}}">
                                <input type="hidden" class="form-control" id="inputAddress2"  name="projectname" value="{{$project->project_name}}">
                                
                                      <button type="submit" class="btn btn-primary  w50 pull-right c1">INVEST</button>
                              
                              </form>
                             </div>
                            
                           </div>
                         </div>
                         </div>
                         
                {{-- model end                       --}}
                                     @endif
                                     @else
                                     <a href="{{route('login')}}"style="border-radius: 20px 0px 0px 20px;" class="inv1 w-50 btn  btn-lg my-2  border-0 btn btn-success" >INTERESTED</a>
                                     <a href="{{route('login')}}" style="border-radius: 0px 20px 20px 0px;" class="inv2 w-50 bt  btn-lg my-2  border-0 btn btn-success" >INVEST</a>
                                     </div>
                                     @endif


                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--============= invest hero section end ===============-->

        <!--============= invest details section end ===============-->
        <div class="">
            <div class="invest-details-header">
                <div class="container">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <!------- invest Overview  button ---------->
                            <button class="nav-link active" id="nav-Overview-tab" data-bs-toggle="tab" data-bs-target="#nav-Overview" type="button" role="tab" aria-controls="nav-Overview" aria-selected="true">Overview</button>

                            <!------- invest Details  button ---------->
                            <button class="nav-link" id="nav-Details-tab" data-bs-toggle="tab" data-bs-target="#nav-Details" type="button" role="tab" aria-controls="nav-Details" aria-selected="false">Details</button>


                           
                            <!------- invest Updates  button ---------->
                            <button class="nav-link" id="nav-updates-tab" data-bs-toggle="tab" data-bs-target="#nav-updates" type="button" role="tab" aria-controls="nav-updates" aria-selected="false">Update</button>

                             <!------- invest FAQ  button ---------->
                             <button class="nav-link" id="nav-faq-tab" data-bs-toggle="tab" data-bs-target="#nav-faq" type="button" role="tab" aria-controls="nav-faq" aria-selected="false">FAQ</button>
                             <button class="nav-link" id="nav-location-tab" data-bs-toggle="tab" data-bs-target="#nav-location" type="button" role="tab" aria-controls="nav-location" aria-selected="false">Location</button>
                          

                        </div>
                    </nav>
                </div>
            </div>
            <div class="container py-3 py-md-5 ">
                <div class="tab-content" id="nav-tabContent">
                    <!------------- invest Overview ------------->
                    <div class="tab-pane fade show active" id="nav-Overview" role="tabpane2" aria-labelledby="nav-Overview-tab">
                    

                    {!!$project->overview !!}
                 
                           
                    </div>
                    <!------------- invest Details ------------->
                    <div class="tab-pane fade" id="nav-Details" role="tabpane2" aria-labelledby="nav-Details-tab">
                    {!!$project->details !!}
                    </div>
                     <!------------- invest Updates ------------->
                     <div class="tab-pane fade" id="nav-location" role="tabpane2" aria-labelledby="nav-location-tab">

                        <div class=" my-3 my-md-4 p-3 p-md-5">
                        {!!$project->location !!}
                            
                        </div>
                    </div>
                    @php 
                    $update=App\Update::where('project_id',$project->id)->orderBy('id','DESC')->limit(10)->get();
                    @endphp
                    <!------------- invest Updates ------------->
                    <div class="tab-pane fade" id="nav-updates" role="tabpane2" aria-labelledby="nav-updates-tab">
                        @foreach ($update as $data)
      
                      <div class="project-update-details my-3 my-md-4 p-3 p-md-5">
                         
                          <div class="update-body">
                              <h1 class="py-3">{{$data->title}}</h1>
                              <p class=" body-text">{!!$data->details!!}</p>
                              
                          </div>
                      </div>
                     
                      @endforeach
                  </div>



                    <!------------- invest FAQ ------------->
                    @php 
                    $faq=App\faq::where('project_id',$project->id)->orderBy('id','DESC')->limit(10)->get();
                    @endphp 
                    <div class="tab-pane fade" id="nav-faq" role="tabpane2" aria-labelledby="nav-faq-tab">
                        <h2>Frequently Asked Questions</h2>
                        @foreach ($faq as $data)
                        <div class="accordion accordion-flush pt-3 " id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        {!!$data->question!!}
                            </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                   
                                        {!!$data->answare!!}

                                        <span class="py-3 d-block text-one">Last updated: {{$data->created_at}}</span>
                                    </div>

                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>


                   
                 
                   
                </div>
            </div>
        </div>
    </div>
    </div>
   
 <!--============= invest details section end ===============-->




 <!--============= Payment Model ===============-->
    @if (Auth::user())
    <div class="modal fade" id="invest" tabindex="-1" role="dialog" aria-labelledby="investLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="investLabel">BD Crowd Payment</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="py-5" action="{{route('frontend.storeapplyform')}}" method="POST" enctype="multipart/form-data" class="panel"  > 
            @csrf
           
              
           <div class="form-group">
             <label for="inputAddress">Full Name (as stated in ID/Passport) </label>
             <input type="text" class="form-control" id="inputAddress" placeholder="Full Name (as stated in ID/Passport) " name="name" value="{{$user->name}}">
           </div>
             <div class="form-group">
               <label for="inputPassword4">Phone</label>
             <input type="number" class="form-control" id="inputPhone4" placeholder="Phone" name="phone" value="{{$user->phone}}">
             </div>
             
              <div class="form-group">
             <label for="inputAddress2">Total Amonut</label>
             <input type="text" class="form-control" id="inputAddress2" placeholder="Total Amonut" name="amount" required>
           </div>
         
           <h4>Bank Reception Check</h4>
                  <div class="form-group">
             
             <input type="file" class="form-control" id="inputAddress2" placeholder="recived check" name="image">
           </div>
            
    
           <input type="hidden" class="form-control" id="inputAddress2"  name="user_id" value="{{$user->id}}">
           
           <input type="hidden" class="form-control" id="inputAddress2"  name="project_id" value="{{$project->id}}">
                 
           <input type="hidden" class="form-control" id="inputAddress2"  name="project_name" value="{{$project->project_name}}">
    
                 <button type="submit" class="btn btn-primary  w50 pull-right c1">INVEST</button>
         
         </form>
        </div>
       
      </div>
    </div>
    </div>
    
    {{-- //modal --}}
    
    <div class="modal fade" id="interset" tabindex="-1" role="dialog" aria-labelledby="intersetLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="intersetLabel"> Are You Sure {{$user->name}} ? You Insterst The project</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="{{route('user.storeinterst')}}">
            @csrf
           
            <input type="hidden" class="form-control" id="inputAddress2"  name="user_id" value="{{$user->id}}">
            <input type="hidden" class="form-control" id="inputAddress2"  name="name" value="{{$user->name}}">
            <input type="hidden" class="form-control" id="inputAddress2"  name="email" value="{{$user->email}}">
            <input type="hidden" class="form-control" id="inputAddress2"  name="phone" value="{{$user->phone}}">
            <input type="hidden" class="form-control" id="inputAddress2"  name="project_id" value="{{$project->id}}">
            <input type="hidden" class="form-control" id="inputAddress2"  name="amount" value="{{$project->max_goal}}">
    
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-success">Interest</button>
            </div>
          </form>
        </div>
       
      </div>
    </div>
    </div>
    
    @else
        
    @endif

<!--====== select js ======-->
@section('script')

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>


<script type="text/javascript">

  $("#nameid").select2({
        dropdownParent: $("#admininvest")
    });
</script>



@endsection

    
@endsection

