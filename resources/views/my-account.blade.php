@extends("layouts.app")

@section("content")
<x-layout-app withNavbar withFooter withBottomNavbar>
	<div x-data="{ openModal: false, openModalLiveChat: false }">
		<div class="max-w-8xl mx-auto px-5 md:px-8 lg:px-16">
			<div class="pt-6 md:pt-24 flex items-center justify-between md:justify-start">
				<div class="text-lg md:text-3.5xl font-extrabold mr-8">
					My Account
				</div>
				<div>
					<button class="py-2 px-4 bg-klinik-primary text-white rounded-full font-bold text-xs btn-focus-primary flex items-center" @click="openModal = true">
						<div class="w-4 h-4 mr-1.5">
							<svg className="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" /></svg>
						</div>
						<div>
							EDIT
						</div>
					</button>
				</div>
			</div>
			<div class="mt-6 md:mt-8 mb-20 md:mb-40 grid grid-cols-4 gap-8">
				<div class="grid col-span-4 md:col-span-2">
					<div class="bg-gray-100 p-4 md:p-7 border border-gray-300 rounded-2xl shadow-card-home">
						<div class="flex items-center">
							<div class="mr-8">
								<img src="{{ asset('images/profile.svg') }}" alt="profile" class="w-24 h-24 rounded full">
							</div>
							<div>
								<div class="font-bold text-sm md:text-lg mb-2">Jessica Kandaris</div>
								<div class="text-xs md:text-sm">Perempuan</div>
							</div>
						</div>
						<div class="mt-8 space-y-3">
							<div class="flex text-xs md:text-sm">
								<div class="w-4/12">No. Rekam Medis</div>
								<div class="w-8/12 font-bold">123456</div>
							</div>
							<div class="flex text-xs md:text-sm">
								<div class="w-4/12">No. Handphone</div>
								<div class="w-8/12 font-bold">0812345678910</div>
							</div>
							<div class="flex text-xs md:text-sm">
								<div class="w-4/12">Alamat Email</div>
								<div class="w-8/12 font-bold">mailaddress@mail</div>
							</div>
							<div class="flex text-xs md:text-sm">
								<div class="w-4/12">Tanggal Lahir</div>
								<div class="w-8/12 font-bold">1 Januari 1992</div>
							</div>
							<div class="flex text-xs md:text-sm">
								<div class="w-4/12">Alamat</div>
								<div class="w-8/12 font-bold">Jl. Kyai Tamim 81, Blitar, Jawa Timur, 51920</div>
							</div>
						</div>
					</div>
					<div class="mt-6">
						<a href="/change-password" class="py-2 w-full bg-klinik-primary text-white rounded-full font-bold text-sm btn-focus-primary flex items-center justify-center">
							<div class="w-4 h-4 mr-1.5">
								<svg className="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" /></svg>
							</div>
							<div>
								UBAH PASSWORD
							</div>
						</a>
					</div>
				</div>
				<div class="col-span-4 md:col-span-2 grid grid-cols-2 gap-8">
					<a href="/order-list" class="bg-gray-100 border border-gray-300 rounded-2xl flex flex-col justify-center items-center p-5 shadow-card-home">
						<div class="mb-2 md:mb-6">
							<img src="{{ asset('images/ic-riwayat-pesanan.svg') }}" alt="icon" class="w-10 h-10 mx-auto">
						</div>
						<div class="font-bold text-center text-xs md:text-base">Riwayat Pesanan</div>
					</a>
					<a href="/photo-consultation-list" class="bg-gray-100 border border-gray-300 rounded-2xl flex flex-col justify-center items-center p-5 shadow-card-home">
						<div class="mb-2 md:mb-6">
							<img src="{{ asset('images/konsul-foto.svg') }}" alt="icon" class="w-10 h-10 mx-auto">
						</div>
						<div class="font-bold text-center text-xs md:text-base">Photo Consultation</div>
					</a>
					<a href="/video-consultation-list" class="bg-gray-100 border border-gray-300 rounded-2xl flex flex-col justify-center items-center p-5 shadow-card-home">
						<div class="mb-2 md:mb-6">
							<img src="{{ asset('images/konsul-video.svg') }}" alt="icon" class="w-10 h-10 mx-auto">
						</div>
						<div class="font-bold text-center text-xs md:text-base">Live Video Consultation</div>
					</a>
					<button @click="openModalLiveChat = true" class="bg-gray-100 border border-gray-300 rounded-2xl flex flex-col justify-center items-center p-5 shadow-card-home focus:outline-none">
						<div class="mb-2 md:mb-6">
							<img src="{{ asset('images/konsul-chat.svg') }}" alt="icon" class="w-10 h-10 mx-auto">
						</div>
						<div class="font-bold text-center text-xs md:text-base">Live Chat Consultation</div>
					</button>
				</div>
			</div>
		</div>
		
		{{-- modal edit user --}}
		<div x-cloak x-show="openModal" class="fixed z-50 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
			<div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center md:block md:p-0">
				<div 
					x-show="openModal" 
					x-transition:enter="ease-out duration-300"
					x-transition:enter-start="opacity-0"
					x-transition:enter-end="opacity-100"
					x-transition:leave="ease-in duration-200"
					x-transition:leave-start="opacity-100"
					x-transition:leave-end="opacity-0" 
					class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"
				></div>
	
				<!-- This element is to trick the browser into centering the modal contents. -->
				<span class="hidden md:inline-block md:align-middle md:h-screen" aria-hidden="true">&#8203;</span>
				<div 
					x-show="openModal" 
					x-transition:enter="ease-out duration-300"
					x-transition:enter-start="opacity-0 translate-y-4 md:translate-y-0 md:scale-95"
					x-transition:enter-end="opacity-100 translate-y-0 md:scale-100"
					x-transition:leave="ease-in duration-200"
					x-transition:leave-start="opacity-100 translate-y-0 md:scale-100"
					x-transition:leave-end="opacity-0 translate-y-4 md:translate-y-0 md:scale-95" 
					class="inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all md:my-8 md:align-middle max-w-full w-full md:max-w-2xl md:w-full md:p-6 relative z-50"
				>
					<div class="flex justify-end absolute top-2 right-2">
						<div class="p-1 rounded-lg hover:bg-gray-100 text-gray-800 cursor-pointer" @click="openModal = false">
							<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
						</div>
					</div>
					<div>
						<div class="">
							<h3 class="leading-6 font-extrabold text-xl  text-klinik-primary text-center mt-3" id="modal-title">
								Edit Account
							</h3>
							<div class="mt-6 space-y-8 overflow-y-auto px-2 md:px-6" style="max-height: 500px;">
								<div>
									<label for="name" class="block text-sm font-bold">Nama Lengkap <span class="ordinal">*</span></label>
									<div class="mt-1">
										<input required type="text" name="name" id="name" class="shadow-sm focus:outline-none block w-full md:text-sm border border-gray-200 bg-gray-50 rounded-md px-3 py-2.5">
									</div>
								</div>
								<div class="block md:flex">
									<div class="w-full mr-0 md:mr-3 mb-8 md:mb-0" x-data="{ gender: 'MALE' }">
										<label for="gender" class="block text-sm font-bold">Jenis Kelamin <span class="ordinal">*</span></label>
										<div class="mt-1 flex border border-gray-200 bg-gray-50 rounded-md">
											<div class="w-full flex items-center justify-center cursor-pointer rounded-l-md" :class="{'bg-klinik-primary text-white' : gender === 'MALE'}" style="height: 44px" @click="gender = 'MALE'">
												Laki-laki
											</div>
											<div class="w-full flex items-center justify-center cursor-pointer rounded-r-md"  :class="{'bg-klinik-primary text-white' : gender === 'FEMALE'}" style="height: 44px" @click="gender = 'FEMALE'">
												Perempuan
											</div>
										</div>
									</div>
									<div class="w-full">
										<label for="birthday" class="block text-sm font-bold">Tanggal Lahir <span class="ordinal">*</span></label>
										<div class="mt-1">
											<input required type="date" name="birthday" id="birthday" class="shadow-sm focus:outline-none block w-full md:text-sm border border-gray-200 bg-gray-50 rounded-md px-3 py-2.5">
										</div>
									</div>
								</div>
								<div>
									<label for="phone" class="block text-sm font-bold">No. Handphone <span class="ordinal">*</span></label>
									<div class="mt-1">
										<input required type="text" name="phone" id="phone" class="shadow-sm focus:outline-none block w-full md:text-sm border border-gray-200 bg-gray-50 rounded-md px-3 py-2.5">
									</div>
								</div>
								<div>
									<label for="email" class="block text-sm font-bold">Alamat Email <span class="ordinal">*</span></label>
									<div class="mt-1">
										<input required type="text" name="email" id="email" class="shadow-sm focus:outline-none block w-full md:text-sm border border-gray-200 bg-gray-50 rounded-md px-3 pl-3 pr-10 py-2">
									</div>
								</div>
								<div class="block md:flex gap-4 space-y-8 md:space-y-0">
									<div class="md:w-1/3">
										<label for="province" class="block text-sm font-bold">Provinsi <span class="ordinal">*</span></label>
										<div class="mt-1">
											<div class="mt-1">
											<select id="province" name="province" class="shadow-sm focus:outline-none block w-full md:text-sm border border-gray-200 bg-gray-50 rounded-md pl-3 pr-10 py-2">
												<option>Jawa Barat</option>
												<option>Jawa Tengah</option>
												<option>Jawa Timur</option>
											</select>
										</div>
										</div>									
									</div>
									<div class="md:w-1/3">
										<label for="city" class="block text-sm font-bold">Kota <span class="ordinal">*</span></label>
										<div class="mt-1">
											<select id="city" name="city" class="shadow-sm focus:outline-none block w-full md:text-sm border border-gray-200 bg-gray-50 rounded-md px-3 py-2.5">
												<option>Bandung</option>
												<option>Semarang</option>
												<option>Surabaya</option>
											</select>
										</div>
									</div>
									<div class="md:w-1/3">
										<label for="postalCode" class="block text-sm font-bold">Kode Pos <span class="ordinal">*</span></label>
										<div class="mt-1">
											<input required type="text" name="postalCode" id="postalCode" class="shadow-sm focus:outline-none block w-full md:text-sm border border-gray-200 bg-gray-50 rounded-md px-3 py-2.5">
										</div>
									</div>
								</div>
								<div>
									<label for="address" class="block text-sm font-bold">Alamat <span class="ordinal">*</span></label>
									<div class="mt-1">
										<textarea required id="address" name="address" rows="3" class="shadow-sm focus:outline-none block w-full sm:text-sm border border-gray-200 bg-gray-50 rounded-md px-3 py-2.5 text-black" placeholder="Message"></textarea>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="mt-5 md:mt-6 md:grid md:grid-cols-2 md:gap-5 md:grid-flow-row-dense">
						<button type="button" class="w-full inline-flex justify-center rounded-full border border-transparent shadow-sm px-4 py-2 bg-klinik-primary text-base font-medium text-white hover:bg-klinik-primary-dark focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-klinik-primary md:col-start-2 md:text-sm">
							SIMPAN
						</button>
						<button type="button" class="mt-3 w-full inline-flex justify-center rounded-full border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 md:mt-0 md:col-start-1 md:text-sm" @click="openModal = false">
							BATAL
						</button>
					</div>
				</div>
			</div>
		</div>

		{{-- modal live chat --}}
		<div x-cloak x-show="openModalLiveChat" class="fixed z-50 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
			<div class="flex items-center justify-center min-h-screen p-4 text-center md:block md:p-0">
				<div 
					x-show="openModalLiveChat" 
					x-transition:enter="ease-out duration-300"
					x-transition:enter-start="opacity-0"
					x-transition:enter-end="opacity-100"
					x-transition:leave="ease-in duration-200"
					x-transition:leave-start="opacity-100"
					x-transition:leave-end="opacity-0" 
					class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" 
					aria-hidden="true"
				></div>

				<!-- This element is to trick the browser into centering the modal contents. -->
				<span class="hidden md:inline-block md:align-middle md:h-screen" aria-hidden="true">&#8203;</span>

				<!-- Modal panel, show/hide based on modal state. -->
				<div 
					x-show="openModalLiveChat" 
					x-transition:enter="ease-out duration-300"
					x-transition:enter-start="opacity-0 translate-y-4 md:translate-y-0 md:scale-95"
					x-transition:enter-end="opacity-100 translate-y-0 md:scale-100"
					x-transition:leave="ease-in duration-200"
					x-transition:leave-start="opacity-100 translate-y-0 md:scale-100"
					x-transition:leave-end="opacity-0 translate-y-4 md:translate-y-0 md:scale-95"
					class="inline-block rounded-lg p-6 text-left overflow-hidden shadow-xl transform transition-all md:my-8 align-middle md:max-w-4xl md:w-full bg-no-repeat bg-cover bg-center bg-popup-chat-app"
					@click.away="openModalLiveChat = false"
					style="height: 487px;"
				>
					<div class="block absolute top-0 right-0 pt-4 pr-4">
						<button type="button" class="rounded-md text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-klinik-primary" @click="openModalLiveChat = false">
							<span class="sr-only">Close</span>
							<!-- Heroicon name: outline/x -->
							<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
						</button>
					</div>
					<div class="flex h-full">
						<div class="w-1/2 hidden sm:block"></div>
						<div class="w-full sm:w-1/2">
							<div class="flex h-full items-center">
								<div class="mt-3 text-left">
									<h3 class="text-2xl md:text-3xl mb-3 font-bold text-white leading-relaxed" id="modal-title">
										Layanan Live Chat Consultation hanya tersedia di Estetika Mobile Apps.
									</h3>
									<div class="mt-2">
										<p class="text-sm sm:text-base text-white leading-relaxed">
											Silakan download Estetika Mobile Apps.
										</p>
									</div>
									<div class="flex mt-3">
										<a href="https://apps.apple.com/id/app/klinik-estetika-dr-affandi/id1446841848">
											<img src="{{asset('images/footer/app-store.svg')}}" alt="app" />
										</a>
										<a href="https://play.google.com/store/apps/details?id=com.klinikestetika.affandi">
											<img src="{{asset('images/footer/google-play.svg')}}" alt="app" class="ml-5" />
										</a>
									</div>
									<div class="mt-3 text-white text-sm sm:text-base">Atau scan QR Code</div>
									<div class="mt-3">
										<img src="{{asset('images/home/qr-download.svg')}}" alt="qr-code" class="h-24 w-24">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</x-layout-app>
@endsection
