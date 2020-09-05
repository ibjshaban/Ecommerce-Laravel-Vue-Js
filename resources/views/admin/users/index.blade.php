@extends('admin.home')
@section('content')
    <div class="box">
        <div class="box-header">
            <strong class="box-title ml-3">{{ $title }}</strong>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            {!! Form::open(['id'=>'form_data','url'=>aurl('users/destroy/all'), 'method'=>'delete']) !!}
            {!! $dataTable->table([
            'class'=>'dataTable table table-striped table-hover  table-bordered'
            ], true) !!}
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->

    <!-- Modal -->
    <div id="multipleDelete" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                    <div class="alert alert-danger">
                        <div class="empty_record d-none">
                            <h1>{{ trans('admin.please_check_some_records') }}</h1>
                        </div>
                        <div class="not_empty_record d-none">
                            <h1>{{ trans('admin.ask_delete_item') }} <span class="record_count"></span> ? </h1>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="empty_record d-none">
                    <button type="button" class="btn btn-default" data-dismiss="modal">{{ trans('admin.close') }}</button>
                    </div>
                    <div class="not_empty_record d-none">
                        <button type="button" class="btn btn-default" data-dismiss="modal">{{ trans('admin.no') }}</button>
                        <input type="submit" name="del_all" value="{{ trans('admin.yes') }}"
                           class="btn btn-danger del_all">
                    </div>
                </div>
            </div>

        </div>
    </div>
    @push('js')
        <script> delete_all() </script>
        {!! $dataTable->scripts() !!}
    @endpush
@endsection
