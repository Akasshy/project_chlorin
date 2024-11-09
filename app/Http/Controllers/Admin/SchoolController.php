<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Industry;
use App\Models\School;
// use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use function Illuminate\Log\log;

class SchoolController extends Controller
{
    public function CRUDSchool(Request $request,$status,$id){
        switch ($status) {
            case 'add' or 'updated':
                $valdator = Validator::make($request->all(), [
                    // 'icon'=> '',
                    'npsn' => 'required',
                    'name' => 'required',
                    'address' => 'required',
                    'headmaster' => 'required',
                ]);
                if ($valdator->fails()) {
                    return log('Error validasi');
                }
                // $industry = Industry::find($id);
                $file_name = null;
                if ($request->file('image')) {
                    $file_name = $request->name . '_image.' . $request->file('image')->getClientOriginalExtension();
                    $request->file('image')->storeAs('image_profile', $file_name);
                }
                School::updateOrCreate(
                    [
                        'id' => $id,
                    ],
                    [
                        'user_id' => $id,
                        'icon' => $file_name,
                        'name' => $request->name,
                        'headmaster' => $request->headmaster,
                        'address' => $request->address,
                    ],
                );
                return redirect('/admin/school');
                break;
            case 'delete':
                $role_data = School::find($id);
                if ($role_data) {
                    $role_data->delete();
                }else{
                    return log('data not found');
                }
                break;

            default:
                // return back()->with('error','status not found');
                log('status not found');
                break;
        }
    }
}
