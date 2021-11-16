<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Email extends Model
{
    use SoftDeletes;
    use HasFactory;

    public const DB_RES_EMAIL_PROVIDER_SELECT = [
        'provider1' => 'BOL',
        'provider2' => 'GMAIL',
        'provider3' => 'HOTMAIL',
        'provider4' => 'IG',
        'provider5' => 'OUTLOOK',
        'provider6' => 'UOL',
        'provider7' => 'YAHOO',
    ];

    public $table = 'emails';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'db_res_email_provider',
        'db_res_email',
        'db_res_email_pass',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function dbResAccountsEmailsConta()
    {
        return $this->hasMany(Contum::class, 'db_res_accounts_emails_id', 'id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
