<?php

namespace App\Services;

use DateTime;
use Illuminate\Support\Facades\File;

class Support
{
    public static function email()
    {

        return ['oyewodayo@gmail.com', 'solomonhillshq@gmail.com', 'temidayo@solomonhills.com', 'support@solomonhills.com'];

    }

    public static function getQuarter(DateTime $DateTime)
    {
        $y = $DateTime->format('Y');
        $m = $DateTime->format('m');
        switch ($m) {
            case $m >= 1 && $m <= 3:
                $start = '01/01/'.$y;
                $end = (new DateTime('03/1/'.$y))->modify('Last day of this month')->format('m/d/Y');
                $title = 'Q1 '.$y;
                break;
            case $m >= 4 && $m <= 6:
                $start = '04/01/'.$y;
                $end = (new DateTime('06/1/'.$y))->modify('Last day of this month')->format('m/d/Y');
                $title = 'Q2 '.$y;
                break;
            case $m >= 7 && $m <= 9:
                $start = '07/01/'.$y;
                $end = (new DateTime('09/1/'.$y))->modify('Last day of this month')->format('m/d/Y');
                $title = 'Q3 '.$y;
                break;
            case $m >= 10 && $m <= 12:
                $start = '10/01/'.$y;
                $end = (new DateTime('12/1/'.$y))->modify('Last day of this month')->format('m/d/Y');
                $title = 'Q4 '.$y;
                break;
        }

        return [
            'start' => $start,
            'end' => $end,
            'title' => $title,
            'start_nix' => strtotime($start),
            'end_nix' => strtotime($end),
        ];
    }

    public static function percentage($rate, $amount)
    {
        $percent = (($rate / 100) * $amount);

        return $percent;
    }

    public static function get_percentage($interest, $principal)
    {
        return (floatval($interest) / floatval($principal)) * 100;
    }

    public static function file_force_contents(string $fullPathWithFileName, string $fileContents)
    {

        $exploded = explode('/', $fullPathWithFileName);

        array_pop($exploded);

        $directoryPathOnly = implode('/', $exploded);

        if (! File::exists($directoryPathOnly)) {
            File::makeDirectory($directoryPathOnly, 0775, true, false);
        }
        File::append($fullPathWithFileName, $fileContents);

        // $parts = explode( '/', $fullPath );
        // array_pop( $parts );
        // $dir = implode( '/', $parts );

        // if( !is_dir( $dir ) )
        //     mkdir( $dir, 0777, true );

        // file_put_contents( $fullPath, $contents, FILE_APPEND | LOCK_EX );
    }

    public static function reference($limit = 9, $min = 0, $max = 9)
    {
        $reference = '';
        for ($i = 0; $i < $limit; $i++) {
            $reference .= mt_rand($min, $max);
        }

        return $reference;
    }
}
