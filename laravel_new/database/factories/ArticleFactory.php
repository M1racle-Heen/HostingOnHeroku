<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ArticleFactory extends Factory
{
    
    protected $model = \App\Models\Article::class;
    
    public function definition()
    {
        return[
        'Email' =>$this->faker->text(20),
        'password' => $this->faker->text(10)
    ];
    }
}