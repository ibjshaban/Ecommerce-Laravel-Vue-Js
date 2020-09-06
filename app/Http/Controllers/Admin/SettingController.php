<?php

namespace App\Http\Controllers\Admin;

use App\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    public function setting(){
        return view('admin.settings', ['title'=> trans('admin.settings')]);
    }
    public function setting_save(){
        $data = request()->expect(['_token', '_method']);
        Setting::orderBy('id', 'desc')->update($data);
        session()->flash('success', trans('admin.update.record'));
        return redirect(aurl('settings'));
    }
}
