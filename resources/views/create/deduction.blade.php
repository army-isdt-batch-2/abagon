@php $active = 'deduction' @endphp
@extends('layouts.main')
@section('title','create deduction')
@section('content')
    
<div class="row"> 
  <div class="row align-items-center"> 
      <div class="col-12 mt-5">
          <div class="card">
              <div class="card-body row"> 

                  <div class="col-10">
                      <h4>
                          Deductions 
                      </h4>
                  </div>
                  
                  <div class="col-12">
                      <hr>    
                  </div>

                 

                  <div class="col-12">
                      <form class="row g-3">
                        <div class="col-md-4">
                          <label for="inputState" class="form-label">Contribution Type</label>
                          <select id="inputState" class="form-select">
                          <option selected>Choose....</option>
                          <option>Tax</option>
                          <option>SSS</option>
                          <option>Pheal Health</option>
                          <option>Pag Ibig</option>
                          </select>
                        </div>
                          <div class="col-md-8">
                            <label for="inputEmail4" class="form-label">Base Range</label>
                            <input type="email" class="form-control" id="inputEmail4">
                          </div>
                          <div class="col-md-4">
                            <label for="inputEmail4" class="form-label">Monthly Contribution</label>
                            <input type="email" class="form-control" id="inputEmail4">
                          </div>
                            <div class="col-md-4">
                              <label for="inputEmail4" class="form-label">Employee Share</label>
                              <input type="email" class="form-control" id="inputEmail4">
                          </div>
                          <div class="col-md-4">
                            <label for="inputEmail4" class="form-label">Employer Share</label>
                            <input type="email" class="form-control" id="inputEmail4">
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