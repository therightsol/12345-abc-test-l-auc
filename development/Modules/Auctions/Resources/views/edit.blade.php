@extends('commonbackend::layouts.admin_app')
@section('style')
    <link href="{{Module::asset('commonbackend:admin_assets/timepicker/bootstrap-datetimepicker.min.css')}}" rel="stylesheet">

@endsection
@section('content')
    <div id="content">
        <section class="">
            <div class="section-header">
                <h2 class="text-primary">Update Auction</h2>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-md-12">
                        @include('commonbackend::layouts._alert-response')
                    </div><!--end .col -->
                    <div class="col-lg-10 col-lg-offset-1">
                        {!! Form::model($auction,['route' => [Helper::route('update'), $auction->id], 'method'=>'put', 'class' => 'form']) !!}

                        @include('auctions::_form', [
                        'buttonText' => 'Submit',
                        'title' => 'Update Auction',
                        ])
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('js')
    <script src="{{ Module::asset('commonbackend:admin_assets/timepicker/bootstrap-datetimepicker.min.js') }}"></script>

    <script>
        $('input[name=start_date]').datetimepicker({format: 'dd MM yyyy -- hh:ii:ss'});
        $('input[name=end_date]').datetimepicker({format: 'dd MM yyyy -- hh:ii:ss'});

    </script>




@endsection