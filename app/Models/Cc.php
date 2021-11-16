<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cc extends Model
{
    use SoftDeletes;
    use HasFactory;

    public const DB_TESTED_SELECT = [
        'status1' => 'APROVADO',
        'status2' => 'REPROVADO',
        'status3' => 'NAO TESTADO',
    ];

    public const DB_BAND_SELECT = [
        'band1' => 'VISA',
        'band2' => 'MASTERCARD',
        'band3' => 'ELO',
        'band4' => 'AMEX',
    ];

    public const DB_TIPO_SELECT = [
        'tipo1' => 'BLACK',
        'tipo2' => 'INFINITE',
        'tipo3' => 'PLATINUM',
        'tipo4' => 'GOLD',
    ];

    public const DB_BANK_SELECT = [
        'bank1'  => 'ASSAI',
        'bank2'  => 'AVISTA FINANCEIRA',
        'bank3'  => 'BANCO DO BRASIL',
        'bank4'  => 'BANSICRED',
        'bank5'  => 'BRADESCO',
        'bank6'  => 'CAIXA',
        'bank7'  => 'CARREFOUR',
        'bank8'  => 'ITAU',
        'bank9'  => 'NUBANK',
        'bank10' => 'PORTOSEG',
        'bank11' => 'SANTANDER',
        'bank12' => 'SICOOB',
    ];

    public $table = 'ccs';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'db_cc',
        'db_exp',
        'db_cvv',
        'db_band',
        'db_tipo',
        'db_bank',
        'db_tested',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
