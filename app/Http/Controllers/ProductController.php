<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Category;
use App\Subcategory;
use App\Product;
use Response;
use DB;

class ProductController extends Controller {

    public function index() {
        return $this->viewscategory_subcategorylist();
    }

    public function viewscategory_subcategorylist() {
        $data = array();
        $Categorylist = Category::take(100)->orderBy('categoryid', 'DESC')->get();
        $SubCategorylist = SubCategory::take(100)->join('category', 'category.categoryid', '=', 'subcategory.categoryid')->orderBy('id', 'ASC')->get();

        $productlist = DB::select(DB::raw('SELECT c.categoryname,c.categoryid,sc.subcategoryname,p.productname,p.productid,p.productimage '
                                . 'from category c inner join subcategory sc on  c.categoryid = sc.categoryid '
                                . 'inner join product p on c.categoryid = p.categoryid order by p.productid desc'));

        $data['product_list'] = $productlist;
        $data['Categorylist'] = $Categorylist;
        $data['SubCategorylist'] = $SubCategorylist;
        return view('product.product_add', $data);
    }

    public function anySubcategoryByCategory(Request $request, $cat_id) {
        $SubCategories = Subcategory::where('categoryid', '=', $cat_id)->get();
        return Response::json($SubCategories);
    }

    public function createsproduct(Request $request) {

        if ($request->hasFile('image')) {
            $categoryid = $request->input('categoryname');
            $subcategoryid = $request->input('subcategoryname');
            $productname = $request->input('productname');

            $file = $request->file('image');
            $originalimage = $file->getClientOriginalName();

            Storage::put('upload/product/' . $originalimage, file_get_contents($request->file('image')->getRealPath()));

            $Product = new Product;
            $Product->productimage = $originalimage;
            $Product->categoryid = $categoryid;
            $Product->subcategoryid = $subcategoryid;
            $Product->productname = $productname;
            $Product->save();
            return $this->viewscategory_subcategorylist();
        } else {
            return "No Product Image Selected";
        }
    }

}
