document.addEventListener('DOMContentLoaded', function () {
    let successMessage = document.querySelector('meta[name="success-message"]');

    if (successMessage && successMessage.content !== '') {
        Swal.fire({
            title: 'Berhasil!',
            text: successMessage.content,
            icon: 'success',
            iconColor: '#28A745',
            background: '#ffffff',
            color: '#333',
            confirmButtonText: 'OK',
            confirmButtonColor: '#28A745',
            showClass: {
                popup: 'animate__animated animate__fadeInDown'
            },
            hideClass: {
                popup: 'animate__animated animate__fadeOutUp'
            },
            backdrop: `rgba(0, 0, 0, 0.3)`
        });
    }
});
