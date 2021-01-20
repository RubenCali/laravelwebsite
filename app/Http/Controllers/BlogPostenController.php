<?php
namespace App\Http\Controllers;
use App\BlogInsert;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class BlogPostenController extends Controller
{
    public function blogPosten(){
        return view('blogs.blog-posten');
    }
    public function postHandle(Request $request){
          
            $rules = [
                'titel' => 'required|max:30',
                'autheur' => 'required|max:30',
                'shortDES' => 'required|max:100|min:10',
                'longDES' => 'required|min:20',
                'datum' => 'required|max:30',
                'plaats' => 'required|max:50',
                'image' => 'required',
            ];
            $validator = Validator::make($request->all(),$rules);
		if ($validator->fails()) {
			return redirect('/admin')
			->withInput()
			->withErrors($validator);
		}
		else{
            $data = $request->input();
			try{
				$blogs = new BlogInsert;
                $blogs->titel = $data['titel'];
                $blogs->autheur = $data['autheur'];
                $blogs->longDES = $data['longDES'];
				$blogs->shortDES = $data['shortDES'];
                $blogs->datum = $data['datum'];
                $blogs->plaats = $data['plaats'];
				$blogs->image = $data['image'];

				$blogs->save();
				return redirect('/admin')->with('status',"Insert successfully");
			}
			catch(Exception $e){
				return redirect('/admin')->with('failed',"operation failed");
			}
		}
        
       
    }
}
