<?php
  
namespace App\Http\Controllers;
   
use App\City;
use App\Country;
use App\Student;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
  
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::latest()->paginate(5);
    
        return view('students.index',compact('students'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
     
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = City::All();
        $countries  = Country::All();
        return view('students.create', compact('countries','cities'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone_no' => 'required',
            'dob' => 'required',
            'address' => 'required',
            'email' => 'required',
            'password' => 'required',
            'country_id' => 'required',
            'city_id' => 'required',
        ]);
        $data = $request->all();
        $user = new User;
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = Hash::make($data['password']);
        $user->save();
    
        $student = new Student;
        $student->name = $data['name'];
        $student->phone_no = $data['phone_no'];
        $student->dob = $data['dob'];
        $student->address = $data['address'];
        $student->country_id = $data['country_id'];
        $student->city_id = $data['city_id'];
        $student->user_id = $user->id;
        $student->status = 'Active';
        $student->save();
    
     
        return redirect()->route('students.index')
                        ->with('success','Student created successfully.');
    }
     
    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('students.show',compact('student'));
    } 
     
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('students.edit',compact('student'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);
    
        $student->update($request->all());
    
        return redirect()->route('students.index')
                        ->with('success','Student updated successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();
    
        return redirect()->route('students.index')
                        ->with('success','Student deleted successfully');
    }
    public function getCity(Request $request)
    {
        $cities = City::where("country_id",$request->country)->where("status",'Active')->get(["name","id"]);
        return response()->json($cities);
    }
}