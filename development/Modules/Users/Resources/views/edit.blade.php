@extends( Module::get('commonbackend') != NULL ? 'commonbackend::layouts.admin_app': 'users::layouts.master', ['pageTitle' => 'Users', 'obj' => $user] )

@include('media::layoutfiles.embedd')

@section('style')
    <link type="text/css" rel="stylesheet" href="{{ Module::asset('commonbackend:admin_assets/css/theme-default/libs/bootstrap-datepicker/datepicker3.css') }}" />

    <style>
        .changePasswordRow{
            display: none;
        }

        .image-div {
            margin: 4px;
            display: inline-block;
            border: 2px solid transparent;
            position: relative;

            -webkit-box-shadow: 1px 2px 2px rgba(130, 130, 130, 0.31);
            -moz-box-shadow: 1px 2px 2px rgba(130, 130, 130, 0.31);
            box-shadow: 1px 2px 2px rgba(130, 130, 130, 0.31);
        }

        .image-div i {
            display: none;
        }

        .image-div.selected i {
            display: block;
        }

        .image-div:hover img {
            opacity: 1;
        }

        .image-div img {
            -webkit-transition: all 0.7s ease;
            -moz-transition: all 0.7s ease;
            -ms-transition: all 0.7s ease;
            -o-transition: all 0.7s ease;
            transition: all 0.7s ease;
            opacity: 0.7;
            width: 100px;
            height: 100px;
            cursor: pointer;
        }

        .selected {
            border: 2px solid #3499ff;
        }

        .tick:after {
            content: '\f00c';
            position: absolute;
            z-index: 9;
            right: -8px;
            font-size: 2em;
            top: -22px;
            font-weight: bold;
            color: #3499ff;
        }

        .fa-check {
            font-size: 2.5em;
            color: #3499ff;
            position: absolute;
            top: -17px;
            right: -17px;
        }

        .close span {
            font-size: 2.4em;
        }

        .media-action {
            display: flex;

        }


        .img-src-container{
            display: flex;
            min-width: 200px;
            width: 53%;
            margin-left: auto;
            align-items: center;
        }

        .img-src-container input, .img-src-container button{
            display: inline;
        }

        #url{
            margin-right: 8px;
        }

        /* - Embedded Page Style -*/
        #media-images .section-header {
            padding: 0;
            height: auto;
        }

        #media-images .card-body{
            padding-top: 10px;
        }

        #media-images #content{
            padding-top: 0;
        }
    </style>
@endsection

@section('form-title')
    <header>Update User - {{ $user['full_name']}}</header>
@endsection

@section('form-submit-buttons')
    <button type="submit" id="savebtn" class="btn btn-primary">Update</button>
@endsection


@section('form-open')
    <form class="form" action="{{route('admin.users.update', ['id' => $user->id])}}" enctype="multipart/form-data" data-uid="" method="post" >
        <input name="_method" type="hidden" value="PUT">
@endsection

        @if (Session::has('isUpdated') && ( Session::get('isUpdated') == 'update' ) )
        @section('form-alerts')
            <div class="alert alert-success">
                User successfully updated.
            </div>
        @endsection
        @elseif(Session::has('isUpdated')))
        @section('form-alerts')
            <div class="alert alert-danger">
                Sorry! There is an error while updating. <br />
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
                                @include('users::includes.edit-user-inc')
                            </div>

                        </div>
                    </div>
                </section>
            </div>


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

        @endsection