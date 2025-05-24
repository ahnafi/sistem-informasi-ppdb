@extends('layouts.default')
@section('title', 'Form Pendaftaran Siswa Baru')

@section('main')
<div class="relative min-h-screen bg-gradient-to-b from-white to-blue-400">
    <!-- Header Section -->
    <div class="w-full max-w-7xl mx-auto pt-12 px-4">
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
            <span id="completion-text" class="text-xl font-semibold text-blue-300 font-inter tracking-wider">Selesai</span>
        </div>
    </div>

    <!-- Form Container -->
    <div class="w-full max-w-6xl mx-auto px-4 space-y-8">
        <form id="registrationForm" action="{{ route('registration') }}" method="POST" class="space-y-8">
            @csrf
            
            <!-- First Form Section -->
            <div id="personalDataSection" class="bg-blue-50 rounded-2xl p-8">
                <!-- Form Header -->
                <div class="space-y-4">
                    <h2 class="text-4xl font-semibold leading-tight tracking-wider text-black font-inter">Data Diri Siswa</h2>
                    <hr class="border border-gray-400">
                </div>

                <!-- Form Fields Grid -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 mt-8">
                    <!-- Left Column -->
                    <div class="space-y-5">
                        <!-- Nama Lengkap -->
                        <div class="space-y-2">
                            <label for="nama_lengkap" class="block text-base font-semibold leading-6 tracking-wider text-black font-inter">Nama Lengkap*</label>
                            <input type="text" 
                                   id="nama_lengkap" 
                                   name="nama_lengkap" 
                                   required
                                   class="w-full h-13 px-3 py-2 bg-white border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                   placeholder="Masukkan nama lengkap">
                        </div>

                        <!-- Gender -->
                        <div class="space-y-2">
                            <label for="gender" class="block text-base font-semibold leading-6 tracking-wider text-black font-inter">Gender*</label>
                            <select id="gender" 
                                    name="gender" 
                                    required
                                    class="w-full h-13 px-3 py-2 bg-white border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent appearance-none">
                                <option value="">Pilih opsi</option>
                                <option value="L">Laki-laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>

                        <!-- Tempat Lahir -->
                        <div class="space-y-2">
                            <label for="tempat_lahir" class="block text-base font-semibold leading-6 tracking-wider text-black font-inter">Tempat Lahir*</label>
                            <input type="text" 
                                   id="tempat_lahir" 
                                   name="tempat_lahir" 
                                   required
                                   class="w-full h-13 px-3 py-2 bg-white border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                   placeholder="Masukkan tempat lahir">
                        </div>

                        <!-- Tanggal Lahir -->
                        <div class="space-y-2">
                            <label for="tanggal_lahir" class="block text-base font-semibold leading-6 tracking-wider text-black font-inter">Tanggal Lahir*</label>
                            <input type="date" 
                                   id="tanggal_lahir" 
                                   name="tanggal_lahir" 
                                   required
                                   class="w-full h-13 px-3 py-2 bg-white border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>

                        <!-- Alamat -->
                        <div class="space-y-2">
                            <label for="alamat" class="block text-base font-semibold leading-6 tracking-wider text-black font-inter">Alamat*</label>
                            <textarea id="alamat" 
                                      name="alamat" 
                                      required
                                      rows="2"
                                      class="w-full px-3 py-2 bg-white border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent resize-none"
                                      placeholder="Masukkan alamat lengkap"></textarea>
                        </div>

                        <!-- Provinsi/Kabupaten/Kecamatan/Desa -->
                        <div class="space-y-2">
                            <label for="wilayah" class="block text-base font-semibold leading-6 tracking-wider text-gray-800 font-inter">Prov/Kab/Kec/Desa*</label>
                            <input type="text" 
                                   id="wilayah" 
                                   name="wilayah" 
                                   required
                                   class="w-full h-13 px-3 py-2 bg-white border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                   placeholder="Contoh: Jawa Barat, Bandung, Coblong, Dago">
                        </div>
                    </div>

                    <!-- Right Column -->
                    <div class="space-y-5">
                        <!-- NISN -->
                        <div class="space-y-2">
                            <label for="nisn" class="block text-base font-semibold leading-6 tracking-wider text-black font-inter">NISN*</label>
                            <input type="text" 
                                   id="nisn" 
                                   name="nisn" 
                                   required
                                   maxlength="10"
                                   pattern="[0-9]{10}"
                                   class="w-full h-13 px-3 py-2 bg-white border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                   placeholder="Masukkan 10 digit NISN">
                        </div>

                        <!-- Email -->
                        <div class="space-y-2">
                            <label for="email" class="block text-base font-semibold leading-6 tracking-wider text-black font-inter">Email*</label>
                            <input type="email" 
                                   id="email" 
                                   name="email" 
                                   required
                                   class="w-full h-13 px-3 py-2 bg-white border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                   placeholder="contoh@email.com">
                        </div>

                        <!-- No Telepon -->
                        <div class="space-y-2">
                            <label for="no_telepon" class="block text-base font-semibold leading-6 tracking-wider text-black font-inter">No Telepon*</label>
                            <input type="tel" 
                                   id="no_telepon" 
                                   name="no_telepon" 
                                   required
                                   pattern="[0-9]{10,13}"
                                   class="w-full h-13 px-3 py-2 bg-white border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                   placeholder="08xxxxxxxxxx">
                        </div>

                        <!-- Asal Sekolah -->
                        <div class="space-y-2">
                            <label for="asal_sekolah" class="block text-base font-semibold leading-6 tracking-wider text-black font-inter">Asal Sekolah*</label>
                            <input type="text" 
                                   id="asal_sekolah" 
                                   name="asal_sekolah" 
                                   required
                                   class="w-full h-13 px-3 py-2 bg-white border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                   placeholder="Nama sekolah asal">
                        </div>

                        <!-- Jenis Sekolah -->
                        <div class="space-y-2">
                            <label for="jenis_sekolah" class="block text-base font-semibold leading-6 tracking-wider text-black font-inter">Jenis Sekolah*</label>
                            <select id="jenis_sekolah" 
                                    name="jenis_sekolah" 
                                    required
                                    class="w-full h-13 px-3 py-2 bg-white border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent appearance-none">
                                <option value="">Pilih opsi</option>
                                <option value="SMP">SMP</option>
                                <option value="MTs">MTs</option>
                                <option value="Sederajat">Sederajat</option>
                            </select>
                        </div>

                        <!-- Informasi -->
                        <div class="space-y-2">
                            <label for="informasi" class="block text-base font-semibold leading-6 tracking-wider text-black font-inter">Informasi*</label>
                            <textarea id="informasi" 
                                      name="informasi" 
                                      required
                                      rows="2"
                                      class="w-full px-3 py-2 bg-white border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent resize-none"
                                      placeholder="Informasi tambahan atau motivasi mendaftar"></textarea>
                        </div>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="flex justify-end pt-8">
                    <button type="button" 
                            onclick="validateAndProceed('periodicDataSection')"
                            class="px-8 py-3 bg-blue-700 hover:bg-blue-800 border border-blue-700 rounded-lg transition-colors duration-200">
                        <span class="text-sm font-semibold text-white font-inter tracking-wider">Lanjutkan</span>
                    </button>
                </div>
            </div>

            <!-- Second Form Section -->
            <div id="periodicDataSection" class="bg-blue-50 rounded-2xl p-8 hidden">
                <!-- Form Header -->
                <div class="space-y-4">
                    <h2 class="text-4xl font-semibold leading-tight tracking-wider text-black font-inter">Data Periodik Siswa</h2>
                    <hr class="border border-gray-400">
                </div>

                <!-- Form Fields Grid -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 mt-8">
                    <!-- Left Column -->
                    <div class="space-y-5">
                        <!-- Agama -->
                        <div class="space-y-2">
                            <label for="agama" class="block text-base font-semibold leading-6 tracking-wider text-black font-inter">Agama*</label>
                            <select id="agama" 
                                    name="agama" 
                                    required
                                    class="w-full h-13 px-3 py-2 bg-white border border-gray-500 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent appearance-none">
                                <option value="">Pilih opsi</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Konghucu">Konghucu</option>
                            </select>
                        </div>

                        <!-- Tempat Tinggal -->
                        <div class="space-y-2">
                            <label for="tempat_tinggal" class="block text-base font-semibold leading-6 tracking-wider text-black font-inter">Tempat Tinggal*</label>
                            <select id="tempat_tinggal" 
                                    name="tempat_tinggal" 
                                    required
                                    class="w-full h-13 px-3 py-2 bg-white border border-gray-500 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent appearance-none">
                                <option value="">Pilih opsi</option>
                                <option value="Bersama Orang Tua">Bersama Orang Tua</option>
                                <option value="Wali">Wali</option>
                                <option value="Kost">Kost</option>
                                <option value="Asrama">Asrama</option>
                                <option value="Panti Asuhan">Panti Asuhan</option>
                            </select>
                        </div>

                        <!-- Jarak Rumah ke Sekolah -->
                        <div class="space-y-2">
                            <label for="jarak_rumah" class="block text-base font-semibold leading-6 tracking-wider text-black font-inter">Jarak Rumah ke Sekolah (km)*</label>
                            <input type="number" 
                                   id="jarak_rumah" 
                                   name="jarak_rumah" 
                                   required
                                   min="0"
                                   step="0.1"
                                   class="w-full h-13 px-3 py-2 bg-white border border-gray-500 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                   placeholder="Contoh: 5.5">
                        </div>

                        <!-- Waktu Tempuh -->
                        <div class="space-y-2">
                            <label for="waktu_tempuh" class="block text-base font-semibold leading-6 tracking-wider text-black font-inter">Waktu Tempuh (menit)*</label>
                            <input type="number" 
                                   id="waktu_tempuh" 
                                   name="waktu_tempuh" 
                                   required
                                   min="0"
                                   class="w-full h-13 px-3 py-2 bg-white border border-gray-500 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                   placeholder="Contoh: 30">
                        </div>

                        <!-- Status Anak -->
                        <div class="space-y-2">
                            <label for="status_anak" class="block text-base font-semibold leading-6 tracking-wider text-black font-inter">Status Anak*</label>
                            <select id="status_anak" 
                                    name="status_anak" 
                                    required
                                    class="w-full h-13 px-3 py-2 bg-white border border-gray-500 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent appearance-none">
                                <option value="">Pilih opsi</option>
                                <option value="Anak Kandung">Anak Kandung</option>
                                <option value="Anak Tiri">Anak Tiri</option>
                                <option value="Anak Angkat">Anak Angkat</option>
                            </select>
                        </div>
                    </div>

                    <!-- Right Column -->
                    <div class="space-y-5">
                        <!-- Anak Ke -->
                        <div class="space-y-2">
                            <label for="anak_ke" class="block text-base font-semibold leading-6 tracking-wider text-black font-inter">Anak Ke*</label>
                            <input type="number" 
                                   id="anak_ke" 
                                   name="anak_ke" 
                                   required
                                   min="1"
                                   class="w-full h-13 px-3 py-2 bg-white border border-gray-500 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                   placeholder="Contoh: 1">
                        </div>

                        <!-- Jumlah Saudara Kandung -->
                        <div class="space-y-2">
                            <label for="jumlah_saudara" class="block text-base font-semibold leading-6 tracking-wider text-black font-inter">Jumlah Saudara Kandung*</label>
                            <input type="number" 
                                   id="jumlah_saudara" 
                                   name="jumlah_saudara" 
                                   required
                                   min="0"
                                   class="w-full h-13 px-3 py-2 bg-white border border-gray-500 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                   placeholder="Contoh: 2">
                        </div>

                        <!-- Berat Badan -->
                        <div class="space-y-2">
                            <label for="berat_badan" class="block text-base font-semibold leading-6 tracking-wider text-black font-inter">Berat Badan (kg)*</label>
                            <input type="number" 
                                   id="berat_badan" 
                                   name="berat_badan" 
                                   required
                                   min="20"
                                   max="200"
                                   class="w-full h-13 px-3 py-2 bg-white border border-gray-500 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                   placeholder="Contoh: 55">
                        </div>

                        <!-- Tinggi Badan -->
                        <div class="space-y-2">
                            <label for="tinggi_badan" class="block text-base font-semibold leading-6 tracking-wider text-black font-inter">Tinggi Badan (cm)*</label>
                            <input type="number" 
                                   id="tinggi_badan" 
                                   name="tinggi_badan" 
                                   required
                                   min="100"
                                   max="250"
                                   class="w-full h-13 px-3 py-2 bg-white border border-gray-500 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                   placeholder="Contoh: 165">
                        </div>

                        <!-- Pernah mengalami penyakit serius -->
                        <div class="space-y-2">
                            <label for="penyakit_serius" class="block text-base font-semibold leading-6 tracking-wider text-black font-inter">Pernah mengalami penyakit serius?*</label>
                            <select id="penyakit_serius" 
                                    name="penyakit_serius" 
                                    required
                                    class="w-full h-13 px-3 py-2 bg-white border border-gray-500 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent appearance-none">
                                <option value="">Pilih opsi</option>
                                <option value="Ya">Ya</option>
                                <option value="Tidak">Tidak</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Navigation Buttons -->
                <div class="flex justify-between pt-8">
                    <button type="button" 
                            onclick="showSection('personalDataSection')"
                            class="px-8 py-3 bg-gray-500 hover:bg-gray-600 border border-gray-500 rounded-lg transition-colors duration-200">
                        <span class="text-sm font-semibold text-white font-inter tracking-wider">Kembali</span>
                    </button>
                    <button type="button" 
                            onclick="validateAndProceed('parentDataSection')"
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
                        <h2 class="text-4xl font-semibold leading-tight tracking-wider text-black font-inter">Data Orang Tua/Wali</h2>
                        <hr class="border border-gray-400">
                    </div>

                    <!-- Data Ayah Section -->
                    <div class="space-y-6">
                        <div class="space-y-4">
                            <h3 class="text-2xl font-semibold text-black tracking-wider font-inter">Data Ayah</h3>
                            <hr class="border border-gray-400">
                        </div
                        
                        <!-- Ayah Fields - First Row -->
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                            <div class="space-y-2">
                                <label for="nama_ayah" class="block text-base font-semibold leading-6 text-black font-inter">Nama Ayah*</label>
                                <input type="text" 
                                       id="nama_ayah" 
                                       name="nama_ayah" 
                                       required
                                       class="w-full h-13 px-3 py-2 bg-white border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                       placeholder="Masukkan nama ayah">
                            </div>
                            
                            <div class="space-y-2">
                                <label for="pekerjaan_ayah" class="block text-base font-semibold leading-6 text-black font-inter">Pekerjaan*</label>
                                <input type="text" 
                                       id="pekerjaan_ayah" 
                                       name="pekerjaan_ayah" 
                                       required
                                       class="w-full h-13 px-3 py-2 bg-white border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                       placeholder="Masukkan pekerjaan">
                            </div>
                            
                            <div class="space-y-2">
                                <label for="pendidikan_ayah" class="block text-base font-semibold leading-6 text-black font-inter">Pendidikan*</label>
                                <select id="pendidikan_ayah" 
                                        name="pendidikan_ayah" 
                                        required
                                        class="w-full h-13 px-3 py-2 bg-white border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent appearance-none">
                                    <option value="">Pilih pendidikan</option>
                                    <option value="SD">SD</option>
                                    <option value="SMP">SMP</option>
                                    <option value="SMA">SMA</option>
                                    <option value="D3">D3</option>
                                    <option value="S1">S1</option>
                                    <option value="S2">S2</option>
                                    <option value="S3">S3</option>
                                </select>
                            </div>
                            
                            <div class="space-y-2">
                                <label for="no_hp_ayah" class="block text-base font-semibold leading-6 text-black font-inter">No. HP*</label>
                                <input type="tel" 
                                       id="no_hp_ayah" 
                                       name="no_hp_ayah" 
                                       required
                                       pattern="[0-9]{10,13}"
                                       class="w-full h-13 px-3 py-2 bg-white border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                       placeholder="08xxxxxxxxxx">
                            </div>
                        </div>
                        
                        <!-- Ayah Fields - Second Row -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-2xl mx-auto">
                            <div class="space-y-2">
                                <label for="alamat_ayah" class="block text-base font-semibold leading-6 text-black font-inter">Alamat*</label>
                                <textarea id="alamat_ayah" 
                                          name="alamat_ayah" 
                                          required
                                          rows="2"
                                          class="w-full px-3 py-2 bg-white border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent resize-none"
                                          placeholder="Masukkan alamat"></textarea>
                            </div>
                            
                            <div class="space-y-2">
                                <label for="penghasilan_ayah" class="block text-base font-semibold leading-6 text-black font-inter">Penghasilan per Bulan*</label>
                                <select id="penghasilan_ayah" 
                                        name="penghasilan_ayah" 
                                        required
                                        class="w-full h-13 px-3 py-2 bg-white border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent appearance-none">
                                    <option value="">Pilih opsi</option>
                                    <option value="< 1 juta">< 1 juta</option>
                                    <option value="1-3 juta">1-3 juta</option>
                                    <option value="3-5 juta">3-5 juta</option>
                                    <option value="5-10 juta">5-10 juta</option>
                                    <option value="> 10 juta">> 10 juta</option>
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
                                <label for="nama_ibu" class="block text-base font-semibold leading-6 text-black font-inter">Nama Ibu*</label>
                                <input type="text" 
                                       id="nama_ibu" 
                                       name="nama_ibu" 
                                       required
                                       class="w-full h-13 px-3 py-2 bg-white border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                       placeholder="Masukkan nama ibu">
                            </div>
                            
                            <div class="space-y-2">
                                <label for="pekerjaan_ibu" class="block text-base font-semibold leading-6 text-black font-inter">Pekerjaan*</label>
                                <input type="text" 
                                       id="pekerjaan_ibu" 
                                       name="pekerjaan_ibu" 
                                       required
                                       class="w-full h-13 px-3 py-2 bg-white border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                       placeholder="Masukkan pekerjaan">
                            </div>
                            
                            <div class="space-y-2">
                                <label for="pendidikan_ibu" class="block text-base font-semibold leading-6 text-black font-inter">Pendidikan*</label>
                                <select id="pendidikan_ibu" 
                                        name="pendidikan_ibu" 
                                        required
                                        class="w-full h-13 px-3 py-2 bg-white border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent appearance-none">
                                    <option value="">Pilih pendidikan</option>
                                    <option value="SD">SD</option>
                                    <option value="SMP">SMP</option>
                                    <option value="SMA">SMA</option>
                                    <option value="D3">D3</option>
                                    <option value="S1">S1</option>
                                    <option value="S2">S2</option>
                                    <option value="S3">S3</option>
                                </select>
                            </div>
                            
                            <div class="space-y-2">
                                <label for="no_hp_ibu" class="block text-base font-semibold leading-6 text-black font-inter">No. HP*</label>
                                <input type="tel" 
                                       id="no_hp_ibu" 
                                       name="no_hp_ibu" 
                                       required
                                       pattern="[0-9]{10,13}"
                                       class="w-full h-13 px-3 py-2 bg-white border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                       placeholder="08xxxxxxxxxx">
                            </div>
                        </div>
                        
                        <!-- Ibu Fields - Second Row -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-2xl mx-auto">
                            <div class="space-y-2">
                                <label for="alamat_ibu" class="block text-base font-semibold leading-6 text-black font-inter">Alamat*</label>
                                <textarea id="alamat_ibu" 
                                          name="alamat_ibu" 
                                          required
                                          rows="2"
                                          class="w-full px-3 py-2 bg-white border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent resize-none"
                                          placeholder="Masukkan alamat"></textarea>
                            </div>
                            
                            <div class="space-y-2">
                                <label for="penghasilan_ibu" class="block text-base font-semibold leading-6 text-black font-inter">Penghasilan per Bulan*</label>
                                <select id="penghasilan_ibu" 
                                        name="penghasilan_ibu" 
                                        required
                                        class="w-full h-13 px-3 py-2 bg-white border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent appearance-none">
                                    <option value="">Pilih opsi</option>
                                    <option value="< 1 juta">< 1 juta</option>
                                    <option value="1-3 juta">1-3 juta</option>
                                    <option value="3-5 juta">3-5 juta</option>
                                    <option value="5-10 juta">5-10 juta</option>
                                    <option value="> 10 juta">> 10 juta</option>
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
                                <label for="nama_wali" class="block text-base font-semibold leading-6 text-black font-inter">Nama Wali</label>
                                <input type="text" 
                                       id="nama_wali" 
                                       name="nama_wali" 
                                       class="w-full h-13 px-3 py-2 bg-white border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                       placeholder="Masukkan nama wali (opsional)">
                            </div>
                            
                            <div class="space-y-2">
                                <label for="pekerjaan_wali" class="block text-base font-semibold leading-6 text-black font-inter">Pekerjaan</label>
                                <input type="text" 
                                       id="pekerjaan_wali" 
                                       name="pekerjaan_wali" 
                                       class="w-full h-13 px-3 py-2 bg-white border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                       placeholder="Masukkan pekerjaan (opsional)">
                            </div>
                            
                            <div class="space-y-2">
                                <label for="pendidikan_wali" class="block text-base font-semibold leading-6 text-black font-inter">Pendidikan</label>
                                <select id="pendidikan_wali" 
                                        name="pendidikan_wali" 
                                        class="w-full h-13 px-3 py-2 bg-white border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent appearance-none">
                                    <option value="">Pilih pendidikan</option>
                                    <option value="SD">SD</option>
                                    <option value="SMP">SMP</option>
                                    <option value="SMA">SMA</option>
                                    <option value="D3">D3</option>
                                    <option value="S1">S1</option>
                                    <option value="S2">S2</option>
                                    <option value="S3">S3</option>
                                </select>
                            </div>
                            
                            <div class="space-y-2">
                                <label for="no_hp_wali" class="block text-base font-semibold leading-6 text-black font-inter">No. HP</label>
                                <input type="tel" 
                                       id="no_hp_wali" 
                                       name="no_hp_wali" 
                                       pattern="[0-9]{10,13}"
                                       class="w-full h-13 px-3 py-2 bg-white border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                       placeholder="08xxxxxxxxxx (opsional)">
                            </div>
                        </div>
                        
                        <!-- Wali Fields - Second Row -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-2xl mx-auto">
                            <div class="space-y-2">
                                <label for="alamat_wali" class="block text-base font-semibold leading-6 text-black font-inter">Alamat</label>
                                <textarea id="alamat_wali" 
                                          name="alamat_wali" 
                                          rows="2"
                                          class="w-full px-3 py-2 bg-white border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent resize-none"
                                          placeholder="Masukkan alamat (opsional)"></textarea>
                            </div>
                            
                            <div class="space-y-2">
                                <label for="penghasilan_wali" class="block text-base font-semibold leading-6 text-black font-inter">Penghasilan per Bulan</label>
                                <select id="penghasilan_wali" 
                                        name="penghasilan_wali" 
                                        class="w-full h-13 px-3 py-2 bg-white border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent appearance-none">
                                    <option value="">Pilih opsi</option>
                                    <option value="< 1 juta">< 1 juta</option>
                                    <option value="1-3 juta">1-3 juta</option>
                                    <option value="3-5 juta">3-5 juta</option>
                                    <option value="5-10 juta">5-10 juta</option>
                                    <option value="> 10 juta">> 10 juta</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Navigation Buttons -->
                    <div class="flex justify-between pt-8">
                        <button type="button" 
                                onclick="showSection('periodicDataSection')"
                                class="px-8 py-3 bg-gray-500 hover:bg-gray-600 border border-gray-500 rounded-lg transition-colors duration-200">
                            <span class="text-sm font-semibold text-white font-inter tracking-wider">Kembali</span>
                        </button>
                        <button type="button" 
                                onclick="validateAndProceed('achievementDataSection')"
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
                        <h2 class="text-4xl font-semibold leading-tight tracking-wider text-black font-inter">Prestasi</h2>
                        <hr class="border border-gray-400">
                    </div>

                    <!-- Achievement Entry Container -->
                    <div id="achievementContainer" class="space-y-6">
                        <!-- Initial Achievement Form -->
                        <div class="achievement-entry border-2 border-dashed border-gray-300 rounded-lg p-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-4">
                                <!-- Jenis Prestasi -->
                                <div class="space-y-2">
                                    <label class="block text-base font-semibold leading-6 text-black font-inter">Jenis Prestasi</label>
                                    <select name="jenis_prestasi[]" 
                                            class="w-full h-13 px-3 py-2 bg-white border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent appearance-none">
                                        <option value="">Pilih opsi</option>
                                        <option value="Akademik">Akademik</option>
                                        <option value="Olahraga">Olahraga</option>
                                        <option value="Seni">Seni</option>
                                        <option value="Teknologi">Teknologi</option>
                                        <option value="Lainnya">Lainnya</option>
                                    </select>
                                </div>

                                <!-- Nama Prestasi -->
                                <div class="space-y-2">
                                    <label class="block text-base font-semibold leading-6 text-black font-inter">Nama Prestasi</label>
                                    <input type="text" 
                                           name="nama_prestasi[]"
                                           class="w-full h-13 px-3 py-2 bg-white border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                           placeholder="Masukkan nama prestasi">
                                </div>

                                <!-- Tingkat -->
                                <div class="space-y-2">
                                    <label class="block text-base font-semibold leading-6 text-black font-inter">Tingkat</label>
                                    <select name="tingkat_prestasi[]" 
                                            class="w-full h-13 px-3 py-2 bg-white border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent appearance-none">
                                        <option value="">Pilih opsi</option>
                                        <option value="Sekolah">Sekolah</option>
                                        <option value="Kecamatan">Kecamatan</option>
                                        <option value="Kabupaten/Kota">Kabupaten/Kota</option>
                                        <option value="Provinsi">Provinsi</option>
                                        <option value="Nasional">Nasional</option>
                                        <option value="Internasional">Internasional</option>
                                    </select>
                                </div>

                                <!-- Peringkat -->
                                <div class="space-y-2">
                                    <label class="block text-base font-semibold leading-6 text-black font-inter">Peringkat</label>
                                    <select name="peringkat_prestasi[]" 
                                            class="w-full h-13 px-3 py-2 bg-white border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent appearance-none">
                                        <option value="">Pilih opsi</option>
                                        <option value="Juara 1">Juara 1</option>
                                        <option value="Juara 2">Juara 2</option>
                                        <option value="Juara 3">Juara 3</option>
                                        <option value="Juara Harapan">Juara Harapan</option>
                                        <option value="Partisipan">Partisipan</option>
                                    </select>
                                </div>

                                <!-- Tanggal -->
                                <div class="space-y-2">
                                    <label class="block text-base font-semibold leading-6 text-black font-inter">Tanggal</label>
                                    <input type="date" 
                                           name="tanggal_prestasi[]"
                                           class="w-full h-13 px-3 py-2 bg-white border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                </div>
                            </div>

                            <!-- Remove Button (hidden for first entry) -->
                            <div class="flex justify-end mt-4">
                                <button type="button" 
                                        onclick="removeAchievement(this)" 
                                        class="remove-achievement hidden px-4 py-2 bg-red-500 hover:bg-red-600 text-white rounded-lg transition-colors duration-200">
                                    <span class="text-sm font-semibold">Hapus</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Add Achievement Button -->
                    <div class="flex justify-center">
                        <button type="button" 
                                onclick="addAchievement()"
                                class="px-6 py-3 bg-green-600 hover:bg-green-700 text-white rounded-lg transition-colors duration-200 flex items-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                            <span class="text-sm font-semibold">Tambah Prestasi</span>
                        </button>
                    </div>

                    <!-- Note -->
                    <div class="bg-blue-100 border-l-4 border-blue-500 p-4 rounded">
                        <p class="text-sm text-blue-700">
                            <strong>Catatan:</strong> Prestasi bersifat opsional. Anda dapat menambahkan prestasi yang pernah diraih atau mengosongkan jika tidak ada.
                        </p>
                    </div>

                    <!-- Navigation Buttons -->
                    <div class="flex justify-between pt-8">
                        <button type="button" 
                                onclick="showSection('parentDataSection')"
                                class="px-8 py-3 bg-gray-500 hover:bg-gray-600 border border-gray-500 rounded-lg transition-colors duration-200">
                            <span class="text-sm font-semibold text-white font-inter tracking-wider">Kembali</span>
                        </button>
                        <button type="button" 
                                onclick="submitForm()"
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
input:focus, select:focus, textarea:focus {
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
document.addEventListener('DOMContentLoaded', function() {
    // NISN validation
    const nisnInput = document.getElementById('nisn');
    nisnInput.addEventListener('input', function(e) {
        // Only allow numbers
        e.target.value = e.target.value.replace(/[^0-9]/g, '');
    });

    // Phone number validation
    const phoneInput = document.getElementById('no_telepon');
    phoneInput.addEventListener('input', function(e) {
        // Only allow numbers
        e.target.value = e.target.value.replace(/[^0-9]/g, '');
    });

    // Form validation
    const form = document.querySelector('form');
    form.addEventListener('submit', function(e) {
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
    achievementEntry.className = 'achievement-entry border-2 border-dashed border-gray-300 rounded-lg p-6';
    
    achievementEntry.innerHTML = `
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-4">
            <!-- Jenis Prestasi -->
            <div class="space-y-2">
                <label class="block text-base font-semibold leading-6 text-black font-inter">Jenis Prestasi</label>
                <select name="jenis_prestasi[]" 
                        class="w-full h-13 px-3 py-2 bg-white border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent appearance-none">
                    <option value="">Pilih opsi</option>
                    <option value="Akademik">Akademik</option>
                    <option value="Olahraga">Olahraga</option>
                    <option value="Seni">Seni</option>
                    <option value="Teknologi">Teknologi</option>
                    <option value="Lainnya">Lainnya</option>
                </select>
            </div>

            <!-- Nama Prestasi -->
            <div class="space-y-2">
                <label class="block text-base font-semibold leading-6 text-black font-inter">Nama Prestasi</label>
                <input type="text" 
                       name="nama_prestasi[]"
                       class="w-full h-13 px-3 py-2 bg-white border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                       placeholder="Masukkan nama prestasi">
            </div>

            <!-- Tingkat -->
            <div class="space-y-2">
                <label class="block text-base font-semibold leading-6 text-black font-inter">Tingkat</label>
                <select name="tingkat_prestasi[]" 
                        class="w-full h-13 px-3 py-2 bg-white border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent appearance-none">
                    <option value="">Pilih opsi</option>
                    <option value="Sekolah">Sekolah</option>
                    <option value="Kecamatan">Kecamatan</option>
                    <option value="Kabupaten/Kota">Kabupaten/Kota</option>
                    <option value="Provinsi">Provinsi</option>
                    <option value="Nasional">Nasional</option>
                    <option value="Internasional">Internasional</option>
                </select>
            </div>

            <!-- Peringkat -->
            <div class="space-y-2">
                <label class="block text-base font-semibold leading-6 text-black font-inter">Peringkat</label>
                <select name="peringkat_prestasi[]" 
                        class="w-full h-13 px-3 py-2 bg-white border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent appearance-none">
                    <option value="">Pilih opsi</option>
                    <option value="Juara 1">Juara 1</option>
                    <option value="Juara 2">Juara 2</option>
                    <option value="Juara 3">Juara 3</option>
                    <option value="Juara Harapan">Juara Harapan</option>
                    <option value="Partisipan">Partisipan</option>
                </select>
            </div>

            <!-- Tanggal -->
            <div class="space-y-2">
                <label class="block text-base font-semibold leading-6 text-black font-inter">Tanggal</label>
                <input type="date" 
                       name="tanggal_prestasi[]"
                       class="w-full h-13 px-3 py-2 bg-white border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
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
    
    // Collect achievement data
    const achievements = [];
    const achievementEntries = document.querySelectorAll('.achievement-entry');
    
    achievementEntries.forEach((entry) => {
        const jenisSelect = entry.querySelector('select[name="jenis_prestasi[]"]');
        const namaInput = entry.querySelector('input[name="nama_prestasi[]"]');
        const tingkatSelect = entry.querySelector('select[name="tingkat_prestasi[]"]');
        const peringkatSelect = entry.querySelector('select[name="peringkat_prestasi[]"]');
        const tanggalInput = entry.querySelector('input[name="tanggal_prestasi[]"]');
        
        // Only add if at least name is filled
        if (namaInput && namaInput.value.trim()) {
            achievements.push({
                jenis: jenisSelect ? jenisSelect.value : '',
                nama: namaInput.value,
                tingkat: tingkatSelect ? tingkatSelect.value : '',
                peringkat: peringkatSelect ? peringkatSelect.value : '',
                tanggal: tanggalInput ? tanggalInput.value : ''
            });
        }
    });
    
    // Add achievements as hidden input
    const form = document.getElementById('registrationForm');
    const prestasiInput = document.createElement('input');
    prestasiInput.type = 'hidden';
    prestasiInput.name = 'prestasi';
    prestasiInput.value = JSON.stringify(achievements);
    form.appendChild(prestasiInput);
    
    // Submit form
    form.submit();
}
</script>
@endsection