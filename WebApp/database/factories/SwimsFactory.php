<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Swims>
 */
class SwimsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $minimum_time=strtotime("00:01:00");
        $maximum_time=strtotime("00:5:15");

        $rand1=rand($minimum_time,$maximum_time);
        $rand2=rand($minimum_time,$maximum_time);
        $rand3=rand($minimum_time,$maximum_time);
        
        return [
            'freestyle-time' => date("H:i:s",$rand1),
            'backstroke-time' => date("H:i:s",$rand2),
            'breaststroke-time' => date("H:i:s",$rand3),
        ];
    }
}
