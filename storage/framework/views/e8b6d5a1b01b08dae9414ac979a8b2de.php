

<?php $__env->startSection('content'); ?>
    <section class="news-article-section py-8 bg-light">

        <div class="container my-5">
            <h2 class="text-center mb-5 custom-title"
                style="font-family: 'Roboto', sans-serif; font-weight: 700; margin-top: 70px; color: #3A6B56;">
                Galeri Kegiatan
            </h2>

            <div class="row">
                <?php $__empty_1 = true; $__currentLoopData = $photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card shadow border-0 hover-shadow h-100">
                            <img src="<?php echo e(asset('storage/' . $photo->photo_path)); ?>" class="card-img-top photo-image"
                                alt="<?php echo e($photo->title ?? 'Photo'); ?>" data-bs-toggle="modal" data-bs-target="#photoModal"
                                data-bs-title="<?php echo e($photo->title ?? 'Photo'); ?>"
                                data-bs-img="<?php echo e(asset('storage/' . $photo->photo_path)); ?>">
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <div class="col-12 text-center">
                        <p>No photos available at the moment.</p>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Pagination -->
            <nav>
                <ul class="pagination justify-content-center">
                    <!-- Previous Page Link -->
                    <li class="page-item <?php echo e($photos->onFirstPage() ? 'disabled' : ''); ?>">
                        <a class="page-link" href="<?php echo e($photos->previousPageUrl()); ?>" aria-label="Previous">
                            <span aria-hidden="true">&laquo; Previous</span>
                        </a>
                    </li>

                    <!-- Pagination Links -->
                    <?php $__currentLoopData = $photos->links()->elements[0]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="page-item <?php echo e($photos->currentPage() == $page ? 'active' : ''); ?>">
                            <a class="page-link" href="<?php echo e($url); ?>"><?php echo e($page); ?></a>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <!-- Next Page Link -->
                    <li class="page-item <?php echo e(!$photos->hasMorePages() ? 'disabled' : ''); ?>">
                        <a class="page-link" href="<?php echo e($photos->nextPageUrl()); ?>" aria-label="Next">
                            <span aria-hidden="true">Next &raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>

            <!-- Modal -->
            <div class="modal fade" id="photoModal" tabindex="-1" aria-labelledby="photoModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="photoModalLabel"></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body text-center">
                            <img src="" id="modalPhoto" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>
<?php $__env->stopSection(); ?>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const photoModal = document.getElementById('photoModal');
        photoModal.addEventListener('show.bs.modal', function(event) {
            const button = event.relatedTarget; // Element yang diklik
            const title = button.getAttribute('data-bs-title');
            const img = button.getAttribute('data-bs-img');

            const modalTitle = photoModal.querySelector('.modal-title');
            const modalImage = photoModal.querySelector('#modalPhoto');

            modalTitle.textContent = title;
            modalImage.src = img;
        });
    });
</script>


<style>
    .hover-shadow:hover {
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
        transition: box-shadow 0.3s ease-in-out;
    }


    .custom-title {
        font-size: 2rem;
        position: relative;
    }

    .custom-title::after {
        content: "";
        display: block;
        width: 10%;
        height: 2px;
        background: #fbbc05;
        margin: 0.5rem auto 0;
    }

    @media (max-width: 768px) {
        .custom-title::after {
            width: 50%;
        }
    }


    .py-8 {
        padding-top: 4rem !important;
        padding-bottom: 4rem !important;
    }

    .photo-image {
        width: 100%;
        height: 250px;
        object-fit: cover;
        border-radius: 5px;
    }
</style>

<?php echo $__env->make('frontend.home.landingpage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PROJECT WEB SKRIPSI\PPDB_MA_NU_LU\resources\views/frontend/galery/galery.blade.php ENDPATH**/ ?>