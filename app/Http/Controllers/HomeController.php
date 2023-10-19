<?php

namespace App\Http\Controllers;

use     App\Http\Traits\UserTrait;
use     App\Models\Category;
use     Illuminate\Http\Request;
// use     Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    use UserTrait;
    public function index()
    {
        return view('dashboard');
    }
    public function profile()
    {
        return view('admin.users-profile');
    }
    public function details()
    {
        $details = $this->getAllUserDetails();
        // dd($details);
        echo "<pre>";
        print_r($details->toArray());
        die();
    }
    public function editor()
    {
        return view('admin.forms-elements');
    }
    public function success()
    {
        // return view('admin.success');
        return redirect()->route('success')->with('success', 'Category added successfully.');
    }




    public function save(Request $request)
    {
       $data = [
            'title' => $request->title,
            'parent_id' => 0,
            'description' => $request->description,
        ];
        Category::insert($data);
        // Redirect back to the same page
        return redirect('/success');
    }
    public function error(){
        return view('admin.pages-error-404');
    }
    public function blank(){
        return view('admin.pages-blank');
    }
    public function register(){
        return view('admin.pages-register');
    }
    public function login(){
        return  view('admin.pages-login');
    }
    public function questions(){
        return view('admin.tables-data');

    }
    public function questiontype(){

        return view('admin.tables-general');
    }
    public function importquestion(){

        return view('admin.tables-import');
    }
}
