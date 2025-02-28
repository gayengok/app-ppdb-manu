@extends('frontend.home.landingpage')

@section('content')
    <section class="news-article-section py-8 bg-light">

        <div class="container my-5">
            <h2 class="text-center mb-5 custom-title"
                style="font-family: 'Roboto', sans-serif; font-weight: 700; margin-top: 70px; color: #3A6B56;">
                Galeri Kegiatan
            </h2>

            <div class="row">
                @forelse ($photos as $photo)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card shadow border-0 hover-shadow h-100">
                            <img src="{{ asset('storage/' . $photo->photo_path) }}" class="card-img-top photo-image"
                                alt="{{ $photo->title ?? 'Photo' }}" data-bs-toggle="modal" data-bs-target="#photoModal"
                                data-bs-title="{{ $photo->title ?? 'Photo' }}"
                                data-bs-img="{{ asset('storage/' . $photo->photo_path) }}">
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center">
                        <p>No photos available at the moment.</p>
                    </div>
                @endforelse
            </div>

            <!-- Pagination -->
            <nav>
                <ul class="pagination justify-content-center">
                    <!-- Previous Page Link -->
                    <li class="page-item {{ $photos->onFirstPage() ? 'disabled' : '' }}">
                        <a class="page-link" href="{{ $photos->previousPageUrl() }}" aria-label="Previous">
                            <span aria-hidden="true">&laquo; Previous</span>
                        </a>
                    </li>

                    <!-- Pagination Links -->
                    @foreach ($photos->links()->elements[0] as $page => $url)
                        <li class="page-item {{ $photos->currentPage() == $page ? 'active' : '' }}">
                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                        </li>
                    @endforeach

                    <!-- Next Page Link -->
                    <li class="page-item {{ !$photos->hasMorePages() ? 'disabled' : '' }}">
                        <a class="page-link" href="{{ $photos->nextPageUrl() }}" aria-label="Next">
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
@endsection

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
