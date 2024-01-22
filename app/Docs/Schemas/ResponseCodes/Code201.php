<?php

namespace App\Docs\Schemas\ResponseCodes;

/**
 * @OA\Schema(
 *     schema="201",
 *     title="201",
 *     description="Entity creation successfully.",
 *
 *     @OA\Property(
 *       type="array",
 *
 *           @OA\Items(
 *               type="array",
 *               @OA\Items()
 *           ),
 *       ),
 * )
 */
class Code201
{
}
