<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Are you ready?</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{asset('storage/app/css/startQuiz.css')}}" />
    <link rel="stylesheet" href="{{asset('storage/app/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('storage/app/css/responsive.css')}}" />
  </head>
  <body>
        <!-- new nav to replace -->
        <nav class="navbar navbar-expand-lg navBg">
      <div class="container-fluid navBg">
        <span class="navbar-brand mb-0 logoFont text-white" 
          >&lt;CodeCrafters Quiz/&gt;</span
        >
        <button
          class="navbar-toggler ms-auto"
          type="button"
          data-bs-toggle="offcanvas"
          data-bs-target="#offcanvasNavbar"
          aria-controls="offcanvasNavbar"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon text-dark"></span>
        </button>

        <div
          class="offcanvas offcanvas-end navBg"
          tabindex="-1"
          id="offcanvasNavbar"
          aria-labelledby="offcanvasNavbarLabel"
        >
          <div class="offcanvas-header">
            <button
              type="button"
              class="btn-close btn-close-light"
              data-bs-dismiss="offcanvas"
              aria-label="Close"
            ></button>
          </div>
          <div class="offcanvas-body main-nav">
            <ul
              class="navbar-nav justify-content-end flex-grow-1 pe-3 main-nav-list"
            >
            <li class="nav-item">
                <a class="nav-link" href="{{url('/app/home')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/app/feedback')}}">Feedback</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/app/about')}}">About Us</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <!-- new nav to replace -->

    <!-- body -->
    <div class="container div-container mt-5">
        <h1 style="font-weight: 900;">Are you preparing for the quiz?</h1>
        <button class="btn-start">Start quiz</button>
        <button class="btn-exit">Exit</button>
    </div>
    <script src="{{asset('/storage/sb-admin2/vendor/jquery/jquery.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
      $("document").ready(()=>{
        $('.btn-start').click(()=>{
          var url = new URL(window.location.href);
    
          // Extract the 'lang' and 'diff' parameters
          var lang = url.searchParams.get("lang");
          var diff = url.searchParams.get("diff");

          const newUrl = new URL('{{url('/app/startQuiz1')}}');
          console.log(newUrl);
          newUrl.searchParams.set('lang', lang);
          newUrl.searchParams.set('diff', diff);
          window.location.href = newUrl.toString();
        });

        $('.btn-exit').click(()=>{
          window.location.href = `{{url('/app/home')}}`
        });
      });
    </script>
  </body>
</html>