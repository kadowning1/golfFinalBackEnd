<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GolfersResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => (string)$this->id,
            'type' => 'Golfers',
            'attributes' => [
                'name' => $this->name,
                'score' => $this->score,
                'country' => $this->country,
                'position' => $this->position,
                'total_to_par' => $this->total_to_par
            ]
        ];
    }
}
