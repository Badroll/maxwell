@extends("layouts.app")

@section("content")
<x-layout-app withNavbar withFooter withBottomNavbar="false">
    <div class="max-w-8xl mx-auto px-5 md:px-8 lg:px-16">
        <div class="pt-7  text-xs flex items-center">
            <a href="/services" class="text-klinik-primary font-medium">Estetika Solutions</a>
            <span class="px-2">•</span>
            <span>Acne Solutions</span>
        </div>
        <div class="block md:flex py-8">
            <div class="md:w-1/2 md:mr-8">
                <img src="{{ asset('images/service/sub-detail.svg') }}" alt="sub-detail" class="w-full h-auto max-h-48 md:max-h-full object-cover">
            </div>
            <div class="md:w-1/2">
							<div class="font-extrabold text-klinik-primary text-2xl md:text-4xl mt-6 md:mt-0 mb-2 md:mb-0">
								Acne Solutions
							</div> <br class="hidden md:block">
							<div class="font-extrabold text-xl md:text-2xl">
								Atasi jerawat dengan Acne Solutions dari Estetika dr. Affandi
							</div> <br>
							<div class="text-sm md:text-base">
								<div>
									Kata siapa remaja tidak perlu merawat kulitnya? Justru merawat kulit dari usia remaja sangat penting untuk dilakukan karena remaja bisa mengalami masalah kulit berminyak, berkomedo, dan berjerawat. Khusus para remaja, Estetika dr. Affandi menghadirkan Teen Skin Problem Solutions for Gen Z yang pas untuk mengatasi masalah kulit Anda.
								</div> <br>
								<div class="text-lg font-bold">
									Rangkaian Acne Solutions
								</div>
								<div class="text-black prose prose-sm md:prose max-w-full">
									<ul class="">
										<li>
											<div class="font-bold">Krim Perawatan</div>
											<ol>
												<li>
													<a href="/product-detail" style="text-decoration: none; color: #527BA9; font-weight: 600;">Krim Pagi*</a>
													<div>
														Untuk mengobati jerawat, meremajakan kulit, menyamarkan keriput halus, dan menjaga kelembapan alami kulit.
													</div>
												</li>
												<li>
													<a href="/product-detail" style="text-decoration: none; color: #527BA9; font-weight: 600;">Krim Malam*</a>
													<div>
														Dapat mengatasi noda-noda di wajah akibat bekas jerawat maupun paparan sinar matahari.
													</div>
												</li>
												<li>
													<a href="/product-detail" style="text-decoration: none; color: #527BA9; font-weight: 600;">Obat Minum Untuk Jerawat*</a>
													<div>
														Akan membantu mempercepat proses penyembuhan jerawat pada  kulit wajah Anda.
													</div>
												</li>
											</ol>
				
										</li>
										<li>
											<div class="font-bold">Treatments</div>
											<ol>
												<li>
													<a href="/treatment-detail" style="text-decoration: none; color: #527BA9; font-weight: 600;">Injeksi Jerawat</a>
													<div>
														Merupakan perawatan tepat untuk mengatasi jerawat meradang. Jerawat yang bernanah akan dikeluarkan terlebih dahulu, setelahnya jerawat akan diinjeksi.
													</div>
												</li>
												<li>
													<a href="/treatment-detail" style="text-decoration: none; color: #527BA9; font-weight: 600;">Acne Peeling</a>
													<div>
														Menjadi salah satu alternatif terbaik untuk menghilangkan jerawat dan bekasnya.
													</div>
												</li>
												<li>
													<a href="/treatment-detail" style="text-decoration: none; color: #527BA9; font-weight: 600;">Bright Lift Aquapure for Acne / Oily Skin</a>
													<div>
														Efektif mengeringkan jerawat yang meradang.
													</div>
												</li>
												<li>
													<a href="/treatment-detail" style="text-decoration: none; color: #527BA9; font-weight: 600;">Advanced Purifying Facial</a>
													<div>
														Efektif untuk menghilangkan & membersihkan kotoran pada pori.
													</div>
												</li>
												<li>
													<a href="/treatment-detail" style="text-decoration: none; color: #527BA9; font-weight: 600;">Detox & Deep Pore Cleans Facial</a>
													<div>
														Membersihkan sel kulit mati & menyerap kelebihan minyak di kulit.
													</div>
												</li>
											</ol>
										</li>
									</ul>
									<div class="text-sm">*) Harus dengan resep Dokter</div>
								</div>
							</div>
            </div>
        </div>
        
    </div>
</x-layout-app>

@endsection
