@extends("layouts.app")

@section("content")
	<div class="min-h-screen relative bg-white">
		{{-- navbar --}}
		<x-navbar />

		{{-- bg awan --}}
		<div class="hidden md:block">
			<img src="{{ asset('images/cloud-auth.svg') }}" alt="cloud" class="absolute bottom-0 right-0">
		</div>

		<div class="pt-10 md:pt-28 pb-0 md:pb-16 mt-2 md:mt-0 max-w-2xl mx-auto z-30 relative" x-data="{ validationError: false, isVisible: false }">
			{{-- validationError digunakan untuk sample ketika validasi error --}}
			<div class="bg-white rounded-xl py-8 px-5 md:px-16 shadow-none md:shadow-card-login flex flex-col h-9/10 md:h-auto">
				<div class="flex justify-between items-center">
					<div class="text-xl md:text-3.5xl font-bold" @click="validationError = !validationError">Register</div>
					<div>
						<div class="text-sm hidden md:block">Sudah punya akun? <a href="/login" class="font-bold text-klinik-primary pl-1">Login</a></div>
						<a href="/" class="text-gray-800 md:hidden">
							<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
						</a>
					</div>
				</div>
				<div class="mt-2 md:mt-4 text-xs md:text-base">
					Daftarkan dirimu sekarang untuk melakukan konsultasi Dokter dan pembelian produk
				</div>
				<div class="mt-8 space-y-4 md:space-y-6 flex-grow">

					<div>
						<label for="name" class="block text-sm font-bold">Nama Lengkap</label>
						<div class="mt-2">
							<input required type="text" name="name" id="name" class="shadow-sm focus:outline-none block w-full md:text-sm border border-gray-200 bg-gray-50 rounded-md px-3 py-2.5 md:py-3" :class="{ 'border-red-500 border-2': validationError }" placeholder="Nama Lengkap">
							{{-- info error validasi --}}
							<div x-show="validationError" class="text-red-500 mt-1">
								*Isi bidang setidaknya 3 karakter
							</div>
						</div>
					</div>

          <div class="block md:flex">
						<div class="w-full mr-0 md:mr-3 mb-8 md:mb-0" x-data="{ gender: 'MALE' }">
							<label for="gender" class="block text-sm font-bold">Jenis Kelamin</label>
							<div class="mt-1 flex border border-gray-200 bg-gray-50 rounded-md uppercase">
								<div class="w-full flex items-center justify-center cursor-pointer rounded-l-md" :class="{'bg-klinik-primary text-white' : gender === 'MALE'}" style="height: 44px" @click="gender = 'MALE'">
									Laki-laki
								</div>
								<div class="w-full flex items-center justify-center cursor-pointer rounded-r-md"  :class="{'bg-klinik-primary text-white' : gender === 'FEMALE'}" style="height: 44px" @click="gender = 'FEMALE'">
									Perempuan
								</div>
							</div>
						</div>
						<div class="w-full">
							<label for="province" class="block text-sm font-bold">Tanggal Lahir</label>
							<div class="mt-1">
								<input required type="date" name="province" id="province" class="shadow-sm focus:outline-none block w-full md:text-sm border border-gray-200 bg-gray-50 rounded-md px-3 py-2.5">
							</div>
						</div>
					</div>

					<div>
						<label for="phone" class="block text-sm font-bold">No. Handphone</label>
						<div class="mt-2">
							<input required type="text" name="phone" id="phone" class="shadow-sm focus:outline-none block w-full md:text-sm border border-gray-200 bg-gray-50 rounded-md px-3 py-2.5 md:py-3" :class="{ 'border-red-500 border-2': validationError }" placeholder="0812345678910">
							<div x-show="validationError" class="text-red-500 mt-1">
								*Nomor Telepon tidak valid
							</div>
						</div>
					</div>

					<div>
						<label for="email" class="block text-sm font-bold">Alamat Email</label>
						<div class="mt-2">
							<input required type="text" name="email" id="email" class="shadow-sm focus:outline-none block w-full md:text-sm border border-gray-200 bg-gray-50 rounded-md px-3 py-2.5 md:py-3" :class="{ 'border-red-500 border-2': validationError }" placeholder="mailaddress@mail">
							<div x-show="validationError" class="text-red-500 mt-1">
								*Bagian ini wajib diisi
							</div>
						</div>
					</div>

					<div class="">
						<label for="password" class="block text-sm font-bold">Password</label>
						<div class="mt-2 shadow-sm focus:outline-none w-full md:text-sm border border-gray-200 bg-gray-50 rounded-md px-3 py-2 flex items-center" :class="{ 'border-red-500 border-2': validationError }">
							<input required :type="isVisible ? 'text' : 'password'" name="password" id="password" class="focus:outline-none block w-full md:text-sm bg-gray-50" placeholder="Password">
							<div class="text-gray-400 p-1 rounded-md hover:bg-gray-200 cursor-pointer" @click="isVisible = !isVisible">
								<svg x-show="isVisible === true" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
								<svg x-show="isVisible === false" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"></path></svg>
							</div>
						</div>
						<div x-show="validationError" class="text-red-500 mt-1">
							*Isi bidang setidaknya 8 karakter
						</div>
					</div>

          <div class="w-full mr-0 md:mr-3 mb-8 md:mb-0" x-data="{ patientType: 'NEW' }">
						<div class="space-y-4 md:space-y-6">
							<label for="patientType" class="block text-sm font-bold">Tipe Pasien</label>
							<div class="mt-1 flex border border-gray-200 bg-gray-50 rounded-md uppercase">
								<div class="w-full flex items-center justify-center cursor-pointer rounded-l-md" :class="{'bg-klinik-primary text-white' : patientType === 'NEW'}" style="height: 44px" @click="patientType = 'NEW'">
									Pasien Baru
								</div>
								<div class="w-full flex items-center justify-center cursor-pointer rounded-r-md"  :class="{'bg-klinik-primary text-white' : patientType === 'OLD'}" style="height: 44px" @click="patientType = 'OLD'">
									Pasien Lama
								</div>
							</div>
							<div x-show="patientType === 'OLD'">
								<label for="phone" class="block text-sm font-bold">No. Member</label>
								<div class="mt-2">
									<input required type="text" name="phone" id="phone" class="shadow-sm focus:outline-none block w-full md:text-sm border border-gray-200 bg-gray-50 rounded-md px-3 py-2.5 md:py-3" placeholder="123123">
								</div>
							</div>
						</div>
          </div>


				</div>
				<div class="mt-8 flex-grow-0 pb-4 md:pb-0">
          <div class="text-center md:text-left mb-8 md:mb-4">
            Dengan mengklik Register, Anda <a href="/terms-and-conditions" class="text-klinik-primary font-bold underline">menyetujui Syarat dan Ketentuan</a> Klinik Estetika dr. Affandi.
          </div>
					<button
						class="w-full py-2 bg-klinik-primary text-white rounded-full font-semibold btn-focus-primary text-sm md:text-base"
					>
						REGISTER
					</button>
					<div class="text-sm text-center mt-3 md:hidden">Sudah punya akun? <a href="/login" class="font-bold text-klinik-primary pl-1">Login</a></div>
				</div>
			</div>

		</div>
	</div>
@endsection
