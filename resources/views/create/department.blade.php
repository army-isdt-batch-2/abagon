@php $active = 'department' @endphp
@extends('layouts.main')
@section('title','create department')
@section('content')
    
<div class="row"> 
    <div class="row align-items-center"> 
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body row"> 

                    <div class="col-10">
                        <h4>
                            Department 
                        </h4>
                    </div>
                    
                    <div class="col-12">
                        <hr>    
                    </div>


                    <div class="col-12">
                        <form action="/create_department" method="post">
                            @csrf
                            <div class="col-md-6">
                              <label for="inputEmail4" class="form-label">Department</label>
                              <input type="text" class="form-control" name="department_name" required>
                            </div>
                            
                            <div class="col-12">
                              <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div> 

</div>  
  
@endsection