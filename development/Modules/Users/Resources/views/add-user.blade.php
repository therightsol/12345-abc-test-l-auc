@extends('admin/layouts.admin_app')

@section('style')
    <link type="text/css" rel="stylesheet" href="{{ asset('admin_assets/css/theme-default/libs/bootstrap-datepicker/datepicker3.css') }}" />

    @include('admin.media.embedd.includes.styles')
@endsection

@section('form-title')
    <header>Add User</header>
@endsection

@section('form-submit-buttons')
    <button type="submit" id="savebtn" class="btn btn-primary">Create</button>
@endsection

@section('form-action')
    action="{{url('tp-admin/add-user')}}"
@endsection

@section('form-open')
    <form class="form" action="{{route('admin.user.store')}}" enctype="multipart/form-data" data-uid="" method="post" >
@endsection

@if (isset($user_saved) && $user_saved)
    @section('form-alerts')
    <div class="alert alert-success">
        User successfully created.
    </div>
    @endsection
@elseif(isset($user_saved))
    @section('form-alerts')
        <div class="alert alert-danger">
            Sorry! There is an error while creating a new user. <br />
            Please try again. If problem persists then please contact to developer.
        </div>
    @endsection
@endif

@section('content')
    <div id="content">
        <section class="">
            <div class="section-body">
                <div class="row">
                    <!-- BEGIN ALERT - REVENUE -->
                    <div class="col-sm-12">
                        @include('admin.users.includes.add-user-form')
                    </div>

                </div>
            </div>
        </section>
    </div>


    @include('admin.media.embedd.media-modal-viewer')


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
    <script src="{{url("admin_assets/js/includes/custom-functions.js")}}"></script>


    @include('admin.media.embedd.includes.js')

@endsection