<?php

namespace App\Http\Resources;

use App\Crossword;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\Resource;
use App\Http\Resources\Complete as CompleteResource;
use App\Http\Resources\MultipleChoice as MultipleChoiceResource;
use App\Http\Resources\WordSearch as WordSearchResource;
use App\Http\Resources\Crossword as CrosswordResource;

class Activity extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @param $type
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'score' => $this->score,
            //$this->merge($this->type),
            //'crosswords' => $this->when($this->type_type=='App\Crossword', new \App\Http\Resources\Crossword($this->type)),
            'type' => explode("\\", $this->type_type) [1],
            $this->mergeWhen($this->type_type=='App\Crossword', new CrosswordResource($this->type)),
            $this->mergeWhen($this->type_type=='App\WordSearch', new WordSearchResource($this->type)),
            $this->mergeWhen($this->type_type=='App\Complete', new CompleteResource($this->type)),
            $this->mergeWhen($this->type_type=='App\MultipleChoice', new MultipleChoiceResource($this->type)),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
