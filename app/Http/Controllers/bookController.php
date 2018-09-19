<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class bookController extends Controller
{

    /**
     * go to the create page
     * @return mixed
     *
     */

    public function create()
    {
        return view('panel.books_exams.createBook_exams');
    }

    /**
     * add new function
     * @param $image
     * @return string
     *
     */
//    public function addImage($image){
//
//        $imageName = time() .'.'. $image->getClientOriginalExtension();
//        $dirction = public_path('image/');
//        $image->move($dirction,$imageName);
//        return  'image/' .$imageName;
//
//    }

    /**
     * go to the main page
     * @return mixed
     *
     */
    public function index()
    {
        $data['books'] = Book::paginate(10);
        return view('panel.books_exams.showCategory', $data);
    }


    /**
     * store a new book
     * @param Request $request
     * @return mixed
     *
     */
    public function store(Request $request)

    {
        $request->validate($this->rules(), $this->messages());
        $result =parent::uploadImage($request->file('book_image'),'books_images');


        $request['image'] = $result;
        $book = new Book();
        $book->fill($request->all());
        $result = $book->save();
        if ($result === True) {
            return redirect()->back()->with('success', 'Category has been saved successfully');

        }
        return redirect()->back()->with('error', 'something Went Wrong');

    }


    /**
     * @param null $id
     * @return array
     *
     *
     */
        private function rules($id = null)
    {

        $rules =[
            'url' => 'required',
            'type_book' => 'required',
            'college_name' => 'required',
            'type_Requirement_or_colleges' => 'required',
       ];

        if ($id){

        }else{
            $rules['book_image'] = 'required|mimes:jpeg,png,bmp,jpg';

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
        return[
            'book_image.mimes ' => 'invalid image',
            'url.required ' => 'url is required',
            'type_book.required ' => 'book type is required',
            'college_name.required ' => 'college name type is required',
            'type_Requirement_or_colleges.required ' => ' select is required',
        ];
    }

}
