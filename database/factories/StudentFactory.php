<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name_student' => $this->faker->firstName,
            'lastname_student' => $this->faker->lastName,
            'id_student' => $this->faker->unique()->numerify('####'),
            'email_student' => $this->faker->unique()->safeEmail,
            'password_student' => bcrypt($this->faker->password),
            'comments' => $this->faker->text,
        ];
    }
}
