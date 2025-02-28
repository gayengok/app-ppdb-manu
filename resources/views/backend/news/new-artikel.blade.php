@extends('backend.dashboard.dashboard.dashboard')


@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">
                                <i class="fas fa-newspaper"></i> Editorial - Create Article
                            </h4>
                        </div>

                        @if ($errors->has('title'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Oops!</strong> {{ $errors->first('title') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        <div class="card-body">
                            <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="title">Title</label>
                                            <input type="text" class="form-control" id="title" name="title"
                                                required>
                                        </div>

                                        <div class="form-group">
                                            <label for="image">Upload Image</label>
                                            <input type="file" class="form-control" id="image" name="image"
                                                accept="image/*">
                                        </div>


                                        <div class="form-group">
                                            <label for="content">Content</label>
                                            <textarea id="content" name="content" class="form-control" rows="10" placeholder="Masukkan konten di sini"
                                                required></textarea>
                                        </div>


                                    </div>

                                    <div class="col-md-4">


                                        <div class="form-group">
                                            <label for="author">Author</label>
                                            <input type="text" class="form-control" id="author" name="author"
                                                required>
                                        </div>

                                        <div class="form-group">
                                            <label for="short_description">Deskripsi</label>
                                            <textarea class="form-control" id="short_description" name="short_description" rows="3" required></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="published_date">Published Date</label>
                                            <input type="date" class="form-control" id="published_date"
                                                name="published_date" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="status">Status</label>
                                            <select class="form-control" id="status" name="status" required>
                                                <option value="Published">Published</option>
                                                <option value="Draft">Draft</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">Publish</button>
                                    <a href="{{ route('news.berita') }}" class="btn btn-secondary ml-2">Cancel</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<style>
    .summernote {
        font-size: 14px;
    }

    .note-editable p {
        font-size: 14px;
    }
</style>
