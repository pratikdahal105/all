<?php

namespace App\Http\Controllers;

use App\Models\employee_application;
use App\Models\employer_application;
use App\Models\Employer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function employee(Request $request)
    {
        $employee = new employer_application();
        $employee['employee_id'] = $request->id;
        $employee['name'] = $request->name;
        $employee['incharge'] = $request->incharge;
        $employee['url'] = $request->url;
        $employee['industry'] = $request->industry;
        $employee['location'] = $request->location;
        $employee['phone'] = $request->phone;
        $employee['email'] = $request->email;
        $employee['subject'] = $request->subject;
        $employee['message'] = $request->message;
        try{
            $employee->save();
            return redirect()->back()->with('success','Data Successfully Recorded!');
        }
        catch (\Exception $e){
            return redirect()->back()->with('error','Unexpected Error Please Try Again!');
        }
    }

    public function employer(Request $request)
    {
        $employer = new employee_application();
        $employer['employer_id'] = $request->id;
        $employer['name'] = $request->name;
        $employer['email'] = $request->email;
        $employer['phone'] = $request->phone;
        $employer['present_address'] = $request->address;
        $employer['nationality'] = $request->nationality;
        $employer['subject'] = $request->subject;
        $employer['message'] = $request->message;
        try{
            $employer->save();
            return redirect()->back()->with('success','Data Successfully Recorded!');
        }
        catch (\Exception $e){
            return redirect()->back()->with('error','Unexpected Error Please Try Again!');
        }
    }
}
