<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Feedback Form</title>
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
    <link rel="stylesheet" href="{{asset('/storage/app/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('storage/app/css/responsive.css')}}" />
  </head>
  <body class="vh-100">
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

    <!--Form -->
    <div class="d-flex justify-content-center mt-3">
      <form class="col-md-6" action="{{url('/admin/feedbacks/')}}" method="POST">
        @csrf()
        <div class="mb-3 d-flex justify-content-center flex-column">
          <label class="form-label feedback-heading"
            >Was this page helpful?</label
          >
          <label class="form-label feedback-second-heading"
            >We use this feedback to use our guidelines.</label
          >
          <div class="d-flex justify-content-evenly">
            <button class="btn-grey mt-3" type="submit" value="yes" name="helpful">Yes</button>
            <button class="btn-darker-grey mt-3" type="submit" value="no" name="helpful">No</button>
          </div>
          <hr  class="mt-5 mb-5"/>
          <label for="txtAreaFeedback"
            >Can tell us more? <span class="optional">(optional)</span></label
          >
        </div>
        <textarea
          class="feedback-text"
          placeholder="Share your feedback here..."
          id="txtAreaFeedback"
          name="msgDetail"
          maxlength="200"
          required
        >{{old('msgDetail')}}</textarea>
        @if($errors->has('helpful'))
            <p class="text-danger">Please Enter your Messege First and Choose Yes or No later.</p>
            @endif()
        <button type="submit" class="btn-send-feedback mb-3 mt-3">
          Send Feedback
        </button>
      </form>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
