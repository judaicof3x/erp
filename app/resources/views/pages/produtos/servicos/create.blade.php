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

        <form action="{{ route('painel.servicos.store') }}" method="post">
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
                        <button type="submit" class="btn btn-primary">Adicionar serviço</button>
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
                    <div class="col-lg-6">
                        <label for="name" class="required form-label">Nome do serviço</label>
                        <input value="{{ old('name') }}" type="text" name="name" required="required" class="form-control form-control-solid" placeholder="Insira o nome do serviço"/>
                    </div>
                    <div class="col-lg-6 mt-5 mt-lg-0">
                        <label for="category_id" class="required form-label">Categoria do serviço</label>
                        <select name="category_id" aria-label="Insira a categoria do serviço" data-control="select2" data-hide-search="true" data-placeholder="Insira a categoria do serviço" class="form-select form-select-solid form-select-lg select2-hidden-accessible" data-select2-id="select2-data-12-ob7j" tabindex="-1" aria-hidden="true">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" @if(old('category_id') == $category->id) selected @endif data-select2-id="select2-data-309-60fv">
                                    {{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-12">
                        <label for="description" class="form-label">Descrição do serviço</label>
                        <textarea value="{{ old('description') }}" name="description" class="form-control form-control form-control-solid" data-kt-autosize="true" placeholder="Insira a descrição do serviço"></textarea>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-lg-6">
                        <label for="amount" class="form-label">Valor do serviço</label>
                        <input value="{{ old('amount') }}" type="text" name="amount" class="form-control form-control-solid" placeholder="Insira o valor do serviço"/>
                    </div>
                    <div class="col-lg-6 mt-5 mt-lg-0">
                        <label for="amount_min" class="form-label">Valor mínimo do serviço</label>
                        <input value="{{ old('amount_min') }}" type="text" name="amount_min" class="form-control form-control-solid" placeholder="Insira o valor mínimo do serviço"/>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-lg-6">
                        <label for="deadline_deal" class="form-label">Prazo de entrega negociado</label>
                        <input value="{{ old('deadline_deal') }}" type="text" name="deadline_deal" class="form-control form-control-solid" placeholder="Insira prazo de entrega negociado"/>
                    </div>
                    <div class="col-lg-6 mt-5 mt-lg-0">
                        <label for="deadline_real" class="form-label">Prazo de entrega real</label>
                        <input value="{{ old('deadline_real') }}" type="text" name="deadline_real" class="form-control form-control-solid" placeholder="Insira o prazo de entrega real"/>
                    </div>
                </div>

                <div class="d-flex justify-content-end mt-10" data-kt-customer-table-toolbar="base">
                    <!--begin::Add customer-->
                    <button type="submit" class="btn btn-primary">Adicionar serviço</button>
                    <!--end::Add customer-->
                </div>
            </div>
            <!--end::Card body-->

        </form>
    </div>
@endsection
