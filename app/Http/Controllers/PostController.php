<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function create(): void
    {
        $mongo = (new Post());
        $mongo->title = 'test title';
        $mongo->body = 'test body';
        $mongo->save();
    }

    public function read(): array
    {
        $mongo = (new Post());

        return $mongo
            ->where('title', '=', 'test title')
            ->get()
            ->toArray();
    }

    public function update(): void
    {
         (new Post())
            ->where('title', '=', 'test title')
            ->update(
                [
                    'title' => 'real title',
                    'body' => 'real body',
                ]
            );
    }

    public function delete(): void
    {
        (new Post())
            ->where('title', '=', 'test title')
            ->delete();
    }
}
