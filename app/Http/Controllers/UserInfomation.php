<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\User;

class UserInfomation extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::latest()->get();
        return view('admin.alluser',compact('users'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.memberadd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      
        $this->validate($request,[
            'name' => 'required',
            'phone'=>'required',
           
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password_text' => ['required',],
             
        ]);
        
       

        $row=new User();
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
        $row->email=$request->email;
       
        $row->password_text=$request->password_text;
        $row->password=Hash::make($request->password_text);

        
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
        
        
        $row->save();
        return redirect()->route('member.index')->with('success','New Customer Add Successfuly');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $member=User::findOrFail($id);
        return view('admin.memberdatiels',compact('member'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $member=User::findOrFail($id);
        return view('admin.memberedit',compact('member'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
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
        $row->email=$request->email;
        $row->password_text=$request->password_text;
        $row->password=Hash::make($request->password_text);


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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $profile = User::find($id);
        if (file_exists('uploads/profile/'.$profile->image))
        {
            unlink('uploads/profile/'.$profile->image);
        }
        $profile->delete();
     
        return redirect()->route('member.index')->with('successMsg', 'profile delete!');
    }
   
}
