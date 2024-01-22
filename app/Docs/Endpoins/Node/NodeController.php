<?php

namespace App\Docs\Endpoins\Node;

use OpenApi\Annotations as OA;

class NodeController
{
    /**
     * Display a listing of Node.
     *
     * @OA\Get(
     *     path="/nodes",
     *     tags={"Node"},
     *     operationId="NodeIndex",
     * 
     *     @OA\Parameter(
     *          name="parent",
     *          description="Node parent",
     *          required=false,
     *          in="query",
     *
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\Parameter(
     *          name="timezone",
     *          description="timezone",
     *          required=false,
     *          in="query",
     *
     *          @OA\Schema(
     *              type="string"
     *          )
     *      ),
     *
     *     @OA\Response(
     *          response="201",
     *          description="Entity created successfully.",
     *
     *          @OA\JsonContent(ref="#/components/schemas/201")
     *      ),
     *
     *     @OA\Response(
     *          response="500",
     *          description="Internal server error. Please contact with administrators page.",
     *
     *          @OA\JsonContent(ref="#/components/schemas/500")
     *      ),
     *
     * )
     */
    public function index()
    {
    }

    /**
     * Store a newly created node in storage.
     *
     * @OA\Post(
     *     path="/nodes",
     *     tags={"Node"},
     *     operationId="NodeStore",
     *
     *     @OA\Response(
     *          response="200",
     *          description="Process completed successfully.",
     *
     *          @OA\JsonContent(ref="#/components/schemas/200")
     *      ),
     *
     *     @OA\Response(
     *          response="500",
     *          description="Internal server error. Please contact with administrators page.",
     *
     *          @OA\JsonContent(ref="#/components/schemas/500")
     *      ),
     *
     *     @OA\RequestBody(
     *         request="Node Store",
     *         description="Node store request",
     *         required=true,
     *
     *         @OA\JsonContent(ref="#/components/schemas/Node"),
     *     )
     * )
     */
    public function store()
    {
    }

    /**
     * Return the information of specified node.
     *
     * @OA\Get(
     *     path="/node/{node}",
     *     tags={"Node"},
     *     operationId="NodeShow",
     * 
     *     @OA\Parameter(
     *          name="locale",
     *          description="locale",
     *          required=false,
     *          in="path",
     *
     *          @OA\Schema(
     *              type="string"
     *          )
     *      ),
     *
     *     @OA\Response(
     *          response="200",
     *          description="Process completed successfully.",
     *
     *          @OA\JsonContent(ref="#/components/schemas/200")
     *      ),
     *
     *     @OA\Response(
     *          response="500",
     *          description="Internal server error. Please contact with administrators page.",
     *
     *          @OA\JsonContent(ref="#/components/schemas/500")
     *      ),
     *
     * )
     */
    public function show()
    {
    }


    /**
     * Remove the specified node from storage.
     *
     * @OA\Delete(
     *     path="/node/{node}",
     *     tags={"Node"},
     *     operationId="NodeDestroy",
     *
     *     @OA\Response(
     *          response="200",
     *          description="Process completed successfully.",
     *
     *          @OA\JsonContent(ref="#/components/schemas/200")
     *      ),
     *
     *     @OA\Response(
     *          response="500",
     *          description="Internal server error. Please contact with administrators page.",
     *
     *          @OA\JsonContent(ref="#/components/schemas/500")
     *      ),
     *
     * )
     */
    public function destroy()
    {
    }
}
