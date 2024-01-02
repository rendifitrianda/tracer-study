<x-layout.app>

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">DETAIL DATA ALUMNI</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-12">
                    <div class="card ">
                        <div class="card-body">
                            <img src="{{ url('public') }}/{{ $list->foto }}" alt="" style="width: 100%">
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <ul style="list-style: none;padding:0;margin:0">
                                        <li class="d-flex align-items-center"
                                            style="padding: 6px 0;border-bottom:2px solid #dedede">
                                            <span style="width: 150px; font-weight:600">PRODI</span>
                                            <span>{{ $list->prodi->nama_prodi }}</span>
                                        </li>
                                        <li class="d-flex align-items-center"
                                            style="padding: 6px 0;border-bottom:2px solid #dedede">
                                            <span style="width: 150px; font-weight:600">Nama</span>
                                            <span>{{ $list->nama }}</span>
                                        </li>
                                        <li class="d-flex align-items-center"
                                            style="padding: 6px 0;border-bottom:2px solid #dedede">
                                            <span style="width: 150px; font-weight:600">NIK</span>
                                            <span>{{ $list->nik }}</span>
                                        </li>
                                        <li class="d-flex align-items-center"
                                            style="padding: 6px 0;border-bottom:2px solid #dedede">
                                            <span style="width: 150px; font-weight:600">IPK</span>
                                            <span>{{ $list->ipk }}</span>
                                        </li>
                                        <li class="d-flex align-items-center"
                                            style="padding: 6px 0;border-bottom:2px solid #dedede">
                                            <span style="width: 150px; font-weight:600">NIM</span>
                                            <span>{{ $list->nim }}</span>
                                        </li>
                                        <li class="d-flex align-items-center"
                                            style="padding: 6px 0;border-bottom:2px solid #dedede">
                                            <span style="width: 150px; font-weight:600">Tahun Masuk</span>
                                            <span>{{ $list->tahun_masuk }}</span>
                                        </li>
                                        <li class="d-flex align-items-center"
                                            style="padding: 6px 0;border-bottom:2px solid #dedede">
                                            <span style="width: 150px; font-weight:600">Tahun Lulus</span>
                                            <span>{{ $list->tahun_lulus }}</span>
                                        </li>
                                        <li class="d-flex align-items-center"
                                            style="padding: 6px 0;border-bottom:2px solid #dedede">
                                            <span style="width: 150px; font-weight:600">Jenis Kelamin</span>
                                            <span>{{ $list->jenis_kelamin }}</span>
                                        </li>
                                        <li class="d-flex align-items-center"
                                            style="padding: 6px 0;border-bottom:2px solid #dedede">
                                            <span style="width: 150px; font-weight:600">Agama</span>
                                            <span>{{ $list->agama }}</span>
                                        </li>
                                        <li class="d-flex align-items-center"
                                            style="padding: 6px 0;border-bottom:2px solid #dedede">
                                            <span style="width: 150px; font-weight:600">Tempat Tanggal
                                                Lahir</span>
                                            <span>{{ $list->tempat_lahir . ', ' . $list->tanggal_lahir }}</span>
                                        </li>
                                        <li class="d-flex align-items-center"
                                            style="padding: 6px 0;border-bottom:2px solid #dedede">
                                            <span style="width: 150px; font-weight:600">Alamat</span>
                                            <span>{{ $list->alamat }}</span>
                                        </li>
                                        <li class="d-flex align-items-center"
                                            style="padding: 6px 0;border-bottom:2px solid #dedede">
                                            <span style="width: 150px; font-weight:600">Telepon</span>
                                            <span>{{ $list->no_hp }}</span>
                                        </li>
                                        <li class="d-flex align-items-center"
                                            style="padding: 6px 0;border-bottom:2px solid #dedede">
                                            <span style="width: 150px; font-weight:600">Email</span>
                                            <span>{{ $list->email }}</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-12">
                                    <div class="d-flex align-items-center">
                                        <a href="{{ url('admin/alumni') }}" class="btn btn-warning mt-3">Kembali</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>




</x-layout.app>
