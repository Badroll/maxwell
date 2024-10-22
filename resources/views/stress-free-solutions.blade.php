@extends("layouts.app")

@section("content")

<x-layout-app withNavbar withFooter withBottomNavbar>
    <div class="">
			<div class="bg-klinik-blue-transparent">
				<div class="max-w-8xl mx-auto px-5 md:px-8 lg:px-16 pb-14 md:pb-24 pt-4 md:pt-7">
					<div class="pt-7 pb-2 md:pb-4 text-xs">
						<a href="/services" class="text-klinik-primary font-medium">Estetika Solutions</a>
						<span class="mx-2">|</span>
						<a href="/stress-free-solutions" class="font-medium">Stress Free Solutions</a>
					</div>
					<div class="flex items-center flex-col-reverse md:flex-row justify-between">
						<div class="flex flex-col md:max-w-lg xl:max-w-xl mt-16 md:mt-0">
							<div class="font-extrabold text-xl md:text-4.5xl mb-2 md:mb-6 uppercase tracking-wider md:tracking-wide leading-tight">Stress Free Solutions<br> By Spa Estetika</div>
							<div class="text-xs md:text-base pr-0 md:pr-4">
								Manjakan diri Anda dalam treatment Spa yang tidak hanya menghilangkan stress, tetapi juga menyegarkan fisik Anda yang penat setelah beraktivitas seharian. <br> <br>
								Manfaatkan program Spa Detox yang dapat mengeluarkan zat-zat merugikan dari tubuh Anda. Munculkan pesona kesegaran Anda yang seutuhnya setelah menikmati Body Scrub atau Body Massage Spa Estetika dengan bahan green tea, chocolate, dll., atau biarkan staff professional kami memberikan pelayanan terbaik kami dalam bentuk Javanese, French Swedish, atau Hot Store Body Massage.
							</div>
						</div>
						<div class="relative mt-5">
							{{-- img header desktop --}}
							<div class="hidden md:block">
								<img src="{{ asset('images/service/dot-gray.svg') }}" alt="shape" class="absolute -top-5 -left-5">
								<img src="{{ asset('images/service/circle-gray.svg') }}" alt="shape" class="absolute -right-6 -bottom-1.5">
								<img src="{{ asset('images/service/stress-free.jpg') }}" alt="header-img" height="414" width="311" class="relative rounded-xl">
							</div>
							{{-- img header mobile --}}
							<div class="md:hidden">
								<img src="{{ asset('images/service/dot.svg') }}" alt="shape" class="absolute -bottom-6 -right-6">
								<img src="{{ asset('images/service/stress-free.jpg') }}" alt="header-img" height="250" width="200" class="relative rounded-xl">
							</div>
						</div>
					</div>
				</div>
			</div>

			{{-- klinik solustion --}}
			<div class="">
				{{-- left 1 --}}
				<div>
					<x-item-stress-free-img-left title="Wajah Cerah Berkat Totok Wajah" image="{{ asset('images/service/solution-2.svg') }}" desc="
					<p>Totok Wajah merupakan terapi yang sudah lama dilakukan di China dengan cara memberikan pijatan dengan teknik khusus di sekujur wajah dengan mengaktifkan titik-titik aura wajah. Tekanan itu membuat aliran darah di wajah menjadi lebih lancar sehingga wajah terlihat segar dan halus. Manfaat totok wajah :</p>
					<ol>
						<li>Mengencangkan wajah, memperlancar peredaran darah dan menghilangkan letih di area wajah serta punggung</li>
						<li>Memperkecil pori-pori sehingga wajah terlihat lebih bersih dan halus</li>
						<li>Mengurangi kantong mata dan dampak penuaan dini berupa kerutan</li>
						<li>Mengurangi flek atau noda hitam di wajah</li>
					</ol>
					<p>Metode ini diawali dengan pembersihan wajah lalu pijatan untuk membuat Anda rileks. Setelah itu barulah proses penotokan dimulai. Ada beberapa aturan yang perlu diperhatikan sebelum melakukan totok wajah. Pertama, Anda harus berusia 15 tahun ke atas , wajah tidak berjerawat , selang waktu antara totok pertama dan kedua adalah seminggu.</p>
					" />
				</div>
				{{-- right 2 --}}
				<div class="bg-klinik-blue-transparent">
					<x-item-stress-free-img-right title="Bersih Dengan Intimacy Care" image="{{ asset('images/service/solution-3.svg') }}" desc="
					<p>Intimacy Care merupakan perawatan daerah kewanitaan dengan menggunakan ramuan yang berasal dari berbagai rempah yang beraroma harum semerbak khas tradisional keraton Jawa. Manfaat:</p>
					<ol>
						<li>Mengobati keputihan dan menghilangkan bau kurang sedap</li>
						<li>Sangat dianjurkan untuk wanita yang sudah berumah tangga karena dapat mengencangkan daerah intim wanita sehingga meningkatkan kualitas hubungan seksual</li>
					</ol>
					<p>Proses ini dilakukan dengan merebus rempah ratus sampai mendidih kemudian dituangkan di wadah yang diletakkan di bawah kursi khusus intimacy care. Duduklah dengan memakai kain penutup sehingga uap panasnya mengarah pada organ kewanitaan. Lakukan selama 30 menit.</p>
					" />
				</div>
				{{-- left 3 --}}
				<div>
					<x-item-stress-free-img-left title="Full Body Treatment Detox For Woman" image="{{ asset('images/service/solution-3.svg') }}" desc="
					<p>Tujuan: Membersihkan tubuh dari toxin, mengangkat sel-sel kulit mati, menghaluskan serta menjadikan kulit tampak lebih cerah.</p>
					<p>Menggunakan Essential Oil Fennel (Foeniculum vulgare), Rosemary (Rosemarinus officinalis), Lemon (Citrus limonom), Juniper (Juniperus communis) , dan Tyme (Thymus vulgaris ). Essential Oil yang terkandung didalamnya berfungsi untuk:</p>
					<ol>
						<li>Menurunkan obesitas</li>
						<li>Mengurangi nafsu makan</li>
						<li>Mempercepat pembakaran lemak</li>
						<li>Memperlancar peredaran darah</li>
						<li>Peremajaan kulit</li>
					</ol>
					" />
				</div>
				
				{{-- right 4 --}}
				<div class="bg-klinik-blue-transparent">
					<x-item-stress-free-img-right title="Full Body Treatment Shooting For Woman" image="{{ asset('images/service/solution-4.svg') }}" desc="
					<p>Tujuan : Melebarkan pembuluh darah sehingga otot yang tegang menjadi relaks serta melembabkan kulit tubuh yang kering dan kusam.</p>
					<p>Menggunakan essential oil Mandarin, Cananga (Cananga macrophylla), Ylang ylang (Canangium odoratum), dan Lemon (Citrus limonom). Essential Oil yang terkandung didalamnya berfungsi untuk:</p>
					<ol>
						<li>Merawat kulit lelah menjadi relax</li>
						<li>Menumbuhkan selera humor dan kenyamanan secara menyeluruh</li>
					</ol>
					" />
				</div>
				{{-- left 5 --}}
				<div>
					<x-item-stress-free-img-left title="Full Body Treatment Relaxing For Woman" image="{{ asset('images/service/solution-5.svg') }}" desc="
					<p>Tujuan : Bermanfaat untuk relaksasi tubuh, jiwa dan pikiran. Rasakan kesegaran baru setelah menjalani perawatan ini.</p>
					<p>Menggunakan essential oil Lavender (Lanvandula officinalis), Cananga (Cananga macrophylla), Patchouli (Pogostemon odoratum), dan Orange (Citrus aurantium). Essential Oil yang terkandung didalamnya berfungsi untuk :</p>
					<ol>
						<li>Menenangkan</li>
						<li>Melegakan pernafasan / flu</li>
						<li>Menurunkan tekanan darah</li>
						<li>Membantu mengatasi insomnia</li>
					</ol>
					" />
				</div>
				{{-- right 6 --}}
				<div class="bg-klinik-blue-transparent">
					<x-item-stress-free-img-right title="Full Body Treatment Energizing For Woman" image="{{ asset('images/service/solution-6.svg') }}" desc="
					<p>Tujuan : Bermanfaat untuk menghilangkan rasa letih dan pegal. Dengan rempah-rempah Bali yang harum dan hangat, Anda akan merasakan pemulihan energy setelah menjalani perawatan ini.</p>
					<p>Menggunakan essential oil Geranium (Pelargonium graveolens), Ylang ylang (Canangium odoratum), Patchouli (Pogostemon calolin), dan Grape fruit (Citrus paradisi). Essential Oil yang terkandung didalamnya berfungsi untuk :</p>
					<ol>
						<li>Menghilangkan rasa cemas, stress dan depresi</li>
						<li>Memberikan rasa aman, bahagia dan percaya diri</li>
					</ol>
					" />
				</div>

			{{-- space tambahan untuk memberi jarak dengan footer footer --}}
			{{-- jika jumlah item service ganjil maka diberi class 'bg-white' untuk merubah background menjadi putih --}}
			{{-- jika jumlah item service genap maka diberi class 'bg-klinik-blue-transparent' untuk merubah background menjadi biru --}}
			<div class="h-16 bg-klinik-blue-transparent -mb-11"></div>
    </div>
</x-layout-app>

@endsection
