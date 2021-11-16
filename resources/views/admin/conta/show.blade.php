@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.contum.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.conta.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.contum.fields.db_services') }}
                        </th>
                        <td>
                            {{ App\Models\Contum::DB_SERVICES_SELECT[$contum->db_services] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contum.fields.db_res_user') }}
                        </th>
                        <td>
                            {{ $contum->db_res_user }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contum.fields.db_res_accounts_pass') }}
                        </th>
                        <td>
                            {{ $contum->db_res_accounts_pass }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contum.fields.db_res_accounts_emails') }}
                        </th>
                        <td>
                            {{ $contum->db_res_accounts_emails->db_res_email ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contum.fields.db_res_accounts_status') }}
                        </th>
                        <td>
                            {{ App\Models\Contum::DB_RES_ACCOUNTS_STATUS_SELECT[$contum->db_res_accounts_status] ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.conta.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection