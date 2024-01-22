<?php

namespace App\Docs\Schemas\ResponseCodes;

/**
 * @OA\Schema(
 *     schema="500",
 *     title="500",
 *     description="Internal server error. Please contact with administrators page.",
 *
 *     @OA\Property(property="message", type="string"),
 *     @OA\Property(
 *             property="errors",
 *             type="array",
 *
 *             @OA\Items(
 *                 type="array",
 *                 @OA\Items(
 *                 ),
 *             ),
 *         ),
 * )
 */
class Code500
{
}
