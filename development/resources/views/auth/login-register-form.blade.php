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
    </style>
@endsection






@section('content')

<section class="content">
    <div class="container">
        <div class="inner-page full-width row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 padding-left-none padding-right-none">
                <div class="blog-content">
                    <div class="blog-title">
                        <h2 class="margin-top-65">Login</h2>
                        <strong class="margin-top-5 margin-bottom-25">Already member then login</strong>
                    </div>
                    <div>
                        <div class=" login-section search-form margin-top-20 padding-vertical-20">

                            @if(isset($params) && $params == true)
                                <div class="select-wrapper clearfix">
                                    <div class="col-md-12">
                                        <div class="my-dropdown">
                                            <p class="wrong_credentials">Sorry! provided username / password was wrong.</p>
                                        </div>
                                    </div>

                                </div>
                            @endif



                            <form method="post" action="{{route('frontend-do_login')}}">
                                {{csrf_field()}}
                                <div class="select-wrapper clearfix">
                                    <div class="col-md-7">
                                        <div class="my-dropdown">
                                            <input class="full-width" type="text" name="username" value="" required placeholder="username (Required)">
                                        </div>
                                    </div>

                                </div>
                                <div class="select-wrapper clearfix">
                                    <div class="col-md-7">
                                        <div class="my-dropdown">
                                            <input class="full-width" type="password" name="password" required value="" placeholder="Password (Required)">
                                        </div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                                <div class="select-wrapper clearfix">
                                    <div class="form-element">
                                        <a href="{{route('frontend-reset')}}" class="inverse">Need Help?</a>
                                    </div>

                                    <div class="form-element">
                                        <input type="submit" value="Login" class="inverse find_new_vehicle pull-right md-button">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 padding-left-none padding-right-none">
                <div class="blog-content">
                    <div class="blog-title">
                        <h2 class="margin-top-65">Register</h2>
                        <strong class="margin-top-5 margin-bottom-25">Don't have an account! Its Free!</strong>
                    </div>
                    <div>
                        <div class="search-form margin-top-20 padding-vertical-20">
                            <form method="post" action="{{route('frontend-do_register')}}">
                                {{csrf_field()}}
                                <div class="select-wrapper clearfix">
                                    <div class="col-md-6">
                                        <div class="my-dropdown">
                                            <input class="full-width" type="text" name="fullname" value="{{old('fullname')}}" placeholder="Full Name">
                                            {!! $errors->first('fullname', '<p class="help-block">:message</p>') !!}

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="my-dropdown {{ $errors->has('username') ? 'has-error' : ''}}">
                                            <input class="full-width" type="text" name="username" value="{{old('username')}}" required placeholder="username (Required)">
                                            {!! $errors->first('username', '<p class="help-block">:message</p>') !!}

                                        </div>
                                    </div>
                                </div>
                                <div class="select-wrapper clearfix">
                                    <div class="col-md-6">
                                        <div class="my-dropdown {{ $errors->has('email') ? 'has-error' : ''}}">
                                            <input class="full-width" type="email" name="email" value="{{old('email')}}" required placeholder="Email (Required)">
                                            {!! $errors->first('email', '<p class="help-block">:message</p>') !!}

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="my-dropdown  {{ $errors->has('cnic') ? 'has-error' : ''}}">
                                            <input class="full-width" type="text" name="cnic" value="{{old('cnic')}}" placeholder="CNIC">
                                            {!! $errors->first('cnic', '<p class="help-block">:message</p>') !!}

                                        </div>
                                    </div>
                                </div>
                                <div class="select-wrapper clearfix">
                                    <div class="col-md-6">
                                        <div class="my-dropdown {{ $errors->has('contact') ? 'has-error' : ''}}">
                                            <input class="full-width" type="text" name="contact" value="{{old('contact')}}" placeholder="Contact Number">
                                            {!! $errors->first('contact', '<p class="help-block">:message</p>') !!}

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="my-dropdown {{ $errors->has('url') ? 'has-error' : ''}}">
                                            <input class="full-width" type="text" name="url" value="{{old('url')}}" placeholder="Website">
                                            {!! $errors->first('url', '<p class="help-block">:message</p>') !!}

                                        </div>
                                    </div>
                                </div>
                                <div class="select-wrapper clearfix">
                                    <div class="col-md-6">
                                        <div class="my-dropdown  {{ $errors->has('password') ? 'has-error' : ''}}">
                                            <input class="full-width" type="password" name="password" value="" required placeholder="Password (Required)">
                                            {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="my-dropdown  {{ $errors->has('conf-password') ? 'has-error' : ''}}">
                                            <input class="full-width" type="password" name="conf-password" value="" required placeholder="Re-type Password (Required)">
                                            {!! $errors->first('conf-password', '<p class="help-block">:message</p>') !!}

                                        </div>
                                    </div>
                                </div>
                                <div class="select-wrapper clearfix">
                                    <div class="col-md-12">
                                        <div class="my-dropdown  {{ $errors->has('user_role') ? 'has-error' : ''}}">
                                            <select class="form-control select2-list" name="user_role" id="user_role"
                                                     data-placeholder="Select Role">
                                                <option selected value="">Choose Role</option>
                                                <optgroup label="User Roles">
                                                    @foreach($userroles as $userrole)
                                                        <option value="{{$userrole}}" {!! old('user_role') || ( isset($user->user_role) ? $user->user_role : '' ) == strtolower($userrole) ? 'selected' : '' !!}>
                                                            {{$userrole}}
                                                        </option>
                                                    @endforeach
                                                </optgroup>
                                            </select>
                                            {!! $errors->first('user_role', '<p class="help-block">:message</p>') !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                                <div class="select-wrapper clearfix">

                                    <div class="form-element">
                                        <input type="submit" value="Register" class="find_new_vehicle pull-right md-button">
                                    </div>
                                </div>
                            </form>
                        </div>
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