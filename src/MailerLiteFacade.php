<?php

namespace GG\MailerLite;

use Illuminate\Support\Facades\Facade;

class MailerLiteFacade extends BaseFacade
{
    protected static function getFacadeAccessor()
    {
        return 'mailerlite';
    }
}
