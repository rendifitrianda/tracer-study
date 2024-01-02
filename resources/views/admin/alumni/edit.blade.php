<x-layout.app>

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">FORM EDIT DATA ALUMNI</h1>
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
                            <form method="POST" action="{{ url('admin/alumni/edit', $list->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">

                                    <div class="row">
                                        <div class="col-md-4">
                                            <x-input.select label="Prodi" field="prodi_id">
                                                @foreach ($prodi as $item)
                                                    <option value="{{ $item->id }}"
                                                        @if ($item->id == $list->prodi_id) selected @endif>
                                                        {{ $item->nama_prodi }}</option>
                                                @endforeach
                                            </x-input.select>
                                        </div>

                                        <div class="col-md-4">
                                            <x-input.input field="nik" value="{{ $list->nik }}" label="NIK"
                                                type="text" placeholder="Masukn NIK ..." />
                                        </div>
                                        <div class="col-md-4">
                                            <x-input.input field="ipk" value="{{ $list->ipk }}" label="IPK"
                                                type="text" placeholder="Masukn IPK ..." />
                                        </div>
                                        <div class="col-md-4">
                                            <x-input.input field="nim" value="{{ $list->nim }}" label="NIM"
                                                type="text" placeholder="Masukn NIM ..." />
                                        </div>
                                        <div class="col-md-4">
                                            <x-input.input field="nama" value="{{ $list->nama }}" label="Nama"
                                                type="text" placeholder="Masukn Nama ..." />
                                        </div>
                                        <div class="col-md-4">
                                            <x-input.input field="tahun_masuk" value="{{ $list->tahun_masuk }}"
                                                label="Tahun Masuk" type="text"
                                                placeholder="Masukn tahun masuk ..." />
                                        </div>
                                        <div class="col-md-4">
                                            <x-input.input field="tahun_lulus" value="{{ $list->tahun_lulus }}"
                                                label="Tahun Lulus" type="text"
                                                placeholder="Masukn tahun lulus ..." />
                                        </div>
                                        <div class="col-md-4">
                                            <x-input.select label="Jenis Kelamin" field="jenis_kelamin">
                                                <option value="Laki-laki"
                                                    @if ($list->jenis_kelamin == 'Laki-laki') selected @endif>Laki-laki</option>
                                                <option value="Perempuan"
                                                    @if ($list->jenis_kelamin == 'Perempuan') selected @endif>Perempuan</option>
                                            </x-input.select>
                                        </div>
                                        <div class="col-md-4">
                                            <x-input.select label="Agama" field="agama">
                                                <option value="Islam"
                                                    @if ($list->agama == 'Islam') selected @endif>Islam</option>
                                                <option value="Kristen"
                                                    @if ($list->agama == 'Kristen') selected @endif>Kristen</option>
                                                <option value="Katholik"
                                                    @if ($list->agama == 'Katholik') selected @endif>Katholik</option>
                                                <option value="Buddha"
                                                    @if ($list->agama == 'Buddha') selected @endif>Buddha</option>
                                                <option value="Khonghucu"
                                                    @if ($list->agama == 'Khonghucu') selected @endif>Khonghucu</option>
                                            </x-input.select>
                                        </div>
                                        <div class="col-md-4">
                                            <x-input.input field="tempat_lahir" value="{{ $list->tempat_lahir }}"
                                                label="Tempat Lahir" type="text"
                                                placeholder="Masukn Tempat Lahir ..." />
                                        </div>
                                        <div class="col-md-4">
                                            <x-input.input field="tanggal_lahir" value="{{ $list->tanggal_lahir }}"
                                                label="Tanggal Lahir" type="date"
                                                placeholder="Masukn Tanggal Lahir ..." />
                                        </div>
                                        <div class="col-md-4">
                                            <x-input.input field="alamat" value="{{ $list->alamat }}" label="Alamat"
                                                type="text" placeholder="Masukn Alamat ..." />
                                        </div>
                                        <div class="col-md-4">
                                            <x-input.input field="no_hp" value="{{ $list->no_hp }}"
                                                label="No.Telepon / HP" type="number"
                                                placeholder="Masukn No.Telpon / HP ..." />
                                        </div>
                                        <div class="col-md-4">
                                            <x-input.input field="email" value="{{ $list->email }}" label="Email"
                                                type="email" placeholder="Masukn Email ..." />
                                        </div>
                                        <div class="col-md-4">
                                            <x-input.input field="password" value="{{ $list->password }}"
                                                label="password" type="Password" placeholder="Masukn password ..." />
                                        </div>

                                        <div class="col-md-4">
                                            <x-input.input field="foto" label="Foto" type="file"
                                                placeholder="Masukn Foto ..." />
                                        </div>

                                        <div class="col-md-12">
                                            <div class="d-flex align-items-center justify-content-end">
                                                <button class="btn btn-primary float-right">UPDATE</button>
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
