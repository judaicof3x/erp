@extends('styles.main')

@section('page-h-stylesheets')
    <link href="{{ URL::asset('plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('page-f-javascript')
    <script src="{{ URL::asset('plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script src="{{ URL::asset('js/custom/apps/customers/list/list.js') }}"></script>
    <script src="{{ URL::asset('js/custom/widgets.js') }}"></script>
    <script>
        function tenantShow(val) {
            if(val === 'Pessoa Física') {
                let tenant = document.getElementById('tenant');
                tenant.classList.add('d-none');
            } else if (val === 'Pessoa Jurídica') {
                let tenant = document.getElementById('tenant');
                tenant.classList.remove('d-none');
            }
        }
    </script>
@endsection

@section('w-content')
    <div class="card">

        <form action="{{ route('painel.clientes.store') }}" method="post">
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
                    <button type="submit" class="btn btn-primary">Adicionar cliente</button>
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
                        <label for="first_name" class="required form-label">Primeiro nome</label>
                        <input value="{{ old('first_name') }}" type="text" name="first_name" required="required" class="form-control form-control-solid" placeholder="Insira o nome do cliente"/>
                    </div>
                    <div class="col-lg-6 mt-5 mt-lg-0">
                        <label for="last_name" class="required form-label">Último nome</label>
                        <input value="{{ old('last_name') }}" type="text" name="last_name" required="required" class="form-control form-control-solid" placeholder="Insira o sobrenome do cliente"/>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-lg-4">
                        <label for="email" class="required form-label">Email</label>
                        <input value="{{ old('email') }}" type="email" name="email" required="required" class="form-control form-control-solid" placeholder="Insira o email do cliente"/>
                    </div>
                    <div class="col-lg-4 mt-5 mt-lg-0">
                        <label for="phone" class="form-label">Telefone</label>
                        <input value="{{ old('phone') }}" type="text" name="phone" data-inputmask="'mask': '(99) 9999-9999'" class="form-control form-control-solid" placeholder="Insira o telefone fixo do cliente"/>
                    </div>
                    <div class="col-lg-4 mt-5 mt-lg-0">
                        <label for="cell" class="required form-label">WhatsApp</label>
                        <input value="{{ old('cell') }}" type="text" name="cell" data-inputmask="'mask': '(99) 9 9999-9999'" required="required" class="form-control form-control-solid" placeholder="Insira o WhatsApp do cliente"/>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-lg-6">
                        <label for="cpf" class="required form-label">CPF</label>
                        <input value="{{ old('cpf') }}" type="text" name="cpf" data-inputmask="'mask': '999.999.999-99'" required="required" class="form-control form-control-solid" placeholder="Insira o cpf do cliente"/>
                    </div>
                    <div class="col-lg-6 mt-5 mt-lg-0">
                        <label for="rg" class="form-label">RG</label>
                        <input value="{{ old('rg') }}" type="text" name="rg" class="form-control form-control-solid" placeholder="Insira o rg do cliente"/>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-lg-4">
                        <label for="nationality" class="form-label">Nacionalidade</label>
                        <select name="nationality" aria-label="Insira a nacionalidade do cliente" data-control="select2" data-hide-search="true" data-placeholder="Insira a nacionalidade do cliente" class="form-select form-select-solid form-select-lg select2-hidden-accessible" data-select2-id="select2-data-12-ob7j" tabindex="-1" aria-hidden="true">
                            <option value="Brasileiro" @if(old('nationality') == 'Brasileiro') selected @endif data-select2-id="select2-data-309-60fv">Brasileiro</option>
                            <option value="Estrangeiro" @if(old('nationality') == 'Estrangeiro') selected @endif data-select2-id="select2-data-310-60fv">Estrangeiro</option>
                        </select>
                    </div>
                    <div class="col-lg-4 mt-5 mt-lg-0">
                        <label for="civil_status" class="form-label">Estado civil</label>
                        <select name="civil_status" aria-label="Insira o estado civil do cliente" data-control="select2" data-hide-search="true" data-placeholder="Insira o estado civil do cliente" class="form-select form-select-solid form-select-lg select2-hidden-accessible" data-select2-id="select2-data-13-ob7j" tabindex="-1" aria-hidden="true">
                            <option value="Solteiro" @if(old('civil_status') == 'Solteiro') selected @endif data-select2-id="select2-data-311-60fv">Solteiro</option>
                            <option value="Casado" @if(old('civil_status') == 'Casado') selected @endif data-select2-id="select2-data-312-60fv">Casado</option>
                            <option value="Separado" @if(old('civil_status') == 'Separado') selected @endif data-select2-id="select2-data-313-60fv">Separado</option>
                            <option value="Divorciado" @if(old('civil_status') == 'Divorciado') selected @endif data-select2-id="select2-data-314-60fv">Divorciado</option>
                            <option value="Viúvo" @if(old('civil_status') == 'Viúvo') selected @endif data-select2-id="select2-data-315-60fv">Viúvo</option>
                        </select>
                    </div>
                    <div class="col-lg-4 mt-5 mt-lg-0">
                        <label for="occupation" class="form-label">Profissão</label>
                        <input value="{{ old('occupation') }}" type="text" name="occupation" class="form-control form-control-solid" placeholder="Insira a profissão do cliente"/>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-lg-6">
                        <label for="segment" class="required form-label">Segmento</label>
                        <input value="{{ old('segment') }}" type="text" name="segment" required="required" class="form-control form-control-solid" placeholder="Insira o segmento do cliente"/>
                    </div>
                    <div class="col-lg-6 mt-5 mt-lg-0">
                        <label for="type" class="required form-label">Tipo de pessoa</label>
                        <select name="type" id="type" onchange="tenantShow(this.options[this.selectedIndex].value)" aria-label="Insira o tipo de pessoa" data-control="select2" data-hide-search="true" data-placeholder="Insira o tipo de pessoa" class="form-select form-select-solid form-select-lg select2-hidden-accessible" data-select2-id="select2-data-15-ob7j" tabindex="-1" aria-hidden="true">
                            <option value="Pessoa Jurídica" @if(old('type') == 'Pessoa Jurídica') selected @endif data-select2-id="select2-data-317-60fv">Pessoa Jurídica</option>
                            <option value="Pessoa Física" @if(old('type') == 'Pessoa Física') selected @endif data-select2-id="select2-data-316-60fv">Pessoa Física</option>
                        </select>
                    </div>
                </div>

                <div id="tenant">
                    <hr class="mt-15 mb-10 text-gray-600">

                    <div class="row mt-5">
                        <div class="col-lg-6">
                            <label for="tenant_fantasy_name" class="form-label">Nome fantasia</label>
                            <input value="{{ old('tenant_fantasy_name') }}" type="text" name="tenant_fantasy_name" class="form-control form-control-solid" placeholder="Insira o nome fantasia da empresa"/>
                        </div>
                        <div class="col-lg-6 mt-5 mt-lg-0">
                            <label for="tenant_cnpj" class="form-label">CNPJ</label>
                            <input value="{{ old('tenant_cnpj') }}" type="text" name="tenant_cnpj" data-inputmask="'mask': '99.999.999/0001.99'" class="form-control form-control-solid" placeholder="Insira o cnpj da empresa"/>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="">
                            <label for="tenant_corporate_reason" class="form-label">Razão social</label>
                            <input value="{{ old('tenant_corporate_reason') }}" type="text" name="tenant_corporate_reason" class="form-control form-control-solid" placeholder="Insira a razão social da empresa"/>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-lg-4">
                            <label for="tenant_email" class="form-label">Email</label>
                            <input value="{{ old('tenant_email') }}" type="email" name="tenant_email" class="form-control form-control-solid" placeholder="Insira o email da empresa"/>
                        </div>
                        <div class="col-lg-4 mt-5 mt-lg-0">
                            <label for="tenant_phone" class="form-label">Telefone</label>
                            <input value="{{ old('tenant_phone') }}" type="text" name="tenant_phone" data-inputmask="'mask': '(99) 9999-9999'" class="form-control form-control-solid" placeholder="Insira o telefone fixo da empresa"/>
                        </div>
                        <div class="col-lg-4 mt-5 mt-lg-0">
                            <label for="tenant_cell" class="form-label">WhatsApp</label>
                            <input value="{{ old('tenant_cell') }}" type="text" name="tenant_cell" data-inputmask="'mask': '(99) 9 9999-9999'" class="form-control form-control-solid" placeholder="Insira o WhatsApp da empresa"/>
                        </div>
                    </div>
                </div>


                <div class="d-flex justify-content-end mt-10" data-kt-customer-table-toolbar="base">
                    <!--begin::Add customer-->
                    <button type="submit" class="btn btn-primary">Adicionar cliente</button>
                    <!--end::Add customer-->
                </div>
        </div>
        <!--end::Card body-->

    </form>
    </div>
@endsection
