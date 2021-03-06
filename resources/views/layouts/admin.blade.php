<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Dashboard</title>

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet"/>
  <link href="https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

  <!-- PLUGINS CSS STYLE -->
  <link href="{{asset('public/plugins/toaster/toastr.min.css')}}" rel="stylesheet" />
  <link href="{{asset('public/plugins/nprogress/nprogress.css')}}" rel="stylesheet" />
  <link href="{{asset('public/plugins/flag-icons/css/flag-icon.min.css')}}" rel="stylesheet"/>
  <link href="{{asset('public/plugins/jvectormap/jquery-jvectormap-2.0.3.css')}}" rel="stylesheet" />
  <link href="{{asset('public/plugins/ladda/ladda.min.css')}}" rel="stylesheet" />
  <link href="{{asset('public/plugins/select2/css/select2.min.css')}}" rel="stylesheet" />
  <link href="{{asset('public/plugins/daterangepicker/daterangepicker.css')}}" rel="stylesheet" />

  <!-- SLEEK CSS -->
  <link id="sleek-css" rel="stylesheet" href="{{asset('public/css/app.css')}}" /> 

  

  <!-- FAVICON -->
  <link href="{{asset('public/img/favicon.png')}}" rel="shortcut icon" />

  <!--
    HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
  -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script src="{{asset('public/plugins/nprogress/nprogress.js')}}"></script>
</head>
<body class="sidebar-fixed sidebar-dark header-light header-fixed" id="body">

<script>
NProgress.configure({ showSpinner: false });
NProgress.start();
</script>

<div class="mobile-sticky-body-overlay"></div>

