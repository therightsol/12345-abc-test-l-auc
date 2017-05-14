@extends('commonbackend::layouts.admin_app')

@section('content')
    <div id="content">
        <section class="">
            <div class="section-header">
                <h2 class="text-primary">Payment for auction {{$bidding->auction->car->title}}</h2>
            </div>
            <div class="section-body">
                <div class="row">
                    @if(session()->has('alert-success'))
                        {{ session('alert-success') }}
                        @else
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                    <div class="card">
                        <div class="card-head style-primary">
                            <header>Payment amount: {{ $bidding->bid_amount }}</header>
                        </div>
                        <div class="card-body floating-label">

                            {!! Form::open(['route' => [Helper::route('update'), $bidding->id], 'data-parsley-validate', 'id' => 'payment-form', 'class' => 'form']) !!}
                            <input name="_method" type="hidden" value="PUT">
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group" id="cc-group">
                                        {!! Form::text(null, null, [
                                   'class'                         => 'form-control',
                                   'required'                      => 'required',
                                   'data-stripe'                   => 'number',
                                   'data-parsley-type'             => 'number',
                                   'maxlength'                     => '16',
                                   'data-parsley-trigger'          => 'change focusout',
                                   'data-parsley-class-handler'    => '#cc-group'
                                   ]) !!}
                                        {{ Form::label('', 'Credit card number:') }}

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group" id="ccv-group">
                                        {!! Form::text(null, null, [
                                    'class'                         => 'form-control',
                                    'required'                      => 'required',
                                    'data-stripe'                   => 'cvc',
                                    'data-parsley-type'             => 'number',
                                    'data-parsley-trigger'          => 'change focusout',
                                    'maxlength'                     => '4',
                                    'data-parsley-class-handler'    => '#ccv-group'
                                    ]) !!}
                                        {{ Form::label('', 'Card Validation Code (3 or 4 digit number)') }}

                                    </div>
                                </div>
                            </div>


                            <div class="row" id="">
                                <div class="col-md-6">
                                    <div class="form-group" id="exp-m-group">
                                        {{ Form::label('', 'Expiry Month') }}
                                        {!! Form::selectMonth(null, null, [
                                    'class'                 => 'form-control select2-list',
                                    'required'              => 'required',
                                    'data-stripe'           => 'exp-month'
                                ], '%m') !!}

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group" id="exp-y-group">
                                        {{ Form::label('', 'Expiry Year') }}
                                        {!! Form::selectYear(null, date('Y'), date('Y') + 10, null, [
                                    'class'             => 'form-control select2-list',
                                    'placeholder'       => 'Ex. Year',
                                    'required'          => 'required',
                                    'data-stripe'       => 'exp-year'
                                    ]) !!}

                                    </div>
                                </div>
                            </div>

                            <div class="select-wrapper clearfix">
                                <div class="col-md-12">
                                    {!! Form::submit('Pay!', ['class' => 'btn btn-primary btn-order', 'id' => 'submitBtn', 'style' => 'margin-bottom: 10px;']) !!}
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="payment-errors" style="color: red;margin-top:10px;"></div>
                            </div>


                            {!! Form::close() !!}
                        </div>
                    </div>

                        @endif
                </div>
            </div>
        </section>
    </div>
@endsection

@section('js')
    <script>
        window.ParsleyConfig = {
            errorsWrapper: '<div></div>',
            errorTemplate: '<div class="alert alert-danger parsley" role="alert"></div>',
            errorClass: 'has-error',
            successClass: 'has-success'
        };
    </script>
    {{--<script src="http://parsleyjs.org/dist/parsley.js"></script>--}}

    <!-- Inlude Stripe.js -->
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script>
        // This identifies your website in the createToken call below
        Stripe.setPublishableKey('{!! env('STRIPE_PUBLISABLE') !!}');

        jQuery(function ($) {
            $('#payment-form').submit(function (event) {
                var $form = $(this);

//                // Before passing data to Stripe, trigger Parsley Client side validation
//                $form.parsley().subscribe('parsley:form:validate', function (formInstance) {
//                    formInstance.submitEvent.preventDefault();
//                    return false;
//                });

                // Disable the submit button to prevent repeated clicks
                $form.find('#submitBtn').prop('disabled', true);
                $form.css('cursor', 'wait');

                Stripe.card.createToken($form, stripeResponseHandler);

                // Prevent the form from submitting with the default action
                return false;
            });
        });

        function stripeResponseHandler(status, response) {
            var $form = $('#payment-form');

            if (response.error) {
                // Show the errors on the form
                $form.find('.payment-errors').text(response.error.message);
                $form.find('.payment-errors').addClass('alert alert-danger');
                $form.find('#submitBtn').prop('disabled', false);
                $form.css('cursor', 'auto');

                $('#submitBtn').button('reset');
            } else {
                // response contains id and card, which contains additional card details
                var token = response.id;
                // Insert the token into the form so it gets submitted to the server
                $form.append($('<input type="hidden" name="stripeToken" />').val(token));
                // and submit
                $form.get(0).submit();
            }
        }
        ;
    </script>

@endsection