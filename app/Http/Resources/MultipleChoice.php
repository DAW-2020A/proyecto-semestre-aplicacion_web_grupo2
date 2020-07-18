<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MultipleChoice extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'correct_answer' => $this->correct_answer,
            'option1' => $this->option1,
            'option2' => $this->option2,
            'option3' => $this->option3,
            'option4' => $this->option4,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
