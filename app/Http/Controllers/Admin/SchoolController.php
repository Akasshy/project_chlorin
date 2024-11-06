<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\School;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    public function CRUDSchool(Request $request,$status,$id){
        switch ($status) {
            case 'add':
                addUpdateIndustry($request, $id);
                break;
            case 'update':
                addUpdateIndustry($request, $id);
                break;
            case 'delete':
                $role_data = School::find($id);
                if ($role_data) {
                    $role_data->delete();
                }else{
                    return back()->with('error','industry not found');
                }
                break;

            default:
                return back()->with('error','status not found');
                break;
        }
    }
}
