<?php

namespace App\Http\Controllers;

use App\ContactInformation;
use App\CouncilMember;
use App\Department;
use App\DepartmentActivity;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DepartmentController extends Controller
{
    //

    /**
     * shows all departments with there leader,activties and tasks
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $departments = Department::paginate(10);
        return view('panel.department.index')->with('departments', $departments);
    }

    /**
     * functions that return the create view with the council memebers who r not owner of any department
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $councilMembers = DB::table("council_members")->select('*')
            ->whereNotIn('id', function ($query) {
                $query->select('manager_id')->from('departments');
            })
            ->get();


        return view('panel.department.createDepartment')->with('councilMembers', $councilMembers);
    }


    /**
     * create department with its contact info
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */

    public function store(Request $request)
    {

        $request->validate($this->rules());

        $department = Department::create([
            'name' => $request->input('department_name'),
            'type' => $request->input('type'),
            'manager_id' => $request->input('department_leader')
        ]);

        $department->contactInfo()->create([
            'facebook' => $request->input('department_facebook'),
            'phone' => $request->input('department_phone'),
            'instagram' => $request->input('department_instagram'),
            'twitter' => $request->input('department_twitter'),
            'email' => $request->input('department_email'),

        ]);

        return redirect()->back()->with('success', 'done the department has been created');

    }

    /**
     * redirect to the update view
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */

    public function edit($id)
    {
        try {
            $department = Department::findOrFail($id);

            $councilMembers = DB::table("council_members")->select('*')
                ->whereNotIn('id', function ($query) {
                    $query->select('manager_id')->from('departments');
                })
                ->get();
            return view('panel.department.edit')->with([
                'department' => $department,
                'councilMembers'=>$councilMembers
            ]);
        } catch (ModelNotFoundException $modelNotFoundException) {
            return redirect()->back()->with('error', 'Department not found');
        }
    }


    public function update(Request $request, $id)
    {
        try{
            $department=Department::findOrFail($id);
            $request->validate($this->rules($id));

           $d= $department->update([
                'name' => $request->input('department_name'),
                'type' => $request->input('type'),
                'manager_id' => $request->input('department_leader')
            ]);



        $department->contactInfo()->update([
                'facebook' => $request->input('department_facebook'),
                'phone' => $request->input('department_phone'),
                'instagram' => $request->input('department_instagram'),
                'twitter' => $request->input('department_twitter'),
                'email' => $request->input('department_email'),

            ]);

        return redirect()->back()->with('success','done the department has been updated successfully');
        }catch (ModelNotFoundException $modelNotFoundException){
            return redirect()->back()->with('error', 'Department not found');

        }
    }



    public function addActivity(){

        return view('panel.department.addActivity');
    }

    private function rules($id = null)
    {
        $rules = [
            'type' => 'required',
            'department_leader' => 'required',
            'department_phone' => 'required|numeric',
            'department_email' => 'required|unique:contact_information,email|email'
        ];
        if ($id) {
            $rules['department_name'] = 'required|unique:departments,name,'.$id;

        } else
            $rules['department_name'] = 'required|unique:departments,name';

        return $rules;
    }

//    private function messages(){
//        return[
//            'department_name.required' =>trans('lang.validations.department_name.required'),
//            'department_name.unique' => trans('lang.validations.department_name.unique'),
//            'type.required' => trans('lang.validations.type.required'),
//
//        ];
//    }

}
