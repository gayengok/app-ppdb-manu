<div class="sidebar-wrapper scrollbar scrollbar-inner">
    <div class="sidebar-content">
        <ul class="nav nav-secondary">

            <!-- Dashboard -->
            <li class="nav-item <?php echo e(request()->routeIs('app') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('app')); ?>">
                    <i class="fas fa-home"></i>
                    <p>Dashboard</p>
                </a>
            </li>

            
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#sidebarLayouts"
                    class="<?php echo e(request()->routeIs('identitas_siswa.index', 'upload_dokumen.index', 'petunjuk.index') ? 'active' : ''); ?>">
                    <i class="fas fa-users"></i>
                    <p>Pendaftaran</p>
                    <span class="caret"></span>
                </a>
                <div class="collapse <?php echo e(request()->routeIs('identitas_siswa.index', 'upload_dokumen.index', 'petunjuk.index') ? 'show' : ''); ?>"
                    id="sidebarLayouts">
                    <ul class="nav nav-collapse">
                        <li>
                            <a href="<?php echo e(route('identitas_siswa.index')); ?>"
                                class="<?php echo e(request()->routeIs('identitas_siswa.index') ? 'active' : ''); ?>">
                                <i class="fas fa-user-graduate"></i>
                                <span class="pendaftaran">Data Pendaftaran</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('upload_dokumen.index')); ?>"
                                class="<?php echo e(request()->routeIs('upload_dokumen.index') ? 'active' : ''); ?>">
                                <i class="fas fa-user-graduate"></i>
                                <span class="dokumen">Dokumen Pendaftaran</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('petunjuk.index')); ?>"
                                class="<?php echo e(request()->routeIs('qpetunjuk.index') ? 'active' : ''); ?>">
                                <i class="fas fa-user-graduate"></i>
                                <span class="tes-soal">Tes Soal</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>


            <li class="nav-item">
                <a href="<?php echo e(route('verifikasi.index')); ?>" class="nav-link">
                    <i class="fas fa-check-circle"></i>
                    <p>Verifikasi</p>
                </a>
            </li>


            <!-- Pengaturan -->
            <li class="nav-item">
                <a href="<?php echo e(route('kelulusan.index')); ?>">
                    <i class="fas fa-bullhorn"></i>
                    <p>Pengumuman</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="#">
                    <i class="fas fa-cogs"></i>
                    <p>Pengaturan</p>
                </a>
            </li>
        </ul>
    </div>
</div>
<?php /**PATH E:\PROJECT WEB SKRIPSI\PPDB_MA_NU_LU\resources\views/backend/admin/menu/nav.blade.php ENDPATH**/ ?>