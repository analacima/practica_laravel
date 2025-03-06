<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class AlumnoCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return ["data"=>$this->collection];

        /* sería equivalente a:
        foreach ($this->collection as $alumno) {
            $data=$this->AlumnoResource($alumno)
        }
         return ["data" => $data];
        }
        */
    }
}
