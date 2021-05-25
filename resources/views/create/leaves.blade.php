@php $active = 'leaves' @endphp
@extends('layouts.main')
@section('title','create leaves')
@section('content')
    
<div class="row"> 
  <div class="row align-items-center"> 
      <div class="col-12 mt-5">
          <div class="card">
              <div class="card-body row"> 

                  <div class="col-10">
                      <h4>
                          Apply Leave 
                      </h4>
                  </div>
                  
                  <div class="col-12">
                      <hr>    
                  </div>

                 

                  <div class="col-12">
                      <form class="row g-3">
                          <div class="col-md-4">
                            <label for="inputEmail4" class="form-label">Employee ID</label>
                            <input type="email" class="form-control" id="inputEmail4">
                          </div>
                          <div class="col-md-4">
                            <label for="inputEmail4" class="form-label">Full Name</label>
                            <input type="email" class="form-control" id="inputEmail4">
                          </div>
                          <div class="col-md-4">
                            <label for="inputEmail4" class="form-label">Designation</label>
                            <input type="email" class="form-control" id="inputEmail4">
                          </div>

                          <div class="col-md-4">
                            <div class="col-md-12">
                              <label for="inputEmail4" class="form-label">Leave type</label>
                              <input type="email" class="form-control" id="inputEmail4">
                            </div>
                            <div class="col-md-12">
                              <label for="inputEmail4" class="form-label">Start</label>
                              <input type="email" class="form-control" id="inputEmail4">
                            </div>
                            <div class="col-md-12">
                              <label for="inputEmail4" class="form-label">End</label>
                              <input type="email" class="form-control" id="inputEmail4">
                            </div>
                          </div>
                          <div class="col-md-8">
                            <div class="col-md-12">
                              <label for="inputEmail4" class="form-label">Notes</label>
                              <textarea rows="6" class="form-control"></textarea>
                            </div>
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