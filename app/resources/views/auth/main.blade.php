<!DOCTYPE html>
<html lang="pt-BR">
	<!--begin::Head-->
	<head>
		<title>Painel Administrativo | Agência F3X</title>
		<meta charset="utf-8" />
		<meta name="description" content="Painel administrativo da Agência F3X." />
		<meta name="keywords" content="f3x, agencia f3x, agência f3x, nozap, diogo archanjo, painel f3x, painel agencia f3x, " />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="pt-BR" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Painel Administrativo | Agência F3X" />
		<meta property="og:url" content="https://painel.agenciaf3x.com.br/" />
		<meta property="og:site_name" content="Agência F3X" />
		<link rel="canonical" href="#" />
		<link rel="shortcut icon" href="{{ URL::asset('media/logos/favicon-black.ico') }}" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="{{ URL::asset('plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ URL::asset('css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="bg-body">
		<!--begin::Main-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Authentication - Sign-in -->
			<div class="d-flex flex-column flex-lg-row flex-column-fluid">
				<!--begin::Aside-->
				<div class="d-flex flex-column flex-lg-row-auto w-xl-600px positon-xl-relative" style="background-image: url('{{ URL::asset('media/backgrounds/others.jpg') }}'); background-repeat: no-repeat; background-size: cover;">
					<!--begin::Wrapper-->
					<div class="d-flex flex-column position-xl-fixed w-xl-600px">
						<!--begin::Content-->
						<div class="d-flex flex-column text-center p-10 pt-lg-20">
							<!--begin::Logo-->
							<a href="#" class="d-none py-9 mb-5">
								<img alt="Logo" src="{{ URL::asset('media/logos/F3X-Horizontal-Light.png')}}" class="h-90px" />
							</a>
							<!--end::Logo-->
							<!--begin::Title-->
							<h1 class="d-none fw-bolder fs-2qx pb-5 pb-md-10" style="color: #986923;">Agência F3X</h1>
							<!--end::Title-->
							<!--begin::Description-->
							<p class="d-none fs-4 text-white">Agência F3X,
							<br />inspirando e inovando</p>
							<!--end::Description-->
						</div>
						<!--end::Content-->
						<!--begin::Illustration-->
						<div class="d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-100px min-h-lg-350px" style="background-image: url(/metronic8/demo1/assets/media/illustrations/sketchy-1/13.png"></div>
						<!--end::Illustration-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Aside-->
				<!--begin::Body-->
				<div class="d-flex flex-column flex-lg-row-fluid py-10">
					<!--begin::Content-->
					<div class="d-flex flex-center flex-column flex-column-fluid">
						<!--begin::Wrapper-->
						<div class="w-lg-500px p-10 p-lg-15 mx-auto">
							<!--begin::Form-->
								@yield('content')
							<!--end::Form-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Content-->
				</div>
				<!--end::Body-->
			</div>
			<!--end::Authentication - Sign-in-->
		</div>
		<!--end::Main-->
		<script>var hostUrl = "/";</script>
		<!--begin::Javascript-->
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="{{ URL::asset('plugins/global/plugins.bundle.js') }}"></script>
		<script src="{{ URL::asset('js/scripts.bundle.js') }}"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="{{ URL::asset('js/custom/authentication/sign-in/general.js') }}"></script>
		<!--end::Page Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>