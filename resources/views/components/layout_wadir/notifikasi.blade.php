<style>
    .box-notif {
        position: fixed;
        z-index: 9999;
        bottom: 0;
        right: 32px;
        left: 32px
    }
</style>



<div class="box-notif">
    @foreach (['success', 'danger'] as $status)
        @if (session($status))
            <div
                class="alert alert-{{ $status }} alert-dismissible d-flex align-items-center justify-content-center">
                {{ session($status) }}
            </div>
        @endif
    @endforeach
</div>

<!-- jQuery -->
<script src="{{ url('public') }}/assets/plugins/jquery/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        setTimeout(() => {
            $('.box-notif').hide('slow')
        }, 3000);
    })
</script>
