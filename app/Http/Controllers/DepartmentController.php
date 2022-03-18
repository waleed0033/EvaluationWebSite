<?php

namespace App\Http\Controllers;

use Eloquent;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{

    protected function index()
    {
        $departments = Department::get();

        return view('departments.index',[
            'departments' => $departments
        ]);
    }

    protected function create()
    {
        return view('departments.create');
    }

    protected function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'manager_id' => ['required','numeric','unique:departments,manager_id','exists:users,id'],
        ]);

        Department::create([
            'name' => $request->name,
            'manager_id' => $request->manager_id,
        ]);

        return redirect()->route('departments.index');

    }

    protected function show(Department $department)
    {
        $department1 = ($department);

        //$department1 = $department->with('employees')->get();
        /*foreach ($departmen1 as $item)
        {
            return $item->name;
        }
        dd($departmen1->count());
        */
        /*
        $tes = Department::with('employees')->get();
        return dd($tes);
        */
        //return dd($d->first()->employees->first()->name);

        return view('departments.show',[
            'department1' => $department1
        ]);
    }

    protected function edit(Department $department)
    {
        return view('departments.edit',[
            'department' => $department
        ]);
    }

    protected function update(Department $department,Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'manager_id' => ['numeric','unique:departments,manager_id','exists:users,id'],
        ]);

        $department->update($request->only(['name','manager_id']));

        return redirect()->route('departments.show',$department);
    }
}
