@extends('commonbackend::layouts.admin_app')

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
                    <div class="col-lg-6 col-lg-offset-3">
                        {!! Form::model($auction,['route' => [Helper::route('update'), $auction->id], 'method'=>'put', 'class' => 'form']) !!}

                        @include('auctions::_form', [
                        'buttonText' => 'Submit',
                        'title' => 'Update Auction',
                        'update' => true
                        ])
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection