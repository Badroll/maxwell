@extends("layouts.app")

@section("content")
	<div class="min-h-screen relative bg-white">
		{{-- navbar --}}
		<x-navbar />
		{{-- bg awan --}}
		<div class="hidden md:block">
			<img src="{{ asset('images/cloud-auth.svg') }}" alt="cloud" class="absolute bottom-0 right-0">
		</div>

		<div class="pt-12 md:pt-32 mt-2 md:mt-0 max-w-2xl mx-auto z-30 relative">
			<div class="bg-white rounded-xl py-8 px-5 md:px-16 shadow-none md:shadow-card-login flex flex-col h-9/10 md:h-auto">
				<div class="flex justify-between items-center">
					<div class="text-xl md:text-3.5xl font-bold">Anda Lupa Password?</div>
					<div>
						<a href="/" class="text-gray-800 md:hidden">
							<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
						</a>
					</div>
				</div>
				<div class="mt-2 md:mt-4 text-xs md:text-base">
					Masukkan email Anda, kami akan mengirim link untuk mengatur ulang password akun Anda.
				</div>
				<div class="mt-8 space-y-4 md:space-y-6 flex-grow">
					<div>
						<label for="email" class="block text-sm font-bold">Alamat Email</label>
						<div class="mt-2">
							<input required type="text" name="email" id="email" class="shadow-sm focus:outline-none block w-full md:text-sm border border-gray-200 bg-gray-50 rounded-md px-3 py-2.5 md:py-3 text-sm" placeholder="mailaddress@mail">
						</div>
					</div>
				</div>
				<div class="mt-28 flex-grow-0">
					<button
						class="w-full py-2 bg-klinik-primary text-white rounded-full font-semibold btn-focus-primary text-sm"
					>
						KIRIM
					</button>
					<div class="text-sm text-center mt-3 md:hidden">Sudah punya akun? <a href="/login" class="font-bold text-klinik-primary pl-1">Masuk</a></div>
				</div>
			</div>

		</div>
	</div>
@endsection
