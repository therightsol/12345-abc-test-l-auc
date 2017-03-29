<div class="card">
    <div class="card-head style-primary">
        <header>{{ $title }}</header>
    </div>
    <div class="card-body floating-label">
        <div class="form-group{{ $errors->has('bid_amount') ? ' has-error' : '' }}">

            {{ Form::select('auction_id', [], null,['class' => 'js-data-example-ajax form-control', 'placeholder' => 'Select Auction']) }}

        </div>

        <div class="form-group{{ $errors->has('bid_amount') ? ' has-error' : '' }}">
            {{ Form::text('bid_amount', null ,['class' => 'form-control']) }}
            {{ Form::label('bid_amount', 'Model Name:') }}
            @if ($errors->has('bid_amount'))
                <span class="help-block">
                    <strong>{{ $errors->first('bid_amount') }}</strong>
                </span>
            @endif
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