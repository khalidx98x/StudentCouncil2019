<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class AdminsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $admins = Admin::where([]);
        if ($request->has('email'))
            $admins = $admins->where('email', 'like', '%' . $request->input('email') . "%");
        if ($request->has('username'))
            $admins = $admins->where('username', 'like', '%' . $request->input('username') . "%");

        $data['admins'] = $admins->paginate(10);
        return view('panel.admins.show', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('panel.admins.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate($this->rules(), $this->messages());
        $image = $request->file('admin_image');

        $request['image'] = parent::uploadImage($image,'admins_images');
        $admins = new Admin();
        $admins->fill($request->all());

        $result = $admins->save();
        if ($result === TRUE) {
            return redirect()->back()->with('success', 'admin has been saved Successfully');
        }
        return redirect()->back()->with('error', 'something goes wrong');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admin= Admin::findOrFail($id);
        return view('panel.admins.edit')->with('admins',$admin);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $admins = Admin::findOrFail($id);
        }catch (ModelNotFoundException $modelNotFoundException){
            return redirect()->back()->with('error',"something went wrong");
        }
        $request->validate($this->rules($admins->id),$this->messages());
        if($request->hasFile('admin_image')){
            if(File::exists(public_path($admins->image))){
                File::delete(public_path($admins->image)); //يمسحه لانه رح يرجع يبعبيه في ال db
            }
            $request['image']=parent::uploadImage($request->file('image'));
        }
        $admins->fill($request->all());
        $admins->update();
        return redirect()->route('panel.admins.index')->with('success', 'book has been updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id=null)
    {
        try {
            $admins = Admin::findOrFail($id); //this function return an exception
            $admins->delete();
            return redirect()->back()->with('success',"category has been deleted");
        }catch (ModelNotFoundException $modelNotFoundException){
            return redirect()->back()->with('error',"something went wrong");
        }
    }

    private function rules($id = null)
    {
        $rules = [
            'name' => 'required',
            'password' => 'required|min:6',
            'description' => 'required',
            'type' => 'required',
        ];
        if ($id) {
            $rules['username'] = 'required|unique:admins,username,' . $id;
            $rules['email'] = 'required|email|unique:admins,email,' . $id;
        } else {
            $rules['username'] = 'required|unique:admins,username,';
            $rules['email'] = 'required|email|unique:admins,email,';
            $rules['admin_image'] = 'required';
        }
        return $rules;
    }

    /**
     * @return array
     *
     *
     */
    private function messages()
    {
        return [
            'name.required' => 'name is required',
            'email.required' => 'email is required',
            'email.unique' => 'email is already used',
            'email.email' => 'enter a valid email',
            'username.required' => 'username is required',
            'username.unique' => 'username is already used',
            'password.required' => 'password is required',
            'password.min' => 'must be at least 6 character ',
            'description.required' => 'Description is required ',
            'type.required' => 'type is required ',

        ];
    }
}
