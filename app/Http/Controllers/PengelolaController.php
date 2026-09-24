<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PengelolaController extends Controller
{
    //
    public function index(){
        $data['pengelola'] = User::all();
        return view('admin.pengelola.index', $data);
    }

    public function create(){
        return view('admin.pengelola.create');
    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required|string|min:6',
            'username' => 'required|string|unique:user,username',
            'password' => 'required|string',
            'role' => 'required|in:admin,operator'
        ]);

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'role' => $request->role
        ]);

        return redirect('/administrator/pengelola')->with('success', 'User created successful');
    }

    public function delete($id){
        $user = User::find($id);
        if($user){
            $user->delete();
        }

        return redirect('/administrator/pengelola')->with('success', 'Data deleted successfull!');
    }

    public function edit($id){
        $data['user'] = User::find($id);
        if($data['user']){
            return view('admin.pengelola.edit', $data);
        }

        return redirect('/administrator/pengelola')->with('success', 'Data Not Found');
    }

   public function update(Request $request, $id){

        $request->validate([
            'name' => 'required|string|min:6',
            'username' => 'required|string|unique:user,username,'.$id.',id_user',
            'password' => 'nullable|min:6',
            'role' => 'required|in:admin,operator'
        ]);

        $user = User::find($id);
        if(!empty($request->password)){
            $password = bcrypt($request->password);
        }else{
            $password = $user->password;
        }

        $user->update([
            'name' => $request->name,
            'username' => $request->username,
            'password' => $password,
            'role' => $request->role
        ]);

        return redirect('/administrator/pengelola')->with('success', 'User updated successful');
    }

}
