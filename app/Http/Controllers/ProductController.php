<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Merujan99\LaravelVideoEmbed\Facades\LaravelVideoEmbed;
use Carbon\Carbon;
use DB;
use App\ProjectModel;
use App\Project;
use App\Update;
use App\Faq;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit($id){
        $project=Project::findOrFail($id);
        return view('admin.projectbasicedit',compact('project'));
    }

    public function store(Request $request){


        $project = array();
        $project['project_name']= $request->projectName;
        $project['address'] = $request->projectAddress;
        $project['unit_price'] = $request->unitPrice;
        $project['unit_quantity'] = $request->unitQuantity;
        $project['max_goal'] = $request->maxGoal;
        // $project['video'] = $request->videoLink;
        $project['start_time'] = $request->startTime;        
        $project['end_time'] = $request->endTime;


        
        // video
        //URL to be used for embed generation
        $url = $request->videoLink;

        //Optional array of website names, if present any websites not in the array will result in false being returned by the parser
        $whitelist = ['YouTube', 'Vimeo'];

        //Optional parameters to be appended to embed
        $params = [
            'autoplay' => 0,
            'loop' => 1
        ];

        //Optional attributes for embed container
        $attributes = [
        'type' => null,
        'class' => 'iframe-class',
        'data-html5-parameter' => true,
      
        ];

        $project['video'] = LaravelVideoEmbed::parse($url, $whitelist, $params, $attributes);

        

        // imge one
        $img_one = $request->file('imageOne');
        $img_one_name = date('dmy_H_s_i');
        $oneext = strtolower($img_one->getClientOriginalExtension());
        $img_one_full_name =  $img_one_name.'-'.uniqid().'.'.$oneext;
        $one_upload_path = 'public/media/project/';
        $one_image_url = $img_one_full_name;
        $success_one = $img_one->move($one_upload_path,$img_one_full_name);
        $project['image_one'] = $one_image_url;

        // imge two
        $img_two = $request->file('imageTwo');
        $img_two_name = date('dmy_H_s_i');
        $twoext = strtolower($img_two->getClientOriginalExtension());
        $img_two_full_name =  $img_two_name.'-'.uniqid().'.'.$twoext;
        $two_upload_path = 'public/media/project/';
        $two_image_url = $img_two_full_name;
        $success_two = $img_two->move($two_upload_path,$img_two_full_name);
        $project['image_two'] = $two_image_url;


        // imge three
        $img_three = $request->file('imageThree');
        $img_three_name = date('dmy_H_s_i');
        $threeext = strtolower($img_three->getClientOriginalExtension());
        $img_three_full_name =  $img_three_name.'-'.uniqid().'.'.$threeext;
        $three_upload_path = 'public/media/project/';
        $three_image_url = $img_three_full_name;
        $success_three = $img_three->move($three_upload_path,$img_three_full_name);
        $project['image_three'] = $three_image_url;


        // imge four
        $img_four = $request->file('imageFour');
        $img_four_name = date('dmy_H_s_i');
        $fourext = strtolower($img_four->getClientOriginalExtension());
        $img_four_full_name =  $img_four_name.'-'.uniqid().'.'.$fourext;
        $four_upload_path = 'public/media/project/';
        $four_image_url = $img_four_full_name;
        $success_four = $img_four->move($four_upload_path,$img_four_full_name);
        $project['image_four'] = $four_image_url;


    
       
       
        
        // time remain
        $end_time = \Carbon\Carbon::parse($request->endTime);
        $project['rtime'] = $end_time->diffForHumans();

        $project['overview'] = $request->overview;
        $project['details'] = $request->details;
        $project['location'] = $request->map;
        
        DB::table('projects')->insert( $project);
        return redirect()->back();
        

    }
    public function update(Request $request, $id)
    {
       
        
        $project = array();
        $project['project_name']= $request->projectName;
        $project['address'] = $request->projectAddress;
        $project['unit_price'] = $request->unitPrice;
        $project['unit_quantity'] = $request->unitQuantity;
        $project['max_goal'] = $request->maxGoal;
        // $project['video'] = $request->videoLink;
        $project['start_time'] = $request->startTime;        
        $project['end_time'] = $request->endTime;


        if ($request->videoLink!=null) {
           // video
        //URL to be used for embed generation
        $url = $request->videoLink;

        //Optional array of website names, if present any websites not in the array will result in false being returned by the parser
        $whitelist = ['YouTube', 'Vimeo'];

        //Optional parameters to be appended to embed
        $params = [
            'autoplay' => 0,
            'loop' => 1
        ];

        //Optional attributes for embed container
        $attributes = [
        'type' => null,
        'class' => 'iframe-class',
        'data-html5-parameter' => true,
      
        ];

        $project['video'] = LaravelVideoEmbed::parse($url, $whitelist, $params, $attributes);

        
        }
        

        // imge one

        if($request->imageOne!=null){
            $img_one = $request->file('imageOne');
            $img_one_name = date('dmy_H_s_i');
            $oneext = strtolower($img_one->getClientOriginalExtension());
            $img_one_full_name =  $img_one_name.'-'.uniqid().'.'.$oneext;
            $one_upload_path = 'public/media/project/';
            $one_image_url = $img_one_full_name;
            $success_one = $img_one->move($one_upload_path,$img_one_full_name);
            $project['image_one'] = $one_image_url;
            $img_one = $request->file('imageOne');
        }
        
       
        if ($request->imageTwo!=null) {
            // imge two
        $img_two = $request->file('imageTwo');
        $img_two_name = date('dmy_H_s_i');
        $twoext = strtolower($img_two->getClientOriginalExtension());
        $img_two_full_name =  $img_two_name.'-'.uniqid().'.'.$twoext;
        $two_upload_path = 'public/media/project/';
        $two_image_url = $img_two_full_name;
        $success_two = $img_two->move($two_upload_path,$img_two_full_name);
        $project['image_two'] = $two_image_url;

        }
       
        if ($request->imageThree!=null) {
             // imge three
        $img_three = $request->file('imageThree');
        $img_three_name = date('dmy_H_s_i');
        $threeext = strtolower($img_three->getClientOriginalExtension());
        $img_three_full_name =  $img_three_name.'-'.uniqid().'.'.$threeext;
        $three_upload_path = 'public/media/project/';
        $three_image_url = $img_three_full_name;
        $success_three = $img_three->move($three_upload_path,$img_three_full_name);
        $project['image_three'] = $three_image_url;


        }

       
     if ($request->imagefour!=null) {
           // imge four
           $img_four = $request->file('imageFour');
           $img_four_name = date('dmy_H_s_i');
           $fourext = strtolower($img_four->getClientOriginalExtension());
           $img_four_full_name =  $img_four_name.'-'.uniqid().'.'.$fourext;
           $four_upload_path = 'public/media/project/';
           $four_image_url = $img_four_full_name;
           $success_four = $img_four->move($four_upload_path,$img_four_full_name);
           $project['image_four'] = $four_image_url;
   
     }

    
       
       
        
        // time remain
        $end_time = \Carbon\Carbon::parse($request->endTime);
        $project['rtime'] = $end_time->diffForHumans();

        
        
        DB::table('projects')->where('id', $id)->update($project);
        return redirect()->route('admin.projects');
        
        

    }
    public function delete( $id)
    {
        $data = Project::find($id);

       
        $data->delete();
        return redirect()->back();
    }

}
