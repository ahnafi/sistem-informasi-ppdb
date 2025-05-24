@extends("layouts.default")
@section("title", "Pendaftaran Diterima - SMA Hogwarts")

@section("main")
<!-- Main screen content -->
<div class="min-h-screen bg-gradient-to-b from-white to-blue-600 relative pb-20 screen-only">
  <!-- Success Banner -->
  <div class="w-full bg-gradient-to-r from-green-600 to-green-800 py-10 pt-24 px-4 sm:px-6 lg:px-8 shadow-lg relative z-10">
    <div class="container mx-auto max-w-6xl">
      <div class="flex items-center gap-4 mb-4">
        <div class="w-12 h-12 flex-shrink-0 bg-white rounded-full flex items-center justify-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
          </svg>
        </div>
        <h1 class="font-bold text-2xl md:text-4xl text-white">Selamat! Kamu diterima sebagai siswa baru di SMA Hogwarts</h1>
      </div>
    </div>
  </div>

  <!-- Main Content Section -->
  <div class="container mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
    <!-- Student Profile Card -->
    <div class="bg-white rounded-lg shadow-lg mt-8 p-6 md:p-8 border-l-4 border-blue-600">
      <!-- Student Identity -->
      <div class="mb-8">
        <p class="text-gray-700 text-base md:text-lg font-medium mb-2">NISN: <span class="font-bold">{{ $data->nisn ?? 'N/A' }}</span></p>
        <h2 class="text-3xl md:text-5xl font-bold text-gray-900">{{ $data->name ?? 'Nama Siswa' }}</h2>
      </div>

      <!-- Student Details -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
        <div>
          <p class="text-blue-600 font-semibold mb-1">Tanggal Lahir</p>
          <p class="text-gray-900 font-bold text-lg">{{ \Carbon\Carbon::parse($data->date_of_birth)->format('d/m/Y') }}</p>
        </div>

        <div>
          <p class="text-blue-600 font-semibold mb-1">Kabupaten/Kota</p>
          <p class="text-gray-900 font-bold text-lg">{{ $data->place_of_birth ?? 'N/A' }}</p>
        </div>

        <div>
          <p class="text-blue-600 font-semibold mb-1">Asal Sekolah</p>
          <p class="text-gray-900 font-bold text-lg">{{ $data->origin_school ?? 'N/A' }}</p>
        </div>

        <div>
          <p class="text-blue-600 font-semibold mb-1">Provinsi</p>
          <p class="text-gray-900 font-bold text-lg">{{ $data->village_district_province ?? 'N/A' }}</p>
        </div>
        
        @if(isset($data->phone))
        <div>
          <p class="text-blue-600 font-semibold mb-1">Nomor Telepon</p>
          <p class="text-gray-900 font-bold text-lg">{{ $data->phone }}</p>
        </div>
        @endif
        
        @if(isset($data->email))
        <div>
          <p class="text-blue-600 font-semibold mb-1">Email</p>
          <p class="text-gray-900 font-bold text-lg">{{ $data->email }}</p>
        </div>
        @endif
      </div>

      <!-- Important Notice -->
      <div class="bg-blue-50 border border-blue-200 rounded-lg p-4">
        <p class="text-gray-800 text-lg">
          Pastikan melakukan daftar ulang sebelum tanggal <span class="font-bold">{{ \Carbon\Carbon::now()->addMonths(1)->format('d F Y') }}</span>. 
          Kami menantikan kehadiranmu sebagai bagian dari keluarga besar SMA Hogwarts!
        </p>
      </div>
    </div>

    <!-- Registration Instructions Card -->
    <div class="bg-white rounded-lg shadow-lg mt-8 p-6 md:p-8">
      <h3 class="text-2xl font-bold text-gray-900 mb-4">Langkah Selanjutnya</h3>
      
      <div class="space-y-4">
        <div class="flex gap-3">
          <div class="h-8 w-8 rounded-full bg-blue-100 flex items-center justify-center flex-shrink-0">
            <span class="font-bold text-blue-600">1</span>
          </div>
          <div>
            <h4 class="font-bold text-gray-900 mb-1">Cetak Surat Pengumuman</h4>
            <p class="text-gray-600">Silahkan cetak surat pengumuman ini sebagai bukti diterima di SMA Hogwarts.</p>
            <button onclick="window.print()" class="mt-2 inline-flex items-center px-4 py-2 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition-colors">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
              </svg>
              Cetak Pengumuman
            </button>
          </div>
        </div>
        
        <div class="flex gap-3">
          <div class="h-8 w-8 rounded-full bg-blue-100 flex items-center justify-center flex-shrink-0">
            <span class="font-bold text-blue-600">2</span>
          </div>
          <div>
            <h4 class="font-bold text-gray-900 mb-1">Daftar Ulang</h4>
            <p class="text-gray-600">Lakukan daftar ulang dengan membawa dokumen yang diperlukan ke sekolah.</p>
            <a href="{{ route('registration') }}" class="mt-2 inline-flex items-center text-blue-600 font-medium hover:text-blue-800">
              Lihat persyaratan daftar ulang
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>

    @if(session('success'))
    <div class="mt-4 bg-green-100 border border-green-200 text-green-700 px-4 py-3 rounded relative" role="alert">
      <span class="block sm:inline">{{ session('success') }}</span>
    </div>
    @endif
  </div>
