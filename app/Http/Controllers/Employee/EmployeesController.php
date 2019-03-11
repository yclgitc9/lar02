<?php

namespace App\Http\Controllers\Employee;

use App\Employee;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use App\Department;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\App\Employee\StoreEmployeesRequest;
use App\Http\Requests\App\Employee\UpdateEmployeesRequest;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::all();
        
        $departments = Department::all();
        // dd($departments);
        return view('app.employees.index', compact('employees', 'departments'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }
        $roles = Role::get()->pluck('name', 'name');
        $departments = Department::get()->pluck('name', 'id');

        return view('app.employees.create', compact('departments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEmployeesRequest $request)
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }
        $employee = Employee::create($request->all());

        return redirect()->route('employees.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }
        $employee = Employee::findOrFail($id);
        $departments = Department::all();
        return view('app.employees.edit', compact('employee', 'departments'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEmployeesRequest $request, $id)
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }
        $employee = Employee::findOrFail($id);
        $employee->update($request->all());

        return redirect()->route('employees.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // if (! Gate::allows('users_manage')) {
        //     return abort(401);
        // }
        $employee = Employee::findOrFail($id);
        $employee->delete();

        return redirect()->route('employees.index');
    }
}
