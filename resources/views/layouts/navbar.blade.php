  <div class="infobar-settings-sidebar-overlay"></div>
    <!-- End Infobar Setting Sidebar -->
    <!-- Start Containerbar -->
    <div id="containerbar">
        <!-- Start Leftbar -->
        <div class="leftbar">
            <!-- Start Sidebar -->
            <div class="sidebar">
                <!-- Start Logobar -->
                <div class="logobar">
                    <a href="{{url('/')}}" class="logo logo-large"><img src="{{URL::asset('assets/images/logo.jpeg') }}" class="img-fluid" alt="logo" style="height: 60px;width: 60px"></a>
                    <a href="{{url('/')}}" class="logo logo-small"><img src="{{URL::asset('assets/images/logo.jpeg') }}" class="img-fluid" alt="logo" style="height: 60px;width: 60px"></a>
                </div>
                <!-- End Logobar -->
                <!-- Start Navigationbar -->
                <div class="navigationbar">
                    <ul class="vertical-menu">
                        <li>
                            <a href="javaScript:void();">
                                <i class="ri-dashboard-line"></i><span>Dashboard</span>
                            </a>
                           <!--  <ul class="vertical-submenu">
                                <li><a href="index-2.html">CRM</a></li>
                                <li><a href="dashboard-ecommerce.html">E-Commerce</a></li>
                            </ul> -->
                        </li>
                         <li>
                            <a href="javaScript:void();">
                                <i class="ri-stack-line"></i><span>Shop Detail</span><i class="ri-arrow-right-s-line"></i>
                            </a>
                            <ul class="vertical-submenu">
                                <li><a href="{{url('/shop/add-shop')}}">Add</a></li>
                                <li><a href="{{url('/shop')}}">View Shop Detail</a></li>
                                <li><a href="{{url('/account')}}">View Account Detail</a></li>
                              
                            </ul>
                        </li>
                        <li>
                            <a href="javaScript:void();">
                                <i class="ri-pen-nib-line"></i><span>Product</span><i class="ri-arrow-right-s-line"></i>
                            </a>
                            <ul class="vertical-submenu">
                                <li><a href="{{url('/variant/search-variant')}}">Add</a></li>
                                <li><a href="{{url('/product')}}">View Product</a></li>
                              
                            </ul>
                        </li>
                        <!--<li>
                            <a href="javaScript:void();">
                                <i class="ri-stack-line"></i><span>Advanced UI</span><i class="ri-arrow-right-s-line"></i>
                            </a>
                            <ul class="vertical-submenu">                                
                                <li><a href="advanced-ui-kits-image-crop.html">Image Crop</a></li>  
                                <li><a href="advanced-ui-kits-jquery-confirm.html">jQuery Confirm</a></li>
                                <li><a href="advanced-ui-kits-nestable.html">Nestable</a></li>
                                <li><a href="advanced-ui-kits-pnotify.html">Pnotify</a></li>
                                <li><a href="advanced-ui-kits-range-slider.html">Range Slider</a></li>
                                <li><a href="advanced-ui-kits-ratings.html">Ratings</a></li>
                                <li><a href="advanced-ui-kits-session-timeout.html">Session Timeout</a></li>
                                <li><a href="advanced-ui-kits-sweet-alerts.html">Sweet Alerts</a></li>
                                <li><a href="advanced-ui-kits-switchery.html">Switchery</a></li>
                                <li><a href="advanced-ui-kits-toolbar.html">Toolbar</a></li>
                                <li><a href="advanced-ui-kits-tour.html">Tour</a></li>
                                <li><a href="advanced-ui-kits-treeview.html">Tree View</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javaScript:void();">
                              <i class="ri-apps-line"></i><span>Apps</span><i class="ri-arrow-right-s-line"></i>
                            </a>
                            <ul class="vertical-submenu">
                                <li><a href="apps-calender.html">Calender</a></li>
                                <li><a href="apps-chat.html">Chat</a></li> 
                                <li>
                                    <a href="javaScript:void();">Email<i class="ri-arrow-right-s-line"></i></a>
                                    <ul class="vertical-submenu">
                                        <li><a href="apps-email-inbox.html">Inbox</a></li>
                                        <li><a href="apps-email-open.html">Open</a></li>
                                        <li><a href="apps-email-compose.html">Compose</a></li>
                                    </ul>
                                </li>
                                <li><a href="apps-kanban-board.html">Kanban Board</a></li>
                                <li><a href="apps-onboarding-screens.html">Onboarding Screens</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javaScript:void();">
                                <i class="ri-todo-line"></i><span>Forms</span><i class="ri-arrow-right-s-line"></i>
                            </a>
                            <ul class="vertical-submenu">
                                <li><a href="form-inputs.html">Basic Elements</a></li>
                                <li><a href="form-groups.html">Groups</a></li>
                                <li><a href="form-layouts.html">Layouts</a></li>
                                <li><a href="form-colorpickers.html">Color Pickers</a></li>
                                <li><a href="form-datepickers.html">Date Pickers</a></li>
                                <li><a href="form-editors.html">Editors</a></li>
                                <li><a href="form-file-uploads.html">File Uploads</a></li>
                                <li><a href="form-input-mask.html">Input Mask</a></li>
                                <li><a href="form-maxlength.html">MaxLength</a></li>
                                <li><a href="form-selects.html">Selects</a></li>
                                <li><a href="form-touchspin.html">Touchspin</a></li>
                                <li><a href="form-validations.html">Validations</a></li>
                                <li><a href="form-wizards.html">Wizards</a></li>
                                <li><a href="form-xeditable.html">X-editable</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javaScript:void();">
                                <i class="ri-bar-chart-line"></i><span>Charts</span><i class="ri-arrow-right-s-line"></i>
                            </a>
                            <ul class="vertical-submenu">
                                <li><a href="chart-apex.html">Apex</a></li>
                                <li><a href="chart-c3.html">C3</a></li>
                                <li><a href="chart-chartistjs.html">Chartist</a></li> 
                                <li><a href="chart-chartjs.html">Chartjs</a></li>
                                <li><a href="chart-flot.html">Flot</a></li>
                                <li><a href="chart-knob.html">Knob</a></li>
                                <li><a href="chart-morris.html">Morris</a></li>
                                <li><a href="chart-piety.html">Piety</a></li>
                                <li><a href="chart-sparkline.html">Sparkline</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javaScript:void();">
                                <i class="ri-paint-line"></i><span>Icons</span><i class="ri-arrow-right-s-line"></i>
                            </a>
                            <ul class="vertical-submenu">
                                <li><a href="icon-dripicons.html">Dripicons</a></li>
                                <li><a href="icon-feather.html">Feather</a></li>
                                <li><a href="icon-flag.html">Flag</a></li>  
                                <li><a href="icon-font-awesome.html">Font Awesome</a></li>
                                <li><a href="icon-ionicons.html">Ion</a></li>
                                <li><a href="icon-line-awesome.html">Line Awesome</a></li>
                                <li><a href="icon-material-design.html">Material Design</a></li>
                                <li><a href="icon-remixicon.html">Remixicon</a></li>
                                <li><a href="icon-simple-line.html">Simple Line</a></li>
                                <li><a href="icon-socicon.html">Socicon</a></li>
                                <li><a href="icon-themify.html">Themify</a></li>
                                <li><a href="icon-typicons.html">Typicons</a></li> 
                            </ul>
                        </li>                        
                        <li>
                            <a href="javaScript:void();">
                                <i class="ri-table-2"></i><span>Tables</span><i class="ri-arrow-right-s-line"></i>
                            </a>
                            <ul class="vertical-submenu">
                                <li><a href="table-bootstrap.html">Bootstrap</a></li>
                                <li><a href="table-datatable.html">Datatable</a></li>
                                <li><a href="table-editable.html">Editable</a></li>
                                <li><a href="table-footable.html">Foo</a></li>
                                <li><a href="table-rwdtable.html">RWD</a></li>
                            </ul>
                        </li>                        
                        <li>
                            <a href="javaScript:void();">
                                <i class="ri-compass-3-line"></i><span>Maps</span><i class="ri-arrow-right-s-line"></i>
                            </a>
                            <ul class="vertical-submenu">
                                <li><a href="map-google.html">Google</a></li>
                                <li><a href="map-vector.html">Vector</a></li>
                            </ul>
                        </li>   
                        <li class="vertical-header">Extras</li>                                           
                        <li>
                            <a href="javaScript:void();">
                              <i class="ri-book-read-line"></i><span>Pages</span><i class="ri-arrow-right-s-line"></i>
                            </a>
                            <ul class="vertical-submenu">
                                <li>
                                    <a href="javaScript:void();">Basic<i class="ri-arrow-right-s-line"></i></a>
                                    <ul class="vertical-submenu">
                                        <li><a href="page-starter.html">Starter</a></li>
                                        <li><a href="page-blog.html">Blog</a></li>
                                        <li><a href="page-faq.html">FAQ</a></li>
                                        <li><a href="page-gallery.html">Gallery</a></li>
                                        <li><a href="page-invoice.html">Invoice</a></li>
                                        <li><a href="page-pricing.html">Pricing</a></li>
                                        <li><a href="page-timeline.html">Timeline</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javaScript:void();">Store<i class="ri-arrow-right-s-line"></i></a>
                                    <ul class="vertical-submenu">
                                        <li><a href="ecommerce-product-list.html">Product List</a></li>
                                        <li><a href="ecommerce-product-detail.html">Product Detail</a></li>
                                        <li><a href="ecommerce-order-list.html">Order List</a></li>
                                        <li><a href="ecommerce-order-detail.html">Order Detail</a></li> 
                                        <li><a href="ecommerce-shop.html">Shop</a></li>
                                        <li><a href="ecommerce-single-product.html">Single Product</a></li>
                                        <li><a href="ecommerce-cart.html">Cart</a></li>
                                        <li><a href="ecommerce-checkout.html">Checkout</a></li>
                                        <li><a href="ecommerce-thankyou.html">Thank You</a></li>
                                        <li><a href="ecommerce-myaccount.html">My Account</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javaScript:void();">Authentication<i class="ri-arrow-right-s-line"></i></a>
                                    <ul class="vertical-submenu">
                                        <li><a href="user-login.html">Login</a></li>
                                        <li><a href="user-register.html">Register</a></li>
                                        <li><a href="user-forgotpsw.html">Forgot Password</a></li>
                                        <li><a href="user-lock-screen.html">Lock Screen</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javaScript:void();">Error<i class="ri-arrow-right-s-line"></i></a>
                                    <ul class="vertical-submenu">
                                        <li><a href="error-comingsoon.html">Coming Soon</a></li>  
                                        <li><a href="error-maintenance.html">Maintenance</a></li>
                                        <li><a href="error-404.html">Error 404</a></li>
                                        <li><a href="error-500.html">Error 500</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>   
                        <li>
                            <a href="widgets.html">
                                <i class="ri-bubble-chart-line"></i><span>Widgets</span><span class="badge badge-success float-right">New</span>
                            </a>
                        </li>                       -->                    
                    </ul>
                </div>
                <!-- End Navigationbar -->
            </div>
            <!-- End Sidebar -->
        </div>
        <!-- End Leftbar -->

        
  
        <!-- Start Rightbar -->
        <div class="rightbar">
            <!-- Start Topbar Mobile -->
            <div class="topbar-mobile">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="mobile-logobar">
                            <a href="index-2.html" class="mobile-logo"><img src="{{asset('images/logo2.png') }}" class="img-fluid" alt="logo"></a>
                        </div>
                        <div class="mobile-togglebar">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <div class="topbar-toggle-icon">
                                        <a class="topbar-toggle-hamburger" href="javascript:void();">
                                            <span class="iconbar">
                                                <i class="ri-more-fill menu-hamburger-horizontal"></i>
                                                <i class="ri-more-2-fill menu-hamburger-vertical"></i>
                                            </span>
                                         </a>
                                     </div>
                                </li>
                                <li class="list-inline-item">
                                    <div class="menubar">
                                        <a class="menu-hamburger" href="javascript:void();">
                                            <span class="iconbar">
                                                <i class="ri-menu-2-line menu-hamburger-collapse"></i>
                                                <i class="ri-close-line menu-hamburger-close"></i>
                                            </span>
                                         </a>
                                     </div>
                                </li>                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Topbar -->
            <div class="topbar">
                <!-- Start row -->
                <div class="row align-items-center">
                    <!-- Start col -->
                    <div class="col-md-12 align-self-center">
                        <div class="togglebar">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <div class="menubar">
                                        <a class="menu-hamburger" href="javascript:void();">
                                            <span class="iconbar">
                                                <i class="ri-menu-2-line menu-hamburger-collapse"></i><i class="ri-close-line menu-hamburger-close"></i>
                                            </span>
                                         </a>
                                     </div>
                                </li>
                               <!--  <li class="list-inline-item">
                                    <div class="searchbar">
                                        <form>
                                            <div class="input-group">
                                              <input type="search" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                                              <div class="input-group-append">
                                                <button class="btn" type="submit" id="button-addon2"><i class="ri-search-line"></i></button>
                                              </div>
                                            </div>
                                        </form>
                                    </div>
                                </li> -->
                            </ul>
                        </div>
                        <div class="infobar">
                            <ul class="list-inline mb-0">
                               
                                <li class="list-inline-item">
                                    <div class="profilebar">
                                        <div class="dropdown">
                                          <a class="dropdown-toggle" href="#" role="button" id="profilelink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{asset('images/logo2.png') }}" class="img-fluid" alt="profile">{{ Auth::user()->name }} <span class="caret"></span></a>
                                           <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                                        </div>
                                    </div>                                   
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End col -->
                </div> 
                <!-- End row -->
            </div>
                   <div class="rightbar">
            <!-- Start Topbar Mobile -->
            <div class="topbar-mobile">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="mobile-logobar">
                            <a href="index-2.html" class="mobile-logo"><img src="assets/images/logo.svg" class="img-fluid" alt="logo"></a>
                        </div>
                        <div class="mobile-togglebar">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <div class="topbar-toggle-icon">
                                        <a class="topbar-toggle-hamburger" href="javascript:void();">
                                            <span class="iconbar">
                                                <i class="ri-more-fill menu-hamburger-horizontal"></i>
                                                <i class="ri-more-2-fill menu-hamburger-vertical"></i>
                                            </span>
                                         </a>
                                     </div>
                                </li>
                                <li class="list-inline-item">
                                    <div class="menubar">
                                        <a class="menu-hamburger" href="javascript:void();">
                                            <span class="iconbar">
                                                <i class="ri-menu-2-line menu-hamburger-collapse"></i>
                                                <i class="ri-close-line menu-hamburger-close"></i>
                                            </span>
                                         </a>
                                     </div>
                                </li>                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Topbar -->
            <div class="topbar">
                <!-- Start row -->
                <div class="row align-items-center">
                    <!-- Start col -->
                    <div class="col-md-12 align-self-center">
                        <div class="togglebar">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <div class="menubar">
                                        <a class="menu-hamburger" href="javascript:void();">
                                            <span class="iconbar">
                                                <i class="ri-menu-2-line menu-hamburger-collapse"></i><i class="ri-close-line menu-hamburger-close"></i>
                                            </span>
                                         </a>
                                     </div>
                                </li>
                                <li class="list-inline-item">
                                    <div class="searchbar">
                                        <form>
                                            <div class="input-group">
                                              <input type="hidden" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                                              <div class="input-group-append">
                                                <!-- <button class="btn" type="submit" id="button-addon2"><i class="ri-search-line"></i></button> -->
                                              </div>
                                            </div>
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="infobar">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <div class="profilebar">
                                        <div class="dropdown">
                                          <a class="dropdown-toggle" href="#" role="button" id="profilelink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                                           <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                                        </div>
                                    </div>                                   
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End col -->
                </div> 
                <!-- End row -->
            </div>
            <!-- End Topbar -->
            <!-- Start Breadcrumbbar -->                    
           