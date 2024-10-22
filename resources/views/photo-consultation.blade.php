@extends("layouts.app")

@section("content")
<x-layout-app withNavbar withFooter withBottomNavbar="false">
	<div x-data="{ step: 1, isAllergyMedicine: '', isAllergyOintment: '' }">
		<div class="max-w-8xl mx-auto px-5 md:px-8 lg:px-16">
			{{-- header navigation --}}
			<div class="pt-6 md:pt-24 flex items-center justify-between">
				<div class="text-lg md:text-3.5xl font-extrabold">
					<a href="/photo-consultation-list">Photo Consultation</a>
				</div>
				<div class="text-right">
					<div class="text-sm">Halaman <span class="text-klinik-primary" x-text="step"></span> dari 10</div>
				</div>
			</div>
			{{-- content --}}
			<div class="mt-12 md:mt-32 flex flex-col min-h-7/10 md:h-auto">
				{{-- step 1 --}}
				<div x-show="step === 1" class="flex-grow md:flex-grow-0">
					<div class="text-sm md:text-2xl font-bold text-left md:text-center">
						1. Apakah jenis kulit Anda?
					</div>
					<div class="mt-6 md:mt-10 mb-12 md:mb-32">
						<fieldset>
							<legend class="sr-only">
								step 1
							</legend>
							<div class="bg-white rounded-md block md:flex justify-center space-x-0 md:space-x-6 space-y-6 md:space-y-0">
								<label class="border-gray-100 rounded-full relative border py-4 px-4 md:px-6 flex cursor-pointer shadow-card-pc">
									<input type="radio" name="step-1" value="Normal" class="h-6 w-6 mt-0.5 cursor-pointer text-klinik-primary border-gray-300 focus:ring-klinik-primary" aria-labelledby="privacy-setting-0-label" aria-describedby="privacy-setting-0-description">
									<div class="my-auto ml-3 flex flex-col">
										<span id="privacy-setting-0-label" class="text-gray-900 block text-sm font-medium">
											Normal
										</span>
									</div>
								</label>
								<label class="border-gray-100 rounded-full relative border py-4 px-6 flex cursor-pointer shadow-card-pc">
									<input type="radio" name="step-1" value="Kering" class="h-6 w-6 mt-0.5 cursor-pointer text-klinik-primary border-gray-300 focus:ring-klinik-primary" aria-labelledby="privacy-setting-0-label" aria-describedby="privacy-setting-0-description">
									<div class="my-auto ml-3 flex flex-col">
										<span id="privacy-setting-0-label" class="text-gray-900 block text-sm font-medium">
											Kering
										</span>
									</div>
								</label>
								<label class="border-gray-100 rounded-full relative border py-4 px-6 flex cursor-pointer shadow-card-pc">
									<input type="radio" name="step-1" value="Berminyak" class="h-6 w-6 mt-0.5 cursor-pointer text-klinik-primary border-gray-300 focus:ring-klinik-primary" aria-labelledby="privacy-setting-0-label" aria-describedby="privacy-setting-0-description">
									<div class="my-auto ml-3 flex flex-col">
										<span id="privacy-setting-0-label" class="text-gray-900 block text-sm font-medium">
											Berminyak
										</span>
									</div>
								</label>
								<label class="border-gray-100 rounded-full relative border py-4 px-6 flex cursor-pointer shadow-card-pc">
									<input type="radio" name="step-1" value="Kombinasi" class="h-6 w-6 mt-0.5 cursor-pointer text-klinik-primary border-gray-300 focus:ring-klinik-primary" aria-labelledby="privacy-setting-0-label" aria-describedby="privacy-setting-0-description">
									<div class="my-auto ml-3 flex flex-col">
										<span id="privacy-setting-0-label" class="text-gray-900 block text-sm font-medium">
											Kombinasi
										</span>
									</div>
								</label>
							</div>
						</fieldset>
					</div>
				</div>
				{{-- step 2 --}}
				<div x-show="step === 2" class="flex-grow md:flex-grow-0">
					<div class="text-sm md:text-2xl font-bold text-left md:text-center">
						2. Ada jerawat di wajah?
					</div>
					<div class="mt-6 md:mt-10 mb-12 md:mb-32">
						<fieldset>
							<legend class="sr-only">
								step 2
							</legend>
							<div class="bg-white rounded-md block md:flex justify-center space-x-0 md:space-x-6 space-y-6 md:space-y-0">
								<label class="border-gray-100 rounded-full relative border py-4 px-4 md:px-6 flex cursor-pointer shadow-card-pc">
									<input type="radio" name="step-2" value="Ada" class="h-6 w-6 mt-0.5 cursor-pointer text-klinik-primary border-gray-300 focus:ring-klinik-primary" aria-labelledby="privacy-setting-0-label" aria-describedby="privacy-setting-0-description">
									<div class="my-auto ml-3 flex flex-col">
										<span id="privacy-setting-0-label" class="text-gray-900 block text-sm font-medium">
											Ada
										</span>
									</div>
								</label>
								<label class="border-gray-100 rounded-full relative border py-4 px-6 flex cursor-pointer shadow-card-pc">
									<input type="radio" name="step-2" value="Tidak Ada" class="h-6 w-6 mt-0.5 cursor-pointer text-klinik-primary border-gray-300 focus:ring-klinik-primary" aria-labelledby="privacy-setting-0-label" aria-describedby="privacy-setting-0-description">
									<div class="my-auto ml-3 flex flex-col">
										<span id="privacy-setting-0-label" class="text-gray-900 block text-sm font-medium">
											Tidak Ada
										</span>
									</div>
								</label>
							</div>
						</fieldset>
					</div>
				</div>
				{{-- step 3 --}}
				<div x-show="step === 3" class="flex-grow md:flex-grow-0">
					<div class="text-sm md:text-2xl font-bold text-left md:text-center">
						3. Ada flek hitam / coklat?
					</div>
					<div class="mt-6 md:mt-10 mb-12 md:mb-32">
						<fieldset>
							<legend class="sr-only">
								step 3
							</legend>
							<div class="bg-white rounded-md block md:flex justify-center space-x-0 md:space-x-6 space-y-6 md:space-y-0">
								<label class="border-gray-100 rounded-full relative border py-4 px-4 md:px-6 flex cursor-pointer shadow-card-pc">
									<input type="radio" name="step-3" value="Ada" class="h-6 w-6 mt-0.5 cursor-pointer text-klinik-primary border-gray-300 focus:ring-klinik-primary" aria-labelledby="privacy-setting-0-label" aria-describedby="privacy-setting-0-description">
									<div class="my-auto ml-3 flex flex-col">
										<span id="privacy-setting-0-label" class="text-gray-900 block text-sm font-medium">
											Ada
										</span>
									</div>
								</label>
								<label class="border-gray-100 rounded-full relative border py-4 px-6 flex cursor-pointer shadow-card-pc">
									<input type="radio" name="step-3" value="Tidak Ada" class="h-6 w-6 mt-0.5 cursor-pointer text-klinik-primary border-gray-300 focus:ring-klinik-primary" aria-labelledby="privacy-setting-0-label" aria-describedby="privacy-setting-0-description">
									<div class="my-auto ml-3 flex flex-col">
										<span id="privacy-setting-0-label" class="text-gray-900 block text-sm font-medium">
											Tidak Ada
										</span>
									</div>
								</label>
							</div>
						</fieldset>
					</div>
				</div>
				{{-- step 4 --}}
				<div x-show="step === 4" class="flex-grow md:flex-grow-0">
					<div class="text-sm md:text-2xl font-bold text-left md:text-center">
						4. Ada riwayat gastritis atau sakit maag?
					</div>
					<div class="mt-6 md:mt-10 mb-12 md:mb-32">
						<fieldset>
							<legend class="sr-only">
								step 4
							</legend>
							<div class="bg-white rounded-md block md:flex justify-center space-x-0 md:space-x-6 space-y-6 md:space-y-0">
								<label class="border-gray-100 rounded-full relative border py-4 px-4 md:px-6 flex cursor-pointer shadow-card-pc">
									<input type="radio" name="step-4" value="Ada" class="h-6 w-6 mt-0.5 cursor-pointer text-klinik-primary border-gray-300 focus:ring-klinik-primary" aria-labelledby="privacy-setting-0-label" aria-describedby="privacy-setting-0-description">
									<div class="my-auto ml-3 flex flex-col">
										<span id="privacy-setting-0-label" class="text-gray-900 block text-sm font-medium">
											Ada
										</span>
									</div>
								</label>
								<label class="border-gray-100 rounded-full relative border py-4 px-6 flex cursor-pointer shadow-card-pc">
									<input type="radio" name="step-4" value="Tidak Ada" class="h-6 w-6 mt-0.5 cursor-pointer text-klinik-primary border-gray-300 focus:ring-klinik-primary" aria-labelledby="privacy-setting-0-label" aria-describedby="privacy-setting-0-description">
									<div class="my-auto ml-3 flex flex-col">
										<span id="privacy-setting-0-label" class="text-gray-900 block text-sm font-medium">
											Tidak Ada
										</span>
									</div>
								</label>
							</div>
						</fieldset>
					</div>
				</div>
				{{-- step 5 --}}
				<div x-show="step === 5" class="flex-grow md:flex-grow-0">
					<div class="text-sm md:text-2xl font-bold text-left md:text-center">
						5. Ada riwayat alergi obat oles kulit?
					</div>
					<div class="mt-6 md:mt-10 mb-12 md:mb-32">
						<fieldset>
							<legend class="sr-only">
								step 5
							</legend>
							<div class="bg-white rounded-md block md:flex justify-center space-x-0 md:space-x-6 space-y-6 md:space-y-0">
								<label class="border-gray-100 rounded-full relative border py-4 px-4 md:px-6 flex cursor-pointer shadow-card-pc">
									<input type="radio" @click="isAllergyOintment = 'ada'" name="step-5" value="Ada" class="h-6 w-6 mt-0.5 cursor-pointer text-klinik-primary border-gray-300 focus:ring-klinik-primary" aria-labelledby="privacy-setting-0-label" aria-describedby="privacy-setting-0-description">
									<div class="my-auto ml-3 flex flex-col">
										<span id="privacy-setting-0-label" class="text-gray-900 block text-sm font-medium">
											Ada
										</span>
									</div>
								</label>
								<label class="border-gray-100 rounded-full relative border py-4 px-6 flex cursor-pointer shadow-card-pc">
									<input type="radio" @click="isAllergyOintment = 'tidak ada'" name="step-5" value="Tidak Ada" class="h-6 w-6 mt-0.5 cursor-pointer text-klinik-primary border-gray-300 focus:ring-klinik-primary" aria-labelledby="privacy-setting-0-label" aria-describedby="privacy-setting-0-description">
									<div class="my-auto ml-3 flex flex-col">
										<span id="privacy-setting-0-label" class="text-gray-900 block text-sm font-medium">
											Tidak Ada
										</span>
									</div>
								</label>
							</div>
							<div class="mt-6 max-w-xl mx-auto" x-show="isAllergyOintment === 'ada'">
								<label for="note-step-5" class="block text-sm font-medium text-gray-700">Anda alergi dengan obat oles kulit apa?</label>
								<div class="mt-2">
									<textarea id="note-step-5" name="note-step-5" rows="2" class="shadow-sm block w-full sm:text-sm border-gray-300 bg-gray-100 rounded-md p-2 md:p-3 focus:outline-none"></textarea>
								</div>
							</div>
						</fieldset>
					</div>
				</div>
				{{-- step 6 --}}
				<div x-show="step === 6" class="flex-grow md:flex-grow-0">
					<div class="text-sm md:text-2xl font-bold text-left md:text-center">
						6. Ada riwayat alergi obat minum?
					</div>
					<div class="mt-6 md:mt-10 mb-12 md:mb-32">
						<fieldset>
							<legend class="sr-only">
								step 6
							</legend>
							<div class="bg-white rounded-md block md:flex justify-center space-x-0 md:space-x-6 space-y-6 md:space-y-0">
								<label class="border-gray-100 rounded-full relative border py-4 px-4 md:px-6 flex cursor-pointer shadow-card-pc">
									<input type="radio" @click="isAllergyMedicine = 'ada'" name="step-6" value="Ada" class="h-6 w-6 mt-0.5 cursor-pointer text-klinik-primary border-gray-300 focus:ring-klinik-primary" aria-labelledby="privacy-setting-0-label" aria-describedby="privacy-setting-0-description">
									<div class="my-auto ml-3 flex flex-col">
										<span id="privacy-setting-0-label" class="text-gray-900 block text-sm font-medium">
											Ada
										</span>
									</div>
								</label>
								<label class="border-gray-100 rounded-full relative border py-4 px-6 flex cursor-pointer shadow-card-pc">
									<input type="radio" @click="isAllergyMedicine = 'tidak'" name="step-6" value="Tidak Ada" class="h-6 w-6 mt-0.5 cursor-pointer text-klinik-primary border-gray-300 focus:ring-klinik-primary" aria-labelledby="privacy-setting-0-label" aria-describedby="privacy-setting-0-description">
									<div class="my-auto ml-3 flex flex-col">
										<span id="privacy-setting-0-label" class="text-gray-900 block text-sm font-medium">
											Tidak Ada
										</span>
									</div>
								</label>
							</div>
							<div class="mt-6 max-w-xl mx-auto" x-show="isAllergyMedicine === 'ada'">
								<label for="note-step-6" class="block text-sm font-medium text-gray-700">Anda alergi dengan obat apa?</label>
								<div class="mt-2">
									<textarea id="note-step-6" name="note-step-6" rows="2" class="shadow-sm block w-full sm:text-sm border-gray-300 bg-gray-100 rounded-md p-2 md:p-3 focus:outline-none"></textarea>
								</div>
						</fieldset>
					</div>
				</div>
				{{-- step 7 --}}
				<div x-show="step === 7" class="flex-grow md:flex-grow-0">
					<div class="text-sm md:text-2xl font-bold text-left md:text-center">
						7. Apakah sedang hamil?
					</div>
					<div class="mt-6 md:mt-10 mb-12 md:mb-32">
						<fieldset>
							<legend class="sr-only">
								step 7
							</legend>
							<div class="bg-white rounded-md block md:flex justify-center space-x-0 md:space-x-6 space-y-6 md:space-y-0">
								<label class="border-gray-100 rounded-full relative border py-4 px-4 md:px-6 flex cursor-pointer shadow-card-pc">
									<input type="radio" name="step-7" value="Ya" class="h-6 w-6 mt-0.5 cursor-pointer text-klinik-primary border-gray-300 focus:ring-klinik-primary" aria-labelledby="privacy-setting-0-label" aria-describedby="privacy-setting-0-description">
									<div class="my-auto ml-3 flex flex-col">
										<span id="privacy-setting-0-label" class="text-gray-900 block text-sm font-medium">
											Ya
										</span>
									</div>
								</label>
								<label class="border-gray-100 rounded-full relative border py-4 px-6 flex cursor-pointer shadow-card-pc">
									<input type="radio" name="step-7" value="Tidak" class="h-6 w-6 mt-0.5 cursor-pointer text-klinik-primary border-gray-300 focus:ring-klinik-primary" aria-labelledby="privacy-setting-0-label" aria-describedby="privacy-setting-0-description">
									<div class="my-auto ml-3 flex flex-col">
										<span id="privacy-setting-0-label" class="text-gray-900 block text-sm font-medium">
											Tidak
										</span>
									</div>
								</label>
							</div>
						</fieldset>
					</div>
				</div>
				{{-- step 8 --}}
				<div x-show="step === 8" class="flex-grow md:flex-grow-0">
					<div class="text-sm md:text-2xl font-bold text-left md:text-center">
						8. Apakah menstruasi teratur?
					</div>
					<div class="mt-6 md:mt-10 mb-12 md:mb-32">
						<fieldset>
							<legend class="sr-only">
								step 8
							</legend>
							<div class="bg-white rounded-md block md:flex justify-center space-x-0 md:space-x-6 space-y-6 md:space-y-0">
								<label class="border-gray-100 rounded-full relative border py-4 px-4 md:px-6 flex cursor-pointer shadow-card-pc">
									<input type="radio" name="step-8" value="Ya" class="h-6 w-6 mt-0.5 cursor-pointer text-klinik-primary border-gray-300 focus:ring-klinik-primary" aria-labelledby="privacy-setting-0-label" aria-describedby="privacy-setting-0-description">
									<div class="my-auto ml-3 flex flex-col">
										<span id="privacy-setting-0-label" class="text-gray-900 block text-sm font-medium">
											Ya
										</span>
									</div>
								</label>
								<label class="border-gray-100 rounded-full relative border py-4 px-6 flex cursor-pointer shadow-card-pc">
									<input type="radio" name="step-8" value="Tidak" class="h-6 w-6 mt-0.5 cursor-pointer text-klinik-primary border-gray-300 focus:ring-klinik-primary" aria-labelledby="privacy-setting-0-label" aria-describedby="privacy-setting-0-description">
									<div class="my-auto ml-3 flex flex-col">
										<span id="privacy-setting-0-label" class="text-gray-900 block text-sm font-medium">
											Tidak
										</span>
									</div>
								</label>
							</div>
						</fieldset>
					</div>
				</div>
				{{-- step 9 --}}
				<div x-show="step === 9" class="flex-grow md:flex-grow-0">
					<div class="text-sm md:text-2xl font-bold text-left md:text-center">
						9. Apa saja keluhan kulit Anda?
					</div>
					<div class="mt-6 md:mt-10 mb-12 md:mb-32">
						<fieldset>
							<div class="flex justify-center">
								<textarea id="about" name="about" rows="4" class="max-w-xl shadow-sm block w-full sm:text-sm border-gray-300 bg-gray-100 rounded-md p-2 md:p-3 focus:outline-none" placeholder="Contoh : ruam di belakang telinga"></textarea>
							</div>
						</fieldset>
					</div>
				</div>
				{{-- step 10 --}}
				<div x-show="step === 10" class="flex-grow md:flex-grow-0">
					<div class="text-sm md:text-2xl font-bold text-left md:text-center">
						10. Ambil atau unggah foto close up wajah terbaru
					</div>
					<div class="bg-klinik-blue-light p-6 rounded-lg mt-6 max-w-xl mx-auto block md:hidden">
						<div class="text-sm font-bold">CATATAN</div>
						<ul class="list-outside pl-4 list-disc text-sm mt-1">
							<li>Gunakan kamera non filter / tanpa efek.</li>
							<li>Foto kondisi wajah tanpa menggunakan make-up.</li>
							<li>Pastikan pencahayaan cukup baik agar kondisi kulit wajah terlihat jelas.</li>
						</ul>
					</div>
					<div class="mt-6 md:mt-10 mb-10 md:mb-12">
						<fieldset>
							<div class="grid grid-cols-2 md:grid-cols-4 gap-6 md:gap-14">
								<div>
									<div class="text-xs text-center mb-3">
										Foto wajah tampak depan
									</div>
									<x-image-upload name="file-upload-1" />
								</div>
								<div>
									<div class="text-xs text-center mb-3">
										Foto wajah tampak kiri
									</div>
									<x-image-upload name="file-upload-2" />
								</div>
								<div>
									<div class="text-xs text-center mb-3">
										Foto wajah tampak kanan
									</div>
									<x-image-upload name="file-upload-3" />
								</div>
								<div>
									<div class="text-xs text-center mb-3">
										Foto keluhan lain (jika ada)
									</div>
									<x-image-upload name="file-upload-4" />
								</div>
							</div>
						</fieldset>
						<div class="bg-klinik-blue-light p-6 rounded-lg mt-14 max-w-xl mx-auto hidden md:block">
							<div class="text-sm font-bold">CATATAN</div>
							<ul class="list-inside list-disc text-sm mt-1">
								<li>Gunakan kamera non filter / tanpa efek.</li>
								<li>Foto kondisi wajah tanpa menggunakan make-up.</li>
								<li>Pastikan pencahayaan cukup baik agar kondisi kulit wajah terlihat jelas.</li>
							</ul>
						</div>
					</div>
				</div>
				

				{{-- bottom navigation --}}
				<div class="mb-12 flex-grow-0">
					<div class="flex items-center justify-center gap-4 w-full">
						<button class="border-2 border-klinik-primary text-sm text-klinik-primary rounded-full py-1.5 lg:py-2 w-full md:w-36 font-semibold focus:outline-none" :disabled="step === 1" @click="step--">
							SEBELUMNYA
						</button>
						{{-- btn next desktop --}}
						<button class="hidden md:block border-2 border-klinik-primary text-sm text-klinik-primary rounded-full py-1.5 lg:py-2 w-full md:w-36 font-semibold focus:outline-none" @click="step++" x-show="step < 10">
							SELANJUTNYA
						</button>
						{{-- btn next mobile --}}
						<button class="md:hidden text-white border-2 border-klinik-primary text-sm bg-klinik-primary rounded-full py-1.5 lg:py-2 w-full md:w-36 font-semibold focus:outline-none" @click="step++" x-show="step < 10">
							LANJUT
						</button>
						<a href="/photo-consultation-list" class="text-white text-center border-2 border-klinik-primary text-sm bg-klinik-primary rounded-full py-1.5 lg:py-2 w-full md:w-36 font-semibold focus:outline-none" x-show="step === 10">
							SELESAI
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</x-layout-app>
@endsection
