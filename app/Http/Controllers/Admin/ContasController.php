<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyContumRequest;
use App\Http\Requests\StoreContumRequest;
use App\Http\Requests\UpdateContumRequest;
use App\Models\Contum;
use App\Models\Email;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ContasController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('contum_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $conta = Contum::with(['db_res_accounts_emails'])->get();

        return view('admin.conta.index', compact('conta'));
    }

    public function create()
    {
        abort_if(Gate::denies('contum_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $db_res_accounts_emails = Email::pluck('db_res_email', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.conta.create', compact('db_res_accounts_emails'));
    }

    public function store(StoreContumRequest $request)
    {
        $contum = Contum::create($request->all());

        return redirect()->route('admin.conta.index');
    }

    public function edit(Contum $contum)
    {
        abort_if(Gate::denies('contum_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $db_res_accounts_emails = Email::pluck('db_res_email', 'id')->prepend(trans('global.pleaseSelect'), '');

        $contum->load('db_res_accounts_emails');

        return view('admin.conta.edit', compact('db_res_accounts_emails', 'contum'));
    }

    public function update(UpdateContumRequest $request, Contum $contum)
    {
        $contum->update($request->all());

        return redirect()->route('admin.conta.index');
    }

    public function show(Contum $contum)
    {
        abort_if(Gate::denies('contum_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $contum->load('db_res_accounts_emails');

        return view('admin.conta.show', compact('contum'));
    }

    public function destroy(Contum $contum)
    {
        abort_if(Gate::denies('contum_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $contum->delete();

        return back();
    }

    public function massDestroy(MassDestroyContumRequest $request)
    {
        Contum::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
