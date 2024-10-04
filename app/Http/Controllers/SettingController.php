<?php

namespace App\Http\Controllers;

use App\Models\setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
public function index()  {
    $collection=setting::all();
    $setting['setting']=$collection->flatMap(function ($collection)  {
        return [$collection->key =>$collection->value];
    });
return view("pages.setting.index",$setting);
}
public function update(Request $reqeust)  {
    try {
        $info=$reqeust->except('_token','logo');
        foreach ($info as $key => $value) {
            setting::where('key',$key)->update(["value"=>$value]);
        }

if ($reqeust->hasFile('logo')) {
    $logo_name=$reqeust->file("logo")->getClientOriginalName();
    setting::where('key','logo')->update(["value"=>$logo_name]);
}

        toastr()->success(trans('messages.Update'));
        return back();
    } catch (\Exception $e) {
        return redirect()->back()->withErrors(['error' => $e->getMessage()]);
    }

}
}
