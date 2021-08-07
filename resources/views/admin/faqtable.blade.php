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
                                            
    @foreach($faq as $faq)
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
                                                        <a data-toggle="modal" data-target="#editeFaqmodel" href="#" class="btn btn-icon btn-primary"><i class="fas fa-pen-nib"></i></a>
                                                        <a data-toggle="modal" data-target="#DeleteFaqmodel" href="#" class="btn btn-icon btn-danger"><i class="fas fa-trash-alt"></i></a>
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
                        <label>FAQ Question</label>
                        <input id="project_id" type="text" value="{{$project_id->id}}" class="form-control">


                        <input id="addQue" type="text" class="form-control">

                    </div>
                    <label>FAQ Answare</label>
                    <textarea id="addAns" class="summernote-simple" ></textarea>

                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button data-dismiss="modal" type="button" class="btn btn-secondary">close</button>
                    <button onclick="myfaqsav()" id="faqsavebtn" class="btn btn-primary">Save Change</button>
                </div>
            </div>
        </div>
    </div>
    <!-- ------------------------ Eidt faQ model --------------- -->
    <div class="modal fade" tabindex="-1" role="dialog" id="editeFaqmodel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Do you want to Edit this FAQ?</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
                </div>
                <div class="modal-body">
                    <div class="form-group ">
                        <label>FAQ Question</label>
                        <input type="text" class="form-control">

                    </div>
                    <label>FAQ Answare</label>
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
    <div class="modal fade" tabindex="-1" role="dialog" id="DeleteFaqmodel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Do you want to Delete this FAQ?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
                </div>
                <div class="modal-body">
                    <p> you will not get this FAQ after Delete. Ii will delete form your website</p>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-danger">Delete</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>

@endsection







<script type="text/javascript">

// faq Add New btn Click

function myfaqsav(){
    var id = $('#project_id').val();
    var que = $('#addQue').val();
    var ans = $('#addAns').val();
    addfaq(id,que,ans);
}


// Service Add Method

function addfaq(faqprojectid,faqqus,faqans) {
  
    if(faqprojectid.length==0){
    //  toastr.error('Service Name is Empty !');
    }
    else if(faqqus.length==0){
    //  toastr.error('Service Description is Empty !');
    }
    else if(faqans.length==0){
    //   toastr.error('Service Image is Empty !');
    }
    else{
   
    axios.post('/admin/faqadd', {
            id: faqprojectid,
            que: faqqus,
            ans: faqans,
        })
        .then(function(response) {
            console.log(response)
            $('#faqsavebtn').html("Save");

            if(response.status==200){

              if (response.data == 1) {
                $('#addnewFaqmodel').modal('hide');
            } else {
                $('#addnewFaqmodel').modal('hide');
            }  
         } 
         else{
             $('#addnewFaqmodel').modal('hide');
         }   

    })
    .catch(function(error) {
        console.log(error)
             $('#addnewFaqmodel').modal('hide');
   });

}

}


</script>







