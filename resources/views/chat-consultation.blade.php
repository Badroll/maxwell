@extends("layouts.app")

@section("content")
<x-layout-app withNavbar="false" withFooter="false" withBottomNavbar="false">
	<div class="h-screen max-h-screen">
		{{-- navbar desktop --}}
		<div class="hidden md:block">
			<x-navbar />
		</div>
		{{-- navbar mobile --}}
		<div class="fixed top-0 w-full z-40 shadow-card-pc bg-white md:hidden">
			<div class="flex items-start px-5 md:px-8 lg:px-16 py-4 md:py-5 text-lg bg-white max-w-8xl mx-auto">
				<a href="/chat-consultation-list" class="mr-1.5">
					<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
				</a>
				<div>
					<div class="font-bold">
						Chat Consultation
					</div>
					<div class="text-xs mt-1">Anda terhubung dengan</div>
					<div class="flex items-center mt-1">
						<div class="mr-2">
							<img src="{{ asset('images/dr-hengky.svg') }}" alt="dokter" class="w-6 h-6">
						</div>
						<div class="text-sm font-bold">dr. Hengky Nurhidayat Affandi</div>
					</div>
				</div>
			</div>
		</div>

		{{-- chat mobile --}}
		<div class="pt-32 h-screen md:hidden relative overflow-y-auto flex flex-col">
			<div class="space-y-8 pb-8 flex-grow px-4">
				<div class="text-center text-xs py-2">21 Agustus 2020</div>
				<div class="flex items-end w-full">
					<div class="mr-3">
						<img src="{{ asset('images/dr-hengky.svg') }}" alt="dokter" class="w-9 h-9">
					</div>
					<div class="relative" style="max-width: 70%">
						<div class="bg-klinik-primary text-white text-sm rounded-t-xl rounded-br-xl p-4">
							Halo, Jessica Kandaris. Dengan dr. Amel, kamu punya keluhan apa?
						</div>
						<div class="text-10px absolute -bottom-5">12:21</div>
					</div>
				</div>
				<div class="flex justify-end w-full">
					<div class="relative" style="max-width: 70%">
						<div class="bg-klinik-blue-light text-sm rounded-t-xl rounded-bl-xl p-4">
							Halo dok, iya saya ada keluhan jerawat muka nih
						</div>
						<div class="text-10px absolute -bottom-5 right-0 flex items-center">
							<div class="mr-1.5">12:21</div>
							<div><img src="{{ asset('images/d-check.svg') }}" alt="icon-done"></div>
						</div>
					</div>
				</div>
				<div class="flex justify-end w-full">
					<div class="relative" style="max-width: 70%">
						<div class="bg-klinik-blue-light text-sm rounded-t-xl rounded-bl-xl p-4">
							Kalau kena sinar matahari siang cepet banget muncul
						</div>
						<div class="text-10px absolute -bottom-5 right-0 flex items-center">
							<div class="mr-1.5">12:21</div>
							<div><img src="{{ asset('images/d-check.svg') }}" alt="icon-done"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="sticky bottom-0 left-0 w-full bg-white p-4">
				<div class="flex items-center">
					<button class="p-2 bg-gray-100 rounded-full">
						<div>
							<img src="{{ asset('images/clip-icon.svg') }}" alt="icon" class="w-6 h-6">
						</div>
					</button>
					<div class="ml-3 rounded-full bg-gray-100 w-full flex items-center p-2">
						<input type="text" class="w-full bg-gray-100 focus:outline-none pl-2" placeholder="tulis disini">
						<button class="rounded-full">
							<svg class="w-5 h-5 transform rotate-90" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z"></path></svg>
						</button>
					</div>
				</div>
			</div>
		</div>

		{{-- chat desktop --}}
		<div class="max-w-8xl mx-auto px-5 md:px-8 lg:px-16 pt-20 h-screen hidden md:block">
			{{-- header navigation --}}
			<div class="pt-6 md:pt-24 flex items-center justify-between">
				<div class="text-lg md:text-3.5xl font-extrabold">
					Chat Consultation
				</div>
				<div class="text-right">
					<div class="text-xs md:text-sm">Anda terhubung dengan</div>
					<div class="flex items-center">
						<div class="mr-2">
							<img src="{{ asset('images/dr-hengky.svg') }}" alt="dokter" class="w-6 h-6">
						</div>
						<div class="text-sm font-bold">dr. Hengky Nurhidayat Affandi</div>
					</div>
				</div>
			</div>
			{{-- body chat desktop --}}
			<div class="border border-gray-300 rounded-md my-8 relative p-3 overflow-y-auto flex flex-col" style="height: 65%">
				<div class="space-y-8 pb-8 flex-grow">
					<div class="text-center text-xs py-2">21 Agustus 2020</div>
					<div class="flex items-end w-full">
						<div class="mr-3">
							<img src="{{ asset('images/dr-hengky.svg') }}" alt="dokter" class="w-9 h-9">
						</div>
						<div class="relative" style="max-width: 70%">
							<div class="bg-klinik-primary text-white text-sm rounded-t-xl rounded-br-xl p-4">
								Halo, Jessica Kandaris. Dengan dr. Amel, kamu punya keluhan apa?
							</div>
							<div class="text-10px absolute -bottom-5">12:21</div>
						</div>
					</div>
					<div class="flex justify-end w-full">
						<div class="relative" style="max-width: 70%">
							<div class="bg-klinik-blue-light text-sm rounded-t-xl rounded-bl-xl p-4">
								Halo dok, iya saya ada keluhan jerawat muka nih
							</div>
							<div class="text-10px absolute -bottom-5 right-0 flex items-center">
								<div class="mr-1.5">12:21</div>
								<div><img src="{{ asset('images/d-check.svg') }}" alt="icon-done"></div>
							</div>
						</div>
					</div>
					<div class="flex justify-end w-full">
						<div class="relative" style="max-width: 70%">
							<div class="bg-klinik-blue-light text-sm rounded-t-xl rounded-bl-xl p-4">
								Kalau kena sinar matahari siang cepet banget muncul
							</div>
							<div class="text-10px absolute -bottom-5 right-0 flex items-center">
								<div class="mr-1.5">12:21</div>
								<div><img src="{{ asset('images/d-check.svg') }}" alt="icon-done"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="sticky bottom-0 left-0 w-full bg-white">
					<div class="flex items-center">
						<button class="p-2 bg-klinik-primary rounded-full mr-3">
							<div class="p-1 rounded-full bg-klinik-primary">
								<img src="{{ asset('images/icon-camera.svg') }}" alt="icon" class="w-6 h-6">
							</div>
						</button>
						<div class="rounded-full bg-gray-200 w-full flex items-center p-2.5">
							<input type="text" class="w-full bg-gray-200 focus:outline-none pl-4" placeholder="tulis disini">
							<button class="p-2 bg-klinik-primary text-white rounded-full">
								<svg class="w-5 h-5 transform rotate-90" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z"></path></svg>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</x-layout-app>
@endsection
