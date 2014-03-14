<?php
namespace App\Models;

use Eloquent;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Admin extends \Cartalyst\Sentry\Users\Eloquent\User implements UserInterface, RemindableInterface {

    protected $table = 'admins';

    protected $guarded = array(
    );

    protected $fillable = array(
    );

    public static $rules = array(
    );

    /**
     * sentry methods
     */
    public function groups(){ return $this->belongsToMany('Cartalyst\Sentry\Groups\Eloquent\Group', 'admins_groups'); }
    public function getAuthIdentifier(){ return $this->getKey(); }
    public function getAuthPassword(){ return $this->password; }
    public function getReminderEmail(){ return $this->email; }

}