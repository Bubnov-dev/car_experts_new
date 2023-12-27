<?php

namespace App\Console\Commands;

use App\Models\Report;
use App\Services\Service;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class MakeLinksForOldReports extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:make-links-for-old-reports';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {


        $reports = Report::where('created_at', '<', date_create('2023-12-10 13:55:28'))->get();
        foreach ($reports as $report) {
            if ($report->photo_dashboard) {
                $report->photo_internal = array_merge($report->photo_internal,
                    [$report->photo_dashboard]);
            }

            foreach (['photo_external_damage', 'photo_internal_damage', 'photo_external', 'photo_internal', 'tires'] as $photoType) {
                $photos = $report->{$photoType};
                if($photos) {
                    $numPhotos = count($photos);

                    foreach ($photos as $key => &$photo) {
                        $photos[$key]['photo'] = Service::getFullPath($photo['photo']);
                    }
                }

                $report->{$photoType} = $photos;
            }


            $report->tyre_photo = Service::getFullPath($report->tyre_photo);

            $report->photo_vin = Service::getFullPath($report->photo_vin);
            $report->photo_tech_info = Service::getFullPath($report->photo_tech_info);
            $report->video = Service::getFullPath($report->video);
            $report->computer_diag = Service::getFullPath($report->computer_diag);
            $report->save();
        }

    }
}
