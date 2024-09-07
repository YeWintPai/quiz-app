<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Choose Difficulties</title>
    
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="{{asset('/storage/app/css/cho_dif.style.css')}}"/>
    <link rel="stylesheet" href="{{asset('storage/app/css/diff.style.css')}}" />
    <link rel="stylesheet" href="{{asset('storage/app/css/responsive.css')}}" />
  </head>

  <body>
    <!-- navbar -->
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
    <!-- navbar -->

    <!-- Choose Difficulties -->
    <main>
      <div class="row align-items-center justify-content-center">
        
        <a href="{{url('/app')}}" class="col-3 text-center">
          <img
            src="{{asset('/storage/app/img/left-arrow-svgrepo-com.svg')}}"
            alt="arrow left"
            width="50px"
            height="50px"
          />
        </a>
        <h1 class="col-6 langTitle text-center mt-5" id="langTitle"> </h1>
        <div class="col-3"></div>
      </div>
      <div class="container">
        <h3 class="levels col-6 text-center mb-4">Choose Difficulties</h3>
        <div class="buttons">
          <button class="easy rounded-2 text-dark button-format" id="easy-btn">Easy</button>
          <button class="medium rounded-2 text-dark button-format" id="medium-btn">Medium</button>
          <button class="hard rounded-2 text-dark button-format" id="hard-btn">Hard</button>
        </div>
      </div>
    </main>

    <script src="{{asset('/storage/sb-admin2/vendor/jquery/jquery.min.js')}}"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>

    <script>
      $(document).ready(()=>{
        // Get the current URL
        var url = new URL(window.location.href);
        // console.log(url);
        // Use URLSearchParams to get the value of 'lang'
        var lang = url.searchParams.get('lang');
        var UpperCaseLang = lang.toUpperCase();
        // Output the value
        // console.log(UpperCaseLang); 

        // Check if the element exists and set the innerHTML
        if (langTitle && UpperCaseLang) {
            langTitle.innerHTML = UpperCaseLang; 
        }

        // Function to get URL parameter by name using URLSearchParams
        function getParameterByName(name) {
            const urlParams = new URLSearchParams(window.location.search);
            
            return urlParams.get(name);
        }

        // Get the current 'lang' parameter
        console.log(lang);

         // Function to handle button clicks
        function handleButtonClick(difficulty) {
            if (lang) {
                // Redirect to 'app/startQuiz' with both lang and difficulty parameters
                const newUrl = new URL('{{url('/app/Quiz')}}');
                newUrl.searchParams.set('lang', lang);
                newUrl.searchParams.set('diff', difficulty);
                window.location.href = newUrl.toString();
            } else {
                alert('Language parameter is missing!');
            }
        }

        // Add event listeners to buttons using jQuery
        $('#easy-btn').click(function() {
            handleButtonClick('easy');
        });
        $('#medium-btn').click(function() {
            handleButtonClick('medium');
        });
        $('#hard-btn').click(function() {
            handleButtonClick('hard');
        });
      });
    </script>
  </body>
</html>
