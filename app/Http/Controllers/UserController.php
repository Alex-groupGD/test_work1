<?php
namespace App\Models;

namespace App\Http\Controllers;

use App\Http\Requests\UpdateRequest;
use App\Http\Requests\UserRequest;
<<<<<<< HEAD
use App\Http\Requests\userup_request;
=======
>>>>>>> 01df6951b265b392c8c6c60d6087920a5f3999b8
use App\Models\avto;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
<<<<<<< HEAD
    public function index(User $user)
    {

        $users = new User();
        $users = $users->get_users();

        return view('all_clients_page',compact('users'));
=======
    public function index()
    {
        $users = User::get();
        $avtos = avto::get();

        return view('all_clients_page',compact('users') ,compact('avtos'));
>>>>>>> 01df6951b265b392c8c6c60d6087920a5f3999b8
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('sign');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(UserRequest $request)
    {
<<<<<<< HEAD
        $user = User::user_create($request);
        User::avto_create($request,$user);
=======



        $user = User::create($request->only(['family','name','name_father','telephone','gender','adress']));

        $user ->avtos()->create(['marka'=> $request->get('marka'),
            'model'=> $request->get('model'),
            'color'=> $request->get('color'),
            'gos_num'=> $request->get('gos_num'),]);


>>>>>>> 01df6951b265b392c8c6c60d6087920a5f3999b8

        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show(User $user)
    {
<<<<<<< HEAD
        $avtos = User::show_avtos($user);
        return view('my_avto',compact('avtos'),compact('user'));
=======

        $avtos = avto::all()->where('user_id' ,'=' , $user->id);
        return view('my_avto',compact('avtos'),compact('user'));

>>>>>>> 01df6951b265b392c8c6c60d6087920a5f3999b8
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(User $user)
    {

        return view('sign',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\RedirectResponse
     */
<<<<<<< HEAD
    public function update(userup_request $request, User $user)
    {
        User::up_user($request,$user);
=======
    public function update(Request $request, User $user)
    {

        $user->update($request->only(['family','name','name_father','telephone','gender','adress']));
>>>>>>> 01df6951b265b392c8c6c60d6087920a5f3999b8
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(User $user)
    {
<<<<<<< HEAD
        User::delete_user($user);
=======

        $user->delete();
>>>>>>> 01df6951b265b392c8c6c60d6087920a5f3999b8
        return redirect()->route('users.index');
    }







}
