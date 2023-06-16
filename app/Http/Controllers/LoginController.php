<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\users;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function vistaLog(){
        return view('Login');
    }
    public function Login(Request $request):RedirectResponse{
        //$this ->ValidateLogin($request);
        $this ->updateLogin($request);
        
        
        $remember=($request->has('remember')? true:false);
        
        if(Auth::attempt(['usuario'=>$request->Nombre,'password'=>$request->Contraseña])){
            
            return redirect()->intended('index2.html');
        }   
        return back()->withErrors([
            'Datos incorrectos'
        ]);
    }

    protected function ValidateLogin(Request $request){
        $this-> validate($request,['usuario'=>'required|string',
        'password'=>'required|string']);
    }

    protected function updateLogin(Request $request){
        $usuario= users::find(1);
        $usuario->password=Hash::make('123');
        $usuario-> save();
    }
}
