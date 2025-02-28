@extends('backend.dashboard.dashboard.dashboard')

@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="card-title mb-0">
                                <i class="fas fa-newspaper"></i> Editorial - Published
                            </h4>
                        </div>

                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        <div class="container mt-3">
                            <div class="row">

                                <div class="col-md-4 d-flex align-items-center">
                                    <a href="{{ route('post.berita') }}" class="btn btn-primary" style="margin-left: 10px;">
                                        <i class="fas fa-plus"></i> New Article
                                    </a>
                                </div>

                                <div class="col-md-8">
                                    <form action="{{ route('news.berita') }}" method="GET" class="d-flex ms-auto me-3"
                                        style="width: 330px;">
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <i class="fas fa-search"></i>
                                            </span>
                                            <input type="text" name="search" class="form-control"
                                                placeholder="Search articles..." value="{{ request('search') }}">
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered"
                                    style="border: 1px solid #ddd; border-collapse: collapse;">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">No</th>
                                            <th style="text-align: center;">Title</th>
                                            <th style="text-align: center;">Status</th>
                                            <th style="text-align: center;">Author</th>
                                            <th style="text-align: center;">Published Date</th>
                                            <th style="text-align: center;">Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($artikels as $index => $artikel)
                                            <tr>
                                                <td class="text-center">
                                                    {{ $index + 1 + ($artikels->currentPage() - 1) * 10 }}</td>
                                                <td>{{ Str::limit($artikel->title, 70) }}</td>
                                                <td class="text-center">{{ $artikel->status }}</td>
                                                <td class="text-center">{{ $artikel->author }}</td>
                                                <td class="text-center">{{ $artikel->published_date->format('Y/m/d') }}</td>

                                                <td class="text-center">
                                                    <!-- Edit and Delete buttons -->
                                                    <div class="d-flex justify-content-center flex-wrap">
                                                        <a href="{{ route('articles.edit', $artikel->id) }}"
                                                            class="btn btn-info btn-icon m-1" title="Edit Artikel">
                                                            <i class="fas fa-edit" style="font-size: 1.5rem;"></i>
                                                        </a>

                                                        <form action="{{ route('artikels.destroy', $artikel->id) }}"
                                                            method="POST" style="display:inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-icon m-1"
                                                                title="Hapus Artikel">
                                                                <i class="fas fa-trash-alt" style="font-size: 1.5rem;"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>

                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <!-- Pagination showing message -->
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <div>
                                    <span class="text-muted">
                                        Showing {{ $artikels->firstItem() }} to {{ $artikels->lastItem() }} of
                                        {{ $artikels->total() }} entries
                                    </span>
                                </div>

                                <div>
                                    {{ $artikels->links('pagination::bootstrap-4') }}
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


<style>
    th {
        background-color: #120101 !important;
        color: white !important;
    }

    @media (max-width: 767px) {
        .btn-primary {
            width: 100%;
            margin-left: 10px;
            margin-right: 10px;
        }

    }

    @media (max-width: 767px) {
        .col-md-8 {
            position: relative;
            top: 10px;
        }

        .input-group {
            width: 100%;
        }
    }

    @media (max-width: 576px) {
        .btn-icon i {
            font-size: 1.2rem;
            /* Ukuran ikon lebih kecil */
        }

        .btn {
            padding: 0.5rem;
            /* Sesuaikan padding tombol */
        }
    }
</style>
