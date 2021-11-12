<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\instruction_levels;

class InstructionLavelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $is_exist = instruction_levels::all();

        if (!$is_exist->count()) {
            $instruction_levels = new instruction_levels();
            $instruction_levels->level = 'Introductory';
            $instruction_levels->save();

            $instruction_levels = new instruction_levels();
            $instruction_levels->level = 'Intermediate';
            $instruction_levels->save();

            $instruction_levels = new instruction_levels();
            $instruction_levels->level = 'Advanced';
            $instruction_levels->save();

            $instruction_levels = new instruction_levels();
            $instruction_levels->level = 'Comprehensive';
            $instruction_levels->save();
        }
    }
}
