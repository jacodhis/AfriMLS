<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\county;

class counties extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $counties = [
            ['id'=>'1','name' => 'BOMET'],
            ['id'=>'2','name' => 'BUNGOMA'],
            ['id'=>'3','name' => 'BUSIA'],
            ['id'=>'4','name' => 'ELGEYO/MARAKWET'],
            ['id'=>'5','name' => 'EMBU'],
            ['id'=>'6','name' => 'GARISSA'],
            ['id'=>'7','name' => 'HOMA BAY'],
            ['id'=>'8','name' => 'ISIOLO'],
            ['id'=>'9','name' => 'KAJIADO'],
            ['id'=>'10','name' => 'KAKAMEGA'],
            ['id'=>'11','name' => 'KERICHO'],
            ['id'=>'12','name' => 'KIAMBU'],
            ['id'=>'13','name' => 'KILIFI'],
            ['id'=>'14','name' => 'KIRINYAGA'],
            ['id'=>'15','name' => 'KISII'],
            ['id'=>'16','name' => 'KISUMU'],
            ['id'=>'17','name' => 'KITUI'],
            ['id'=>'18','name' => 'KWALE'],
            ['id'=>'19','name' => 'LAIKIPIA'],
            ['id'=>'20','name' => 'LAMU'],
            ['id'=>'21','name' => 'MACHAKOS'],
            ['id'=>'22','name' => 'MAKUENI'],
            ['id'=>'23','name' => 'MANDERA'],
            ['id'=>'24','name' => 'MARSABIT'],
            ['id'=>'25','name' => 'MERU'],
            ['id'=>'26','name' => 'MIGORI'],
            ['id'=>'27','name' => 'MOMBASA'],
            ['id'=>'28','name' => 'MURANGA'],
            ['id'=>'29','name' => 'NAIROBI'],
            ['id'=>'30','name' => 'NAKURU'],
            ['id'=>'31','name' => 'NANDI'],
            ['id'=>'32','name' => 'NAROK'],
            ['id'=>'33','name' => 'NYAMIRA'],
            ['id'=>'34','name' => 'NYANDARUA'],
            ['id'=>'35','name' => 'NYERI'],
            ['id'=>'36','name' => 'SAMBURU'],
            ['id'=>'37','name' => 'SIAYA'],
            ['id'=>'38','name' => 'TAITA TAVETA'],
            ['id'=>'39','name' => 'TANA RIVER'],
            ['id'=>'40','name' => 'THARAKA - NITHI'],
            ['id'=>'41','name' => 'TRANS NZOIA'],
            ['id'=>'42','name' => 'TURKANA'],
            ['id'=>'43','name' => 'UASIN GISHU'],
            ['id'=>'44','name' => 'VIHIGA'],
            ['id'=>'45','name' => 'WAJIR'],
            ['id'=>'46','name' => 'WEST POKOT'],
            ['id'=>'47','name' => 'BARINGO'],
];
        foreach ($counties as $county) {
          County::create($county);
        }
    }
}
