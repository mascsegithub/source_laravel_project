<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SubCategory;
use App\Category;

class SubcategoryController extends Controller {

    public function index() {

        return $this->viewssubcategorylist();
    }

    public function subcategoryindex() {
        return $this->viewssubcategorylist();
    }

    public function createsubcategory(Request $request) {
        //dd($_POST);
        $subcategoryname = $request->input('subcategoryname');
        $categoryid = $request->input('categoryname');

        $Subcategory = new Subcategory;
        $Subcategory->subcategoryname = $subcategoryname;
        $Subcategory->categoryid = $categoryid;
        $Subcategory->save();
        return redirect('/subcategory');
    }

    public function viewssubcategorylist() {
        $Categorylist = Category::take(100)->orderBy('categoryid', 'DESC')->get();
        $SubCategorylist = SubCategory::take(100)->join('category', 'category.categoryid', '=', 'subcategory.id')->orderBy('id', 'ASC')->get();
        return view('category.subcategory', ['SubCategorylist' => $SubCategorylist], ['Categorylist' => $Categorylist]);
    }

}
