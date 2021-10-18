<<<<<<< HEAD
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    DB::table('students')->insert([
        'nim' => '2031710082',
        'name' => 'Reihan Amru',
        'class' => 'MI-2E',
        'department' => 'JTI',
        'phone_number' => '085645510533',
    ]);
    DB::table('students')->insert([
        'nim' => '2031710024',
        'name' => 'Siwi Tyas P',
        'class' => 'MI-2E',
        'department' => 'JTI',
        'phone_number' => '085755060296',
    ]);
    DB::table('students')->insert([
        'nim' => '2031710134',
        'name' => 'Tegar Dwi vantoro',
        'class' => 'MI-2E',
        'department' => 'JTI',
        'phone_number' => '085156850932',
    ]);
    }
=======
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    DB::table('students')->insert([
        'nim' => '2031710082',
        'name' => 'Reihan Amru',
        'class' => 'MI-2E',
        'department' => 'JTI',
        'phone_number' => '085645510533',
    ]);
    DB::table('students')->insert([
        'nim' => '2031710024',
        'name' => 'Siwi Tyas P',
        'class' => 'MI-2E',
        'department' => 'JTI',
        'phone_number' => '085755060296',
    ]);
    DB::table('students')->insert([
        'nim' => '2031710134',
        'name' => 'Tegar Dwi vantoro',
        'class' => 'MI-2E',
        'department' => 'JTI',
        'phone_number' => '085156850932',
    ]);
    }
>>>>>>> 0d568f69da9c15202b240aeeb9206a3c575e6100
}