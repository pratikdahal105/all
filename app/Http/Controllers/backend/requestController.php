<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\employee_application;
use App\Models\employer_application;
use Illuminate\Http\Request;

class requestController extends Controller
{
    public function employee(){
        $employees = employee_application::with('employer')->get();
        return view('backend.pages.request.employee', compact('employees'));
    }

    public function employeePending(){
        $employees = employee_application::with('employer')->where('employee_applications.status',0)->get();
        return view('backend.pages.request.pending_employee', compact('employees'));
    }

    public function employeeEdit(Request $request, $id){
        if ($request->isMethod('get')) {
            $employee = employee_application::with('employer')
                ->where('employee_applications.id', $id)
                ->first();
            return view('backend.pages.request.employeeEdit', compact('employee'));
        }

        if ($request->isMethod('post')) {
            try
            {
                $employee = employee_application::findOrFail($id);
                $data = $request->except( '_token');
                if($employee->fill($data)->save()) {
                    return redirect()->route('employeeRequest');
                }
            }
            catch (\Exception $e)
            {
                Return redirect()->route('employeeRequest')->with('error', 'Something Went Wrong');
            }
        }
    }

    public function employer(){
        $employers = employer_application::with('employee')->get();
        return view('backend.pages.request.employer', compact('employers'));
    }

    public function employerPending(){
        $employers = employer_application::with('employee')->where('employer_applications.status',0)->get();
        return view('backend.pages.request.pending_employer', compact('employers'));
    }

    public function employerEdit(Request $request, $id){
        if ($request->isMethod('get')) {
            $employer = employer_application::with('employee')
                ->where('employer_applications.id', $id)
                ->first();
            return view('backend.pages.request.employerEdit', compact('employer'));
        }

        if ($request->isMethod('post')) {
            try
            {
                $employer = employer_application::findOrFail($id);
                $data = $request->except( '_token');
                if($employer->fill($data)->save()) {
                    return redirect()->route('employerRequest');
                }
            }
            catch (\Exception $e)
            {
                Return redirect()->route('employerRequest')->with('error', 'Something Went Wrong');
            }
        }
    }
}
