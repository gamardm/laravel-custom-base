<?php
namespace Lib\SentryMods;

use Illuminate\Support\Facades\Facade;

class SentryAdmin extends Facade {
    protected static function getFacadeAccessor(){ return 'sentry.admin'; }
}