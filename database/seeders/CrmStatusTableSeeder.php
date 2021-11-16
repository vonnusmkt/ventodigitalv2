<?php

namespace Database\Seeders;

use App\Models\CrmStatus;
use Illuminate\Database\Seeder;

class CrmStatusTableSeeder extends Seeder
{
    public function run()
    {
        $crmStatuses = [
            [
                'id'         => 1,
                'name'       => 'Lead',
                'created_at' => '2021-11-15 13:48:08',
                'updated_at' => '2021-11-15 13:48:08',
            ],
            [
                'id'         => 2,
                'name'       => 'Customer',
                'created_at' => '2021-11-15 13:48:08',
                'updated_at' => '2021-11-15 13:48:08',
            ],
            [
                'id'         => 3,
                'name'       => 'Partner',
                'created_at' => '2021-11-15 13:48:08',
                'updated_at' => '2021-11-15 13:48:08',
            ],
        ];

        CrmStatus::insert($crmStatuses);
    }
}
