@extends('layout.app')

@section('content')
    <section id="secondary-banner" class="dynamic-image-2"><!--for other images just change the class name of this section block like, class="dynamic-image-2" and add css for the changed class-->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-6 col-sm-6 col-xs-12">
                    <h2>Error 404: File not found.</h2>
                    <h4>That being said, we will give you an amazing deal for the trouble.</h4>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li>Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="message-shadow"></div>
    <div class="clearfix"></div>
    <section class="content less-margin">
        <div class="container">
            <div class="inner-page">
                <div class="error-message">
                    <h2 class="error padding-10 margin-bottom-30 padding-top-none"><i class="fa fa-exclamation-circle exclamation margin-right-50"></i>404</h2>
                    <em>File not found.</em>
                </div>
            </div>
        </div>
        <!--container ends-->
    </section>

@endsection
