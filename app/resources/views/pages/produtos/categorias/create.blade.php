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

        <form action="{{ route('painel.categorias.store') }}" method="post">
        @csrf

        <!--begin::Card header-->
            <div class="card-header border-0 pt-6">

                <!--begin::Card title-->
                <div class="card-title">
                    <div class="d-flex align-items-center position-relative my-1">
                        <span class="text-gray-600">Formulário de cadastro:</span>
                    </div>
                </div>
                <!--begin::Card title-->

                <!--begin::Card toolbar-->
                <div class="card-toolbar">
                    <!--begin::Toolbar-->
                    <div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">
                        <!--begin::Add customer-->
                        <button type="submit" class="btn btn-primary">Adicionar categoria</button>
                        <!--end::Add customer-->
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Card toolbar-->

            </div>
            <!--end::Card header-->

            <!--begin::Card body-->
            <div class="card-body pt-0">

                @if($errors->any())
                    <div class="alert alert-warning mt-1">
                        @foreach($errors->all() as $error)
                            <p> {{ $error }} </p>
                        @endforeach
                    </div>
                @endif

                <div class="row mt-5">
                    <div class="col-12">
                        <label for="name" class="required form-label">Nome da categoria</label>
                        <input value="{{ old('name') }}" type="text" name="name" required="required" class="form-control form-control-solid" placeholder="Insira o nome da categoria"/>
                        <span class="text-gray-600 small">Categorias são usadas para agrupar os serviços.</span>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-12">
                        <label for="description" class="form-label">Descrição da categoria</label>
                        <input value="{{ old('description') }}" type="text" name="description" class="form-control form-control-solid" placeholder="Insira a descrição da categoria"/>
                    </div>
                </div>

                <div class="d-flex justify-content-end mt-10" data-kt-customer-table-toolbar="base">
                    <!--begin::Add customer-->
                    <button type="submit" class="btn btn-primary">Adicionar categoria</button>
                    <!--end::Add customer-->
                </div>
            </div>
            <!--end::Card body-->

        </form>
    </div>
@endsection
