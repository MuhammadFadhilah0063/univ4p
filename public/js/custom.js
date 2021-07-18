$('.delete').on('click', function (e) {
    e.preventDefault();
    let id = $(this).data('id');

    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success mx-2',
            cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false
    })

    swalWithBootstrapButtons.fire({
        title: 'Apa kamu yakin hapus data ini!',
        text: "Kamu tidak akan bisa mengembalikan data ini lagi",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Ya, hapus',
        cancelButtonText: 'Tidak',
        reverseButtons: true,
    }).then((result) => {
        if (result.isConfirmed) {
            swalWithBootstrapButtons.fire({
                icon: 'success',
                title: 'Data berhasil dihapus',
                showConfirmButton: true,
                confirmButtonText: 'Oke',
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#delete-form').submit()
                }
            })

        } else if (
                /* Read more about handling dismissals below */
                result.dismiss === Swal.DismissReason.cancel
            ) {
                Swal.fire({
                    icon: 'error',
                    title: '<strong>Hapus gagal</strong>',
                    html:
                        'Tenang, data anda masih aman :)',
                    showConfirmButton: true,
                    confirmButtonText: 'Oke',
                    timer: 3000
                })
            }
    })
});

