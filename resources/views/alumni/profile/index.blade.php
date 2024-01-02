<x-layout_alumni.app>
    <div class="row">
        <div class="col-md-4">

            @if ($list->foto != null)
                <img src="{{ url('public') }}/{{ $list->foto }}" alt="Image ..." width="100%">
            @else
                <div>
                    <div class="card-blank">
                        <ion-icon name="image-outline"></ion-icon>
                        <h2 class="text-empty">BELUM ADA FOTO !</h2>
                    </div>
                </div>
            @endif
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <ul style="list-style: none;padding:0;margin:0">
                        <x-layout_alumni.list.li title="PRODI" subtitle="{{ $list->prodi->nama_prodi }}" />
                        <x-layout_alumni.list.li title="NAMA" subtitle="{{ $list->nama }}" />
                        <x-layout_alumni.list.li title="NIK" subtitle="{{ $list->nik }}" />
                        <x-layout_alumni.list.li title="IPK" subtitle="{{ $list->ipk }}" />
                        <x-layout_alumni.list.li title="nim " subtitle="{{ $list->nim }}" />
                        <x-layout_alumni.list.li title="tahun_masuk" subtitle="{{ $list->tahun_masuk }}" />
                        <x-layout_alumni.list.li title="tahun_lulus" subtitle="{{ $list->tahun_lulus }}" />
                        <x-layout_alumni.list.li title="jenis_kelamin" subtitle="{{ $list->jenis_kelamin }}" />
                        <x-layout_alumni.list.li title="agama" subtitle="{{ $list->agama }}" />
                        <x-layout_alumni.list.li title="Tempat & Tanggal Lahir"
                            subtitle="{{ $list->tempat_lahir . ', ' . $list->tanggal_lahir }}" />
                        <x-layout_alumni.list.li title="alamat" subtitle="{{ $list->alamat }}" />
                        <x-layout_alumni.list.li title="no_hp" subtitle="{{ $list->no_hp }}" />
                        <x-layout_alumni.list.li title="email" subtitle="{{ $list->email }}" />
                    </ul>
                    <div class="d-flex align-items-center justify-content-end mt-5">
                        <a href="{{ url('alumni/profile/logout') }}" class="btn  btn-danger"
                            onclick="return confirm('Yakin ingin logout ?!')">LOGOUT</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout_alumni.app>
