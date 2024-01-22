<?php

namespace App\Docs\Schemas\Models;

/**
 * Class Node.
 *
 *
 * @OA\Schema(
 *     description="Node model",
 *     title="Node model",
 *
 *     @OA\Xml(
 *         name="Node"
 *     )
 * )
 */
class Node
{

    /**
     * @OA\Property(
     *     description="Node parent",
     *     title="Node parent",
     *     default="parent"
     * )
     */
    private string $parent;
    /**
     * @OA\Property(
     *     description="Node locales",
     *     title="Node locales",
     *     default="['es','en']"
     * )
     */
    private string $locales;
}
