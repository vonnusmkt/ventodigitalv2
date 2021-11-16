<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyCcRequest;
use App\Http\Requests\StoreCcRequest;
use App\Http\Requests\UpdateCcRequest;
use App\Models\Cc;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class CcController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('cc_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Cc::query()->select(sprintf('%s.*', (new Cc())->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate = 'cc_show';
                $editGate = 'cc_edit';
                $deleteGate = 'cc_delete';
                $crudRoutePart = 'ccs';

                return view('partials.datatablesActions', compact(
                'viewGate',
                'editGate',
                'deleteGate',
                'crudRoutePart',
                'row'
            ));
            });

            $table->editColumn('db_cc', function ($row) {
                return $row->db_cc ? $row->db_cc : '';
            });
            $table->editColumn('db_exp', function ($row) {
                return $row->db_exp ? $row->db_exp : '';
            });
            $table->editColumn('db_cvv', function ($row) {
                return $row->db_cvv ? $row->db_cvv : '';
            });
            $table->editColumn('db_band', function ($row) {
                return $row->db_band ? Cc::DB_BAND_SELECT[$row->db_band] : '';
            });
            $table->editColumn('db_tipo', function ($row) {
                return $row->db_tipo ? Cc::DB_TIPO_SELECT[$row->db_tipo] : '';
            });
            $table->editColumn('db_bank', function ($row) {
                return $row->db_bank ? Cc::DB_BANK_SELECT[$row->db_bank] : '';
            });
            $table->editColumn('db_tested', function ($row) {
                return $row->db_tested ? Cc::DB_TESTED_SELECT[$row->db_tested] : '';
            });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('admin.ccs.index');
    }

    public function create()
    {
        abort_if(Gate::denies('cc_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.ccs.create');
    }

    public function store(StoreCcRequest $request)
    {
        $cc = Cc::create($request->all());

        return redirect()->route('admin.ccs.index');
    }

    public function edit(Cc $cc)
    {
        abort_if(Gate::denies('cc_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.ccs.edit', compact('cc'));
    }

    public function update(UpdateCcRequest $request, Cc $cc)
    {
        $cc->update($request->all());

        return redirect()->route('admin.ccs.index');
    }

    public function show(Cc $cc)
    {
        abort_if(Gate::denies('cc_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.ccs.show', compact('cc'));
    }

    public function destroy(Cc $cc)
    {
        abort_if(Gate::denies('cc_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $cc->delete();

        return back();
    }

    public function massDestroy(MassDestroyCcRequest $request)
    {
        Cc::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
