<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\QuestionsController;
use App\Http\Controllers\admin\ChoicesController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\admin\FeedbackController;
use App\Http\Controllers\admin\AuthController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',function(){
    return redirect('/app/');
});
Route::prefix('app')->group(function(){
    Route::get('/', function () {
        return view('app.home');
    });
    
    Route::get('/languages/choose', function() {
        return view('app.chooseDifficulties');
    });
    
    Route::get('/Quiz', function() {
        return view('app.startQuiz');
    });

    Route::get('/startQuiz1', [QuizController::class, 'startQuiz1']);
    Route::get('/showQuestion', [QuizController::class, 'showQuestion']);
    Route::POST('/submitAnswer', [QuizController::class, 'submitAnswer']);
    Route::get('/quizFinish', [QuizController::class, 'quizFinish']);

    Route::get('/home', function(){
        return view('app.home');
    });

    Route::get('/about', function(){
        return view('app.about');
    });

    Route::get('/feedback', function(){
        return view('app.feedback');
    });
    
});



Route::prefix('admin')->group( function() {
    Route::get('/', function () {
        return view('admin.index');
    });

    Route::resource('questions',QuestionsController::class);
    Route::resource('choices',ChoicesController::class);
    Route::resource('feedbacks',FeedbackController::class);
});

Route::get('/auth/google', [AuthController::class, 'redirect'])->name('google-auth');
Route::get('/auth/google/callback', [AuthController::class, 'callback']);

