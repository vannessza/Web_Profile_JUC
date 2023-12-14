@extends('layouts.main')

@section('container')
<section>
    <div class="container">
        <div class="w-full mt-36 px-4 mb-10">
            <h1 class="text-[#008d8d]
            block font-bold text-2xl mb-4 lg:text-4xl">Pengaduan Nasabah</h1>
            <div>
                <!-- HTML Structure -->
                <div class="dropdown-container">
                    <button class="flex justify-between w-full p-2 hover:bg-slate-300 shadow mb-2 items-center dropdown-toggle hidden">
                        <div class="max-w-xs md:max-w-xl lg:max-w-3xl md:mr-20 xl:mr-28">
                            <p class="font-bold lg:text-xl ml-2 my-2">Pengaduan dapat dilakukan oleh nasabah secara lisan maupun tertulis sebagai berikut</p>
                        </div>
                    </button>
                    <div class="dropdown-content hidden">
                        <!-- Content for the first dropdown item -->
                        <div class="flex mb-4">
                            <p class="text-[#fdc330] mr-2">•</p>
                            <div>
                                <p class="font-extralight text-justify">Pengaduhan Secara Lisan:</p>
                                <div class="flex">
                                    <p class="text-[#fdc330] mr-2 font-bold">-</p>
                                    <p class="font-extralight text-justify">Anda dapat menghubungi Customer Service Officer PT Jasa Utama Capital Sekuritas dengan menggunakan telepon ke nomor (021) 8378 9000</p>
                                </div>
                                <div class="flex">
                                    <p class="text-[#fdc330] mr-2 font-bold">-</p>
                                    <p class="font-extralight text-justify">Anda dapat datang langsung ke lokasi kantor kami</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex mb-4">
                            <p class="text-[#fdc330] mr-2">•</p>
                            <div>
                                <p class="font-extralight text-justify">Pengaduhan Secara Tertulis:</p>
                                <div class="flex">
                                    <p class="text-[#fdc330] mr-2 font-bold">-</p>
                                    <p class="font-extralight text-justify">Anda dapat mengirimkan pesan melalui e-mail Help Desk pada alamat <span class="font-bold">customerservice@juc.co.id</span></p>
                                </div>
                                <div class="flex">
                                    <p class="text-[#fdc330] mr-2 font-bold">-</p>
                                    <div>
                                        <p class="font-extralight text-justify">Anda dapat mengirimkan surat resmi ke perusahaan yang ditunjukkan kepada Customer Service Officer dengan cara:</p>
                                        <div class="flex">
                                            <p class="text-[#fdc330] mr-2 font-bold">-</p>
                                            <p class="font-extralight text-justify">Mengisi formulir pengaduan nasabah yang disediakan perusahaan.</p>
                                        </div>
                                        <div class="flex">
                                            <p class="text-[#fdc330] mr-2 font-bold">-</p>
                                            <div>
                                                <p class="font-extralight text-justify">Diantarkan langsung ke perusahaan atau melalui pos ke alamat</p>
                                                <div class="border-2 border-[#fdc330] mt-7 mb-7 rounded-lg p-4 font-bold">
                                                    PT Jasa Utama Capital Sekuritas
                                                    Gedung Kospin Jasa, Jl. Jend. Gatot Subroto Kav. 1, Menteng Dalam, Tebet,
                                                    Jakarta Selatan, DKI Jakarta 12870
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <p class="font-extralight text-justify">Pengaduan nasabah akan segera ditindaklanjuti dan diselesaikan paling lamba 20 (dua puluh) hari kerja setelah tanggal penerimaan pengaduan. Dalam hal ini terdapat kondisi tertentu, proses penyelesaian dapat diperpanjang dengan jangka waktu 20 (dua puluh) hari kerja berikutnya dan perpanjangan waktu tersebut akan diberitahukan secara tertulis sebelumnya kepada nasabah sebelum jangka waktu 20 (dua puluh) hari pertama berakhir.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="flex justify-between w-full p-2 hover:bg-slate-300 shadow mb-2 items-center dropdown-toggle">
                        <div class="max-w-xs md:max-w-xl lg:max-w-3xl md:mr-20 xl:mr-28">
                            <p class="font-bold lg:text-xl ml-2 my-2">Pengaduan dapat dilakukan oleh nasabah secara lisan maupun tertulis sebagai berikut</p>
                        </div>
                    </button>
                    <div class="dropdown-content hidden">
                        <!-- Content for the first dropdown item -->
                        <div class="flex mb-4">
                            <p class="text-[#fdc330] mr-2">•</p>
                            <div>
                                <p class="font-extralight text-justify">Pengaduhan Secara Lisan:</p>
                                <div class="flex">
                                    <p class="text-[#fdc330] mr-2 font-bold">-</p>
                                    <p class="font-extralight text-justify">Anda dapat menghubungi Customer Service Officer PT Jasa Utama Capital Sekuritas dengan menggunakan telepon ke nomor (021) 8378 9000</p>
                                </div>
                                <div class="flex">
                                    <p class="text-[#fdc330] mr-2 font-bold">-</p>
                                    <p class="font-extralight text-justify">Anda dapat datang langsung ke lokasi kantor kami</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex mb-4">
                            <p class="text-[#fdc330] mr-2">•</p>
                            <div>
                                <p class="font-extralight text-justify">Pengaduhan Secara Tertulis:</p>
                                <div class="flex">
                                    <p class="text-[#fdc330] mr-2 font-bold">-</p>
                                    <p class="font-extralight text-justify">Anda dapat mengirimkan pesan melalui e-mail Help Desk pada alamat <span class="font-bold">customerservice@juc.co.id</span></p>
                                </div>
                                <div class="flex">
                                    <p class="text-[#fdc330] mr-2 font-bold">-</p>
                                    <div>
                                        <p class="font-extralight text-justify">Anda dapat mengirimkan surat resmi ke perusahaan yang ditunjukkan kepada Customer Service Officer dengan cara:</p>
                                        <div class="flex">
                                            <p class="text-[#fdc330] mr-2 font-bold">-</p>
                                            <p class="font-extralight text-justify">Mengisi formulir pengaduan nasabah yang disediakan perusahaan.</p>
                                        </div>
                                        <div class="flex">
                                            <p class="text-[#fdc330] mr-2 font-bold">-</p>
                                            <div>
                                                <p class="font-extralight text-justify">Diantarkan langsung ke perusahaan atau melalui pos ke alamat</p>
                                                <div class="border-2 border-[#fdc330] mt-7 mb-7 rounded-lg p-4 font-bold">
                                                    PT Jasa Utama Capital Sekuritas
                                                    Gedung Kospin Jasa, Jl. Jend. Gatot Subroto Kav. 1, Menteng Dalam, Tebet,
                                                    Jakarta Selatan, DKI Jakarta 12870
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <p class="font-extralight text-justify">Pengaduan nasabah akan segera ditindaklanjuti dan diselesaikan paling lamba 20 (dua puluh) hari kerja setelah tanggal penerimaan pengaduan. Dalam hal ini terdapat kondisi tertentu, proses penyelesaian dapat diperpanjang dengan jangka waktu 20 (dua puluh) hari kerja berikutnya dan perpanjangan waktu tersebut akan diberitahukan secara tertulis sebelumnya kepada nasabah sebelum jangka waktu 20 (dua puluh) hari pertama berakhir.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    <button class="flex justify-between w-full p-2 hover:bg-slate-300 shadow mb-2 items-center dropdown-toggle">
                        <div class="max-w-xs md:max-w-xl lg:max-w-3xl md:mr-20 xl:mr-28">
                            <p class="font-bold lg:text-xl ml-2 my-2">Kondisi tertentu yang dimaksud adalah</p>
                        </div>
                    </button>
                    <div class="dropdown-content hidden">
                        <!-- Content for the second dropdown item -->
                        <div class="mb-10">
                            <div class="flex">
                                <p class="text-[#fdc330] mr-2">•</p>
                                <p class="font-extralight text-justify">Kantor PT Jasa Utama Capital Sekuritas yang menerima pengaduan tidak sama dengan kantor tempat terjadinya permasalahan yang diadukan dan terdapat kendala komunikasi di antara kedua kantor PT Jasa Utama Capital Sekuritas tersebut;</p>
                            </div>
                            <div class="flex">
                                <p class="text-[#fdc330] mr-2">•</p>
                                <p class="font-extralight text-justify">Transaksi keuangan yang diadukan oleh nasabah memerlukan penelitian khusus terhadap dokumen-dokumen PT Jasa Utama Capital Sekuritas; dan/atau</p>
                            </div>
                            <div class="flex">
                                <p class="text-[#fdc330] mr-2">•</p>
                                <p class="font-extralight text-justify">Terdapat hal-hal lain di luar kendali PT Jasa Utama Capital Sekuritas seperti adanya keterlibatan pihak ketiga di luar PT Jasa Utama Capital Sekuritas dalam transaksi keuangan yang dilakukan oleh nasabah.</p>
                            </div>
                        </div>
                    </div>

                    <button class="flex justify-between w-full p-2 hover:bg-slate-300 shadow mb-2 items-center dropdown-toggle">
                        <div class="max-w-xs md:max-w-xl lg:max-w-3xl md:mr-20 xl:mr-28">
                            <p class="font-bold lg:text-xl ml-2 my-2">LAPORAN PELANGGARAN</p>
                        </div>
                    </button>
                    <div class="dropdown-content hidden">
                        <!-- Content for the second dropdown item -->
                        <div class="mb-4">
                            <p class="text-[#fdc330]
                            block font-bold lg:text-lg tracking-wide mb-2">Tujuan</p>
                            <p class="font-extralight text-justify">Sebagai sarana bagi pelapor untuk melaporkan tindakan penipuan (fraud), pelanggaran terhadap hukum, kode etik, dan/atau benturan kepentingan yang dilakukan oleh pihak internal PT JUCS tanpa rasa takut atau khawatir karena dijamin kerahasiaannya sehingga pelanggaran yang terjadi dapat dideteksi dan dicegah sedini mungkin.  Pihak internal PT JUCS adalah Manajemen dan Pegawai.</p>
                        </div>
                        <div class="mb-4">
                            <p class="text-[#fdc330]
                            block font-bold lg:text-lg tracking-wide mb-2">Sarana Pengaduan</p>
                            <p class="font-extralight text-justify mb-2">Semua pihak dari internal maupun eksternal PT JUCS dapat melakukan Pelaporan Pelanggaran (Whistleblowing) secara rahasia kepada PT JUCS melalui email Jasa Utama Capital Sekuritas Whistleblowing: </p>
                            <p class="font-bold">jucwhistleblowing@gmail.com</p>
                        </div>
                        <div>
                            <p class="text-[#fdc330]
                            block font-bold lg:text-lg tracking-wide mb-2">Hal-hal Yang Harus Dipenuhi Pelapor</p>
                            <p class="font-extralight text-justify mb-2">Pelaporan pelanggaran yang disampaikan oleh pelapor, sekurang-kurangnya memuat dan menjelaskan hal-hal sebagai berikut:</p>
                            <div class="flex">
                                <p class="text-[#fdc330] mr-2">•</p>
                                <p class="font-extralight text-justify">pelanggaran apa yang terjadi <span class="font-bold">(what)</span> </p>
                            </div>
                            <div class="flex">
                                <p class="text-[#fdc330] mr-2">•</p>
                                <p class="font-extralight text-justify">siapa pihak yang terlibat pelanggaran tersebut <span class="font-bold">(who)</span>. </p>
                            </div>
                            <div class="flex">
                                <p class="text-[#fdc330] mr-2">•</p>
                                <p class="font-extralight text-justify">kapan terjadinya pelanggaran tersebut <span class="font-bold">(when)</span>. </p>
                            </div>
                            <div class="flex">
                                <p class="text-[#fdc330] mr-2">•</p>
                                <p class="font-extralight text-justify">tempat kejadian pelanggaran tersebut <span class="font-bold">(where)</span>. </p>
                            </div>
                            <div class="flex mb-2">
                                <p class="text-[#fdc330] mr-2">•</p>
                                <p class="font-extralight text-justify">bagaimana terjadinya pelanggaran tersebut <span class="font-bold">(how)</span>. </p>
                            </div>
                            <p class="text-[#fdc330]
                            block font-bold lg:text-lg tracking-wide mb-2">Laporan yang disampaikan harus berhubungan dengan:</p>
                            <div class="flex">
                                <p class="text-[#fdc330] mr-2">•</p>
                                <p class="font-extralight text-justify">Fraud <span class="font-bold">(Penipuan, Pencurian, Penggelapan Aset, Pembocoran Informasi)</span>. </p>
                            </div>
                            <div class="flex">
                                <p class="text-[#fdc330] mr-2">•</p>
                                <p class="font-extralight text-justify">Pelanggaran hukum <span class="font-bold">(Tindak Pidana Pasar Modal, Tindak Pidana Pencucian Uang dan Tindak Pidana lainnya)</span>. </p>
                            </div>
                            <div class="flex">
                                <p class="text-[#fdc330] mr-2">•</p>
                                <p class="font-extralight text-justify">Pelanggaran kode etik <span class="font-bold">(Etika Bisnis dan Etika Kerja)</span>. </p>
                            </div>
                            <div class="flex">
                                <p class="text-[#fdc330] mr-2">•</p>
                                <p class="font-extralight text-justify">Pelanggaran benturan kepentingan <span class="font-bold">(Penyalahgunaan Wewenang, Korupsi, Gratifikasi)</span>. </p>
                            </div>
                            <div class="flex mb-4">
                                <p class="text-[#fdc330] mr-2">•</p>
                                <p class="font-extralight text-justify">Hal-hal lainnya yang dapat dipersamakan dengan itu. </p>
                            </div>
                            <div>
                                <p class="text-[#fdc330]
                                block font-bold lg:text-lg tracking-wide mb-2">Perlindungan Bagi Pelapor</p>
                                <p class="font-extralight text-justify mb-2">PT JUCS berkomitmen untuk memberikan dukungan dan perlindungan kepada setiap pelapor yang beritikad baik yang meliputi :</p>
                                <div class="flex">
                                    <p class="text-[#fdc330] mr-2">•</p>
                                    <p class="font-extralight text-justify">Menjamin kerahasiaan Identitas Pelapor.</p>
                                </div>
                                <div class="flex">
                                    <p class="text-[#fdc330] mr-2">•</p>
                                    <p class="font-extralight text-justify">Menjamin perlindungan terhadap Pelapor dari segala bentuk ancaman, intimidasi, ataupun tindakan tidak menyenangkan dari pihak manapun selama Pelapor menjaga kerahasiaan pelanggaran yang diadukan kepada pihak manapun. </p>
                                </div>
                                <div class="flex">
                                    <p class="text-[#fdc330] mr-2">•</p>
                                    <p class="font-extralight text-justify">Jaminan Perlindungan terhadap Pelapor juga berlaku bagi para pihak yang melaksanakan Investigasi maupun pihak-pihak yang memberikan informasi terkait dengan Pengaduan/Penyingkapan tersebut. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
            </div>
            {{-- <div class="border-2 border-[#fdc330] mt-7 rounded-lg p-4">
                <p class="text-[#fdc330]
                block font-bold lg:text-lg tracking-wide mb-2">Pengaduan dapat dilakukan oleh nasabah secara lisan maupun tertulis sebagai berikut:</p>
                <div class="flex mb-4">
                    <p class="text-[#fdc330] mr-2">•</p>
                    <div>
                        <p class="font-extralight text-justify">Pengaduhan Secara Lisan:</p>
                        <div class="flex">
                            <p class="text-[#fdc330] mr-2 font-bold">-</p>
                            <p class="font-extralight text-justify">Anda dapat menghubungi Customer Service Officer PT Jasa Utama Capital Sekuritas dengan menggunakan telepon ke nomor (021) 8378 9000</p>
                        </div>
                        <div class="flex">
                            <p class="text-[#fdc330] mr-2 font-bold">-</p>
                            <p class="font-extralight text-justify">Anda dapat datang langsung ke lokasi kantor kami</p>
                        </div>
                    </div>
                </div>
                <div class="flex mb-4">
                    <p class="text-[#fdc330] mr-2">•</p>
                    <div>
                        <p class="font-extralight text-justify">Pengaduhan Secara Tertulis:</p>
                        <div class="flex">
                            <p class="text-[#fdc330] mr-2 font-bold">-</p>
                            <p class="font-extralight text-justify">Anda dapat mengirimkan pesan melalui e-mail Help Desk pada alamat <span class="font-bold">customerservice@juc.co.id</span></p>
                        </div>
                        <div class="flex">
                            <p class="text-[#fdc330] mr-2 font-bold">-</p>
                            <div>
                                <p class="font-extralight text-justify">Anda dapat mengirimkan surat resmi ke perusahaan yang ditunjukkan kepada Customer Service Officer dengan cara:</p>
                                <div class="flex">
                                    <p class="text-[#fdc330] mr-2 font-bold">-</p>
                                    <p class="font-extralight text-justify">Mengisi formulir pengaduan nasabah yang disediakan perusahaan.</p>
                                </div>
                                <div class="flex">
                                    <p class="text-[#fdc330] mr-2 font-bold">-</p>
                                    <div>
                                        <p class="font-extralight text-justify">Diantarkan langsung ke perusahaan atau melalui pos ke alamat</p>
                                        <div class="border-2 border-[#fdc330] mt-7 mb-7 rounded-lg p-4 font-bold">
                                            PT Jasa Utama Capital Sekuritas
                                            Gedung Kospin Jasa, Jl. Jend. Gatot Subroto Kav. 1, Menteng Dalam, Tebet,
                                            Jakarta Selatan, DKI Jakarta 12870
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <p class="font-extralight text-justify">Pengaduan nasabah akan segera ditindaklanjuti dan diselesaikan paling lamba 20 (dua puluh) hari kerja setelah tanggal penerimaan pengaduan. Dalam hal ini terdapat kondisi tertentu, proses penyelesaian dapat diperpanjang dengan jangka waktu 20 (dua puluh) hari kerja berikutnya dan perpanjangan waktu tersebut akan diberitahukan secara tertulis sebelumnya kepada nasabah sebelum jangka waktu 20 (dua puluh) hari pertama berakhir.</p>
                        </div>
                        <div class="mb-10">
                            <p class="text-[#fdc330]
                            block font-bold lg:text-lg tracking-wide mb-2">Kondisi tertentu yang dimaksud adalah:</p>
                            <div class="flex">
                                <p class="text-[#fdc330] mr-2">•</p>
                                <p class="font-extralight text-justify">Kantor PT Jasa Utama Capital Sekuritas yang menerima pengaduan tidak sama dengan kantor tempat terjadinya permasalahan yang diadukan dan terdapat kendala komunikasi di antara kedua kantor PT Jasa Utama Capital Sekuritas tersebut;</p>
                            </div>
                            <div class="flex">
                                <p class="text-[#fdc330] mr-2">•</p>
                                <p class="font-extralight text-justify">Transaksi keuangan yang diadukan oleh nasabah memerlukan penelitian khusus terhadap dokumen-dokumen PT Jasa Utama Capital Sekuritas; dan/atau</p>
                            </div>
                            <div class="flex">
                                <p class="text-[#fdc330] mr-2">•</p>
                                <p class="font-extralight text-justify">Terdapat hal-hal lain di luar kendali PT Jasa Utama Capital Sekuritas seperti adanya keterlibatan pihak ketiga di luar PT Jasa Utama Capital Sekuritas dalam transaksi keuangan yang dilakukan oleh nasabah.</p>
                            </div>
                        </div>
                        <div>
                            <p class="text-[#fdc330]
                            block font-bold lg:text-lg tracking-wide mb-4">LAPORAN PELANGGARAN</p>
                            <div class="mb-4">
                                <p class="text-[#fdc330]
                                block font-bold lg:text-lg tracking-wide mb-2">Tujuan</p>
                                <p class="font-extralight text-justify">Sebagai sarana bagi pelapor untuk melaporkan tindakan penipuan (fraud), pelanggaran terhadap hukum, kode etik, dan/atau benturan kepentingan yang dilakukan oleh pihak internal PT JUCS tanpa rasa takut atau khawatir karena dijamin kerahasiaannya sehingga pelanggaran yang terjadi dapat dideteksi dan dicegah sedini mungkin.  Pihak internal PT JUCS adalah Manajemen dan Pegawai.</p>
                            </div>
                            <div class="mb-4">
                                <p class="text-[#fdc330]
                                block font-bold lg:text-lg tracking-wide mb-2">Sarana Pengaduan</p>
                                <p class="font-extralight text-justify mb-2">Semua pihak dari internal maupun eksternal PT JUCS dapat melakukan Pelaporan Pelanggaran (Whistleblowing) secara rahasia kepada PT JUCS melalui email Jasa Utama Capital Sekuritas Whistleblowing: </p>
                                <p class="font-bold">jucwhistleblowing@gmail.com</p>
                            </div>
                            <div>
                                <p class="text-[#fdc330]
                                block font-bold lg:text-lg tracking-wide mb-2">Hal-hal Yang Harus Dipenuhi Pelapor</p>
                                <p class="font-extralight text-justify mb-2">Pelaporan pelanggaran yang disampaikan oleh pelapor, sekurang-kurangnya memuat dan menjelaskan hal-hal sebagai berikut:</p>
                                <div class="flex">
                                    <p class="text-[#fdc330] mr-2">•</p>
                                    <p class="font-extralight text-justify">pelanggaran apa yang terjadi <span class="font-bold">(what)</span> </p>
                                </div>
                                <div class="flex">
                                    <p class="text-[#fdc330] mr-2">•</p>
                                    <p class="font-extralight text-justify">siapa pihak yang terlibat pelanggaran tersebut <span class="font-bold">(who)</span>. </p>
                                </div>
                                <div class="flex">
                                    <p class="text-[#fdc330] mr-2">•</p>
                                    <p class="font-extralight text-justify">kapan terjadinya pelanggaran tersebut <span class="font-bold">(when)</span>. </p>
                                </div>
                                <div class="flex">
                                    <p class="text-[#fdc330] mr-2">•</p>
                                    <p class="font-extralight text-justify">tempat kejadian pelanggaran tersebut <span class="font-bold">(where)</span>. </p>
                                </div>
                                <div class="flex mb-2">
                                    <p class="text-[#fdc330] mr-2">•</p>
                                    <p class="font-extralight text-justify">bagaimana terjadinya pelanggaran tersebut <span class="font-bold">(how)</span>. </p>
                                </div>
                                <p class="text-[#fdc330]
                                block font-bold lg:text-lg tracking-wide mb-2">Laporan yang disampaikan harus berhubungan dengan:</p>
                                <div class="flex">
                                    <p class="text-[#fdc330] mr-2">•</p>
                                    <p class="font-extralight text-justify">Fraud <span class="font-bold">(Penipuan, Pencurian, Penggelapan Aset, Pembocoran Informasi)</span>. </p>
                                </div>
                                <div class="flex">
                                    <p class="text-[#fdc330] mr-2">•</p>
                                    <p class="font-extralight text-justify">Pelanggaran hukum <span class="font-bold">(Tindak Pidana Pasar Modal, Tindak Pidana Pencucian Uang dan Tindak Pidana lainnya)</span>. </p>
                                </div>
                                <div class="flex">
                                    <p class="text-[#fdc330] mr-2">•</p>
                                    <p class="font-extralight text-justify">Pelanggaran kode etik <span class="font-bold">(Etika Bisnis dan Etika Kerja)</span>. </p>
                                </div>
                                <div class="flex">
                                    <p class="text-[#fdc330] mr-2">•</p>
                                    <p class="font-extralight text-justify">Pelanggaran benturan kepentingan <span class="font-bold">(Penyalahgunaan Wewenang, Korupsi, Gratifikasi)</span>. </p>
                                </div>
                                <div class="flex mb-4">
                                    <p class="text-[#fdc330] mr-2">•</p>
                                    <p class="font-extralight text-justify">Hal-hal lainnya yang dapat dipersamakan dengan itu. </p>
                                </div>
                                <div>
                                    <p class="text-[#fdc330]
                                    block font-bold lg:text-lg tracking-wide mb-2">Perlindungan Bagi Pelapor</p>
                                    <p class="font-extralight text-justify mb-2">PT JUCS berkomitmen untuk memberikan dukungan dan perlindungan kepada setiap pelapor yang beritikad baik yang meliputi :</p>
                                    <div class="flex">
                                        <p class="text-[#fdc330] mr-2">•</p>
                                        <p class="font-extralight text-justify">Menjamin kerahasiaan Identitas Pelapor.</p>
                                    </div>
                                    <div class="flex">
                                        <p class="text-[#fdc330] mr-2">•</p>
                                        <p class="font-extralight text-justify">Menjamin perlindungan terhadap Pelapor dari segala bentuk ancaman, intimidasi, ataupun tindakan tidak menyenangkan dari pihak manapun selama Pelapor menjaga kerahasiaan pelanggaran yang diadukan kepada pihak manapun. </p>
                                    </div>
                                    <div class="flex">
                                        <p class="text-[#fdc330] mr-2">•</p>
                                        <p class="font-extralight text-justify">Jaminan Perlindungan terhadap Pelapor juga berlaku bagi para pihak yang melaksanakan Investigasi maupun pihak-pihak yang memberikan informasi terkait dengan Pengaduan/Penyingkapan tersebut. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</section>
@endsection