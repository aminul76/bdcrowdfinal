@extends('layouts.app')

@section('content')

        <!--================== Hero section START ==================-->
        <div class="hero-section">
            <div class="container">
                <div class="row ">
                    <div class="col-12 col-sm-12 col-md-8 offset-md-2 text-center ">

                        <div class="pt-5">
                            <div>
                                <img src="{{asset('frontend/images/home-banar.svg')}}" alt="">
                            </div>
                            <a href="invest.html">
                                <button class="mt-3 mt-md-4 btn btn-first">See project</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--================== Hero section END ==================-->


        <!--============= invest full intro section start ===============-->
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3 text-center pt-3 pt-md-5 mt-2 mt-md-5">
                    <h2>Feature Campaings</h2>
                    <p>Here is our latest campaign, You can choose any project from here, or you can simply browse our all project</p>
                </div>
            </div>
        </div>
        <!--============= invest intro section end ===============-->
        <!--============= invest project section start ===============-->
        <div class="">
            <div class="container">
                <div class="row">

                    @foreach($projects as $row)
                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 my-2 my-md-4 ">
                        <div class="card project-card">
                         
                            <img class="card-img-top" src="{{asset('public/media/project/'.$row->image_one)}}">

                            <div class="card-body ">
                                <h5 class="card-title py-3"> 
                                {{$row->project_name}}    
                                </h5>

                                <ul class="list-unstyled">
                                    <li class="d-flex justify-content-between">
                                        <div>
                                            <span></span>
                                            <a class="text-decoration-none" href=""></a>
                                        </div>
                                        <div>
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            <span>  
                                                {{$row->address}}
                                            </span>
                                        </div>
                                    </li>
                                </ul>

                                <div class="progress barhight ">

                                    <div class="progress-bar bg-progress progress-bar-animated" role="progressbar " aria-valuenow="75 " aria-valuemin="0 " aria-valuemax="100 " style="width:{{((($row->inersets->sum('amount'))/($row->max_goal))*100)}}% "></div>
                                </div>
                                                                                                                                                                                                                
                                <p class="text-right ">Interested:{{number_format(((($row->inersets->sum('amount'))/($row->max_goal))*100),2)}}%</p>
        

                               
                        <div class="progress barhight ">
                            <div class="progress-bar bg-progress progress-bar-animated" role="progressbar " aria-valuenow="75 " aria-valuemin="0 " aria-valuemax="100 " style="width:{{((($row->payments->where('status','=','1')->sum('amount'))/($row->max_goal))*100)}}% "></div>
                        </div>
                        <p class="text-right ">Raised:{{number_format(((($row->payments->where('status','=','1')->sum('amount'))/($row->max_goal))*100),2)}}%</p>

                                <ul class="list-unstyled project-info">
                                    <li class="d-flex justify-content-between  py-3">
                                        <span>Unit Price</span>
                                        <span>BDT:{{$row->unit_price}}</span>
                                    </li>
                                    <li class="d-flex justify-content-between py-3">
                                        <span>Unit quantity</span>
                                        <span>{{$row->unit_quantity}}</span>
                                    </li>
                                    <li class="d-flex justify-content-between py-3">
                                        <span>Maximum Goal</span>
                                        <span>BDT:{{$row->max_goal}}</span>
                                    </li>
                                    <li class="d-flex justify-content-between py-3">
                                        <span>Raised</span>
                                        <span>BDT:00</span>
                                    </li>
                                    <li class="d-flex justify-content-between py-3">
                                        <span>Time Remaining</span>
                                       
                                        
                                        <span>  {{ \Carbon\Carbon::parse($row['end_time'])->longAbsoluteDiffForHumans() }}</span>
                                        
                                    </li>
                                    <li class="d-flex justify-content-end align-items-center pt-4">

                                        <a href="{{route('investdetails',$row->id)}} "> <button class="btn btn-first">View Details</button></a>

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!--============= invest project section end ===============-->

@endsection