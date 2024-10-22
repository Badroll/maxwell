@extends("layouts.app")

@section("content")
<x-layout-app withNavbar withFooter withBottomNavbar>
	<div x-data="{ openModal: false }">
		<div class="max-w-7xl mx-auto px-5 md:px-6 lg:px-8">
			<div class="max-w-4xl mx-auto">
				<div class="font-bold text-center text-lg md:text-4xl pt-10 md:pt-20  mb-6 md:mb-12">
					Frequently Asked Questions
				</div>
				<div class="space-y-5">
				<x-accordion title="Berapa biaya perawatan di Klinik Estetika dr. Affandi ? Apakah pasien dikenakan biaya konsultasi?">
					{{-- replace dengan konten --}}
					<p>Jawaban</p>
				</x-accordion>
				<x-accordion title="Bagaimana caranya bila saya ingin tahu jadwal praktek Dokter di Klinik Estetika dr. Affandi?">
					{{-- replace dengan konten --}}
					<p>Jawaban</p>
				</x-accordion>
				<x-accordion title="Saya ingin menggunakan produk perawatan dari Klinik Estetika dr. Affandi, tetapi tidak ada cabang Klinik Estetika di kota tempat saya tinggal. Bagaimana solusinya?">
					{{-- replace dengan konten --}}
					<p>Jawaban</p>
				</x-accordion>
				<x-accordion title="Bagaimana cara mendaftar ”LIVE VIDEO CONSULTATION”?">
					{{-- replace dengan konten --}}
					<p>Jawaban</p>
				</x-accordion>
				<x-accordion title="Bagaimana cara melakukan ”LIVE CHAT CONSULTATION”?">
					{{-- replace dengan konten --}}
					<p>Jawaban</p>
				</x-accordion>
				<x-accordion title="Bagaimana cara melakukan ”PHOTO CONSULTATION”?">
					{{-- replace dengan konten --}}
					<p>Jawaban</p>
				</x-accordion>
				<x-accordion title="Bisa tidak kalau saya hanya membeli produk Klinik Estetika dr. Affandi tanpa konsultasi Dokter terlebih dahulu?">
					{{-- replace dengan konten --}}
					<p>Jawaban</p>
				</x-accordion>
				<x-accordion title="Bagaimana caranya saya memperoleh info produk dan harganya, serta bagaimana proses pembeliannya, apakah bisa membeli secara online?">
					{{-- replace dengan konten --}}
					<p>Jawaban</p>
				</x-accordion>
				<x-accordion title="Apakah saya bisa konsultasi ulang melalui website?">
					{{-- replace dengan konten --}}
					<p>Jawaban</p>
				</x-accordion>
				<x-accordion title="Saya sudah menjadi pasien Klinik Estetika dr. Affandi tetapi saat hendak memesan Lotion Malam kenapa harus konsultasi terlebih dahulu?">
					{{-- replace dengan konten --}}
					<p>Jawaban</p>
				</x-accordion>
				<x-accordion title="Apakah ada link antar cabang Klinik Estetika dr. Affandi, sehingga saya bisa periksa di cabang mana saja?">
					{{-- replace dengan konten --}}
					<p>Jawaban</p>
				</x-accordion>
				<x-accordion title="Bolehkah menggunakan make-up produk lain selagi saya menggunakan perawatan Klinik Estetika dr. Affandi? Misalnya, menggunakan bedak tabur atau blush-on produk bebas?">
					{{-- replace dengan konten --}}
					<p>Jawaban</p>
				</x-accordion>
				<x-accordion title="Apakah produk perawatan dari Klinik Estetika dr. Affandi bisa menyebabkan ketergantungan?">
					{{-- replace dengan konten --}}
					<p>Jawaban</p>
				</x-accordion>
				<x-accordion title="Apakah fungsi kartu member Klinik Estetika dr. Affandi?">
					{{-- replace dengan konten --}}
					<p>Jawaban</p>
				</x-accordion>
				<x-accordion title="Bila kulit wajah saya sudah sehat / bagus, apakah saya harus terus menggunakan produk perawatan dari Klinik Estetika dr. Affandi?">
					Kami sarankan untuk tetap di-”maintain” / dijaga supaya kulit tetap sehat dan terlihat bercahaya. Caranya dengan tetap menggunakan produk perawatan tetapi tidak perlu setiap hari. Hanya Krim Tirai Sinar Matahari saja yang wajib digunakan setiap hari.
				</x-accordion>
			</div>
			<div
				class="font-semibold py-5 text-center rounded-lg mt-10"
				style="box-shadow: 0px 5px 20px rgba(12, 67, 183, 0.08);"
			>
				Apabila tidak menemukan jawaban dari pertanyaan,<br>
				silakan kirim pertanyaan melalui <button class="text-klinik-primary" @click="openModal = true">link berikut</button>.
			</div>
		</div>

		{{-- modal --}}
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
							<h3 class="leading-6 mt-6 font-extrabold text-base md:text-4xl text-center" id="modal-title">
								Get In Touch With Us
							</h3>
							<div class="text-center mt-4">
								Apabila Anda mempunyai pertanyaan seputar produk maupun pelayanan<br> Estetika dr. Affandi, silahkan hubungi kami.
							</div>
							<div class="mt-12 space-y-6">
								<div class="block md:flex gap-6 space-y-6 md:space-y-0">
									<div class="w-full md:w-1/2">
										<input required type="text" name="name" id="name" class="shadow-sm focus:outline-none block w-full md:text-sm border border-gray-200 bg-gray-50 rounded-md px-3 py-2.5" placeholder="Name">
									</div>
									<div class="w-full md:w-1/2">
										<input required type="email" name="email" id="email" class="shadow-sm focus:outline-none block w-full md:text-sm border border-gray-200 bg-gray-50 rounded-md px-3 py-2.5" placeholder="Email">
									</div>
								</div>
								<div>
									<input required type="text" name="subject" id="subject" class="shadow-sm focus:outline-none block w-full md:text-sm border border-gray-200 bg-gray-50 rounded-md px-3 py-2.5" placeholder="Subject">
								</div>
								<div>
									<textarea required id="message" name="message" rows="4" class="shadow-sm focus:outline-none block w-full sm:text-sm border border-gray-200 bg-gray-50 rounded-md px-3 py-2.5" placeholder="Message"></textarea>
								</div>
							</div>
						</div>
					</div>
					<div class="mt-5">
						<button type="button" class="w-full inline-flex justify-center rounded-full border border-transparent shadow-sm px-4 py-2 bg-klinik-primary text-base font-medium text-white hover:bg-klinik-primary-dark focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-klinik-primary md:col-start-2 md:text-sm">
							SUBMIT
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</x-layout-app>
@endsection
