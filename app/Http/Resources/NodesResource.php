<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class NodesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'parent' => $this->parent,
            'title' => $this->title,
            'created_at' =>  Carbon::createFromFormat('Y-m-d H:i:s', $this->created_at)->setTimezone($request->get('timezone'))->Format('Y-m-d\TH:i:s.u\Z'),
        ];
    }
}
