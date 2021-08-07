@extends('admin.layouts.app')

@section('AdminDashbordContent')

<!-- ----------Start app main Content for all project ------------------- -->
<div class="main-content">
                <section class="section">
                   


                    <div class="section-body">
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