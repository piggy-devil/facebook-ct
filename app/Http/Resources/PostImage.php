<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostImage extends JsonResource
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
            'data' => [
                'type' => 'post-images',
                'post_image_id' => $this->id,
                'attributes' => [
                    'path' => url('storage/' . $this->image),
                    'width' => $this->width,
                    'height' => $this->height,
                    'location' => $this->location,
                ]
            ],
            'links' => [
                'self' => url('/users/'.$this->user_id),
            ]
        ];
    }
}
