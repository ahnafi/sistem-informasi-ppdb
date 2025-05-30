@extends("layouts.default")
@section("title", "Pendaftaran Ditolak - SMA Hogwarts")

@section("main")
<div class="min-h-screen bg-gradient-to-b from-white to-gray-600 relative pb-20">
  <!-- Banner - Increased padding top to avoid navbar overlap -->
  <div class="w-full bg-gradient-to-r from-red-600 to-red-800 py-10 pt-24 px-4 sm:px-6 lg:px-8 shadow-lg relative z-10">
    <div class="container mx-auto max-w-6xl">
      <div class="flex items-center gap-4 mb-4">
        <div class="w-12 h-12 flex-shrink-0 bg-white rounded-full flex items-center justify-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
          </svg>
        </div>
        <h1 class="font-bold text-2xl md:text-4xl text-white">Mohon maaf, pendaftaran Anda tidak dapat diterima</h1>
      </div>
    </div>
  </div>

  <!-- Main Content Section -->
  <div class="container mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
    <!-- Student Profile Card -->
    <div class="bg-white rounded-lg shadow-lg mt-8 p-6 md:p-8 border-l-4 border-red-600">
      <!-- Student Identity -->
      <div class="mb-8">
        <p class="text-gray-700 text-base md:text-lg font-medium mb-2">NISN: <span class="font-bold">{{ $data->nisn ?? 'N/A' }}</span></p>
        <h2 class="text-3xl md:text-5xl font-bold text-gray-900">{{ $data->name ?? 'Nama Siswa' }}</h2>
      </div>

      <!-- Student Details -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
        <div>
          <p class="text-red-600 font-semibold mb-1">Tanggal Lahir</p>
          <p class="text-gray-900 font-bold text-lg">
            @if(isset($data->date_of_birth))
              {{ \Carbon\Carbon::parse($data->date_of_birth)->format('d/m/Y') }}
            @else
              -
            @endif
          </p>
        </div>

        <div>
          <p class="text-red-600 font-semibold mb-1">Kabupaten/Kota</p>
          <p class="text-gray-900 font-bold text-lg">{{ $data->place_of_birth ?? 'N/A' }}</p>
        </div>

        <div>
          <p class="text-red-600 font-semibold mb-1">Asal Sekolah</p>
          <p class="text-gray-900 font-bold text-lg">{{ $data->origin_school ?? 'N/A' }}</p>
        </div>

        <div>
          <p class="text-red-600 font-semibold mb-1">Provinsi</p>
          <p class="text-gray-900 font-bold text-lg">{{ $data->village_district_province ?? 'N/A' }}</p>
        </div>
        
        @if(isset($data->phone))
        <div>
          <p class="text-red-600 font-semibold mb-1">Nomor Telepon</p>
          <p class="text-gray-900 font-bold text-lg">{{ $data->phone }}</p>
        </div>
        @endif
        
        @if(isset($data->email))
        <div>
          <p class="text-red-600 font-semibold mb-1">Email</p>
          <p class="text-gray-900 font-bold text-lg">{{ $data->email }}</p>
        </div>
        @endif
      </div>

      <!-- Important Notice -->
      <div class="bg-red-50 border border-red-200 rounded-lg p-4">
        <p class="text-gray-800 text-lg">
          Dengan berat hati kami sampaikan bahwa pendaftaran Anda tidak dapat kami terima. Terima kasih telah mencoba dan jangan putus asa.
        </p>
      </div>
    </div>

    <!-- Additional Information Card -->
    <div class="bg-white rounded-lg shadow-lg mt-8 p-6 md:p-8">
      <h3 class="text-2xl font-bold text-gray-900 mb-4">Informasi Tambahan</h3>
      
      <div class="space-y-6">
        <div>
          <h4 class="font-bold text-xl text-gray-900 mb-2">Alasan Penolakan</h4>
          <p class="text-gray-600">
            Setiap tahun, SMA Hogwarts menerima banyak pendaftaran melebihi kapasitas yang tersedia. 
            Kami melakukan seleksi berdasarkan beberapa kriteria termasuk nilai akademik, prestasi non-akademik, 
            dan hasil tes masuk. Keputusan ini telah melalui proses seleksi yang ketat dan menyeluruh.
          </p>
        </div>
        
        <div>
          <h4 class="font-bold text-xl text-gray-900 mb-2">Alternatif Selanjutnya</h4>
          <p class="text-gray-600">
            Kami menyarankan untuk mencari informasi tentang sekolah lain yang masih membuka pendaftaran. 
            Berikut adalah beberapa opsi yang mungkin bisa menjadi pertimbangan Anda:
          </p>
          <ul class="list-disc ml-6 mt-2 text-gray-600">
            <li class="mb-1">Cek daftar sekolah di sekitar area tempat tinggal Anda</li>
            <li class="mb-1">Kunjungi portal informasi pendidikan daerah Anda</li>
            <li class="mb-1">Hubungi Dinas Pendidikan setempat untuk mendapatkan informasi lebih lanjut</li>
          </ul>
        </div>
        
        <div>
          <h4 class="font-bold text-xl text-gray-900 mb-2">Dukungan Lanjutan</h4>
          <p class="text-gray-600">
            Jika Anda memiliki pertanyaan atau membutuhkan penjelasan lebih lanjut mengenai keputusan ini, 
            tim kami siap membantu. Silakan hubungi kami melalui:
          </p>
          <div class="flex items-center mt-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
            </svg>
            <span class="text-gray-700">admisi@smahogwarts.sch.id</span>
          </div>
          <div class="flex items-center mt-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
            </svg>
            <span class="text-gray-700">(021) 123-4567</span>
          </div>
        </div>
      </div>
      
      <div class="mt-8 border-t border-gray-200 pt-6">
        <a href="{{ route('registration') }}" class="inline-flex items-center px-4 py-2 bg-gray-100 hover:bg-gray-200 text-gray-800 font-medium rounded-lg transition-colors">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
          </svg>
          Kembali ke Halaman Pendaftaran
        </a>
      </div>
    </div>

    @if(session('error'))
    <div class="mt-4 bg-red-100 border border-red-200 text-red-700 px-4 py-3 rounded relative" role="alert">
      <span class="block sm:inline">{{ session('error') }}</span>
    </div>
    @endif
  </div>
