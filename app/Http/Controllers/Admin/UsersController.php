<?php

namespace App\Http\Controllers\Admin;

use App\Users;
use App\DataTables\UsersDatatable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(UsersDatatable $user)
    {
        return $user->render('admin.users.index', ['title' => trans('admin.add')]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create', ['title' => trans('admin.create_admin')]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->validate(request(),
            [
                'name' => 'required',
                'level' => 'required|in:user,company,vendor',
                'email' => 'required|email|unique:admins',
                'password' => 'required|min:6'
            ], [], [
                'name' => trans('admin.name'),
                'level' => trans('admin.level'),
                'email' => trans('admin.email'),
                'password' => trans('admin.password')
            ]
        );
        $data['password'] = bcrypt(request('password'));
        Users::create($data);
        session()->flash('success', trans('admin.record_added'));
        return redirect(aurl('users'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Users::find($id);
        $title = trans('admin.edit');
        return view('admin.users.edit', compact('user', 'title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $this->validate(request(),
            [
                'name' => 'required',
                'level' => 'required|in:user,company,vendor',
                'email' => 'required|email|unique:admins,email,' . $id,
                'password' => 'sometimes|nullable|min:6'
            ], [], [
                'name' => trans('admin.name'),
                'level' => trans('admin.level'),
                'email' => trans('admin.email'),
                'password' => trans('admin.password')
            ]
        );
        if (request()->has('password')) {
            $data['password'] = bcrypt(request('password'));
        }
        Users::where('id', $id)->update($data);
        session()->flash('success', trans('admin.updated_record'));
        return redirect(aurl('users'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Users::find($id)->delete();
        session()->flash('success', trans('admin.deleted_record'));
        return redirect(aurl('users'));
    }

    public function multi_delete(){
        if (is_array(request('item'))){
            Users::destroy(\request('item'));
        }else{
            Users::find(\request('item'))->delete();
        }
        session()->flash('success', trans('admin.deleted_record'));
        return redirect(aurl('users'));
    }
}
