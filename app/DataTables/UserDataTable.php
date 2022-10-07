<?php

namespace App\DataTables;

use App\Models\User;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class UserDataTable extends DataTable
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
            ->setRowData([
                'entry-id' => function ($data) {
                    return $data->id;
                }
            ])
            ->setRowAttr([
                'data-href' => function($data) {
                    return route('admin.users.edit', $data->id);
                }
            ]);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\User $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(User $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->parameters([
                'searchDelay' => 500,
                'language' => ['searchPlaceholder' => 'Arama', 'search' => ''],
                'buttons' => ['excel']
            ])
            ->setTableId('user-table')
            ->language(asset('admin_assets/libs/datatables/turkish.json'))
            ->setTableAttribute('class', 'table table-striped table-hover rowClick')
            ->columns($this->getColumns())
            ->pageLength(15)
            ->minifiedAjax()
            ->dom("<'row'<'col-12 col-md mb-3'f><'col-12 col-md-auto'<'.search_place_holder'>>>" .
                "<'row'<'col-sm-12'<'bg-white full-height p-3'<'table-responsive'tr>>>>" .
                "<'row my-3'<'col-12 d-flex justify-content-center align-items-center'pB>>")
            ->orderBy(1, 'asc');
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::make('name')->title('Adı'),
            Column::make('email')->title('E-posta'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'User_' . date('YmdHis');
    }
}
