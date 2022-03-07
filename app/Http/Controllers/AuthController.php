<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Gender;
use App\Models\User;
use AuthenticatesUsers;
class AuthController extends Controller
{



    public function getLoginView(){
        if(Auth::check() ){
            return  redirect('/home');
        }
        return view('auth.login');
    }



    public function doLogin(Request $request){

        $rules=[
            'username'=>'required|max:100|min:5',
            'password'=>'required|max:125|min:5'
        ];

        $data=$request->all();

        $validator=Validator::make($data,$rules);

        if($validator->fails()){
            return redirect()->route('login')->withInput($request->all())->withErrors($validator->errors());
        }

        if(Auth::attempt(['username'=>$data["username"],'password'=>$data["password"]])){
            return redirect('/');

        }else{
            return redirect('/login')->withErrors(['login'=>'username and / or password is /are wrong']);
        }

    }




    public function getRegisterView(){
        if(Auth::check()){
            return  redirect('/');
        }
        $genders=Gender::all();
        return view('auth.register',compact('genders'));
    }

    public function doRegister(Request $request){

        $rules=[
            'firstname'=>'required|max:60|min:5',
            'lastname'=>'max:60',
            'email'=>'required|email|max:125|min:5|unique:users,email',
            'username'=>'required|max:125|min:5|unique:users,username',
            'password'=>'required|max:125|min:5',
            'gender'=>'',
            'bio'=>'max:1000',
            'phone_number'=>'max:20',
            'address'=>'max:125'
        ];
        $data=$request->all();
        $validator=Validator::make($data,$rules);
        if($validator->fails()){
            return redirect('/register')->withInput($data)->withErrors($validator->errors());

        }


        $newUser=new User();
        $newUser->firstname=$data["firstname"];
        $newUser->lastname=$data["lastname"];
        $newUser->email=$data["email"];
        $newUser->username=$data["username"];
        $newUser->password=bcrypt($data["password"]);
        $newUser->bio=$data["bio"];
        $newUser->address=$data["address"];
        $newUser->phone_number=$data["phone_number"];
        $newUser->gender_id=$data["gender"];
        $newUser->save();

        return redirect('/login')->with(["success"=>"Registered Success"]);

    }

    public function doLogout(){
        Auth::logout();
        return redirect('/login');
    }



}
