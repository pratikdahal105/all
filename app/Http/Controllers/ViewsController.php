<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Employee;
use App\Models\Employer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ViewsController extends Controller
{
    public function index()
    {
        return view('Home.index');
    }

    public function privacy()
    {
        return view('Home.privacy_policy');
    }

    public function contact()
    {
        return view('Home.contact');
    }

    public function why_us()
    {
        return view('Home.why_us');
    }

    public function about()
    {
        return view('Home.about');
    }

    public function specific()
    {
        return view('Home.specific_skill');
    }

    public function profile()
    {
        return view('Home.company_profile');
    }

    public function support()
    {
        return view('Home.registration_support');
    }

    public function training()
    {
        return view('Home.technical_training');
    }

    public function employee_form($id)
    {
        return view('Form.employee', compact('id'));
    }

    public function employer_form($id)
    {
        return view('Form.employer', compact('id'));
    }

    public function listEmployee()
    {
        $employees = Employee::select('id', 'age', 'sex', 'nationality', 'japanese_language', 'industry')
            ->where('status', 1)
            ->orderBy('id', 'DESC')
            ->get();
        return view('Form.employeeList', compact('employees'));
    }

    public function listEmployer()
    {
        $employers = Employer::select('id', 'job_title', 'company_address', 'business_content', 'salary', 'industry')
            ->where('status', 1)
            ->orderBy('id', 'DESC')
            ->get();
        return view('Form.employerList', compact('employers'));
    }

    public function employee_detail(Employee $employee)
    {
        if ($employee->status == 1){
            return view('Form.employeeDetail', [
                'employee' => $employee
            ]);
        }
        else {
            return redirect()->back();
        }
    }

    public function employer_detail(Employer $employer)
    {
        if ($employer->status == 1){
            return view('Form.employerDetail', [
                'employer' => $employer
            ]);
        }
        else {
            return redirect()->back();
        }

    }

    public function recruitment($no)
    {
        return view('Home.recruitment', [
            'no' => $no
        ]);
    }

    public function tech()
    {
        return view('Home.technology');
    }

    public function contact_mail(Request $request){
        if ($request->check){
            return redirect()->back()->with('success', 'Email Sent Successfully!');
        }
        else{
            $details = [
                'name' =>   $request->name,
                'email' =>   $request->email,
                'phone' =>   $request->phone,
                'message' =>   $request->message,
            ];
            Mail::to('info@allhrm.com')->send(new ContactMail($details));
            return redirect()->back()->with('success', 'Email Sent Successfully!');
        }
    }
}
