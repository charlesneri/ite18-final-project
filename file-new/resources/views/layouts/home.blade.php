<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home site</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('cssfile/home.css') }}" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    />
  </head>
  <body>
    
    <div class="container mains">
      <header class="position-sticky">
        <form action="" role="search" method="get">
        <div class="position-sticky mt-1">
          <div class="logo ms-5 ">
            <img id="logo" src="{{ asset('images/logo.png') }}?v={{ time() }}" alt="logo" width="100" />
          </div>
          <div
            class="search-bar position-absolute top-0 start-50 translate-middle"
           >
         <button type="button" role="button" id="search-btn"> <i class="search-icon fa-solid fa-magnifying-glass w-5"></i></button>
            <input
              type="search"
              placehoder="Search...."
              name="search"
              id="search"
            />
          </div>
          
        </div>
      </form>
      </header>
      <main>
        <section>
          
              <div class=" vertical-menu container w-25 position-fixed start-0 ms-5">
                <nav clas="sidenav">
                    <a href="{{ route('homepage') }}" target="_self">
                        <i class="fa-solid fa-house"></i>
                        <span class="option  p-lg-2"><b> Home</b></span>
                      </a
                    >
                    <a href="{{ route('prodlist') }}"
                    target="_self"  >
                        <i class="fa-solid fa-suitcase"></i>
                        <span class="option  p-lg-2"><b> Product</b></span>
                    </a
                    >
                    <a href="#"
                    target="_self"  >
                        <i class="fa-solid fa-table-cells"></i
                        ><span class="option  p-lg-2"><b> Category</b></span>
                    </a
                    >
                    <a href="#"
                    target="_self"  >
                        <i class="fa-solid fa-chart-line"></i
                        ><span class="option  p-lg-2"><b> Finance</b></span>
                    </a
                    >
                    <a href="{{ route('inventory') }}"
                    target="_self"  >
                        <i class="fa-solid fa-plus"></i
                        ><span class="option  p-lg-2"><b> Add product</b></span>
                    </a
                    >

                    <a href="#"
                    target="_self"  >
                        <i class="fa-solid fa-gear"></i
                        ><span class="option  p-lg-2"><b> Settings</b></span>
                    </a
                    >
                    <a href="{{ route('register') }}"
                    target="_self" >
                        <i class="fa-solid fa-user"></i
                        ><span class="option  p-lg-2"><b> Create casher acoount</b></span>
                    </a
                    >
                    <a href="{{ route('home') }}"
                    target="_self" >
                        <i class="fa-solid fa-right-from-bracket"></i
                        ><span class="option p-lg-2"><b>Log out</b></span>
                     </a
                    >
                 </nav>
                  </div>
    

        </section>
      </main>
        <section class="actvity-area">
          <h1 class="recent-act"> Recent Activity</h1>
          <div class="wrapper  w-auto">
    
          <div class="actvity-container col-1 text-bg-light w-50 ms-md-5">
                <h2 class="stock text-black">Stock numbers</h2>
          </div>
          <div class="col-2 text-bg-light">
            <h3 class="Item-Cat">Item Categories</h3>
          </div>
        </div>
        </section>
  </body>
</html>
