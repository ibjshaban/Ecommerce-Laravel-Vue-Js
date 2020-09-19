@extends('style.index')
@section('content')
    <div class="maincontent-area">
        <div class="zigzag-bottom">
            <div class="container">
                <div class="row"></div>
                {!! setting()->message_maintenance !!}
            </div>
        </div>
    </div>
@endsection
