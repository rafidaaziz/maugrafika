<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
// use App\Http\Requests\StoreUserRequest;
// use Illuminate\Support\Facades\Storage;
// use Illuminate\Foundation\Validation\ValidatesRequests;
// use Illuminate\Foundation\Bus\DispatchesJobs;
// use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class UserController extends Controller
{
    // use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    // use Validator;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::latest()->get();

        return view('master.user.user', compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = new User;
        return view('master.user.form', compact(
            'users'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validator Form
        $validator = Validator::make($request->all(), [
            'user_photo'     => 'required|file|image|mimes:jpeg,png,jpg,svg|max:2048',
            'user_username'    => 'required',
            'user_email'    => 'required',
            'user_password'   => 'required',
            'user_telp'   => 'required|min:11',
            'user_alamat'   => 'required',
        ]);
        
        if ($validator->fails()) {
            return redirect()->route('user.create')
            ->with('failed', 'User Create Not Success');
        }

        // upload image
        $file = $request->file('user_photo');
        $file_name = $file->hashName();
        $file_path = storage_path('app/public/uploads/users');
        $file->move($file_path, $file_name);
    
        //create user
        User::create([
            'user_photo'     => $file_name,
            'user_name' => $request['user_name'],
            'user_username' => $request['user_username'],
            'user_email' => $request['user_email'],
            'user_password' => Hash::make($request['user_password']),
            'user_telp' => $request['user_telp'],
            'user_alamat' => $request['user_alamat'],
        ]);

        return redirect()->route('user.index')
            ->with('success', 'User Created successfully');
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
    public function edit(User $user)
    {
        $users = User::find($user);
        return view('master.user.edit', compact('user'));
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
