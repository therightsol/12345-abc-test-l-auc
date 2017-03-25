@extends('commonbackend::layouts.admin_app')
@section('style')
    <link href="{{Module::asset('commonbackend:admin_assets/timepicker/bootstrap-datetimepicker.min.css')}}"
          rel="stylesheet">
    <style>
        tr{
            cursor: pointer;

        }
    </style>
@endsection
@section('content')
    <div id="content">
        <section class="">
            <div class="section-header">
                <h2 class="text-primary">Add Auction</h2>
            </div>
            <div class="section-body">
                <div class="row" id="auction-wrapper">
                    <div class="col-md-12">
                        @include('commonbackend::layouts._alert-response')
                    </div><!--end .col -->
                    @if(session()->has('auction.car'))
                        @include('auctions::_auction')
                        @else
                        @include('auctions::_cars')
                        @endif
                    <div class="spinnerLoader">
                        <i class="ajax-loader medium animate-spin"></i>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
