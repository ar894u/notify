<?php


namespace Anisa\Notification;


use Anisa\Notification\Http\Middleware\MyMiddleware;
use Illuminate\Support\ServiceProvider;

class AnisaNotificationServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->bind("one",function (){
            return new One();
        });

//        $this->mergeConfigFrom(__DIR__.'/config/anisanotify.php','notify');
//        app("one");
    }

    public function boot()
    {
//        dd(__DIR__."\\route\\route.php");
        require  __DIR__."\\route\\route.php";

//        $this->loadViewsFrom(__DIR__.'/View',"notify");

        $this->app['router']->aliasMiddleware('my',MyMiddleware::class);

//        dd($this->app['router']);

        $this->publishes([
            __DIR__.'/Config/anisanotify.php'=>config_path('notify.php'),
            __DIR__."/View"=>base_path("resources/views/notification"),
            __DIR__."/migrations"=>database_path("/migrations"),
        ]);

//        $this->publishes([
//            __DIR__.'/Config/anisanotify.php'=>config_path('notify.php'),
//        ],"config");
//
//        $this->publishes([
//            __DIR__."/View"=>base_path("resources/views/notification"),
//        ],"view");

    }

}
