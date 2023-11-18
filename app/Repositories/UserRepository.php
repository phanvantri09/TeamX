<?php
namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserRepository implements UserRepositoryInterface
{
    public function all()
    {
        return User::all();
    }

    public function create(array $data)
    {
        return User::create($data);
    }
    public function find($id)
    {
        return User::find($id);
    }
    public function update(array $data, $id)
    {
        $user = User::findOrFail($id);
        $user->update($data);
        return $user;
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
    }

    public function edit($id)
    {
        return User::findOrFail($id);
    }
    public function getUserByType($type)
    {
        return User::where("type", $type)->get();
    }
    
    
}
