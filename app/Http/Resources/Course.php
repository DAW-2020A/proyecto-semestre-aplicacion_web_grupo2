<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Course extends JsonResource
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
            'name' => $this->name,
            'code' => $this->code,
            'students' => new UserCollection($this->students),
            'tests' => new TestCollection($this->tests),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
