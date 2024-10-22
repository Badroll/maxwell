@extends("layouts.app")

@section("content")
<x-layout-app withNavbar withFooter withBottomNavbar>
	<div>
		<div class="max-w-8xl mx-auto px-5 md:px-8 lg:px-16">
			<div class="pt-6 md:pt-24 block md:flex items-center">
				<div class="text-lg md:text-3.5xl font-extrabold mr-8 flex items-center">
          <a href="/video-consultation-list" class="md:hidden mr-3">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
          </a>
					Pilih Tanggal Konsultasi
				</div>
				<div class="mt-4 md:mt-0 hidden md:block">
					<a href="/video-consultation-list" class="w-full md:w-auto py-2 px-4 bg-klinik-primary text-white rounded-full font-bold btn-focus-primary text-sm text-center flex items-center">
            <div>
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            </div>
						<div>
							KEMBALI
						</div>
					</a>
				</div>
			</div>

      <div class="mt-6 md:mt-12 pb-10">
        <fieldset>
          <legend class="sr-only">
            select date
          </legend>
          <div class="bg-white rounded-md space-y-5">
            <label class="rounded-full relative shadow-card-pc py-3 px-4 flex items-center cursor-pointer">
              <input type="radio" name="select_date" value="Senin, 24 Agustus 2021" class="h-6 w-6 mt-0.5 cursor-pointer text-klinik-primary border-gray-300 focus:ring-klinik-primary" aria-labelledby="privacy-setting-2-label" aria-describedby="privacy-setting-2-description">
              <a href="/create-appointment-video-time" class="block w-full">
                <div class="flex items-center justify-between w-full">
                  <div class="ml-3 flex flex-col">
                    <!-- Checked: "text-indigo-900", Not Checked: "text-gray-900" -->
                    <span id="privacy-setting-2-label" class="text-gray-900 block text-sm md:text-lg font-medium">
                      Senin, 24 Agustus 2021
                    </span>
                    <!-- Checked: "text-indigo-700", Not Checked: "text-gray-500" -->
                    <span id="privacy-setting-2-description" class="text-gray-500 block text-xs md:text-sm">
                      5 sesi tersedia
                    </span>
                  </div>
                  <div class="pr-2.5 hidden text-gray-700 md:block">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                  </div>
                </div>  
              </a>
            </label>

            <label class="rounded-full relative shadow-card-pc py-3 px-4 flex items-center cursor-pointer">
              <input type="radio" name="select_date" value="Selasa, 25 Agustus 2021" class="h-6 w-6 mt-0.5 cursor-pointer text-klinik-primary border-gray-300 focus:ring-klinik-primary" aria-labelledby="privacy-setting-2-label" aria-describedby="privacy-setting-2-description">
              <a href="/create-appointment-video-time" class="block w-full">
                <div class="flex items-center justify-between w-full">
                  <div class="ml-3 flex flex-col">
                    <!-- Checked: "text-indigo-900", Not Checked: "text-gray-900" -->
                    <span id="privacy-setting-2-label" class="text-gray-900 block text-sm md:text-lg font-medium">
                      Selasa, 25 Agustus 2021
                    </span>
                    <!-- Checked: "text-indigo-700", Not Checked: "text-gray-500" -->
                    <span id="privacy-setting-2-description" class="text-gray-500 block text-xs md:text-sm">
                      5 sesi tersedia
                    </span>
                  </div>
                  <div class="pr-2.5 hidden text-gray-700 md:block">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                  </div>
                </div>  
              </a>
            </label>

            <label class="rounded-full relative shadow-card-pc py-3 px-4 flex items-center cursor-pointer">
              <input type="radio" name="select_date" value="Rabu, 26 Agustus 2021" class="h-6 w-6 mt-0.5 cursor-pointer text-klinik-primary border-gray-300 focus:ring-klinik-primary" aria-labelledby="privacy-setting-2-label" aria-describedby="privacy-setting-2-description">
              <a href="/create-appointment-video-time" class="block w-full">
                <div class="flex items-center justify-between w-full">
                  <div class="ml-3 flex flex-col">
                    <!-- Checked: "text-indigo-900", Not Checked: "text-gray-900" -->
                    <span id="privacy-setting-2-label" class="text-gray-900 block text-sm md:text-lg font-medium">
                      Rabu, 26 Agustus 2021
                    </span>
                    <!-- Checked: "text-indigo-700", Not Checked: "text-gray-500" -->
                    <span id="privacy-setting-2-description" class="text-gray-500 block text-xs md:text-sm">
                      5 sesi tersedia
                    </span>
                  </div>
                  <div class="pr-2.5 hidden text-gray-700 md:block">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                  </div>
                </div>  
              </a>
            </label>

            <label class="rounded-full relative shadow-card-pc py-3 px-4 flex items-center cursor-pointer">
              <input type="radio" name="select_date" value="Kamis, 27 Agustus 2021" class="h-6 w-6 mt-0.5 cursor-pointer text-klinik-primary border-gray-300 focus:ring-klinik-primary" aria-labelledby="privacy-setting-2-label" aria-describedby="privacy-setting-2-description">
              <a href="/create-appointment-video-time" class="block w-full">
                <div class="flex items-center justify-between w-full">
                  <div class="ml-3 flex flex-col">
                    <!-- Checked: "text-indigo-900", Not Checked: "text-gray-900" -->
                    <span id="privacy-setting-2-label" class="text-gray-900 block text-sm md:text-lg font-medium">
                      Kamis, 27 Agustus 2021
                    </span>
                    <!-- Checked: "text-indigo-700", Not Checked: "text-gray-500" -->
                    <span id="privacy-setting-2-description" class="text-gray-500 block text-xs md:text-sm">
                      5 sesi tersedia
                    </span>
                  </div>
                  <div class="pr-2.5 hidden text-gray-700 md:block">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                  </div>
                </div>  
              </a>
            </label>

            <label class="rounded-full relative shadow-card-pc py-3 px-4 flex items-center cursor-pointer">
              <input type="radio" name="select_date" value="Jum'at, 28 Agustus 2021" class="h-6 w-6 mt-0.5 cursor-pointer text-klinik-primary border-gray-300 focus:ring-klinik-primary" aria-labelledby="privacy-setting-2-label" aria-describedby="privacy-setting-2-description">
              <a href="/create-appointment-video-time" class="block w-full">
                <div class="flex items-center justify-between w-full">
                  <div class="ml-3 flex flex-col">
                    <!-- Checked: "text-indigo-900", Not Checked: "text-gray-900" -->
                    <span id="privacy-setting-2-label" class="text-gray-900 block text-sm md:text-lg font-medium">
                      Jum'at, 28 Agustus 2021
                    </span>
                    <!-- Checked: "text-indigo-700", Not Checked: "text-gray-500" -->
                    <span id="privacy-setting-2-description" class="text-gray-500 block text-xs md:text-sm">
                      5 sesi tersedia
                    </span>
                  </div>
                  <div class="pr-2.5 hidden text-gray-700 md:block">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                  </div>
                </div>  
              </a>
            </label>

            <label class="rounded-full relative shadow-card-pc py-3 px-4 flex items-center cursor-pointer">
              <input type="radio" name="select_date" value="Sabtu, 29 Agustus 2021" class="h-6 w-6 mt-0.5 cursor-pointer text-klinik-primary border-gray-300 focus:ring-klinik-primary" aria-labelledby="privacy-setting-2-label" aria-describedby="privacy-setting-2-description">
              <a href="/create-appointment-video-time" class="block w-full">
                <div class="flex items-center justify-between w-full">
                  <div class="ml-3 flex flex-col">
                    <!-- Checked: "text-indigo-900", Not Checked: "text-gray-900" -->
                    <span id="privacy-setting-2-label" class="text-gray-900 block text-sm md:text-lg font-medium">
                      Sabtu, 29 Agustus 2021
                    </span>
                    <!-- Checked: "text-indigo-700", Not Checked: "text-gray-500" -->
                    <span id="privacy-setting-2-description" class="text-gray-500 block text-xs md:text-sm">
                      5 sesi tersedia
                    </span>
                  </div>
                  <div class="pr-2.5 hidden text-gray-700 md:block">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                  </div>
                </div>  
              </a>
            </label>

            <label class="rounded-full relative shadow-card-pc py-3 px-4 flex items-center cursor-pointer">
              <input type="radio" name="select_date" value="Minggu, 30 Agustus 2021" class="h-6 w-6 mt-0.5 cursor-pointer text-klinik-primary border-gray-300 focus:ring-klinik-primary" aria-labelledby="privacy-setting-2-label" aria-describedby="privacy-setting-2-description">
              <a href="/create-appointment-video-time" class="block w-full">
                <div class="flex items-center justify-between w-full">
                  <div class="ml-3 flex flex-col">
                    <!-- Checked: "text-indigo-900", Not Checked: "text-gray-900" -->
                    <span id="privacy-setting-2-label" class="text-gray-900 block text-sm md:text-lg font-medium">
                      Minggu, 30 Agustus 2021
                    </span>
                    <!-- Checked: "text-indigo-700", Not Checked: "text-gray-500" -->
                    <span id="privacy-setting-2-description" class="text-gray-500 block text-xs md:text-sm">
                      5 sesi tersedia
                    </span>
                  </div>
                  <div class="pr-2.5 hidden text-gray-700 md:block">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                  </div>
                </div>  
              </a>
            </label>
          </div>
        </fieldset>
      </div>

			
		</div>
	</div>
</x-layout-app>
@endsection
