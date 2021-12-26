<?php

namespace Tests\Unit;
use Faker\Factory;
use Illuminate\Foundation\Testing\WithFaker;
use PHPUnit\Framework\TestCase;

class PostTest extends TestCase
{
    
        public function test_can_create_post()
        {
            $data = [
                'name' => $this->faker->firstname(),
                
            ];
    
            $this->post(route('posts.store'), $data)
                ->assertStatus(201)
                ->assertJson($data);
        }
    
        public function test_can_update_post()
        {
            $post = factory(Post::class)->create();
    
            $data = [
                'name' => $this->faker->firstname(),
                
            ];
    
            $this->put(route('posts.update', $post->id), $data)
                ->assertStatus(200)
                ->assertJson($data);
        }
    
        public function test_can_show_post()
        {
            $post = factory(Post::class)->create();
    
            $this->get(route('posts.show', $post->id))
                ->assertStatus(200);
        }
    
        public function test_can_delete_post()
        {
            $post = factory(Post::class)->create();
    
            $this->delete(route('posts.delete', $post->id))
                ->assertStatus(204);
        }
    
        public function test_can_list_posts()
        {
            $posts = factory(Post::class, 2)->create()->map(function ($post) {
                return $post->only(['id', 'name']);
            });
    
            $this->get(route('posts'))
                ->assertStatus(200)
                ->assertJson($posts->toArray())
                ->assertJsonStructure([
                    '*' => [ 'id', 'name']
                ]);
        }
    }

