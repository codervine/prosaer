<?php

namespace Database\Factories;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\Factory;

class OrganisationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->firstName()." Org";

        return [
            //
            'user_id' => 1,
            'name' => $name,
            'slug' => Str::slug($name),
            'organisation_type_id' => 1,
            'address_line_1' => $this->faker->streetAddress,
            'country_id' => 4,
            'email' => $this->faker->unique()->safeEmail,
            'website' => $this->faker->url,
            'mobile' => $this->faker->phoneNumber,
        ];
    }
}
