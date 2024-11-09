<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Industry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use function Illuminate\Log\log;

class IndustryController extends Controller
{
    public function CRUDIndustry(Request $request, $status, $id)
    {
        switch ($status) {
            case 'add' or 'update':
                // addAndUpdate($request, $id);
                $valdator = Validator::make($request->all(), [
                    // 'icon'=> '',
                    'name' => 'required',
                    'owner' => 'required',
                    'address' => 'required',
                    'lat' => 'required',
                    'long' => 'required',
                ]);
                if ($valdator->fails()) {
                    // return back()->withErrors($valdator->errors());
                    log('error validasi');
                }
                $data_roles = Industry::find($id);
                $file_name = null;
                if ($request->file('image')) {
                    $file_name = $request->name . '_image.' . $request->file('image')->getClientOriginalExtension();
                    $request->file('image')->storeAs('image_profile', $file_name);
                }else{
                    $file_name = $data_roles->icon;
                }
                Industry::updateOrCreate(
                    [
                        'id' => $id,
                    ],
                    [
                        'user_id' => $id,
                        'icon' => $file_name,
                        'name' => $request->name,
                        'owner' => $request->owner,
                        'address' => $request->address,
                        'lat' => $request->lat,
                        'long' => $request->long
                    ],
                );
                return redirect('/admin/industry');

                break;
            case 'delete':
                $role_data = Industry::find($id);
                if ($role_data) {
                    $role_data->delete();
                    return redirect('/admin/industry');
                } else {
                    // return back()->with('error', 'industry not found');
                    log('data not found');
                }
                break;

            default:
                // return back()->with('error', 'Status not found');
                log('status not found');
                break;
        }
    }
}
// function addAndUpdate(Request $request, $id)
// {
//     $valdator = Validator::make($request->all(), [
//         // 'icon'=> '',
//         'name' => 'required',
//         'owner' => 'required',
//         'address' => 'required',
//         'lat' => 'required',
//         'long' => 'required',
//     ]);
//     if ($valdator->fails()) {
//         return back()->withErrors($valdator->errors());
//     }
//     // $industry = Industry::find($id);
//     $file_name = null;
//     if ($request->file('image')) {
//         $file_name = $request->name . '_image.' . $request->file('image')->getClientOriginalExtension();
//         $request->file('image')->storeAs('image_profile', $file_name);
//     }
//     Industry::updateOrCreate(
//         [
//             'id' => $id,
//         ],
//         [
//             'user_id' => $id,
//             'icon' => $file_name,
//             'name' => $request->name,
//             'owner' => $request->owner,
//             'address' => $request->address,
//             'lat' => $request->lat,
//             'long' => $request->long
//         ],
//     );
//     // $industry->icon = $file_name;
//     // $industry->name = $request->name;
//     // $industry->owner = $request->owner;
//     // $industry->address = $request->address;
//     // $industry->lat = $request->lat;
//     // $industry->long = $request->long;
//     // $industry->user_id = $id;
//     // $industry->save();
// }
