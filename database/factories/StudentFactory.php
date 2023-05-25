<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition() : array
    {   
        $name= fake()->name();
        $fake = str_replace(' ', '', $name);
        return [
            'username' =>  $fake,
            'academic_number' => $fake.'@menofia.edu.eg',
            'password' => '123456789',// password
            'subject_id' => ''
        ];
    }
}
?>