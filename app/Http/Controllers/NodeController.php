<?php

namespace App\Http\Controllers;

use App\Http\Requests\NodesIndexRequest;
use App\Models\Node;
use App\Http\Requests\StoreNodeRequest;
use App\Http\Requests\UpdateNodeRequest;
use App\Services\NodeService;

class NodeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $nodeService;
    public function __construct(NodeService $nodeService)
    {
        $this->nodeService = $nodeService;
    }
    public function index(NodesIndexRequest $request)
    {
        return $this->nodeService->index($request->safe()->all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNodeRequest $request)
    {
        return $this->nodeService->store($request->safe()->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Node $node)
    {
        return $this->nodeService->show($node);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Node $node)
    {
        return $this->nodeService->destroy($node);
    }
}
