<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserStoreRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        if($user->save()){
            $profile =new Profile();
            $profile->user_id = $user->id;
            $profile->about = "About Your Information";
            if($profile->save()){
                return redirect('admin/user')->with('success',"New Tag ( $request->name ) is created successfully !");
            }
        }

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
        $user = Auth::user();
        return view('admin.user.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, User $user)
    {
        if(request()->has('password')){
            $password = bcrypt($request->password);
        }else{
            $password = $user->password;
        }

        if($request->hasFile('image')){

            $file = $request->file('image');

            $file_name = uniqid().'_'.$request->image->getClientOriginalName();

            $file->move(public_path().'/profile/',$file_name);

        }else{
            $file_name = $user->profile->profile_image;
        }
        // dd($file_name);
        $old_name = $user->name;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $password;
        
        if($user->save()){
            $profile = Profile::where('user_id',$user->id)->update([
                'about'=>$request->about,
                'facebook_link'=>$request->facebook_link,
                'youtube_link' =>$request->youtube_link,
                'profile_image' => $file_name
            ]);
        };
        if($profile){
            return redirect()->back()->with('success',"$old_name Updated User Profile");
        }
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
    public function editRole($role,$user_id)
    {
        $user= User::where('id',$user_id)->update([
            'is_admin' => $role
        ]);
        if($user){
            return redirect()->back()->with('success',"User Permission Set Successfully");
        }
    }
}
