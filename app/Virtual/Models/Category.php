<?php

namespace App\Virtual\Models;
/**
 * @OA\Schema(
 *     title="User",
 *     description="Project user",
 *     @OA\Xml(
 *         name="User"
 *     )
 * )
 */
class Category
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
     *      description="Name of the new category",
     *      example="Guccci"
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
}
