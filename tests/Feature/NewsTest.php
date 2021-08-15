<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class NewsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_news_list_show_status()
    {
        $response = $this->get(route('news'));

        $response->assertStatus(200);
    }

    public function test_news_list_view()
    {
        $response = $this->get(route('news'));

        $response->assertViewIs('news');
    }

    public function test_news_add_news()
    {
        $response = $this->get(route('addNews'));

        $response->assertStatus(200);
    }
}
