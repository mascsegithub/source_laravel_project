<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SubCat;

class SubcatController extends Controller {

    public function index() {
        return $this->subcatlist();
    }

    public function cretesubcat() {
        $subcategoryname = $request->input('subcategoryname');
        $categoryid = $request->input('categoryname');
        $Subcategory = new Subcategory;
        $Subcategory->subcategoryname = $Subcategory;
        $Subcategory->categoryid = $categoryid;
        $Subcategory->save();
    }

    public function subcatlist() {
        return view('category.subcat');
    }

}
