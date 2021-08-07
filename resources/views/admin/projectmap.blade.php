@extends('admin.layouts.app')

@section('AdminDashbordContent')
   <!-- Start app main Content -->
   <div class="main-content ">
                <section class="section ">
                    <div class="row py-4 ">
                        <div class="col-md-6">
                            <div class="form-group">

                                <select class="form-control select2">
                                    <option>project name</option>
                                    <option>project name</option>
                                    <option>project name</option>
                                    </select>
                            </div>
                        </div>
                        <div class="col-md-6 text-right">

                            <a href="#" class="btn btn-primary">See Location</a>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group ">
                                                <label>project Location Map:</label>
                                                <textarea class="summernote">
                                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur, magni maiores totam cupiditate aperiam sequi quibusdam explicabo possimus minima ad accusantium, facilis, culpa eligendi tempore! Ipsa magnam consequatur magni cumque!
                                                </textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="buttons pt-4">
                                                <a data-toggle="modal" data-target="#ChangeProjectLocationmodel" href="#" class="btn btn-icon icon-left btn-primary"><i class="fas fa-upload"></i> Upload Location</a>


                                                <a data-toggle="modal" data-target="#DeleteProjectLocationmodel" href="#" class="btn btn-icon icon-left btn-danger"><i class="fas fa-times"></i> Delete Location</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>


            <!-- ------------------------ change btn model --------------- -->
    <div class="modal fade" tabindex="-1" role="dialog" id="ChangeProjectLocationmodel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Do you want to change this Location?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">
                    <p>Ii will change form your website</p>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Save Change</button>

                </div>
            </div>
        </div>
    </div>
    <!-- ------------------------ Delete btn model --------------- -->
    <div class="modal fade" tabindex="-1" role="dialog" id="DeleteProjectLocationmodel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Do you want to Delete this Location?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">
                    <p> Ii will delete form your website</p>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-danger">Delete</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
@endsection