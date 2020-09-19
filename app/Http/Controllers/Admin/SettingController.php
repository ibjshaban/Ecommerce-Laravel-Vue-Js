<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Setting;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    public function setting()
    {
        return view('admin.settings', ['title' => trans('admin.settings')]);
    }

    public function setting_save()
    {
        $data = $this->validate(request(), [
            'logo' => validate_image(),
            'icon' => validate_image(),
            'status' => '',
            'description' => '',
            'keywords' => '',
            'main_lang' => '',
            'message_maintenance' => '',
//            'email' => '',
            'sitename_en' => '',
            'sitename_ar' => '',
        ], [],
            [
                'logo' => trans('admin.logo'),
                'icon' => trans('admin.icon')
            ]);
        if (request()->hasFile('logo')) {
//            !empty(setting()->logo)?Storage::delete(setting()->logo):''; // if statment for delete perv image if exist.
//            $data['logo'] = request()->file('logo')->store('setting');    // add new image.
            $data['logo'] = upload()->upload([
                'file' => 'logo',
                'path' => 'setting',
                'upload_type' => 'single',
                'delete_file' => setting()->logo,
            ]);
        }
        if (request()->hasFile('icon')) {
            $data['icon'] = upload()->upload([
                'file' => 'icon',
                'path' => 'setting',
                'upload_type' => 'single',
                'delete_file' => setting()->setting,
            ]);
        }
        Setting::orderBy('id', 'desc')->update($data);
        session()->flash('success', trans('admin.updated_record'));
        return redirect(aurl('settings'));
    }
}
