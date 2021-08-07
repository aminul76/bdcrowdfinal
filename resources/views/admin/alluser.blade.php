@extends('admin.layouts.app')

@section('AdminDashbordContent')

<!-- ----------Start app main Content for all project ------------------- -->
<div class="main-content">
                <section class="section">
                    <div class="d-flex justify-content-between align-items-center py-3 px-4">
                        <p>All User List</p>
                        <div>
                            <a href="{{route('member.create')}}" class="btn btn-primary">Add New User</a>
                        </div>
                    </div>


                    <div class="section-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped v_center" id="table-1">
                                                <thead>
                                                    <tr>
                                                        <th>SI</th>
                                                        <th>Name</th>
                                                        <th>phone</th>
                                                        <th>Email</th>
                                                        <th>Password</th>
                                                        <th>Photo</th>
                                                        <th> Action</th>
                                                        
                                                    </tr>
                                                </thead>
                                                
                                                <tbody>
                                                    @foreach ($users as $key=>$row)
                                                    <tr>
                                                        <td>{{ $key + 1 }}</td>
                                                        <td>{{$row->name  }}</td>
                                                        <td>{{ $row->phone  }}</td>
                                                        <td>{{ $row->email  }}</td>
                                                        <td>{{ $row->password_text  }}</td>
                                                        <td>
                                                            <div id="aniimated-thumbnials" class="list-unstyled row clearfix">
                                                            <a href="{{ asset('uploads/profile/'. $row->image) }}" " data-sub-html="Demo Description">
                                                            <img class="img-responsive thumbnail" src="{{ asset('uploads/profile/'. $row->image) }} " width="50px" height="60px">
                                                        </a>
                                                            </div>
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('member.edit', $row->id) }}" class="btn btn-icon btn-primary"><i class="fas fa-pen-nib"></i></a>
                                                        <a href="{{ route('member.show', $row->id) }}" class="btn btn-icon btn-primary"><i class="fas fa-pen-eye"></i></a>

                                                        <form id="delete-form-{{ $row->id }}" action="{{ route('member.destroy',$row->id) }}" style="display: none;" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                                   </form>
                                                            <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure? You want to delete this?')){
                                                            event.preventDefault();
                                                            document.getElementById('delete-form-{{ $row->id }}').submit();
                                                           }else {
                                                             event.preventDefault();
                                                              }"><i class="fas fa-trash-alt"></i></button>
                                                    
                                                    </td>                                         
                                                    </tr>
            
                                                 
            
                                                    @endforeach
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </section>
                </div>
            </div>



    <!-- ------------------------ Delete btn model --------------- -->
        <div class="modal fade" tabindex="-1" role="dialog" id="DeleteProjectModel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Do you want to Delete this project?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                    </div>
                    <div class="modal-body">
                        <p> you will not get this project after Delete. It will delete form your website</p>
                    </div>
                    <div class="modal-footer bg-whitesmoke br">
                        <button type="button" class="btn btn-danger">Delete</button>
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>

                    </div>
                </div>
            </div>
        </div>

@endsection