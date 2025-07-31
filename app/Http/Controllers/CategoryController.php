<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use Illuminate\Http\Request;
use App\Services\CategoryService;

class CategoryController extends Controller
{
protected $CategoryService;

    public function __construct(){
        $this->CategoryService=new CategoryService();
    }
    public function welcome(){
        return view('welcome');
    }
    public function adddata(StoreCategoryRequest $request){
        $data=$request->Validated();
    $this->CategoryService->store($data);

       return redirect()->back()->with('success', 'Congratulations! Category added successfully.');
    }
    public function showdata(){
       $categoeries= $this->CategoryService->all();
        return view('showdata',compact('categoeries'));
    }

    
    public function edit($id){
        $categories=$this->CategoryService->find($id);
        return view('edit',compact('categories'));
    }
    public function update(Request $request, $id){
           $data=$request->validate([
            'name'=>'required',
           ]);
           $this->CategoryService->update($id,$data);
           return redirect()->route('showdata');
    }

    public function delete($id){
        $this->CategoryService->delete($id);
       return redirect()->back()->with('delete_success', 'Category deleted successfully.');
    }
}
