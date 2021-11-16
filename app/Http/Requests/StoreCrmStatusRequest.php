<?php

namespace App\Http\Requests;

use App\Models\CrmStatus;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreCrmStatusRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('crm_status_create');
    }

    public function rules()
    {
        return [
            'data' => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'reserva' => [
                'string',
                'required',
                'unique:crm_statuses',
            ],
            'name' => [
                'string',
                'required',
            ],
            'status' => [
                'required',
            ],
            'companhia' => [
                'required',
            ],
            'origem' => [
                'required',
            ],
            'destino' => [
                'required',
            ],
            'cc' => [
                'string',
                'required',
            ],
            'valor' => [
                'required',
            ],
        ];
    }
}
