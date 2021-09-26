<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\employee_application;
use App\Models\Employer;
use App\Models\employer_application;
use Illuminate\Http\Request;
use Excel;
use App\Imports\EmployeeImport;
use App\Imports\EmployerImport;

class BackendController extends Controller
{
    public function index()
    {
        $employee = employee_application::all();
        $employer = employer_application::all();
        return view('backend.pages.dashboard.Dashboard', compact('employer', 'employee'));
    }

    public function listEmployee()
    {
        $employees = Employee::select('id', 'name', 'nationality', 'industry')
            ->orderBy('id', 'DESC')
            ->get();
        return view('backend.pages.job.employeeList',compact('employees'));
    }

    public function listEmployer()
    {
        $employers = Employer::select('id', 'company_name', 'total_workers', 'industry')
            ->orderBy('id', 'DESC')
            ->get();
        return view('backend.pages.job.employerList', compact('employers'));
    }

    public function newEmployee(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('backend.pages.job.createEmployee');
        }
        if ($request->isMethod('post')) {
            try {
                $employee = new Employee;
                $data = $request->except('_token');
                if ($employee->fill($data)->save()) {
                    return redirect()->route('employeeList');
                }
            } catch (\Exception $e) {
                return redirect()->back()->with('error', 'Something Went Wrong');
            }
        }
    }

    public function newEmployer(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('backend.pages.job.createEmployer');
        }
        if ($request->isMethod('post')) {
            try {
                $employer = new Employer;
                $data = $request->except('_token');
                if ($employer->fill($data)->save()) {
                    return redirect()->route('employerList');
                }
            } catch (\Exception $e) {
                return redirect()->route('employerList')->with('error', 'Something Went Wrong');
            }
        }
    }

    public function updateEmployee(Request $request)
    {
        try
        {
            $employee = Employee::findOrFail($request->id);
            $data = $request->except( '_token', 'id');
            if($employee->fill($data)->save()) {
                return redirect()->route('employeeList');
            }
        }
        catch (\Exception $e)
        {
            Return redirect()->route('employeeList')->with('error', 'Something Went Wrong');
        }
    }

    public function updateEmployer(Request $request)
    {
        try
        {
            $employer = Employer::findOrFail($request->id);
            $data = $request->except( '_token', 'id');
            if($employer->fill($data)->save()){
                return redirect()->route('employerList');
            }
        }
        catch (\Exception $e)
        {
            Return redirect()->route('employerList')->with('error', 'Something Went Wrong');
        }
    }

    public function editEmployee(Employee $employee)
    {
        return view('backend.pages.job.employeeEdit', [
            'employee' => $employee
        ]);
    }

    public function csvEmployee()
    {
        return view('backend.pages.job.uploadEmployee');
    }

    public function uploadEmployee(Request $request)
    {
        $validated = $request->validate([
            'file' => 'required|mimes:xlsx,csv',
        ]);
        try{
            Excel::import(new EmployeeImport, $request->file);
            return redirect()->route('employeeList')->with('success', 'Data Uploaded Sucessfully!');
        }
        catch (\Exception $e){
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function editEmployer(Employer $employer)
    {
        return view('backend.pages.job.employerEdit', [
            'employer' => $employer
        ]);
    }

    public function csvEmployer()
    {
        return view('backend.pages.job.uploadEmployer');
    }

    public function uploadEmployer(Request $request)
    {
        $validated = $request->validate([
            'file' => 'required|mimes:xlsx,csv',
        ]);
        try{
            Excel::import(new EmployerImport, $request->file);
            return redirect()->route('employerList')->with('success', 'Data Uploaded Sucessfully!');
        }
        catch (\Exception $e){
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function deleteEmployer($id)
    {
        $employer = Employer::findOrFail($id);
        $employer->delete();
        return redirect()->route('employerList')->with('error', 'Data Deleted!');
    }

    public function deleteEmployee($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();
        return redirect()->route('employeeList')->with('error', 'Data Deleted!');
    }
}
