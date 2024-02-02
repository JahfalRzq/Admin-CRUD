<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $events = [
            [
                'event'         => 'test event 1',
                'icon'          => 'images/icon/birthday-cake--v1.png',
                'detail_event'  => 'test event 1',
                'date'          => '2023-01-01',
                'start_time'    => '10:00:00',
                'end_time'      => '12:00:00',
            ],
            [
                'event'         => 'test event 2',
                'icon'          => 'images/icon/confetti.png',
                'detail_event'  => 'test event 2',
                'date'          => '2023-02-02',
                'start_time'    => '13:00:00',
                'end_time'      => '15:00:00',
            ],
            [
                'event'         => 'test event 3',
                'icon'          => 'images/icon/3985163.png',
                'detail_event'  => 'test event 3',
                'date'          => '2023-02-04',
                'start_time'    => '15:00:00',
                'end_time'      => '18:00:00',
            ],
            [
                'event'         => 'test event 4',
                'icon'          => 'images/icon/pray.png',
                'detail_event'  => 'test event 4',
                'date'          => '2023-02-06',
                'start_time'    => '08:00:00',
                'end_time'      => '10:00:00',
            ],
        ];
        DB::table('events')->insert($events);
    }
}
