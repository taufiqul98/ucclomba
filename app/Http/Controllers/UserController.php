<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use App\User;
class UserController extends Controller
{
    function login(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');
        // return $email . " " . $password;
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            // Authentication passed...
            return redirect()->intended('dashboard');
        }else{
            return 'username atau password salah';
        }
    }
    function register(Request $request){
        // dd($request);
        
        $email = $request->email;
        $name = $request->name;
        $password = $request->password;
        $passwordconfirm = $request->passwordconfirm;
        if($email == null){
            return 'email kosong';
        }
        if($name == null){
            return 'nama kosong';
        }
        if($password == null){
            return "password kosong";
        }
        if($passwordconfirm == null){
            return "password confirm kosong";
        }
        if($password != $passwordconfirm){
            return "password confirm tidak sama";
        }
        $data = User::where('email', $email)->first();
        if($data != null){
            return 'email sudah ada';
        }
        $user = new User();
        $user->email = $email;
        $user->name = $name;
        $user->password = bcrypt($password);
        $user->save();
        $id = $user->id;
        Auth::loginUsingId($id);
        return redirect('dashboard');
    }
   
}