<?php


Route::get("/notify/sms",function (){
    echo "<br> sms from notify ;-)";
});

Route::group(["namespace"=>"Anisa\Notification\Http\Controller"],function (){

    Route::get("/aa","FirstController@get")->middleware('my:bb');



});







