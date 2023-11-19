<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Repositories\BlogRepositoryInterface;
use App\Helpers\ConstCommon;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    protected $blogRepository;
    public function __construct(BlogRepositoryInterface $blogRepository)
    {
        $this->blogRepository = $blogRepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->blogRepository->all();
        return view('admin.blog.list', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('admin.blog.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all())  ;

        if($request->img){
            //thời gian upload
            $current_time = time();
            $time_string = date('d-m-Y-H-i-s', $current_time);
            $file = $request->img ;
            // lấy tên đuôi của file
            $ext = $file->extension();
            //tên đường dẫn được lưa vào folder và database
            $imageName =  'Blog'.'-'. $time_string.'.'.$ext;
            ConstCommon::addImageToStorage($file,$imageName);

        }
        $data = [
                    'name' => $request->name,
                    'content' => $request->content,
                    'img' => $imageName
                ];
        $this->blogRepository->create($data);
        return redirect()->route('blog.index')->with('success', 'Thành công');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $contentShow = $this->blogRepository->show($id);
        return view('admin.blog.show', compact('contentShow'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = $this->blogRepository->show($id);
        return view('admin.blog.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $this->blogRepository->update($data,$id);
        return back()->with('success', 'Thành Công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $this->blogRepository->delete($id);
        return redirect()->route('blog.index')->with('success', 'Xóa thành công');
    }
}
