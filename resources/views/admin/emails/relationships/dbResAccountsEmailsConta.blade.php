<div class="m-3">
    @can('contum_create')
        <div style="margin-bottom: 10px;" class="row">
            <div class="col-lg-12">
                <a class="btn btn-success" href="{{ route('admin.conta.create') }}">
                    {{ trans('global.add') }} {{ trans('cruds.contum.title_singular') }}
                </a>
            </div>
        </div>
    @endcan
    <div class="card">
        <div class="card-header">
            {{ trans('cruds.contum.title_singular') }} {{ trans('global.list') }}
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class=" table table-bordered table-striped table-hover datatable datatable-dbResAccountsEmailsConta">
                    <thead>
                        <tr>
                            <th width="10">

                            </th>
                            <th>
                                {{ trans('cruds.contum.fields.db_services') }}
                            </th>
                            <th>
                                {{ trans('cruds.contum.fields.db_res_user') }}
                            </th>
                            <th>
                                {{ trans('cruds.contum.fields.db_res_accounts_pass') }}
                            </th>
                            <th>
                                {{ trans('cruds.contum.fields.db_res_accounts_emails') }}
                            </th>
                            <th>
                                {{ trans('cruds.email.fields.db_res_email_provider') }}
                            </th>
                            <th>
                                {{ trans('cruds.contum.fields.db_res_accounts_status') }}
                            </th>
                            <th>
                                &nbsp;
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($conta as $key => $contum)
                            <tr data-entry-id="{{ $contum->id }}">
                                <td>

                                </td>
                                <td>
                                    {{ App\Models\Contum::DB_SERVICES_SELECT[$contum->db_services] ?? '' }}
                                </td>
                                <td>
                                    {{ $contum->db_res_user ?? '' }}
                                </td>
                                <td>
                                    {{ $contum->db_res_accounts_pass ?? '' }}
                                </td>
                                <td>
                                    {{ $contum->db_res_accounts_emails->db_res_email ?? '' }}
                                </td>
                                <td>
                                    @if($contum->db_res_accounts_emails)
                                        {{ $contum->db_res_accounts_emails::DB_RES_EMAIL_PROVIDER_SELECT[$contum->db_res_accounts_emails->db_res_email_provider] ?? '' }}
                                    @endif
                                </td>
                                <td>
                                    {{ App\Models\Contum::DB_RES_ACCOUNTS_STATUS_SELECT[$contum->db_res_accounts_status] ?? '' }}
                                </td>
                                <td>
                                    @can('contum_show')
                                        <a class="btn btn-xs btn-primary" href="{{ route('admin.conta.show', $contum->id) }}">
                                            {{ trans('global.view') }}
                                        </a>
                                    @endcan

                                    @can('contum_edit')
                                        <a class="btn btn-xs btn-info" href="{{ route('admin.conta.edit', $contum->id) }}">
                                            {{ trans('global.edit') }}
                                        </a>
                                    @endcan

                                    @can('contum_delete')
                                        <form action="{{ route('admin.conta.destroy', $contum->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                        </form>
                                    @endcan

                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('contum_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.conta.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-dbResAccountsEmailsConta:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection