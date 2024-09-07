<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('/storage/app/css/questions.style.css')}}">
</head>
<body>
    <h1 class="text-light htmlForm" aria-current="page">{{$lang}}</h1>

    <div class="containerBox bg-secondary-subtle">
        <img src="{{asset('/storage/app/img/close-cancel-svgrepo-com.png')}}" class="iconBox" alt="cancel">

        
        <div class="questionBoxItem" id="question-list">
            <p id="questionList" class="ms-1 ps-1 textBox">Question {{$currentIndex + 1}} of 5</p>
            <h3 id="questions" class="questionItemBox ms-1 ps-1">
                {{$question->question_text}}
            </h3>
                <ul class="ansList ps-2" id="answerList">
                    <li class="ansList-lst">A. &lt;{{$choices[0]->choice_text}}&gt;</li>
                    <li class="ansList-lst">B. &lt;{{$choices[1]->choice_text}}&gt;</li>
                    <li class="ansList-lst">C. &lt;{{$choices[2]->choice_text}}&gt;</li>
                    <li class="ansList-lst">D. &lt;{{$choices[3]->choice_text}}&gt;</li>
                </ul>
        </div>
        <form action="{{url('/app/submitAnswer')}}" method="POST" id="submitAns">
            @csrf()
            <input type="hidden" name="answer" id="answerInput" value="">
            <input type="hidden" name="action" id="actionInput" value="submit"> <!-- Default action is submit -->
            <div id="answer-button" class="btnBoxItem">
            @foreach ($choices as $index => $choice)
                <button 
                    type="button" 
                    class="btn btn-light btnBoxItemList btn-submit"
                    name="answer" 
                    value="{{ $choice['is_correct'] }}" 
                    data-correct="{{ $choice['is_correct'] }}"
                    > 
                    {{ chr(65 + $index) }} <!-- A, B, C, D -->
                </button>
            @endforeach
            </div>
        </form>
        
    </div> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="{{asset('/storage/app/js/questionJs.js')}}"></script>
    <script src="{{asset('/storage/sb-admin2/vendor/jquery/jquery.min.js')}}"></script>
    <script>
        $(document).ready(()=>{
            $('.btn-submit').on('click', function(event) {
                // Prevent the form from submitting immediately
                event.preventDefault();

                var isCorrect = $(this).data('correct') == '1'; 
                $('.btn-submit').prop('disabled', true);

                var selectedValue = $(this).val();
                $('#answerInput').val(selectedValue);

                // Change the button class based on the data-correct attribute for all buttons
                $('.btn-submit').each(function() {
                var isCorrect = $(this).data('correct') == '1'; 
                
                if (isCorrect) {
                    $(this).removeClass('btn-light').addClass('btn-success');
                } else {
                    var button = $(this); 
                    setTimeout(function() {
                        button.removeClass('btn-light').addClass('btn-danger');
                    }, 500);
                }
                });

                setTimeout(function() {
                    $('#submitAns').submit();
                    }, 2500); // 2000 milliseconds = 2 seconds

            });
        });
    </script>
    <script src="{{asset('/storage/sweetAlert/sweetalert2@11.js')}}"></script>
    <script>
        $(document).ready(()=>{
            $('.iconBox').click(()=>{
                Swal.fire({
                title: "Are you sure?",
                text: "Are you sure you want to quit?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes!"
                }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = `{{url('/app')}}`
                };
            });
            });
        });
        
    </script>

</body>
</html>