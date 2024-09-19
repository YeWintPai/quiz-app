<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('/storage/app/css/about.style.css')}}">
        <link rel="stylesheet" href="{{asset('./storage/app/css/style.css')}}" />
        <link rel="stylesheet" href="{{asset('storage/app/css/responsive.css')}}" />
</head>

<body>
    <!-- navbar -->
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
    <!-- navbar -->

    <!-- Introduction -->
    <div class="introduction margin-control-item">
    <h1 class="logoHeading text-dark">&lt;CodeCrafters Quiz/&gt;</h1> <!-- changed logoFont to logoHeading 06.09.2024-->
        <p class="aboutParagraph">This is where you can challenge your coding skills with fun, engaging quizzes and
            level up your programming knowledge!</p>
    </div>
    <!-- Introduction -->

    <!-- Our Members -->
    <div class="margin-control-item">
        <h1 class="aboutHeader">Meet Our Team</h1>
        <div class="profileBox">
            <img src="{{asset('/storage/app/img/profiles/Paing-ag-khant.png')}}" class="float-start my-5 miniPF" alt="Paing Aung Khant">
            <img src="{{asset('/storage/app/img/profiles/et.png')}}"class="mx-auto d-block my-5 miniPF" alt="Ei Thiri Aung">
            <img src="{{asset('/storage/app/img/profiles/thurein-soe.png')}}" class="float-end my-5 miniPF" alt="Thurein Soe">
            <img src="{{asset('/storage/app/img/profiles/mrat.png')}}" class="float-start my-5 miniPF" alt="Mrat Naing Oo">
            <img src="{{asset('/storage/app/img/profiles/kyukyuthin.png')}}" class="mx-auto d-block my-5 miniPF" alt="Kyu Kyu Thin">
            <img src="{{asset('/storage/app/img/profiles/yewintpaingmyelaung.png')}}" class="float-end my-5 miniPF"
                alt="Ye Wint Paing Myel Aung">
        </div>
    </div>
    <!-- Our Members -->

    <!-- Contact Us -->
    <div class="margin-control-item">
        <h1 class="aboutHeader">Contact Us</h1>
        <div class="contactUs">
            <a href="https://www.facebook.com/codemalmyanmar?mibextid=ZbWKwL">
                <img src="{{asset('/storage/app/img/facebook-svgrepo-com.png')}}" class="float-start contactUsLg fbAndIg"
                    alt="Facebook">
            </a>
            <a href="https://t.me/codemalcommunity/1463">
                <img src="{{asset('/storage/app/img/telegram-svgrepo-com.png')}}" class="mx-auto d-block contactUsLg eMail"
                    alt="Telegram">
            </a>
            <a href="https://discord.com/invite/vBVAEvwQ">
                <img src="{{asset('/storage/app/img/discord-svgrepo-com.png')}}" class="float-end contactUsLg fbAndIg" alt="Gmail">
            </a>
        </div>
    </div>
    <!-- Contact Us -->





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>