<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Total Results</title>
    <link rel="stylesheet" href="{{asset('./storage/app/css/result.style.css')}}" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
  </head>

  <body>
    <!-- Result -->
    <main>
      <div class="result-container">
        @if(session('results')==0)
        <img src="{{asset('/storage/app/img/sad-emoji.png')}}" class="trophy-img" alt="trophy" />
        @else
          <img src="{{asset('/storage/app/img/trophy-1.png')}}" class="trophy-img" alt="trophy" />
        @endif()
        
        <div class="card text-center mx-auto my-auto card-container">
          <div class="card-body resultCard">
          @if(session('results')==0)
            <h5 class="card-title h1 text-dark fw-bolder mt-5">
              Great Effort!
            </h5>
          @else
            <h5 class="card-title h1 text-dark fw-bolder mt-5">
              Congratulations!
            </h5>
          @endif()
            
            <p class="card-text text-dark h4 mt-5">You scored {{session('results')}} out of 5.</p>
            @switch(session('results'))
            @case(session('results')==0)
            <p class="card-text text-dark h5 mt-5">
              Looks like this topic needs a bit more practice.
            </p>
            <p class="card-text text-dark h5">
              No worries, learning is a journey!
            </p>
            @break
            @case(session('results')==1)
            <p class="card-text text-dark h4 mt-3">
              You have got the basics down. Let's build on that!
            </p>
            @break
            @case(session('results')==2)
            <p class="card-text text-dark h4 mt-3">
              You have got the basics down. Let's build on that!
            </p>
            @break
            @case(session('results')==3)
            <p class="card-text text-dark h4 mt-3">
              You have got the basics down. Let's build on that!
            </p>
            @break
            @case(session('results')==4)
            <p class="card-text text-dark h4 mt-3">
              Excellent Job! You've mastered the challenge.
            </p>
            @break
            @case(session('results')==5)
            <p class="card-text text-dark h4 mt-3">
              Excellent Job! You've mastered the challenge.
            </p>
            @break
            @endswitch()

            <a href="{{url('/app')}}" class="btn btn-result mt-5">Take another quiz</a>
          </div>
        </div>
      </div>
    </main>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v20.0" nonce="N6IJL1gm"></script>
  </body>
</html>
