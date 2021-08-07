@extends('admin.layouts.app')

@section('AdminDashbordContent')
<!-- Start app main Content -->
<div class="main-content ">
                <section class="section ">
                    <div class="row py-4 ">
                        <div class="col-md-6">
                            <a  href="{{route('admin.faq')}}" class="btn btn-primary">Back</a>
                        </div>

                        <div class="col-md-6 text-right">
                          
                            <a data-toggle="modal" data-target="#addnewFaqmodel" href="#" class="btn btn-primary">Add New FAQ</a>
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
                                                    <th>Question</th>

                                                    <th>Answare</th>

                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody >
                                            
                                            @foreach($projectfaq as $faq)
                                                <tr>
                                                  

                                                    <td  >
                                                      {{$faq->id}} 
                                                    </td>

                                                    <td>
                                                    {!!$faq->question !!}
                                                   
                                                    </td>
                                                    <td>
                                                    {!!$faq->answare !!}
                                                  
                                                    </td>
                                                   
                                                    <td>
                                                        <form id="delete-form-{{ $faq->id }}" action="{{ route('admin.faqdelete',$faq->id) }}" style="display: none;" method="POST">
                                                            @csrf
                                                          
                                                                   </form>
                                                            <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure? You want to delete this?')){
                                                            event.preventDefault();
                                                            document.getElementById('delete-form-{{ $faq->id }}').submit();
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


            <!-- ------------------------ add new faQ model --------------- -->
    <div class="modal fade" tabindex="-1" role="dialog" id="addnewFaqmodel">
        <form action="{{route('admin.faqstore')}}" method="POST" enctype="multipart/form-data" >
            @csrf
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Do you want to Add new FAQ?</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                   
                        
                    <div class="form-group ">
                        
                        <select name="project_id" class="form-control select2" id="projectName" >
                                       
                            @foreach($project as $row)
                                <option value="{{$row->id}}" >{{$row->project_name}}</option>
                            @endforeach
                        </select>


                        <input id="addQue" type="text" name="question" class="form-control" placeholder="Add Question" required>

                    </div>
                    <label>FAQ Answare</label>
                    <textarea id="addAns" name="answare" class="summernote-simple" required></textarea>

                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button data-dismiss="modal" type="button" class="btn btn-secondary">close</button>
                    <button type="submit" class="btn btn-primary">Save Change</button>
                </div>
            </div>
        </div>
    </form>
    </div>
   
   
    

@endsection















