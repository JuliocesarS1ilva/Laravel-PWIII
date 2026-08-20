<?php
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller {
 public function index(){ return view('users.index',['users'=>User::latest()->get()]); }
 public function create(){ return view('auth.register'); }
 public function store(Request $request){
  $data=$request->validate(['name'=>'required|string|max:100','email'=>'required|email|max:150|unique:users,email','password'=>'required|string|min:6|confirmed']);
  $user=User::create($data);
  return redirect()->route('users.index')->with('success',"Conta de {$user->name} criada e salva no banco de dados!");
 }
}
