@extends('commonbackend::layouts.admin_app')
@include('media::layoutfiles.embedd')

@section('content')
    <div id="content">
        <section class="">
            <div class="section-header">
                <h2 class="text-primary">Add Car Feature</h2>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-md-12">
                        @include('commonbackend::layouts._alert-response')
                    </div><!--end .col -->
                    <div class="col-lg-6 col-lg-offset-3">
                        {!! Form::open(['route' => Helper::route('store'), 'method'=>'post', 'class' => 'form']) !!}

                        @include('features::_form', [
                        'buttonText' => 'Submit',
                        'title' => 'Add Car Feature',
                        ])
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
