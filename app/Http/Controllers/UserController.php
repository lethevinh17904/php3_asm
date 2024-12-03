<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    // Trang chủ
    public function index()
    {
        $products = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->select('products.*', 'categories.name as category_name')
            ->paginate(9); // 9 sản phẩm mỗi trang

        return view('user.index', compact('products'));
    }

    // Danh sách
    public function list(Request $request)
    {
        $categories = DB::table('categories')->get();

        if ($request->has('category_id')) {
            $products = DB::table('products')
                ->join('categories', 'products.category_id', '=', 'categories.id')
                ->select('products.*', 'categories.name as category_name')
                ->where('products.category_id', $request->category_id)
                ->get();
        } else {
            $products = DB::table('products')
                ->join('categories', 'products.category_id', '=', 'categories.id')
                ->select('products.*', 'categories.name as category_name')
                ->get();
        }

        return view('user.list', compact('products', 'categories'));
    }

    // Chi tiết sản phẩm
    public function detail($id)
    {
        $product = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->select('products.*', 'categories.name as category_name')
            ->where('products.id', $id)
            ->first();

        if (!$product) {
            return redirect()->route('user.list')->with('error', 'Sản phẩm không tồn tại');
        }

        return view('user.detail', compact('product'));
    }

    // Tìm kiếm
    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        $products = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->select('products.*', 'categories.name as category_name')
            ->where('products.name', 'like', "%$keyword%")
            ->orWhere('products.description', 'like', "%$keyword%") // Tìm kiếm trong cả tên và mô tả
            ->get();

        return view('user.search', compact('products', 'keyword'));
    }
}
