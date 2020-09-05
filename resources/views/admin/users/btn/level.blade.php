<span class="alert
{{ $level == 'user'?'alert-info':'' }}
{{ $level == 'vendor'?'alert-primary':'' }}
{{ $level == 'company'?'alert-success':'' }}
">
{{ trans('admin.'.$level) }}
</span>
