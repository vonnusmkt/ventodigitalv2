@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.cc.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.ccs.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.cc.fields.db_cc') }}
                        </th>
                        <td>
                            {{ $cc->db_cc }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.cc.fields.db_exp') }}
                        </th>
                        <td>
                            {{ $cc->db_exp }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.cc.fields.db_cvv') }}
                        </th>
                        <td>
                            {{ $cc->db_cvv }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.cc.fields.db_band') }}
                        </th>
                        <td>
                            {{ App\Models\Cc::DB_BAND_SELECT[$cc->db_band] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.cc.fields.db_tipo') }}
                        </th>
                        <td>
                            {{ App\Models\Cc::DB_TIPO_SELECT[$cc->db_tipo] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.cc.fields.db_bank') }}
                        </th>
                        <td>
                            {{ App\Models\Cc::DB_BANK_SELECT[$cc->db_bank] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.cc.fields.db_tested') }}
                        </th>
                        <td>
                            {{ App\Models\Cc::DB_TESTED_SELECT[$cc->db_tested] ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.ccs.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection