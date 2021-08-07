@extends('admin.layouts.app')

@section('AdminDashbordContent')
  <!-- Start app main Content -->
  <div class="main-content ">
        <section class="section ">
                    <div class="row pt-4 ">
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

                            <a data-toggle="modal" data-target="#addNewUpdatemodel" href="#" class="btn btn-primary">Add New Update</a>
                        </div>


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
                                                    <th>Title</th>

                                                    <th>Details</th>
                                                    <th>amount</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        1
                                                    </td>

                                                    <td>
                                                        Question rem ipsum dolor sit
                                                    </td>
                                                    <td>
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere quae totam nostrum optio repellat. Nostrum quam numquam placeat velit minus ea! Minus dolorum maxime consectetur, nihil rem laudantium corrupti vero.
                                                    </td>
                                                    <td>342</td>
                                                    <td>
                                                        <a data-toggle="modal" data-target="#editeUpdatemodel" href="#" class="btn btn-icon btn-primary"><i class="fas fa-pen-nib"></i></a>


                                                        <a data-toggle="modal" data-target="#Deleteupdatemodel" href="#" class="btn btn-icon btn-danger"><i class="fas fa-trash-alt"></i></a>
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



    <!-- ------------------------ add new Update model --------------- -->
    <div class="modal fade" tabindex="-1" role="dialog" id="addNewUpdatemodel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Do you want to Add new Update?</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
                </div>
                <div class="modal-body">
                    <div class="form-group ">
                        <label>Update title</label>
                        <input type="text" class="form-control">

                    </div>
                    <label>Update Description</label>
                    <textarea class="summernote-simple"></textarea>

                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button data-dismiss="modal" type="button" class="btn btn-secondary">close</button>
                    <button type="button" class="btn btn-primary">Save Change</button>

                </div>
            </div>
        </div>
    </div>
    <!-- ------------------------ Eidt update model --------------- -->
    <div class="modal fade" tabindex="-1" role="dialog" id="editeUpdatemodel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Do you want to Edit this Update?</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
                </div>
                <div class="modal-body">
                    <div class="form-group ">
                        <label>Update title</label>
                        <input type="text" class="form-control">

                    </div>
                    <label>Update Description</label>
                    <textarea class="summernote-simple"></textarea>

                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button data-dismiss="modal" type="button" class="btn btn-secondary">close</button>
                    <button type="button" class="btn btn-primary">Save Change</button>

                </div>
            </div>
        </div>
    </div>

    <!-- ------------------------ Delete btn model --------------- -->
    <div class="modal fade" tabindex="-1" role="dialog" id="Deleteupdatemodel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Do you want to Delete this Update?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
                </div>
                <div class="modal-body">
                    <p> you will not get this Update after Delete. Ii will delete form your website</p>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-danger">Delete</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>


@endsection