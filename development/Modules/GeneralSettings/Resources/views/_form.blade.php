<div class="card">

    <div class="card-head style-primary">
        <header>{{ $title }}</header>
        <?php
            if(!empty($settings)) $settings = $settings->pluck('value', 'key');
            ?>
    </div>
    <div class="card-body form-horizontal">
        <div class="row">
            <div class="col-xs-12">
                <div class="form-group {{ $errors->has('logo') ? ' has-error' : '' }}">
                    {{ Form::label('logo', 'Logo:', ['class' => 'control-label col-sm-4']) }}
                    <div class="col-sm-6">
                        @yield('insert-image-code')
                    </div>
                </div>
                <div class="form-group{{ $errors->has('max_allowed_bits') ? ' has-error' : '' }}">
                    {{ Form::label('max_allowed_bits', 'Max Allowed Bits:', ['class' => 'control-label col-sm-4']) }}
                    <div class="col-sm-8">
                        {{ Form::text('max_allowed_bits', isset($settings['max_allowed_bits'])? $settings['max_allowed_bits']: null,['class' => 'form-control']) }}

                    @if ($errors->has('max_allowed_bits'))
                            <span class="help-block">
                    <strong>{{ $errors->first('max_allowed_bits') }}</strong>
                </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('max_allowed_days') ? ' has-error' : '' }}">
                    {{ Form::label('max_allowed_days', 'Max Allowed Days:', ['class' => 'control-label col-sm-4']) }}
                    <div class="col-sm-8">
                        {{ Form::text('max_allowed_days', isset($settings['max_allowed_days'])? $settings['max_allowed_days']: null ,['class' => 'form-control']) }}

                    @if ($errors->has('max_allowed_days'))
                            <span class="help-block">
                    <strong>{{ $errors->first('max_allowed_days') }}</strong>
                </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('currency') ? ' has-error' : '' }}">
                    {{ Form::label('currency', 'Currency:', ['class' => 'control-label col-sm-4']) }}
                    <div class="col-sm-8">
                        {{ Form::text('currency', isset($settings['currency'])? $settings['currency']: null ,['class' => 'form-control']) }}

                    @if ($errors->has('currency'))
                            <span class="help-block">
                    <strong>{{ $errors->first('currency') }}</strong>
                </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('currency_symbol') ? ' has-error' : '' }}">
                    {{ Form::label('currency_symbol', 'Currency Symbol:', ['class' => 'control-label col-sm-4']) }}
                    <div class="col-sm-8">
                        {{ Form::text('currency_symbol', isset($settings['currency_symbol'])? $settings['currency_symbol']: null ,['class' => 'form-control']) }}

                    @if ($errors->has('currency_symbol'))
                            <span class="help-block">
                    <strong>{{ $errors->first('currency_symbol') }}</strong>
                </span>
                        @endif
                    </div>
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