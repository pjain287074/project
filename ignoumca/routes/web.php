<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

Route::get('/milksurvey', function () {
   return view('milksurveyform/index');
});
 
Route::get('/milk-survey-overview', function () {
   $data = [
       'no' => [
           "heading" => 'Total No. Milk Surveys',
           "datasets" => '16, 19, 50, 10,5,100',
           "labels" =>  'Mother Dairy, Ananda, Amul, Param , Other',
           "chartType" => 'bar'
       ],
       'mode' => [
           "heading" => 'Mode of Buying',
           "datasets" => '32, 63, 5, 0,0,100',
           "labels" =>  'Super Market, Retail Store, Online',
           "chartType" => 'bar'
       ],
       'cosumption' => [
           "heading" => 'Frequency of Milk Consumption',
           "datasets" => '76, 24, 0, 0,0',
           "labels" =>  'Daily, 2-3 days, 1-2 weeks, Monthly, Never ',
           "chartType" => 'pie'
       ],
       'rating' => [
           "heading" => 'Quality Rating',
           "datasets" => '26, 14, 10, 35,15',
           "labels" =>  '1 star , 2 star,3 star, 4 star, 5 star ',
           "chartType" => 'pie'
       ],
      
      
   ];
   return view('chart/index',['data'=>$data]);
});
 


