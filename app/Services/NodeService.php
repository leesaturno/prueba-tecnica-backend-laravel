<?php

namespace App\Services;

use App\Models\Node;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\NodesResource;
use Carbon\Carbon;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class NodeService
{
    public function index(array $filters): AnonymousResourceCollection
    {
        if (array_key_exists('parent', $filters)) {
            return NodesResource::collection(Node::getList($filters)->get());
        }
        return NodesResource::collection(Node::getList($filters)->where('parent', null)->get());
    }

    public function store(array $data): Node
    {
        $node = new Node();
        $node->parent = $data['parent'];
        $node->save();

        return $node;
    }
    public function show(Node $node): NodesResource
    {
        $node = new NodesResource($node);
        return $node;
    }

    public function destroy(Node $node): JsonResponse
    {
        $childs = Node::where('parent', $node->id)->count();
        if ($childs > 0) {
            return response()->koJson([], "can't delete a parent node", 422);
        }
        $node->delete();

        return response()->okJson();
    }
}
