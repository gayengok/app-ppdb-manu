@extends('frontend.home.landingpage')

@section('content')
    <section class="gallery-section">
        <div class="container">
            <div class="gallery-header">
                <h2 class="gallery-title">Galeri Kegiatan</h2>
                <p class="gallery-subtitle">Dokumentasi Visual Kegiatan Kami</p>
            </div>
            <div class="gallery-grid">
                @forelse ($photos as $photo)
                    <div class="gallery-item {{ $photo->category ?? 'event' }}">
                        <div class="gallery-card">
                            <div class="gallery-image-container">
                                <img src="{{ asset('storage/' . $photo->photo_path) }}" alt="{{ $photo->title ?? 'Photo' }}"
                                    class="gallery-img" data-title="{{ $photo->title ?? 'Photo' }}"
                                    data-date="{{ $photo->created_at->format('d M Y') }}"
                                    data-desc="{{ $photo->description ?? '' }}">
                                <div class="gallery-overlay">
                                    <div class="overlay-content">
                                        <h3 class="photo-title">{{ $photo->title ?? 'Photo' }}</h3>
                                        <div class="photo-meta">
                                            <span class="photo-date">
                                                <i class="fas fa-calendar-alt"></i>
                                                {{ $photo->created_at->format('d M Y') }}
                                            </span>
                                            <span class="photo-category">
                                                <i class="fas fa-tag"></i> {{ $photo->category ?? 'Event' }}
                                            </span>
                                        </div>
                                        <button class="view-btn" data-img="{{ asset('storage/' . $photo->photo_path) }}">
                                            <i class="fas fa-expand"></i> Lihat Detail
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="gallery-empty">
                        <div class="empty-content">
                            <div class="empty-icon">
                                <i class="fas fa-camera"></i>
                            </div>
                            <h3>Belum Ada Foto</h3>
                            <p>Tidak ada foto yang tersedia saat ini</p>
                        </div>
                    </div>
                @endforelse
            </div>


            <!-- Pagination -->
            <div class="gallery-pagination">
                <div class="pagination-container">
                    @if ($photos->hasPages())
                        <nav>
                            <ul class="pagination">
                                <li class="page-item {{ $photos->onFirstPage() ? 'disabled' : '' }}">
                                    <a class="page-link" href="{{ $photos->previousPageUrl() }}">
                                        <i class="fas fa-chevron-left"></i>
                                    </a>
                                </li>

                                @foreach ($photos->links()->elements[0] as $page => $url)
                                    <li class="page-item {{ $photos->currentPage() == $page ? 'active' : '' }}">
                                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                    </li>
                                @endforeach

                                <li class="page-item {{ !$photos->hasMorePages() ? 'disabled' : '' }}">
                                    <a class="page-link" href="{{ $photos->nextPageUrl() }}">
                                        <i class="fas fa-chevron-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    @endif
                </div>
            </div>
        </div>

        <div class="modal fade" id="photoModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTitle">Photo Title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img src="" id="modalImage" class="img-fluid" alt="">
                        <div class="mt-3">
                            <p id="modalDate" class="text-muted small"></p>
                            <p id="modalDesc" class="mt-2"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Lightbox functionality
        const viewButtons = document.querySelectorAll('.view-btn');

        viewButtons.forEach(button => {
            button.addEventListener('click', function(e) {
                e.stopPropagation();
                const imgSrc = this.getAttribute('data-img');
                const imgTitle = this.closest('.gallery-item').querySelector('.photo-title')
                    .textContent;
                const imgDate = this.closest('.gallery-item').querySelector('.photo-date')
                    .textContent;
                const imgDesc = this.closest('.gallery-item').querySelector('.photo-desc')
                    ?.textContent || '';

                showLightbox(imgSrc, imgTitle, imgDate, imgDesc);
            });
        });

        const galleryItems = document.querySelectorAll('.gallery-item');

        galleryItems.forEach(item => {
            item.addEventListener('click', function() {
                const imgSrc = this.querySelector('img').src;
                const imgTitle = this.querySelector('.photo-title').textContent;
                const imgDate = this.querySelector('.photo-date').textContent;
                const imgDesc = this.querySelector('.photo-desc')?.textContent || '';

                showLightbox(imgSrc, imgTitle, imgDate, imgDesc);
            });
        });

        function showLightbox(src, title, date, desc) {
            const modal = new bootstrap.Modal(document.getElementById('photoModal'));
            const modalImg = document.getElementById('modalImage');
            const modalTitle = document.getElementById('modalTitle');
            const modalDate = document.getElementById('modalDate');
            const modalDesc = document.getElementById('modalDesc');

            modalImg.src = src;
            modalTitle.textContent = title;
            modalDate.textContent = date;
            modalDesc.textContent = desc;

            modal.show();
        }
    });
