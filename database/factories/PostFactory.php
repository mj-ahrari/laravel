<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name(),
<<<<<<< HEAD
            'status' => $this->faker->randomElement(['0','1'])
=======
            'user_id' => $this->faker->randomElement([1,2,3,4])
>>>>>>> 5acb01a9a419ef281b4df818f347eb0a0b44d161
        ];
    }
}
