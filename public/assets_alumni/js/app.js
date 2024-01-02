

$('.sidebar-toggle').on('click', function () {
    $('.app').toggleClass('open')
})
$('.sidebar-toggle-closes').on('click', function () {
    $('.app').toggleClass('open')
})

// Floating input
$('.form-control').on('focus blur input', function () {
    var input = $(this);
    var formGroup = input.closest('.form-group-floating');
    var label = formGroup.find('label');

    // Periksa apakah input memiliki nilai atau dalam keadaan fokus
    if (input.val() || input.is(':focus')) {
        formGroup.addClass('active');
        input.attr('placeholder', input.data('placeholder'));
    } else {
        formGroup.removeClass('active');
        input.attr('placeholder', '');
    }
});

// Fungsi untuk menangani klik pada label
$('.form-group-floating label').on('click', function () {
    var label = $(this);
    var formGroup = label.closest('.form-group-floating');
    var input = formGroup.find('.form-control');

    // Fokuskan input dan tambahkan class active
    input.focus();
    formGroup.addClass('active');
});

// Atur form-group-floating ke dalam keadaan aktif jika input memiliki nilai saat halaman dimuat
$('.form-control').each(function () {
    var input = $(this);
    var formGroup = input.closest('.form-group-floating');

    if (input.val()) {
        formGroup.addClass('active');
    }
});