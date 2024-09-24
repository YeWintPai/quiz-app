<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Home Page</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
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
    <h1
      class="codecrafter-mobile-header"
      style="font-family: Audiowide, sans-serif"
    >
      &lt;CodeCrafters Quiz&#47;&gt;
    </h1>
    <div class="d-flex mx-5 body-container" style="margin-top: 10vh">
      <img src="{{asset('storage/app/img/homepic-large.png')}}" class="w-50 home-img" />
      <div class="select-box-container w-50 drop-down">
        <p class="choose-language">"Test Your Coding Language"</p>
        <div class="dropdown mx-auto mt-3 btn-drop-down">
          <button
            class="btn w-100 text-start"
            type="button"
            data-bs-toggle="dropdown"
            aria-expanded="false"
          >
            <div
              class="d-flex justify-content-between align-items-center f-size-15"
            >
              Select a category
              <span><i class="drop-down-arrow"></i></span>
            </div>
          </button>
          <ul class="dropdown-menu w-100 f-size-15">
            <li><a class="dropdown-item choose-language-btn" href="{{url('/app/languages/choose')}}" data-lang="html">HTML</a></li>
            <li><a class="dropdown-item choose-language-btn" href="{{url('/app/languages/choose')}}" data-lang="css">CSS</a></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- new -->
    <div class="copyright">@Copyright Code Crafters Myanmar 2024</div>
    <div class="text-danger">
      <a href="{{ route('google-auth') }}">Google Login</a>
    </div>
    <!-- end -->
    <script src="{{asset('/storage/sb-admin2/vendor/jquery/jquery.min.js')}}"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>

    <script>
      $("document").ready(()=>{
         //pass lang to a url
         $(document).on('click', '.choose-language-btn', function(event) {
            event.preventDefault(); // Prevent the default anchor click behavior
            const lang = $(this).data('lang'); // Get the data-language attribute
            window.location.href = `/app/languages/choose?lang=${lang}`; // Redirect the value as a query parameter
        });
      });
    </script>
  </body>
</html>
