<x-layout_alumni.app>
    @php
        $data = Auth::guard('alumni')->user();
    @endphp
    <section class="content-header">
        {{-- <h2 class="title">SELAMAT DATAN DI TRACER </h2> --}}
    </section>
    <div class="row">
        <div class="col-md-12">
            <div class="card-blank">
                <ion-icon name="image-outline"></ion-icon>
                <h2 class="text-empty">SELAMAT DATANG {{ $data->nama }} DI TRACER STUDY POLITEKNIK NEGERI KETAPANG</h2>
            </div>
        </div>
    </div>

</x-layout_alumni.app>
