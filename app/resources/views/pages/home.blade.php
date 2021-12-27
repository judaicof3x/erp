@extends('styles.main')

@section('page-h-stylesheets')
    <link href="{{ URL::asset('plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('page-f-javascript')
    <script src="{{ URL::asset('plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
    <script src="{{ URL::asset('js/custom/widgets.js') }}"></script>
    <script src="{{ URL::asset('js/custom/apps/chat/chat.js') }}"></script>
    <script src="{{ URL::asset('js/custom/modals/create-app.js') }}"></script>
    <script src="{{ URL::asset('js/custom/modals/upgrade-plan.js') }}"></script>
@endsection

@section('w-content')
    <!--begin::Row-->
    <div class="row g-5 g-xl-8">
        Em desenvolvimento  
    </div>
    <!--end::Row-->
@endsection
