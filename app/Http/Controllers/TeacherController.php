<?php
  
namespace App\Http\Controllers;
   
use App\Teacher;
use Illuminate\Http\Request;
  
class TeacherController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $teachers = Teacher::latest()->paginate(2);
    
        return view('teachers.index',compact('teachers'))
            ->with('i', (request()->input('page', 1) - 1) * 2);
    }
    public function create()
    {
        return view('teachers.create');
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
        return view('teachers.show',compact('teacher'));
    } 
    public function edit(Teacher $teacher)
    {
        return view('teachers.edit',compact('teacher'));
    }
    public function update(Request $request, Teacher $teacher)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
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