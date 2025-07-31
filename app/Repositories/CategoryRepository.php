<?php

namespace App\Repositories;
use App\Models\Category;
use App\Services\CategoryService;

class CategoryRepository{

    public function create($data){
        return Category::create($data);
    }
    public function all(){
        return Category::latest()->paginate(3);
;
    }
    public function edit($id){
        return Category::findOrFail($id);
    }
    public function find($id){
        return Category::findOrFail($id);
    }
    public function update($id,$data){
        $category=Category::findOrFail($id);
        $category->update($data);
        return $category;
    }

    public function delete($id){
        $category=Category::findOrFail($id);
       return  $category->delete();
       
    }
}