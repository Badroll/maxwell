{{-- footer start --}}
<div class="bg-grad-footer text-white px-6 pt-16 md:pt-16" x-data="{ openModal: false }" x-init="openModal = false">
  <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1">
    
    <div style="background: transparent;" id="footer-sosmed-call">
      <div>
        <div>
          <img src="{{asset('images/_mw/logo-footer.png')}}" class="mx-auto" width="200"/>
        </div>
      </div>

      <div class="flex justify-center space-x-5 mt-8">
        <a href="mailto:frontoffice@maxwell-hotel.com" rel="noopener">
          <img src="{{asset('images/_mw/icon/email.png')}}" alt="icon-email" class="" />
        </a>
        <a href="https://wa.me/6288211107970?text=Halo,%20Saya%20ingin%20bertanya%20mengenai%20Hotel%20Maxwell" target="_blank" rel="noopener">
          <img src="{{asset('images/_mw/icon/whatsapp.png')}}" alt="icon-wa" class="" />
        </a>
        <a href="https://instagram.com/hotel.maxwell70?igshid=YmMyMTA2M2Y=" target="_blank" rel="noopener">
          <img src="{{asset('images/_mw/icon/instagram.png')}}" alt="icon-ig" class="" />
        </a>
        <a href="https://www.facebook.com/profile.php?id=100085380207115 " target="_blank" rel="noopener">
          <img src="{{asset('images/_mw/icon/facebook.png')}}" alt="icon-fb" class="" />
        </a>
      </div>
    </div>

    <div class="md:pt-0 pt-10" style="background: transparent">
      <div class="flex">
        <div class="mb-7 font-bold text-base md:text-xl border-b-2 border-white md:border-none">SERVICES</div>
      </div>
      <div class="flex flex-col space-y-4 pr-2 font-bold text-sm md:text-base">
        <a href="/services#lobby">LOBBY AREA</a>
        <a href="/services#meeting-room" class="uppercase">LOBBY MEETING ROOM</a>
        <a href="/services#restaurant" class="uppercase">RESTAURANT</a>
        <a href="/services#standard-deluxe-room" class="uppercase">STANDARD DELUXE ROOM</a>
        <a href="/services#executive-room" class="uppercase">EXECUTIVE ROOM</a>
        <a href="/services#bar" class="uppercase">BAR</a>
      </div>
    </div>

    <div class="lg:pt-0 pt-12" style="background: transparent;">
      <div class="flex">
        <p class="mb-7 font-bold text-base md:text-xl border-b-2 border-white md:border-none">POINTS OF INTEREST</p>
      </div>
      <div class="grid capitalize text-sm">
        <div class="space-y-4">
          <a href="https://goo.gl/maps/sN5D7Q7vs3fdge2TA" target="_blank" class="flex items-start">
            <img src="{{ asset('images/chevron.svg') }}" alt="icon" class="mr-2" style="padding-top: 2px">
            Kota Tua (Old Town) Fatahillah Museum
          </a>
          <a href="https://goo.gl/maps/t3bRb8nZDZ8fKgaf7" target="_blank" class="flex items-start">
            <img src="{{ asset('images/chevron.svg') }}" alt="icon" class="mr-2" style="padding-top: 2px">
            Sunda Kelapa (old harbour)
          </a>
          <a href="https://goo.gl/maps/qDdQjWxKKe7ib8ic8" target="_blank" class="flex items-start">
            <img src="{{ asset('images/chevron.svg') }}" alt="icon" class="mr-2" style="padding-top: 2px">
            Mangga Dua shopping center
          </a>
          <a href="https://goo.gl/maps/kEKNqPRaQ7Zu8M4W8" target="_blank" class="flex items-start">
            <img src="{{ asset('images/chevron.svg') }}" alt="icon" class="mr-2" style="padding-top: 2px">
            Harco Central electronic shopping area
          </a>
          <a href="https://goo.gl/maps/BjDu89V4Zf8mDcao6" target="_blank" class="flex items-start">
            <img src="{{ asset('images/chevron.svg') }}" alt="icon" class="mr-2" style="padding-top: 2px">
            Ancol Dreamland and Seaworld Indonesia
          </a>
          <a href="https://goo.gl/maps/bD9gonoBi4P9AS3y9" target="_blank" class="flex items-start">
            <img src="{{ asset('images/chevron.svg') }}" alt="icon" class="mr-2" style="padding-top: 2px">
            Mangga Besar street food hawkers
          </a>
          <a href="https://goo.gl/maps/wqyUuC2vz7eaTSTX7" target="_blank" class="flex items-start">
            <img src="{{ asset('images/chevron.svg') }}" alt="icon" class="mr-2" style="padding-top: 2px">
            JIEXPO (Jakarta Fair ground)
          </a>
          <a href="https://goo.gl/maps/ykypCqxfpKsqzWEVA" target="_blank" class="flex items-start">
            <img src="{{ asset('images/chevron.svg') }}" alt="icon" class="mr-2" style="padding-top: 2px">
            Kemayoran Golf Course
          </a>
          <a href="https://goo.gl/maps/5cntQxQuKfou1iiE6" target="_blank" class="flex items-start">
            <img src="{{ asset('images/chevron.svg') }}" alt="icon" class="mr-2" style="padding-top: 2px">
            BEOS old railways station
          </a>
          <a href="https://goo.gl/maps/1Axvqr1NkcGGMK5n9" target="_blank" class="flex items-start">
            <img src="{{ asset('images/chevron.svg') }}" alt="icon" class="mr-2" style="padding-top: 2px">
            JIS (Jakarta International Stadium)
          </a>
          <a href="https://goo.gl/maps/carYBuQpj9iEa54q8" target="_blank" class="flex items-start">
            <img src="{{ asset('images/chevron.svg') }}" alt="icon" class="mr-2" style="padding-top: 2px">
            Soekarno Hatta International Airport
          </a>
        </div>
      </div>
    </div>

    <div class="hidden lg:block lg:pt-0 pt-12" style="background: transparent;">
      <div class="flex">
        <div class="mb-7 font-bold text-base md:text-xl border-b-2 border-white md:border-none">ADDRESS</div>
      </div>
      <p class="mb-3">Jl. Pangeran Jayakarta No.70, Mangga Dua Selatan, Kecamatan Sawah Besar, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10730</p>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.880233802795!2d106.8315006!3d-6.146783999999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5efaef9675b%3A0xf224c118e4981fcf!2sMAXWELL%20Hotel%20Jakarta!5e0!3m2!1sen!2sid!4v1665072657993!5m2!1sen!2sid" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <div class="sm:block lg:hidden pt-12">
      <div class="flex">
        <div class="mb-7 font-bold text-base md:text-xl border-b-2 border-white md:border-none">ADDRESS</div>
      </div>
      <p class="mb-2">Jl. Pangeran Jayakarta No.70, Mangga Dua Selatan, Kecamatan Sawah Besar, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10730</p>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.880233802795!2d106.8315006!3d-6.146783999999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5efaef9675b%3A0xf224c118e4981fcf!2sMAXWELL%20Hotel%20Jakarta!5e0!3m2!1sen!2sid!4v1665072657993!5m2!1sen!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

  </div>

  <div
    class="md:pb-10 pb-20 text-white border-t-2 border-white mt-10 pt-5 text-sm"
  >
    <div
      class="flex md:justify-between items-center flex-col-reverse md:flex-row"
    >
      <div class="text-center md:pt-0 pt-4">Copyright ©2022 Hotel Maxwell</div>
    </div>
  </div>
</div>
{{-- footer end --}}