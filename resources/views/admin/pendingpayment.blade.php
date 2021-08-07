@extends('admin.layouts.app')

@section('AdminDashbordContent')

<!-- ----------Start app main Content for all project ------------------- -->
<div class="main-content">
                <section class="section">
                    <div class="d-flex justify-content-between align-items-center py-3 px-4">
                        <p>All Pending Payment</p>
                        <div>
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
                                                        <th>amonut</th>
                                                        <th> date</th>
                                                        <th>Check</th>
                                                        
                                                        <th>pament</th>
                                                    </tr>
                                                </thead>
                                                <tfoot>
                                                    @php
                                                    $netamount=App\payment::where('status','=','0')->sum('amount');
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
                                                        <form action="{{ route('admin.payment.status', $payment->id) }}" class="form-inline" style="display: inline-block!important;" method="post">
                                                            @csrf
                                                            @if ($payment->status)
                                                            <input type="submit" value="payment" class="btn btn-danger">
                                                            @else
                                                            <input type="submit" value="payment is ok" class="btn btn-success">
                                                            @endif
                                                          </form>
            
                                                          
                                                            {{-- <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Payment is cheek bt payment is flase so delete')){
                                                            event.preventDefault();
                                                            document.getElementById('delete-form-{{ $payment->id }}').submit();
                                                           }else {
                                                             event.preventDefault();
                                                              }"><i class="material-icons">delete</i></button> --}}
            
                                                    <form id="delete-form-{{ $payment->id }}" action="{{ route('paymentdelete',$payment->id) }}" style="display: none;" method="POST">
                                                        @csrf
            
                                                            </form>
                                                        <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure? You want to delete this?')){
                                                        event.preventDefault();
                                                        document.getElementById('delete-form-{{ $payment->id }}').submit();
                                                    }else {
                                                        event.preventDefault();
                                                        }"><i class="material-icons">delete</i></button>
                                                            
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