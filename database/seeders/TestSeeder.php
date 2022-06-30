<?php
declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Test;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tests')->delete();

        foreach (['Java', 'PHP', 'JavaScript'] as $test) {

            $newTest = new Test();

            $newTest->title = $test;

            $newTest->save();
        }
    }
}
