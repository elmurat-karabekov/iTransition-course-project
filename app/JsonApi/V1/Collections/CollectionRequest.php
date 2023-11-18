<?php

namespace App\JsonApi\V1\Collections;

use Illuminate\Validation\Rule;
use LaravelJsonApi\Laravel\Http\Requests\ResourceRequest;
use LaravelJsonApi\Validation\Rule as JsonApiRule;

class CollectionRequest extends ResourceRequest
{

    /**
     * Get the validation rules for the resource.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'string'],
            'description' => ['required', 'string'],
            'user' => JsonApiRule::toOne('user'),
            'topic' => ['required', JsonApiRule::toOne('topic')],
            'items' => JsonApiRule::toMany(),
            'img_path' => ['nullable', 'string']
        ];
    }

}
