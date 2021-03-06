@section('js')
    <script src="{{ asset('js/admin/checkboxes-permissions.js') }}"></script>
@stop

{!! BootForm::hidden('id') !!}

@include('core::admin._buttons-form')

<div class="row">

    <div class="col-sm-6">
        {!! BootForm::text(trans('validation.attributes.name'), 'name') !!}
    </div>

</div>

<label>@lang('groups::global.Group permissions')</label>
@include('core::admin._permissions-form')
