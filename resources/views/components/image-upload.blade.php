<div x-data="imageViewer()">
  <div class="bg-klinik-blue-light rounded-md h-44 w-full flex items-center justify-center">
		<div x-show="!imageUrl">
			<img src="{{ asset('images/upload-icon.svg') }}" alt="upload-icon" class="">
		</div>
		<div x-show="imageUrl" class="p-4">
			<img :src="imageUrl" alt="upload-icon" class="w-full h-auto object-cover">
		</div>
	</div>
	<div class="mt-4 border-2 border-klinik-primary text-sm bg-klinik-primary rounded-full py-1.5 lg:py-2 w-full font-semibold focus:outline-none relative flex justify-center">
		<label for="{{ $name }}" class="text-white relative cursor-pointer">
			<span class="uppercase">unggah file foto</span>
			<input id="{{ $name }}" name="{{ $name }}" type="file" class="sr-only" @change="fileChosen">
		</label>
	</div>
</div>
<script>
	function imageViewer() {
		return {
			imageUrl: null,

			fileChosen(event) {
				this.fileToDataUrl(event, src => this.imageUrl = src)
			},

			fileToDataUrl(event, callback) {
				if (!event.target.files.length) return

				let file = event.target.files[0]
				let reader = new FileReader()

				reader.readAsDataURL(file)
				reader.onload = e => callback(e.target.result)
			},
		}
	}
</script>