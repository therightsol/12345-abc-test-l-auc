@extends('commonbackend::layouts.admin_app')
@section('style')
    <link href="{{Module::asset('commonbackend:admin_assets/bootstrap3-editable/css/bootstrap-editable.css')}}" rel="stylesheet">

    @endsection
@section('content')
    <div id="content">
        <section class="">
            <div class="section-header">
                <h2 class="text-primary">Add Car</h2>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-md-12">
                        @include('commonbackend::layouts._alert-response')
                    </div><!--end .col -->
                    <div class="col-lg-10 col-lg-offset-1">
                        {!! Form::open(['route' => Helper::route('store'), 'method'=>'post', 'class' => 'form']) !!}

                        @include('cars::_form', [
                        'buttonText' => 'Submit',
                        'title' => 'Add Car',
                        ])
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('js')
    <script src="{{ Module::asset('commonbackend:admin_assets/js/libs/bootstrap-datepicker/bootstrap-datepicker.js') }}"></script>

    <script>
        var spinner = $('.spinnerLoader');
        $('.date').datepicker({
            todayHighlight: true,
            format : 'dd/mm/yyyy'
        });

            $('select[name=company_id]').change(function () {
                var val = $(this).val();
                if(!val){
                    render_options([]);
                    return;
                }
                $.ajax( {
                    url: "{{ route('admin.getModels') }}",
                    type: 'POST',
                    data: { 'id': val },
                    success: function ( data ) {
                        $('select[name=model]').find('option')
                                .remove()
                                .end()
                                .append(render_options(data, null));

                    },
                    beforeSend: function () {
                        spinner.css('display', 'flex')
                    },
                    complete: function () {
                        spinner.hide();
                    }
                }  );
            });

        function render_options ( arr , model_id ) {
            var strOptions,selected;
            if ( arr.length < 1 ) {
                strOptions = "<option value=''>No Model Found</option>"
                return strOptions;
            }
            strOptions = '<option value="">Select Model</option>';

            $.each( arr, function ( i, returnedData ) {

                (arr[ i ][ 'id' ] === model_id) ? selected = 'selected' : selected = false;
                strOptions += '<option '+ selected +' value="' + arr[ i ][ 'id' ] + '">' + arr[ i ][ 'model_name' ] + '</option>';
            } );

            return strOptions;
        }
    </script>




@endsection