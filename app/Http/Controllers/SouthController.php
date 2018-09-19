<?php

namespace App\Http\Controllers;

use App\south;
use App\SouthernCommittee;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class SouthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data['souths'] = SouthernCommittee::paginate(10);
        return view('panel.south.south details', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('panel.south.add description');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        $request->validate($this->rules(), $this->messages());

        if(count(SouthernCommittee::all()) == 0){
            SouthernCommittee::create($request->all());
        return redirect()->back()->with('success','the description has been created successfully');
       }else{
            south::where('id',$id)->update(['body'=>$request->input('body')]);
            return redirect()->back()->with('success','the description has been updated');
        }

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
        //
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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    private function rules()
    {
        $rules = [

            'body' => 'required'
        ];
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
            'body.required' => 'description is required',

        ];
    }

}
