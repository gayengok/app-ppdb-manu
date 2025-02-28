// Ajax siswa kelas 10, 11 dan 12
$(document).ready(function() {
    $('#formTambahSiswa').on('submit', function(e) {
        e.preventDefault(); 
        
        var formData = $(this).serialize();

        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: formData,
            success: function(response) {
                $('#totalSiswa').text(response.totalSiswa);

                $('#formTambahSiswa')[0].reset();

                alert('Data siswa berhasil ditambahkan!');

                location.reload();
            },
            error: function(xhr) {
                alert('Gagal menambah data siswa.');
            }
        });
    });
});

// // Ajax siswa kelas 11
// $(document).ready(function() {
//     $('#formTambahSiswa').on('submit', function(e) {
//         e.preventDefault(); 

//         var formData = $(this).serialize();

//         $.ajax({
//             type: 'POST',
//             url: $(this).attr('action'),
//             data: formData,
//             success: function(response) {
//                 $('#totalSiswa').text(response.totalSiswa);

//                 $('#formTambahSiswa')[0].reset();

//                 alert('Data siswa berhasil ditambahkan!');

//                 location.reload();
//             },
//             error: function(xhr) {
//                 alert('Gagal menambah data siswa.');
//             }
//         });
//     });
// });

// // Ajak Siswa Kelas 12
// $(document).ready(function() {
//     $('#formTambahSiswa').on('submit', function(e) {
//         e.preventDefault();

//         var formData = $(this).serialize();

//         $.ajax({
//             type: 'POST',
//             url: $(this).attr('action'),
//             data: formData,
//             success: function(response) {
//                 $('.card-title').text(response.totalSiswa);

//                 $('#formTambahSiswa')[0].reset();

//                 alert('Data siswa berhasil ditambahkan!');
//             },
//             error: function(xhr) {
//                 alert('Gagal menambah data siswa.');
//             }
//         });
//     });
// });



