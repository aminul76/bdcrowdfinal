<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Auth;
use App\Admin;
use DB;
use App\Faq;
use App\Update;
use App\PorjectModel;
use App\overview;
use App\Payment;
use App\User;
use App\Project;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function home(){
        return view('admin.home');
    }
    public function projects(){
        $project = DB::table('projects')->get();
        return view('admin.projects',compact('project'));
    }
    public function basic(){
        return view('admin.projectbasic');
    }

    
    // -----------------overview--------------
    public function overview(){
        
        $overview_data = DB::table('projects')->get();
        return view('admin.projectoverview', compact('overview_data'));
    }

// -----------------overview Search--------------

    public function overviewget(Request $requests){
        
        $overview_data = PorjectModel::where('id',$requests->project_id)->get();
        
        return view('admin.projectoverviewupdate', compact('overview_data'));
        
    }

    // -----------------overview Store-------------- 
    public function overviewstore(Request $request,$id){
        
        $overviewstore = PorjectModel::find($id);
         
       

        $overviewstore->overview= $request->overview;

    
        $overviewstore->update();
        return redirect()->back();
    
     }


    public function details(){
        $projectdetails = DB::table('projects')->get();
        return view('admin.projectdetails', compact('projectdetails'));
        
    }


    // -----------------details Search--------------

    public function detailsget(Request $requests){

        
        
        $projectdetails = PorjectModel::where('id',$requests->project_id)->get();
        
        return view('admin.projectdetailsupdate', compact('projectdetails'));
        
        
    }

    // -----------------details Store-------------- 
    public function detailsstore(Request $request,$id){
        
        
        $detailsstore = PorjectModel::find($id);
         
       

        $detailsstore->details= $request->details;

    
        $detailsstore->update();
        return redirect()->back();
    
     }




     // -----------------overview--------------
    public function location(){
        
        $location_data = DB::table('projects')->get();
        return view('admin.projectlocation', compact('location_data'));
    }

// -----------------location Search--------------

    public function locationget(Request $requests){
        
        $location_data = PorjectModel::where('id',$requests->project_id)->get();
        
        return view('admin.projectlocationupdate', compact('location_data'));
        
    }

    // -----------------location Store-------------- 
    public function locationstore(Request $request,$id){
        
        $locationstore = PorjectModel::find($id);
         
       

        $locationstore->location= $request->location;

    
        $locationstore->update();
        return redirect()->back();
    
     }



    // ---------------- FAQ ----------------
    public function faq(){
        $project = DB::table('projects')->get();
        return view('admin.projectfaq', compact('project'));
    }


// -----------------faq Search--------------

public function faqget(Request $requests){


    $project = DB::table('projects')->get();
    $faq = DB::table('faq')->get();
    
    $projectfaq = DB::table('projects') 
    ->join('faq', 'projects.id', '=', 'faq.project_id')
    ->select('faq.*')
    ->where('faq.project_id',$requests->project_id)
    ->orderBy('faq.id','desc')
    ->get();
    
    return view('admin.projectfaqupdate', compact('projectfaq','project','faq'));
    
}

// -----------------faq Store--------------
    public function faqstore(Request $requests){

        $data= new Faq();
        $data->project_id= $requests->project_id;
        $data->question= $requests->question;
        $data->answare= $requests->answare;
        $data->save(); 
        return redirect()->back();
    }

    public function faqdelete( $id)
    {
        
        $data = Faq::find($id);
        $data->delete();
        return redirect()->back();
    }


   








     // ---------------- Update ----------------
     public function update(){
        $project = DB::table('projects')->get();
        return view('admin.projectupdates', compact('project'));
    }


// -----------------updates Search--------------

public function updateget(Request $requests){


    $project = DB::table('projects')->get();
    $updates = DB::table('updates')->get();
    
    $projectupdates = DB::table('projects') 
    ->join('updates', 'projects.id', '=', 'updates.project_id')
    ->select('updates.*')
    ->where('updates.project_id',$requests->project_id)
    ->orderBy('updates.id','desc')
    ->get();
    
    return view('admin.projectupdatesupdate', compact('projectupdates','project','updates'));
    
}

// -----------------updates Store--------------
    public function updatestore(Request $requests){

        $data= new Update();
        
        $data->project_id= $requests->project_id;
        $data->title= $requests->title;
        $data->details= $requests->details;
        $data->save(); 
        return redirect()->back();
    }


    public function updatedelete( $id)
    {
        
        $data = Update::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function adminstoreinvest(Request $request)
    {
        $data=new payment;
        
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
        $id=$request->user_id;
        $usesms=User::find($id);

        $data->user_id=$request->user_id;
        $data->project_id=$request->project_id;

        $data->name=$usesms->name;
        $data->phone=$usesms->phone;
        $data->status=1;
        $data->image = $imagename;
        $data->amount=$request->amount;
       
        $data->project_name=$request->project_name;
        
        $data->save();

       
        $phone= $usesms->phone;


        $pname=$usesms->name;
        $pamount=$request->amount;


        $to = $usesms->phone;


        $token = "143effd9cab6f8fadbc84d4690cb02ae";
        $message =  "Thank Your Payment $pname , You Pay $pamount tk learn BDCROWD"  ;

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
        
        return redirect()->back()->with('success','Payment successfully!');
        
    }

   
   public function pendingpayment()
   {
    $payments = DB::table('payments') 
    ->select('payments.*')
    ->where('status',0)
    ->orderBy('payments.id','desc')
    ->get();
    return view('admin.pendingpayment',compact('payments'));
   }

   public function compeletepayment()
   {

    $project=Project::all(); 
    $selectusers=User::all();
    $payments = DB::table('payments') 
    ->select('payments.*')
    ->where('status',1)
    ->orderBy('payments.id','desc')
    ->get();
    return view('admin.compeletingpayment',compact('payments','project','selectusers'));
   }

   public function paid($id)
    {
        $payment = Payment::find($id);
        if ($payment->status) {
            $payment->status = 0;
        }
        else {
            $payment->status = 1;
        }
        $payment->save();

        $to = $payment->phone;
        $token = "143effd9cab6f8fadbc84d4690cb02ae";
        $message =  "Thank Your Payment Check Payment Admin. Confirm Payment" ;

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
        return back();
    }

    public function paymentdelete($id)
    {
        $payments = Payment::find($id);
        if (file_exists('uploads/item/'.$payments->image))
        {
            unlink('uploads/item/'.$payments->image);
        }
       
        $to = $payments->phone;
        $token = "143effd9cab6f8fadbc84d4690cb02ae";
        $message =  "BDcrowd Check Your payment bt your payment is not compelte contact BDcrowd" ;

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
    


        $payments->delete();

       




        return redirect()->back()->with('successMsg','Item successfully Deleted');
    }
   
   


   
   
}
