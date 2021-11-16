<?php

namespace App\Http\Requests;

use App\Models\Contum;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyContumRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('contum_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:conta,id',
        ];
    }
}
