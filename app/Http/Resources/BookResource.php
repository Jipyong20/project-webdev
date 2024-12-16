<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this -> id,
            'isbn' => $this -> isbn,
            'title' => $this -> title,
            'author' => $this -> author,
            'category' => CategoryResource::make($this->whenLoaded('category')),
            'created_at' => $this->created_at->toFormattedDateString(),

        ];
    }
}