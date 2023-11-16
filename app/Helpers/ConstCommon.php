<?php

namespace App\Helpers;

use Illuminate\Http\UploadedFile;
use Illuminate\Contracts\Routing\UrlGenerator;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\Mail\SendLinkMail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Models\Transaction;
class ConstCommon {
    const ListTypeUser = ['user'=>111, 'admin'=>222];
    const TypeUser = 111;
    const TypeAdmin = 222;
    // 1 là vừa book, 2 đã chấp nhận đang chạy, 3 chạy đã xong, 4 từ chối
    const ListStatusTransaction = ['1'=>"Vừa book",  '2'=>"đã chấp nhận đang chạy", '3'=>"Chạy đã xong hoàn thành", '4'=>"từ chối", ];
    // 1 là của service, 2 nộp , 3 rút
    const ListTypeTransaction = ['1'=>"service",  '2'=>"nộp", '3'=>"rút"];
    
    public static function addImageToStorage($file, $name ){
        $file->storeAs('images', $name, 'public');
    }
    public static function getLinkImageToStorage($name){
        return url('storage/images/'.$name);
    }
    public static function delImageToStorage($name){
        return Storage::delete('images/'.$name);
    }
    public static function getCurrentTime(){
        $now = Carbon::now();
        $now->setTimezone('Asia/Ho_Chi_Minh');
        return $now->format('Y-m-d').'-'. $now->format('h-s-i');
    }

    public static function sendMail($email, $content){
        $mail = new SendMail($content);
        return Mail::to($email)->queue($mail);
    }
    public static function sendMailLinkPass($email, $content){
        $mail = new SendLinkMail($content);
        return Mail::to($email)->queue($mail);
    }
    public static function autoPlusView($id){
        $product = product::find($id);
        $product->view = $product->view+1;
        return $product->save();
    }
}
