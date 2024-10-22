<style>
  /* since nested groupes are not supported we have to use 
     regular css for the nested dropdowns 
  */
  li>ul                 { transform: translatex(100%) scale(0) }
  li:hover>ul           { transform: translatex(101%) scale(1) }

  /* Below styles fake what can be achieved with the tailwind config
     you need to add the group-hover variant to scale and define your custom
     min width style.
  	 See https://codesandbox.io/s/tailwindcss-multilevel-dropdown-y91j7?file=/index.html
  	 for implementation with config file
  */
  .group:hover .group-hover\:scale-100 { transform: scale(1) }
  .group:hover .group-hover\:-rotate-180 { transform: rotate(180deg) }
  .scale-0 { transform: scale(0) }
  .min-w-32 { min-width: 8rem }
</style>
<div class="fixed top-0 w-full z-40 shadow-sm bg-white" x-data="{ show: false, dropdown: false, logged: localStorage.getItem('klinik-auth') === 'true', search: '', dropdownProduct: false, dropdownService: false, dropdownSubService: false }" x-init="show = false" x-cloak>
	{{-- logged adalah kondisi untuk ketika user sudah login --}}
	<div class="flex justify-between items-center px-5 md:px-8 lg:px-16 py-3 md:py-5 text-lg bg-white max-w-8xl mx-auto">
		{{-- logo klinik estetika  --}}
		<div>
			<a href="/" class="block">
				<div class="hidden md:block">
					<img src="{{asset('images/_mw/logo-main.png')}}" alt="logo" width="108" height="38" class="block md:hidden lg:block" style="min-width: 108px;" />
					<img src="{{asset('images/favicon.svg')}}" alt="logo" class="hidden md:block lg:hidden w-10 h-10" />
				</div>
				<div class="md:hidden">
					<img src="{{asset('images/_mw/logo-main.png')}}" alt="logo" width="108" height="38" class="block md:hidden lg:block" style="min-width: 108px;" x-show="show === false" />
					<img src="{{asset('images/favicon.svg')}}" alt="logo" class="block w-10 h-10" x-show="show === true" />

				</div>
			</a>
		</div>
		{{-- menu navbar desktop --}}
		<div
			class="uppercase font-semibold hidden md:flex text-base space-x-4 md:space-x-3 xl:space-x-8"
			x-show="show === false"
		>
			<div class="">
				<a href="/" class="relative flex flex-col items-center py-2 group text-sm px-1">
					<div class="{{ Request::path() == '/' ? "cursor-pointer text-klinik-primary" : "cursor-pointer text-gray-400" }}">home</div>
					<div
					class="{{ Request::path() == '/' ? "w-8 h-1.5 bg-klinik-primary rounded-full absolute bottom-0" : "w-8 h-1.5 bg-white group-hover:bg-gray-400 rounded-full absolute bottom-0" }}"
					></div>
				</a>
			</div>
			<div class="group inline-block" @click.away="dropdownProduct = false">
				<div class="relative">
					<a class="relative flex flex-col items-center py-2 group text-sm px-1" @click="dropdownProduct = !dropdownProduct">
						<div class="{{ Request::path() == 'product' ? "cursor-pointer text-klinik-primary" : "cursor-pointer text-gray-400" }}">
							social media
						</div>
						<div
						class="{{ Request::path() == 'product' ? "w-8 h-1.5 bg-klinik-primary rounded-full absolute bottom-0" : "w-8 h-1.5 bg-white rounded-full absolute bottom-0" }}"
						></div>
					</a>
					<ul class="bg-white object-top text-sm text-gray-400 font-semibold border rounded-md transform scale-0 group-hover:scale-100 absolute transition duration-150 ease-in-out origin-top max-w-250 w-screen p-1 tracking-wide" style="max-width: 240px">
						<li class="rounded-sm px-3 py-2 hover:bg-gray-100">
							<a href="https://instagram.com/hotel.maxwell70?igshid=YmMyMTA2M2Y=" target="_blank" class="block">INSTAGRAM</a>
						</li>
						<li class="rounded-sm px-3 py-2 hover:bg-gray-100">
							<a href="https://www.facebook.com/profile.php?id=100085380207115 " target="_blank" class="block">FACEBOOK</a>
						</li>
					</ul>
	        	</div>
			</div>
			<div class="group inline-block" @click.away="dropdownProduct = false">
				<div class="relative">
					<a class="relative flex flex-col items-center py-2 group text-sm px-1" @click="dropdownProduct = !dropdownProduct">
						<div class="{{ Request::path() == 'product' ? "cursor-pointer text-klinik-primary" : "cursor-pointer text-gray-400" }}">
							call
						</div>
						<div
						class="{{ Request::path() == 'product' ? "w-8 h-1.5 bg-klinik-primary rounded-full absolute bottom-0" : "w-8 h-1.5 bg-white rounded-full absolute bottom-0" }}"
						></div>
					</a>
					<ul class="bg-white object-top text-sm text-gray-400 font-semibold border rounded-md transform scale-0 group-hover:scale-100 absolute transition duration-150 ease-in-out origin-top max-w-250 w-screen p-1 tracking-wide" style="max-width: 240px">
						<li class="rounded-sm px-3 py-2 hover:bg-gray-100">
							<a href="mailto:frontoffice@maxwell-hotel.com" class="block">E-MAIL</a>
						</li>
						<li class="rounded-sm px-3 py-2 hover:bg-gray-100">
							<a href="https://wa.me/6288211107970?text=Halo,%20Saya%20ingin%20bertanya%20mengenai%20Hotel%20Maxwell" target="_blank" class="block">WHATSAPP</a>
						</li>
					</ul>
	        	</div>
			</div>
			<div class="group inline-block relative" @click.away="dropdownService = false">
				<a class="relative flex flex-col items-center py-2 group text-sm px-1" @click="dropdownService = !dropdownService">
					<div class="{{ Request::path() == "services" ? "cursor-pointer text-klinik-primary" : "cursor-pointer text-gray-400" }}">
						services
					</div>
					<div
					class="{{ Request::path() == "services" ? "w-8 h-1.5 bg-klinik-primary rounded-full absolute bottom-0" : "w-8 h-1.5 bg-white rounded-full absolute bottom-0" }}"
					></div>
				</a>
				<ul class="bg-white text-sm text-gray-400 font-semibold border rounded-md transform scale-0 group-hover:scale-100 absolute transition duration-150 ease-in-out origin-top max-w-250 w-screen p-1 tracking-wide" style="max-width: 240px;">
					<li class="rounded-sm px-3 py-2 hover:bg-gray-100">
						<a href="/services#lobby" class="block">LOBBY AREA</a>
					</li>
					<li class="rounded-sm px-3 py-2 hover:bg-gray-100">
						<a href="/services#meeting-room" class="block">LOBBY MEETING ROOM</a>
					</li>
					<li class="rounded-sm px-3 py-2 hover:bg-gray-100">
						<a href="/services#restaurant" class="block">RESTAURANT</a>
					</li>
					<li class="rounded-sm px-3 py-2 hover:bg-gray-100">
						<a href="/services#standard-deluxe-room" class="block">STANDARD DELUXE ROOM</a>
					</li>
					<li class="rounded-sm px-3 py-2 hover:bg-gray-100">
						<a href="/services#executive-room" class="block">EXECUTIVE ROOM</a>
					</li>
					<li class="rounded-sm px-3 py-2 hover:bg-gray-100">
						<a href="/services#bar" class="block">BAR</a>
					</li>
				</ul>
				
			</div>
		</div>

		<div class="flex items-center" :class="{ 'w-full ml-2 md:ml-4': show }" style="max-height: 40px">
			
		</div>
	</div>
</div>