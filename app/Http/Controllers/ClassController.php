<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes;

class ClassController extends Controller
{
	public function __construst()
	{
		$this->middleware('auth');
	}
    public function index()
    {
    	$classes = Classes::orderBy('id','DESC')->get();
    	return view('classes.index',compact('classes'));
    }
    public function create()
    {
    	return view('classes.create');
    }
    public function store(Request $request)
    {
    	$data = $request->all();
    	$validation = $request->validate([
    		'title' => 'required|min:8',
    		'status' => 'required',
    	]);
    	$class = new Classes;
    	$class->title = $data['title'];
    	$class->status = $data['status'];
    	$class->save();
    	return redirect('/classes')->with('success', 'Class Create Successfully');
    }
    public function show($class_id)
    {
        $class = Classes::find($class_id);
        $pageTitle = 'Show Class';
        return view('classes.show',compact('class','pageTitle'));

    }

    public function edit($class_id)
    {
        $class = Classes::find($class_id);
        $pageTitle = 'Edit Class1';
        return view('classes.edit',compact('class','pageTitle'));

    }
    public function editStore(Request $request)
    {
        $data = $request->all();
        $id = $data['class_id'];
        $title = $data['title'];
        $status = $data['status'];

        $class = Classes::find($id);
        $class->title = $title;
        $class->status = $status;
        $class->update();
        return redirect('/classes');
    }

    public function delete($class_id)
    {
        // var_dump($class_id); exit;
        $class = Classes::find($class_id);
        $class->delete();
        return redirect('/classes');
    }
}
