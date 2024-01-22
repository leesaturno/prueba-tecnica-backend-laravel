<?php

namespace App\Docs\Schemas\ResponseCodes;

/**
 * @OA\Schema(
 *     schema="200",
 *     title="200",
 *     description="Process completed successfully.",
 *
 *     @OA\Property(property="message", type="string"),
 *     @OA\Property(
 *                  property="data",
 *                  type="array",
 *
 *                  @OA\Items(
 *                      type="array",
 *                      @OA\Items()
 *                  ),
 *              ),
 * )
 */
class Code200
{
}
