<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ url('public') }}/assets_alumni/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="{{ url('public') }}/assets_alumni/css/style.css">
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
</head>

<body class="guest-screen">

    <div class="appbar">
        <img src="{{ url('public') }}/assets_alumni/img/logo.png" alt="">
        <h2>Survey Kepuasan Pengguna Lulusan Universitas Politeknik Negeri Ketapang </h2>
    </div>

    <div class="app-body">

        <h2>Partisipasi Anda Penting! Isi Formulir Survei Alumni Program Tracer Study</h2>
        <ul>
            <li>
                <h3>Pendahuluan:</h3>
                <p>
                    Terima kasih telah menjadi bagian dari keluarga Program Tracer Study! Kami percaya bahwa kontribusi
                    Anda
                    sebagai
                    alumni
                    dapat memberikan wawasan berharga bagi pengembangan program dan membantu kami memahami dampaknya
                    pada
                    karir dan
                    kehidupan Anda. Mohon luangkan waktu sebentar untuk mengisi formulir survei berikut dan berikan
                    pandangan Anda
                    yang berharga.
                </p>
            </li>
            <li>
                <h3> Keuntungan Anda :</h3>
                <p>
                    Pengembangan Program: Partisipasi Anda akan membantu kami meningkatkan kualitas program kami agar
                    lebih
                    sesuai dengan
                    tuntutan pasar kerja saat ini.
                    Jaringan Alumni: Anda dapat menjalin hubungan dengan alumni lainnya dan memperluas jaringan
                    profesional Anda
                    melalui interaksi dalam survei ini.
                    Pembaruan Informasi: Kami akan memberikan pembaruan terkait perkembangan program dan kesuksesan
                    alumni melalui
                    hasil survei ini.
                    Rahasia dan Keamanan Data:
                    Kami menjamin bahwa data pribadi Anda akan dijaga kerahasiaannya dan digunakan hanya untuk tujuan
                    penelitian.
                    Hasil survei akan disajikan secara agregat, dan identitas individu akan tetap dirahasiakan.

                    Waktu Penyelesaian:
                    Perkiraan waktu penyelesaian survei ini adalah [waktu estimasi]. Kami menghargai kesabaran dan
                    kerjasama Anda
                    dalam memberikan tanggapan yang teliti.

                    Terima kasih atas Kontribusi Anda!
                    Partisipasi Anda sangat berarti bagi kami. Dengan pengalaman Anda, kami dapat terus meningkatkan
                    kualitas
                    pendidikan yang kami berikan. Jangan ragu untuk menghubungi kami jika ada pertanyaan atau masukan
                    tambahan.
                    Terima kasih atas dukungan Anda!
                </p>
            </li>
            <li class="card-form">
                <form action="{{ url('guest') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group mb-3">
                                <label for="">Alumni <sup>*</sup></label>
                                <select name="alumni_id" id=""
                                    class="form-select @error('alumni_id') is-invalid @enderror">
                                    <option value="">--- Pilih alumni kami ---</option>
                                    @foreach ($list as $alumni)
                                        <option value="{{ $alumni->id }}">{{ $alumni->nama }}</option>
                                    @endforeach
                                </select>
                                @error('alumni_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mb-3">
                                <label for="">Nama pengisi <sup>*</sup></label>
                                <input type="text" name="pengisi" id="" value="{{ old('pengisi') }}"
                                    class="form-control @error('pengisi') is-invalid @enderror"
                                    placeholder="Nama Pengisi ...">
                                @error('pengisi')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mb-3">
                                <label for="">Nama Perusahaan <sup>*</sup></label>
                                <input type="text" name="perusahaan" id="" value="{{ old('perusahaan') }}"
                                    class="form-control @error('perusahaan') is-invalid @enderror"
                                    placeholder="Nama Perusahaan ...">
                                @error('perusahaan')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mb-3">
                                <label for="">Posisi Jabatan <sup>*</sup></label>
                                <input type="text" name="jabatan" id="" value="{{ old('jabatan') }}"
                                    class="form-control @error('jabatan') is-invalid @enderror"
                                    placeholder="Posisi Jabatan ...">
                                @error('jabatan')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <ol>
                                <x-layout_alumni.guest.ul
                                    title="Bagaimana Sikap Atau Etika Lulusan Kami Yang Bekerja Ditempat Anda ?">
                                    <x-layout_alumni.guest.radio label="Sangat Baik" name="sikap"
                                        value="Sangat Baik" />
                                    <x-layout_alumni.guest.radio label="Baik" name="sikap" value="Baik" />
                                    <x-layout_alumni.guest.radio label="Cukup" name="sikap" value="Cukup" />
                                    <x-layout_alumni.guest.radio label="Kurang" name="sikap" value="Kurang" />
                                </x-layout_alumni.guest.ul>
                                <x-layout_alumni.guest.ul
                                    title="Bagaimana Keahlian kami Lulusan Kami Yang Bekerja Di tempat Anda Berdasarkan
                                    bidang bidang ilmu nya?">
                                    <x-layout_alumni.guest.radio label="Sangat Baik" name="keahlian"
                                        value="Sangat Baik" />
                                    <x-layout_alumni.guest.radio label="Baik" name="keahlian" value="Baik" />
                                    <x-layout_alumni.guest.radio label="Cukup" name="keahlian" value="Cukup" />
                                    <x-layout_alumni.guest.radio label="Kurang" name="keahlian" value="Kurang" />
                                </x-layout_alumni.guest.ul>
                                <x-layout_alumni.guest.ul
                                    title="Bagaimana Kemampuan Berbahasa Asing lulusan kami yang bekerja di tempat Anda ?">
                                    <x-layout_alumni.guest.radio label="Sangat Baik" name="bahasa_asing"
                                        value="Sangat Baik" />
                                    <x-layout_alumni.guest.radio label="Baik" name="bahasa_asing" value="Baik" />
                                    <x-layout_alumni.guest.radio label="Cukup" name="bahasa_asing" value="Cukup" />
                                    <x-layout_alumni.guest.radio label="Kurang" name="bahasa_asing" value="Kurang" />
                                </x-layout_alumni.guest.ul>
                                <x-layout_alumni.guest.ul
                                    title="Bagaimana Kemampuan Teknologi informasi lulusan kami yang bekerja di tempat Anda
                                    ?">
                                    <x-layout_alumni.guest.radio label="Sangat Baik" name="penggunaan_tek"
                                        value="Sangat Baik" />
                                    <x-layout_alumni.guest.radio label="Baik" name="penggunaan_tek"
                                        value="Baik" />
                                    <x-layout_alumni.guest.radio label="Cukup" name="penggunaan_tek"
                                        value="Cukup" />
                                    <x-layout_alumni.guest.radio label="Kurang" name="penggunaan_tek"
                                        value="Kurang" />
                                </x-layout_alumni.guest.ul>
                                <x-layout_alumni.guest.ul
                                    title="Bagaimana Kemampuan Teknologi informasi lulusan kami yang bekerja di tempat Anda
                                    ?">
                                    <x-layout_alumni.guest.radio label="Sangat Baik" name="komunikasi"
                                        value="Sangat Baik" />
                                    <x-layout_alumni.guest.radio label="Baik" name="komunikasi" value="Baik" />
                                    <x-layout_alumni.guest.radio label="Cukup" name="komunikasi" value="Cukup" />
                                    <x-layout_alumni.guest.radio label="Kurang" name="komunikasi" value="Kurang" />
                                </x-layout_alumni.guest.ul>
                                <x-layout_alumni.guest.ul
                                    title="Bagaimana Kemampuan Kerjasama lulusan kami yang bekerja di tempat Anda ?">
                                    <x-layout_alumni.guest.radio label="Sangat Baik" name="kerjasama"
                                        value="Sangat Baik" />
                                    <x-layout_alumni.guest.radio label="Baik" name="kerjasama" value="Baik" />
                                    <x-layout_alumni.guest.radio label="Cukup" name="kerjasama" value="Cukup" />
                                    <x-layout_alumni.guest.radio label="Kurang" name="kerjasama" value="Kurang" />
                                </x-layout_alumni.guest.ul>
                                <x-layout_alumni.guest.ul
                                    title="Bagaimana Kemampuan Pengembangan diri lulusan kami yang bekerja di tempat Anda ?">
                                    <x-layout_alumni.guest.radio label="Sangat Baik" name="pengembangan_diri"
                                        value="Sangat Baik" />
                                    <x-layout_alumni.guest.radio label="Baik" name="pengembangan_diri"
                                        value="Baik" />
                                    <x-layout_alumni.guest.radio label="Cukup" name="pengembangan_diri"
                                        value="Cukup" />
                                    <x-layout_alumni.guest.radio label="Kurang" name="pengembangan_diri"
                                        value="Kurang" />
                                </x-layout_alumni.guest.ul>
                                <x-layout_alumni.guest.ul
                                    title="Bagaimana Kesiapan Terjun Di masyarakat lulusan kami yang bekerja di tempat Anda
                                    ?">
                                    <x-layout_alumni.guest.radio label="Sangat Baik" name="kesiapan"
                                        value="Sangat Baik" />
                                    <x-layout_alumni.guest.radio label="Baik" name="kesiapan" value="Baik" />
                                    <x-layout_alumni.guest.radio label="Cukup" name="kesiapan" value="Cukup" />
                                    <x-layout_alumni.guest.radio label="Kurang" name="kesiapan" value="Kurang" />
                                </x-layout_alumni.guest.ul>
                                <x-layout_alumni.guest.ul
                                    title="Bagaimana Harapan Anda terhadap lulusan Mahasiswa politeknik Negeri Ketapang ?">
                                    <div class="form-group mb-3">
                                        <textarea name="harapan" id="" cols="30" rows="10"
                                            class="form-control  @error('harapan') is-invalid @enderror" placeholder="Masukan text ...."></textarea>
                                        @error('harapan')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </x-layout_alumni.guest.ul>
                                <x-layout_alumni.guest.ul
                                    title="Saran Dan masukkan Untuk politeknik Negeri Ketapang ?">
                                    <div class="form-group mb-3">
                                        <textarea name="kritik_saran" id="" cols="30" rows="10"
                                            class="form-control  @error('kritik_saran') is-invalid @enderror" placeholder="Masukan text ...."></textarea>
                                        @error('kritik_saran')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </x-layout_alumni.guest.ul>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex align-items-center justify-content-end">
                                <button class="btn btn-primary">KIRIM JAWABAN</button>
                            </div>
                        </div>
                    </div>

                </form>
            </li>
        </ul>






    </div>
    <script src="{{ url('public') }}/assets_alumni/js/jquery.min.js"></script>
    <script src="{{ url('public') }}/assets_alumni/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('public') }}/assets_alumni/ionicons/dist/ionicons.js"></script>
    <script src="{{ url('public') }}/assets_alumni/js/app.js"></script>
</body>

</html>
