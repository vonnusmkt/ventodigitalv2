<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contum extends Model
{
    use SoftDeletes;
    use HasFactory;

    public const DB_RES_ACCOUNTS_STATUS_SELECT = [
        'status1' => 'ATIVA',
        'status2' => 'INATIVA',
    ];

    public const DB_SERVICES_SELECT = [
        'service1' => 'AIRBNB',
        'service2' => 'FACEBOOK',
        'service3' => 'FIVERR',
        'service4' => 'INSTAGRAM',
        'service5' => 'OLX',
    ];

    public $table = 'conta';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'db_services',
        'db_res_user',
        'db_res_accounts_pass',
        'db_res_accounts_emails_id',
        'db_res_accounts_status',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function db_res_accounts_emails()
    {
        return $this->belongsTo(Email::class, 'db_res_accounts_emails_id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
