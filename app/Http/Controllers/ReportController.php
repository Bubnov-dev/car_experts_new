<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\File;
use App\Models\Report;
use App\Models\TyreBrand;
use App\Services\Service;
use Barryvdh\DomPDF\Facade\Pdf;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Google\Cloud\Translate\V2\TranslateClient;
use Illuminate\Support\Facades\Validator;

class ReportController extends Controller
{
    public function create(Request $request)
    {
        $data = $request->all();
        $try = true;


        while ($try) {
            $pseudoId = $this->quickRandom();
            if (Report::where('pseudo_id', $pseudoId)->count() == 0) {
                $try = false;
            }
        }
        $report = Report::create([
            'master_name' => $data['master']['name'],
            'master_lastname' => $data['master']['lastname'],
            'master_lang' => 'en',

            'colored' => [],
            'photo_external_damage' => [],
            'photo_internal_damage' => [],
            'photo_external' => [],
            'photo_internal' => [],
            'equipment' => [],
            'pseudo_id' => $pseudoId,
        ]);
        $report = Report::create([
            'master_name' => $data['master']['name'],
            'master_lastname' => $data['master']['lastname'],
            'master_lang' => 'ru',

            'colored' => [],
            'photo_external_damage' => [],
            'photo_internal_damage' => [],
            'photo_external' => [],
            'photo_internal' => [],
            'equipment' => [],
            'pseudo_id' => $pseudoId,
        ]);

        $report->master_lang = $data['master']['lang'];
        return response()->json($report);
    }

    public function update(Request $request)
    {
        $data = $request->all();

        $report = Report::where('status', 'new')->where('pseudo_id', $request->input('id'))->where('master_lang',  $data['master']['lang'])->update([
            'vin' => $data['vin'],
            'brand' => $data['brand'],
            'model' => $data['model'],
            'year' => $data['year'],
            'body' => $data['body'],
            'crashes' => $data['crashes'],
            'body_color' => $data['body_color'],
            'engine_volume' => $data['engine_volume'],
            'engine_power' => $data['engine_power'],
            'drive' => $data['drive'],
            'specification' => $data['specification'],
            'guarantee_check' => $data['guarantee_check'],
            'guarantee_year' => $data['guarantee']['year'],
            'guarantee_month' => $data['guarantee']['month'],
            'tyre_manufacturer' => $data['tyre']['manufacturer'],
            'tyre_year' => $data['tyre']['year'],
            'tyre_photo' => $data['tyre']['photo'],
            'colored' => $data['colored'],
            'photo_external_damage' => $data['photo_external_damage'],
            'photo_internal_damage' => $data['photo_internal_damage'],
            'photo_external' => $data['photo_external'],
            'photo_internal' => $data['photo_internal'],
            'functions_check' => $data['functions_check'],
            'functions_problems' => $data['functions_problems'],
            'equipment' => $data['equipment'],
            'comment' => $data['comment'],
            'computer_diag' => $data['computer_diag'],
            'video' => $data['video'],
            'price_value' => $data['price']['value'],
            'price_currency' => $data['price']['currency'],
            'mileage' => $data['mileage'],
            'gearbox' => $data['gearbox'],
            'photo_vin' => $data['photo_vin']['photo'],
            'photo_tech_info' => $data['photo_tech_info']['photo']
        ]);


        return response()->json($report);
    }