</div>

<!-- Print-only content -->
<div class="hidden print:block print-content">
  <!-- School Letterhead -->
  <div class="flex items-center justify-between border-b-2 border-blue-700 pb-4 mb-8">
    <div class="flex items-center gap-4">
      <div class="w-16 h-16 bg-blue-700 rounded-full flex items-center justify-center text-white font-bold text-xl">
        <img src="{{ asset('images/logonobg.png') }}" alt="Logo" class="w-full h-full object-cover rounded-full">
      </div>
      <div>
        <h2 class="text-xl font-bold text-blue-800">SMA HOGWARTS</h2>
        <p class="text-sm text-gray-600">Jl. Pendidikan No. 123, Jakarta • Telp: (021) 123-4567</p>
      </div>
    </div>
    <div>
      <p class="text-sm font-medium">No: {{ $data->registration_number ?? date('Y').'/PPDB/'.($data->id ?? '000') }}</p>
      <p class="text-sm">{{ \Carbon\Carbon::now()->format('d F Y') }}</p>
    </div>
  </div>
  
  <!-- Announcement Title -->
  <div class="text-center mb-10">
    <h1 class="text-2xl font-bold uppercase">SURAT KETERANGAN PENERIMAAN SISWA</h1>
    <p class="text-lg mt-1">Tahun Ajaran {{ date('Y') }}/{{ date('Y')+1 }}</p>
    <div class="w-32 h-1 bg-blue-700 mx-auto mt-2"></div>
  </div>
  
  <!-- Announcement Content -->
  <div class="mb-12">
    <p class="mb-6">Dengan ini Kepala SMA Hogwarts menyatakan bahwa:</p>
    
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
          {{ $data->place_of_birth ?? '-' }}, {{ \Carbon\Carbon::parse($data->date_of_birth)->format('d F Y') }}
        </td>
      </tr>
      <tr>
        <td class="py-2">Asal Sekolah</td>
        <td class="py-2">:</td>
        <td class="py-2 font-medium">{{ $data->origin_school ?? '-' }}</td>
      </tr>
    </table>
    
    <p class="mb-6">
      Dinyatakan <span class="font-bold uppercase">DITERIMA</span> sebagai siswa SMA Hogwarts untuk Tahun Ajaran
      {{ date('Y') }}/{{ date('Y')+1 }}.
    </p>
    
    <p class="mb-6">
      Bagi siswa yang diterima diwajibkan untuk melakukan daftar ulang mulai tanggal
      {{ \Carbon\Carbon::now()->format('d F Y') }} sampai dengan
      {{ \Carbon\Carbon::now()->addMonths(1)->format('d F Y') }} dengan membawa persyaratan sebagai berikut:
    </p>
    
    <ol class="list-decimal ml-8 mb-6">
      <li class="mb-1">Surat Keterangan Penerimaan ini</li>
      <li class="mb-1">Fotokopi Kartu Keluarga (1 lembar)</li>
      <li class="mb-1">Fotokopi Akta Kelahiran (1 lembar)</li>
      <li class="mb-1">Fotokopi Ijazah/Surat Keterangan Lulus (1 lembar)</li>
      <li class="mb-1">Pas foto terbaru ukuran 3x4 (4 lembar)</li>
    </ol>
  </div>
  
  <!-- Signature -->
  <div class="flex justify-end">
    <div class="text-center w-64">
      <p>Jakarta, {{ \Carbon\Carbon::now()->format('d F Y') }}</p>
      <p>Kepala Sekolah</p>
      <div class="h-20"></div> <!-- Space for signature -->
      <p class="font-bold underline">Prof. Albus Dumbledore</p>
      <p class="text-sm">NIP. 19601031198503001</p>
    </div>
  </div>
</div>

<!-- Styling for print -->
<style>
  @media print {
    /* Hide everything except the print content */
    body * {
      visibility: hidden;
    }
    
    /* Show only print content */
    .print-content, 
    .print-content * {
      visibility: visible;
    }
    
    /* Position the print content at the beginning of the page */
    .print-content {
      position: absolute;
      left: 0;
      top: 0;
      width: 100%;
      padding: 40px;
      background: white;
      color: black;
    }
    
    /* Hide screen-only elements completely */
    .screen-only {
      display: none !important;
    }
    
    /* Basic page setup */
    @page {
      size: A4;
      margin: 1.5cm;
    }
    
    /* Ensure the document looks proper */
    html, body {
      width: 210mm;
      height: 297mm;
    }
  }
  
  /* Only show print content when printing */
  .print-content {
    display: none;
  }
  
  @media print {
    .print-content {
      display: block;
    }
  }
</style>
@endsection