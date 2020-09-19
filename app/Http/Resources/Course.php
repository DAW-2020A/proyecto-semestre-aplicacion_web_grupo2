<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;

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
            'user_id'=>new UserCollection($this->user_id),
            'students' =>$this->when(Auth::user()->role=='ROLE_TEACHER',new UserCollection($this->students)),
            'tests' => $this->when(Auth::user()->role=='ROLE_TEACHER',new TestCollection($this->tests)),
            'tests_students' => $this->when(Auth::user()->role=='ROLE_STUDENT',new TestCollection($this->tests)),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
