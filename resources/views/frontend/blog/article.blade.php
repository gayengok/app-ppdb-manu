@extends('frontend.home.landingpage')

@section('content')
    <section class="news-article-section py-8 bg-light">
        <div class="container my-4">
            <div class="row">
                <div class="col-lg-8 mx-auto content-container">
                    <!-- Article Title -->
                    <h1 class="article-title">
                        {{ $artikel->title }}
                    </h1>
                    <div class="article-meta">
                        <span class="date">{{ \Carbon\Carbon::parse($artikel->published_date)->format('d F Y') }}</span>
                        <span class="author">Penulis :{{ $artikel->author }}</span>
                    </div>

                    <!-- Featured Image -->
                    <div class="featured-image">
                        <img src="{{ asset('storage/' . $artikel->image) }}" alt="{{ $artikel->title }}" class="img-fluid">
                    </div>

                    <!-- Social Share Buttons -->
                    <div class="social-share">
                        <span class="share-label">Bagikan:</span>
                        <div class="social-buttons">
                            <a href="#" class="btn-social facebook" title="Bagikan ke Facebook">
                                <i class="bi bi-facebook"></i>
                            </a>
                            <a href="#" class="btn-social twitter" title="Bagikan ke Twitter">
                                <i class="bi bi-twitter"></i>
                            </a>
                            <a href="#" class="btn-social whatsapp" title="Bagikan ke WhatsApp">
                                <i class="bi bi-whatsapp"></i>
                            </a>
                            <a href="#" class="btn-social linkedin" title="Bagikan ke LinkedIn">
                                <i class="bi bi-linkedin"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Article Content -->
                    <div class="article-content">
                        {!! $artikel->content !!}
                    </div>

                    <!-- Article Tags (if available) -->
                    @if (isset($artikel->tags) && !empty($artikel->tags))
                        <div class="article-tags">
                            @foreach (explode(',', $artikel->tags) as $tag)
                                <a href="#" class="tag">{{ trim($tag) }}</a>
                            @endforeach
                        </div>
                    @endif
                </div>

                <!-- Related Articles Sidebar -->
                <div class="col-lg-4 related-articles-sidebar">
                    <div class="sidebar-inner">
                        <h3 class="sidebar-title">Artikel Terkait</h3>

                        <div class="related-articles">
                            @foreach ($relatedArticles as $related)
                                <div class="related-article-card">
                                    <div class="card-image">
                                        <img src="{{ asset('storage/' . $related->image) }}" alt="{{ $related->title }}">
                                    </div>
                                    <div class="card-content">
                                        <h5 class="card-title">{{ $related->title }}</h5>
                                        <a href="{{ route('article.show', $related->id) }}" class="read-more">
                                            Baca Selengkapnya <i class="bi bi-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

