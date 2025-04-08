

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="card shadow-lg border-0">
                        <div class="card-header bg-gradient-primary text-white py-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="card-title mb-0 font-weight-bold">
                                    <i class="fas fa-video mr-2"></i> Tambah Video Baru
                                </h4>
                                <a href="<?php echo e(route('videos.index')); ?>" class="btn btn-light btn-sm">
                                    <i class="fas fa-arrow-left mr-1"></i> Kembali
                                </a>
                            </div>
                        </div>
                        <div class="card-body p-4">
                            <form action="<?php echo e(route('videos.store')); ?>" method="POST" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>

                                <div class="form-group mb-4">
                                    <label for="title" class="form-label text-muted">Judul Video</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-white">
                                                <i class="fas fa-heading text-primary"></i>
                                            </span>
                                        </div>
                                        <input type="text" name="title" id="title"
                                            class="form-control shadow-sm border-0 bg-light py-2 px-3"
                                            placeholder="Masukkan judul video" required>
                                    </div>
                                </div>

                                <div class="form-group mb-4">
                                    <label for="video_link" class="form-label text-muted">Link Video YouTube</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-white">
                                                <i class="fab fa-youtube text-danger"></i>
                                            </span>
                                        </div>
                                        <input type="url" name="video_link" id="video_link"
                                            class="form-control shadow-sm border-0 bg-light py-2 px-3"
                                            placeholder="Masukkan link video YouTube" required>
                                    </div>
                                </div>

                                <div class="mt-4 mb-3" id="video-preview-container">
                                    <label class="form-label text-muted">Preview Video</label>
                                    <div class="video-preview-placeholder text-center py-5 bg-light rounded">
                                        <i class="fas fa-film text-muted mb-3" style="font-size: 48px;"></i>
                                        <p class="text-muted">Masukkan link YouTube untuk menampilkan preview</p>
                                    </div>
                                    <div class="video-preview-frame d-none">
                                        <div class="embed-responsive embed-responsive-16by9 rounded shadow-sm">
                                            <iframe id="youtube-preview" class="embed-responsive-item"
                                                allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>

                                <hr class="my-4">

                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary btn-lg px-5 font-weight-bold">
                                        <i class="fas fa-save mr-2"></i> Simpan Video
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .bg-gradient-primary {
            background: linear-gradient(135deg, #4e73df 0%, #224abe 100%);
        }

        .form-control:focus {
            border-color: #4e73df;
            box-shadow: 0 0 0 0.2rem rgba(78, 115, 223, 0.25);
        }

        .btn-light {
            background: rgba(255, 255, 255, 0.2);
            border: none;
            transition: all 0.3s ease;
        }

        .btn-light:hover {
            background: rgba(255, 255, 255, 0.3);
        }

        .btn-primary {
            background: #4e73df;
            border: none;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background: #3a5fc8;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card {
            border-radius: 10px;
            overflow: hidden;
        }

        .input-group-text {
            border: none;
        }

        .form-control {
            border-radius: 0 5px 5px 0 !important;
        }

        .shadow-sm {
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05) !important;
        }

        .video-preview-placeholder {
            border: 2px dashed #e0e0e0;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .video-preview-placeholder:hover {
            border-color: #4e73df;
            background-color: #f8f9fc;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const videoLink = document.getElementById('video_link');
            const previewContainer = document.getElementById('video-preview-container');
            const previewPlaceholder = document.querySelector('.video-preview-placeholder');
            const previewFrame = document.querySelector('.video-preview-frame');
            const youtubePreview = document.getElementById('youtube-preview');

            videoLink.addEventListener('input', function() {
                const youtubeUrl = this.value;
                const videoId = extractYoutubeId(youtubeUrl);

                if (videoId) {
                    youtubePreview.src = `https://www.youtube.com/embed/${videoId}`;
                    previewPlaceholder.classList.add('d-none');
                    previewFrame.classList.remove('d-none');
                } else {
                    previewPlaceholder.classList.remove('d-none');
                    previewFrame.classList.add('d-none');
                }
            });

            function extractYoutubeId(url) {
                const regExp = /^.*((youtu.be\/)|(v\/)|(\/u\/\w\/)|(embed\/)|(watch\?))\??v?=?([^#&?]*).*/;
                const match = url.match(regExp);
                return (match && match[7].length === 11) ? match[7] : false;
            }

            // Form validation with sweet alert
            const form = document.querySelector('form');
            form.addEventListener('submit', function(e) {
                e.preventDefault();

                const title = document.getElementById('title').value;
                const link = document.getElementById('video_link').value;

                if (!title || !link) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Form Tidak Lengkap',
                        text: 'Silakan isi semua kolom yang diperlukan!',
                        confirmButtonColor: '#4e73df'
                    });
                    return;
                }

                const videoId = extractYoutubeId(link);
                if (!videoId) {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Link YouTube Tidak Valid',
                        text: 'Pastikan Anda memasukkan link YouTube yang valid!',
                        confirmButtonColor: '#4e73df'
                    });
                    return;
                }

                Swal.fire({
                    icon: 'info',
                    title: 'Menyimpan Video...',
                    text: 'Harap tunggu sebentar',
                    showConfirmButton: false,
                    allowOutsideClick: false,
                    didOpen: () => {
                        Swal.showLoading();
                        setTimeout(() => {
                            form.submit();
                        }, 800);
                    }
                });
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.dashboard.dashboard.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PROJECT WEB SKRIPSI\PPDB_MA_NU_LU\resources\views/backend/gallery/video/craete.blade.php ENDPATH**/ ?>