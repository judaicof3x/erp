@extends('styles.main')

@section('page-h-stylesheets')
    <link href="{{ URL::asset('plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('page-f-javascript')
    <script src="{{ URL::asset('js/custom/apps/customers/categoriesUpdate.js') }}"></script>
    <script>
        document.getElementById("submitDeletarServico").onclick = function() {
            document.getElementById("deletarServico").submit();
        }
    </script>
@endsection

@section('w-content')
    <div class="d-flex flex-column flex-xl-row">
        <!--begin::Sidebar-->
        <div class="flex-column flex-lg-row-auto w-100 w-xl-350px mb-10">
            <!--begin::Card-->
            <div class="card mb-5 mb-xl-8">
                <!--begin::Card body-->
                <div class="card-body pt-15">
                    <!--begin::Summary-->
                    <div class="d-flex flex-center flex-column mb-5">
                        <!--begin::Name-->
                        <a href="#" class="fs-3 text-gray-800 text-hover-primary fw-bolder mb-1">
                            Plano Avançado
                        </a>
                        <!--end::Name-->
                        <!--begin::Position-->
                        <div class="fs-5 fw-bold text-muted mb-6">Site institucional, página de Captura, 5 posts por semana (posts de segunda a sexta), 3 stories, 2 videos animados, 2 vídeos e gerenciamento das redes sociais com atendimento 2.0</div>
                        <!--end::Position-->
                    </div>
                    <!--end::Summary-->
                    <!--begin::Details toggle-->
                    <div class="d-flex flex-stack fs-4 py-3">
                        <div class="fw-bolder rotate collapsible" data-bs-toggle="collapse" href="#kt_customer_view_details" role="button" aria-expanded="false" aria-controls="kt_customer_view_details">Detalhes
                            <span class="ms-2 rotate-180">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                <span class="svg-icon svg-icon-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black"></path>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </span>
                        </div>
                    </div>
                    <!--end::Details toggle-->
                    <div class="separator separator-dashed my-3"></div>
                    <!--begin::Details content-->
                    <div id="kt_customer_view_details" class="collapse show">
                        <div class="py-5 fs-6">
                            <!--begin::Details item-->
                            <div class="fw-bolder mt-5">ID do plano</div>
                            <div class="text-gray-600">ID-1</div>
                            <!--begin::Details item-->
                            <!--begin::Details item-->
                            <div class="fw-bolder mt-5">Valor do plano</div>
                            <div class="text-gray-600">R$ 3.800,00</div>
                            <!--begin::Details item-->
                        </div>
                    </div>
                    <!--end::Details content-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Sidebar-->
    </div>
@endsection

@section('page-f-modals')
    <!--begin::Modal - New Address-->
    <div class="modal fade" id="kt_modal_update_customer" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Form-->
                <form class="form" method="post" action="#" id="kt_modal_update_customer_form">
                    @csrf
                    @method('put')
                    <!--begin::Modal header-->
                    <div class="modal-header" id="kt_modal_update_customer_header">
                        <!--begin::Modal title-->
                        <h2 class="fw-bolder">Atualizar serviço</h2>
                        <!--end::Modal title-->
                        <!--begin::Close-->
                        <div id="kt_modal_update_customer_close" class="btn btn-icon btn-sm btn-active-icon-primary">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                            <span class="svg-icon svg-icon-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                                    <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </div>
                        <!--end::Close-->
                    </div>
                    <!--end::Modal header-->
                    <!--begin::Modal body-->
                    <div class="modal-body py-10 px-lg-17">
                        <!--begin::Scroll-->
                        <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_update_customer_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_update_customer_header" data-kt-scroll-wrappers="#kt_modal_update_customer_scroll" data-kt-scroll-offset="300px">
                            <!--begin::User form-->
                            @include('pages.produtos.servicos._includes.form')
                            <!--end::User form-->
                        </div>
                        <!--end::Scroll-->
                    </div>
                    <!--end::Modal body-->
                    <!--begin::Modal footer-->
                    <div class="modal-footer flex-center">
                        <!--begin::Button-->
                        <button type="reset" id="kt_modal_update_customer_cancel" class="btn btn-light me-3">Cancelar</button>
                        <!--end::Button-->
                        <!--begin::Button-->
                        <button type="submit" id="kt_modal_update_customer_submit" class="btn btn-primary">
                            <span class="indicator-label">Atualizar</span>
                            <span class="indicator-progress">Aguarde, por favor...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                        <!--end::Button-->
                    </div>
                    <!--end::Modal footer-->
                </form>
                <!--end::Form-->
            </div>
        </div>
    </div>
    <!--end::Modal - New Address-->
@endsection
