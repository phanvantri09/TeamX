<?php
namespace App\Repositories;

use App\Models\Transaction;
use App\Models\Service;
class ServiceRepository implements ServiceRepositoryInterface
{
    public function all()
    {
        return Service::all();
    }

    public function create(array $data)
    {
        return Service::create($data);
    }

    public function update(array $data, $id)
    {
        $user = Service::findOrFail($id);
        $user->update($data);
        return $user;
    }

    public function delete($id)
    {
        $user = Service::findOrFail($id);
        $user->delete();
    }

    public function show($id)
    {
        return Service::findOrFail($id);
    }
}
