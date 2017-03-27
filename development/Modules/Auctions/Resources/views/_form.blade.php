<div class="card">
    <div class="card-head style-primary">
        <header>{{ $title }}
            <small></small>
        </header>
    </div>
    <div class="card-body floating-label">

        @if(isset($update))
            <div class="form-group{{ $errors->has('car_id') ? ' has-error' : '' }}">
                {{ Form::label('car_id', 'Car') }}
                {{ Form::select('car_id', $cars, null,['class' => 'form-control','placeholder' => 'Select Car']) }}
                @if ($errors->has('car_id'))
                    <span class="help-block">
                    <strong>{{ $errors->first('car_id') }}</strong>
                </span>
                @endif
            </div>
        @else
            <p>
                Car Title: <b>{{ session('auction.car')->title }}</b>
            </p>
            <input type="hidden" name="car_id" value="{{ session('auction.car')->id }}">

        @endif
            <div class="form-group{{ $errors->has('car_id') ? ' has-error' : '' }}">

                <div class="form-group{{ $errors->has('bid_starting_amount') ? ' has-error' : '' }}">
                    {{ Form::text('bid_starting_amount', null ,['class' => 'form-control']) }}
                    {{ Form::label('bid_starting_amount', 'Starting Amount:') }}
                    @if ($errors->has('bid_starting_amount'))
                        <span class="help-block">
                    <strong>{{ $errors->first('bid_starting_amount') }}</strong>
                </span>
                    @endif
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group{{ $errors->has('start_date') ? ' has-error' : '' }}">
                            {{ Form::text('start_date', isset($auction)? date('d F Y', strtotime($auction->start_date)).' -- '. $auction->start_time :null ,['class' => 'form-control']) }}
                            {{ Form::label('start_date', 'Start Date:') }}
                            @if ($errors->has('start_date'))
                                <span class="help-block">
                    <strong>{{ $errors->first('start_date') }}</strong>
                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group{{ $errors->has('end_date') ? ' has-error' : '' }}">
                            {{ Form::text('end_date', isset($auction)? date('d F Y', strtotime($auction->end_date)).' -- '. $auction->end_time :null ,['class' => 'form-control']) }}
                            {{ Form::label('end_date', 'End Date:') }}
                            @if ($errors->has('end_date'))
                                <span class="help-block">
                    <strong>{{ $errors->first('end_date') }}</strong>
                </span>
                            @endif
                        </div>
                    </div>
                </div>


            </div><!--end .card-body -->
            <div class="card-actionbar">
                <div class="card-actionbar-row">
                    {{--  @if(url()->current() !== url()->previous())
                          <a href="{{ url()->previous() }}" class="btn btn-flat btn-primary ink-reaction pull-left">Go Back</a>
                      @endif--}}
                    <button type="submit" class="btn btn-flat btn-primary ink-reaction">{{ $buttonText }}</button>
                </div>
            </div>
            <div class="spinnerLoader">
                <i class="ajax-loader medium animate-spin"></i>
            </div>

    </div>