<div class="wrapper">
@section('sidebar')
<aside class="left-sidebar bg-sidebar">
    <div id="sidebar" class="sidebar sidebar-with-footer">
      <!-- Aplication Brand -->
      <div class="app-brand">
        <a href="{{asset('/admin/dasboard')}}">
          <svg
            class="brand-icon"
            xmlns="http://www.w3.org/2000/svg"
            preserveAspectRatio="xMidYMid"
            width="30"
            height="33"
            viewBox="0 0 30 33"
          >
            <g fill="none" fill-rule="evenodd">
              <path
                class="logo-fill-blue"
                fill="#7DBCFF"
                d="M0 4v25l8 4V0zM22 4v25l8 4V0z"
              />
              <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
            </g>
          </svg>
          <span class="brand-name">Sleek Dashboard</span>
        </a>
      </div>
      <!-- begin sidebar scrollbar -->
      <div class="sidebar-scrollbar">

        <!-- sidebar menu -->
        <ul class="nav sidebar-inner" id="sidebar-menu">
          

          
            <li  class="has-sub active expand" >
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard"
                aria-expanded="false" aria-controls="dashboard">
                <i class="mdi mdi-view-dashboard-outline"></i>
                <span class="nav-text">Dashboard</span> <b class="caret"></b>
              </a>
              <ul  class="collapse show"  id="dashboard"
                data-parent="#sidebar-menu">
                <div class="sub-menu">
                  
                  
                    
                      <li  class="active" >
                        <a class="sidenav-item-link" href="{{asset('/admin')}}">
                          <span class="nav-text">Ecommerce</span>
                          
                        </a>
                      </li>
                    
                  

                  
                  
                    
                      {{-- <li >
                        <a class="sidenav-item-link" href="analytics.html">
                          <span class="nav-text">Analytics</span>
                          
                          <span class="badge badge-success">new</span>
                          
                        </a>
                      </li> --}}
                    
                  

                  
                </div>
              </ul>
            </li>
          

          

          
            {{-- <li  class="has-sub" >
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#ui-elements"
                aria-expanded="false" aria-controls="ui-elements">
                <i class="mdi mdi-folder-multiple-outline"></i>
                <span class="nav-text">UI Elements</span> <b class="caret"></b>
              </a>
              <ul  class="collapse"  id="ui-elements"
                data-parent="#sidebar-menu">
                <div class="sub-menu">
                  
                  
                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#components"
                      aria-expanded="false" aria-controls="components">
                      <span class="nav-text">Components</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="components">
                      <div class="sub-menu">
                        
                        <li >
                          <a href="alert.html">Alert</a>
                        </li>
                        
                        <li >
                          <a href="badge.html">Badge</a>
                        </li>
                        
                        <li >
                          <a href="breadcrumb.html">Breadcrumb</a>
                        </li>
                        
                        <li >
                          <a href="button-default.html">Button Default</a>
                        </li>
                        
                        <li >
                          <a href="button-dropdown.html">Button Dropdown</a>
                        </li>
                        
                        <li >
                          <a href="button-group.html">Button Group</a>
                        </li>
                        
                        <li >
                          <a href="button-social.html">Button Social</a>
                        </li>
                        
                        <li >
                          <a href="button-loading.html">Button Loading</a>
                        </li>
                        
                        <li >
                          <a href="card.html">Card</a>
                        </li>
                        
                        <li >
                          <a href="carousel.html">Carousel</a>
                        </li>
                        
                        <li >
                          <a href="collapse.html">Collapse</a>
                        </li>
                        
                        <li >
                          <a href="list-group.html">List Group</a>
                        </li>
                        
                        <li >
                          <a href="modal.html">Modal</a>
                        </li>
                        
                        <li >
                          <a href="pagination.html">Pagination</a>
                        </li>
                        
                        <li >
                          <a href="popover-tooltip.html">Popover & Tooltip</a>
                        </li>
                        
                        <li >
                          <a href="progress-bar.html">Progress Bar</a>
                        </li>
                        
                        <li >
                          <a href="spinner.html">Spinner</a>
                        </li>
                        
                        <li >
                          <a href="switcher.html">Switcher</a>
                        </li>
                        
                        <li >
                          <a href="table.html">Table</a>
                        </li>
                        
                        <li >
                          <a href="tab.html">Tab</a>
                        </li>
                        
                      </div>
                    </ul>
                  </li>
                  

                  
                  
                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#icons"
                      aria-expanded="false" aria-controls="icons">
                      <span class="nav-text">Icons</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="icons">
                      <div class="sub-menu">
                        
                        <li >
                          <a href="material-icon.html">Material Icon</a>
                        </li>
                        
                        <li >
                          <a href="flag-icon.html">Flag Icon</a>
                        </li>
                        
                      </div>
                    </ul>
                  </li>
                  

                  
                  
                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#forms"
                      aria-expanded="false" aria-controls="forms">
                      <span class="nav-text">Forms</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="forms">
                      <div class="sub-menu">
                        
                        <li >
                          <a href="basic-input.html">Basic Input</a>
                        </li>
                        
                        <li >
                          <a href="input-group.html">Input Group</a>
                        </li>
                        
                        <li >
                          <a href="checkbox-radio.html">Checkbox & Radio</a>
                        </li>
                        
                        <li >
                          <a href="form-validation.html">Form Validation</a>
                        </li>
                        
                        <li >
                          <a href="form-advance.html">Form Advance</a>
                        </li>
                        
                      </div>
                    </ul>
                  </li>
                  

                  
                  
                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#maps"
                      aria-expanded="false" aria-controls="maps">
                      <span class="nav-text">Maps</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="maps">
                      <div class="sub-menu">
                        
                        <li >
                          <a href="google-map.html">Google Map</a>
                        </li>
                        
                        <li >
                          <a href="vector-map.html">Vector Map</a>
                        </li>
                        
                      </div>
                    </ul>
                  </li>
                  

                  
                  
                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#widgets"
                      aria-expanded="false" aria-controls="widgets">
                      <span class="nav-text">Widgets</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="widgets">
                      <div class="sub-menu">
                        
                        <li >
                          <a href="general-widget.html">General Widget</a>
                        </li>
                        
                        <li >
                          <a href="chart-widget.html">Chart Widget</a>
                        </li>
                        
                      </div>
                    </ul>
                  </li>
                  

                  
                </div>
              </ul>
            </li> --}}
          

          

          
            {{-- <li  class="has-sub" >
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#charts"
                aria-expanded="false" aria-controls="charts">
                <i class="mdi mdi-chart-pie"></i>
                <span class="nav-text">Charts</span> <b class="caret"></b>
              </a>
              <ul  class="collapse"  id="charts"
                data-parent="#sidebar-menu">
                <div class="sub-menu">
                  
                  
                    
                      <li >
                        <a class="sidenav-item-link" href="chartjs.html">
                          <span class="nav-text">ChartJS</span>
                          
                        </a>
                      </li>
                    
                  

                  
                </div>
              </ul>
            </li> --}}
          

          

          
            <li  class="has-sub" >
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#pages"
                aria-expanded="false" aria-controls="pages">
                <i class="mdi mdi-image-filter-none"></i>
                <span class="nav-text">Pages</span> <b class="caret"></b>
              </a>
              <ul  class="collapse"  id="pages"
                data-parent="#sidebar-menu">
                <div class="sub-menu">
                  
                  
                    
                      <li >
                        <a class="sidenav-item-link" href="{{route('admin.user.index')}}">
                          <span class="nav-text">User Profile</span>
                          
                        </a>
                      </li>
                  {{-- <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#authentication"
                      aria-expanded="false" aria-controls="authentication">
                      <span class="nav-text">Authentication</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="authentication">
                      <div class="sub-menu">
                        
                        <li >
                          <a href="sign-in.html">Sign In</a>
                        </li>
                        
                        <li >
                          <a href="sign-up.html">Sign Up</a>
                        </li>
                        
                      </div>
                    </ul>
                  </li> --}}


                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#pages"
                      aria-expanded="false" aria-controls="pages">
                      <span class="nav-text">Manager Pages</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="pages">
                      <div class="sub-menu">

                        <li >
                          <a href="#">Trang ch???</a>
                        </li>

                        
                      </div>
                    </ul>
                  </li>

                  
                  
                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#others"
                      aria-expanded="false" aria-controls="others">
                      <span class="nav-text">Others</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="others">
                      <div class="sub-menu">

                        <li >
                          <a href="{{route('page.index')}}">Pages</a>
                        </li>
                        <li  class="has-sub" >
                          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapseSub" data-target="#otherss"
                            aria-expanded="false" aria-controls="otherss">
                            <span class="nav-text">Product</span>
                          </a>
                          <ul  class="collapseSub"  id="otherss">
                            <div class="sub-menu">
                              <li >
                                <a href="{{route('category.index')}}">Category</a>
                              </li>
                              <li >
                                <a href="{{route('product.index')}}">Products</a>
                              </li>
                              <li >
                                <a href="{{route('product.index')}}">Sizes</a>
                              </li>
                            </div>
                          </ul>
                        </li>
                      
                        <li >
                          <a href="{{route('customer.index')}}">Customer</a>
                        </li>

                        <li >
                          <a href="{{asset('/filemanager')}}">Media</a>
                        </li>

                        
                      </div>
                    </ul>
                  </li>
                  

                  
                </div>
              </ul>
            </li>
          

          

          
            {{-- <li  class="has-sub" >
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#documentation"
                aria-expanded="false" aria-controls="documentation">
                <i class="mdi mdi-book-open-page-variant"></i>
                <span class="nav-text">Documentation</span> <b class="caret"></b>
              </a>
              <ul  class="collapse"  id="documentation"
                data-parent="#sidebar-menu">
                <div class="sub-menu">
                  
                  
                    
                      <li class="section-title">
                        Getting Started
                      </li>
                    
                  

                  
                  
                    
                      <li >
                        <a class="sidenav-item-link" href="introduction.html">
                          <span class="nav-text">Introduction</span>
                          
                        </a>
                      </li>
                    
                  

                  
                  
                    
                      <li >
                        <a class="sidenav-item-link" href="setup.html">
                          <span class="nav-text">Setup</span>
                          
                        </a>
                      </li>
                    
                  

                  
                  
                    
                      <li >
                        <a class="sidenav-item-link" href="customization.html">
                          <span class="nav-text">Customization</span>
                          
                        </a>
                      </li>
                    
                  

                  
                  
                    
                      <li class="section-title">
                        Layouts
                      </li>
                    
                  

                  
                  
                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#headers"
                      aria-expanded="false" aria-controls="headers">
                      <span class="nav-text">Layout Headers</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="headers">
                      <div class="sub-menu">
                        
                        <li >
                          <a href="header-fixed.html">Header Fixed</a>
                        </li>
                        
                        <li >
                          <a href="header-static.html">Header Static</a>
                        </li>
                        
                        <li >
                          <a href="header-light.html">Header Light</a>
                        </li>
                        
                        <li >
                          <a href="header-dark.html">Header Dark</a>
                        </li>
                        
                      </div>
                    </ul>
                  </li>
                  

                  
                  
                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#sidebar-navs"
                      aria-expanded="false" aria-controls="sidebar-navs">
                      <span class="nav-text">layout Sidebars</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="sidebar-navs">
                      <div class="sub-menu">
                        
                        <li >
                          <a href="sidebar-open.html">Sidebar Open</a>
                        </li>
                        
                        <li >
                          <a href="sidebar-minimized.html">Sidebar Minimized</a>
                        </li>
                        
                        <li >
                          <a href="sidebar-offcanvas.html">Sidebar Offcanvas</a>
                        </li>
                        
                        <li >
                          <a href="sidebar-with-footer.html">Sidebar With Footer</a>
                        </li>
                        
                        <li >
                          <a href="sidebar-without-footer.html">Sidebar Without Footer</a>
                        </li>
                        
                        <li >
                          <a href="right-sidebar.html">Right Sidebar</a>
                        </li>
                        
                      </div>
                    </ul>
                  </li>
                  

                  
                  
                    
                      <li >
                        <a class="sidenav-item-link" href="rtl.html">
                          <span class="nav-text">RTL Direction</span>
                          
                        </a>
                      </li>
                    
                  

                  
                </div>
              </ul>
            </li> --}}
          

          
        </ul>

      </div>

      <hr class="separator" />

      <div class="sidebar-footer">
        <div class="sidebar-footer-content">
          <h6 class="text-uppercase">
            Cpu Uses <span class="float-right">40%</span>
          </h6>
          <div class="progress progress-xs">
            <div
              class="progress-bar active"
              style="width: 40%;"
              role="progressbar"
            ></div>
          </div>
          <h6 class="text-uppercase">
            Memory Uses <span class="float-right">65%</span>
          </h6>
          <div class="progress progress-xs">
            <div
              class="progress-bar progress-bar-warning"
              style="width: 65%;"
              role="progressbar"
            ></div>
          </div>
        </div>
      </div>
    </div>
  </aside>
