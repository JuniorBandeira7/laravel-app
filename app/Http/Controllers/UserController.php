<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserUpdateRequest;
use app\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function getAllUsers(){
        $users = User::paginate(20);

        return view('users.users', compact('users'));
    }

    public function edit(string $id) {
        if (!$user = User::find($id)) {
            return redirect()->route('users')->with('message', 'Usuário não encontrado!');
        }

        return view('users.edit-user', compact('user'));
    }

    public function update(UserUpdateRequest $request, string $id) {
        if (!$user = User::find($id)) {
            return redirect()->route('users')->with('message', 'Usuário não encontrado!');
        }

        $data = $request->all();
        $user->update($data);

        return redirect()->route('users')->with('success', 'Usuário alterado com sucesso!');
    }

    public function delete(string $id) {
        if (!$user = User::find($id)){
            return redirect()->route('users')->with('message', 'Usuário não encontrado!');
        }

        if ($user->id === Auth::id()) {
            return redirect()->route('users')->with('message','Você não pode apagar a si mesmo!');
        }

        $user->delete();
        return redirect()->route('users')->with('message', 'Usuário excluido com sucesso!');
    }
}
