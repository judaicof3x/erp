@extends('styles.main')

@section('page-h-stylesheets')
    <link href="{{ URL::asset('plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('page-f-javascript')
    <script src="{{ URL::asset('plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script src="{{ URL::asset('js/custom/apps/customers/list/list.js') }}"></script>
    <script src="{{ URL::asset('js/custom/widgets.js') }}"></script>
    <script>
        document.getElementById("submitDeletarCategoria").onclick = function() {
            document.getElementById("deletarCategoria").submit();
        }
    </script>
@endsection

@section('w-content')
    <div class="card">

        <!--begin::Card header-->
        <div class="card-header border-0 pt-6">

            <!--begin::Card title-->
            <div class="card-title">
                <!--begin::Search-->
                <div class="d-flex align-items-center position-relative my-1">
                    <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                    <span class="svg-icon svg-icon-1 position-absolute ms-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black"></rect>
                            <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black"></path>
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                    <input type="text" data-kt-customer-table-filter="search" class="form-control form-control-solid w-250px ps-15" placeholder="Procurar categoria">
                </div>
                <!--end::Search-->
            </div>
            <!--begin::Card title-->

            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <!--begin::Toolbar-->
                <div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">
                    <!--begin::Add customer-->
                    <a href="{{ route('painel.categorias.create') }}" class="btn btn-primary">Adicionar categoria</a>
                    <!--end::Add customer-->
                </div>
                <!--end::Toolbar-->
                <!--begin::Group actions-->
                <div class="d-flex justify-content-end align-items-center d-none" data-kt-customer-table-toolbar="selected">
                    <div class="fw-bolder me-5">
                        <span class="me-2" data-kt-customer-table-select="selected_count">1</span>selecionado</div>
                    <button type="button" class="btn btn-danger" data-kt-customer-table-select="delete_selected">Deletar selecionado</button>
                </div>
                <!--end::Group actions-->
            </div>
            <!--end::Card toolbar-->

        </div>
        <!--end::Card header-->

        <div class="container">
            @include('styles.includes.messages')
        </div>

        <!--begin::Card body-->
        <div class="card-body pt-0">
            <!--begin::Table-->
            <div id="kt_customers_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                <div class="table-responsive">
                    @if(empty($categories->all()))
                        <table class="table align-middle table-row-dashed fs-6 gy-5">
                            <!--begin::Table head-->
                            <thead>
                            <!--begin::Table row-->
                            <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                <th class="min-w-125px sorting text-center" tabindex="0" aria-controls="kt_customers_table" rowspan="1" colspan="1" aria-label="Customer Name: activate to sort column ascending" style="width: 130.484px;">
                                    Lista de categorias
                                </th>
                            </tr>
                            <!--end::Table row-->
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody class="fw-bold text-gray-600">
                            <tr class="odd">
                                <!--begin::Name=-->
                                <td class="text-center">
                                    <a class="text-gray-600 mb-1">Ooops, ainda n??o temos nenhuma categoria para exibir! =/</a>
                                </td>
                                <!--end::Name=-->
                            </tr>
                            </tbody>
                            <!--end::Table body-->
                        </table>
                    @else
                        <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer" id="kt_customers_table">
                            <!--begin::Table head-->
                            <thead>
                            <!--begin::Table row-->
                            <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                <th class="w-10px pe-2 sorting_disabled" rowspan="1" colspan="1" aria-label="" style="width: 29.25px;">
                                    <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                        <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_customers_table .form-check-input" value="1">
                                    </div>
                                </th>
                                <th class="min-w-125px sorting text-center" tabindex="0" aria-controls="kt_customers_table" rowspan="1" colspan="1" aria-label="Customer Name: activate to sort column ascending" style="width: 130.484px;">
                                    Categoria
                                </th>
                                <th class="min-w-125px sorting text-center" tabindex="0" aria-controls="kt_customers_table" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 130.484px;">
                                    N?? de servi??os
                                </th>
                                <th class="min-w-125px sorting text-center" tabindex="0" aria-controls="kt_customers_table" rowspan="1" colspan="1" aria-label="Company: activate to sort column ascending" style="width: 144.625px;">
                                    N?? de contratos
                                </th>
                                <th class="min-w-125px sorting text-center" tabindex="0" aria-controls="kt_customers_table" rowspan="1" colspan="1" aria-label="Created Date: activate to sort column ascending" style="width: 165.625px;">
                                    Cadastrada em
                                </th>
                                <th class="min-w-125px sorting_disabled text-center" rowspan="1" colspan="1" aria-label="Actions" style="width: 100.766px;">
                                    A????es
                                </th>
                            </tr>
                            <!--end::Table row-->
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody class="fw-bold text-gray-600">
                            @foreach($categories as $category)
                                <tr class="odd">
                                    <!--begin::Checkbox-->
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1">
                                        </div>
                                    </td>
                                    <!--end::Checkbox-->
                                    <!--begin::Name=-->
                                    <td class="text-center">
                                        <a href="{{ route('painel.categorias.show', $category->url) }}" class="text-gray-600 text-hover-primary mb-1">
                                            {{ $category->name }}
                                        </a>
                                    </td>
                                    <!--end::Name=-->
                                    <!--begin::Servi??os=-->
                                    <td class="text-center">
                                        1
                                    </td>
                                    <!--end::Servi??os=-->
                                    <!--begin::Contratos=-->
                                    <td class="text-center text-success">
                                        0
                                    </td>
                                    <!--end::Contratos=-->
                                    <!--begin::Date=-->
                                    <td class="text-center" data-order="2020-12-14T20:43:00-03:00">
                                        {{ date("d/m/Y", strtotime($category->created_at)) }}
                                    </td>
                                    <!--end::Date=-->
                                    <!--begin::Action=-->
                                    <td class="text-center">
                                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">A????es
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                            <span class="svg-icon svg-icon-5 m-0">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black"></path>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('painel.categorias.show', $category->url) }}" class="menu-link px-3">Visualizar</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <form action="{{ route('painel.categorias.destroy', $category->url) }}" method="post" id="deletarCategoria">
                                                    @csrf
                                                    @method('delete')
                                                    <a id="submitDeletarCategoria" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Deletar</a>
                                                </form>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                    <!--end::Action=-->
                                </tr>
                            @endforeach
                            </tbody>
                            <!--end::Table body-->
                        </table>
                    @endif
                </div>

                <div class="row">
                    <div class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start">
                        <div class="dataTables_length" id="kt_customers_table_length">
                            <label>
                                <select name="kt_customers_table_length" aria-controls="kt_customers_table" class="form-select form-select-sm form-select-solid">
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end">
                        <div class="dataTables_paginate paging_simple_numbers" id="kt_customers_table_paginate">
                            <ul class="pagination">
                                <li class="paginate_button page-item previous disabled" id="kt_customers_table_previous">
                                    <a href="#" aria-controls="kt_customers_table" data-dt-idx="0" tabindex="0" class="page-link">
                                        <i class="previous"></i>
                                    </a></li>
                                <li class="paginate_button page-item active">
                                    <a href="#" aria-controls="kt_customers_table" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                                </li>
                                <li class="paginate_button page-item next disabled" id="kt_customers_table_next">
                                    <a href="#" aria-controls="kt_customers_table" data-dt-idx="5" tabindex="0" class="page-link">
                                        <i class="next"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Table-->

        </div>
        <!--end::Card body-->
    </div>
@endsection
