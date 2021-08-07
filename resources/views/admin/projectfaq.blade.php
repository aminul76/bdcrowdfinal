@extends('admin.layouts.app')

@section('AdminDashbordContent')
<!-- Start app main Content -->
<div class="main-content ">
                <section class="section ">
                    <div>
                    <form method="get" action="{{ route('admin.faqget')}}">
                    <div class="row pt-4 ">
                        <div class="col-md-6">
                            <div class="form-group">                       
                                <select name="project_id" class="form-control select2" id="projectName" >
                                       
                                    @foreach($project as $row)
                                        <option value="{{$row->id}}" >{{$row->project_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6 text-right">

                            <button type="submit" class="btn btn-primary">Show All FAQ</button>

                        </div>


                    </div>
                    </form>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped v_center" id="table-1">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">
                                                        ID
                                                    </th>
                                                    <th>Question</th>

                                                    <th>Answare</th>

                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody >

    
                                                <tr>
                                                    <td>
                                                       
                                                    </td>

                                                    <td>
                                                       
                                                    </td>
                                                    <td>
                                                         
                                                    </td>

                                                    <td>
                                                       
                                                    </td>
                                                </tr>


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>


@endsection








