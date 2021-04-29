<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\logs;
use App\Models\Department;

class DepartmentController extends Controller
{


    public function index()
    {
        // $departments = Department::all();
        $departments = Department::paginate(6);

        return view('dashboard/department', compact('departments'));
    }


    public function store(Request $request)
    {
        $rules = [
            'department_name'   => 'required',            
            'image'             => 'required',            
        ];
        $this->validate($request, $rules);

        if ($request->file('image')) {
            $image = $request->file('image');
            $newImgName = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('dashboard_assets/departmentImages'), $newImgName);
        } else {
            $newImgName = 'default.jpg';
        }

        Department::create([
            'department_name'  => $request->department_name,
            'image'            => $newImgName,
        ]);

        $action        = 'Add Department';
        $doer          = auth()->user()->email;
        $user          = 'Department Detalis : ' . ' Title : ' . $request->department_name;
        $color         = 'success';
        $description   = 'Department Is Added';

        logs::create([
            'action'       => $action,
            'doer'         => $doer,
            'user'         => $user,
            'color'        => $color,
            'description'  => $description,
        ]);

        // return redirect("/post");
        return redirect("/department")->with('add','');
    }


    public function destroy(Department $department)
    {
        $department->delete($department);
        // $id->save();
        $action        = 'Delete Department';
        $doer          = auth()->user()->email;
        $user          = 'Admin Is Deleted Department' . ' Id : ' . $department->id;
        $color         = 'danger';
        $description   = 'Department Is Deleted';

        logs::create([
            'action'       => $action,
            'doer'         => $doer,               
            'user'         => $user,  
            'color'        => $color,  
            'description'  => $description,     
        ]);

        // return back();
        return redirect("/department")->with('delete','');
    }
}
