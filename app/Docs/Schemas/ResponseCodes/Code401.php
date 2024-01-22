<?php

namespace App\Docs\Schemas\ResponseCodes;

/**
 * @OA\Schema(
 *     schema="401",
 *     title="401",
 *     description="Unauthorized.",
 *
 *     @OA\Property(property="message", type="string"),
 *          @OA\Property(
 *                  property="errors",
 *                  type="array",
 *
 *                  @OA\Items(
 *                      type="array",
 *                      @OA\Items(
 *                      ),
 *                  ),
 *              ),
 * )
 */
class Code401
{
}
