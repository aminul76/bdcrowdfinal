@extends('admin.layouts.app')

@section('AdminDashbordContent')
 <!-- Start app main Content -->
 <div class="main-content ">
                <section class="section ">
                    <div>
                        <form method="GET" action="{{ route('admin.detailsget')}}">

                    <div class="row py-4 ">
                        <div class="col-md-6">
                            <div class="form-group">

                                <select name="project_id" class="form-control select2">
                              
                                @foreach($projectdetails as $row)
                                    <option value="{{$row->id}}" >{{ $row->project_name}}</option>
                                @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 text-right">

                            <button type="submit" class="btn btn-primary">See Overview</button>
                        </div>
                        </form>
                    </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-12">
                            @foreach($projectdetails as $row)
                            <form action="{{route('admin.detailsstore',$row->id)}}" method="POST" enctype="multipart/form-data" >
                                @csrf
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group ">
                                                <label>project Overview:</label>
                                                
                                                <tbody id="service_table">

                                                    </tbody>
                                                <textarea name="details" class="summernote">
                                                    {{$row->details}}  
                                                </textarea>
                                               
                                            </div>
                                        </div>
                                    </div>




                                    <div class="row">
                                        <div class="col-12">
                                            <div class="buttons pt-4">
                                                <button type="submit"  class="btn btn-icon icon-left btn-primary"><i class="fas fa-upload"></i> Upload project</button>

                                                <a data-toggle="modal" data-target="#DeleteProjectOverviemodel" href="#" class="btn btn-icon icon-left btn-danger"><i class="fas fa-times"></i> Delete Overview</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form>
                            @endforeach
                        </div>
                </section>
                </div>
            </div>


       

@endsection



@section('script')

@endsection