<style>
    /* General Styles */
    .news-article-section {
        padding: 6rem 0;
        background-color: #f8f9fa;
        font-family: 'Inter', sans-serif;
    }

    /* Article Title */
    .article-title {
        font-size: 2.75rem;
        font-weight: 800;
        line-height: 1.2;
        text-align: center;
        margin: 0 0 1.5rem;
        color: #111827;
    }

    /* Article Meta */
    .article-meta {
        display: flex;
        justify-content: center;
        gap: 1rem;
        font-size: 1rem;
        color: #6b7280;
        margin-bottom: 2rem;
    }

    /* Featured Image */
    .featured-image {
        margin-bottom: 2.5rem;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }

    .featured-image img {
        width: 100%;
        height: 500px;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .featured-image:hover img {
        transform: scale(1.02);
    }

    /* Social Share */
    .social-share {
        display: flex;
        align-items: center;
        margin-bottom: 2.5rem;
        border-bottom: 1px solid #e5e7eb;
        padding-bottom: 1.5rem;
    }

    .share-label {
        font-weight: 600;
        margin-right: 1rem;
        color: #374151;
    }

    .social-buttons {
        display: flex;
        gap: 0.75rem;
    }

    .btn-social {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        font-size: 1.2rem;
        transition: all 0.3s ease;
        text-decoration: none;
    }

    .btn-social:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .btn-social.facebook {
        background-color: #1877f2;
    }

    .btn-social.twitter {
        background-color: #1da1f2;
    }

    .btn-social.whatsapp {
        background-color: #25d366;
    }

    .btn-social.linkedin {
        background-color: #0a66c2;
    }

    /* Article Content */
    .article-content {
        font-size: 1.125rem;
        line-height: 1.8;
        color: #1f2937;
        margin-bottom: 2.5rem;
    }

    .article-content p {
        margin-bottom: 1.5rem;
    }

    /* Article Tags */
    .article-tags {
        display: flex;
        flex-wrap: wrap;
        gap: 0.5rem;
        margin-bottom: 3rem;
    }

    .tag {
        padding: 0.5rem 1rem;
        background-color: #f3f4f6;
        border-radius: 50px;
        color: #4b5563;
        font-size: 0.875rem;
        text-decoration: none;
        transition: all 0.2s ease;
    }

    .tag:hover {
        background-color: #e5e7eb;
        color: #111827;
    }

    /* Related Articles Sidebar */
    .related-articles-sidebar {
        padding-top: 10px;
    }

    .related-articles-sidebar {
        position: sticky;
        top: 80px;
        /* Jarak dari atas */
        max-height: 80vh;
        /* Supaya tidak terlalu panjang */
        overflow-y: auto;
        /* Scroll jika kontennya terlalu panjang */
    }

    .sidebar-inner {
        position: sticky;
        top: 100px;
    }

    .sidebar-title {
        font-size: 1.75rem;
        font-weight: 700;
        color: #111827;
        margin-bottom: 1.5rem;
        position: relative;
        padding-bottom: 0.75rem;
    }

    .sidebar-title:after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 60px;
        height: 4px;
        background-color: #10b981;
        border-radius: 2px;
    }

    .related-articles {
        display: flex;
        flex-direction: column;
        gap: 1.5rem;
        max-height: 400px;
    }



    .related-article-card {
        display: grid;
        grid-template-columns: 120px 1fr;
        gap: 1rem;
        transition: transform 0.3s ease;
    }

    .related-article-card:hover {
        transform: translateX(5px);
    }

    .card-image {
        overflow: hidden;
        border-radius: 8px;
    }

    .card-image img {
        width: 100%;
        height: 100px;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .related-article-card:hover .card-image img {
        transform: scale(1.1);
    }

    .card-content {
        display: flex;
        flex-direction: column;
    }

    .card-title {
        font-size: 1rem;
        font-weight: 600;
        margin-bottom: 0.5rem;
        color: #111827;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .read-more {
        margin-top: auto;
        color: #10b981;
        font-size: 0.875rem;
        font-weight: 600;
        text-decoration: none;
        display: flex;
        align-items: center;
        gap: 0.25rem;
        transition: gap 0.3s ease;
    }

    .read-more:hover {
        gap: 0.5rem;
    }

    /* Responsive Styles */
    @media (max-width: 992px) {
        .related-articles-sidebar {
            padding-top: 3rem;
        }

        .sidebar-inner {
            position: static;
        }
    }

    @media (max-width: 768px) {
        .article-title {
            font-size: 2rem;
        }

        .featured-image img {
            height: 350px;
        }
    }

    @media (max-width: 576px) {
        .news-article-section {
            padding: 4rem 0;
        }

        .article-title {
            font-size: 1.5rem;
        }

        .article-meta {
            flex-direction: column;
            align-items: center;
            gap: 0.25rem;
        }

        .featured-image img {
            height: 250px;
        }

        .related-article-card {
            grid-template-columns: 100px 1fr;
        }

        .card-image img {
            height: 80px;
        }
    }
</style>
