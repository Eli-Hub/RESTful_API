<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PetitionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        //to return all columns in the table
//        return parent::toArray($request);

        //to return specific fields:
        return [
            'id' => $this -> id,
            'title' => ucwords($this -> title),
            'description' => $this -> description,
            'category' => $this -> category,
            'author' => $this -> author,
            'signees' => $this -> signees,
        ];
    }
}
