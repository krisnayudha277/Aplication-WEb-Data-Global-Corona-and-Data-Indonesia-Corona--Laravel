<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index()
{
    $response = Http::get('https://apicovid19indonesia-v2.vercel.app/api/indonesia/more');
    $responsew = Http::get('https://covid-simple.satyawikananda.tech/api/world');
    $data = $response->json();
    $dataw = $responsew->json();
    return view('/welcome',compact('data','dataw'));
}
    public function provinsi()
{
    $response2 = Http::get('https://apicovid19indonesia-v2.vercel.app/api/indonesia/provinsi/more');
    $data2 = $response2->json();
    return view('/provinsi',compact('data2'));
}
  public function detail()
{
    $response3 = Http::get('https://data.covid19.go.id/public/api/prov.json');
    $data3 = $response3->json();
    return view('/detail',compact('data3'));
}
  public function rumahsakit()
{
    $response4 = Http::get('https://dekontaminasi.com/api/id/covid19/hospitals');
    $data4 = $response4->json();
    return view('/rumahsakit',compact('data4'));
}
  public function mapsglobal()
{

    return view('/mapsglobal');
}
}
