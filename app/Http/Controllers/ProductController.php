<?php

namespace MaikonParreiraChallenger\Http\Controllers;

use Illuminate\Http\Request;
use MaikonParreiraChallenger\Http\Controllers\Controller;
use MaikonParreiraChallenger\Http\Requests\ProductRequest;
use MaikonParreiraChallenger\Product;

class ProductController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$products = Product::orderBy('id', 'desc')->paginate(10);
		return view('products.index')->with('products', $products);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view('products.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(ProductRequest $request) {
		Product::create($request->all());
		return response()->redirectToRoute('products.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		$product = Product::findOrFail($id);
		return view('products.show')->with('product', $product);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		$product = Product::findOrFail($id);
		return view('products.edit')->with('product', $product);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(ProductRequest $request, $id) {
		$product = Product::findOrFail($id);
		$product->update($request->all());
		return response()->redirectToRoute('products.show', $id);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		$product = Product::findOrFail($id);
		$product->delete();
		return response()->redirectToRoute('products.index');
	}

	public function apiProductsAll() {
		$products = Product::all();
		return response()->json(['response' => 'success', 'products' => $products]);
	}

	public function apiProductFindBy($id) {
		$product = Product::findOrFail($id);
		return response()->json(['response' => 'success', 'product' => $product]);
	}
}
