<?php

namespace App\GraphQL\Mutation;

use Folklore\GraphQL\Support\Mutation;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use GraphQL;
use App\Post;
class createPostMutation extends Mutation
{
    protected $attributes = [
        'name' => 'createPostMutation',
        'description' => 'A mutation to post'
    ];

    public function type()
    {
        return GraphQL::type('Post');
    }

    public function args()
    {
        return [
            'name' => [
                'type' => Type::nonNull(Type::string())
            ],
            'description' => [
                'type' => Type::nonNull(Type::string()),
                'rules' => ['min:10']
            ],
        ];
    }

    public function resolve($root, $args, $context, ResolveInfo $info)
    {
        $post = new Post();
        $post->fill($args);
        $post->save();
        return $post;
    }
}
