@extends("layouts.app")

@section("head")
	<link rel="stylesheet" href="https://unpkg.com/swiper@6/swiper-bundle.min.css" />
@endsection

@section("content")
<x-layout-app withNavbar withFooter withBottomNavbar>
    <div class="pt-10 mb-6 md:mb-16">
		<div class="items-center justify-center hidden w-full h-40 md:flex bg-grad-header">
			<div class="text-5xl font-extrabold tracking-wider text-white">Tentang Klinik Estetika dr. Affandi</div>
		</div>
		<div class="block px-5 md:hidden">
			<div class="text-xl font-extrabold md:text-2xl">Tentang Klinik Estetika dr. Affandi</div>
		</div>
    </div>
    
    <div class="px-5 mx-auto max-w-8xl md:px-8 lg:px-16">
      <div class="mx-auto max-w-8xl">
				<div>
					<div class="leading-normal">
						<div class="text-justify">
							<img src="{{ asset('images/about/atas.jpg') }}" alt="about" class="w-auto mx-auto bg-gray-200 md:mr-8 md:mb-8 md:float-left max-h-100 rounded-xl" />
							<div class="pt-5 text-lg font-extrabold text-klinik-primary md:text-2xl md:pt-0">
								Don’t worry be beautiful
							</div> <br>
							<div class="text-sm md:text-base">
									Kulit yang sehat dan terawat tentu menjadi dambaan setiap orang. Oleh karena
									itu dr. M. Affandi Sp.KK(K) sebagai seorang Dokter Spesialis Kulit yang berpengalaman ingin membantu mewujudkan keinginan tersebut . dr. M. Affandi, Sp.KK(K) kemudian mengembangkan layanan / tindakan medis dan produk perawatan kulit berstandar dermatologi.
									Tindakan medis dan produk perawatan yang dikembangkan oleh dr. M. Affandi, Sp.KK(K) menggunakan formulasi dermatologi terbaik dan disusun secara personal untuk setiap pasien. Hal ini tentunya menjadi suatu metode perawatan kulit yang sangat efektif bagi masing-masing pasien.
							</div> <br>
							<div class="text-sm md:text-base">
									Sejarah Klinik Estetika berawal dari praktek pribadi dr. M.Affandi, Sp.KK(K) sejak
									tahun 1988 di Jl. Let.Jend. S. Parman No. 16 A, Semarang. Berawal dari praktek Dokter pribadi tersebut , dr. M. Affandi, Sp.KK(K) telah menghadirkan berbagai jenis perawatan kulit dengan standar medis yang ketat. Berbekal respon positif dari masyarakat, mendorong beliau untuk memberikan pelayanan yang lebih baik lagi. Oleh karena itu sejak tanggal 6 Maret 1990, praktek dr. M. Affandi, Sp.KK(K) berpindah ketempat yang lebih luas dan lebih nyaman di Jl. Kyai Saleh No. 9 Semarang. 
							</div> <br>
						</div>
						<div class="text-sm text-justify md:text-base">
							<div>
									Seiring dengan tuntutan perkembangan jaman dan tekad untuk semakin meningkatkan kualitas pelayanan kepada pasien, maka sejak tahun 2005 praktek pribadi tersebut bertransformasi menjadi sebuah Klinik Spesialis Kulit , yatu Klinik Estetika dr. Affandi. Sebuah Klinik Spesialis Kulit yang menerapkan standar dermatologi terbaik bagi perawatan kulit pasien-pasiennya.
							</div> <br>
							<div>
									Selain inovasi di bidang produk perawatan dan inovasi jenis tindakan medis, Klinik Estetika dr.Affandi juga terus mengikuti perkembangan di bidang teknologi demi mewujudkan layanan effortless bagi pasien-pasiennya. Bentuk nyata atas inovasi tersebut berupa <b>website e-commerce Klinik Estetika dr. Affandi</b>. Melalui website <b>www.klinikestetika.com</b> maka pasien dapat melakukan konsultasi dengan tim Dokter secara online tanpa harus berkunjung langsung ke cabang Klinik. Pasien juga bisa melakukan pembelian produk perawatan melalui website tersebut.
							</div> <br>
							<div>
									Klinik Estetika dr. Affandi merupakan klinik kecantikan pertama yang menghadirkan layanan konsultasi Dokter online secara live. Ada tiga macam layanan konsultasi online yaitu <b>Live Video Consultation</b>, <b>Photo Consultation</b> dan <b>Live Chat Consultation</b>. Klinik Estetika dr. Affandi juga merupakan klinik kecantikan pertama yang menyediakan platform e-commerce bagi pasien-pasiennya. Melalui website tersebut maka pasien bisa melakukan konsultasi Dokter, pemesanan produk perawatan, pembelian dan pembayaran melalui satu platform. Ada berbagai pilihan metode pembayaran yang akan memudahkan pasien dalam menyelesaikan pembelian produk perawatan.
							</div> <br>
							<div>
									Dengan makin berkembangnya teknologi komunikasi maka saat ini smartphone menjadi salah satu alat komunikasi yang sangat vital. Menyikapi hal ini Klinik Estetika dr. Affandi meluncurkan layanan <b>Estetika Mobile Apps</b> yang bisa didownload via Google PlayStore dan App Store. Layanan ini semakin memudahkan pasien melakukan konsultasi Dokter online melalui <b>Live Video Consultation</b>, <b>Photo Consultation</b> dan <b>Live Chat Consultation</b> ataupun melakukan pembelian produk perawatan. Keberadaan mobile apps ini juga menempatkan Klinik Estetika dr. Affandi sebagai klinik kecantikan pertama yang menyediakan layanan melalui aplikasi mobile.
							</div> <br>
						</div>
						<div class="text-justify">
							<img src="{{ asset('images/about/bawah.jpg') }}" alt="about" class="w-auto mx-auto mb-5 bg-gray-200 md:ml-8 md:mb-8 md:float-right max-h-100 rounded-xl" />
							<div class="text-sm md:text-base">
								Klinik Estetika dr.Affandi juga memahami mobilitas pasien yang cukup tinggi, dimana dalam satu hari bisa saja pasien berada di 2 kota yang berbeda dan berkunjung ke Klinik Estetika yang berbeda. Untuk itu dikembangkan sistem data base pasien “online real time” di seluruh cabang Klinik Estetika. Jadi, bukan menjadi masalah bila pasien berkunjung ke 2 Klinik Estetika yang berbeda dalam satu hari karena data pasien akan selalu update / terbarukan. Database pasien di seluruh cabang juga terkoneksi dengan Estetika Mobile Apps , sehingga terwujud seamless connectivity antara layanan offline dan online (OMNI Channel).
							</div> <br>
							<div class="text-sm md:text-base">
								Klinik Estetika dr. Affandi berhasil membuktikan pencapaiannya dengan meraih penghargaan dari Majalah SWA, berupa Indonesia Healthcare Most Reputable Brand dua tahun berturut-turut yaitu pada tahun 2014 dan tahun 2015. Selain itu di tahun 2020 dan 2021 Klinik Estetika dr. Affandi juga meraih 5 penghargaan berturut-turut dari Markeeters by MarkPlus.Inc.. Adapun 5 penghargaan tersebut yaitu: Omni Brands Of The Years 2020, Marketeers Youth Choice Brand of The Year 2020, Marketeers Editor’s Choice Award 2020, WOW Brand 2021 dan Brand For Good 2021.
							</div> <br>
							<div class="text-sm md:text-base">
									Dengan menerapkan standar profesionalisme yang tinggi dan standar dermatologi yang ketat, maka sudah menjadi komitmen dari Klinik Estetika dr. Affandi untuk selalu memberikan pelayanan terbaik bagi seluruh pasien-pasiennya. Klinik Estetika dr. Affandi sangat memahami bahwa kesehatan, keindahan dan kecantikan adalah harta yang sangat tak ternilai.
							</div> <br>
							<div class="text-sm md:text-base">
									Don’t worry be beautiful
							</div>
						</div>
					</div>
				</div>
				{{-- slideshow --}}
				<div class="my-12">
					<div class="relative">
						<div class="flex">
							<div class="relative w-full swiper-container swiper-about">
								<div class="swiper-wrapper">
									{{-- card --}}
									<div class="w-full swiper-slide">
										<img src="{{ asset('images/about/slideshow1.jpg') }}" alt="" class="object-cover w-full h-64 rounded-xl">
									</div>
									{{-- card --}}
									<div class="w-full swiper-slide">
										<img src="{{ asset('images/about/slideshow2.jpg') }}" alt="" class="object-cover w-full h-64 rounded-xl">
									</div>
									{{-- card --}}
									<div class="w-full swiper-slide">
										<img src="{{ asset('images/about/slideshow3.jpg') }}" alt="" class="object-cover w-full h-64 rounded-xl">
									</div>
									{{-- card --}}
									<div class="w-full swiper-slide">
										<img src="{{ asset('images/about/slideshow4.jpg') }}" alt="" class="object-cover w-full h-64 rounded-xl">
									</div>
									{{-- card --}}
									<div class="w-full swiper-slide">
										<img src="{{ asset('images/about/slideshow5.jpg') }}" alt="" class="object-cover w-full h-64 rounded-xl">
									</div>

								</div>
							</div>
						</div>
						<!-- Add navigation -->
						<div class="flex justify-between w-full max-w-8xl">
							<div
								class="absolute z-30 p-1 bg-white border-2 rounded-full swiper-btn-prev text-klinik-primary border-klinik-primary -left-4 md:-left-6"
								style="top: 45%;"
							>
								<svg
								class="w-6 h-6 md:w-7 md:h-7"
								fill="none"
								stroke="currentColor"
								viewBox="0 0 24 24"
								xmlns="http://www.w3.org/2000/svg"
								>
								<path
									stroke-linecap="round"
									stroke-linejoin="round"
									stroke-width="2"
									d="M15 19l-7-7 7-7"
								></path>
								</svg>
							</div>
							<div
								class="absolute z-30 p-1 bg-white border-2 rounded-full swiper-btn-next text-klinik-primary border-klinik-primary -right-4 md:-right-6"
								style="top: 45%;"
							>
								<svg
								class="w-6 h-6 md:w-7 md:h-7"
								fill="none"
								stroke="currentColor"
								viewBox="0 0 24 24"
								xmlns="http://www.w3.org/2000/svg"
								>
								<path
									stroke-linecap="round"
									stroke-linejoin="round"
									stroke-width="2"
									d="M9 5l7 7-7 7"
								></path>
								</svg>
							</div>
						</div>
					</div>
				</div>
				
        <div class="my-12">
          <hr />
        </div>
				{{-- VISI & MISI Estetika dr. Affandi --}}
        <div class="pb-10">
					<div class="pb-6">
						<div class="pb-2 text-base font-bold tracking-wider md:text-lg text-klinik-primary">VISI & MISI Estetika dr. Affandi</div>
					</div>
					<div class="pb-6">
						<div class="pb-2 text-base font-semibold md:text-lg">Visi</div>
						<div class="text-sm md:text-base">To become the most admired skin-care company in Indonesia in <b>delivering happiness experience.</b></div>
					</div>
					<div>
						<div class="pb-2 text-base font-semibold md:text-lg">Misi</div>
						<div class="max-w-full text-sm prose text-black md:text-base">
							<ol>
								<li>Memberikan solusi terbaik atas permasalahan kulit yang dihadapi oleh pasien.</li>
								<li>Menciptakan dan memberikan formulasi produk perawatan terbaik bagi pasien.</li>
								<li>Menyusun dan memberikan tindakan medis terbaik bagi pasien.</li>
								<li>Memberikan solusi secara digital atas permasalahan kulit pasien.</li>
							</ol>
						</div>
					</div>
        </div>
				<div><hr></div>
				{{-- VISI & MISI Estetika b-Eauty Commerce --}}
        <div class="pt-10 pb-10">
					<div class="pb-8">
						<div class="pb-2 text-base font-bold tracking-wider md:text-lg text-klinik-primary">VISI & MISI Estetika b-Eauty Commerce</div>
					</div>
					<div class="pb-8">
						<div class="pb-2 text-base font-semibold md:text-lg">Visi</div>
						<div class="text-sm md:text-base">Menjadi top of mind dan top of choice layanan perawatan kulit secara online di Indonesia.</div>
					</div>
					<div>
						<div class="pb-2 text-base font-semibold md:text-lg">Misi</div>
						<div class="max-w-full text-sm prose text-black md:text-base">
							<ol>
								<li>Memberikan pelayanan perawatan kulit secara online bagi seluruh masyarakat Indonesia.</li>
								<li>Menjadi penghubung antara perawatan online (www.klinikestetika.com) dan offline (cabang Klinik Estetika dr. Affandi).</li>
							</ol>
						</div>
					</div>
        </div>
      </div>
    </div>
</x-layout-app>

<script src="https://unpkg.com/swiper@6/swiper-bundle.min.js"></script>

<script>
	var swiperAbout = new Swiper('.swiper-about', {
		navigation: {
			nextEl: '.swiper-btn-next',
			prevEl: '.swiper-btn-prev',
			disabledClass: 'opacity-50'
		},
		slidesPerView: 1,
		spaceBetween: 30,
		breakpoints: {
			640: {
				slidesPerView: 2,
				spaceBetween: 30
			},
			920: {
				slidesPerView: 3,
				spaceBetween: 30
			},
		}
	});
</script>

@endsection