</div>

<!-- Print Area -->
<div class="print:block hidden absolute inset-0 bg-white p-8 m-0">
  <!-- Header -->
  <div class="mb-8">
    <!-- Top Border -->
    <div class="h-2 bg-gradient-to-r from-red-700 via-red-600 to-red-700 mb-4"></div>

    <div class="flex justify-between items-center">
      <!-- Logo & School Info -->
      <div class="flex items-center gap-4">
        <div class="w-20 h-20 bg-red-700 rounded-full flex items-center justify-center text-white font-bold text-2xl">
          H
        </div>
        <div>
          <h2 class="text-2xl font-bold text-red-800 uppercase">SMA HOGWARTS</h2>
          <p class="text-sm text-gray-600">Jl. Pendidikan No. 123, Jakarta Selatan</p>
          <p class="text-sm text-gray-600">Telp: (021) 123-4567 | Email: info@smahogwarts.sch.id</p>
          <p class="text-sm text-gray-600">Website: www.smahogwarts.sch.id</p>
        </div>
      </div>

      <!-- Document Info -->
      <div class="text-right text-sm">
        <p class="font-medium">
          No: {{ $data->registration_number ?? date('Y').'/PPDB/'.($data->id ?? '000') }}
        </p>
        <p>{{ \Carbon\Carbon::now()->format('d F Y') }}</p>
      </div>
    </div>

    <!-- Bottom Border -->
    <div class="h-0.5 bg-gray-300 mt-4"></div>
    <div class="h-1 bg-gradient-to-r from-red-700 via-red-600 to-red-700 mt-1"></div>
  </div>

  <!-- Title -->
  <div class="text-center mb-10">
    <h1 class="text-2xl font-bold uppercase">Surat Pemberitahuan Hasil Seleksi</h1>
    <p class="text-lg mt-1">Tahun Ajaran {{ date('Y') }}/{{ date('Y')+1 }}</p>
    <div class="w-32 h-1 bg-red-700 mx-auto mt-2"></div>
  </div>

  <!-- Content -->
  <div class="mb-10">
    <p class="mb-6">Dengan ini Kepala SMA Hogwarts menyampaikan hasil seleksi pendaftaran siswa baru:</p>

    <table class="w-full mb-8">
      <tr>
        <td class="py-2 w-1/3">Nama</td>
        <td class="py-2 w-1/12">:</td>
        <td class="py-2 font-medium">{{ $data->name ?? 'Nama Siswa' }}</td>
      </tr>
      <tr>
        <td class="py-2">NISN</td>
        <td class="py-2">:</td>
        <td class="py-2 font-medium">{{ $data->nisn ?? '-' }}</td>
      </tr>
      <tr>
        <td class="py-2">Tempat, Tanggal Lahir</td>
        <td class="py-2">:</td>
        <td class="py-2 font-medium">
          {{ $data->place_of_birth ?? '-' }},
          @if(isset($data->date_of_birth))
            {{ \Carbon\Carbon::parse($data->date_of_birth)->format('d F Y') }}
          @else
            -
          @endif
        </td>
      </tr>
      <tr>
        <td class="py-2">Asal Sekolah</td>
        <td class="py-2">:</td>
        <td class="py-2 font-medium">{{ $data->origin_school ?? '-' }}</td>
      </tr>
    </table>

    <p class="mb-6">
      Status: <span class="font-bold uppercase">TIDAK DITERIMA</span> sebagai siswa SMA Hogwarts untuk Tahun Ajaran
      {{ date('Y') }}/{{ date('Y')+1 }}.
    </p>

    <p class="mb-6">
      Keputusan ini telah melalui proses seleksi yang ketat dan menyeluruh. Kami mengucapkan terima kasih atas 
      minat dan partisipasi Anda dalam proses pendaftaran di SMA Hogwarts.
    </p>

    <p class="mb-6">
      Untuk informasi lebih lanjut, silakan menghubungi panitia PPDB SMA Hogwarts melalui telepon (021) 123-4567
      atau email admisi@smahogwarts.sch.id.
    </p>
  </div>

  <!-- Signature -->
  <div class="flex justify-end mt-10">
    <div class="text-center w-64">
      <p>Jakarta, {{ \Carbon\Carbon::now()->format('d F Y') }}</p>
      <p class="mb-2">Kepala Sekolah</p>
      <div class="h-24"></div> <!-- Placeholder for signature -->
      <p class="font-bold underline">Prof. Albus Dumbledore</p>
      <p class="text-sm">NIP. 19601031198503001</p>
    </div>
  </div>
</div>

<!-- Fixed print-specific styles -->
<style>
  @media print {
    /* Hide the regular webpage content */
    .min-h-screen {
      display: none !important;
    }
    
    /* Show the print section */
    .print\:block {
      display: block !important;
    }
    
    /* Set page layout */
    @page {
      size: A4;
      margin: 1cm;
    }
  }
</style>
@endsection
