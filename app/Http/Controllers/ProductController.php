<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Http\Resources\ProductCollection;
use App\Http\Resources\ProductResource;
use App\Models\Product;

class ProductController extends Controller
{
    protected $model;

    /**
     * ProductController constructor.
     * @param Product $product
     */
    public function __construct(Product $product)
    {
        $this->model = $product;
    }


    /**
     * @return ProductCollection
     */
    public function index()
    {
        return new ProductCollection($this->model->paginate(10));
    }


    /**
     * @param $id
     * @return ProductResource|\Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        if(!$product = $this->model->find($id))
            return response()->json(['error' => 'product not found'], 404);

        return new ProductResource($product);
    }


    /**
     * @param CreateProductRequest $request
     * @return ProductResource
     */
    public function store(CreateProductRequest $request)
    {
        $product = $this->model->create($request->all());

        return new ProductResource($product);
    }


    /**
     * @param UpdateProductRequest $request
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateProductRequest $request, $id)
    {
        if(!$product = $this->model->find($id))
            return response()->json(['error' => 'product not found'], 404);

        $product->update($request->all());

        return response()->json($product);
    }


    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete($id)
    {
       if(!$product = $this->model->find($id))
           return response()->json(['error' => 'product not found'], 404);

       $product->delete();

       return response()->json([], 204);
    }
}
