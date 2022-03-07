<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function doLogin(Request $request){
        $rules=[
            'username'=>'required|max:100|min:5',
            'password'=>'required|max:125|min:5'
        ];
        $data=$request->all();

        $validator=Validator::make($data,$rules);

        if($validator->fails()){
            //lazem kol keys nafs el name 3ashan tb2aah easy lama ab3t el api le mobile developer
            $replay=[
                'failed'=>true,
                'errors'=>$validator->errors()->toArray(),
                'data'=>null,
            ];
            return response()->json($replay);//response always in json

        }

        if(Auth::attempt(['username'=>$data["username"],'password'=>$data["password"]])){

            $apiToken=sha1(time());
            $user=Auth::user();
            $user->api_token=$apiToken;//api_token unique id yt3amal ma3 db only
          //$apiToken by3ml tashfeer le api token
            $user->save();

            $replay=[
                'failed'=>false,
                'errors'=>null,
                'data'=>$user,//bel api token
//                'data'=>Auth::user(),
            ];

            return response()->json($replay);


        }else{

            $replay=[
                'failed'=>true,
                'errors'=>['login'=>'username or password in correct'],
                'data'=>null,
            ];
            return response()->json($replay);

        }

    }
}
