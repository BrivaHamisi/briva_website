<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use Image;

class AboutController extends Controller
{
    public function AboutPage(){
        $aboutpage = About::find(1);
        return view('admin.about_page.about_page_all', compact('aboutpage'));
    }//End of method

    public function UpdateAbout(Request $request){
        $about_id = $request->id;

        $request->validate([
            'company_profile' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048'
        ]);

        if ($request->file()){

            //Image Update
            $image = $request->file('about_image');
            $name_gen = hexdec(uniqid()).'_'.$image->getClientOriginalName();
            Image::make($image)->resize(523,625)->save('upload/about/'.$name_gen);
            $save_url = 'upload/about/'.$name_gen;

            //File Update
            $file = $request->file('company_profile');
            $fileName = time().'_'.$file->getClientOriginalName();
            $file->storeAs('files',$fileName,'upload');
            $file_url = '/upload/files/'.$fileName;

            About::findOrFail($about_id)->update([
                'title' => $request->title,
                'short_title' => $request->short_title,
                'short_description' => $request->short_description,
                'long_description' => $request->long_description,
                'about_image'=> $save_url,
                'company_profile' => $file_url,
            ]);
            $notification = array(
                'message'=>'About Page Updated with Files and Image Successful',
                'alert-type'=>'info',
            );

            return redirect()->back()->with($notification);
        }else{
            About::findOrFail($about_id)->update([
                'title' => $request->title,
                'short_title' => $request->short_title,
                'short_description' => $request->short_description,
                'long_description' => $request->long_description,
            ]);
            $notification = array(
                'message'=>'About Page Updated without Files and Image Successful',
                'alert-type'=>'info',
            );
            return redirect()->back()->with($notification);
        }//End of Else Method
    }//End of Method

    public function HomeAbout(){
        $aboutpage = About::find(1);
        return view('frontend.about_page', compact('aboutpage'));
    }//End of Method

    public function AboutMultiImage(){
        return view('admin.about_page.multiImage');
    }//End of method
}
