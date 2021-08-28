<?php

namespace App\Http\Controllers;
use DataTables;
use Illuminate\Http\Request;
use Redirect,Response;
use Illuminate\Support\Facades\Validator;
use App\{at,user};
class acontroller extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function index(){
        // $data=\DB::select('select id,name,email from at');
        // return dd($data);
        // return view('home');
        if(auth()->user()->type=='admin'){
        	$data=[
            'data'=>user::all()
        ];
        return view('test');
        }
        if(auth()->user()->type=='user'){
        	
        return view('home');
        }
    }
    public function delete(Request $request){
        // return dd($request->all());
        $user=user::where('id',$request->delid)->delete();
        if($user){
            $array = array(
                'success' =>'<div class="alert alert-success">Account Deleted</div>'
            );
            return ($array);
        }
        
    }
    public function dataTable(Request $request){
    
    $data = user::all();
    return Datatables::of($data)
            ->addIndexColumn()
            ->editColumn('created_at',function(user $at){
                        return $at->created_at->diffForHumans();
             })
             ->editColumn('updated_at',function(user $at){
                return $at->updated_at->diffForHumans();
            })
            ->addColumn('action', function($row){

                   $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm tblshow" userid="'.$row["id"].'">View</a>
                   <a href="javascript:void(0)" class="edit btn btn-info btn-sm tbledit" userid="'.$row["id"].'">Edit</a>
                   <a href="javascript:void(0)" class="edit btn btn-danger btn-sm tbldelete" userid="'.$row["id"].'">Delete</a>';

                    return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
    //     
    }
    public function edit(Request $request){
        // $user = \DB::table('ats')->where('id', $request->id)->value('name','email');
        // $user=\DB::table('ats')
        // ->where('id', $request->id)->get();
        // $user=at::where('id', $request->id)->get();
        $data=[
            'data'=>user::find($request->id),
            'id'=>$request->id
        ];
        return $data;
        // echo json_encode($user);
        // return Response::json($user);
    }
    public function update(Request $request){
        $validator = Validator::make($request->all(), [
			'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        $array = array(
		    'error'   => true,
		     'name' => $validator->messages()->get('name'),
		     'email' => $validator->messages()->get('email'),
		     'password' => $validator->messages()->get('password')
		     

		   );
        if($validator->passes()){ 
            
            $user = user::find($request->id);
            $user->name=$request->name;
            $user->email=$request->email;
            $user->password=bcrypt($request->password);
            $user->save();
            $array = array(
                'success' =>'<div class="alert alert-success">Account Updated</div>'
            );
            }
            return ($array);
        
    }
    public function store(Request $request){
        $validator = Validator::make($request->all(), [
			'name' => 'required',
            'email' => 'required|unique:ats',
            'password' => 'required',
		]);
		// $arr = array('title'=>$validator->messages()->get('title'),'body'=>$validator->messages()->get('body'));
		$array = array(
		    'error'   => true,
		     'name' => $validator->messages()->get('name'),
		     'email' => $validator->messages()->get('email'),
		     'password' => $validator->messages()->get('password')
		     

		   );
        if($validator->passes()){ 
            // $data1=\DB::table('ats')->insert([
            //     'name'=>$request->name,
            //     'email'=>$request->email,
            //     'password'=> bcrypt($request->password),
            //     'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            //     'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            // ]);
            $data=user::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=> bcrypt($request->password),
            ]);
            $array = array(
                'success' =>'<div class="alert alert-success">Account Created</div>'
            );
            }
            return ($array);
        
        
    }
}
