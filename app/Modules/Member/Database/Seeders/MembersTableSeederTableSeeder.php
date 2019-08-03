<?php

namespace App\Modules\Member\Database\Seeders;

use Illuminate\Database\Seeder;
use App\Modules\Member\Models\Member;

class MembersTableSeederTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Member::unguard();
        factory(Member::class, 50)->create();
        // $this->call("OthersTableSeeder");
    }
}
