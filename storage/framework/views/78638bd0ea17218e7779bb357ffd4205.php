

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card shadow-lg border-0 rounded-lg">
                        <div class="card-header bg-gradient-primary text-white">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-newspaper fa-2x mr-3"></i>
                                <div>
                                    <h3 class="card-title mb-0 font-weight-bold">Editorial - Create Article</h3>
                                    <small>Buat artikel baru untuk publikasi</small>
                                </div>
                            </div>
                        </div>

                        <?php if($errors->has('title')): ?>
                            <div class="alert alert-danger alert-dismissible fade show m-3" role="alert">
                                <div class="d-flex">
                                    <i class="fas fa-exclamation-circle mr-2 mt-1"></i>
                                    <strong>Oops!</strong>&nbsp;<?php echo e($errors->first('title')); ?>

                                </div>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        <?php endif; ?>

                        <div class="card-body">
                            <form action="<?php echo e(route('articles.store')); ?>" method="POST" enctype="multipart/form-data"
                                class="premium-form">
                                <?php echo csrf_field(); ?>
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="card shadow-sm mb-4">
                                            <div class="card-header bg-light">
                                                <h5 class="mb-0">Konten Artikel</h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="form-group mb-4">
                                                    <label for="title" class="form-label fw-bold">Judul Artikel</label>
                                                    <input type="text" class="form-control form-control-lg"
                                                        id="title" name="title"
                                                        placeholder="Masukkan judul artikel yang menarik" required>
                                                </div>

                                                <div class="form-group mb-4">
                                                    <label for="image" class="form-label fw-bold">
                                                        <i class="fas fa-image me-1"></i> Gambar Utama
                                                    </label>
                                                    <div class="custom-file-container">
                                                        <input type="file" class="form-control" id="image"
                                                            name="image" accept="image/*">
                                                        <small class="text-muted">Rekomendasi: ukuran 1200x630px, format JPG
                                                            atau PNG</small>
                                                    </div>
                                                    <div class="image-preview mt-2 d-none" id="imagePreview">
                                                        <img src="" class="img-fluid rounded" id="previewImg">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="content" class="form-label fw-bold">
                                                        <i class="fas fa-edit me-1"></i> Konten Artikel
                                                    </label>
                                                    <textarea id="content" name="content" class="form-control summernote" rows="12"
                                                        placeholder="Tulis konten artikel Anda di sini" required></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="card shadow-sm mb-4">
                                            <div class="card-header bg-light">
                                                <h5 class="mb-0">Informasi Publikasi</h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="form-group mb-4">
                                                    <label for="author" class="form-label fw-bold">
                                                        <i class="fas fa-user me-1"></i> Penulis
                                                    </label>
                                                    <input type="text" class="form-control" id="author" name="author"
                                                        placeholder="Nama penulis artikel" required>
                                                </div>

                                                <div class="form-group mb-4">
                                                    <label for="short_description" class="form-label fw-bold">
                                                        <i class="fas fa-align-left me-1"></i> Deskripsi Singkat
                                                    </label>
                                                    <textarea class="form-control" id="short_description" name="short_description" rows="3"
                                                        placeholder="Deskripsi singkat untuk ditampilkan di halaman depan" required></textarea>
                                                    <div class="d-flex justify-content-between mt-1">
                                                        <small class="text-muted">Rekomendasi: maks. 160 karakter</small>
                                                        <small id="desc_counter" class="text-muted">0/160</small>
                                                    </div>
                                                </div>

                                                <div class="form-group mb-4">
                                                    <label for="published_date" class="form-label fw-bold">
                                                        <i class="fas fa-calendar-alt me-1"></i> Tanggal Publikasi
                                                    </label>
                                                    <input type="date" class="form-control" id="published_date"
                                                        name="published_date" required>
                                                </div>

                                                <div class="form-group mb-4">
                                                    <label for="status" class="form-label fw-bold">
                                                        <i class="fas fa-toggle-on me-1"></i> Status
                                                    </label>
                                                    <select class="form-select" id="status" name="status" required>
                                                        <option value="Published">Published</option>
                                                        <option value="Draft">Draft</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card shadow-sm">
                                            <div class="card-header bg-light">
                                                <h5 class="mb-0">SEO & Metadata</h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="form-group mb-3">
                                                    <label for="meta_title" class="form-label fw-bold">Meta Title</label>
                                                    <input type="text" class="form-control" id="meta_title"
                                                        name="meta_title" placeholder="SEO Title (opsional)">
                                                    <small class="text-muted">Jika kosong, akan menggunakan judul
                                                        artikel</small>
                                                </div>

                                                <div class="form-group">
                                                    <label for="meta_keywords" class="form-label fw-bold">Keywords</label>
                                                    <input type="text" class="form-control" id="meta_keywords"
                                                        name="meta_keywords"
                                                        placeholder="Kata kunci yang dipisahkan dengan koma">
                                                    <small class="text-muted">Contoh: berita, teknologi, update</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group mt-4 d-flex justify-content-between">
                                    <a href="<?php echo e(route('news.berita')); ?>" class="btn btn-outline-secondary">
                                        <i class="fas fa-arrow-left me-1"></i> Kembali
                                    </a>
                                    <div>
                                        <button type="submit" name="status" value="Draft"
                                            class="btn btn-light border me-2">
                                            <i class="fas fa-save me-1"></i> Simpan Draft
                                        </button>
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fas fa-paper-plane me-1"></i> Publikasikan
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script>
        $(document).ready(function() {
            // Initialize Summernote
            $('.summernote').summernote({
                height: 300,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'italic', 'clear']],
                    ['fontname', ['fontname']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']],
                ],
                callbacks: {
                    onImageUpload: function(files) {
                        // Image upload handling logic here
                    }
                }
            });

            // Image preview
            $('#image').change(function() {
                const file = this.files[0];
                if (file) {
                    let reader = new FileReader();
                    reader.onload = function(event) {
                        $('#imagePreview').removeClass('d-none');
                        $('#previewImg').attr('src', event.target.result);
                    }
                    reader.readAsDataURL(file);
                }
            });

            // Character counter for description
            $('#short_description').on('input', function() {
                let count = $(this).val().length;
                $('#desc_counter').text(count + '/160');

                if (count > 160) {
                    $('#desc_counter').addClass('text-danger');
                } else {
                    $('#desc_counter').removeClass('text-danger');
                }
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<style>
    .card {
        border-radius: 0.75rem;
        transition: all 0.2s ease-in-out;
    }

    .card-header {
        border-radius: 0.75rem 0.75rem 0 0 !important;
        padding: 1rem 1.25rem;
    }

    .bg-gradient-primary {
        background: linear-gradient(135deg, #4e73df 0%, #224abe 100%);
    }

    .premium-form label {
        color: #333;
        font-size: 0.9rem;
        margin-bottom: 0.5rem;
    }

    .premium-form .form-control,
    .premium-form .form-select {
        border-radius: 0.5rem;
        padding: 0.75rem 1rem;
        border: 1px solid #e0e0e0;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
    }

    .premium-form .form-control:focus,
    .premium-form .form-select:focus {
        border-color: #4e73df;
        box-shadow: 0 0 0 0.2rem rgba(78, 115, 223, 0.25);
    }

    .btn {
        border-radius: 0.5rem;
        padding: 0.6rem 1.25rem;
        font-weight: 500;
        transition: all 0.2s;
    }

    .btn-primary {
        background-color: #4e73df;
        border-color: #4e73df;
    }

    .btn-primary:hover {
        background-color: #3a5ccc;
        border-color: #3a5ccc;
    }

    .custom-file-container {
        position: relative;
    }

    .image-preview {
        border: 1px solid #e0e0e0;
        border-radius: 0.5rem;
        padding: 0.5rem;
        background-color: #f8f9fa;
    }

    .summernote {
        font-size: 14px;
    }

    .note-editor {
        border-radius: 0.5rem !important;
    }

    .note-editable p {
        font-size: 14px;
    }
</style>

<?php echo $__env->make('backend.dashboard.dashboard.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PROJECT WEB SKRIPSI\PPDB_MA_NU_LU\resources\views/backend/news/new-artikel.blade.php ENDPATH**/ ?>