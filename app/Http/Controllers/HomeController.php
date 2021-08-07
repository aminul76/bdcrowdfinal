<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Str;
use DB;
Use App\User;
Use App\Project;
use Auth;
Use App\Payment;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
        $projects=project::orderBy('id', 'DESC')->limit(3)->get();
        return view('home', compact('projects'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        $projects=project::orderBy('id', 'DESC')->limit(3)->get();
        return view('home', compact('projects'));
    }
    public function invest(){
        return view('invest');
    }
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
    public function investdetails($id){
      
        $project=Project::find($id);
        $user = Auth::user();
        
        $selectusers=User::all();
        return view('investdetails',compact('project','user','selectusers'));
    }

    
    public function storeapplyform(Request $request){

        $data=new Payment;
       
        $image = $request->file('image');
        $slug = str_slug($request->name);
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'. uniqid() .'.'. $image->getClientOriginalExtension();

            if (!file_exists('uploads/item'))
            {
                mkdir('uploads/item',0777,true);
            }
            $image->move('uploads/item',$imagename);
        }else{
            $imagename = "default.png";
        }

        $data->user_id=$request->user_id;
        $data->project_id=$request->project_id;
        $data->project_name=$request->project_name;
        $data->name=$request->name;
        
        $data->phone=$request->phone;
       
       
        $data->image = $imagename;
        $data->amount=$request->amount;
        $data->save();


        $pname=$request->name;
        $pamount=$request->amount;
        $to = $request->phone;


        $token = "143effd9cab6f8fadbc84d4690cb02ae";
        $message =  "Thank Your Payment $pname , You Pay $pamount After Check Payment Admin. Confirm Payment" ;

        $url = "http://api.smscpanel.net/api.php";


        $data= array(
        'to'=>"$to",
        'message'=>"$message",
        'token'=>"$token"
        ); // Add parameters in key value
        $ch = curl_init(); // Initialize cURL
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_ENCODING, '');
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $smsresult = curl_exec($ch);

        //Result
        echo $smsresult;

        //Error Display
        echo curl_error($ch);
        
                return redirect()->back()->with('success','Payment successfully! Panding Check Authority');

    }


}
