<?php

namespace App\Virtual;
/**
 * @OA\Schema(
 *      title="Create product request",
 *      description="Create product request body data",
 *      type="object",
 *      required={"name", "image"}
 * )
 */
class CreateProductRequest
{
    /**
     * @OA\Property(
     *     title="ID",
     *     description="ID",
     *     format="int64",
     *     example=1
     * )
     *
     * @var integer
     */
    private $id;

    /**
     * @OA\Property(
     *      title="Name",
     *      description="Name of the new product",
     *      example="T-shirt"
     * )
     *
     * @var string
     */
    public $name;

    /**
     * @OA\Property(
     *      title="Image",
     *      description="Path to image on the server",
     *      example="/tmp/uploads/6244ca3e9c790_logo-nike-1971.png"
     * )
     *
     * @var string
     */
    public $image;

    /**
     * @OA\Property(
     *     title="Category ID",
     *     description="ID of category",
     *     format="int64",
     *     example=1
     * )
     *
     * @var integer
     */
    private $category_id;
}
