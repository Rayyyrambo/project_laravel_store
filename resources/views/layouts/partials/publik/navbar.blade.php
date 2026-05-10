<nav
      class="navbar navbar-expand-lg px-3"
      style="
        border-bottom: 1px solid rgb(230, 226, 226);
        background-color: rgb(5, 5, 5);
        
        
      "
    >
      <div class="container-fluid p-3 h-auto" style="height: 100px">
        <a class="navbar-brand fw-bold" href="#" style="color: white"
          >ADIDAS-STORE</a
        >
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item ">
              <a class="nav-link  custom-hover fs-5" href="{{ route('home') }}" >HOME</a>
              <style>
                .custom-hover{
                  color: rgb(234, 237, 241);
                }

                .custom-hover:hover{
                  color: rgb(234, 237, 241);
                  border-bottom: 2px solid white;
                }
              </style>
            </li>
            <li class="nav-item fs-5 ">
              <a
                class="nav-link custom-hover"
                href="{{ route('product') }}"
                target="_blank"
               
                >PRODUCT</a>
                 <style>
                .custom-hover{
                  color: rgb(234, 237, 241);
                }

                .custom-hover:hover{
                  color: rgb(234, 237, 241);
                  border-bottom: 2px solid white;
                }
              </style>
            </li>
            <li class="nav-item fs-5">
              <a
                class="nav-link custom-hover"
                target="_blank"
                href="{{ route('about') }}"
                >ABOUT</a>
                <style>
                .custom-hover{
                  color: rgb(234, 237, 241);
                }

                .custom-hover:hover{
                  color: rgb(234, 237, 241);
                  border-bottom: 2px solid white;
                }
                </style>
              
            </li>
            <form class="d-flex mx-2" role="search">
              <input
                class="form-control me-2"
                type="search"
                placeholder="Search"
                aria-label="Search"
              />
              <button class="btn btn-outline-success" type="submit">
                Search
              </button>
            </form>
          </ul>
          @if(Auth::check())
          <a href="{{ route('admin.dashboard') }}" class="btn btn-primary">Dasboard</a>
          @else
          <a href="{{ route('login') }}" class="btn btn-primary" type="submit">LOGIN</a>
          @endif
        </div>
      </div>
    </nav>