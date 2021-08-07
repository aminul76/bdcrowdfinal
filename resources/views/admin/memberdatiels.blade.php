@extends('admin.layouts.app')

@section('AdminDashbordContent')
<!-- Start app main Content -->
<div class="main-content">
    <section class="section">
        <div class="d-flex justify-content-between align-items-center py-3 px-4">
            <p>User Details</p>
            <div>
                <a href="#" class="btn btn-primary"></a>
            </div>
        </div>

        <div class="section-body">
            <div class="row">

                <div class="col-12 col-sm-12 col-lg-5">
                    <div class="card profile-widget">
                        <div class="profile-widget-header">
                            <img alt="image" src="{{ asset('uploads/profile/'. $member->image) }}" class="rounded-circle profile-widget-picture">
                           
                        </div>
                        <div class="profile-widget-description pb-0">
                            <div class="profile-widget-name">{{$member->name}}
                                <div class="text-muted d-inline font-weight-normal">
                                    <div class="slash"></div>{{$member->profession}}</div>
                            </div>
                            <p>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-lg-7">
                    <div class="card profile-widget">

                        <div class="profile-widget-description pb-0">
                            <div class="profile-widget-name">
                                personal info
                            </div>
                            <span>Phone number: </span>
                            <span>{{$member->phone}}
                            </span><br>
                            <span>NID number:</span>
                            <span>{{$member->national_id}}</span>
                            <br>
                            <span>Email:</span>
                            <span>{{$member->email}}</span>

                        </div>
                        <div class="profile-widget-description pb-0">
                            <div class="profile-widget-name">
                                pressent address
                            </div>
                            <span>Address: </span>
                            <span>{{$member->persent_village}}
                            </span> <br>
                            <span>Thana : </span>
                            <span>{{$member->persent_thana}} 
                            </span>
                            <br>
                            <span>post code: </span>
                            <span>{{$member->persent_post_code}}
                            </span>
                            <br>
                            <span>District: </span>
                            <span>{{$member->persent_district}} 
                            </span>

                        </div>
                        <div class="profile-widget-description pb-0">
                            <div class="profile-widget-name">
                                parmanent address
                            </div>
                            <span>Address: </span>
                            <span>{{$member->persent_village}}
                            </span> <br>
                            <span>Thana : </span>
                            <span>{{$member->persent_thana}} 
                            </span>
                            <br>
                            <span>post code: </span>
                            <span>{{$member->parmanent_post_code}}
                            </span>
                            <br>
                            <span>District: </span>
                            <span>{{$member->parmanent_district}} 
                            </span>

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
