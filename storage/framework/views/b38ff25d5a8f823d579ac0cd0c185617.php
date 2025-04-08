

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card shadow-lg">
                        <div
                            class="card-header bg-gradient-primary text-white d-flex justify-content-between align-items-center py-3">
                            <h4 class="card-title mb-0 font-weight-bold">
                                <i class="fas fa-video mr-2"></i> Data - Video
                            </h4>
                            <a href="<?php echo e(route('videos.create')); ?>" class="btn btn-light btn-sm px-3 font-weight-bold">
                                <i class="fas fa-plus mr-1"></i> Tambah Video
                            </a>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead class="bg-light">
                                        <tr>
                                            <th class="py-3 px-4 text-muted">#</th>
                                            <th class="py-3 px-4 text-muted">Title</th>
                                            <th class="py-3 px-4 text-muted">Preview</th>
                                            <th class="py-3 px-4 text-muted">Tanggal Dibuat</th>
                                            <th class="py-3 px-4 text-center text-muted">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr class="border-bottom">
                                                <td class="py-3 px-4"><?php echo e($index + 1); ?></td>
                                                <td class="py-3 px-4 font-weight-bold"><?php echo e($video->title); ?></td>
                                                <td class="py-3 px-4">
                                                    <?php
                                                        $videoId = null;
                                                        if (
                                                            preg_match(
                                                                '/(?:youtube\.com\/(?:[^\/\n\s]*\/\S+\/|(?:v|e(?:mbed)?)\/|watch\?v=)|youtu\.be\/)([^\s\/?&]+)/i',
                                                                $video->video_link,
                                                                $matches,
                                                            )
                                                        ) {
                                                            $videoId = $matches[1] ?? null;
                                                        }
                                                    ?>

                                                    <?php if($videoId): ?>
                                                        <div class="position-relative video-preview">
                                                            <a href="<?php echo e($video->video_link); ?>" target="_blank"
                                                                class="d-block">
                                                                <img src="https://img.youtube.com/vi/<?php echo e($videoId); ?>/hqdefault.jpg"
                                                                    alt="Video Thumbnail" class="rounded shadow-sm"
                                                                    width="120" height="70">
                                                                <div class="play-overlay">
                                                                    <i class="fas fa-play-circle"></i>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    <?php else: ?>
                                                        <span class="badge badge-danger p-2"><i
                                                                class="fas fa-exclamation-circle mr-1"></i> Link tidak
                                                            valid</span>
                                                    <?php endif; ?>
                                                </td>
                                                <td class="py-3 px-4 text-muted"><?php echo e($video->created_at->format('d M Y')); ?>

                                                </td>
                                                <td class="py-3 px-4 text-center">
                                                    <div class="d-flex justify-content-center gap-2">
                                                        <a href="<?php echo e(route('videos.edit', $video->id)); ?>"
                                                            class="btn btn-warning btn-sm rounded-circle mr-2"
                                                            data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                        <form action="<?php echo e(route('videos.destroy', $video->id)); ?>"
                                                            method="POST" class="delete-form">
                                                            <?php echo csrf_field(); ?>
                                                            <?php echo method_field('DELETE'); ?>
                                                            <button type="submit"
                                                                class="btn btn-danger btn-sm rounded-circle"
                                                                data-toggle="tooltip" data-placement="top" title="Hapus">
                                                                <i class="fas fa-trash-alt"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>

                            <?php if($videos->isEmpty()): ?>
                                <div class="text-center py-5">
                                    <img src="<?php echo e(asset('assets/img/empty-state.svg')); ?>" alt="No Data" width="120"
                                        class="mb-3">
                                    <h5 class="text-muted">Belum ada data video</h5>
                                    <p class="text-muted">Klik tombol Tambah Video untuk menambahkan video baru</p>
                                </div>
                            <?php endif; ?>

                            <div class="p-4">
                                <?php echo e($videos->links('pagination::bootstrap-4')); ?>

                            </div>
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

        .video-preview {
            transition: transform 0.3s ease;
        }

        .video-preview:hover {
            transform: scale(1.05);
        }

        .play-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: rgba(0, 0, 0, 0.3);
            border-radius: 0.25rem;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .play-overlay i {
            color: white;
            font-size: 2rem;
            filter: drop-shadow(0 0 3px rgba(0, 0, 0, 0.5));
        }

        .video-preview:hover .play-overlay {
            opacity: 1;
        }

        .delete-form {
            display: inline-block;
        }

        .table th,
        .table td {
            vertical-align: middle;
        }

        .btn-light {
            background: rgba(255, 255, 255, 0.2);
            border: none;
            transition: all 0.3s ease;
        }

        .btn-light:hover {
            background: rgba(255, 255, 255, 0.3);
        }

        .pagination {
            justify-content: center;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize tooltips
            $('[data-toggle="tooltip"]').tooltip();

            // Konfirmasi hapus video
            $('.delete-form').on('submit', function(e) {
                e.preventDefault();

                Swal.fire({
                    title: 'Apakah Anda yakin?',
                    text: "Video yang dihapus tidak dapat dikembalikan!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, hapus!',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        this.submit();
                    }
                });
            });

            // Tampilkan notifikasi sukses
            const successMessage = document.querySelector('meta[name="success-message"]');
            if (successMessage) {
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil!',
                    text: successMessage.getAttribute('content'),
                    timer: 3000,
                    showConfirmButton: false
                });
            }
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.dashboard.dashboard.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PROJECT WEB SKRIPSI\PPDB_MA_NU_LU\resources\views/backend/gallery/video/video.blade.php ENDPATH**/ ?>