<div class="bg-klinik-blue-transparent">
	<div class="max-w-8xl mx-auto px-5 md:px-8 lg:px-16 py-12 md:py-20 flex flex-col items-center relative">
		<div class="flex items-center justify-between w-full mb-8 md:mb-12">
			<div>
				<div class="text-xs md:text-lg font-semibold tracking-widest mb-1.5 font-poppins">NEWS & ARTICLES</div>
				<div class="text-xl md:text-3.5xl font-bold mb-2 md:mb-4">Get Updated Every Day</div>
				<div class="w-32 bg-klinik-primary" style="height: 2px"></div>
			</div>
			<div class="hidden md:block">
				<a
					href="/our-news"
					class="px-6 py-2 bg-klinik-primary text-white rounded-full font-semibold btn-focus-primary uppercase opacity-80 tracking-wide text-sm"
				>
					ALL NEWS & ARTICLES
				</a>
			</div>
		</div>
	
		{{-- news desktop --}}
		<div class="relative w-full">
			<div class="relative grid grid-cols-1 md:grid-cols-2 gap-8 mb-6 md:mb-0">
				{{-- card news --}}
				<a href="/news-detail" class="block">
					<div class="rounded flex flex-col h-full bg-white border-2 border-gray-200">
						<div>
							<img src="{{asset('images/home/news-header.svg')}}" alt="news" class="w-full h-40 md:h-72 object-cover rounded" />
						</div>
						<div class="p-4 flex-grow">
							<div class="flex mb-3">
								<div class="flex items-center text-sm mr-4">
									<div class="mr-1.5">
										<svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
									</div>
									<div>01 Nov 2018</div>
								</div>
								<div class="flex items-center text-sm">
									<div class="mr-1.5">
										<svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
									</div>
									<div>Ollie Harvey</div>
								</div>
							</div>
							<div class="font-bold text-2xl mb-2">
								Judul Berita
							</div>
						</div>
						<div class="p-4 pt-0 text-sm flex-grow-0 flex justify-between text-klinik-primary">
							<div class="flex items-center">
								<div class="mr-1.5">
									<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path></svg>
								</div>
								<div>Tips</div>
							</div>
							<div>Read more</div>
						</div>
					</div>
				</a>
				{{-- card news - hidden in mobile--}}
				<a href="/news-detail" class="hidden md:block">
					<div class="rounded flex flex-col h-full bg-white border-2 border-gray-200">
						<div>
							<img src="{{asset('images/home/news-header.svg')}}" alt="news" class="w-full h-40 md:h-72 object-cover rounded" />
						</div>
						<div class="p-4 flex-grow">
							<div class="flex mb-3">
								<div class="flex items-center text-sm mr-4">
									<div class="mr-1.5">
										<svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
									</div>
									<div>01 Nov 2018</div>
								</div>
								<div class="flex items-center text-sm">
									<div class="mr-1.5">
										<svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
									</div>
									<div>Ollie Harvey</div>
								</div>
							</div>
							<div class="font-bold text-2xl mb-2">
								Judul Berita
							</div>
						</div>
						<div class="p-4 pt-0 text-sm flex-grow-0 flex justify-between text-klinik-primary">
							<div class="flex items-center">
								<div class="mr-1.5">
									<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path></svg>
								</div>
								<div>Tips</div>
							</div>
							<div>Read more</div>
						</div>
					</div>
				</a>
			</div>
			<div class="text-center mt-8 md:hidden">
				<a
					href="/our-news"
					class="px-6 py-2 bg-klinik-primary text-white rounded-full font-semibold btn-focus-primary opacity-80"
				>
					ALL NEWS & ARTICLES
				</a>
			</div>
		</div>
	</div>
</div>