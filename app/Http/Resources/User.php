<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class User extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => (int) $this->id,
            'full_name' => $this->full_name,
            'email' => $this->email,
            'created_at' => $this->created_at->format('d F Y, h:i A'),
        ];
    }
}