@show
<div class="page-wrapper">
  <!-- Header -->
<header class="main-header " id="header">
<nav class="navbar navbar-static-top navbar-expand-lg">
<!-- Sidebar toggle button -->
<button id="sidebar-toggler" class="sidebar-toggle">
<span class="sr-only">Toggle navigation</span>
</button>
<!-- search form -->
<div class="search-form d-none d-lg-inline-block">
<div class="input-group">
  <button type="button" name="search" id="search-btn" class="btn btn-flat">
    <i class="mdi mdi-magnify"></i>
  </button>
  <input type="text" name="query" id="search-input" class="form-control" placeholder="'button', 'chart' etc."
    autofocus autocomplete="off" />
</div>
<div id="search-results-container">
  <ul id="search-results"></ul>
</div>
</div>

<div class="navbar-right ">
<ul class="nav navbar-nav">
  <!-- Github Link Button -->
  {{-- <li class="github-link mr-3">
    <a class="btn btn-outline-secondary btn-sm" href="https://github.com/tafcoder/sleek-dashboard" target="_blank">
      <span class="d-none d-md-inline-block mr-2">Source Code</span>
      <i class="mdi mdi-github-circle"></i>
    </a>

  </li> --}}
  <li class="dropdown notifications-menu">
    <button class="dropdown-toggle" data-toggle="dropdown">
      <i class="mdi mdi-bell-outline"></i>
    </button>
    <ul class="dropdown-menu dropdown-menu-right">
      <li class="dropdown-header">You have 5 notifications</li>
      <li>
        <a href="#">
          <i class="mdi mdi-account-plus"></i> New user registered
          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 10 AM</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="mdi mdi-account-remove"></i> User deleted
          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 07 AM</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="mdi mdi-chart-areaspline"></i> Sales report is ready
          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 12 PM</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="mdi mdi-account-supervisor"></i> New client
          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 10 AM</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="mdi mdi-server-network-off"></i> Server overloaded
          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 05 AM</span>
        </a>
      </li>
      <li class="dropdown-footer">
        <a class="text-center" href="#"> View All </a>
      </li>
    </ul>
  </li>
  <!-- User Account -->
  <li class="dropdown user-menu">
    <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
      {{-- <img src="{{asset('public/img/user/user.png')}}" class="user-image" alt="User Image" /> --}}
      <span class="d-none d-lg-inline-block">{{Auth::user()->name}}</span>
    </button>
    <ul class="dropdown-menu dropdown-menu-right">
      <!-- User image -->
      <li class="dropdown-header">
        {{-- <img src="{{asset('public/img/user/user.png')}}" class="img-circle" alt="User Image" /> --}}
        <div class="d-inline-block">
          {{Auth::user()->name}} <small class="pt-1">{{Auth::user()->email}}</small>
        </div>
      </li>

      <li>
        <a href="profile.html">
          <i class="mdi mdi-account"></i> My Profile
        </a>
      </li>
      <li>
        <a href="email-inbox.html">
          <i class="mdi mdi-email"></i> Message
        </a>
      </li>
      <li>
        <a href="#"> <i class="mdi mdi-diamond-stone"></i> Projects </a>
      </li>
      <li>
        <a href="#"> <i class="mdi mdi-settings"></i> Account Setting </a>
      </li>

      <li class="dropdown-footer">
        <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            <i class="mdi mdi-logout"></i> Log Out 
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
      </li>
    </ul>
  </li>
