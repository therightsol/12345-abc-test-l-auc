<div class="card">
    <div class="card-head style-primary">
        <header>{{ $title }}</header>
    </div>
    <div class="card-body floating-label">
        <div class="row">

            <div class="col-sm-6">
                <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                    {{ Form::text('title', null ,['class' => 'form-control']) }}
                    {{ Form::label('title', 'Title') }}
                    @if ($errors->has('title'))
                        <span class="help-block">
                    <strong>{{ $errors->first('title') }}</strong>
                </span>
                    @endif
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group{{ $errors->has('manufacturing_year') ? ' has-error' : '' }}">
                    {{ Form::text('manufacturing_year', null ,['class' => 'date form-control']) }}
                    {{ Form::label('manufacturing_year', 'Manufacturing Year') }}
                    @if ($errors->has('manufacturing_year'))
                        <span class="help-block">
                    <strong>{{ $errors->first('manufacturing_year') }}</strong>
                </span>
                    @endif
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group{{ $errors->has('company_id') ? ' has-error' : '' }}">
                    {{ Form::label('company_id', 'Company') }}
                    {{ Form::select('company_id', $carCompanies, isset($car)?$car->company_id->model_name:null,['class' => 'form-control','placeholder' => 'Select Company']) }}
                    @if ($errors->has('company_id'))
                        <span class="help-block">
                    <strong>{{ $errors->first('company_id') }}</strong>
                </span>
                    @endif
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group{{ $errors->has('model') ? ' has-error' : '' }}">
                    {{ Form::label('model', 'Model') }}
                    {{ Form::select('model', isset($models)?$models:[], isset($car)?$car->model->model_name:null,['class' => 'form-control','placeholder' => 'Select Model']) }}
                @if ($errors->has('model'))
                        <span class="help-block">
                    <strong>{{ $errors->first('model') }}</strong>
                </span>
                    @endif
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group{{ $errors->has('engine_type') ? ' has-error' : '' }}">
                    {{ Form::label('engine_type', 'Engine Type') }}
                    {{ Form::select('engine_type', $engine_types, isset($car)?$car->engineType->title:null,['class' => 'form-control','placeholder' => 'Select Engine Type']) }}
                    @if ($errors->has('engine_type'))
                        <span class="help-block">
                    <strong>{{ $errors->first('engine_type') }}</strong>
                </span>
                    @endif
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group{{ $errors->has('trim') ? ' has-error' : '' }}">
                    {{ Form::text('trim', null ,['class' => 'form-control']) }}
                    {{ Form::label('trim', 'Trim') }}
                    @if ($errors->has('trim'))
                        <span class="help-block">
                    <strong>{{ $errors->first('trim') }}</strong>
                </span>
                    @endif
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group{{ $errors->has('exterior_color') ? ' has-error' : '' }}">
                    {{ Form::text('exterior_color', null ,['class' => 'form-control']) }}
                    {{ Form::label('exterior_color', 'Exterior Color') }}
                    @if ($errors->has('exterior_color'))
                        <span class="help-block">
                    <strong>{{ $errors->first('exterior_color') }}</strong>
                </span>
                    @endif
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group{{ $errors->has('interior_color') ? ' has-error' : '' }}">
                    {{ Form::text('interior_color', null ,['class' => 'form-control']) }}
                    {{ Form::label('interior_color', 'Interror Color') }}
                    @if ($errors->has('interior_color'))
                        <span class="help-block">
                    <strong>{{ $errors->first('interior_color') }}</strong>
                </span>
                    @endif
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group{{ $errors->has('grade') ? ' has-error' : '' }}">
                    {{ Form::text('grade', null ,['class' => 'form-control']) }}
                    {{ Form::label('grade', 'Model Name') }}
                    @if ($errors->has('grade'))
                        <span class="help-block">
                    <strong>{{ $errors->first('grade') }}</strong>
                </span>
                    @endif
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group{{ $errors->has('engine_number') ? ' has-error' : '' }}">
                    {{ Form::text('engine_number', null ,['class' => 'form-control']) }}
                    {{ Form::label('engine_number', 'Engine Number') }}
                    @if ($errors->has('engine_number'))
                        <span class="help-block">
                    <strong>{{ $errors->first('engine_number') }}</strong>
                </span>
                    @endif
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group{{ $errors->has('chassis_number') ? ' has-error' : '' }}">
                    {{ Form::text('chassis_number', null ,['class' => 'form-control']) }}
                    {{ Form::label('chassis_number', 'Chassis Number') }}
                    @if ($errors->has('chassis_number'))
                        <span class="help-block">
                    <strong>{{ $errors->first('chassis_number') }}</strong>
                </span>
                    @endif
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group{{ $errors->has('number_plate') ? ' has-error' : '' }}">
                    {{ Form::text('number_plate', null ,['class' => 'form-control']) }}
                    {{ Form::label('number_plate', 'Number Plate') }}
                    @if ($errors->has('number_plate'))
                        <span class="help-block">
                    <strong>{{ $errors->first('number_plate') }}</strong>
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