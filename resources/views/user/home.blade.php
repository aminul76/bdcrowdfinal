@extends('layouts.app')

@section('content')


<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57173176.00670385!2d99.99999999999999!3d29!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3663f18a24cbe857%3A0xa9416bfcd3a0f459!2sAsia!5e0!3m2!1sen!2sbd!4v1625798386613!5m2!1sen!2sbd"
            width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>


        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3 text-center">
                    <img class="user-profile-img mb-3" src="{{asset('uploads/profile/'.$users->image)}}" alt="">
                    <h5>{{$users->name}}</h5>
                    <p>There are many variations of passages</p>
                    <a class="btn btn-first" href="{{route('user.edit.profile')}}">Edite Profile</a>
                </div>
            </div>
        </div>
        <!--============= user profile start ===============-->
        <div class="mt-4">
            <div class="invest-details-header">
                <div class="container ">
                    <nav>
                        <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
                            <!-------user about button ---------->
                            <button class="nav-link active" id="nav-about-tab" data-bs-toggle="tab" data-bs-target="#nav-about" type="button" role="tab" aria-controls="nav-about" aria-selected="true">About</button>

                            <!------- user interested  button ---------->
                            <button class="nav-link" id="nav-interested-tab" data-bs-toggle="tab" data-bs-target="#nav-interested" type="button" role="tab" aria-controls="nav-interested" aria-selected="false">Interested</button>


                            <!------- user investu  button ---------->
                            <button class="nav-link" id="nav-investu-tab" data-bs-toggle="tab" data-bs-target="#nav-investu" type="button" role="tab" aria-controls="nav-investu" aria-selected="false">Invest</button>

                            <!------- invest payoment  button ---------->
                            <button class="nav-link" id="nav-payoment-tab" data-bs-toggle="tab" data-bs-target="#nav-payoment" type="button" role="tab" aria-controls="nav-payoment" aria-selected="false">payoment</button>


                        </div>
                    </nav>
                </div>
            </div>
            <div class="container py-3 py-md-5 ">
                <div class="tab-content" id="nav-tabContent">
                    <!------------- about ------------->
                    <div class="tab-pane fade show active" id="nav-about" role="tabpane2" aria-labelledby="nav-about-tab">


                        <div class="row w-75 m-auto">
                            <div class="col-md-4">
                                Biography
                            </div>
                            <div class="col-md-8">
                               {{$users->name}} {{$users->profession}}
                            </div>
                        </div>
                    </div>



                    <!------------- user interested ------------->
                    <div class="tab-pane fade" id="nav-interested" role="tabpane2" aria-labelledby="nav-interested-tab">

                        <!--============= interested project section start ===============-->
                        <div class="">
                            <div class="container">
                                <div class="row">
                
                                    @foreach($intersteeds as $row)
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
                
                                                <p class="text-end">Interested: 00%</p>
                                                <div class="progress mb-3">
                                                    <div class="progress-bar bg-progress" role="progressbar" style="width: 00%" aria-valuenow="00" aria-valuemin="0" aria-valuemax="00"></div>
                                                </div>
                
                                                <p class="text-end">Raised: 00%</p>
                                                <div class="progress mb-5">
                                                    <div class="progress-bar bg-progress" role="progressbar" style="width: 00%" aria-valuenow="00" aria-valuemin="0" aria-valuemax="00"></div>
                                                </div>
                
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
                                                        <span>  {{$row->rtime}}</span>
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
                        <!--============= interested project section end ===============-->

                    </div>

                    <!------------- invest investu ------------->
                    <div class="tab-pane fade" id="nav-investu" role="tabpane2" aria-labelledby="nav-investu-tab">
                        <!--============= invest project section start ===============-->
                        <div class="">
                            <div class="container">
                                <div class="row">
                
                                    @foreach($invests as $row)
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
                
                                                <p class="text-end">Interested: 100%</p>
                                                <div class="progress mb-3">
                                                    <div class="progress-bar bg-progress" role="progressbar" style="width: 100%" aria-valuenow="00" aria-valuemin="0" aria-valuemax="00"></div>
                                                </div>
                
                                                <p class="text-end">Raised: 100%</p>
                                                <div class="progress mb-5">
                                                    <div class="progress-bar bg-progress" role="progressbar" style="width: 100%" aria-valuenow="00" aria-valuemin="0" aria-valuemax="00"></div>
                                                </div>
                
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
                                                        <span>  {{$row->rtime}}</span>
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
                    </div>

                    <!------------- invest payoment ------------->
                    <div class="tab-pane fade" id="nav-payoment" role="tabpane2" aria-labelledby="nav-payoment-tab">

                        <table class="table text-center  table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">SL</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($payments as $key=>$row)

                                <tr>
                                    <th scope="row">{{$key+1}}</th>
                                    <td>{{$row->created_at}}</td>
                                    <td class="w-75">{{$row->project_name}}</td>
                                    <td>{{$row->amount}}/-</td>
                                    <td>   
                                        @if ($row->status==1)
                                         Compelete   
                                        @else
                                            Pending
                                        @endif
                                    </td>
                                </tr>
                                    
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


@endsection