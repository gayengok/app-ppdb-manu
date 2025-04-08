

<?php $__env->startSection('content'); ?>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <!-- Main Card with soft shadow and refined border -->
                <div class="card border-0 shadow-lg rounded-lg overflow-hidden">
                    <!-- Premium gradient header with subtle animation -->
                    <div class="card-header p-4 text-white position-relative overflow-hidden"
                        style="background: linear-gradient(145deg, #3a7bd5, #00d2ff); box-shadow: 0 4px 20px rgba(0,0,0,0.1);">
                        <div class="position-absolute top-0 start-0 w-100 h-100 opacity-10"
                            style="background-image: url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxkZWZzPjxwYXR0ZXJuIGlkPSJwYXR0ZXJuIiB4PSIwIiB5PSIwIiB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHBhdHRlcm5Vbml0cz0idXNlclNwYWNlT25Vc2UiIHBhdHRlcm5UcmFuc2Zvcm09InJvdGF0ZSgxMzUpIj48cmVjdCB4PSIwIiB5PSIwIiB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIGZpbGw9IiNmZmZmZmYwOCIvPjwvcGF0dGVybj48L2RlZnM+PHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0idXJsKCNwYXR0ZXJuKSIvPjwvc3ZnPg==');">
                        </div>
                        <div class="d-flex align-items-center position-relative">
                            <div class="rounded-circle p-2 me-3 shadow-lg bg-white bg-opacity-20 backdrop-blur"
                                style="width: 48px; height: 48px; display: flex; align-items: center; justify-content: center; border: 2px solid rgba(255,255,255,0.3);">
                                <i class="fas fa-brain text-white fa-lg"></i>
                            </div>
                            <div>
                                <h4 class="card-title mb-0 fw-bold">Quiz Management</h4>
                                <p class="mb-0 mt-1 opacity-75 small">Configure student quiz availability</p>
                            </div>
                        </div>
                    </div>

                    <div class="card-body p-4">
                        <form action="<?php echo e(route('admin.updateStatus')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="mb-4">
                                <!-- Hover effect card with subtle animations -->
                                <div class="p-4 border rounded-lg bg-white position-relative transition-all shadow-hover"
                                    style="transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1); border: 1px solid rgba(0,0,0,0.05);">
                                    <div class="row align-items-center">
                                        <div class="col-md-8">
                                            <h5 class="mb-2 fw-bold d-flex align-items-center">
                                                <span class="badge rounded-pill text-white me-2 px-2 py-1"
                                                    style="background: linear-gradient(to right, #3a7bd5, #00d2ff);">
                                                    <i class="fas fa-bolt"></i>
                                                </span>
                                                Quiz Availability Status
                                            </h5>
                                            <p class="text-muted mb-1 small">
                                                <i class="fas fa-info-circle me-1 text-primary"></i>
                                                Enable or disable the quiz feature in the student application
                                            </p>
                                            <div class="d-flex align-items-center mt-2">
                                                <span class="badge bg-light text-secondary small me-2 px-2 py-1 border">
                                                    <i class="fas fa-clock me-1"></i>Live Update
                                                </span>
                                                <span class="badge bg-light text-secondary small px-2 py-1 border">
                                                    <i class="fas fa-shield-alt me-1"></i>Admin Control
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-4 text-end">
                                            <div
                                                class="form-check form-switch d-flex justify-content-end align-items-center">
                                                <label class="form-check-label me-3 small text-muted" for="quiz_status">
                                                    <?php echo e($setting->quiz_status ? 'Active' : 'Inactive'); ?>

                                                </label>
                                                <input class="form-check-input shadow-sm" type="checkbox" id="quiz_status"
                                                    name="quiz_status" <?php echo e($setting->quiz_status ? 'checked' : ''); ?>

                                                    style="width: 3.8em; height: 2em; cursor: pointer; background-color: <?php echo e($setting->quiz_status ? '#3a7bd5' : '#ced4da'); ?>; border: none;">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Status indicator -->
                                    <div class="position-absolute top-0 end-0 mt-2 me-2">
                                        <span
                                            class="badge rounded-pill bg-<?php echo e($setting->quiz_status ? 'success' : 'secondary'); ?> px-2 py-1">
                                            <i
                                                class="fas fa-<?php echo e($setting->quiz_status ? 'check-circle' : 'times-circle'); ?> me-1"></i>
                                            <?php echo e($setting->quiz_status ? 'Enabled' : 'Disabled'); ?>

                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex justify-content-end mt-4">
                                <button type="button" class="btn btn-outline-secondary px-4 py-2 rounded-pill me-2">
                                    <i class="fas fa-undo me-1"></i> Cancel
                                </button>
                                <button type="submit" class="btn px-4 py-2 rounded-pill text-white shadow-sm"
                                    style="background: linear-gradient(145deg, #3a7bd5, #00d2ff);">
                                    <i class="fas fa-save me-2"></i>Save Changes
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Premium info card with glass effect -->
                <div class="mt-4 p-4 rounded-lg shadow-sm text-center position-relative overflow-hidden"
                    style="background: rgba(255, 255, 255, 0.9); backdrop-filter: blur(10px); border: 1px solid rgba(0,0,0,0.05);">
                    <div class="position-absolute top-0 start-0 w-100 h-100 opacity-10"
                        style="background-image: url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxkZWZzPjxwYXR0ZXJuIGlkPSJwYXR0ZXJuIiB4PSIwIiB5PSIwIiB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHBhdHRlcm5Vbml0cz0idXNlclNwYWNlT25Vc2UiIHBhdHRlcm5UcmFuc2Zvcm09InJvdGF0ZSgxMzUpIj48cmVjdCB4PSIwIiB5PSIwIiB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIGZpbGw9IiMzYTdiZDUwNSIvPjwvcGF0dGVybj48L2RlZnM+PHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0idXJsKCNwYXR0ZXJuKSIvPjwvc3ZnPg==');">
                    </div>
                    <div class="d-flex align-items-center justify-content-center position-relative">
                        <div class="rounded-circle bg-primary bg-opacity-10 p-2 me-3">
                            <i class="fas fa-lightbulb text-primary"></i>
                        </div>
                        <p class="text-muted mb-0">Changes will be applied immediately after saving the settings.</p>
                        <div class="ms-3">
                            <a href="#" class="btn btn-sm btn-link text-decoration-none text-primary p-0">
                                <i class="fas fa-question-circle me-1"></i>Learn more
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Custom CSS for animations and effects -->
    <style>
        .shadow-hover:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.08) !important;
        }

        .transition-all {
            transition: all 0.3s ease;
        }

        @keyframes gradientBG {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }
    </style>

    <!-- Optional JavaScript for toggle status -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const toggleSwitch = document.getElementById('quiz_status');
            const statusLabel = toggleSwitch.previousElementSibling;

            toggleSwitch.addEventListener('change', function() {
                if (this.checked) {
                    statusLabel.textContent = 'Active';
                    this.style.backgroundColor = '#3a7bd5';
                } else {
                    statusLabel.textContent = 'Inactive';
                    this.style.backgroundColor = '#ced4da';
                }
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.dashboard.dashboard.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PROJECT WEB SKRIPSI\PPDB_MA_NU_LU\resources\views/backend/pengaturan/settings.blade.php ENDPATH**/ ?>