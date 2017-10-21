<?php

namespace GG\MailerLite;

use Illuminate\Support\ServiceProvider;
use MailerLiteApi\MailerLite;

class MailerLiteServiceProvider extends ServiceProvider
{
    protected $defer = true;

    public function register()
    {
        $this->registerMailerLiter();
    }

    protected function registerMailerLite()
    {
        $this->app->bind('mailerlite', function ($app) {
            return new MailerLite($app['config']['services.mailerlite.api_key']);
        });
    }
}
