<div class="navbar" id="menuHolder">
    <div role="navigation" class="fixed-top border-bottom border-top" id="mainNavigation">
        <div class="flexMain container-fluid m-0">
            <div class="row rownav justify-content-center align-items-center">
                <div class="col-4">
                    <div class="">
                        <button class="whiteLink siteLink" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample"><i class="fas fa-bars me-2"></i> MENU</button>
                    </div>
                </div>
                <div class="col-4">
                <div class=" text-center" id="siteBrand">
                    <a class="nav-link" href="{{route('home')}}">Chirper</a>
                </div>
            </div>
            
                <div class="col-4 top-0 end-0">
                <div class=" access text-end d-md-block">
                    <ul class="navbar-nav">
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <button class="blackLink siteLink">Account</button>
                            </a>
                            
                            <ul class="dropdown-menu dropdown-menu-end">
                                @guest
                                <li><a class="blackLink siteLink dropdown-item" href="{{route('register')}}">Registrati</a></li>
                                <li><a class="blackLink siteLink dropdown-item" href="{{route('login')}}">Accedi</a></li>
                                @endguest
                                @auth
                                <li>
                                    <form  method="POST" action="{{route('logout')}}">
                                        @csrf
                                        <button class="dropdown-item blackLink siteLink" type="submit">Logout</button>
                                    </form>
                                </li>
                                @endauth
                        </li> 
                                 
                            </ul>
                        </li>
                    
                    </ul>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>


<div class="offcanvas offcanvas-start"  tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <div class="" id="siteBrand">
        <a class="nav-link" href="home')}}">Chirper</a>
    </div>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div>
        <div>
            <a href={{route('home')}} class="nav-menu-item"><i class="fas fa-home me-3"></i>Home</a>
            <a href='' class="nav-menu-item"><i class="fab fa-product-hunt me-3"></i>Profilo</a>
            <a href='' class="nav-menu-item"><i class="fas fa-search me-3"></i>Crea Post</a>
            <a href="#" class="nav-menu-item"><i class="fas fa-wrench me-3"></i>Services</a>
            <a href="#" class="nav-menu-item"><i class="fas fa-dollar-sign me-3"></i>Pricing</a>
            <a href="#" class="nav-menu-item"><i class="fas fa-file-alt me-3"></i>Blog</a>
            <a href="#" class="nav-menu-item"><i class="fas fa-building me-3"></i>About Us</a>
        </div>
    </div>
  </div>
</div>