<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Users $users)
    {
        //
        $this->model = $users;
    }


    public function getAll(){
        return "getALL";
    }

    public function get($id){
        return "get" . $id;
    }

    public function store(Request $request){
        dd($request->all());
    }

    public function update($id, Request $request){
        dd($id, $request->all());
    }

    public function destroy($id){
        dd($id);
    }


    //
}
