<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Repositories\TransactionRepositoryInterface;

class TransactionController extends Controller
{
    protected $transactionRepository;
    public function __construct(TransactionRepositoryInterface $transactionRepository)
    {
        $this->transactionRepository = $transactionRepository;
    }

    public function index(Request $request)
    {
        if ($request->has('type')) {
            $getAllTrans = $this->transactionRepository->getByStatus($request->type);
        } else {
            $getAllTrans = $this->transactionRepository->all();
        }

        return view('admin.transaction.list', compact('getAllTrans'));
    }

    public function changeStatus($id, $status)
    {
        if ($this->transactionRepository->changeStatus($id, $status)) {
            return back()->with('message', 'Thành Công');
        } else {
            return back()->with('error', 'Lỗi tiến trình');
        }
    }
    public function create()
    {
        return view('admin.transaction.add');
    }

    public function store(Request $request)
    {

        $data = $request->all();
        $this->transactionRepository->create($data);
        return redirect()->route('transaction.index')->with('success', 'Thành công');
    }
}
