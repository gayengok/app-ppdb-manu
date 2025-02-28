@extends('backend.dashboard.dashboard.dashboard')


@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">
                                <i class="fas fa-edit"></i> Editorial - Edit Article
                            </h4>
                        </div>

                        {{-- Error messages --}}
                        @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Oops!</strong> There were some problems with your input.
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        <div class="card-body">
                            <form action="{{ route('articles.update', $artikel->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="title">Title</label>
                                            <input type="text" class="form-control" id="title" name="title"
                                                value="{{ old('title', $artikel->title) }}" required>
                                            @if ($errors->has('title'))
                                                <div class="alert alert-danger mt-1">
                                                    {{ $errors->first('title') }}
                                                </div>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <label for="image">Upload New Image (Optional)</label>
                                            <input type="file" class="form-control" id="image" name="image"
                                                accept="image/*">
                                            @if ($artikel->image)
                                                <p>Current image: <img src="{{ asset('storage/' . $artikel->image) }}"
                                                        alt="Current Image" width="100"></p>
                                            @endif
                                            @if ($errors->has('image'))
                                                <div class="alert alert-danger mt-1">
                                                    {{ $errors->first('image') }}
                                                </div>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <label for="content">Content</label>
                                            <textarea id="content" name="content" class="form-control" rows="10" required>{{ old('content', $artikel->content) }}</textarea>
                                            @if ($errors->has('content'))
                                                <div class="alert alert-danger mt-1">
                                                    {{ $errors->first('content') }}
                                                </div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md-4">

                                        <div class="form-group">
                                            <label for="author">Author</label>
                                            <input type="text" class="form-control" id="author" name="author"
                                                value="{{ old('author', $artikel->author) }}" required>
                                            @if ($errors->has('author'))
                                                <div class="alert alert-danger mt-1">
                                                    {{ $errors->first('author') }}
                                                </div>
                                            @endif
                                        </div>


                                        <div class="form-group">
                                            <label for="short_description">Deskripsi Singkat</label>
                                            <textarea class="form-control" id="short_description" name="short_description" rows="3" required>{{ old('short_description', $artikel->short_description) }}</textarea>
                                            @if ($errors->has('short_description'))
                                                <div class="alert alert-danger mt-1">
                                                    {{ $errors->first('short_description') }}
                                                </div>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <label for="published_date">Published Date</label>
                                            <input type="date" class="form-control" id="published_date"
                                                name="published_date"
                                                value="{{ old('published_date', $artikel->published_date ? $artikel->published_date->format('Y-m-d') : '') }}"
                                                required>
                                            @if ($errors->has('published_date'))
                                                <div class="alert alert-danger mt-1">
                                                    {{ $errors->first('published_date') }}
                                                </div>
                                            @endif
                                        </div>


                                        <div class="form-group">
                                            <label for="status">Status</label>
                                            <select class="form-control" id="status" name="status" required>
                                                <option value="Published"
                                                    {{ old('status', $artikel->status) == 'Published' ? 'selected' : '' }}>
                                                    Published</option>
                                                <option value="Draft"
                                                    {{ old('status', $artikel->status) == 'Draft' ? 'selected' : '' }}>
                                                    Draft
                                                </option>
                                            </select>
                                            @if ($errors->has('status'))
                                                <div class="alert alert-danger mt-1">
                                                    {{ $errors->first('status') }}
                                                </div>
                                            @endif
                                        </div>

                                    </div>
                                </div>

                                <div class="form-group mt-3">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-save"></i> Update
                                    </button>
                                    <a href="{{ route('news.berita') }}" class="btn btn-secondary">
                                        <i class="fa fa-arrow-left"></i> Kembali
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
