@extends( Module::get('commonbackend') != NULL ? 'commonbackend::layouts.admin_app': 'users::layouts.master' )

@section('style')
    <link type="text/css" rel="stylesheet" href="{{ Module::asset('commonbackend:admin_assets/css/theme-default/libs/bootstrap-datepicker/datepicker3.css') }}" />

    <style>
        .nopadding{
            padding: 0 !important;
            margin: 0 !important;
        }

        .no-left-padding{
            padding-left: 0 !important;
            margin-left: 0 !important;
        }

        .no-right-padding{
            padding-right: 0 !important;
            margin-right: 0 !important;
        }
    </style>
    @include('media::layoutfiles.embedd.includes.styles')
@endsection

@section('form-title')
    <header>Add User</header>
@endsection

@section('form-submit-buttons')
    <button type="submit" id="savebtn" class="btn btn-primary">Create</button>
@endsection



@section('form-open')
    <form class="form" action="{{route('admin.users.store')}}" enctype="multipart/form-data" data-uid="" method="post" >
@endsection


@if(session ('user_saved'))
    @if(session ('user_saved') == '1')
        @section('form-alerts')
            <div class="alert alert-success">
                User successfully created.
                <strong><a href="{{route('admin.users.index')}}">Return Back</a></strong>
            </div>
        @endsection
    @else
        @section('form-alerts')
            <div class="alert alert-danger">
                Sorry! There is an error while creating a new user. <br />
                Please try again. If problem persists then please contact to developer.
            </div>
        @endsection
    @endif
@endif


@section('content')
    <div id="content">
        <section class="">
            <div class="section-body">
                <div class="row">
                    <!-- BEGIN ALERT - REVENUE -->
                    <div class="col-sm-12">

                            @include('users::includes.add-user-form')

                    </div>

                </div>
            </div>
        </section>
    </div>


    @include('media::layoutfiles.embedd.media-modal-viewer')


@endsection

@section('js')
    <script>

        jQuery('#lastname').blur(function (){
            var firstname = jQuery('#firstname').val();
            var lastname = $(this).val();

            var display_name = firstname + ' ' + lastname;

            jQuery('#display_name').val(display_name).addClass('dirty');
        });
    </script>
            <script src="{{Module::asset("media:js/custom-functions.js")}}"></script>


    @include('media::layoutfiles.embedd.includes.js')



@endsection