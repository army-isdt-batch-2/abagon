<div style =height:88vh; class=bg-dark d-flex flex-column flex-shrink-0 p-3 bg-light style="width: 280px;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
      <span class="fs-4"></span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="/department" class="text-white nav-link  @if($active == 'department') active @endif">
          <i class="fa fa-user"></i>
          Department
        </a>
      </li>
      <li>
        <a href="/employees" class="text-white nav-link @if($active == 'employees') active @endif">
          <i class="fa fa-bar-chart"></i>
          Employees
          </a>
      </li>
      <li>
        <a href="/leaves" class="text-white nav-link @if($active == 'leaves') active @endif">
          <i class="fa fa-list"></i>
          leaves
          </a>
      </li>
      <li>
        <a href="/deduction" class="text-white nav-link @if($active == 'deduction') active @endif">
          <i class="fa fa-star"></i>
          Deduction
          </a>
      </li>
      <li>
        <a href="/loan" class="text-white nav-link @if($active == 'loan') active @endif">
          <i class="fas fa-money"></i>
          loan
          </a>
      </li>
      <li>
        <a href="/timekeeping" class="text-white nav-link @if($active == 'timekeeping') active @endif">
          <i class="fa fa-envelope-open"></i>
          timekeeping
          </a>
      </li>
      <li>
        <a href="/payslip" class="text-white nav-link @if($active == 'payslip') active @endif">
          <i class="fa fa-money"></i>
          Payslip
          </a> 
      </li>
      
    </ul>
    <hr>
    <div class="dropdown">
      <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="https://github.com/mdo.png" alt="" class="rounded-circle me-2" width="32" height="32">
        <strong>mdo</strong>
      </a>
      <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
        <li><a class="dropdown-item" href="#">New project...</a></li>
        <li><a class="dropdown-item" href="#">Settings</a></li>
        <li><a class="dropdown-item" href="#">Profile</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">Sign out</a></li>
      </ul>
    </div>
  </div>