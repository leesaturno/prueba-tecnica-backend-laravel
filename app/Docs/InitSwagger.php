<?php

namespace App\Docs;

/**
 * @OA\OpenApi(
 *
 *  @OA\Info(
 *      title="Tree nodes Backend API",
 *      version="1.0.0",
 *      description="API documentation for Tree nodes backend template",
 *  ),
 *
 *  @OA\Server(
 *      url="{schema}://{hostname}{domain}{port}/{versionapi}",
 *      description="Laravel backend api",
 *
 *      @OA\ServerVariable(
 *          serverVariable="domain",
 *          enum={"localhost","127.0.0.1"},
 *          default="127.0.0.1"
 *     ),
 *     @OA\ServerVariable(
 *          serverVariable="port",
 *          enum={":8000"},
 *          default=":8000",
 *     ),
 *      @OA\ServerVariable(
 *          serverVariable="schema",
 *          enum={"https", "http"},
 *          default="http"
 *     ),
 *      @OA\ServerVariable(
 *          serverVariable="versionapi",
 *          enum={"", "api/v1", "api/v2"},
 *          default="api/v1"
 *     ),
 *     @OA\ServerVariable(
 *          serverVariable="hostname",
 *          default="",
 *     )
 *  )
 * )
 */
class InitSwagger
{
}
