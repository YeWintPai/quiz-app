<?php

namespace App\Http\Controllers;
use App\Models\Question;
use App\Models\Choice;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    //
    // public function startQuiz1(){
    //     return view('app.questions');
    // }

    public function startQuiz1(Request $request){
        $lang = $request->query('lang', 'html');  // default to 'html' if not specified
        $diff = $request->query('diff', 'easy');  // default to 'easy' if not specified
        session(['lang' => $lang]);
        
        
        session()->forget(['questions', 'current_question']);
        session()->forget(['results','currentResult']);

        

        $questions = Question::where('language', $lang)
            ->where('difficulty', $diff)
            ->inRandomOrder()
            ->limit(5)
            ->get();

        $questionsWithChoices = [];

        foreach($questions as $question){
            $choices = Choice::select('*')->where('question_id',$question->id)
                ->inRandomOrder()
                ->get();
            
            $questionsWithChoices[] = [
                'question'=>$question,
                'choices'=>$choices
            ];

        }
        session(['results' => 0]);
        session(['questions' => $questionsWithChoices]);
        session(['current_question' => 0]);

        return redirect('/app/showQuestion');
    }

    public function showQuestion(){
        
        // Get the current question index
        $currentQuestionIndex = session('current_question', 0);  // Defaults to 0 if not set
        $questionsWithChoices = session('questions');
        
        
        if($currentQuestionIndex >= count($questionsWithChoices)){
            return redirect('/app/quizFinish');
        }
        
        // Get the current question and choices
        $currentQuestion = $questionsWithChoices[$currentQuestionIndex];
        $lang = strtoupper(session('lang'));

        return view('app.questions', [
            'question' => $currentQuestion['question'],
            'choices' => $currentQuestion['choices'],
            'currentIndex' => $currentQuestionIndex,
        ])->with('lang',$lang);
    }

    public function submitAnswer(Request $request){
        $results = session('results',0);

        //calculate result
        if($request['answer'] === "1"){    
            $results++;
            session(['results'=>$results]);
        };
        
        // Increment the current question index
        $currentQuestionIndex = session('current_question', 0);
        session(['current_question' => $currentQuestionIndex + 1]);


        // Redirect back to show the next question
        return redirect('/app/showQuestion');
    }

    public function quizFinish(){
        // Clear session data related to the quiz
        session()->forget(['questions', 'current_question']);
        session()->forget('lang');

        return view('app.score'); 
    }
}
