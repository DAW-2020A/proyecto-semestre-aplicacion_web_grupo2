<?php

namespace App\Http\Resources;

use App\Crossword;
use Illuminate\Http\Resources\Json\JsonResource;

class Activity extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'score' => $this->score,
            $this->merge($this->type),

            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
