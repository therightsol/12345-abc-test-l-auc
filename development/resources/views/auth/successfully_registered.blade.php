@extends('layout.app')




@section('style')
    <style>
        .margin-top-65{
            margin-top: 65px !important;
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
                            <h2 class="margin-top-65">Congratulations!</h2>
                            <strong class="margin-top-5 margin-bottom-25">Your account has been successfully registered.</strong>
                            <p>Please <a href="{{url('login')}}">Login</a> </p>
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