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
                    {{ Form::label('grade', 'Grade') }}
                    {{ Form::select('grade', ['A' => 'A', 'B' => 'B', 'C' => 'C', 'D' => 'D'], isset($car)?$car->grade:null,['class' => 'form-control','placeholder' => 'Select Car Grad']) }}

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
                <div class="form-group{{ $errors->has('kilometers') ? ' has-error' : '' }}">
                    {{ Form::number('kilometers', null ,['class' => 'form-control']) }}
                    {{ Form::label('kilometers', 'Kilometer') }}
                    @if ($errors->has('kilometers'))
                        <span class="help-block">
                    <strong>{{ $errors->first('kilometers') }}</strong>
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
            <div class="col-sm-6">
                <div class="form-group{{ $errors->has('transmission') ? ' has-error' : '' }}">
                    {{ Form::label('transmission', 'Transmission') }}
                    {{ Form::select('transmission', ['automatic' => 'Automatic', 'manual' => 'Manual'], isset($car)?$car->transmission:null,['class' => 'form-control','placeholder' => 'Select Engine Type']) }}

                @if ($errors->has('transmission'))
                        <span class="help-block">
                    <strong>{{ $errors->first('transmission') }}</strong>
                </span>
                    @endif
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group{{ $errors->has('city_of_registration') ? ' has-error' : '' }}">
                    {{ Form::text('city_of_registration', null ,['class' => 'form-control']) }}
                    {{ Form::label('city_of_registration', 'City of registration') }}
                    @if ($errors->has('city_of_registration'))
                        <span class="help-block">
                    <strong>{{ $errors->first('city_of_registration') }}</strong>
                </span>
                    @endif
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group{{ $errors->has('body_type') ? ' has-error' : '' }}">
                    {{ Form::text('body_type', null ,['class' => 'form-control']) }}
                    {{ Form::label('body_type', 'Body Type') }}
                    @if ($errors->has('body_type'))
                        <span class="help-block">
                    <strong>{{ $errors->first('body_type') }}</strong>
                </span>
                    @endif
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group{{ $errors->has('drivetrain') ? ' has-error' : '' }}">
                    {{ Form::text('drivetrain', null ,['class' => 'form-control']) }}
                    {{ Form::label('drivetrain', 'Drivetrain') }}
                    @if ($errors->has('drivetrain'))
                        <span class="help-block">
                    <strong>{{ $errors->first('drivetrain') }}</strong>
                </span>
                    @endif
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group{{ $errors->has('categories') ? ' has-error' : '' }}">
                    {{ Form::select('categories[]', $categories , null, ['multiple' => true, 'class' => 'form-control', 'id' => 'allCategories']) }}
                    @if ($errors->has('categories'))
                        <span class="help-block">
                    <strong>{{ $errors->first('categories') }}</strong>
                </span>
                    @endif
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group{{ $errors->has('features') ? ' has-error' : '' }}">
                    {{ Form::select('features[]', $features , null, ['multiple' => true, 'class' => 'form-control', 'id' => 'allFeatures']) }}
                    @if ($errors->has('features'))
                        <span class="help-block">
                    <strong>{{ $errors->first('features') }}</strong>
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