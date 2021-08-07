<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\User;
use Auth;
use App\Payment;
use App\Intersteed;
use DB;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
   
    public function dashbord(){
        $userid = Auth::user()->id;
       

        $intersteeds = DB::table('projects') 
        ->join('intersteeds', 'projects.id', '=', 'intersteeds.project_id')
        
        ->where('intersteeds.project_id',$userid)
        ->select('projects.*')
        ->orderBy('projects.id','desc')
        ->get();
        
        $invests = DB::table('projects') 
        ->join('payments', 'projects.id', '=', 'payments.project_id')
        ->select('projects.*')
        ->where('payments.project_id',$userid)
        // ->orderBy('payments.id','desc')
        ->get();

        
        $payments = DB::table('payments')
        ->join('projects', 'projects.id', '=', 'payments.project_id')

        ->where('payments.user_id',$userid)
        ->orderBy('payments.id','desc')
        ->get();

        $users=User::find($userid);
        return view('user.home',compact('users','invests','intersteeds','payments'));
        
    }
    public function editeprofile(){
        
        $id = Auth::user()->id;
        
        $users=User::find($id);
        return view('user.editeprofile',compact('users'));
    }

    public function updateprofile(Request $request,$id)
    {

       
       
        
        $this->validate($request,[
            'name' => 'required',
            'phone'=>'required',
            
        ]);
        
       

        $row=User::find($id);
        $row->name=$request->name;
        $row->phone=$request->phone;
        $row->address=$request->address;
        $row->persent_village=$request->persent_village;
        $row->persent_thana=$request->persent_thana;
        $row->persent_post_code=$request->persent_post_code;
        $row->persent_district=$request->persent_district;
        $row->parmanent_village=$request->parmanent_village;
        $row->parmanent_district=$request->parmanent_district;
        $row->parmanent_thana=$request->parmanent_thana;
        $row->parmanent_post_code=$request->parmanent_post_code;
        $row->national_id=$request->national_id;

        if ($request->image!=null) {
            $image = $request->file('image');
        
        $slug = str_slug($request->id);
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'. uniqid() .'.'. $image->getClientOriginalExtension();

            if (!file_exists('uploads/profile'))
            {
                mkdir('uploads/profile',0777,true);
            }
            $image->move('uploads/profile',$imagename);
        }else{
            $imagename = "default.png";
        }
        $row->image=$imagename;
            
        }
        
        
        $row->update();
        return redirect()->back()->with('success','Profile Edit Successfuly');

    }

    //user Interst

    public function storeinterst(Request $request){
       
       
        $data=new Intersteed;
        
      

        $data->user_id=$request->user_id;
        $data->project_id=$request->project_id;
       
        
        $data->status = 0;
       $interst=($request->amount)/20;
        
        $data->amount=$interst;
        $data->save();




        // $pname=$request->name;
        // $pamount=$request->amount;
        // $to = $request->phone;


        // $token = "143effd9cab6f8fadbc84d4690cb02ae";
        // $message =  "Thank Your Interset $pname , Learn more BD Crowd" ;

        // $url = "http://api.smscpanel.net/api.php";


        // $data= array(
        // 'to'=>"$to",
        // 'message'=>"$message",
        // 'token'=>"$token"
        // ); // Add parameters in key value
        // $ch = curl_init(); // Initialize cURL
        // curl_setopt($ch, CURLOPT_URL,$url);
        // curl_setopt($ch, CURLOPT_ENCODING, '');
        // curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // $smsresult = curl_exec($ch);

        // //Result
        // //echo $smsresult;

        // //Error Display
        // echo curl_error($ch);
        
                return redirect()->back()->with('success','Thank Your Intersted');

                

    }



}
