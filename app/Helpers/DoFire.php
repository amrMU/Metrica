<?php
namespace App\Helpers;

class DoFire 
{
 

    public static function MK_REPORT($data,$user_id,$process,$ip)
    {
        // dd($process);
        $report = new \App\Report;      
        $report->key = $data['key'];
        $report->text = $data['text'];
        $report->user_id = $user_id;
        $report->process = json_encode($process);
        $report->ip = $ip->ip;
        $report->browser = $data['browser'];
        $report->location = $ip->country_name.', '.$ip->region.', '.$ip->city;
        $report->longitude = $ip->longitude;
        $report->latitude = $ip->latitude;
        $report->hostname = @$ip->hostname;
        // dd($report);
        $report->save();
    }
}


