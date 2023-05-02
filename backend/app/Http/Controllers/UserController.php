<?php
namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\SignupRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //register user
 //register user
 public  function register(Request $request){
    $formFields=$request->validated();
    /** @var User $user */
   $user= User::create([
        'name'=>$formFields['name'],
        'email'=>$formFields['email'],
        'password'=>bcrypt($formFields['password'])
    ]);
   $token=$user->createToken('main')->plainTextToken;

   return response(compact('user','token'));
}
    //login user
    public function login(Request $request){
        $formFields=$request->validated();
        if(!Auth::attempt($formFields)){
            return response([
               'message'=>'Invalid Credentials'
            ]);

        }
        /** @var User $user */
        $user=Auth::User();
        $token=$user->createToken('main')->plainTextToken;
        return response(compact('user','token'));
    }


}
