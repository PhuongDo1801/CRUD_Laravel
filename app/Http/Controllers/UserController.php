<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    //
    public function index(){
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function create(){
        return view("users.create");
    }

    public function store(Request $request){
        // Kiểm tra xem dữ liệu từ client gửi lên bao gốm những gì
        // dd($request);

        // gán dữ liệu gửi lên vào biến data
        $data = $request->all();
        // dd($data);
        // mã hóa password trước khi đẩy lên DB
        $data['password'] = Hash::make($request->password);

        // Tạo mới user với các dữ liệu tương ứng với dữ liệu được gán trong $data
        User::create($data);

        // echo "Success create user";
//        $users = User::all();
        // return view('users.index', compact('users'));
        return redirect('/users');
    }

    public function edit($id){
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id){
        // dd($request);
        $user = User::findOrFail($id);

        $data = $request->all();
        // dd($data);
        $data['password'] = Hash::make($request->password);
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = $data['password'];
        $user->save();
        // echo "Updated";
        return redirect('/users');

    }

    public function delete($id){
        $user = User::findOrFail($id);
        $user->delete();
        // echo "Delete";
        return redirect('/users');
    }
}
