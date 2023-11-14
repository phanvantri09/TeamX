<?php
namespace App\Repositories;

use App\Models\categoty_item;
use App\Models\product;
use App\Models\blog;
class BlogRepository implements BlogRepositoryInterface
{
    public function all()
    {
        return blog::all();
    }

    public function create(array $data)
    {
        return blog::create($data);
    }

    public function update(array $data, $id)
    {
        $user = blog::findOrFail($id);
        $user->update($data);
        return $user;
    }

    public function delete($id)
    {
        $user = blog::findOrFail($id);
        $user->delete();
    }

    public function show($id)
    {
        return blog::findOrFail($id);
    }
    public function getAllByType($type){
        return blog::where('type', $type)->get();
    }
    public function getAllByTypeCategory($type){
        return blog::select('blogs.*','categoties.name as namecategory')->leftJoin('categoties', 'categoties.id', 'blogs.id_category')->where('categoties.type', $type)->get();
    }
    public function getAllCategoryItemBlog($key){
        return blog::where('id_category', $key)->limit(12)->get();
    }

    public function getAllByCategory($type){
        return blog::where('id_category', $type)->get();
    }
}
