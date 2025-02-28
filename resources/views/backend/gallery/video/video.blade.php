@extends('backend.dashboard.dashboard.dashboard')

@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="card-title mb-0">
                                <i class="fas fa-video"></i> Data - Video
                            </h4>
                            <!-- Tombol Tambah -->
                            <a href="{{ route('videos.create') }}" class="btn btn-primary btn-sm fs-6">
                                <i class="fas fa-plus"></i> Tambah
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered"
                                    style="border: 1px solid #ddd; border-collapse: collapse;">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Title</th>
                                            <th>Video Link</th>
                                            <th>Created Date</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($videos as $index => $video)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $video->title }}</td>
                                                <td>
                                                    @php
                                                        $videoId = null;
                                                        if (
                                                            preg_match(
                                                                '/(?:youtube\.com\/(?:[^\/\n\s]*\/\S+\/|(?:v|e(?:mbed)?)\/|watch\?v=)|youtu\.be\/)([^\s\/?&]+)/i',
                                                                $video->video_link,
                                                                $matches,
                                                            )
                                                        ) {
                                                            $videoId = $matches[1] ?? null;
                                                        }
                                                    @endphp

                                                    @if ($videoId)
                                                        <a href="{{ $video->video_link }}" target="_blank">
                                                            <img src="https://img.youtube.com/vi/{{ $videoId }}/hqdefault.jpg"
                                                                alt="Video Thumbnail" width="100" height="60">
                                                        </a>
                                                    @else
                                                        <span class="text-danger">Link tidak valid</span>
                                                    @endif
                                                </td>
                                                <td>{{ $video->created_at->format('d M Y') }}</td>
                                                <td class="text-center">
                                                    <div class="d-flex justify-content-center gap-2">
                                                        <a href="{{ route('videos.edit', $video->id) }}"
                                                            class="btn btn-warning btn-sm">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                        <form action="{{ route('videos.destroy', $video->id) }}"
                                                            method="POST" style="display:inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm">
                                                                <i class="fas fa-trash-alt"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>

                                            </tr>
                                        @endforeach
                                    </tbody>

                                </table>
                            </div>
                            <div class="mt-3">
                                {{ $videos->links() }} <!-- Pagination if needed -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
