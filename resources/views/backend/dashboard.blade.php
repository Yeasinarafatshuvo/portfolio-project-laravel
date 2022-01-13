@extends('backend.layout.app')
@section('content')
<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">Admin Menu</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="{{ route('admin.dashboard') }}" class="nav-link align-middle px-0">
                            <i class="fas fa-house-user"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.dashboard') }}" class="nav-link align-middle px-0">
                            <i class="far fa-user"></i> <span class="ms-1 d-none d-sm-inline">Profile</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('about.view') }}" class="nav-link align-middle px-0">
                            <i class="far fa-address-card"></i> <span class="ms-1 d-none d-sm-inline">About</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('skill.view') }}" class="nav-link align-middle px-0">
                            <i class="far fa-address-card"></i> <span class="ms-1 d-none d-sm-inline">Skills</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('banner.view') }}" class="nav-link align-middle px-0">
                            <i class="fab fa-chromecast"></i> <span class="ms-1 d-none d-sm-inline">Banners</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('education.view') }}" class="nav-link align-middle px-0">
                            <i class="fas fa-user-graduate"></i> <span class="ms-1 d-none d-sm-inline">Education</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link align-middle px-0">
                            <i class="fas fa-book-open"></i> <span class="ms-1 d-none d-sm-inline">Experience</span>
                        </a>
                    </li>
                   
                    <li>
                        <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                            <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline">Bootstrap</span></a>
                        <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 1</a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 2</a>
                            </li>
                        </ul>
                    </li>
                    
                </ul>
                <hr>
                
            </div>
        </div>
        <div class="col p-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-dark ">
                <div class="container-fluid ps-0">
                
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse " id="navbarNavDropdown">
                    <ul class="navbar-nav ms-auto">
                      <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="#">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-light" href="#">Features</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-light" href="#">Pricing</a>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                         Yeasin Arafat
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <li><a class="dropdown-item " href="#">Settings</a></li>
                          <li><a class="dropdown-item " href="#">Sign Out</a></li>
                        
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
            <div class="container-fluid p-0">
                @yield('admin.content')
            </div>
        </div>
    </div>
   
</div>
@endsection