$('#delete').on('click', function (e) {
    e.preventDefault();
    let id = $(this).data('id');
    Swal.fire({
        title: 'Apa kamu yakin?',
        text: "Kamu tidak akan dapat mengembalikan data ini lagi! !",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, hapus!',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.isConfirmed) {
            $('#delete-user-form').submit();
        }
    })
});