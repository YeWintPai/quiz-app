<?php

namespace App\Http\Controllers\admin;

use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function redirect(){
        
        return Socialite::driver('google')->redirect();
        // dd(Socialite::driver('google')->redirect());
    }

    public function callback(){
        
        if(!request()->has('code')){
            return 'You have canceled the Google login process.';
        };
        
        $google_user = Socialite::driver('google')->user();
        try{
            
            $user = User::where('google_id',$google_user->getId())->first();
            if( !$user ){

                $user = User::where('email',$google_user->getEmail())->first();
                if( $user ){
                    $user->google_id = $google_user->getId();
                    $user->save();
                }else{
                    $user = User::create([
                        'name' => $google_user->getName(),
                        'email' => $google_user->getEmail(),
                        'google_id' => $google_user->getId(),
                    ]);
                }

                Auth::login($user);
                return 'user authenticated successfully.';
            }else{
                Auth::login($user);
                return 'user logged in successfully.';
            }
        } catch(\Throwable $th){
            dd('pressed cancel');
            dd($th->getMessage());
            dd('catch scope function executed. Error is '.$th->getMessage());
        }
        
        
    }
}
