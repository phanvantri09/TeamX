<?php
namespace App\Repositories;

use App\Models\Transaction;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Helpers\ConstCommon;
class TransactionRepository implements TransactionRepositoryInterface
{
    public function create(array $data)
    {
        return Transaction::create($data);
    }
    public function all()
    {
        return Transaction::with('User')->orderBy('id', 'desc')->get();
    }
    public function getByStatus($type)
    {
        return Transaction::with('User')->where('type', $type)->orderBy('id', 'desc')->get();
    }
    public function changeStatus($id, $status)
    {

        $trans = Transaction::find($id);
        DB::beginTransaction();
        try {
            $trans->status = $status;
            $trans->save();
            DB::commit();
        } catch (\Exception $e){
            // report($e);
            DB::rollBack();
            // ConstCommon::sendMail($user->email, ['email' => $user->email,'type'=>'nạp/rút tiền','status'=> "Không thành công", "balance"=>$trans->total, 'link'=>route('walet')]);
            return false;
        }
        return true;

    }
    public function update(array $data, $id)
    {
        $user = Transaction::findOrFail($id);
        $user->update($data);
        return $user;
    }
    public function listForUser($id_user){
        return Transaction::select('transactions.*', 'carts.order_number as folow', 'carts.id_cart_old as id_cart_old')
        ->leftJoin('carts', 'transactions.id_cart', '=', 'carts.id')->where('id_user',$id_user)->orderBy('created_at', 'desc')->get();
    }

    public function listForUserAdmin($id_user){
        return Transaction::select('transactions.*', 'carts.order_number as folow', 'carts.id_cart_old as id_cart_old')
        ->leftJoin('carts', 'transactions.id_cart', '=', 'carts.id')->where('id_user',$id_user)
        ->orderBy('created_at', 'desc')
        ->get();
    }

    public function getByIDCart($id_cart, $id_user){
        return Transaction::whereIn('id_cart',$id_cart)->whereIn('type', [5])->where('id_user', $id_user)->orderBy('created_at','desc')->get();
    }
    public function getAll($id_user){
        return Transaction::select('transactions.*', 'carts.order_number as folow')
        ->leftJoin('carts', 'transactions.id_cart', '=', 'carts.id')->
        where('id_user',$id_user)->whereIn('type', [5])->orderBy('updated_at','desc')->get();
    }
    public function delete($id)
    {
        $user = Transaction::findOrFail($id);
        return $user->delete();
    }

}
