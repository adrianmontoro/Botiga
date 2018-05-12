<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use App\User;
use App\Role;
use DB;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('active',true)->where('verified',true)->get();
        return view('users.index')->with(['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = null;
        $roles = Role::all();

        return view('users.create')->with(['user' => $user,'roles' => $roles]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ajaxStore = $request->only('ajax');
        $data = $request->only(['name','surname','country','city','tel','email','password','password_confirmation']);
        $roles = $request->only(['roles']);
        $psswd = $request->only(['password','password_confirmation']);
        if($psswd['password'] === $psswd['password_confirmation']){
            $this->validator($data)->validate();
            User::create([
              'name' => $data['name'],
              'surname' => $data['surname'],
              'country' => $data['country'],
              'city' => $data['city'],
              'tel' => $data['tel'],
              'email' => $data['email'],
              'password' => Hash::make($data['password']),
              'email_token' => base64_encode($data['email'])
            ]);


            $user = DB::table('users')->where('name',$data['name'])->get();
            $user = $user[0];
            foreach($roles as $role){
                DB::table('user_has_role')->insert([
                    'user_id' => $user->id,
                    'role_id' => $role[0]
                ]);
            }

            if($ajaxStore['ajax'] == 1){
                return response()->json($roles);
            }else{
                session()->flash('success','Usuari creat correctament!');
                return redirect()->route('users.index');
            }
        }

        session()->flash('danger','Verifica les dades introduides...');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function show($id)
     {
       $user = User::where('id',$id)->first();
       return view('users.show')->with(['user' => $user]);
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::all();

        return view('users.edit')->with(['user' => $user,'roles' => $roles]);
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
        $data = $request->only(['name','surname','country','city','tel','email','password','password_confirmation']);
        //$roles = $request->only(['roles']);
        $psswd = $request->only(['password','password_confirmation']);
        if($psswd['password'] === $psswd['password_confirmation']){
            $this->validator($data)->validate();
            User::where('id',$id)->update([
                'name' => $data['name'],
                'surname' => $data['surname'],
                'country' => $data['country'],
                'city' => $data['city'],
                'tel' => $data['tel'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
            ]);

            $user = DB::table('users')->where('name',$data['name'])->get();
            $user = $user[0];
            /*DB::table('user_has_role')->where('user_id',$id)->delete();
            foreach($roles as $role){
                DB::table('user_has_role')->insert([
                    'user_id' => $user->id,
                    'role_id' => $role[0]
                ]);
            }*/

            session()->flash('success','Usuari modificat correctament!');
            return redirect()->route('users.index');
        }

        session()->flash('success','Revisa les dades del usuari...');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }
}
