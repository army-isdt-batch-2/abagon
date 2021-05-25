@php $active = 'payslip' @endphp
@extends('layouts.main')
@section('title','create payslip')
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
                      <form class="row g-3">
                          <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Process Payroll</label>
                            <input type="date" class="form-control" id="inputEmail4">
                          </div>
                          <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Cut-off End</label>
                            <input type="date" class="form-control" id="inputEmail4">
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