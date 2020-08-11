<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Crossword extends JsonResource
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
            $this-> merge(new QuestionCollection($this->questions)),
        ];
    }
}