    public function save(Request $request){


        $data = $request->all();

        $report = Report::where('status', 'new')->where('pseudo_id', $request->input('id'))->where('master_lang', $data['master']['lang'])->update([
            'vin' => $data['vin'],
            'brand' => $data['brand'],
            'model' => $data['model'],
            'year' => $data['year'],
            'crashes' => $data['crashes'],
            'body' => $data['body'],
            'body_color' => $data['body_color'],
            'engine_volume' => $data['engine_volume'],
            'engine_power' => $data['engine_power'],
            'drive' => $data['drive'],
            'specification' => $data['specification'],
            'guarantee_check' => $data['guarantee_check'],
            'guarantee_year' => $data['guarantee']['year'],
            'guarantee_month' => $data['guarantee']['month'],
            'tyre_manufacturer' => $data['tyre']['manufacturer'],
            'tyre_year' => $data['tyre']['year'],
            'tyre_photo' => $data['tyre']['photo'],
            'colored' => $data['colored'],
            'photo_external_damage' => $data['photo_external_damage'],
            'photo_internal_damage' => $data['photo_internal_damage'],
            'photo_external' => $data['photo_external'],
            'photo_internal' => $data['photo_internal'],
            'functions_check' => $data['functions_check'],
            'functions_problems' => $data['functions_problems'],
            'equipment' => $data['equipment'],
            'comment' => $data['comment'],
            'computer_diag' => $data['computer_diag'],
            'video' => $data['video'],
            'price_value' => $data['price']['value'],
            'price_currency' => $data['price']['currency'],
            'mileage' => $data['mileage'],
            'gearbox' => $data['gearbox'],
            'photo_vin' => $data['photo_vin']['photo'],
            'photo_tech_info' => $data['photo_tech_info']['photo']
        ]);

//        return;
        $fieldsToTranslate = ['master_name', 'master_lastname', 'body', 'body_color', 'drive', 'specification', 'photo_external_damage', 'photo_internal_damage', 'comment',  'gearbox', 'functions_problems'];

        $report = Report::where('status', 'new')->where('pseudo_id', $request->input('id'))->where('master_lang',  $data['master']['lang'])->first();
        if ($report->master_lang == 'en') {
            $targetLang = 'ru';
            $sourceLang = 'en'; // Set the source language as English
        } else {
            $targetLang = 'en';
            $sourceLang = 'ru'; // Set the source language as Russian
        }
        $reportToUpdate = Report::where('status', 'new')->where('pseudo_id', $request->input('id'))->where('master_lang',$targetLang)->first();



        $attributesToCopy = $report->attributesToArray();
        unset($attributesToCopy['id']); // Exclude the id field
        $reportToUpdate->fill($attributesToCopy);
        foreach ($fieldsToTranslate as $field) {
            if ($report->$field){
                $reportToUpdate->setAttribute($field, $this->translate($report->$field,
                    $sourceLang,  $targetLang));
            }
        }

        $reportToUpdate->master_lang = $targetLang;

        $reportToUpdate->save();

        // Return the translated report
        return $report;
    }

    public function saveCheck(Request $request){
        $this->save($request);
        return response()->json(Report::where('pseudo_id', $request->id)->update(['status' => 'checking']));
    }

    public function get(Request $request)
    {
        $report = Report::where('status', 'new')->where('pseudo_id', $request->input('id'))->where('master_lang',
            $request->input('lang'))
            ->firstOrFail();


        foreach (['photo_external_damage', 'photo_internal_damage', 'photo_external', 'photo_internal'] as $photoType) {
            $photos = $report->{$photoType};
            $numPhotos = count($photos);

            for ($i = 0; $i < $numPhotos; $i++) {
                $photos[$i]['preview'] = Service::getFullPath($photos[$i]['photo']);
            }

            $report->{$photoType} = $photos;
        }

        $report->tyre_preview = Service::getFullPath($report->tyre_photo);
        $report->photo_vin = ['photo' => $report->photo_vin, 'preview' => Service::getFullPath
        ($report->photo_vin)];
        $report->photo_tech_info = ['photo' => $report->photo_tech_info, 'preview' => Service::getFullPath
        ($report->photo_tech_info)];

        return response()->json($report);
    }

