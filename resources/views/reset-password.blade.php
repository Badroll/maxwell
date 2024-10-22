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
					<div class="text-xl md:text-3.5xl font-bold">Buat Password Baru</div>
					<div>
						<a href="/" class="text-gray-800 md:hidden">
							<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
						</a>
					</div>
				</div>
				<div class="mt-2 md:mt-4 text-xs md:text-base">
					Panjang password minimal 5 karakter
				</div>
				<div class="mt-8 space-y-4 md:space-y-6 flex-grow">
					<div class="" x-data="{ isVisible: false }">
						<label for="password" class="block text-sm font-bold">Password Baru</label>
						<div class="mt-2 shadow-sm focus:outline-none w-full md:text-sm border border-gray-200 bg-gray-50 rounded-md px-3 py-2 flex items-center">
							<input required :type="isVisible ? 'text' : 'password'" name="password" id="password" class="focus:outline-none block w-full md:text-sm bg-gray-50 text-sm" placeholder="Masukan password baru">
							<div class="text-gray-400 p-1 rounded-md hover:bg-gray-200 cursor-pointer" @click="isVisible = !isVisible">
								<svg x-show="isVisible === true" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
								<svg x-show="isVisible === false" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"></path></svg>
							</div>
						</div>
					</div>
					<div class="" x-data="{ isVisible: false }">
						<label for="password" class="block text-sm font-bold">Konfirmasi Password Baru</label>
						<div class="mt-2 shadow-sm focus:outline-none w-full md:text-sm border border-gray-200 bg-gray-50 rounded-md px-3 py-2 flex items-center">
							<input required :type="isVisible ? 'text' : 'password'" name="password" id="password" class="focus:outline-none block w-full md:text-sm bg-gray-50 text-sm" placeholder="Masukan kembali password baru">
							<div class="text-gray-400 p-1 rounded-md hover:bg-gray-200 cursor-pointer" @click="isVisible = !isVisible">
								<svg x-show="isVisible === true" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
								<svg x-show="isVisible === false" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"></path></svg>
							</div>
						</div>
					</div>
					
				</div>
				<div class="mt-8 flex-grow-0">
					<button
						class="w-full py-2 bg-klinik-primary text-white rounded-full font-semibold btn-focus-primary text-sm"
					>
						SIMPAN PASSWORD BARU
					</button>
				</div>
			</div>

		</div>
	</div>
@endsection
