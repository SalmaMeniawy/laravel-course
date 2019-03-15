<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'Post_id'=> $this->id,
            'Post_title' => $this->title,
            'Post_description'=>$this->description,
            'user'=> new UserResource($this->user),
        ];
        
    }
}
