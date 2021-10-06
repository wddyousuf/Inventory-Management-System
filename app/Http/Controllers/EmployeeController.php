<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeRequest;
use App\User;
use Illuminate\Http\Request;
use DB;

class EmployeeController extends Controller
{
    public function add(){
        return view('employee.add_employee');
    }
    public function view(){
        $data['employee']=User::where('type','Employee')->get();
        return view('employee.all_employee',$data);
    }
    public function store(Request $request){
        //dd($request->all());
        $this->validate($request,[
            'email'=>'unique:users,email'
        ]);


        DB::transaction(function () use($request){
            $data=new User();
            $data->type="Employee";
            $data->name=$request->name;
            $data->email=$request->email;
            $data->number=$request->number;
            $data->address=$request->address;
            $data->experience=$request->experience;
            $data->salary=$request->salary;
            $data->city=$request->city;
            $data->password=bcrypt($request->password);
            $data->status='1';
            if($request->file('photo')){
                $file=$request->file('photo');
                $filename=date('YMDHi').$file->getClientOriginalName();
                $file->move(public_path('backend/upload/employee_photos'),$filename);
                $data->photo=$filename;
            }
                $data->save();

        });
        return redirect()->route('employee.view')->with('success','Employee Created Successfully');


    }
    public function edit($id){
        $data['employee']=User::find($id);
        return view('employee.add_employee',$data);
    }
    public function update(EmployeeRequest $request,$id){
        $data=User::find($id);
        $data->name=$request->name;
        $data->email=$request->email;
        $data->number=$request->number;
        $data->address=$request->address;
        $data->experience=$request->experience;
        $data->salary=$request->salary;
        $data->city=$request->city;
        if($request->file('photo')){
            if (file_exists('backend/upload/employee_photos/' . $data->photo) AND ! empty ($data->photo)) {
                unlink('backend/upload/employee_photos/'.$data->photo);
            }
            $file=$request->file('photo');
            $filename=date('YMDHi').$file->getClientOriginalName();
            $file->move(public_path('backend/upload/employee_photos'),$filename);
            $data->photo=$filename;
        }
        $data->save();
        return redirect()->route('employee.view')->with('success','Employee Updated Successfully');
    }
    public function delete(Request $request){
        $data=User::find($request->id);
        if (file_exists('backend/upload/employee_photos/' . $data->photo) AND ! empty ($data->photo)) {
            unlink('backend/upload/employee_photos/'.$data->photo);
        }
        $data->delete();
        return redirect()->back()->with('success','Employee Removed Successfully');
    }
}
