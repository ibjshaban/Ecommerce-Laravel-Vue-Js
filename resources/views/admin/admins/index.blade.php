@extends('admin.home')
@section('content')
    <div class="box">
        <div class="box-header">
            <strong class="box-title ml-3">{{ $title }}</strong>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            {!! $dataTable->table([
            'class'=>'dataTable table table-striped table-hover  table-bordered'
            ]) !!}
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
    @push('js')
        {!! $dataTable->scripts() !!}
    @endpush
@endsection
