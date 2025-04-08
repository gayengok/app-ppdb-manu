@extends('backend.dashboard.dashboard.dashboard')

@section('content')
    <!-- Main Container with Dark Mode Support -->
    <div class="gallery-container">
        <div class="gallery-header">
            <div class="gallery-title">
                <div class="title-icon">
                    <i class="fas fa-camera-retro"></i>
                </div>
                <div class="title-text">
                    <h2>GALLERY</h2>
                </div>
            </div>

            <div class="gallery-actions">
                <a href="{{ route('photo.create') }}" class="btn-upload">
                    <span class="btn-icon"><i class="fas fa-cloud-upload-alt"></i></span>
                    <span class="btn-text">Upload New</span>
                </a>

                <button class="btn-view-mode active" data-mode="grid">
                    <i class="fas fa-th"></i>
                </button>

                <button class="btn-view-mode" data-mode="list">
                    <i class="fas fa-list"></i>
                </button>
            </div>
        </div>

        {{-- Pesan Error --}}
        @if ($errors->any())
            <div class="notification-error">
                <div class="notification-icon">
                    <i class="fas fa-exclamation-circle"></i>
                </div>
                <div class="notification-content">
                    <h4>Upload Failed</h4>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="notification-close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
        @endif

        <!-- Gallery Views Container -->
        <div class="gallery-views">
            <!-- Grid View (Default) -->
            <div class="view view-grid active">
                @forelse ($photos as $photo)
                    <div class="gallery-card">
                        <div class="gallery-card-image">
                            <img src="{{ asset('storage/' . $photo->photo_path) }}" alt="{{ $photo->title }}">
                            <div class="image-overlay">
                                <a href="{{ asset('storage/' . $photo->photo_path) }}" class="overlay-btn preview-btn">
                                    <i class="fas fa-search-plus"></i>
                                </a>
                            </div>
                        </div>
                        <div class="gallery-card-content">
                            <h4 class="gallery-card-title">{{ $photo->title }}</h4>
                            <div class="gallery-card-actions">
                                <a href="{{ route('photo.edit', $photo->id) }}" class="card-btn edit-btn">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('photo.destroy', $photo->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="card-btn delete-btn">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="gallery-card-number">{{ $loop->iteration }}</div>
                    </div>
                @empty
                    <div class="empty-gallery">
                        <div class="empty-icon">
                            <i class="fas fa-images"></i>
                        </div>
                        <h3>Your Gallery Is Empty</h3>
                        <p>Start building your premium collection today</p>
                        <a href="{{ route('photo.create') }}" class="empty-btn">
                            <i class="fas fa-plus-circle"></i> Add Your First Photo
                        </a>
                    </div>
                @endforelse
            </div>

            <!-- List View (Alternative) -->
            <div class="view view-list">
                <table class="premium-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Preview</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($photos as $photo)
                            <tr>
                                <td><span class="table-number">{{ $loop->iteration }}</span></td>
                                <td>
                                    <div class="table-title">{{ $photo->title }}</div>
                                </td>
                                <td>
                                    <div class="table-image">
                                        <img src="{{ asset('storage/' . $photo->photo_path) }}" alt="{{ $photo->title }}">
                                        <div class="image-overlay">
                                            <a href="{{ asset('storage/' . $photo->photo_path) }}"
                                                class="overlay-btn preview-btn">
                                                <i class="fas fa-search-plus"></i>
                                            </a>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="table-actions">
                                        <a href="{{ route('photo.edit', $photo->id) }}" class="table-btn edit-btn">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('photo.destroy', $photo->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="table-btn delete-btn">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4">
                                    <div class="empty-gallery">
                                        <div class="empty-icon">
                                            <i class="fas fa-images"></i>
                                        </div>
                                        <h3>Your Gallery Is Empty</h3>
                                        <p>Start building your premium collection today</p>
                                        <a href="{{ route('photo.create') }}" class="empty-btn">
                                            <i class="fas fa-plus-circle"></i> Add Your First Photo
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Premium Image Preview Modal -->
        <div class="preview-modal" id="previewModal">
            <div class="preview-content">
                <button class="preview-close">
                    <i class="fas fa-times"></i>
                </button>
                <img src="" alt="Preview" class="preview-image">
                <div class="preview-details">
                    <h4 class="preview-title"></h4>
                </div>
                <button class="preview-nav preview-prev">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="preview-nav preview-next">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </div>

        <!-- Confirmation Modal -->
        <div class="confirm-modal" id="deleteModal">
            <div class="confirm-content">
                <div class="confirm-icon">
                    <i class="fas fa-exclamation-triangle"></i>
                </div>
                <div class="confirm-message">
                    <h3>Delete Photo?</h3>
                    <p>This action cannot be undone.</p>
                </div>
                <div class="confirm-actions">
                    <button class="confirm-cancel">Cancel</button>
                    <button class="confirm-delete">Delete</button>
                </div>
            </div>
        </div>

        @if (session('success'))
            <meta name="success-message" content="{{ session('success') }}">
        @endif
    </div>

    <style>
        :root {
            --primary-color: #ff6b6b;
            --primary-gradient: linear-gradient(135deg, #ff6b6b 0%, #ff8e8e 100%);
            --secondary-color: #6c5ce7;
            --secondary-gradient: linear-gradient(135deg, #6c5ce7 0%, #a29bfe 100%);
            --accent-color: #00d2d3;
            --dark-color: #2d3436;
            --light-color: #ffffff;
            --gray-color: #b2bec3;
            --card-bg: #ffffff;
            --card-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            --hover-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
            --border-radius: 12px;
            --transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
        }

        .gallery-container {
            max-width: 1200px;
            margin: 40px auto;
            padding: 0 20px;
            font-family: 'Poppins', sans-serif;
        }

        /* Header Styling */
        .gallery-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 1px solid rgba(178, 190, 195, 0.3);
        }

        .gallery-title {
            display: flex;
            align-items: center;
        }

        .title-icon {
            width: 60px;
            height: 60px;
            background: var(--primary-gradient);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            box-shadow: 0 5px 15px rgba(255, 107, 107, 0.4);
        }

        .title-icon i {
            color: var(--light-color);
            font-size: 24px;
        }

        .title-text h2 {
            margin: 0;
            font-size: 24px;
            font-weight: 700;
            color: var(--dark-color);
            letter-spacing: 1px;
        }

        .title-text p {
            margin: 5px 0 0;
            color: var(--gray-color);
            font-size: 14px;
        }

        .gallery-actions {
            display: flex;
            align-items: center;
        }

        .btn-upload {
            display: flex;
            align-items: center;
            background: var(--primary-gradient);
            padding: 12px 24px;
            border-radius: 30px;
            color: var(--light-color);
            font-weight: 600;
            text-decoration: none;
            box-shadow: 0 5px 15px rgba(255, 107, 107, 0.4);
            transition: var(--transition);
            margin-right: 15px;
        }

        .btn-upload:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(255, 107, 107, 0.6);
        }

        .btn-icon {
            margin-right: 8px;
        }

        .btn-view-mode {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: var(--light-color);
            border: 1px solid rgba(178, 190, 195, 0.3);
            color: var(--gray-color);
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: var(--transition);
            margin-left: 8px;
        }

        .btn-view-mode.active {
            background: var(--secondary-gradient);
            color: var(--light-color);
            border-color: transparent;
            box-shadow: 0 5px 15px rgba(108, 92, 231, 0.4);
        }

        /* Notification Styling */
        .notification-error {
            display: flex;
            align-items: flex-start;
            background-color: #fff5f5;
            border-left: 4px solid #ff6b6b;
            border-radius: var(--border-radius);
            padding: 20px;
            margin-bottom: 30px;
            box-shadow: var(--card-shadow);
            position: relative;
        }

        .notification-icon {
            color: #ff6b6b;
            font-size: 24px;
            margin-right: 15px;
        }

        .notification-content h4 {
            margin: 0 0 10px;
            color: #ff6b6b;
            font-weight: 600;
        }

        .notification-content ul {
            margin: 0;
            padding-left: 20px;
        }

        .notification-close {
            position: absolute;
            top: 15px;
            right: 15px;
            background: transparent;
            border: none;
            color: var(--gray-color);
            cursor: pointer;
            font-size: 16px;
        }

        /* Grid View Styling */
        .view {
            display: none;
        }

        .view.active {
            display: block;
        }

        .view-grid {
            display: none;
        }

        .view-grid.active {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            grid-gap: 30px;
        }

        .gallery-card {
            background: var(--card-bg);
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--card-shadow);
            transition: var(--transition);
            position: relative;
        }

        .gallery-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--hover-shadow);
        }

        .gallery-card-image {
            height: 200px;
            overflow: hidden;
            position: relative;
        }

        .gallery-card-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }

        .gallery-card:hover .gallery-card-image img {
            transform: scale(1.1);
        }

        .image-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: var(--transition);
        }

        .gallery-card:hover .image-overlay {
            opacity: 1;
        }

        .overlay-btn {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.9);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary-color);
            text-decoration: none;
            transition: var(--transition);
            transform: scale(0.8);
            opacity: 0;
        }

        .gallery-card:hover .overlay-btn {
            opacity: 1;
            transform: scale(1);
        }

        .overlay-btn:hover {
            background: var(--light-color);
            transform: scale(1.1) !important;
        }

        .gallery-card-content {
            padding: 20px;
        }

        .gallery-card-title {
            margin: 0 0 15px;
            font-weight: 600;
            font-size: 16px;
            color: var(--dark-color);
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .gallery-card-actions {
            display: flex;
            justify-content: flex-end;
        }

        .card-btn {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-left: 10px;
            background: #f8f9fa;
            border: none;
            cursor: pointer;
            transition: var(--transition);
        }

        .edit-btn {
            color: var(--secondary-color);
        }

        .edit-btn:hover {
            background: var(--secondary-gradient);
            color: var(--light-color);
        }

        .delete-btn {
            color: var(--primary-color);
        }

        .delete-btn:hover {
            background: var(--primary-gradient);
            color: var(--light-color);
        }

        .gallery-card-number {
            position: absolute;
            top: 15px;
            left: 15px;
            width: 30px;
            height: 30px;
            background: var(--light-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            color: var(--primary-color);
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
            z-index: 1;
        }

        /* Empty State Styling */
        .empty-gallery {
            grid-column: 1 / -1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 60px 0;
            background: rgba(255, 255, 255, 0.8);
            border-radius: var(--border-radius);
            box-shadow: var(--card-shadow);
        }

        .empty-icon {
            width: 100px;
            height: 100px;
            background: #f8f9fa;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }

        .empty-icon i {
            font-size: 40px;
            color: var(--gray-color);
        }

        .empty-gallery h3 {
            margin: 0 0 10px;
            color: var(--dark-color);
            font-weight: 600;
        }

        .empty-gallery p {
            margin: 0 0 20px;
            color: var(--gray-color);
        }

        .empty-btn {
            background: var(--primary-gradient);
            color: var(--light-color);
            padding: 12px 24px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            box-shadow: 0 5px 15px rgba(255, 107, 107, 0.4);
            transition: var(--transition);
        }

        .empty-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(255, 107, 107, 0.6);
        }

        /* List View Styling */
        .view-list {
            display: none;
        }

        .view-list.active {
            display: block;
        }

        .premium-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0 15px;
        }

        .premium-table thead th {
            padding: 15px 20px;
            font-weight: 600;
            color: var(--gray-color);
            text-transform: uppercase;
            font-size: 12px;
            letter-spacing: 1px;
            border-bottom: 1px solid rgba(178, 190, 195, 0.3);
        }

        .premium-table tbody tr {
            background: var(--card-bg);
            box-shadow: var(--card-shadow);
            border-radius: var(--border-radius);
            transition: var(--transition);
        }

        .premium-table tbody tr:hover {
            transform: translateY(-5px);
            box-shadow: var(--hover-shadow);
        }

        .premium-table td {
            padding: 20px;
            vertical-align: middle;
        }

        .premium-table td:first-child {
            border-top-left-radius: var(--border-radius);
            border-bottom-left-radius: var(--border-radius);
        }

        .premium-table td:last-child {
            border-top-right-radius: var(--border-radius);
            border-bottom-right-radius: var(--border-radius);
        }

        .table-number {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background: #f8f9fa;
            border-radius: 50%;
            font-weight: 600;
            color: var(--primary-color);
        }

        .table-title {
            font-weight: 600;
            color: var(--dark-color);
        }

        .table-image {
            width: 120px;
            height: 80px;
            border-radius: 10px;
            overflow: hidden;
            position: relative;
        }

        .table-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }

        .table-image:hover img {
            transform: scale(1.1);
        }

        .table-image .image-overlay {
            opacity: 0;
        }

        .table-image:hover .image-overlay {
            opacity: 1;
        }

        .table-actions {
            display: flex;
            justify-content: flex-end;
        }

        .table-btn {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-left: 10px;
            background: #f8f9fa;
            border: none;
            cursor: pointer;
            transition: var(--transition);
        }

        /* Modal Styling */
        .preview-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.9);
            z-index: 1000;
            align-items: center;
            justify-content: center;
        }

        .preview-modal.active {
            display: flex;
        }

        .preview-content {
            position: relative;
            max-width: 90%;
            max-height: 90%;
        }

        .preview-image {
            max-width: 100%;
            max-height: 80vh;
            border-radius: 5px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }

        .preview-close {
            position: absolute;
            top: -40px;
            right: 0;
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.2);
            border: none;
            border-radius: 50%;
            color: var(--light-color);
            font-size: 18px;
            cursor: pointer;
            transition: var(--transition);
        }

        .preview-close:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: rotate(90deg);
        }

        .preview-details {
            margin-top: 15px;
            text-align: center;
        }

        .preview-title {
            color: var(--light-color);
            margin: 0;
            font-size: 18px;
            font-weight: 500;
        }

        .preview-nav {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 50px;
            height: 50px;
            background: rgba(255, 255, 255, 0.2);
            border: none;
            border-radius: 50%;
            color: var(--light-color);
            font-size: 20px;
            cursor: pointer;
            transition: var(--transition);
        }

        .preview-prev {
            left: -70px;
        }

        .preview-next {
            right: -70px;
        }

        .preview-nav:hover {
            background: rgba(255, 255, 255, 0.3);
        }

        .confirm-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1000;
            align-items: center;
            justify-content: center;
        }

        .confirm-modal.active {
            display: flex;
        }

        .confirm-content {
            background: var(--light-color);
            border-radius: var(--border-radius);
            padding: 30px;
            text-align: center;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: 100%;
        }

        .confirm-icon {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background-color: #fff5f5;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
        }

        .confirm-icon i {
            font-size: 40px;
            color: var(--primary-color);
        }

        .confirm-message h3 {
            margin: 0 0 10px;
            color: var(--dark-color);
            font-weight: 600;
        }

        .confirm-message p {
            margin: 0 0 20px;
            color: var(--gray-color);
        }

        .confirm-actions {
            display: flex;
            justify-content: center;
            gap: 15px;
        }

        .confirm-cancel {
            padding: 12px 24px;
            background: #f8f9fa;
            border: none;
            border-radius: 30px;
            color: var(--gray-color);
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
        }

        .confirm-cancel:hover {
            background: #e9ecef;
        }

        .confirm-delete {
            padding: 12px 24px;
            background: var(--primary-gradient);
            border: none;
            border-radius: 30px;
            color: var(--light-color);
            font-weight: 600;
            cursor: pointer;
            box-shadow: 0 5px 15px rgba(255, 107, 107, 0.4);
            transition: var(--transition);
        }

        .confirm-delete:hover {
            box-shadow: 0 8px 20px rgba(255, 107, 107, 0.6);
        }

        /* Success Toast */
        .success-toast {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background: var(--accent-color);
            color: var(--light-color);
            padding: 15px 25px;
            border-radius: 30px;
            box-shadow: 0 5px 15px rgba(0, 210, 211, 0.4);
            display: flex;
            align-items: center;
            z-index: 1000;
            transform: translateY(100px);
            opacity: 0;
            transition: all 0.5s cubic-bezier(0.68, -0.55, 0.27, 1.55);
        }

        .success-toast.active {
            transform: translateY(0);
            opacity: 1;
        }

        .toast-icon {
            margin-right: 10px;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .gallery-header {
                flex-direction: column;
                align-items: flex-start;
            }

            .gallery-actions {
                margin-top: 20px;
                width: 100%;
                justify-content: space-between;
            }

            .view-grid.active {
                grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
            }

            .preview-nav {
                width: 40px;
                height: 40px;
            }

            .preview-prev {
                left: -50px;
            }

            .preview-next {
                right: -50px;
            }
        }

        @media (max-width: 576px) {
            .view-grid.active {
                grid-template-columns: 1fr;
            }

            .preview-nav {
                top: auto;
                bottom: -60px;
            }

            .preview-prev {
                left: 50%;
                margin-left: -50px;
            }

            .preview-next {
                right: 50%;
                margin-right: -50px;
            }
        }
    </style>



    <script>
        document.addEventListener('DOMContentLoaded', function() {

            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
            var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl)
            });

            let deleteForm;

            document.querySelectorAll('.delete-confirm').forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    deleteForm = this.closest('form');
                    var modal = new bootstrap.Modal(document.getElementById('deleteConfirmModal'));
                    modal.show();
                });
            });

            document.querySelector('.confirm-delete')?.addEventListener('click', function() {
                if (deleteForm) {
                    deleteForm.submit();
                }
            });

            const successMessage = document.querySelector('meta[name="success-message"]')?.getAttribute('content');
            if (successMessage) {
                Swal.fire({
                    title: 'Success!',
                    text: successMessage,
                    icon: 'success',
                    timer: 3000,
                    timerProgressBar: true,
                    showConfirmButton: false
                });
            }
        });



        // Delete functionality
        const deleteButtons = document.querySelectorAll('.delete-btn');
        const deleteModal = document.getElementById('deleteModal');
        const confirmDelete = deleteModal.querySelector('.confirm-delete');
        const cancelDelete = deleteModal.querySelector('.confirm-cancel');
        let currentDeleteForm = null;

        deleteButtons.forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                currentDeleteForm = this.closest('form');
                deleteModal.classList.add('active');
            });
        });

        cancelDelete.addEventListener('click', function() {
            deleteModal.classList.remove('active');
            currentDeleteForm = null;
        });

        confirmDelete.addEventListener('click', function() {
            if (currentDeleteForm) {
                currentDeleteForm.submit();
            }
            deleteModal.classList.remove('active');
        });

        deleteModal.addEventListener('click', function(e) {
            if (e.target === deleteModal) {
                deleteModal.classList.remove('active');
                currentDeleteForm = null;
            }
        });
    </script>
@endsection
