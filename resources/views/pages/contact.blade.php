@extends("layouts.default")
@section("title","Selamat datang")

@section("main")

    <!-- ========== CONTACT SECTION ========== -->

<!-- Contact Us -->
<div class="bg-gradient-to-b from-blue-100 via-white to-blue-50 pb-0">
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
      <div class="max-w-2xl lg:max-w-5xl mx-auto">
        <div class="mt-12 grid items-start lg:grid-cols-2 gap-6 lg:gap-16">
          <!-- Contact Information Column (Left) -->
          <div>
            <h1 class="text-3xl font-bold text-blue-800 sm:text-4xl mb-8">
              Contact us
            </h1>
            
            <!-- Contact Cards - Single Column -->
            <div class="space-y-4">
              <!-- Card 1: Telepon -->
              <div class="bg-white/80 p-5 rounded-xl shadow-md flex items-center">
                <div class="flex-shrink-0 mr-4">
                  <svg class="size-8 text-blue-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                  </svg>
                </div>
                <div>
                  <h3 class="font-semibold text-blue-800 mb-1">Telepon</h3>
                  <p class="text-blue-600">44 123 4567 890</p>
                </div>
              </div>
              
              <!-- Card 2: Email -->
              <div class="bg-white/80 p-5 rounded-xl shadow-md flex items-center">
                <div class="flex-shrink-0 mr-4">
                  <svg class="size-8 text-blue-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                    <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                  </svg>
                </div>
                <div>
                  <h3 class="font-semibold text-blue-800 mb-1">Email</h3>
                  <p class="text-blue-600">info@hogwarts.ac.uk</p>
                </div>
              </div>
              
              <!-- Card 3: Alamat -->
              <div class="bg-white/80 p-5 rounded-xl shadow-md flex items-center">
                <div class="flex-shrink-0 mr-4">
                  <svg class="size-8 text-blue-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"></path>
                    <circle cx="12" cy="10" r="3"></circle>
                  </svg>
                </div>
                <div>
                  <h3 class="font-semibold text-blue-800 mb-1">Alamat</h3>
                  <p class="text-blue-600">Kastil Hogwarts, Hogsmeade, Skotlandia</p>
                </div>
              </div>
              
              <!-- Card 4: Jam Operasional -->
              <div class="bg-white/80 p-5 rounded-xl shadow-md flex items-center">
                <div class="flex-shrink-0 mr-4">
                  <svg class="size-8 text-blue-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="10"></circle>
                    <polyline points="12 6 12 12 16 14"></polyline>
                  </svg>
                </div>
                <div>
                  <h3 class="font-semibold text-blue-800 mb-1">Jam Operasional</h3>
                  <p class="text-blue-600">Senin - Jumat: 07.00 - 15.00 WIB</p>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Form Column (Right) -->
          <div class="flex flex-col border border-blue-200 bg-white/80 rounded-xl p-4 sm:p-6 lg:p-8 shadow-md">
            <h2 class="mb-8 text-xl font-semibold text-blue-800">
              Fill in the form
            </h2>
    
            <form>
              <div class="grid gap-4">
                <!-- Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                  <div>
                    <label for="hs-firstname-contacts-1" class="sr-only">First Name</label>
                    <input type="text" name="hs-firstname-contacts-1" id="hs-firstname-contacts-1" class="py-2.5 sm:py-3 px-4 block w-full border-blue-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" placeholder="First Name">
                  </div>
    
                  <div>
                    <label for="hs-lastname-contacts-1" class="sr-only">Last Name</label>
                    <input type="text" name="hs-lastname-contacts-1" id="hs-lastname-contacts-1" class="py-2.5 sm:py-3 px-4 block w-full border-blue-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" placeholder="Last Name">
                  </div>
                </div>
                <!-- End Grid -->
    
                <div>
                  <label for="hs-email-contacts-1" class="sr-only">Email</label>
                  <input type="email" name="hs-email-contacts-1" id="hs-email-contacts-1" autocomplete="email" class="py-2.5 sm:py-3 px-4 block w-full border-blue-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" placeholder="Email">
                </div>
    
                <div>
                  <label for="hs-phone-number-1" class="sr-only">Phone Number</label>
                  <input type="text" name="hs-phone-number-1" id="hs-phone-number-1" class="py-2.5 sm:py-3 px-4 block w-full border-blue-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" placeholder="Phone Number">
                </div>
    
                <div>
                  <label for="hs-about-contacts-1" class="sr-only">Details</label>
                  <textarea id="hs-about-contacts-1" name="hs-about-contacts-1" rows="4" class="py-2.5 sm:py-3 px-4 block w-full border-blue-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" placeholder="Details"></textarea>
                </div>
              </div>
              <!-- End Grid -->
    
              <div class="mt-4 grid">
                <button type="submit" class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">Send inquiry</button>
              </div>
    
              <div class="mt-3 text-center">
                <p class="text-sm text-blue-600">
                  We'll get back to you in 1-2 business days.
                </p>
              </div>
            </form>
          </div>
          <!-- End Card -->
        </div>
      </div>
    </div>
  </div>
  <!-- End Contact Us -->
  
  <!-- ========== END CONTACT SECTION ========== -->
  
<!-- ========== MAP SECTION ========== -->
<section class="bg-gradient-to-b from-blue-50 via-blue-100 to-blue-200 pt-8 pb-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <h2 class="text-3xl font-bold text-center text-blue-800 mb-8">Lokasi Kami</h2>
      
      <div class="relative w-full h-[500px] rounded-xl overflow-hidden shadow-lg border-4 border-white">
        <div class="absolute inset-0 bg-gradient-to-t from-blue-500/30 to-blue-300/10 pointer-events-none z-10"></div>
        <iframe 
          class="w-full h-full border-0"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4598.847262971558!2d-71.0967349226887!3d42.360090971193024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e370aaf51a6a87%3A0xd0e08ea5b308203c!2sMassachusetts%20Institute%20of%20Technology!5e1!3m2!1sen!2sid!4v1745675190539!5m2!1sen!2sid" 
          width="800" 
          height="600" 
          allowfullscreen="" 
          loading="lazy" 
          referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>
    </div>
  </section>
<!-- ========== END MAP SECTION ========== -->

@endsection
