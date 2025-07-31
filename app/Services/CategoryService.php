<?php
namespace App\Services;
use App\Repositories\CategoryRepository;

class  CategoryService{
    protected $CategoryRepository;
    public function __construct(){
        $this->CategoryRepository=new CategoryRepository();
    }
    public function store($data){
        return $this->CategoryRepository->create($data);
    }
    public function all(){
        return $this->CategoryRepository->all();
    }
    public function find($id){
        return $this->CategoryRepository->find($id);
    }
    public function update($id,$data){
        return $this->CategoryRepository->update($id,$data);
    }
    public function delete($id){
        return $this->CategoryRepository->delete($id);
        
    }
}