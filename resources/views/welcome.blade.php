<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />

        <!-- Styles -->
        <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
	<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
        <div class="d-flex flex-column flex-root">
			<!-- Page -->
			<div class="flex-row page d-flex flex-column-fluid">
				<!-- Aside -->
				<x-aside></x-aside>

				<!-- Wrapper -->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					<!-- Header -->
					<x-header></x-header>

					<!-- Content -->
					<div class="p-0 content d-flex flex-column flex-column-fluid" id="kt_content">
						@yield('content')
					</div>

					<!-- Footer -->
					{{-- <x-footer></x-footer> --}}
				</div>
			</div>
		</div>
		
        <!-- Scripts -->
		@livewireScripts

        <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
		<script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>

        @stack('script')
    </body>
</html>
