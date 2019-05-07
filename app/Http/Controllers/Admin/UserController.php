<?php

namespace App\Http\Controllers\Admin;

use App\Events\UserActivationEmail;
use App\Role;
use App\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all()->where('role_id', 2)->sortBy('id');
        $pages = 'ulist';
        return view('admin.user.index', compact('users', 'pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pages = 'uadd';
        $roles = Role::pluck('nama','id')->all();
        return view('admin.user.add', compact('roles','pages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validator($request->all())->validate();
        $user = $this->new($request->all());
        if (empty($user)) { // Failed to register user
            redirect('/admin/user/')->with('Fail', 'Failed to add user'); // Wherever you want to redirect
        }
        event(new Registered($user));
        event(new UserActivationEmail($user));
        return redirect('/admin/user')->with('Success', 'Added New User');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function new(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role_id' => $data['role_id'],
            'active' => false,
            'activation_token' => str_random(20)
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $pages = 'ulist';
        $roles = Role::pluck('nama','id')->all();
        return view('admin.user.edit', compact('user','roles','pages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        if(trim($request->password) == ''){
            $input = $request->except('password');
        } else{
            $input = $request->all();
            $input['password'] = bcrypt($request->password);
        }
//        if ($file = $request->file('file')){
//            $tmp = str_replace(" ", "-",$request->name);
//            $type = $file->getClientOriginalExtension();
//            $name = $tmp."_photos.".$type;
//            $file->move('images', $name);
//            $input['path'] = $name;
//        }
        $user->update($input);
        return redirect('/admin/user')->with('Success', 'User '.$request->name.' Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::where('id', $id)->first();
//        return $user;0
        $user->delete();
        return redirect('/admin/user')->with('Success', 'User Deleted');
    }

    public function deactivate(Request $request)
    {
        $user = User::findOrFail($request->id);
        $user->update(['active' => false]);
        return redirect('/admin/user')->with('Success', 'User Deactivated');
    }

    public function activate(Request $request)
    {
        $user = User::findOrFail($request->id);
//        return $user;
        $user->update(['active' => true]);
        return redirect('/admin/user')->with('Success', 'User Activated');
    }
}
