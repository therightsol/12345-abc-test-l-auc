@extends('commonbackend::layouts.admin_app')

@section('css')

@endsection

@section('content')
    <div id="content">
        <section class="style-default-bright">
            <div class="section-header">
                <h2 class="text-primary">Posts</h2>
            </div>
            <div class="section-body">
                <div class="row">
                    {{-- start writing from here--}}


                </div>
            </div>
        </section>
    </div>

    {{--@include('admin.partials.modals.delete')--}}


@endsection

@section('js')
    <script>
        $(document).ready(function ($) {

        });
    </script>
{{--
    <script src="{{url("admin_assets/js/includes/custom-functions.js")}}"></script>
--}}
@endsection