<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{


    /**
     * @return mixed
     *
     */
    public function index()
    {


        $data['sliders'] = Slider::paginate(10);
        return view('panel.slider_images.showAllImages', $data);
    }

//
//    /**
//     * @param $image
//     * @return string
//     *
//     */
//    public function addImage($image)
//    {
//
//        $imageName = time() . '.' . $image->getClientOriginalExtension();
//        $dirction = public_path('image/');
//        $image->move($dirction, $imageName);
//        return 'image/' . $imageName;
//
//    }

    /**
     * @param Request $request
     * @return mixed
     *
     */

    public function store(Request $request)

    {
        $request->validate($this->rules(), $this->messages());
        $result = parent::uploadImage($request->file('uploaded_image'),'slider_images');

        $request['image'] = $result;
        $slider = new Slider();
        $slider->fill($request->all());
        $result = $slider->save();
        if ($result === True) {
            return redirect()->back()->with('success', 'Image has been saved successfully');

        }
        return redirect()->back()->with('error', 'something Went Wrong');

    }


    /**
     * @param $id
     * @return mixed
     *
     */
    public function destroy($id)
    {
        try {
            $slider = Slider::findOrFail($id);
            $slider->delete();
            return redirect()->back()->with('success', 'image has been deleted successfully');
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', 'image is not found');
        }

    }


    /**
     * @return mixed
     */
    public function create()
    {
        return view('panel.slider_images.images_slider');
    }


    /**
     * @param null $id
     * @return array
     *
     */
    private function rules($id = null)
    {
        $rules = [
            'image_name' => 'required',

        ];
        if ($id) {
            $rules['image_name'] = 'required|unique:slider_images,image_name,' . $id;
        } else {
            $rules['uploaded_image'] = 'required|mimes:jpeg,png,bmp,jpg';
        }

        return $rules;
    }

    /*
     *
     *
     */
    private function messages()
    {
        return [
            'image_name.required' => 'Image Name Is required',
            'uploaded_image.mimes' => 'Invalid Image',
//            'image_slider.required' => 'Image is required' ,
        ];

    }


}



