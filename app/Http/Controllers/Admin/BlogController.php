<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Blog;
use Image;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'admin']);
    }

    public function index(){
        $blog = Blog::all();
        return view('admin.pages.blog.index')->with(['blog' => $blog]);
    }

    public function create(){
        return view('admin.pages.blog.create');
    }

    public function postCreate(Request $request){
        if($request->get('blog_id') != ''){
            if($request->hasFile('file')){
                $request->validate([
                    'title' => 'required|string',
                    'tag' => 'required|string',
                    'file'   => 'required | mimes:jpeg,jpg,png'
                ]);
                $image = $request->file('file');
                $relativePath = '/uploads/blog';
                $directory    = public_path() . $relativePath;
                $uploadFileName = time().'.'.$request->file('file')->getClientOriginalExtension();
                $img = Image::make($image->getRealPath());
                $img->resize(870, 515, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($directory.'/'. $uploadFileName);
                $filePath = $relativePath.'/'.$uploadFileName;
            }else{
                $request->validate([
                    'title' => 'required|string',
                    'tag' => 'required|string',
                ]);
            }
            $blog = Blog::findOrFail($request->get('blog_id'));
            $blog->title = $request->get('title');
            $blog->tag = $request->get('tag');
            $blog->description = $request->get('description_content');
            if($request->hasFile('file')){
                \File::delete(public_path($blog->image));
                $blog->image = $filePath;
            }
            $blog->save();

            return redirect()->route('admin.blog')->with('success_information', 'Blog updated successfully.');

        }else{
            $request->validate([
                'title' => 'required|string|unique:blogs',
                'tag' => 'required|string',
                'file'   => 'required | mimes:jpeg,jpg,png'
            ]);
//            $filename = $request->file('file')->getClientOriginalName();
//            $fileSize = $request->file('file')->getSize();
//            $relativePath = '/uploads/blog';
//            $directory    = public_path() . $relativePath;
//            $uploadFileName = time().'.'.$request->file('file')->getClientOriginalExtension();
//            $request->file('file')->move($directory, $uploadFileName);

            $image = $request->file('file');
            $relativePath = '/uploads/blog';
            $directory    = public_path() . $relativePath;
            $uploadFileName = time().'.'.$request->file('file')->getClientOriginalExtension();
            $img = Image::make($image->getRealPath());
            $img->resize(870, 515, function ($constraint) {
                $constraint->aspectRatio();
            })->save($directory.'/'. $uploadFileName);

            Blog::create([
                'title' =>$request->get('title'),
                'tag' =>$request->get('tag'),
                'image' => $relativePath.'/'.$uploadFileName,
                'description' => $request->get('description_content')
            ]);

            return redirect()->route('admin.blog')->with('success_information', 'Blog created successfully.');
        }

    }
    public function edit($id){
        $blog = Blog::findOrFail($id);
        return view('admin.pages.blog.edit')->with(['blog' =>$blog]);
    }

    public function delete($id){
        $blog = Blog::findOrFail($id);
        $blog->delete();
        return redirect()->route('admin.blog')->with('success_information', 'Blog removed successfully.');
    }
}