</script>

<style>
    .gallery-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 25px;
        padding: 20px;
        margin: 0 auto;
        max-width: 1400px;
    }

    .gallery-item {
        position: relative;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
        aspect-ratio: 1/1;
        /* Membuat kotak persegi */
    }

    .gallery-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
    }

    .gallery-image-container {
        position: relative;
        width: 100%;
        height: 100%;
        overflow: hidden;
    }

    .gallery-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.8s ease;
    }

    .gallery-item:hover .gallery-img {
        transform: scale(1.05);
    }

    /* Overlay Effect */
    .gallery-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.7);
        opacity: 0;
        transition: opacity 0.3s ease;
        display: flex;
        align-items: flex-end;
        padding: 20px;
    }

    .gallery-item:hover .gallery-overlay {
        opacity: 1;
    }

    .overlay-content {
        transform: translateY(20px);
        transition: transform 0.3s ease;
        width: 100%;
    }

    .gallery-item:hover .overlay-content {
        transform: translateY(0);
    }

    .photo-title {
        color: #fff;
        font-size: 1.2rem;
        margin-bottom: 10px;
        font-weight: 600;
    }

    .photo-meta {
        display: flex;
        gap: 15px;
        margin-bottom: 15px;
        color: rgba(255, 255, 255, 0.8);
        font-size: 0.85rem;
    }

    .photo-meta i {
        margin-right: 5px;
    }

    .view-btn {
        background: rgba(255, 255, 255, 0.9);
        color: #2c5545;
        border: none;
        padding: 8px 15px;
        border-radius: 30px;
        font-size: 0.9rem;
        font-weight: 500;
        cursor: pointer;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 5px;
    }

    .view-btn:hover {
        background: #fff;
        transform: translateY(-2px);
    }

    .view-btn i {
        font-size: 0.9rem;
    }

    /* Empty State */
    .gallery-empty {
        grid-column: 1 / -1;
        text-align: center;
        padding: 60px 20px;
        background: #f9f9f9;
        border-radius: 12px;
    }

    .empty-content {
        max-width: 500px;
        margin: 0 auto;
    }

    .empty-icon {
        font-size: 3rem;
        color: #ddd;
        margin-bottom: 20px;
    }

    .empty-content h3 {
        color: #555;
        margin-bottom: 10px;
        font-size: 1.5rem;
    }

    .empty-content p {
        color: #888;
        font-size: 1rem;
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .gallery-grid {
            grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
            gap: 15px;
        }
    }

    @media (max-width: 480px) {
        .gallery-grid {
            grid-template-columns: 1fr 1fr;
        }

        .photo-meta {
            flex-direction: column;
            gap: 5px;
        }
    }


    /* Premium Gallery Design */
    .gallery-section {
        padding: 100px 0;
        background-color: #f9f9f9;
        position: relative;
    }

    .gallery-section::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 300px;
        background: linear-gradient(135deg, #3A6B56 0%, #264e3d 100%);
        z-index: 0;
    }

    .container {
        position: relative;
        z-index: 1;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 15px;
    }

    .gallery-header {
        text-align: center;
        margin-bottom: 50px;
        color: #fff;
    }

    .gallery-title {
        font-family: 'Playfair Display', serif;
        font-size: 42px;
        font-weight: 700;
        margin-bottom: 15px;
        letter-spacing: 1px;
    }

    .gallery-subtitle {
        font-family: 'Roboto', sans-serif;
        font-size: 16px;
        font-weight: 300;
        opacity: 0.8;
        max-width: 600px;
        margin: 0 auto;
    }

    .gallery-filter {
        text-align: center;
        margin-bottom: 40px;
    }

    .filter-menu {
        display: inline-flex;
        list-style: none;
        margin: 0;
        padding: 15px 30px;
        background-color: #fff;
        border-radius: 50px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        margin-left: -20px;
        /* Geser lebih ke kiri */
    }

    .filter-menu li {
        padding: 10px 20px;
        cursor: pointer;
        font-family: 'Roboto', sans-serif;
        font-size: 14px;
        font-weight: 500;
        color: #555;
        transition: all 0.3s ease;
        border-radius: 30px;
        margin: 0 5px;
    }

    .filter-menu li.active {
        background-color: #3A6B56;
        color: #fff;
    }

    .filter-menu li:hover:not(.active) {
        color: #3A6B56;
    }

    .gallery-grid {
        display: grid;
        gap: 25px;
        margin-bottom: 50px;
    }

    .gallery-item {
        overflow: hidden;
        border-radius: 10px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }

    .gallery-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
    }

    .gallery-card {
        background-color: #fff;
        height: 100%;
        overflow: hidden;
    }

    .gallery-image {
        position: relative;
        overflow: hidden;
        height: 280px;
    }

    .gallery-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.8s ease;
    }

    .gallery-item:hover .gallery-image img {
        transform: scale(1.1);
    }

    .gallery-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(to top, rgba(0, 0, 0, 0.8), transparent);
        padding: 20px;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .gallery-info {
        color: #fff;
        text-align: left;
    }

    .gallery-info h3 {
        font-family: 'Roboto', sans-serif;
        font-size: 18px;
        font-weight: 600;
        margin-bottom: 5px;
    }

    .gallery-info span {
        font-size: 14px;
        opacity: 0.8;
    }

    .gallery-empty {
        grid-column: 1 / -1;
        height: 400px;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }

    .empty-content {
        text-align: center;
        color: #aaa;
    }

    .empty-content i {
        font-size: 60px;
        margin-bottom: 20px;
    }

    .empty-content p {
        font-size: 18px;
    }

    .gallery-pagination {
        text-align: center;
        margin-top: 50px;
    }

    .pagination-container {
        display: inline-block;
        background-color: #fff;
        padding: 10px;
        border-radius: 50px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
    }

    .pagination {
        display: flex;
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .page-item {
        margin: 0 5px;
    }

    .page-link {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background-color: #f5f5f5;
        color: #333;
        text-decoration: none;
        font-weight: 500;
        transition: all 0.3s ease;
    }

    .page-item.active .page-link {
        background-color: #3A6B56;
        color: #fff;
    }

    .page-item:not(.active) .page-link:hover {
        background-color: #e5e5e5;
    }

    .page-item.disabled .page-link {
        opacity: 0.5;
        pointer-events: none;
    }

    /* Enhanced Modal */
    .modal-content {
        border: none;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 25px 50px rgba(0, 0, 0, 0.3);
    }

    .modal-header {
        background-color: #3A6B56;
        color: #fff;
        padding: 20px 25px;
        border-bottom: none;
    }

    .modal-title {
        font-family: 'Playfair Display', serif;
        font-weight: 600;
        font-size: 20px;
    }

    .btn-close {
        color: #fff;
        opacity: 1;
        filter: brightness(0) invert(1);
    }

    .modal-body {
        padding: 25px;
    }


    /* Premium Gallery Design - Enhanced Version */
    .gallery-section {
        padding: 120px 0 100px;
        background-color: #f8f9fa;
        position: relative;
        overflow: hidden;
    }

    .gallery-section::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 380px;
        background: linear-gradient(135deg, #2c5545 0%, #1a3a2a 100%);
        clip-path: polygon(0 0, 100% 0, 100% 85%, 0 100%);
        z-index: 0;
    }

    .gallery-section::after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 380px;
        background-image: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='%23ffffff' fill-opacity='0.05' fill-rule='evenodd'/%3E%3C/svg%3E");
        opacity: 0.5;
        z-index: 0;
    }

    .container {
        position: relative;
        z-index: 1;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .gallery-header {
        text-align: center;
        margin-bottom: 60px;
        color: #fff;
        position: relative;
    }

    .gallery-header::after {
        content: "";
        position: absolute;
        bottom: -15px;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 3px;
        background: rgba(255, 255, 255, 0.5);
        border-radius: 3px;
    }

    .gallery-title {
        font-family: 'Playfair Display', serif;
        font-size: 46px;
        font-weight: 700;
        margin-bottom: 15px;
        letter-spacing: 1px;
        position: relative;
        display: inline-block;
        text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }


    .gallery-subtitle {
        font-family: 'Roboto', sans-serif;
        font-size: 18px;
        font-weight: 300;
        opacity: 0.85;
        max-width: 600px;
        margin: 0 auto;
    }

    .gallery-filter {
        text-align: center;
        margin-bottom: 50px;
        position: relative;
    }



    .filter-menu li {
        padding: 12px 24px;
        cursor: pointer;
        font-family: 'Montserrat', sans-serif;
        font-size: 14px;
        font-weight: 600;
        color: #555;
        transition: all 0.4s ease;
        border-radius: 30px;
        margin: 0 5px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .filter-menu li.active {
        background-color: #2c5545;
        color: #fff;
        box-shadow: 0 5px 15px rgba(44, 85, 69, 0.3);
    }

    .filter-menu li:hover:not(.active) {
        color: #2c5545;
        transform: translateY(-2px);
    }

    .gallery-grid {
        display: grid;
        gap: 30px;
        margin-bottom: 60px;
    }

    .gallery-item {
        overflow: hidden;
        border-radius: 12px;
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }

    .gallery-item:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.15);
    }

    .gallery-card {
        background-color: #fff;
        height: 100%;
        overflow: hidden;
        position: relative;
    }

    .gallery-image {
        position: relative;
        overflow: hidden;
        height: 320px;
    }

    .gallery-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    }

    .gallery-item:hover .gallery-image img {
        transform: scale(1.1);
    }

    .gallery-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(to top, rgba(0, 0, 0, 0.85), transparent);
        padding: 30px;
        opacity: 0;
        transition: opacity 0.4s ease;
    }

    .gallery-info {
        color: #fff;
        text-align: left;
    }

    .gallery-info h3 {
        font-family: 'Montserrat', sans-serif;
        font-size: 20px;
        font-weight: 600;
        margin-bottom: 8px;
        transform: translateY(20px);
        opacity: 0;
        transition: all 0.4s 0.1s ease;
    }

    .gallery-info span {
        font-size: 14px;
        opacity: 0;
        transform: translateY(20px);
        transition: all 0.4s 0.2s ease;
        display: inline-block;
        background-color: rgba(255, 255, 255, 0.15);
        padding: 4px 12px;
        border-radius: 30px;
    }

    .gallery-item:hover .gallery-overlay {
        opacity: 1;
    }

    .gallery-item:hover .gallery-info h3,
    .gallery-item:hover .gallery-info span {
        transform: translateY(0);
        opacity: 1;
    }

    .gallery-empty {
        grid-column: 1 / -1;
        height: 400px;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #fff;
        border-radius: 12px;
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
    }

    .empty-content {
        text-align: center;
        color: #aaa;
        animation: pulse 2s infinite;
    }

    @keyframes pulse {
        0% {
            opacity: 0.6;
        }

        50% {
            opacity: 1;
        }

        100% {
            opacity: 0.6;
        }
    }

    .empty-content i {
        font-size: 70px;
        margin-bottom: 25px;
    }

    .empty-content p {
        font-size: 20px;
        font-weight: 300;
    }

    .gallery-pagination {
        text-align: center;
        margin-top: 60px;
    }

    .pagination-container {
        display: inline-block;
        background-color: #fff;
        padding: 12px;
        border-radius: 50px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }

    .pagination {
        display: flex;
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .page-item {
        margin: 0 5px;
    }

    .page-link {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 45px;
        height: 45px;
        border-radius: 50%;
        background-color: #f5f5f5;
        color: #333;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .page-item.active .page-link {
        background-color: #2c5545;
        color: #fff;
        box-shadow: 0 5px 15px rgba(44, 85, 69, 0.3);
    }

    .page-item:not(.active) .page-link:hover {
        background-color: #e5e5e5;
        transform: translateY(-2px);
    }

    .page-item.disabled .page-link {
        opacity: 0.5;
        pointer-events: none;
    }

    /* Enhanced Modal */
    .modal-content {
        border: none;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 25px 50px rgba(0, 0, 0, 0.3);
    }

    .modal-header {
        background-color: #2c5545;
        color: #fff;
        padding: 20px 25px;
        border-bottom: none;
    }

    .modal-title {
        font-family: 'Playfair Display', serif;
        font-weight: 600;
        font-size: 22px;
    }

    .btn-close {
        color: #fff;
        opacity: 1;
        filter: brightness(0) invert(1);
    }

    .modal-body {
        padding: 30px;
    }

    .modal-image {
        overflow: hidden;
        border-radius: 8px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
    }

    .modal-image img {
        width: 100%;
        height: auto;
        display: block;
    }

    .modal-description {
        padding: 15px 0;
        color: #555;
        font-size: 16px;
        line-height: 1.6;
    }

    .modal-footer {
        border-top: none;
        padding: 20px 25px;
        justify-content: center;
    }

    .modal-navigation {
        display: flex;
        gap: 20px;
    }

    .gallery-section {
        padding: 130px 0 100px;
        background-color: #fbfbfd;
        position: relative;
        overflow: hidden;
    }

    .gallery-section::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 400px;
        background: linear-gradient(to right, #1d3a2d 0%, #295c45 50%, #1d3a2d 100%);
        z-index: 0;
    }

    .gallery-section::after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 400px;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='600' height='400' viewBox='0 0 800 800'%3E%3Cg fill='none' stroke='%23ffffff' stroke-width='1'%3E%3Cpath d='M769 229L1037 260.9M927 880L731 737 520 660 309 538 40 599 295 764 126.5 879.5 40 599-197 493 102 382-31 229 126.5 79.5-69-63'/%3E%3Cpath d='M-31 229L237 261 390 382 603 493 308.5 537.5 101.5 381.5M370 905L295 764'/%3E%3Cpath d='M520 660L578 842 731 737 840 599 603 493 520 660 295 764 309 538 390 382 539 269 769 229 577.5 41.5 370 105 295 -36 126.5 79.5 237 261 102 382 40 599 -69 737 127 880'/%3E%3Cpath d='M520-140L578.5 42.5 731-63M603 493L539 269 237 261 370 105M902 382L539 269M390 382L102 382'/%3E%3Cpath d='M-222 42L126.5 79.5 370 105 539 269 577.5 41.5 927 80 769 229 902 382 603 493 731 737M295-36L577.5 41.5M578 842L295 764M40-201L127 80M102 382L-261 269'/%3E%3C/g%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Ccircle cx='769' cy='229' r='5'/%3E%3Ccircle cx='539' cy='269' r='5'/%3E%3Ccircle cx='603' cy='493' r='5'/%3E%3Ccircle cx='731' cy='737' r='5'/%3E%3Ccircle cx='520' cy='660' r='5'/%3E%3Ccircle cx='309' cy='538' r='5'/%3E%3Ccircle cx='295' cy='764' r='5'/%3E%3Ccircle cx='40' cy='599' r='5'/%3E%3Ccircle cx='102' cy='382' r='5'/%3E%3Ccircle cx='127' cy='80' r='5'/%3E%3Ccircle cx='370' cy='105' r='5'/%3E%3Ccircle cx='578' cy='42' r='5'/%3E%3Ccircle cx='237' cy='261' r='5'/%3E%3Ccircle cx='390' cy='382' r='5'/%3E%3C/g%3E%3C/svg%3E");
        opacity: 0.2;
        z-index: 0;
    }

    .container {
        position: relative;
        z-index: 1;
        max-width: 1240px;
        margin: 0 auto;
        padding: 0 30px;
    }

    .gallery-header {
        text-align: center;
        margin-bottom: 70px;
        color: #fff;
        position: relative;
    }

    .gallery-title {
        font-family: 'Playfair Display', serif;
        font-size: 48px;
        font-weight: 700;
        margin-bottom: 20px;
        letter-spacing: 1.5px;
        position: relative;
        display: inline-block;
        text-shadow: 0 2px 5px rgba(0, 0, 0, 0.15);
    }

    .gallery-title::after {
        content: "";
        position: absolute;
        bottom: -12px;
        left: 50%;
        transform: translateX(-50%);
        width: 60px;
        height: 3px;
        background: #fff;
        border-radius: 3px;
    }

    .gallery-subtitle {
        font-family: 'Montserrat', sans-serif;
        font-size: 18px;
        font-weight: 300;
        opacity: 0.9;
        max-width: 650px;
        margin: 0 auto;
        letter-spacing: 0.5px;
    }

    .gallery-filter {
        text-align: center;
        margin-bottom: 60px;
        position: relative;
    }



    .filter-menu li {
        padding: 14px 28px;
        cursor: pointer;
        font-family: 'Montserrat', sans-serif;
        font-size: 15px;
        font-weight: 500;
        color: #555;
        transition: all 0.4s cubic-bezier(0.2, 0.85, 0.4, 1.275);
        border-radius: 12px;
        margin: 0 4px;
        position: relative;
    }

    .filter-menu li.active {
        background-color: #295c45;
        color: #fff;
        box-shadow: 0 8px 20px rgba(41, 92, 69, 0.25);
        transform: translateY(-2px);
    }

    .filter-menu li:hover:not(.active) {
        color: #295c45;
        background-color: rgba(41, 92, 69, 0.08);
    }

    .filter-menu li::after {
        content: "";
        position: absolute;
        bottom: 8px;
        left: 50%;
        transform: translateX(-50%) scaleX(0);
        width: 20px;
        height: 2px;
        background-color: currentColor;
        transition: transform 0.3s ease;
    }

    .filter-menu li:hover::after {
        transform: translateX(-50%) scaleX(1);
    }

    .gallery-grid {
        display: grid;
        gap: 30px;
        margin-bottom: 60px;
    }

    .gallery-item {
        overflow: hidden;
        border-radius: 16px;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
        transition: all 0.5s cubic-bezier(0.2, 0.85, 0.4, 1.275);
        transform-origin: center;
    }

    .gallery-item:hover {
        transform: translateY(-12px) scale(1.02);
        box-shadow: 0 30px 60px rgba(0, 0, 0, 0.12);
    }

    .gallery-card {
        background-color: #fff;
        height: 100%;
        overflow: hidden;
        position: relative;
    }

    .gallery-image {
        position: relative;
        overflow: hidden;
        height: 340px;
    }

    .gallery-image::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(41, 92, 69, 0.2);
        opacity: 0;
        transition: opacity 0.4s ease;
        z-index: 1;
    }

    .gallery-item:hover .gallery-image::before {
        opacity: 1;
    }

    .gallery-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 1s cubic-bezier(0.33, 1, 0.68, 1);
        will-change: transform;
    }

    .gallery-item:hover .gallery-image img {
        transform: scale(1.08);
    }

    .gallery-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(to top, rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));
        padding: 30px;
        opacity: 0;
        transition: all 0.4s ease;
        z-index: 2;
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        height: 50%;
    }

    .gallery-info {
        color: #fff;
        text-align: left;
    }

    .gallery-info h3 {
        font-family: 'Playfair Display', serif;
        font-size: 22px;
        font-weight: 600;
        margin-bottom: 10px;
        transform: translateY(30px);
        opacity: 0;
        transition: all 0.5s 0.1s cubic-bezier(0.33, 1, 0.68, 1);
    }

    .gallery-info span {
        font-size: 14px;
        opacity: 0;
        transform: translateY(30px);
        transition: all 0.5s 0.2s cubic-bezier(0.33, 1, 0.68, 1);
        display: inline-block;
        background-color: rgba(255, 255, 255, 0.2);
        padding: 6px 14px;
        border-radius: 30px;
        backdrop-filter: blur(5px);
        -webkit-backdrop-filter: blur(5px);
        font-family: 'Montserrat', sans-serif;
        font-weight: 500;
        letter-spacing: 0.5px;
    }

    .gallery-item:hover .gallery-overlay {
        opacity: 1;
    }

    .gallery-item:hover .gallery-info h3,
    .gallery-item:hover .gallery-info span {
        transform: translateY(0);
        opacity: 1;
    }

    .gallery-empty {
        grid-column: 1 / -1;
        height: 450px;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #fff;
        border-radius: 16px;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
    }

    .empty-content {
        text-align: center;
        color: #aaa;
        padding: 40px;
    }

    .empty-content i {
        font-size: 80px;
        margin-bottom: 30px;
        background: linear-gradient(135deg, #295c45, #1d3a2d);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        opacity: 0.3;
    }

    .empty-content p {
        font-size: 22px;
        font-weight: 300;
        color: #888;
        font-family: 'Montserrat', sans-serif;
    }

    .gallery-pagination {
        text-align: center;
        margin-top: 70px;
    }

    .pagination-container {
        display: inline-block;
        background-color: #fff;
        padding: 10px;
        border-radius: 16px;
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
    }

    .pagination {
        display: flex;
        list-style: none;
        margin: 0;
        padding: 0;
        align-items: center;
    }

    .page-item {
        margin: 0 6px;
    }

    .page-link {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 48px;
        height: 48px;
        border-radius: 12px;
        background-color: #f8f8f8;
        color: #333;
        text-decoration: none;
        font-weight: 600;
        font-family: 'Montserrat', sans-serif;
        transition: all 0.3s cubic-bezier(0.2, 0.85, 0.4, 1.275);
    }

    .page-item.active .page-link {
        background-color: #295c45;
        color: #fff;
        box-shadow: 0 8px 20px rgba(41, 92, 69, 0.25);
        transform: translateY(-3px);
    }

    .page-item:not(.active) .page-link:hover {
        background-color: #eaeaea;
        transform: translateY(-3px);
    }

    .page-item.disabled .page-link {
        opacity: 0.5;
        pointer-events: none;
        background-color: #f0f0f0;
    }

    /* Enhanced Modal */
    .modal-content {
        border: none;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 30px 60px rgba(0, 0, 0, 0.25);
    }

    .modal-header {
        background-color: #295c45;
        color: #fff;
        padding: 25px 30px;
        border-bottom: none;
        position: relative;
    }

    .modal-header::after {
        content: "";
        position: absolute;
        bottom: 0;
        left: 30px;
        right: 30px;
        height: 1px;
        background: rgba(255, 255, 255, 0.2);
    }

    .modal-title {
        font-family: 'Playfair Display', serif;
        font-weight: 600;
        font-size: 24px;
        letter-spacing: 0.5px;
    }

    .btn-close {
        color: #fff;
        opacity: 1;
        filter: brightness(0) invert(1);
        transform: scale(1.2);
        transition: transform 0.3s ease;
    }

    .btn-close:hover {
        transform: scale(1.3) rotate(90deg);
    }

    .modal-body {
        padding: 35px;
    }

    .modal-image {
        overflow: hidden;
        border-radius: 12px;
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
        margin-bottom: 25px;
        position: relative;
    }
</style>
