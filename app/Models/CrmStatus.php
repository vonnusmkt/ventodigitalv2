<?php

namespace App\Models;

use \DateTimeInterface;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CrmStatus extends Model
{
    use SoftDeletes;
    use HasFactory;

    public const COMPANHIA_SELECT = [
        'companhia01' => 'AEROMEXICO',
        'companhia02' => 'LATAM',
    ];

    public const DESTINO_SELECT = [
        'destino1' => 'CIDADE DO MÉXICO (MEX)',
        'destino2' => 'HERMOSILLO (HMO)',
    ];

    public const STATUS_SELECT = [
        'status1' => 'Aprovado',
        'status2' => 'Check-In',
        'status3' => 'Voou',
        'status4' => 'Caiu',
    ];

    public const ORIGEM_SELECT = [
        'origem1' => 'GUARULHOS (GRU)',
        'origem2' => 'CIDADE DO MÉXICO (MEX)',
        'origem3' => 'HERMOSILLO (HMO)',
    ];

    public $table = 'crm_statuses';

    protected $dates = [
        'data',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'data',
        'reserva',
        'name',
        'status',
        'companhia',
        'origem',
        'destino',
        'cc',
        'valor',
        'file_bilhete_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function getDataAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setDataAttribute($value)
    {
        $this->attributes['data'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function file_bilhete()
    {
        return $this->belongsTo(CrmDocument::class, 'file_bilhete_id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
