@extends("layouts.app")

@section("content")
<x-layout-app withNavbar withFooter withBottomNavbar>
	<div>
		<div class="max-w-8xl mx-auto px-5 md:px-8 lg:px-16">
			<div class="pt-6 md:pt-24 block md:flex items-center">
				<div class="text-lg md:text-3.5xl font-extrabold mr-8 flex items-center">
          <a href="/create-appointment-video-date" class="md:hidden mr-3">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
          </a>
					Pilih Jam Konsultasi
				</div>
				<div class="mt-4 md:mt-0 hidden md:block">
					<a href="/create-appointment-video-date" class="w-full md:w-auto py-2 px-4 bg-klinik-primary text-white rounded-full font-bold btn-focus-primary text-sm text-center flex items-center">
            <div>
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            </div>
						<div>
							KEMBALI
						</div>
					</a>
				</div>
			</div>

      <div class="mt-6 md:mt-12">
        <fieldset>
          <legend class="sr-only">
            select time
          </legend>
          <div class="bg-white rounded-md space-y-6">
            <label class="rounded-full relative shadow-card-pc py-3 md:py-4 px-3 md:px-4 flex items-center cursor-pointer">
              <input type="radio" name="select_time" value="10:00 - 10:15" class="h-6 w-6 mt-0.5 cursor-pointer text-klinik-primary border-gray-300 focus:ring-klinik-primary" aria-labelledby="privacy-setting-2-label" aria-describedby="privacy-setting-2-description">
              <div class="ml-3 flex flex-col">
                <span id="privacy-setting-2-label" class="text-gray-900 block text-sm md:text-lg font-medium">
                  10:00 - 10:15
                </span>
              </div>  
            </label>
            
            <label class="rounded-full relative shadow-card-pc py-3 md:py-4 px-3 md:px-4 flex items-center cursor-pointer">
              <input type="radio" name="select_time" value="10:20 - 10:35" class="h-6 w-6 mt-0.5 cursor-pointer text-klinik-primary border-gray-300 focus:ring-klinik-primary" aria-labelledby="privacy-setting-2-label" aria-describedby="privacy-setting-2-description">
              <div class="ml-3 flex flex-col">
                <span id="privacy-setting-2-label" class="text-gray-900 block text-sm md:text-lg font-medium">
                  10:20 - 10:35
                </span>
              </div>
            </label>
            
            <label class="rounded-full relative shadow-card-pc py-3 md:py-4 px-3 md:px-4 flex items-center cursor-pointer">
              <input type="radio" name="select_time" value="10:40 - 10:55" class="h-6 w-6 mt-0.5 cursor-pointer text-klinik-primary border-gray-300 focus:ring-klinik-primary" aria-labelledby="privacy-setting-2-label" aria-describedby="privacy-setting-2-description">
              <div class="ml-3 flex flex-col">
                <span id="privacy-setting-2-label" class="text-gray-900 block text-sm md:text-lg font-medium">
                  10:40 - 10:55
                </span>
              </div>  
            </label>
            
            <label class="rounded-full relative shadow-card-pc py-3 md:py-4 px-3 md:px-4 flex items-center cursor-pointer">
              <input type="radio" name="select_time" value="11:00 - 11:15" class="h-6 w-6 mt-0.5 cursor-pointer text-klinik-primary border-gray-300 focus:ring-klinik-primary" aria-labelledby="privacy-setting-2-label" aria-describedby="privacy-setting-2-description">
              <div class="ml-3 flex flex-col">
                <span id="privacy-setting-2-label" class="text-gray-900 block text-sm md:text-lg font-medium">
                  11:00 - 11:15
                </span>
              </div>  
            </label>
            
            <label class="rounded-full relative shadow-card-pc py-3 md:py-4 px-3 md:px-4 flex items-center cursor-pointer">
              <input type="radio" name="select_time" value="11:20 - 11:35" class="h-6 w-6 mt-0.5 cursor-pointer text-klinik-primary border-gray-300 focus:ring-klinik-primary" aria-labelledby="privacy-setting-2-label" aria-describedby="privacy-setting-2-description">
              <div class="ml-3 flex flex-col">
                <span id="privacy-setting-2-label" class="text-gray-900 block text-sm md:text-lg font-medium">
                  11:20 - 11:35
                </span>
              </div>  
            </label>

          </div>
        </fieldset>
      </div>
      <div class="mt-8 pb-10 flex justify-center">
        <button class="w-full md:w-96 py-3 px-4 bg-klinik-primary text-white rounded-full font-bold btn-focus-primary text-sm text-center uppercase">
          Booking live video consultation
        </button>
      </div>
		</div>
	</div>
</x-layout-app>
@endsection
