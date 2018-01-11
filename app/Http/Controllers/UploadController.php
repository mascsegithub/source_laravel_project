<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\userimage;

//use App\Http\Controllers\Userimage;

class UploadController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function index(Request $request) {
        //return 'Comming';
        if ($request->hasFile('image')) {

            $slidertitle = $request->input('slidertitle');
            $sliderdescription = $request->input('sliderdescription');
            $sliderimageorder = $request->input('sliderimageorder');

            $file = $request->file('image');
            $originalimage = $file->getClientOriginalName();
            
            Storage::put('upload/images/' . $originalimage, file_get_contents($request->file('image')->getRealPath()));

            $userimage = new userimage;
            $userimage->imagename = $originalimage;
            $userimage->slidertitle = $slidertitle;
            $userimage->sliderdescription = $sliderdescription;
            $userimage->sliderimageorder = $sliderimageorder;
            $userimage->save();
            return $this->viewsliderimage();
        } else {
            return $this->viewsliderimage();
        }
        return $this->viewsliderimage();
    }

    public function viewsliderimage() {
        $userimage = userimage::take(10)->orderBy('id', 'DESC')->get();
        return view('admin.sliderview', ['userimage' => $userimage]);
    }

    public function update(Request $request, $id) {
        $userimage = userimage::take(1)->where('id', $id)->get();
        //$userimage = Userimage::find($id);
        //echo'<pre>';
        //var_dump($userimage);
        // echo '</pre>';
        return view('admin.updateslider', ['userimage' => $userimage]);
    }

    public function edit(Request $request, $id) {
        $userimage = new userimage;
        //$userimage->name = $request->input('name');
        $userimage->slidertitle = $request->input('slidertitle');
        $userimage->sliderdescription = $request->input('sliderdescription');
        $userimage->sliderimageorder = $request->input('sliderimageorder');

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $originalimage = $file->getClientOriginalName();
            Storage::put('upload/images/' . $originalimage, file_get_contents($request->file('image')->getRealPath()));

            $data = array(
                'imagename' => $originalimage,
                'slidertitle' => $request->input('slidertitle'),
                'sliderdescription' => $request->input('sliderdescription'),
                'sliderimageorder' => $request->input('sliderimageorder')
            );
        } else {
            $data = array(
                'slidertitle' => $request->input('slidertitle'),
                'sliderdescription' => $request->input('sliderdescription'),
                'sliderimageorder' => $request->input('sliderimageorder')
            );
        }
        userimage::where('id', $id)->update($data);
        return $this->viewsliderimage();
    }

    public function deleted(Request $request, $id) {
        Userimage::where('id', $id)->delete();
        return $this->viewsliderimage();
    }

}
