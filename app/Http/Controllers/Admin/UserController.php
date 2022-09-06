<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //=====================================================================
                            // Custom Methods
    // ====================================================================

    public function changeStatus(User $user)
    {
        $user->status = $user->is_active? 0 : 1;
        $user->save();
        return back()->with('success', 'The status changed successfuly!'); 

    }
    public function changeRole(Request $request, User $user){
        $request->validate([
            'role_id'=> 'required'
        ]);
        $user->role_id = $request->role_id;
        $user->save();
        return back()->with('success', 'The role changed successfuly!');
    }
    public function profile(){
        $user = Auth::user();
        return view('admin.users.profile', compact('user'));
    }
    public function Updateprofile(){
        $user = Auth::user();
        return view('admin.users.update-profile', compact('user'));
    }
    public function updateProfileDetails(Request $request, User $user){
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'date_of_birth' => 'required',
        ]);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->date_of_birth = $request->date_of_birth;
        // return $user;      
        $user->save();
        return redirect()->route('user.profile')->with('success', 'Your Personal Information Updated Successfuly!');
    }
    public function changePassword(Request $request, User $user){
        $validated = $request->validate([
            'old_password' => 'required',
            'new_password' => 'required | min:8',
            'confirm_password' => 'required',
        ]);
        if(!$request->new_password || ($request->new_password !== $request->confirm_password)){
            return back()->with('error', 'Both Password Should Be Same!');
        }
        else{

            // return 'Matched';
            $matchedOldPassword = Hash::check($request->old_password, auth()->user()->password);
            if(!$matchedOldPassword){
                return back()->with('error', 'Old password not matched!');
            }
            $hashNewPassword = Hash::make($request->new_password);
            $user = User::find(auth()->id());
            $user->password = $hashNewPassword;     
            $user->save();
            return back()->with('success', 'The password changed successfuly!');
        }
    }
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $roles = Role::all();
        return view('admin.users.show', compact('user', 'roles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
}
