<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\UserModel;
// use Symfony\Contracts\Service\Attribute\Required;

class CardmemController extends Controller
{
    public function index()
    {
        $user = UserModel::get();

        return view('cardmem', compact('user'));
    }

    public function tambah()
    {
        return view('useradd');
    }
    public function useredit($id)
    {
        $user = UserModel::where('user_id', $id)->get();
        return view('useredit', compact('user'));
    }

    public function userstore(Request $request)
    {
        // $user = new UserModel;
        // $user->username = $request->username;
        // $user->password = $request->password;
        // $user->level = $request->level;

        // $user->save();
        // return redirect('/cardmem');

        $request->validate([
            'username' => 'required|max:8|unique:users',
            'password' => 'required|min:6',
            'level' => 'required'
        ]);

        UserModel::insert([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'level' => $request->level,
        ]);
        return redirect('/cardmem')->with('succes', 'Data berhasil ditambah');
    }

    public function delete($id)
    {
        $deleted = UserModel::where('user_id', $id)->delete();
        return redirect('/cardmem');
    }

    public function usereditsave($id, Request $request)
    {
        $request->validate([
            'username' => 'required|max:8|unique:users',
            'level' => 'required'
        ]);

        UserModel::where('user_id', $id)->update([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'level' => $request->level,
        ]);

        return redirect('/cardmem')->with('succes', 'Data berhasil ditambah');
    }
}
