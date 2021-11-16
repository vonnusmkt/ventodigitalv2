@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.crmStatus.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.crm-statuses.update", [$crmStatus->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="data">{{ trans('cruds.crmStatus.fields.data') }}</label>
                <input class="form-control date {{ $errors->has('data') ? 'is-invalid' : '' }}" type="text" name="data" id="data" value="{{ old('data', $crmStatus->data) }}" required>
                @if($errors->has('data'))
                    <span class="text-danger">{{ $errors->first('data') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crmStatus.fields.data_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.crmStatus.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $crmStatus->name) }}" required>
                @if($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crmStatus.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.crmStatus.fields.status') }}</label>
                <select class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" name="status" id="status" required>
                    <option value disabled {{ old('status', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\CrmStatus::STATUS_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('status', $crmStatus->status) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('status'))
                    <span class="text-danger">{{ $errors->first('status') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crmStatus.fields.status_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.crmStatus.fields.companhia') }}</label>
                <select class="form-control {{ $errors->has('companhia') ? 'is-invalid' : '' }}" name="companhia" id="companhia" required>
                    <option value disabled {{ old('companhia', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\CrmStatus::COMPANHIA_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('companhia', $crmStatus->companhia) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('companhia'))
                    <span class="text-danger">{{ $errors->first('companhia') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crmStatus.fields.companhia_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.crmStatus.fields.origem') }}</label>
                <select class="form-control {{ $errors->has('origem') ? 'is-invalid' : '' }}" name="origem" id="origem" required>
                    <option value disabled {{ old('origem', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\CrmStatus::ORIGEM_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('origem', $crmStatus->origem) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('origem'))
                    <span class="text-danger">{{ $errors->first('origem') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crmStatus.fields.origem_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.crmStatus.fields.destino') }}</label>
                <select class="form-control {{ $errors->has('destino') ? 'is-invalid' : '' }}" name="destino" id="destino" required>
                    <option value disabled {{ old('destino', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\CrmStatus::DESTINO_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('destino', $crmStatus->destino) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('destino'))
                    <span class="text-danger">{{ $errors->first('destino') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crmStatus.fields.destino_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="cc">{{ trans('cruds.crmStatus.fields.cc') }}</label>
                <input class="form-control {{ $errors->has('cc') ? 'is-invalid' : '' }}" type="text" name="cc" id="cc" value="{{ old('cc', $crmStatus->cc) }}" required>
                @if($errors->has('cc'))
                    <span class="text-danger">{{ $errors->first('cc') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crmStatus.fields.cc_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="valor">{{ trans('cruds.crmStatus.fields.valor') }}</label>
                <input class="form-control {{ $errors->has('valor') ? 'is-invalid' : '' }}" type="number" name="valor" id="valor" value="{{ old('valor', $crmStatus->valor) }}" step="0.01" required>
                @if($errors->has('valor'))
                    <span class="text-danger">{{ $errors->first('valor') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crmStatus.fields.valor_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection