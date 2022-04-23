<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * @OA\Post(
     *      path="/api/product-create",
     *      operationId="createProduct",
     *      tags={"Product"},
     *      summary="Create new Product",
     *      description="Returns product data",
     *      @OA\RequestBody(
     *          required=true,
     *          @OA\JsonContent(ref="#/components/schemas/CreateProductRequest")
     *      ),
     *      @OA\Response(
     *          response=201,
     *          description="Successful operation",
     *          @OA\JsonContent(ref="#/components/schemas/Product")
     *       ),
     *      @OA\Response(
     *          response=400,
     *          description="Bad Request"
     *      ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      )
     * )
     */
    public function create(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'image'=>'required',
        ]);

        $product = Product::create([
            Product::NAME => $request->name,
            Product::IMAGE => $request->image,
            Product::CATEGORY_ID => $request->category_id
        ]);

        return response()->json($product);
    }

    /**
     * @OA\Get(
     *      path="/api/products",
     *      operationId="getProductList",
     *      tags={"Product"},
     *      summary="Get products list",
     *      description="Returns products data",
     *     @OA\Parameter(
     *          name="categoryId",
     *          description="Cattegory id",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\Schema(
     *             type="array",
     *             @OA\Items(ref="#/definitions/Product"),
     *         ),
     *       ),
     *      @OA\Response(
     *          response=400,
     *          description="Bad Request"
     *      ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      )
     * )
     */
    public function getList(Request $request)
    {
        return response()->json(
            Product::query()->where('category_id','=',$request->get('categoryId'))->get()
        );
    }
}