    public function getReport(Request $request)
    {
        $report = Report::where('pseudo_id', $request->id)->where('master_lang',
            $request->lang)
            ->firstOrFail();

        $brand = Brand::where('name', $report->brand)->first();
        if ($brand) {
            $report->brand_image = $brand->image;
        }
        $tyreBrand = TyreBrand::where('name', $report->tyre_manufacturer)->first();
        if ($tyreBrand) {
            $report->tyre_brand_image = $tyreBrand->image;
        }


        foreach (['photo_external_damage', 'photo_internal_damage', 'photo_external', 'photo_internal'] as $photoType) {
            $photos = $report->{$photoType};
            $numPhotos = count($photos);

            for ($i = 0; $i < $numPhotos; $i++) {
                $photos[$i]['preview'] = Service::getFullPath($photos[$i]['photo']);
            }

            $report->{$photoType} = $photos;
        }

        $report->tyre_preview = Service::getFullPath($report->tyre_photo);

        $report->photo_vin = Service::getFullPath($report->photo_vin);
        $report->photo_tech_info = Service::getFullPath($report->photo_tech_info);
        $report->video = Service::getFullPath($report->video);

        if ($request->lang == 'ru'){
            return view('car', ['report' => $report]);
        }
        else {
            return view('car_en', ['report' => $report]);

        }

    }

    public function getReportPdf(Request $request)
    {
        Log::info('start pdf function');
        $report = Report::where('pseudo_id', $request->id)->where('master_lang',
            $request->lang)
            ->firstOrFail();

        $brand = Brand::where('name', $report->brand)->first();
        if ($brand) {
            $report->brand_image = $brand->image;
        }
        $tyreBrand = TyreBrand::where('name', $report->tyre_manufacturer)->first();
        if ($tyreBrand) {
            $report->tyre_brand_image = $tyreBrand->image;
        }


        foreach (['photo_external_damage', 'photo_internal_damage', 'photo_external', 'photo_internal'] as $photoType) {
            $photos = $report->{$photoType};
            $numPhotos = count($photos);

            for ($i = 0; $i < $numPhotos; $i++) {
                $photos[$i]['preview'] = Service::getFullPath($photos[$i]['photo']);
            }

            $report->{$photoType} = $photos;
        }

        $report->tyre_preview = Service::getFullPath($report->tyre_photo);

        $report->photo_vin = Service::getFullPath($report->photo_vin);
        $report->photo_tech_info = Service::getFullPath($report->photo_tech_info);

        Log::info('report got');
        $contxt = stream_context_create([
            'ssl' => [
                'verify_peer' => FALSE,
                'verify_peer_name' => FALSE,
                'allow_self_signed' => TRUE,
            ]
        ]);

        $pdf = Pdf::setOptions(['isHTML5ParserEnabled' => true, 'isRemoteEnabled' => true]);
        $pdf->getDomPDF()->setHttpContext($contxt);
        Log::info('before loadView');

        if ($request->lang == 'ru') {
            $pdf->loadView('car_pdf', ['report' => $report]);
        }else{
            $pdf->loadView('car_pdf_en', ['report' => $report]);
        }


        $paper_size = [0.0, 0.0, 1600, 2265];
        $pdf->set_paper($paper_size);
        Log::info('before return pdf');
        return $pdf->download('Inspection report by CAR Experts - '.$report->brand . ' ' . $report->model
            .' - '.date_create($report->updated_at)->format('d-m-Y').'.pdf');
    }

    public function quickRandom($length = 10)
    {
        $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

        return substr(str_shuffle(str_repeat($pool, 5)), 0, $length);
    }

    public function translate($text, $from, $to){

        if(is_string($text)){
            $json = false;
        } else {
            $json = true;
            $text = json_encode($text, JSON_UNESCAPED_UNICODE);
        }

        $translate = new TranslateClient([
            'key' => 'AIzaSyBsQHEMJKyYdOyhdtQ3ONoAUQQ8sMeENjo'
        ]);

        $result = $translate->translate($text, [
            'source' => $from,
            'target' => $to,

        ]);
        $ret = $result['text'];

        if ($json){
            $ret = json_decode(html_entity_decode($ret));
        }
        return $ret;
    }
    public function translate2(Request $request){
        $text= $request->text;
        $to = $request->to;
        $translate = new TranslateClient([
            'key' => 'AIzaSyBsQHEMJKyYdOyhdtQ3ONoAUQQ8sMeENjo'
        ]);

        $result = $translate->translate($text, [
            'target' => $to
        ]);
        return $result['text'];
    }
}
