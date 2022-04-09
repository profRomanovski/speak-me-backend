<?php

namespace App\Virtual;
/**
 * @OA\Schema(
 *      title="Create category request",
 *      description="Create category request body data",
 *      type="object",
 *      required={"name", "image"}
 * )
 */
class CreateCategoryRequest
{
    /**
     * @OA\Property(
     *      title="Name",
     *      description="Name of the category user",
     *      example="Gucci"
     * )
     *
     * @var string
     */
    public $name;

    /**
     * @OA\Property(
     *      title="Image",
     *      description="Image path of the new category",
     *      example="/tmp/uploads/6244ca3e9c790_logo-nike-1971.png"
     * )
     *
     * @var string
     */
    public $image;
}
