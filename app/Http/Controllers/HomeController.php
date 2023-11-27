<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\UserRepositoryInterface;
use App\Repositories\TransactionRepositoryInterface;
use App\Repositories\BlogRepositoryInterface;
use App\Repositories\ServiceRepositoryInterface;
class HomeController extends Controller
{
    protected $ServiceRepository;
    protected $UserRepository;
    protected $BlogRepository;
    protected $TransactionRepository;
    public function __construct(
        ServiceRepositoryInterface $ServiceRepository,
        UserRepositoryInterface $UserRepository,
        BlogRepositoryInterface $BlogRepository,
        TransactionRepositoryInterface $TransactionRepository
    ){
        $this->ServiceRepository = $ServiceRepository;
        $this->UserRepository = $UserRepository;
        $this->BlogRepository = $BlogRepository;
        $this->TransactionRepository = $TransactionRepository;
    }

    public function home(){
        return view('user.page.home');
    }
    public function service(){
        $brands = $this->ServiceRepository->getServiceByBrand();
        //dd($brands);
        return view('user.page.service',compact('brands'));
    }
    public function info(){
        return view('user.page.info');
    }
    public function blog(){
        return view('user.page.blog');
    }
    public function history(){
        return view('user.page.history');
    }
    public function contact(){
        return view('user.page.contact');
    }
    public function blogPost($title){
        return view('user.page.blogPost');
    }
    public function transactionUser(){
        return view('user.page.transactionUser');
    }
    public function transactionUserPost(Request $request){
        return view('user.page.transactionUser');
    }
}
