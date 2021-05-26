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
                        <form action="/create_deduction" method="post">
                          @csrf
                          <div class="col-md-4">
                          <label class="form-label">Contribution Type</label>
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
                            <input type="text" class="form-control" name="basic_range" required>
                          </div>
                          <div class="col-md-4">
                            <label for="inputEmail4" class="form-label">Monthly Contribution</label>
                            <input type="text" class="form-control" name="montly_contribution" required>
                          </div>
                            <div class="col-md-4">
                              <label for="inputEmail4" class="form-label">Employee Share</label>
                              <input type="text" class="form-control" name="employee_share" required>
                          </div>
                          <div class="col-md-4">
                            <label for="inputEmail4" class="form-label">Employer Share</label>
                            <input type="text" class="form-control" name="employer_share" required>
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