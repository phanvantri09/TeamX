<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Repositories\ServiceRepositoryInterface;
use App\Http\Requests\Service\CreateRequestService;
use App\Http\Requests\Service\UpdateRequestService;


class ServiceController extends Controller
{
    protected $ServiceRepository;

    public function __construct(ServiceRepositoryInterface $ServiceRepository)
    {
        $this->ServiceRepository = $ServiceRepository;
    }

    public function index()
    {
        $data = $this->ServiceRepository->all();
        return view('admin.service.list', compact('data'));
    }

    public function create()
    {
        return view('admin.service.add');
    }

    public function store(CreateRequestService $request)
    {

        $data = $request->all();
        $this->ServiceRepository->create($data);
        return redirect()->route('service.index')->with('success', 'Thành công');
    }

    public function edit($id)
    {
        $data = $this->ServiceRepository->show($id);
        return view('admin.service.edit', compact('data'));
    }

    public function update(UpdateRequestService $request, $id)
    {
        $data = $request->all();
        $this->ServiceRepository->update($data, $id);
        return redirect()->route('service.index')->with('success', 'Thành công');
    }

    public function destroy($id)
    {
        $this->ServiceRepository->delete($id);
        return redirect()->route('service.index')->with('success', 'Xóa thành công');
    }
}
