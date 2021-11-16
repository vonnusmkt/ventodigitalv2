<?php

namespace App\Http\Requests;

use App\Models\Cc;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyCcRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('cc_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:ccs,id',
        ];
    }
}
