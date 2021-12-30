@extends('auth.main')

@section('content')
	<form class="form w-100" id="kt_sign_in_form" action="{{ route('login') }}" method="post">
    @csrf

		<!--begin::Heading-->
		<div class="text-center">
			<!--begin::Title-->
			<img alt="Logo" src="{{ URL::asset('media/logos/F3X-Horizontal-Black.png')}}" width="80%" class="h-120px" />
			<!--end::Title-->
			<!--begin::Link-->
			<div class="d-none text-gray-400 fw-bold fs-4">Acesse sua conta</div>
			<!--end::Link-->
		</div>
		<!--begin::Heading-->

		@if($errors->all())
			@foreach ($errors->all() as $e)
				<div class="alert alert-danger">
					<small class="">{{ $e }}</small>
				</div>
			@endforeach
		@endif

		<!--begin::Input group-->
		<div class="input-group mb-5">
			<span class="input-group-text" id="basic-addon1">
				<!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
				<span class="svg-icon svg-icon-2x">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
						<path opacity="0.3" d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z" fill="black"/>
						<path d="M12.0006 11.1542C13.1434 11.1542 14.0777 10.22 14.0777 9.0771C14.0777 7.93424 13.1434 7 12.0006 7C10.8577 7 9.92348 7.93424 9.92348 9.0771C9.92348 10.22 10.8577 11.1542 12.0006 11.1542Z" fill="black"/>
						<path d="M15.5652 13.814C15.5108 13.6779 15.4382 13.551 15.3566 13.4331C14.9393 12.8163 14.2954 12.4081 13.5697 12.3083C13.479 12.2993 13.3793 12.3174 13.3067 12.3718C12.9257 12.653 12.4722 12.7981 12.0006 12.7981C11.5289 12.7981 11.0754 12.653 10.6944 12.3718C10.6219 12.3174 10.5221 12.2902 10.4314 12.3083C9.70578 12.4081 9.05272 12.8163 8.64456 13.4331C8.56293 13.551 8.49036 13.687 8.43595 13.814C8.40875 13.8684 8.41781 13.9319 8.44502 13.9864C8.51759 14.1133 8.60828 14.2403 8.68991 14.3492C8.81689 14.5215 8.95295 14.6757 9.10715 14.8208C9.23413 14.9478 9.37925 15.0657 9.52439 15.1836C10.2409 15.7188 11.1026 15.9999 11.9915 15.9999C12.8804 15.9999 13.7421 15.7188 14.4586 15.1836C14.6038 15.0748 14.7489 14.9478 14.8759 14.8208C15.021 14.6757 15.1661 14.5215 15.2931 14.3492C15.3838 14.2312 15.4655 14.1133 15.538 13.9864C15.5833 13.9319 15.5924 13.8684 15.5652 13.814Z" fill="black"/>
					</svg>
				</span>
				<!--end::Svg Icon-->
			</span>
			<input type="email" value="{{ old('email') }}" required="required" name="email" class="form-control form-control-lg" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1"/>
		</div>
		<!--end::Input group-->

		<!--begin::Input group-->
		<div class="input-group mb-5">
			<span class="input-group-text" id="basic-addon1">
				<!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
				<span class="svg-icon svg-icon-2x">
					<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none">
						<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black"/>
						<path d="M15.8054 11.639C15.6757 11.5093 15.5184 11.4445 15.3331 11.4445H15.111V10.1111C15.111 9.25927 14.8055 8.52784 14.1944 7.91672C13.5833 7.30557 12.8519 7 12 7C11.148 7 10.4165 7.30557 9.80547 7.9167C9.19432 8.52784 8.88885 9.25924 8.88885 10.1111V11.4445H8.66665C8.48153 11.4445 8.32408 11.5093 8.19444 11.639C8.0648 11.7685 8 11.926 8 12.1112V16.1113C8 16.2964 8.06482 16.4539 8.19444 16.5835C8.32408 16.7131 8.48153 16.7779 8.66665 16.7779H15.3333C15.5185 16.7779 15.6759 16.7131 15.8056 16.5835C15.9351 16.4539 16 16.2964 16 16.1113V12.1112C16.0001 11.926 15.9351 11.7686 15.8054 11.639ZM13.7777 11.4445H10.2222V10.1111C10.2222 9.6204 10.3958 9.20138 10.7431 8.85421C11.0903 8.507 11.5093 8.33343 12 8.33343C12.4909 8.33343 12.9097 8.50697 13.257 8.85421C13.6041 9.20135 13.7777 9.6204 13.7777 10.1111V11.4445Z" fill="black"/>
					</svg>
				</span>
				<!--end::Svg Icon-->
			</span>
			<input type="password" required="required" name="password" class="form-control form-control-lg" placeholder="Senha" aria-label="Senha" aria-describedby="basic-addon1"/>
		</div>
		<!--end::Input group-->

		<div class="form-check form-switch form-check-custom form-check-solid form-check-sm mb-3 d-none">
			<input value="{{ old('remember') }}" name="remember" id="remember_me" class="form-check-input" type="checkbox"/>
			<label class="form-check-label" for="remember_me">
				Manter-me conectado
			</label>
			<!--begin::Switch-->
		</div>

		<button type="submit" class="btn btn-dark col-12">Acessar<i class="fas fa-sign-in-alt fs-2 m-2"></i></button>
		
		<!--begin::Wrapper-->
		<div class="text-center mt-3 d-none">
			<!--begin::Link-->
			<a href="{{ route('auth.senha.recuperar') }}" class="link-dark fs-6 sfw-bolder">Esqueceu sua senha ?</a>
			<!--end::Link-->
		</div>
		<!--end::Wrapper-->
    
	</form>
@endsection