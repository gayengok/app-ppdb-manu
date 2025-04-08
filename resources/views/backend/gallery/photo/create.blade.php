@extends('backend.dashboard.dashboard.dashboard')

@section('content')
    <div class="upload-container">
        <div class="upload-card">
            <div class="card-header">
                <div class="header-icon">
                    <i class="fas fa-cloud-upload-alt"></i>
                </div>
                <div class="header-text">
                    <h3>Upload New Photo</h3>
                </div>
            </div>

            <div class="card-body">
                @if ($errors->any())
                    <div class="error-notification">
                        <div class="error-icon">
                            <i class="fas fa-exclamation-circle"></i>
                        </div>
                        <div class="error-content">
                            <h4>Upload Failed</h4>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            <button type="button" class="error-close">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                @endif

                {{-- Form Upload --}}
                <form action="{{ route('photo.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">
                            <span class="label-text">Photo Title</span>
                            <span class="label-hint">Give your masterpiece a name</span>
                        </label>
                        <div class="input-wrapper">
                            <span class="input-icon"><i class="fas fa-heading"></i></span>
                            <input type="text" name="title" id="title" value="{{ old('title') }}" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="photo-upload">
                            <span class="label-text">Upload Photo</span>
                            <span class="label-hint">Select a high-quality image (JPG, PNG)</span>
                        </label>

                        <div class="upload-area" id="uploadArea">
                            <input type="file" name="photo" id="photo-upload" accept="image/*" required
                                class="file-input">
                            <div class="upload-placeholder">
                                <div class="upload-icon">
                                    <i class="fas fa-image"></i>
                                </div>
                                <div class="upload-text">
                                    <p>Drag & drop your photo here</p>
                                    <span>or</span>
                                    <button type="button" id="browseButton" class="browse-btn">Browse Files</button>
                                </div>
                            </div>
                            <div class="upload-preview" id="uploadPreview">
                                <img src="" alt="Preview" id="previewImage">
                                <button type="button" class="remove-preview" id="removePreview">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="form-actions">
                        <a href="{{ route('photo.index') }}" class="btn-cancel">
                            <i class="fas fa-arrow-left"></i>
                            <span>Back to Gallery</span>
                        </a>
                        <button type="submit" class="btn-upload">
                            <i class="fas fa-save"></i>
                            <span>Save Photo</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <style>
        :root {
            --primary-color: #ff6b6b;
            --primary-light: #ff8e8e;
            --primary-gradient: linear-gradient(135deg, #ff6b6b 0%, #ff8e8e 100%);
            --secondary-color: #6c5ce7;
            --secondary-light: #a29bfe;
            --secondary-gradient: linear-gradient(135deg, #6c5ce7 0%, #a29bfe 100%);
            --dark-color: #2d3436;
            --light-color: #ffffff;
            --gray-color: #b2bec3;
            --light-gray: #f8f9fa;
            --border-color: #e6e6e6;
            --shadow-color: rgba(0, 0, 0, 0.1);
            --card-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            --hover-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
            --border-radius: 12px;
            --transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
        }

        .upload-container {
            max-width: 750px;
            margin: 40px auto;
            padding: 0 20px;
            font-family: 'Poppins', sans-serif;
        }

        .upload-card {
            background: var(--light-color);
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--card-shadow);
            transition: var(--transition);
        }

        .upload-card:hover {
            box-shadow: var(--hover-shadow);
        }

        .card-header {
            display: flex;
            align-items: center;
            padding: 30px;
            background: var(--light-gray);
            border-bottom: 1px solid var(--border-color);
        }

        .header-icon {
            width: 60px;
            height: 60px;
            background: var(--primary-gradient);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 20px;
            box-shadow: 0 8px 15px rgba(255, 107, 107, 0.3);
        }

        .header-icon i {
            color: var(--light-color);
            font-size: 24px;
        }

        .header-text h3 {
            margin: 0;
            font-size: 24px;
            font-weight: 700;
            color: var(--dark-color);
        }

        .header-text p {
            margin: 5px 0 0;
            color: var(--gray-color);
            font-size: 14px;
        }

        .card-body {
            padding: 30px;
        }

        /* Error Notification */
        .error-notification {
            display: flex;
            background-color: #fff5f5;
            border-left: 4px solid var(--primary-color);
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 30px;
            box-shadow: 0 5px 15px rgba(255, 107, 107, 0.15);
            position: relative;
        }

        .error-icon {
            color: var(--primary-color);
            font-size: 24px;
            margin-right: 15px;
            display: flex;
            align-items: flex-start;
        }

        .error-content h4 {
            margin: 0 0 10px;
            color: var(--primary-color);
            font-weight: 600;
        }

        .error-content ul {
            margin: 0;
            padding-left: 20px;
            color: #e74c3c;
            font-size: 14px;
        }

        .error-close {
            position: absolute;
            top: 15px;
            right: 15px;
            background: transparent;
            border: none;
            color: var(--gray-color);
            cursor: pointer;
            font-size: 16px;
        }

        /* Form Styling */
        .form-group {
            margin-bottom: 25px;
        }

        .form-group label {
            display: block;
            margin-bottom: 10px;
        }

        .label-text {
            display: block;
            font-weight: 600;
            color: var(--dark-color);
            margin-bottom: 3px;
        }

        .label-hint {
            display: block;
            font-size: 12px;
            color: var(--gray-color);
        }

        .input-wrapper {
            position: relative;
        }

        .input-icon {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--gray-color);
        }

        input[type="text"] {
            width: 100%;
            padding: 15px 15px 15px 45px;
            border: 1px solid var(--border-color);
            border-radius: var(--border-radius);
            font-size: 16px;
            transition: var(--transition);
        }

        input[type="text"]:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(255, 107, 107, 0.2);
            outline: none;
        }

        /* File Upload Area */
        .upload-area {
            position: relative;
            border: 2px dashed var(--border-color);
            border-radius: var(--border-radius);
            background: var(--light-gray);
            padding: 30px;
            text-align: center;
            transition: var(--transition);
            min-height: 200px;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .upload-area:hover {
            border-color: var(--primary-light);
            background: rgba(255, 107, 107, 0.05);
        }

        .upload-placeholder {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .upload-icon {
            width: 80px;
            height: 80px;
            background: rgba(255, 107, 107, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }

        .upload-icon i {
            color: var(--primary-color);
            font-size: 32px;
        }

        .upload-text p {
            margin: 0 0 10px;
            color: var(--dark-color);
            font-weight: 600;
        }

        .upload-text span {
            display: block;
            color: var(--gray-color);
            margin: 5px 0;
        }

        .browse-btn {
            background: var(--primary-gradient);
            color: var(--light-color);
            border: none;
            border-radius: 30px;
            padding: 10px 20px;
            font-weight: 600;
            cursor: pointer;
            box-shadow: 0 5px 15px rgba(255, 107, 107, 0.3);
            transition: var(--transition);
            margin-top: 10px;
        }

        .browse-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(255, 107, 107, 0.5);
        }

        .file-input {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            opacity: 0;
            cursor: pointer;
            z-index: 10;
        }

        /* Upload Preview */
        .upload-preview {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.95);
            display: none;
            align-items: center;
            justify-content: center;
            z-index: 5;
        }

        .upload-preview.active {
            display: flex;
        }

        .upload-preview img {
            max-width: 90%;
            max-height: 90%;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .remove-preview {
            position: absolute;
            top: 15px;
            right: 15px;
            width: 30px;
            height: 30px;
            background: var(--primary-color);
            border: none;
            border-radius: 50%;
            color: var(--light-color);
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            box-shadow: 0 3px 8px rgba(255, 107, 107, 0.3);
            transition: var(--transition);
        }

        .remove-preview:hover {
            background: #e74c3c;
            transform: scale(1.1);
        }

        /* Form Actions */
        .form-actions {
            display: flex;
            justify-content: flex-end;
            margin-top: 30px;
        }

        .btn-cancel {
            display: flex;
            align-items: center;
            padding: 12px 24px;
            background: var(--light-gray);
            border: 1px solid var(--border-color);
            border-radius: 30px;
            color: var(--dark-color);
            font-weight: 600;
            text-decoration: none;
            margin-right: 15px;
            transition: var(--transition);
        }

        .btn-cancel:hover {
            background: #e9ecef;
        }

        .btn-cancel i {
            margin-right: 8px;
        }

        .btn-upload {
            display: flex;
            align-items: center;
            padding: 12px 30px;
            background: var(--primary-gradient);
            border: none;
            border-radius: 30px;
            color: var(--light-color);
            font-weight: 600;
            cursor: pointer;
            box-shadow: 0 5px 15px rgba(255, 107, 107, 0.3);
            transition: var(--transition);
        }

        .btn-upload:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(255, 107, 107, 0.5);
        }

        .btn-upload i {
            margin-right: 8px;
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .card-header {
                flex-direction: column;
                text-align: center;
            }

            .header-icon {
                margin-right: 0;
                margin-bottom: 15px;
            }

            .form-actions {
                flex-direction: column;
            }

            .btn-cancel {
                margin-right: 0;
                margin-bottom: 15px;
                justify-content: center;
            }

            .btn-upload {
                justify-content: center;
            }
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const fileInput = document.getElementById('photo-upload');
            const uploadArea = document.getElementById('uploadArea');
            const uploadPreview = document.getElementById('uploadPreview');
            const previewImage = document.getElementById('previewImage');
            const removePreview = document.getElementById('removePreview');
            const browseButton = document.getElementById('browseButton');
            const errorClose = document.querySelector('.error-close');

            // Browse button click event
            browseButton.addEventListener('click', function() {
                fileInput.click();
            });

            // File input change event
            fileInput.addEventListener('change', function() {
                if (fileInput.files && fileInput.files[0]) {
                    const reader = new FileReader();

                    reader.onload = function(e) {
                        previewImage.src = e.target.result;
                        uploadPreview.classList.add('active');
                    };

                    reader.readAsDataURL(fileInput.files[0]);
                }
            });

            // Remove preview button click event
            removePreview.addEventListener('click', function() {
                fileInput.value = '';
                previewImage.src = '';
                uploadPreview.classList.remove('active');
            });

            // Drag and drop functionality
            uploadArea.addEventListener('dragover', function(e) {
                e.preventDefault();
                uploadArea.classList.add('drag-over');
            });

            uploadArea.addEventListener('dragleave', function() {
                uploadArea.classList.remove('drag-over');
            });

            uploadArea.addEventListener('drop', function(e) {
                e.preventDefault();
                uploadArea.classList.remove('drag-over');

                if (e.dataTransfer.files && e.dataTransfer.files[0]) {
                    fileInput.files = e.dataTransfer.files;

                    const reader = new FileReader();

                    reader.onload = function(e) {
                        previewImage.src = e.target.result;
                        uploadPreview.classList.add('active');
                    };

                    reader.readAsDataURL(e.dataTransfer.files[0]);
                }
            });

            if (errorClose) {
                errorClose.addEventListener('click', function() {
                    const errorNotification = document.querySelector('.error-notification');
                    errorNotification.style.display = 'none';
                });
            }
        });
    </script>
@endsection
