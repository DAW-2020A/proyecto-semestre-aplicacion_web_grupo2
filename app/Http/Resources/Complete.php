<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Complete extends JsonResource
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
            'complete_text' => $this->complete_text,
            'hidden_text' => $this->hidden_text,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
