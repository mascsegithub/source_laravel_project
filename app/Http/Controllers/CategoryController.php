<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\SubCategory;

class CategoryController extends Controller {

    public function index() {
        return $this->viewscategorylist();
        //return $this->viewssubcategorylist();
    }

    public function create(Request $request) {
        $categoryname = $request->input('categoryname');
        $Category = new Category;
        $Category->categoryname = $categoryname;
        $Category->save();

        return $this->viewscategorylist();
    }

    public function viewscategorylist() {
        $Categorylist = Category::take(100)->orderBy('categoryid', 'DESC')->get();
        $SubCategorylist = SubCategory::take(100)->join('category', 'category.categoryid', '=', 'subcategory.categoryid')->orderBy('id', 'ASC')->get();
        return view('category.category', ['Categorylist' => $Categorylist], ['SubCategorylist' => $SubCategorylist]);
    }

    public function subcategoryindex() {
        return $this->viewssubcategorylist();
    }

    public function createsubcategory(Request $request) {
        $subcategoryname = $request->input('subcategoryname');
        //$categoryid = $request->input('categoryname');
        $Subcategory = new Subcategory;
        $Subcategory->subcategoryname = $subcategoryname;
        //$Subcategory->categoryid = $categoryid;
        $Subcategory->save();
        return $Subcategory;

        //return $this->viewssubcategorylist();
    }

    public function viewssubcategorylist() {
        $Categorylist = Category::take(100)->orderBy('categoryid', 'DESC')->get();
        $SubCategorylist = SubCategory::take(100)->join('category', 'category.categoryid', '=', 'subcategory.categoryid')->orderBy('subcatid', 'ASC')->get();
        return view('category.category', ['SubCategorylist' => $SubCategorylist], ['Categorylist' => $Categorylist]);
    }

}
