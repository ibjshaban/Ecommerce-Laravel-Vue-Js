<?php

namespace App\DataTables;

use App\Admin;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class AdminDatatable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            //->addColumn('action', 'admindatatable.action')
            ->addColumn('edit', 'admin.admins.btn.edit')
            ->addColumn('checkbox', 'admin.admins.btn.checkbox')
            ->addColumn('delete', 'admin.admins.btn.delete')
            ->rawColumns([
                'edit',
                'delete',
                'checkbox'
            ]);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\AdminDatatable $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        return Admin::query();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->setTableId('admindatatable-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->dom('Bfrtip') // For export processes
            ->orderBy(1)
            /*->buttons(
                Button::make('create')->addClass('btn btn-primary'),
                Button::make('export'),
                Button::make('print'),
                Button::make('reset'),
                Button::make('reload'),
                Button::make('pageLength')
            )*/
            ->parameters([
                'dom' => 'Blfrtip',
                'lengthMenu' => [[10, 25, 50, 100], [10, 25, 50, trans('admin.all_record')]],
                'buttons' => [
                    [
                        'text' => '<i class="fa fa-plus"></i> ' . trans('admin.create_admin'),
                        'className' => 'btn btn-info',
                        "action" => "function(){ window.location.href = '".\URL::current()."/create';}"
                    ],
                    ['extend' => 'print', 'className' => 'btn btn-primary', 'text' => '<i class="fa fa-print"></i>'],
                    ['extend' => 'csv', 'className' => 'btn btn-info', 'text' => '<i class="fa fa-file"></i> ' . trans('admin.ex_csv')],
                    ['extend' => 'excel', 'className' => 'btn btn-success', 'text' => '<i class="fa fa-file"></i> ' . trans('admin.ex_excel')],
                    ['extend' => 'reload', 'className' => 'btn btn-default', 'text' => '<i class="fas fa-sync-alt"></i>'],
                    [
                        'text' => '<i class="fa fa-trash"></i>',
                        'className' => 'btn btn-danger delBtn',
                    ],
                ],
                'initComplete' => " function () {
		            this.api().columns([2,3,4]).every(function () {
		                var column = this;
		                var input = document.createElement(\"input\");
		                $(input).appendTo($(column.footer()).empty()).css(\"width\", \"90%\")
		                .on('keyup', function () {
		                    column.search($(this).val(), false, false, true).draw();
		                });
		            });
		        }",

                'language' => datatable_lang(),
            ]);


    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::computed('checkbox')
                ->exportable(false)
                ->printable(false)
                ->name('checkbox')
                ->data('checkbox')
                ->title('<input type="checkbox" class="check_all" onclick="check_all()"/>'),
            Column::make('id')->title('#'),
            Column::make('name')->title(trans('admin.name')),
            Column::make('email')->title(trans('admin.email')),
            Column::make('created_at')->title(trans('admin.created_at')),
            Column::make('updated_at')->title(trans('admin.updated_at')),
            Column::computed('edit')
                ->exportable(false)
                ->printable(false)
                ->width(60)
                ->name('edit')
                ->data('edit')
                ->title(trans('admin.edit'))
                ->addClass('text-center'),
            Column::computed('delete')
                ->exportable(false)
                ->printable(false)
                ->width(60)
                ->name('delete')
                ->data('delete')
                ->title(trans('admin.delete'))
                ->addClass('text-center'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Admin_' . date('YmdHis');
    }
}