</ul>
</div>
</nav>


</header>
@yield('content')

{{-- <footer class="footer mt-auto">
  <div class="copyright bg-white">
    <p>
      &copy; <span id="copy-year">2019</span> Copyright Sleek Dashboard Bootstrap Template by
      <a
        class="text-primary"
        href="http://www.iamabdus.com/"
        target="_blank"
        >Abdus</a
      >.
    </p>
  </div>
</footer> --}}

  <script>
      var d = new Date();
      var year = d.getFullYear();
      document.getElementById("copy-year").innerHTML = year;
  </script>
</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCn8TFXGg17HAUcNpkwtxxyT9Io9B_NcM" defer></script>
<script src="{{asset('public/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('public/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('public/plugins/toaster/toastr.min.js')}}"></script>
<script src="{{asset('public/plugins/slimscrollbar/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('public/plugins/charts/Chart.min.js')}}"></script>
<script src="{{asset('public/plugins/ladda/spin.min.js')}}"></script>
<script src="{{asset('public/plugins/ladda/ladda.min.js')}}"></script>
<script src="{{asset('public/plugins/jquery-mask-input/jquery.mask.min.js')}}"></script>
<script src="{{asset('public/plugins/select2/js/select2.min.js')}}"></script>
<script src="{{asset('public/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js')}}"></script>
<script src="{{asset('public/plugins/jvectormap/jquery-jvectormap-world-mill.js')}}"></script>
<script src="{{asset('public/plugins/jekyll-search.min.js')}}"></script>
<script src="{{asset('public/plugins/daterangepicker/moment.min.js')}}"></script>
<script src="{{asset('public/plugins/daterangepicker/daterangepicker.js')}}"></script>
<script src="{{asset('public/js/chart.js')}}"></script>
<script src="{{asset('public/js/date-range.js')}}"></script>
<script src="{{asset('public/js/map.js')}}"></script>
<script src="{{asset('public/js/custom.js')}}"></script>
<script src="{{asset('public/js/app.js')}}"></script>
<script src="{{asset('public/js/main.js')}}"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{asset('public/js/sleek.js')}}"></script>
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script src="https://cdn.tiny.cloud/1/ra07npuj7d7sgobqeryn7lhveuqea3xducm3snej7xlzsmpp/tinymce/4/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    $('#lfm').filemanager('filepath');
    var editor_config = {
      path_absolute : "http://dropship.local/",
      selector: "textarea",
      plugins: [
      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime media nonbreaking save table contextmenu directionality",
      "emoticons template paste textcolor colorpicker textpattern"
      ],
      toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
      relative_urls: false,
      file_browser_callback : function(field_name, url, type, win) {
      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
      var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

      var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
      if (type == 'image') {
          cmsURL = cmsURL + "&type=Images";
      } else {
          cmsURL = cmsURL + "&type=Files";
      }

      tinyMCE.activeEditor.windowManager.open({
          file : cmsURL,
          title : 'Filemanager',
          width : x * 0.8,
          height : y * 0.8,
          resizable : "yes",
          close_previous : "no"
      });
      }
  };

  tinymce.init(editor_config);
</script>


@if(Session::get('status'))
<script>
  $(window).on('load',function(){
      Swal.fire({
          position: 'center',
          icon: 'success',
          title: 'Add Success !!!',
          showConfirmButton: false,
          timer: 1500
      })
  })
</script>
@endif

@if(Session::get('update'))
<script>
  $(window).on('load',function(){
      Swal.fire({
          position: 'center',
          icon: 'success',
          title: 'Update Success !!!',
          showConfirmButton: false,
          timer: 1500
      })
  })
</script>
@endif

@if(Session::get('delete'))
<script>
  $(window).on('load',function(){
      Swal.fire({
          position: 'center',
          icon: 'success',
          title: 'Delete Success !!!',
          showConfirmButton: false,
          timer: 1500
      })
  })
</script>
@endif


@if(Session::get('exist'))
<script>
  $(window).on('load',function(){
      Swal.fire({
          position: 'center',
          icon: 'error',
          title: 'Already Exist !!!',
          showConfirmButton: false,
          timer: 1500
      })
  })
</script>
@endif

</div>

  </body>
</html>
