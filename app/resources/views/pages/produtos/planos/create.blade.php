@extends('styles.main')

@section('page-h-stylesheets')
    <link href="{{ URL::asset('plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('page-f-javascript')
    <script src="{{ URL::asset('plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script src="{{ URL::asset('js/custom/apps/customers/list/list.js') }}"></script>
    <script src="{{ URL::asset('js/custom/widgets.js') }}"></script>
@endsection

@section('w-content')
    <div class="card">

        <div class="container py-5">
            Você não tem permissão para acessar esse recurso.
        </div>

    </div>
@endsection
