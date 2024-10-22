@extends("layouts.app")

@section("content")
<x-layout-app withNavbar withFooter withBottomNavbar>
	<div>
		<div class="max-w-8xl mx-auto px-5 md:px-8 lg:px-16">
			<div class="pt-6 md:pt-24 block md:flex items-center">
				<div class="text-lg md:text-3.5xl font-extrabold mr-8">
					My Token
				</div>
			</div>
			{{-- halaman ketika konsultasi tersedia --}}
			<div class="mt-6 mb-20">
				{{-- tampilan desktop --}}
				<table class="table-fixed w-full">
					<thead>
						<tr class="border-t border-b border-gray-200">
							<th class="text-left py-5 px-2 w-5/12 md:w-4/12">Tanggal</th>
							<th class="py-5 px-2 text-left w-5/12">Keterangan</th>
							<th class="py-5 px-2 w-2/12 md:w-3/12"></th>
						</tr>
					</thead>
					<tbody>
						<tr class="border-b border-gray-200">
							<td class="text-left py-3 px-2 text-sm font-bold">20 Juli 2020 - 13:15</td>
							<td class="py-3 px-2 font-bold text-sm">Give away Estetika Token</td>
							<td class="py-3 px-2 font-bold text-sm text-center">+ 1</td>
						</tr>
						<tr class="border-b border-gray-200">
							<td class="text-left py-3 px-2 text-sm font-bold">20 Juli 2020 - 13:15</td>
							<td class="py-3 px-2 font-bold text-sm">Biaya konsultasi video</td>
							<td class="py-3 px-2 font-bold text-sm text-center">- 1</td>
						</tr>
						<tr class="border-b border-gray-200">
							<td class="text-left py-3 px-2 text-sm font-bold">20 Juli 2020 - 13:15</td>
							<td class="py-3 px-2 font-bold text-sm">	Biaya konsultasi foto</td>
							<td class="py-3 px-2 font-bold text-sm text-center">- 1</td>
						</tr>
					</tbody>
				</table>
        <div>

        </div>
        <div class="flex items-center border-t border-b border-gray-300">
					<div class="w-5/12 md:w-4/12"></div>
          <div class="text-base font-bold py-5 px-2 w-5/12">Sisa Token :</div>
          <div class="text-base font-bold py-5 px-2 w-2/12 md:w-3/12 text-center">6</div>
        </div>
			</div>
		</div>
	</div>
</x-layout-app>
@endsection
