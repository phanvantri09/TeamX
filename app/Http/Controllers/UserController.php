<?php

namespace App\Http\Controllers;
use App\Repositories\UserRepositoryInterface;
use Illuminate\Http\Request;
use App\Http\Requests\CreateRequestUser;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    protected $userRepository;
    public function __construct(UserRepositoryInterface $userRepository){
        $this->userRepository = $userRepository;
    }
    public function index($type)
    {
        $users = $this->userRepository->getUserByType($type);
        
        return view('admin.user.list',compact('users'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.add');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->merge(['password' => Hash::make($request->password)]);
        $type = $request->type;
        $data = $request->all();
        $this->userRepository->create($data);
        return back()->with('success', 'Thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserInfo  $userInfo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = $this->userRepository->show($id);
        return view('admin.user.show', compact('user'));
    }

    public function edit($id)
    {
        
        $user = $this->userRepository->edit($id);
        return view('admin.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserInfo  $userInfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(empty($request->password)){
            $data = [
                'email' => $request->email,
                'type' => $request->type
            ];
        }else{
            $data = [
                'email' => $request->email,
                'password' =>  Hash::make($request->password),
                'type' => $request->type
            ];
        }
        
        $this->userRepository->update($data, $id);
        return back()->with('success', 'Thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserInfo  $userInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->userRepository->delete($id);
        return back()->with('success', 'Thành công');
    }
}
