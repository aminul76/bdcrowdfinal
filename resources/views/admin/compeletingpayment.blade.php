@extends('admin.layouts.app')

@section('AdminDashbordContent')

<!-- ----------Start app main Content for all project ------------------- -->
<div class="main-content">
                <section class="section">
                    <div class="d-flex justify-content-between align-items-center py-3 px-4">
                        <p>All Comelete Payment</p>
                        <div>
                            <button style="border-radius:20px;" class="btn btn-success" data-toggle="modal" data-target="#admininvest"
                            data-whatever="@mdo">Create Payment</button>
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
                                                        <th>Amonut</th>
                                                        <th> date</th>
                                                        <th>Check</th>
                                                        
                                                        <th>pament</th>
                                                    </tr>
                                                </thead>
                                                <tfoot>
                                                    @php
                                                        $netamount=App\payment::where('status','=','1')->sum('amount');
                                                    @endphp
            
                                                    <tr>
                                                        <th>SI</th>
                                                        <th>Name</th>
                                                        <th>phone</th>
                                                        <th>Total: {{$netamount}}Taka</th>
                                                        <th> date</th>
                                                        <th>Check</th>
                                                    </tr>
                                                </tfoot>
                                                <tbody>
                                                    @foreach ($payments as $key=>$payment)
                                                    <tr>
                                                        <td>{{ $key + 1 }}</td>
                                                        <td>{{$payment->name  }}</td>
                                                        <td>{{ $payment->phone  }}</td>
                                                        <td>{{ $payment->amount  }}</td>
                                                        <td>{{ $payment->created_at  }}</td>
                                                        <td>
                                                            <div id="aniimated-thumbnials" class="list-unstyled row clearfix">
                                                            <a href="{{ asset('uploads/item/'. $payment->image) }}" " data-sub-html="Demo Description">
                                                            <img class="img-responsive thumbnail" src="{{ asset('uploads/item/'. $payment->image) }} " width="50px" height="60px">
                                                        </a>
                                                            </div>
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-success">Payment Compelete</button>

                                                            
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

{{-- start model --}}
<script>                   
    $.fn.modal.Constructor.prototype.enforceFocus = function() {};
   </script>
     <div class="modal fade" id="admininvest" tabindex="-1" role="dialog" aria-labelledby="admininvestLabel"
     aria-hidden="true">
     <div class="modal-dialog" role="document">
       <div class="modal-content">
         <div class="modal-header">
           <h5 class="modal-title" id="admininvestLabel">Member Payment By Admin</h5>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>
         <div class="modal-body">
           <form class="py-5" action="{{route('adminstoreinvest')}}" method="POST" enctype="multipart/form-data" class="panel"  > 
             @csrf
         
             <div class="form-group">
               <label for="inputAddress2">Select Member phone Number</label>

             <select style="width:100%" class="form-control select2" id="nameid" name="user_id" required>
              @foreach ($selectusers as $row)
             <option value="{{$row->id}}">{{$row->name}} {{$row->phone}}</option>
             
              @endforeach
            
                
             </select>
         
           </div>
           <div class="form-group">
            <label for="inputAddress2">Select Project name</label>

          <select style="width:100%" class="form-control select2" id="nameid" name="project_id" required>
           @foreach ($project as $row)
          <option value="{{$row->id}}">{{$row->project_name}}</option>
          
           @endforeach
         
             
          </select>
      
        </div>
               <div class="form-group">
              <label for="inputAddress2">Total Amonut</label>
              <input type="text" class="form-control" id="inputAddress2" placeholder="Total Amonut" name="amount" required>
            </div>
          
            
              <div class="form-group">
                     <h4>Bank Reception Check</h4>
              <input type="file" class="form-control" id="inputAddress2" placeholder="recived check" name="image">
            </div>
             
     
            {{-- <input type="hidden" class="form-control" id="inputAddress2"  name="project_id" value="{{$project->id}}">
            <input type="hidden" class="form-control" id="inputAddress2"  name="projectname" value="{{$project->project_name}}">
            
                <input type="hidden" class="form-control" id="inputAddress2"  name="user_id" value="{{$user->id}}"> --}}
            
            
                  <button type="submit" class="btn btn-success  w50 pull-right c1">Payment</button>
          
          </form>
         </div>
        
       </div>
     </div>
     </div>
     
{{-- model end                       --}}

   @endsection