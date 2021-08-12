<?php
  
namespace App\Http\Controllers;

use App\Teacher;
use App\Classes;

use Illuminate\Http\Request;
   
  
class TeacherController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        // $teachers = Teacher::latest()->paginate(2);

        $teachers = Teacher::join('class', 'teachers.class_id', '=', 'class.id')
                       ->get(['teachers.id', 'teachers.name', 'teachers.email', 'teachers.phone_no', 'class.title']);

        // $teachers = Teacher::join('teachers', 'class.id', '=', 'teachers.class_id')->get(['teachers.*', 'class.title']);
        return view('teachers.index',compact('teachers'))
            ->with('i', (request()->input('page', 1) - 1) * 2);
    }
    public function create()
    {
        $classes = Classes::where('status','Active')->get();
        return view('teachers.create',compact('classes'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone_no' => 'required',
            'password' => 'required',
            'class_id' => 'required',
        ]);
        Teacher::create($request->all());
     
        return redirect()->route('teachers.index')
                        ->with('success','Teacher created successfully.');
    }
    public function show(Teacher $teacher)
    {
        $pageTitle = 'Show Teacher Data';
        $teacher = Teacher::join('class', 'class.id', '=', 'teachers.class_id')->where('teachers.id',$teacher->id)
                      ->first(['teachers.name','teachers.email','teachers.phone_no','class.title']);
        return view('teachers.show',compact('teacher', 'pageTitle'));
    } 
    public function edit(Teacher $teacher)
    { 
        $pageTitle = 'Edit Teacher Data';
        $teacher = Teacher::find($teacher->id);
        return view('teachers.edit',compact('teacher', 'pageTitle'));
    }
    public function update(Request $request, Teacher $teacher)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone_no' => 'required',
            'class_id' => 'required',
        ]);
        $teacher->update($request->all());
    
        return redirect()->route('teachers.index')
                        ->with('success','Teacher updated successfully');
    }
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
    
        return redirect()->route('teachers.index')
                        ->with('success','Teacher deleted successfully');
    }
}