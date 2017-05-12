@extends('commonbackend::layouts.admin_app')

@section('content')
    <div id="content">
        <section class="">
            <div class="section-header">
                <h2 class="text-primary">Payment for auction {{$bidding->auction->car->title}}</h2>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-md-12">
                        @include('commonbackend::layouts._alert-response')
                    </div><!--end .col -->
                    <div class="card">
                        <div class="card-head style-primary">
                            <header>Payment amount: {{ $bidding->bid_amount }}</header>
                        </div>
                        <div class="card-body floating-label">
                            <b>Payment Via</b><br>
                            <a data-toggle="modal" data-target="#myModal" href="#!">Cash</a><br>
                            <a data-toggle="modal" data-target="#myModal2" href="#!">Bank</a><br>
                            <a href="{{ route('bidder.payment.edit', ['id' => $bidding->id]) }}">Credit cart</a>
                        </div>
                    </div>
                    <!-- Trigger the modal with a button -->

                    <!-- Modal -->
                    <div id="myModal" class="modal fade" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Cash Payment</h4>
                                </div>
                                <div class="modal-body">
                                    <p>{!! Helper::option('cash_payment') !!}</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Modal -->
                    <div id="myModal2" class="modal fade" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Bank Detail</h4>
                                </div>
                                <div class="modal-body">
                                    <p>{!! Helper::option('bank_detail') !!}</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection