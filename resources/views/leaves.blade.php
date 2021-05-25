@php $active = 'leaves' @endphp
@extends('layouts.main')
@section('title','leaves')
@section('content')
    
<div class="row"> 
    <div class="row align-items-center"> 
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body row"> 

                    <div class="col-10">
                        <h4>
                            Leaves
                        </h4>
                    </div>
                    <div class="col-2 text-end"> 
                        <a href='/create_leaves' class="btn btn-dark pull-right">Create</a>
                    </div> 
                    <div class="col-12">
                        <hr>    
                    </div>

                    <div class="col-8"></div>
                    <div class="col-4 text-end"> 
                        <input type="text" class="form-control" placeholder="Search">
                    </div> 

                    <div class="col-12">
                        <table class="table mt-3">
                            <thead>
                                <tr>
                                    <th class="text-muted" scope="col">Employee ID</th>
                                    <th class="text-muted" scope="col">Leave Type</th>
                                    <th class="text-muted" scope="col">Start</th>
                                    <th class="text-muted" scope="col">End</th>
                                    <th class="text-muted" scope="col">Status</th>
                                    <th class="text-muted" scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Esca</td>
                                    <td>Myfriend</td>
                                    <td>@chingo</td>
                                </tr> 
                                <tr>
                                    <th scope="row">2</th>
                                    <td>lord</td>
                                    <td>Myman</td>
                                    <td>@Orti</td>
                                </tr> 
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Coronel</td>
                                    <td>Myboy</td>
                                    <td>@Kalbo</td>
                                </tr> 
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> 

</div>  
  
@endsection