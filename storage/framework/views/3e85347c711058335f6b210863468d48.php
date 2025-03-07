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
                <a data-bs-toggle="collapse" href="#sidebarLayoutsDataSiswa"
                    class="<?php echo e(request()->routeIs('kelas10.index', 'kelas11.index', 'kelas12.index') ? 'active' : ''); ?>">
                    <i class="fas fa-users"></i>
                    <p>Pendaftaran</p>
                    <span class="caret"></span>
                </a>
                <div class="collapse <?php echo e(request()->routeIs('kelas10.index', 'kelas11.index', 'kelas12.index') ? 'show' : ''); ?>"
                    id="sidebarLayoutsDataSiswa">
                    <ul class="nav nav-collapse">
                        <li>
                            <a href="<?php echo e(route('identitas_siswa.index')); ?>"
                                class="<?php echo e(request()->routeIs('identitas_siswa.index') ? 'active' : ''); ?>">
                                <i class="fas fa-user-graduate"></i>
                                <span class="absensi">Data Pendaftaran</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('upload_dokumen.index')); ?>"
                                class="<?php echo e(request()->routeIs('upload_dokumen.index') ? 'active' : ''); ?>">
                                <i class="fas fa-user-graduate"></i>
                                <span class="absensi">Dokumen Pendaftaran</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('kelas-12.index')); ?>"
                                class="<?php echo e(request()->routeIs('kelas12.index') ? 'active' : ''); ?>">
                                <i class="fas fa-user-graduate"></i>
                                <span class="absensi">Pengumuman</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <!-- Pengaturan -->
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