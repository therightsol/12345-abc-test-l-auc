@extends('commonbackend::layouts.admin_app')

@section('content')
    <div id="content">
        <section class="">
            <div class="section-header">
                <h2 class="text-primary">General Settings</h2>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-md-12">
                        @include('commonbackend::layouts._alert-response')
                    </div><!--end .col -->
                    <div class="col-lg-8 col-lg-offset-2">
                        {!! Form::open(['route' => 'admin.settings.save', 'method'=>'post', 'class' => '']) !!}

                        @include('generalsettings::_form', [
                        'buttonText' => 'Update',
                        'title' => 'General Settings',
                        ])
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
