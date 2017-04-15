@extends('layout.app')




@section('style')
    <style>
        input[type="text"],
        input[type="password"],
        input[type="email"]{
            color: #000000;
            font-weight: bold;
        }


        .margin-top-65{
            margin-top: 65px !important;
        }

        .wrong_credentials{
            color: white;
            background: #c7081b;
            display: inline-block;
            padding: 4px;
        }

        input[type="password"]{
            float: left;
            width: 108px;
            border-radius: 2px;
            border: 1px solid #E4E4E4;
            color: #54545e;
            text-shadow: 1px 0 0 0 #fff;
            padding: 1px 4px;
        }

        input[type="password"]:focus{

            border: 1px solid #66AFE9;
            outline: 0;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(102, 175, 233, 0.6);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(102, 175, 233, 0.6);
        }

        .login-section{
            background-color: rgb(25, 76, 61);
            margin-right: 10px;
        }

        .inverse{
            color: white;
            padding: 3px 5px;
        }

        .inverse:hover{
            color: white;
            background: #c7081b;
            padding: 3px 5px;
        }

        .help-block{
            background: #c7081b;
            color: white !important;
        }
    </style>
@endsection


@section('content')

    <section class="content">
        <div class="container">
            <div class="inner-page full-width row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 padding-left-none padding-right-none">
                    <div class="blog-content">
                        <div class="blog-title">
                            <h2 class="margin-top-65">Reset Your Password</h2>
                            <strong class="margin-top-5 margin-bottom-25">Type new secure and strong password</strong>

                        </div>
                        <div class=" login-section search-form margin-top-20 padding-vertical-20">
                            <form method="post" action="{{route('frontend-reset-post')}}">
                                {{csrf_field()}}
                                <input type="hidden" name="token" value="{{ $token }}">

                                <div class="select-wrapper clearfix">
                                    <div class="col-md-12">
                                        <div class="my-dropdown {{ $errors->has('email') ? 'has-error' : ''}}">
                                            <input class="full-width" type="email" name="email" value="{{old('email')}}" required placeholder="Email (Required)">
                                            {!! $errors->first('email', '<p class="help-block">:message</p>') !!}

                                        </div>
                                    </div>
                                </div>
                                <div class="select-wrapper clearfix">
                                    <div class="col-md-12">
                                        <div class="my-dropdown  {{ $errors->has('password') ? 'has-error' : ''}}">
                                            <input class="full-width" type="password" name="password" value="" required placeholder="Password (Required)">
                                            {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="select-wrapper clearfix">
                                    <div class="col-md-12">
                                        <div class="my-dropdown  {{ $errors->has('password_confirmation') ? 'has-error' : ''}}">
                                            <input class="full-width" type="password" name="password_confirmation" value="" required placeholder="Re-type Password (Required)">
                                            {!! $errors->first('password_confirmation', '<p class="help-block">:message</p>') !!}

                                        </div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                                <div class="select-wrapper clearfix">

                                    <div class="form-element">
                                        <input type="submit" value="Reset" class="inverse find_new_vehicle pull-right md-button">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        </div>
        <!--container ends-->
    </section>
    <!--content ends-->
    <div class="clearfix"></div>
@endsection



@section('js')
    <script>

    </script>
@endsection