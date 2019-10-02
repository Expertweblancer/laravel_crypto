<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use Auth;
use Illuminate\Config;
use Redirect;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function __construct(){

        // $this->middleware('Auth');

    }

    public function index(){
        $data = User::latest()->paginate(8);
        $total_count = User::get()->count();
        return view('users',compact('data', 'total_count'));
    }

    public function create(){
        return view("users.create");
    }

    public function store(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);

        $User = new User;
        $User->name = $request->name;
        $User->email = $request->email;
        $User->password = bcrypt($request->password);
        
        $User->save();
        
        return redirect()->action('UsersController@index')->with('doneMessage', 'Add Done');
    }

    public function edit($id){
       
        $data = User::find($id);
       
        if ($data) {
            return view("users.edit", compact("data"));
        } else {
            return redirect()->action('UsersController@index');
        }
    }

    public function update(Request $request, $id){
        $User = User::find($id);
        if($User){
            $this->validate($request, [
                'name' => 'required',
          
            ]);
            if ($request->email != $User->email) {
                $this->validate($request, [
                    'email' => 'required|email|unique:users',
                ]);
            }
            $User->name = $request->name;
            $User->email = $request->email;
            if ($request->password != "") {
                $User->password = bcrypt($request->password);
            }
         
            $User->save();
            return redirect()->action('UsersController@edit', $id)->with('doneMessage', 'Edit Done');
        } else {
            return redirect()->action('UsersController@index');
        }
        
    }

    public function destroy($id)
    {
         
        $User = User::find($id);
        
        if ($User) {
            // Delete a User photo
             

            $User->delete();
            return redirect()->action('UsersController@index')->with('doneMessage', 'Deleted');
        } else {
            return redirect()->action('UsersController@index');
        }
    }
}
