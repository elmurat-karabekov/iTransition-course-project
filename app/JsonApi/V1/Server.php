<?php

namespace App\JsonApi\V1;

use App\Models\Collection;
use Illuminate\Support\Facades\Auth;
use LaravelJsonApi\Core\Server\Server as BaseServer;

class Server extends BaseServer
{

    /**
     * The base URI namespace for this server.
     *
     * @var string
     */
    protected string $baseUri = '/api/v1';

    /**
     * Bootstrap the server when it is handling an HTTP request.
     *
     * @return void
     */
    public function serving(): void
    {
        Auth::shouldUse('sanctum');
        Collection::creating(static function (Collection $collection): void {
            if (!$collection->user_id) {
                $collection->user()->associate(Auth::user());
            }
        });
    }

    /**
     * Get the server's list of schemas.
     *
     * @return array
     */
    protected function allSchemas(): array
    {
        return [
            Collections\CollectionSchema::class,
            Comments\CommentSchema::class,
            Items\ItemSchema::class,
            Tags\TagSchema::class,
            Topics\TopicSchema::class,
            Users\UserSchema::class,
        ];
    }
}
