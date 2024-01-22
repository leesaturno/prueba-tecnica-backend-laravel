<?php

namespace App\Docs\Schemas\ResponseCodes;

/**
 * @OA\Schema(
 *     schema="422",
 *     title="422",
 *     description="Please, check errors form.",
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
class Code422
{
}
