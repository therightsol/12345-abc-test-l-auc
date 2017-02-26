@extends('admin.layouts.admin_app')

@section('content')
    <div id="content">
        <section class="">
            <div class="section-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-head">
                                @include('admin.partials._section-head', ['pageTitle' => $pageTitle,'route' => route(getCreateRouteName())])
                            </div>
                            <div class="card-body dataTables_wrapper" style="padding-top: 0;">
                                <form id="filters" action="{{ route(Route::currentRouteName()) }}">
                                    @include('admin.partials._table-header')
                                    @yield('table')
                                </form>
                            </div><!--end .card-body -->
                            @include('admin.partials._table-footer')

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    @include('admin.users.includes.delete')

@endsection
@section('js')
    <script src="{{ asset('admin_assets/js/includes/h-functions.js') }}"></script>
    <script>

        $(document).ready(function () {
            $('table.dataTable').setTableOrder({
                form: 'form#filters'
            });
            deleteRow('{{ route(getDestroyRouteName(),'') }}');
        })
    </script>
@endsection