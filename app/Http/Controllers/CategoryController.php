<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * @OA\Post(
     *      path="/api/category-create",
     *      operationId="createCategory",
     *      tags={"Category"},
     *      summary="Create new category",
     *      description="Returns category data",
     *      security={{"bearer_token":{}}},
     *      @OA\RequestBody(
     *          required=true,
     *          @OA\JsonContent(ref="#/components/schemas/CreateCategoryRequest")
     *      ),
     *      @OA\Response(
     *          response=201,
     *          description="Successful operation",
     *          @OA\JsonContent(ref="#/components/schemas/Category")
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

        $category = Category::create([
           Category::NAME => $request->name,
           Category::IMAGE => $request->image,
           Category::USER_ID => auth()->user()->id
        ]);

        return response()->json($category);
    }

    /**
     * @OA\Get(
     *      path="/api/categories",
     *      operationId="getCategoryList",
     *      tags={"Category"},
     *      summary="Get categories list",
     *      description="Returns categories data",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\Schema(
     *             type="array",
     *             @OA\Items(ref="#/definitions/Category"),
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
    public function getList()
    {
        return response()->json(Category::all());
    }
}
