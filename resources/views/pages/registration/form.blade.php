@extends('layouts.default')
@section('title', 'Form Pendaftaran Siswa Baru')

@section('main')
    <div class="relative min-h-screen bg-gradient-to-b from-white to-blue-400">
        <!-- Header Section -->
        <div class="w-full max-w-7xl mx-auto pt-32 px-4">
            <div class="flex flex-col items-start gap-4 mb-8">
                <div class="flex flex-col items-start gap-2">
                    <h1 class="text-5xl font-medium leading-tight text-black font-roboto">Form Pendaftaran Siswa Baru</h1>
                    <hr class="w-96 border border-black">
                </div>
                <p class="text-2xl font-medium text-blue-700 font-roboto">SMA Hogwarts</p>
            </div>

            <!-- Progress Bar -->
            <div class="flex flex-row justify-between items-center gap-5 mb-8">
                <div class="flex-1 flex flex-row items-center gap-2.5">
                    <div id="progress-1" class="flex-1 h-3.5 bg-blue-700 rounded transition-colors duration-300"></div>
                    <div id="progress-2" class="flex-1 h-3.5 bg-blue-200 rounded transition-colors duration-300"></div>
                    <div id="progress-3" class="flex-1 h-3.5 bg-blue-200 rounded transition-colors duration-300"></div>
                    <div id="progress-4" class="flex-1 h-3.5 bg-blue-200 rounded transition-colors duration-300"></div>
                </div>
                <span id="completion-text"
                    class="text-xl font-semibold text-blue-300 font-inter tracking-wider">Selesai</span>
            </div>
        </div>

        <!-- Form Container -->
        <div class="w-full max-w-6xl mx-auto px-4 space-y-8 py-12">
            @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif

            @if(session('error'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                    {{ session('error') }}
                </div>
            @endif

            @if($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                    <ul class="list-disc list-inside">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form id="registrationForm" action="{{ route('registration.submit') }}" method="POST" class="space-y-8">
                @csrf

                <!-- First Form Section -->
                <div id="personalDataSection" class="bg-blue-50 rounded-2xl p-8">
                    <!-- Form Header -->
                    <div class="space-y-4">
                        <h2 class="text-4xl font-semibold leading-tight tracking-wider text-black font-inter">Data Diri
                            Siswa</h2>
                        <hr class="border border-gray-400">
                    </div>

                    <!-- Form Fields Grid -->
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 mt-8">
                        <!-- Left Column -->
                        <div class="space-y-5">
                            <!-- Nama Lengkap -->
                            <div class="space-y-2">
                                <label for="name"
                                    class="block text-base font-semibold leading-6 tracking-wider text-black font-inter">Nama
                                    Lengkap*</label>
                                <input type="text" id="name" name="name" required
                                    class="w-full h-13 px-3 py-2 bg-white border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                    placeholder="Masukkan nama lengkap">
                            </div>

                            <!-- Gender -->
                            <div class="space-y-2">
                                <label for="gender"
                                    class="block text-base font-semibold leading-6 tracking-wider text-black font-inter">Gender*</label>
                                <select id="gender" name="gender" required
                                    class="w-full h-13 px-3 py-2 bg-white border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent appearance-none">
                                    <option value="">Pilih opsi</option>
                                    <option value="male">Laki-laki</option>
                                    <option value="female">Perempuan</option>
                                </select>
                            </div>

                            <!-- Tempat Lahir -->
                            <div class="space-y-2">
                                <label for="place_of_birth"
                                    class="block text-base font-semibold leading-6 tracking-wider text-black font-inter">Tempat
                                    Lahir*</label>
                                <input type="text" id="place_of_birth" name="place_of_birth" required
                                    class="w-full h-13 px-3 py-2 bg-white border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                    placeholder="Masukkan tempat lahir">
                            </div>

                            <!-- Tanggal Lahir -->
                            <div class="space-y-2">
                                <label for="date_of_birth"
                                    class="block text-base font-semibold leading-6 tracking-wider text-black font-inter">Tanggal
                                    Lahir*</label>
                                <input type="date" id="date_of_birth" name="date_of_birth" required
                                    class="w-full h-13 px-3 py-2 bg-white border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            </div>

                            <!-- Alamat -->
                            <div class="space-y-2">
                                <label for="address"
                                    class="block text-base font-semibold leading-6 tracking-wider text-black font-inter">Alamat*</label>
                                <textarea id="address" name="address" required rows="2"
                                    class="w-full px-3 py-2 bg-white border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent resize-none"
                                    placeholder="Masukkan alamat lengkap"></textarea>
                            </div>

                            <!-- Provinsi/Kabupaten/Kecamatan/Desa -->
                            <div class="space-y-2">
                                <label for="village_district_province"
                                    class="block text-base font-semibold leading-6 tracking-wider text-gray-800 font-inter">Prov/Kab/Kec/Desa*</label>
                                <input type="text" id="village_district_province" name="village_district_province" required
                                    class="w-full h-13 px-3 py-2 bg-white border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                    placeholder="Contoh: Jawa Barat, Bandung, Coblong, Dago">
                            </div>
                        </div>

                        <!-- Right Column -->
                        <div class="space-y-5">
                            <!-- NISN -->
                            <div class="space-y-2">
                                <label for="nisn"
                                    class="block text-base font-semibold leading-6 tracking-wider text-black font-inter">NISN*</label>
                                <input type="text" id="nisn" name="nisn" required maxlength="10" pattern="[0-9]{10}"
                                    class="w-full h-13 px-3 py-2 bg-white border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                    placeholder="Masukkan 10 digit NISN">
                            </div>

                            <!-- Email -->
                            <div class="space-y-2">
                                <label for="email"
                                    class="block text-base font-semibold leading-6 tracking-wider text-black font-inter">Email*</label>
                                <input type="email" id="email" name="email" required
                                    class="w-full h-13 px-3 py-2 bg-white border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                    placeholder="contoh@email.com">
                            </div>

                            <!-- No Telepon -->
                            <div class="space-y-2">
                                <label for="phone"
                                    class="block text-base font-semibold leading-6 tracking-wider text-black font-inter">No
                                    Telepon*</label>
                                <input type="tel" id="phone" name="phone" required pattern="[0-9]{10,13}"
                                    class="w-full h-13 px-3 py-2 bg-white border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                    placeholder="08xxxxxxxxxx">
                            </div>

                            <!-- Asal Sekolah -->
                            <div class="space-y-2">
                                <label for="origin_school"
                                    class="block text-base font-semibold leading-6 tracking-wider text-black font-inter">Asal
                                    Sekolah*</label>
                                <input type="text" id="origin_school" name="origin_school" required
                                    class="w-full h-13 px-3 py-2 bg-white border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                    placeholder="Nama sekolah asal">
                            </div>

                            <!-- Jenis Sekolah -->
                            <div class="space-y-2">
                                <label for="school_type"
                                    class="block text-base font-semibold leading-6 tracking-wider text-black font-inter">Jenis
                                    Sekolah*</label>
                                <select id="school_type" name="school_type" required
                                    class="w-full h-13 px-3 py-2 bg-white border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent appearance-none">
                                    <option value="">Pilih opsi</option>
                                    <option value="public">Negeri</option>
                                    <option value="private">Swasta</option>
                                </select>
                            </div>

                            <!-- Informasi -->
                            <div class="space-y-2">
                                <label for="information"
                                    class="block text-base font-semibold leading-6 tracking-wider text-black font-inter">Informasi*</label>
                                <textarea id="information" name="information" required rows="2"
                                    class="w-full px-3 py-2 bg-white border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent resize-none"
                                    placeholder="Informasi tambahan atau motivasi mendaftar"></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="flex justify-end pt-8">
                        <button type="button" onclick="validateAndProceed('periodicDataSection')"
                            class="px-8 py-3 bg-blue-700 hover:bg-blue-800 border border-blue-700 rounded-lg transition-colors duration-200">
                            <span class="text-sm font-semibold text-white font-inter tracking-wider">Lanjutkan</span>
                        </button>
                    </div>
                </div>

                <!-- Second Form Section -->
                <div id="periodicDataSection" class="bg-blue-50 rounded-2xl p-8 hidden">
                    <!-- Form Header -->
                    <div class="space-y-4">
                        <h2 class="text-4xl font-semibold leading-tight tracking-wider text-black font-inter">Data Periodik
                            Siswa</h2>
                        <hr class="border border-gray-400">
                    </div>

                    <!-- Form Fields Grid -->
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 mt-8">
                        <!-- Left Column -->
                        <div class="space-y-5">
                            <!-- Agama -->
                            <div class="space-y-2">
                                <label for="religion"
                                    class="block text-base font-semibold leading-6 tracking-wider text-black font-inter">Agama*</label>
                                <select id="religion" name="periodic[religion]" required
                                    class="w-full h-13 px-3 py-2 bg-white border border-gray-500 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent appearance-none">
                                    <option value="">Pilih opsi</option>
                                    <option value="islam">Islam</option>
                                    <option value="Protestant">Kristen</option>
                                    <option value="Catholic">Katolik</option>
                                    <option value="hindu">Hindu</option>
                                    <option value="buddha">Buddha</option>
                                    <option value="konghucu">Konghucu</option>
                                </select>
                            </div>

                            <!-- Tempat Tinggal -->
                            <div class="space-y-2">
                                <label for="residence"
                                    class="block text-base font-semibold leading-6 tracking-wider text-black font-inter">Tempat
                                    Tinggal*</label>
                                <input type="text" id="residence" name="periodic[residence]" required
                                    class="w-full h-13 px-3 py-2 bg-white border border-gray-500 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                    placeholder="Contoh: Bersama Orang Tua">
                            </div>

                            <!-- Jarak Rumah ke Sekolah -->
                            <div class="space-y-2">
                                <label for="home_distance"
                                    class="block text-base font-semibold leading-6 tracking-wider text-black font-inter">Jarak
                                    Rumah ke Sekolah (km)*</label>
                                <input type="number" id="home_distance" name="periodic[home_distance]" required min="0" step="0.1"
                                    class="w-full h-13 px-3 py-2 bg-white border border-gray-500 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                    placeholder="Contoh: 5.5">
                            </div>

                            <!-- Waktu Tempuh -->
                            <div class="space-y-2">
                                <label for="travel_time"
                                    class="block text-base font-semibold leading-6 tracking-wider text-black font-inter">Waktu
                                    Tempuh (menit)*</label>
                                <input type="number" id="travel_time" name="periodic[travel_time]" required min="0"
                                    class="w-full h-13 px-3 py-2 bg-white border border-gray-500 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                    placeholder="Contoh: 30">
                            </div>

                            <!-- Status Anak -->
                            <div class="space-y-2">
                                <label for="child_status"
                                    class="block text-base font-semibold leading-6 tracking-wider text-black font-inter">Status
                                    Anak*</label>
                                <select id="child_status" name="periodic[child_status]" required
                                    class="w-full h-13 px-3 py-2 bg-white border border-gray-500 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent appearance-none">
                                    <option value="">Pilih opsi</option>
                                    <option value="biological">Anak Kandung</option>
                                    <option value="adopted">Anak Angkat</option>
                                </select>
                            </div>
                        </div>

                        <!-- Right Column -->
                        <div class="space-y-5">
                            <!-- Anak Ke -->
                            <div class="space-y-2">
                                <label for="child_order"
                                    class="block text-base font-semibold leading-6 tracking-wider text-black font-inter">Anak
                                    Ke*</label>
                                <input type="number" id="child_order" name="periodic[child_order]" required min="1"
                                    class="w-full h-13 px-3 py-2 bg-white border border-gray-500 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                    placeholder="Contoh: 1">
                            </div>

                            <!-- Jumlah Saudara Kandung -->
                            <div class="space-y-2">
                                <label for="siblings"
                                    class="block text-base font-semibold leading-6 tracking-wider text-black font-inter">Jumlah
                                    Saudara Kandung*</label>
                                <input type="number" id="siblings" name="periodic[siblings]" required min="0"
                                    class="w-full h-13 px-3 py-2 bg-white border border-gray-500 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                    placeholder="Contoh: 2">
                            </div>

                            <!-- Berat Badan -->
                            <div class="space-y-2">
                                <label for="weight"
                                    class="block text-base font-semibold leading-6 tracking-wider text-black font-inter">Berat
                                    Badan (kg)*</label>
                                <input type="number" id="weight" name="periodic[weight]" required min="20" max="200"
                                    class="w-full h-13 px-3 py-2 bg-white border border-gray-500 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                    placeholder="Contoh: 55">
                            </div>

                            <!-- Tinggi Badan -->
                            <div class="space-y-2">
                                <label for="height"
                                    class="block text-base font-semibold leading-6 tracking-wider text-black font-inter">Tinggi
                                    Badan (cm)*</label>
                                <input type="number" id="height" name="periodic[height]" required min="100" max="250"
                                    class="w-full h-13 px-3 py-2 bg-white border border-gray-500 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                    placeholder="Contoh: 165">
                            </div>

                            <!-- Pernah mengalami penyakit serius -->
                            <div class="space-y-2">
                                <label for="medical_history"
                                    class="block text-base font-semibold leading-6 tracking-wider text-black font-inter">Pernah
                                    mengalami penyakit serius?*</label>
                                <input type="text" id="medical_history" name="periodic[medical_history]" required
                                    class="w-full h-13 px-3 py-2 bg-white border border-gray-500 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                    placeholder="Contoh: Tidak ada / Asma">
                            </div>
                        </div>
                    </div>

                    <!-- Navigation Buttons -->
                    <div class="flex justify-between pt-8">
                        <button type="button" onclick="showSection('personalDataSection')"
                            class="px-8 py-3 bg-gray-500 hover:bg-gray-600 border border-gray-500 rounded-lg transition-colors duration-200">
                            <span class="text-sm font-semibold text-white font-inter tracking-wider">Kembali</span>
                        </button>
                        <button type="button" onclick="validateAndProceed('parentDataSection')"
                            class="px-8 py-3 bg-blue-700 hover:bg-blue-800 border border-blue-700 rounded-lg transition-colors duration-200">
                            <span class="text-sm font-semibold text-white font-inter tracking-wider">Lanjutkan</span>
                        </button>
                    </div>
                </div>

                <!-- Third Form Section - Parent/Guardian Data -->
                <div id="parentDataSection" class="bg-blue-50 rounded-2xl p-8 hidden">
                    <div class="space-y-10">
                        <!-- Form Header -->
                        <div class="space-y-4">
                            <h2 class="text-4xl font-semibold leading-tight tracking-wider text-black font-inter">Data Orang
                                Tua/Wali</h2>
                            <hr class="border border-gray-400">
                        </div>

                        <!-- Data Ayah Section -->
                        <div class="space-y-6">
                            <div class="space-y-4">
                                <h3 class="text-2xl font-semibold text-black tracking-wider font-inter">Data Ayah</h3>
                                <hr class="border border-gray-400">
                            </div <!-- Ayah Fields - First Row -->
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                                <div class="space-y-2">
                                    <label for="nama_ayah"
                                        class="block text-base font-semibold leading-6 text-black font-inter">Nama
                                        Ayah*</label>
                                    <input type="text" id="nama_ayah" name="parents[0][name]" required
                                        class="w-full h-13 px-3 py-2 bg-white border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                        placeholder="Masukkan nama ayah">
                                    <input type="hidden" name="parents[0][type]" value="father">
                                </div>

                                <div class="space-y-2">
                                    <label for="pekerjaan_ayah"
                                        class="block text-base font-semibold leading-6 text-black font-inter">Pekerjaan*</label>
                                    <input type="text" id="pekerjaan_ayah" name="parents[0][job]" required
                                        class="w-full h-13 px-3 py-2 bg-white border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                        placeholder="Masukkan pekerjaan">
                                </div>

                                <div class="space-y-2">
                                    <label for="pendidikan_ayah"
                                        class="block text-base font-semibold leading-6 text-black font-inter">Pendidikan*</label>
                                    <input type="text" id="pendidikan_ayah" name="parents[0][education]" required
                                        class="w-full h-13 px-3 py-2 bg-white border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                        placeholder="Contoh: S1">
                                </div>

                                <div class="space-y-2">
                                    <label for="no_hp_ayah"
                                        class="block text-base font-semibold leading-6 text-black font-inter">No.
                                        HP*</label>
                                    <input type="tel" id="no_hp_ayah" name="parents[0][phone]" required pattern="[0-9]{10,13}"
                                        class="w-full h-13 px-3 py-2 bg-white border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                        placeholder="08xxxxxxxxxx">
                                </div>
                            </div>

                            <!-- Ayah Fields - Second Row -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-2xl mx-auto">
                                <div class="space-y-2">
                                    <label for="alamat_ayah"
                                        class="block text-base font-semibold leading-6 text-black font-inter">Alamat*</label>
                                    <textarea id="alamat_ayah" name="parents[0][address]" required rows="2"
                                        class="w-full px-3 py-2 bg-white border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent resize-none"
                                        placeholder="Masukkan alamat"></textarea>
                                </div>

                                <div class="space-y-2">
                                    <label for="penghasilan_ayah"
                                        class="block text-base font-semibold leading-6 text-black font-inter">Penghasilan
                                        per Bulan*</label>
                                    <select id="penghasilan_ayah" name="parents[0][income]" required
                                        class="w-full h-13 px-3 py-2 bg-white border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent appearance-none">
                                        <option value="">Pilih opsi</option>
                                        <option value="<1">< 1 juta</option>
                                        <option value="1-2">1-2 juta</option>
                                        <option value="2-3">2-3 juta</option>
                                        <option value="3-4">3-4 juta</option>
                                        <option value="4-5">4-5 juta</option>
                                        <option value="5">> 5 juta</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Data Ibu Section -->
                        <div class="space-y-6">
                            <div class="space-y-4">
                                <h3 class="text-2xl font-semibold text-black tracking-wider font-inter">Data Ibu</h3>
                                <hr class="border border-gray-400">
                            </div>

                            <!-- Ibu Fields - First Row -->
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                                <div class="space-y-2">
                                    <label for="nama_ibu"
                                        class="block text-base font-semibold leading-6 text-black font-inter">Nama
                                        Ibu*</label>
                                    <input type="text" id="nama_ibu" name="parents[1][name]" required
                                        class="w-full h-13 px-3 py-2 bg-white border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                        placeholder="Masukkan nama ibu">
                                    <input type="hidden" name="parents[1][type]" value="mother">
                                </div>

                                <div class="space-y-2">
                                    <label for="pekerjaan_ibu"
                                        class="block text-base font-semibold leading-6 text-black font-inter">Pekerjaan*</label>
                                    <input type="text" id="pekerjaan_ibu" name="parents[1][job]" required
                                        class="w-full h-13 px-3 py-2 bg-white border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                        placeholder="Masukkan pekerjaan">
                                </div>

                                <div class="space-y-2">
                                    <label for="pendidikan_ibu"
                                        class="block text-base font-semibold leading-6 text-black font-inter">Pendidikan*</label>
                                    <input type="text" id="pendidikan_ibu" name="parents[1][education]" required
                                        class="w-full h-13 px-3 py-2 bg-white border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                        placeholder="Contoh: S1">
                                </div>

                                <div class="space-y-2">
                                    <label for="no_hp_ibu"
                                        class="block text-base font-semibold leading-6 text-black font-inter">No.
                                        HP*</label>
                                    <input type="tel" id="no_hp_ibu" name="parents[1][phone]" required pattern="[0-9]{10,13}"
                                        class="w-full h-13 px-3 py-2 bg-white border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                        placeholder="08xxxxxxxxxx">
                                </div>
                            </div>

                            <!-- Ibu Fields - Second Row -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-2xl mx-auto">
                                <div class="space-y-2">
                                    <label for="alamat_ibu"
                                        class="block text-base font-semibold leading-6 text-black font-inter">Alamat*</label>
                                    <textarea id="alamat_ibu" name="parents[1][address]" required rows="2"
                                        class="w-full px-3 py-2 bg-white border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent resize-none"
                                        placeholder="Masukkan alamat"></textarea>
                                </div>

                                <div class="space-y-2">
                                    <label for="penghasilan_ibu"
                                        class="block text-base font-semibold leading-6 text-black font-inter">Penghasilan
                                        per Bulan*</label>
                                    <select id="penghasilan_ibu" name="parents[1][income]" required
                                        class="w-full h-13 px-3 py-2 bg-white border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent appearance-none">
                                        <option value="">Pilih opsi</option>
                                        <option value="<1">< 1 juta</option>
                                        <option value="1-2">1-2 juta</option>
                                        <option value="2-3">2-3 juta</option>
                                        <option value="3-4">3-4 juta</option>
                                        <option value="4-5">4-5 juta</option>
                                        <option value="5">> 5 juta</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Data Wali Section -->
                        <div class="space-y-6">
                            <div class="space-y-4">
                                <h3 class="text-2xl font-semibold text-black tracking-wider font-inter">Data Wali</h3>
                                <hr class="border border-gray-400">
                            </div>

                            <!-- Wali Fields - First Row -->
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                                <div class="space-y-2">
                                    <label for="nama_wali"
                                        class="block text-base font-semibold leading-6 text-black font-inter">Nama
                                        Wali</label>
                                    <input type="text" id="nama_wali" name="parents[2][name]"
                                        class="w-full h-13 px-3 py-2 bg-white border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                        placeholder="Masukkan nama wali (opsional)">
                                    <input type="hidden" name="parents[2][type]" value="guardian">
                                </div>

                                <div class="space-y-2">
                                    <label for="pekerjaan_wali"
                                        class="block text-base font-semibold leading-6 text-black font-inter">Pekerjaan</label>
                                    <input type="text" id="pekerjaan_wali" name="parents[2][job]"
                                        class="w-full h-13 px-3 py-2 bg-white border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                        placeholder="Masukkan pekerjaan (opsional)">
                                </div>

                                <div class="space-y-2">
                                    <label for="pendidikan_wali"
                                        class="block text-base font-semibold leading-6 text-black font-inter">Pendidikan</label>
                                    <input type="text" id="pendidikan_wali" name="parents[2][education]"
                                        class="w-full h-13 px-3 py-2 bg-white border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                        placeholder="Contoh: S1">
                                </div>

                                <div class="space-y-2">
                                    <label for="no_hp_wali"
                                        class="block text-base font-semibold leading-6 text-black font-inter">No. HP</label>
                                    <input type="tel" id="no_hp_wali" name="parents[2][phone]" pattern="[0-9]{10,13}"
                                        class="w-full h-13 px-3 py-2 bg-white border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                        placeholder="08xxxxxxxxxx (opsional)">
                                </div>
                            </div>

                            <!-- Wali Fields - Second Row -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-2xl mx-auto">
                                <div class="space-y-2">
                                    <label for="alamat_wali"
                                        class="block text-base font-semibold leading-6 text-black font-inter">Alamat</label>
                                    <textarea id="alamat_wali" name="parents[2][address]" rows="2"
                                        class="w-full px-3 py-2 bg-white border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent resize-none"
                                        placeholder="Masukkan alamat (opsional)"></textarea>
                                </div>

                                <div class="space-y-2">
                                    <label for="penghasilan_wali"
                                        class="block text-base font-semibold leading-6 text-black font-inter">Penghasilan
                                        per Bulan</label>
                                    <select id="penghasilan_wali" name="parents[2][income]"
                                        class="w-full h-13 px-3 py-2 bg-white border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent appearance-none">
                                        <option value="">Pilih opsi</option>
                                        <option value="<1">< 1 juta</option>
                                        <option value="1-2">1-2 juta</option>
                                        <option value="2-3">2-3 juta</option>
                                        <option value="3-4">3-4 juta</option>
                                        <option value="4-5">4-5 juta</option>
                                        <option value="5">> 5 juta</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Navigation Buttons -->
                        <div class="flex justify-between pt-8">
                            <button type="button" onclick="showSection('periodicDataSection')"
                                class="px-8 py-3 bg-gray-500 hover:bg-gray-600 border border-gray-500 rounded-lg transition-colors duration-200">
                                <span class="text-sm font-semibold text-white font-inter tracking-wider">Kembali</span>
                            </button>
                            <button type="button" onclick="validateAndProceed('achievementDataSection')"
                                class="px-8 py-3 bg-blue-700 hover:bg-blue-800 border border-blue-700 rounded-lg transition-colors duration-200">
                                <span class="text-sm font-semibold text-white font-inter tracking-wider">Lanjutkan</span>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Fourth Form Section - Achievement Data -->
                <div id="achievementDataSection" class="bg-blue-50 rounded-2xl p-8 hidden">
                    <div class="space-y-8">
                        <!-- Form Header -->
                        <div class="space-y-4">
                            <h2 class="text-4xl font-semibold leading-tight tracking-wider text-black font-inter">Prestasi
                            </h2>
                            <hr class="border border-gray-400">
                        </div>

                        <!-- Achievement Entry Container -->
                        <div id="achievementContainer" class="space-y-6">
                            <!-- Initial Achievement Form -->
                            <div class="achievement-entry border-2 border-dashed border-gray-300 rounded-lg p-6">
                                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-4">
                                    <!-- Jenis Prestasi -->
                                    <div class="space-y-2">
                                        <label class="block text-base font-semibold leading-6 text-black font-inter">Jenis
                                            Prestasi</label>
                                        <select name="achievements[0][type]"
                                            class="w-full h-13 px-3 py-2 bg-white border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent appearance-none">
                                            <option value="">Pilih opsi</option>
                                            <option value="academic">Akademik</option>
                                            <option value="nonacademic">Non-Akademik</option>
                                        </select>
                                    </div>

                                    <!-- Nama Prestasi -->
                                    <div class="space-y-2">
                                        <label class="block text-base font-semibold leading-6 text-black font-inter">Nama
                                            Prestasi</label>
                                        <input type="text" name="achievements[0][name]"
                                            class="w-full h-13 px-3 py-2 bg-white border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                            placeholder="Masukkan nama prestasi">
                                    </div>

                                    <!-- Tingkat -->
                                    <div class="space-y-2">
                                        <label
                                            class="block text-base font-semibold leading-6 text-black font-inter">Tingkat</label>
                                        <select name="achievements[0][tier]"
                                            class="w-full h-13 px-3 py-2 bg-white border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent appearance-none">
                                            <option value="">Pilih opsi</option>
                                            <option value="village">Desa</option>
                                            <option value="sub_district">Kecamatan</option>
                                            <option value="district">Kabupaten/Kota</option>
                                            <option value="province">Provinsi</option>
                                            <option value="national">Nasional</option>
                                            <option value="international">Internasional</option>
                                            <option value="world">Dunia</option>
                                        </select>
                                    </div>

                                    <!-- Peringkat -->
                                    <div class="space-y-2">
                                        <label
                                            class="block text-base font-semibold leading-6 text-black font-inter">Peringkat</label>
                                        <select name="achievements[0][ranking]"
                                            class="w-full h-13 px-3 py-2 bg-white border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent appearance-none">
                                            <option value="">Pilih opsi</option>
                                            <option value="1">Juara 1</option>
                                            <option value="2">Juara 2</option>
                                            <option value="3">Juara 3</option>
                                        </select>
                                    </div>

                                    <!-- Tahun -->
                                    <div class="space-y-2">
                                        <label
                                            class="block text-base font-semibold leading-6 text-black font-inter">Tahun</label>
                                        <input type="number" name="achievements[0][year]" min="2000" max="2024"
                                            class="w-full h-13 px-3 py-2 bg-white border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                            placeholder="Contoh: 2023">
                                    </div>
                                </div>

                                <!-- Remove Button (hidden for first entry) -->
                                <div class="flex justify-end mt-4">
                                    <button type="button" onclick="removeAchievement(this)"
                                        class="remove-achievement hidden px-4 py-2 bg-red-500 hover:bg-red-600 text-white rounded-lg transition-colors duration-200">
                                        <span class="text-sm font-semibold">Hapus</span>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Add Achievement Button -->
                        <div class="flex justify-center">
                            <button type="button" onclick="addAchievement()"
                                class="px-6 py-3 bg-green-600 hover:bg-green-700 text-white rounded-lg transition-colors duration-200 flex items-center gap-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                                <span class="text-sm font-semibold">Tambah Prestasi</span>
                            </button>
                        </div>

                        <!-- Note -->
                        <div class="bg-blue-100 border-l-4 border-blue-500 p-4 rounded">
                            <p class="text-sm text-blue-700">
                                <strong>Catatan:</strong> Prestasi bersifat opsional. Anda dapat menambahkan prestasi yang
                                pernah diraih atau mengosongkan jika tidak ada.
                            </p>
                        </div>

                        <!-- Navigation Buttons -->
                        <div class="flex justify-between pt-8">
                            <button type="button" onclick="showSection('parentDataSection')"
                                class="px-8 py-3 bg-gray-500 hover:bg-gray-600 border border-gray-500 rounded-lg transition-colors duration-200">
                                <span class="text-sm font-semibold text-white font-inter tracking-wider">Kembali</span>
                            </button>
                            <button type="button" onclick="submitForm()"
                                class="px-8 py-3 bg-blue-700 hover:bg-blue-800 border border-blue-700 rounded-lg transition-colors duration-200">
                                <span class="text-sm font-semibold text-white font-inter tracking-wider">Selesai</span>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <style>
        /* Custom styles for form elements */
        .font-roboto {
            font-family: 'Roboto', sans-serif;
        }

        .font-inter {
            font-family: 'Inter', sans-serif;
        }

        /* Custom select arrow */
        select {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e");
            background-position: right 0.5rem center;
            background-repeat: no-repeat;
            background-size: 1.5em 1.5em;
            padding-right: 2.5rem;
        }

        /* Input focus states */
        input:focus,
        select:focus,
        textarea:focus {
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        }

        /* Error states */
        .error {
            border-color: #ef4444;
        }

        .error:focus {
            border-color: #ef4444;
            box-shadow: 0 0 0 3px rgba(239, 68, 68, 0.1);
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // NISN validation
            const nisnInput = document.getElementById('nisn');
            if (nisnInput) {
                nisnInput.addEventListener('input', function (e) {
                    // Only allow numbers
                    e.target.value = e.target.value.replace(/[^0-9]/g, '');
                });
            }

            // Phone number validation
            const phoneInput = document.getElementById('phone');
            if (phoneInput) {
                phoneInput.addEventListener('input', function (e) {
                    // Only allow numbers
                    e.target.value = e.target.value.replace(/[^0-9]/g, '');
                });
            }

            // Form validation
            const form = document.querySelector('form');
            if (form) {
                form.addEventListener('submit', function (e) {
                    const requiredFields = form.querySelectorAll('[required]');
                    let isValid = true;

                    requiredFields.forEach(field => {
                        field.classList.remove('error');
                        if (!field.value.trim()) {
                            field.classList.add('error');
                            isValid = false;
                        }
                    });

                    if (!isValid) {
                        e.preventDefault();
                        alert('Mohon lengkapi semua field yang wajib diisi.');
                    }
                });
            }
        });

        function showSection(sectionId) {
            // Hide all sections
            const sections = ['personalDataSection', 'periodicDataSection', 'parentDataSection', 'achievementDataSection'];
            sections.forEach(id => {
                document.getElementById(id).classList.add('hidden');
            });

            // Show target section
            document.getElementById(sectionId).classList.remove('hidden');

            // Update progress bar
            updateProgressBar(sections.indexOf(sectionId));

            // Scroll to top
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }

        function updateProgressBar(currentStep) {
            const progressBars = ['progress-1', 'progress-2', 'progress-3', 'progress-4'];
            const completionText = document.getElementById('completion-text');

            progressBars.forEach((barId, index) => {
                const bar = document.getElementById(barId);
                if (index <= currentStep) {
                    bar.classList.remove('bg-blue-200');
                    bar.classList.add('bg-blue-700');
                } else {
                    bar.classList.remove('bg-blue-700');
                    bar.classList.add('bg-blue-200');
                }
            });

            // Update completion text
            if (currentStep === progressBars.length - 1) {
                completionText.classList.remove('text-blue-300');
                completionText.classList.add('text-blue-600');
            } else {
                completionText.classList.remove('text-blue-600');
                completionText.classList.add('text-blue-300');
            }
        }

        // Validate current section before proceeding
        function validateAndProceed(nextSection) {
            const activeSection = document.querySelector('[id$="DataSection"]:not(.hidden)');
            const requiredFields = activeSection.querySelectorAll('[required]');
            let isValid = true;

            requiredFields.forEach(field => {
                field.classList.remove('error');
                if (!field.value.trim()) {
                    field.classList.add('error');
                    isValid = false;
                }
            });

            if (!isValid) {
                alert('Mohon lengkapi semua field yang wajib diisi.');
                return false;
            }

            showSection(nextSection);
            return true;
        }

        function addAchievement() {
            const container = document.getElementById('achievementContainer');
            const achievementEntry = document.createElement('div');
            const index = container.children.length;
            achievementEntry.className = 'achievement-entry border-2 border-dashed border-gray-300 rounded-lg p-6';

            achievementEntry.innerHTML = `
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-4">
                <!-- Jenis Prestasi -->
                <div class="space-y-2">
                    <label class="block text-base font-semibold leading-6 text-black font-inter">Jenis Prestasi</label>
                    <select name="achievements[${index}][type]" 
                            class="w-full h-13 px-3 py-2 bg-white border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent appearance-none">
                        <option value="">Pilih opsi</option>
                        <option value="academic">Akademik</option>
                        <option value="nonacademic">Non-Akademik</option>
                    </select>
                </div>

                <!-- Nama Prestasi -->
                <div class="space-y-2">
                    <label class="block text-base font-semibold leading-6 text-black font-inter">Nama Prestasi</label>
                    <input type="text" 
                           name="achievements[${index}][name]"
                           class="w-full h-13 px-3 py-2 bg-white border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                           placeholder="Masukkan nama prestasi">
                </div>

                <!-- Tingkat -->
                <div class="space-y-2">
                    <label class="block text-base font-semibold leading-6 text-black font-inter">Tingkat</label>
                    <select name="achievements[${index}][tier]" 
                            class="w-full h-13 px-3 py-2 bg-white border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent appearance-none">
                        <option value="">Pilih opsi</option>
                        <option value="village">Desa</option>
                        <option value="sub_district">Kecamatan</option>
                        <option value="district">Kabupaten/Kota</option>
                        <option value="province">Provinsi</option>
                        <option value="national">Nasional</option>
                        <option value="international">Internasional</option>
                        <option value="world">Dunia</option>
                    </select>
                </div>

                <!-- Peringkat -->
                <div class="space-y-2">
                    <label class="block text-base font-semibold leading-6 text-black font-inter">Peringkat</label>
                    <select name="achievements[${index}][ranking]" 
                            class="w-full h-13 px-3 py-2 bg-white border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent appearance-none">
                        <option value="">Pilih opsi</option>
                        <option value="1">Juara 1</option>
                        <option value="2">Juara 2</option>
                        <option value="3">Juara 3</option>
                    </select>
                </div>

                <!-- Tahun -->
                <div class="space-y-2">
                    <label class="block text-base font-semibold leading-6 text-black font-inter">Tahun</label>
                    <input type="number" 
                           name="achievements[${index}][year]" min="2000" max="2024"
                           class="w-full h-13 px-3 py-2 bg-white border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                           placeholder="Contoh: 2023">
                </div>
            </div>

            <!-- Remove Button -->
            <div class="flex justify-end mt-4">
                <button type="button" 
                        onclick="removeAchievement(this)" 
                        class="px-4 py-2 bg-red-500 hover:bg-red-600 text-white rounded-lg transition-colors duration-200">
                    <span class="text-sm font-semibold">Hapus</span>
                </button>
            </div>
        `;

            container.appendChild(achievementEntry);

            // Show remove buttons if there are multiple entries
            updateRemoveButtons();
        }

        function removeAchievement(button) {
            const entry = button.closest('.achievement-entry');
            entry.remove();
            updateRemoveButtons();
        }

        function updateRemoveButtons() {
            const entries = document.querySelectorAll('.achievement-entry');
            entries.forEach((entry, index) => {
                const removeBtn = entry.querySelector('.remove-achievement');
                if (entries.length > 1) {
                    removeBtn.classList.remove('hidden');
                } else {
                    removeBtn.classList.add('hidden');
                }
            });
        }

        function submitForm() {
            // Validate current section first
            if (!validateAndProceed('achievementDataSection')) {
                return;
            }

            // Refresh CSRF token before submission
            fetch('/csrf-token')
                .then(response => response.json())
                .then(data => {
                    document.querySelector('input[name="_token"]').value = data.token;
                })
                .catch(error => console.log('CSRF refresh failed:', error))
                .finally(() => {
                    const form = document.getElementById('registrationForm');
                    form.submit();
                });
        }
    </script>
@endsection