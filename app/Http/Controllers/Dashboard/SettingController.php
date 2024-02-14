<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Setting;
use Illuminate\Http\Request;



class SettingController extends Controller
{
   public function update(Request $result , Setting $setting){

    $data = [
        'logo'=>'nullable|image|mimes:jpeg,png,jpg,gif',
        'favicon'=>'nullable|image|mimes:jpeg,png,jpg,gif',
        'facebook'=>'string|nullable',
        'instgram'=>'string|nullable',
        'phone'=>'required|nullable|numeric|nullable',
        'email'=>'email|nullable',
    ];

      foreach (config('app.languages') as $key => $value) {
            $data[$key.'.title'] = 'required|nullable|string|nullable';
            $data[$key.'.content'] = 'string|nullable';
            $data[$key.'.address'] = 'string|nullable';
        }

  $validatedate = $result->validate($data);
  $setting->update($result->except('logo','favicon','_token'));
  
  if($result->file('logo'))
  {
       $file_extension = $result->file('logo')->getClientOriginalExtension();
       $file_name = time().'.'. $file_extension;
       
       $path = 'images/'.$file_name;
       $result->file('logo')->move(public_path('images/'),$file_name);
       
       $setting->update(['logo'=>$path]);
  }

  if($result->file('favicon'))
  {
       $file_extension = $result->file('favicon')->getClientOriginalExtension();
       $file_name = time().'.'. $file_extension;
       
       $path = 'images/'.$file_name;
       $result->file('favicon')->move(public_path('images/'),$file_name);
       
       $setting->update(['favicon'=>$path]);
  }

   
   return redirect()->route('dashboard.setting');
   
   
      
   
    
   }
}
