<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Gala>
 */
class GalasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $totalUsers = User::count();
        $swimTypes = ['Backstroke', 'Freestyle', 'Breaststroke'];

        $minimum_time=strtotime("00:01:50");
        $maximum_time=strtotime("00:6:15");

        $rand=rand($minimum_time,$maximum_time);
        
        return [
            'user-id' => $this->faker->numberBetween(1, $totalUsers),
            'gala-date' => $this->faker->date(),
            'swim-type' => $this->faker->randomElement($swimTypes),
            'time' => date("H:i:s",$rand),
            'place' => $this->faker->numberBetween(1, 10),
        ];


        
    }
}
