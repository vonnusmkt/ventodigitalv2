@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.email.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.emails.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.email.fields.db_res_email_provider') }}
                        </th>
                        <td>
                            {{ App\Models\Email::DB_RES_EMAIL_PROVIDER_SELECT[$email->db_res_email_provider] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.email.fields.db_res_email') }}
                        </th>
                        <td>
                            {{ $email->db_res_email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.email.fields.db_res_email_pass') }}
                        </th>
                        <td>
                            {{ $email->db_res_email_pass }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.emails.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        {{ trans('global.relatedData') }}
    </div>
    <ul class="nav nav-tabs" role="tablist" id="relationship-tabs">
        <li class="nav-item">
            <a class="nav-link" href="#db_res_accounts_emails_conta" role="tab" data-toggle="tab">
                {{ trans('cruds.contum.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="db_res_accounts_emails_conta">
            @includeIf('admin.emails.relationships.dbResAccountsEmailsConta', ['conta' => $email->dbResAccountsEmailsConta])
        </div>
    </div>
</div>

@endsection