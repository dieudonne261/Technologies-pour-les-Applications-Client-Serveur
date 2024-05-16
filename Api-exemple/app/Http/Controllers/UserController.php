<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    public function getAll(){
        /*
        $users = User::all();
        dd(compact('users'));
        return $users;
        $users = [
            [
                'id' => 1,
                'name' => 'Dede',
                'email' => 'Dede@gmail.com',

            ]
        ];
        dd($users);*/

        /*
        $users = User::all();
        //dd(compact('users'));
        return $users;
        */

        $users = DB::table('users')->select('id','name','email')->get();
        return $users;
    }

    public function createUser(Request $request){
        $data = $request->only(['name', 'email', 'password']); 
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password'] 
        ]);

        return response()->json(['message' => 'Utilisateur cree avec succes', 'user' => $user], 200);
    }

    public function getUserById($id){
        $user = User::find($id);
        if (!$user) {
            return response()->json(['message' => 'Utilisateur non trouve'], 404);
        }
        return $user;
    }

    public function updateUser(Request $request, $id){
        $user = User::find($id);
        if (!$user) {
            return response()->json(['message' => 'Utilisateur non trouve'], 404);
        }
        $user->update($request->all());

        return response()->json(['message' => 'Utilisateur mis e jour avec succes', 'user' => $user]);
    }

    public function deleteUser($id){
        $user = User::find($id);
        if (!$user) {
            return response()->json(['message' => 'Utilisateur non trouve'], 404);
        }
        $user->delete();

        return response()->json(['message' => 'Utilisateur supprime avec succes']);
    }
}
