<x-layout.app>

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">FORM TAMBAH DATA ALUMNI</h1>
                </div>

            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form method="POST" action="{{ url('admin/alumni/tambah') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">

                                    <div class="row">
                                        <div class="col-md-4">
                                            <x-input.select label="Prodi" field="prodi_id">
                                                @foreach ($list as $item)
                                                    <option value="{{ $item->id }}">{{ $item->nama_prodi }}</option>
                                                @endforeach
                                            </x-input.select>
                                        </div>

                                        <div class="col-md-4">
                                            <x-input.input field="nik" label="NIK" type="text"
                                                placeholder="Masukn NIK ..." />
                                        </div>
                                        <div class="col-md-4">
                                            <x-input.input field="ipk" label="IPK" type="text"
                                                placeholder="Masukn IPK ..." />
                                        </div>
                                        <div class="col-md-4">
                                            <x-input.input field="nim" label="NIM" type="text"
                                                placeholder="Masukn NIM ..." />
                                        </div>
                                        <div class="col-md-4">
                                            <x-input.input field="nama" label="Nama" type="text"
                                                placeholder="Masukn Nama ..." />
                                        </div>
                                        <div class="col-md-4">
                                            <x-input.input field="tahun_masuk" label="Tahun Masuk" type="text"
                                                placeholder="Masukn tahun masuk ..." />
                                        </div>
                                        <div class="col-md-4">
                                            <x-input.input field="tahun_lulus" label="Tahun Lulus" type="text"
                                                placeholder="Masukn tahun lulus ..." />
                                        </div>
                                        <div class="col-md-4">
                                            <x-input.select label="Jenis Kelamin" field="jenis_kelamin">
                                                <option value="Laki-laki">Laki-laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </x-input.select>
                                        </div>
                                        <div class="col-md-4">
                                            <x-input.select label="Agama" field="agama">
                                                <option value="Islam">Islam</option>
                                                <option value="Kristen">Kristen</option>
                                                <option value="Katholik">Katholik</option>
                                                <option value="Buddha">Buddha</option>
                                                <option value="Khonghucu">Khonghucu</option>
                                            </x-input.select>
                                        </div>
                                        <div class="col-md-4">
                                            <x-input.input field="tempat_lahir" label="Tempat Lahir" type="text"
                                                placeholder="Masukn Tempat Lahir ..." />
                                        </div>
                                        <div class="col-md-4">
                                            <x-input.input field="tanggal_lahir" label="Tanggal Lahir" type="date"
                                                placeholder="Masukn Tanggal Lahir ..." />
                                        </div>
                                        <div class="col-md-4">
                                            <x-input.input field="alamat" label="Alamat" type="text"
                                                placeholder="Masukn Alamat ..." />
                                        </div>
                                        <div class="col-md-4">
                                            <x-input.input field="no_hp" label="No.Telepon / HP" type="number"
                                                placeholder="Masukn No.Telpon / HP ..." />
                                        </div>
                                        <div class="col-md-4">
                                            <x-input.input field="email" label="Email" type="email"
                                                placeholder="Masukn Email ..." />
                                        </div>
                                        <div class="col-md-4">
                                            <x-input.input field="password" label="Password" type="password"
                                                placeholder="Masukn Password ..." />
                                        </div>

                                        <div class="col-md-4">
                                            <x-input.input field="foto" label="Foto" type="file"
                                                placeholder="Masukn Foto ..." />
                                        </div>

                                        <div class="col-md-12">
                                            <div class="d-flex align-items-center justify-content-end">
                                                <button class="btn btn-primary float-right">SIMPAN</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




</x-layout.app>
