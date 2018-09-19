<?php

namespace App\Http\Controllers;

use App\colleges;
use Illuminate\Http\Request;

class CollegesController extends Controller
{


    public function create()
    {
        return view('panel.Colleges.createColleges');
    }



    public function store(Request $request)
    {
        $request->validate($this->rules(), $this->messages());
        $collge = new colleges();
        $collge->fill($request->all());
        $result = $collge->save();
        if ($result === True) {
            return redirect()->back()->with('success', 'College has been saved successfully');
        }
        return redirect()->back()->with('error', 'something Went Wrong');

    }


    private function rules()
    {
        return[
            'name' => 'required',

        ];
    }

    private function messages()
    {
        return[
        'name.required' => 'College Name is required',
             ];
    }


}
