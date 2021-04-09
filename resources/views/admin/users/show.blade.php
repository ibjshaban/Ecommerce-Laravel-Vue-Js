@extends('admin.index')
@section('content')


    <div class="box">
        <div class="box-header">
            <h3 class="box-title">{{ trans('admin.showData') }}</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body box-profile">
            @if(!empty($user->avatar))
                <img class="profile-user-img img-responsive img-circle" src="{{ Storage::url($user->avatar) }}"
                     alt="User profile picture">
            @endif

            <h3 class="profile-username">{{ user()->user()->name }}</h3>


        </div>


        <div class="box-body">
            {!! Form::open() !!}
            <div class="form-group">
                {!! Form::label('name',trans('admin.name')) !!}
                {!! Form::label('name',$user->name,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('email',trans('admin.email')) !!}
                {!! Form::label('email',$user->email,['class'=>'form-control']) !!}
            </div>
            <a href="{{ route('users.edit',$user->id) }}" class="btn btn-primary">{{ trans('admin.updateData') }}</a>
            {!! Form::close() !!}
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->



@endsection
