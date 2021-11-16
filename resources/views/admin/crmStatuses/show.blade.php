@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.crmStatus.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.crm-statuses.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.crmStatus.fields.data') }}
                        </th>
                        <td>
                            {{ $crmStatus->data }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crmStatus.fields.reserva') }}
                        </th>
                        <td>
                            {{ $crmStatus->reserva }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crmStatus.fields.name') }}
                        </th>
                        <td>
                            {{ $crmStatus->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crmStatus.fields.status') }}
                        </th>
                        <td>
                            {{ App\Models\CrmStatus::STATUS_SELECT[$crmStatus->status] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crmStatus.fields.companhia') }}
                        </th>
                        <td>
                            {{ App\Models\CrmStatus::COMPANHIA_SELECT[$crmStatus->companhia] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crmStatus.fields.origem') }}
                        </th>
                        <td>
                            {{ App\Models\CrmStatus::ORIGEM_SELECT[$crmStatus->origem] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crmStatus.fields.destino') }}
                        </th>
                        <td>
                            {{ App\Models\CrmStatus::DESTINO_SELECT[$crmStatus->destino] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crmStatus.fields.cc') }}
                        </th>
                        <td>
                            {{ $crmStatus->cc }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crmStatus.fields.valor') }}
                        </th>
                        <td>
                            {{ $crmStatus->valor }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crmStatus.fields.file_bilhete') }}
                        </th>
                        <td>
                            {{ $crmStatus->file_bilhete->description ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.crm-statuses.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection