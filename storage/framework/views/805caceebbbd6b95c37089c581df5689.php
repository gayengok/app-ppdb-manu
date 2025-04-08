

<?php $__env->startSection('content'); ?>
    <div class="edit-container">
        <div class="edit-card">
            <div class="card-header">
                <div class="header-icon">
                    <i class="fas fa-edit"></i>
                </div>
                <div class="header-text">
                    <h3>Edit Photo</h3>
                </div>
            </div>

            <div class="card-body">
                
                <?php if($errors->any()): ?>
                    <div class="error-notification">
                        <div class="error-icon">
                            <i class="fas fa-exclamation-circle"></i>
                        </div>
                        <div class="error-content">
                            <h4>Update Failed</h4>
                            <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                            <button type="button" class="error-close">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                <?php endif; ?>

                
                <form action="<?php echo e(route('photo.update', $photo->id)); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div class="form-group">
                        <label for="title">
                            <span class="label-text">Photo Title</span>
                            <span class="label-hint">Update the name of your masterpiece</span>
                        </label>
                        <div class="input-wrapper">
                            <span class="input-icon"><i class="fas fa-heading"></i></span>
                            <input type="text" name="title" id="title" value="<?php echo e(old('title', $photo->title)); ?>"
                                required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>
                            <span class="label-text">Current Photo</span>
                            <span class="label-hint">Your existing masterpiece</span>
                        </label>

                        <div class="current-photo">
                            <img src="<?php echo e(asset('storage/' . $photo->photo_path)); ?>" alt="<?php echo e($photo->title); ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="photo-upload">
                            <span class="label-text">Upload New Photo</span>
                            <span class="label-hint">Optional - Select a new high-quality image (JPG, PNG)</span>
                        </label>

                        <div class="upload-area" id="uploadArea">
                            <input type="file" name="photo" id="photo-upload" accept="image/*" class="file-input">
                            <div class="upload-placeholder">
                                <div class="upload-icon">
                                    <i class="fas fa-image"></i>
                                </div>
                                <div class="upload-text">
                                    <p>Drag & drop your new photo here</p>
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
                        <a href="<?php echo e(route('photo.index')); ?>" class="btn-cancel">
                            <i class="fas fa-arrow-left"></i>
                            <span>Back to Gallery</span>
                        </a>
                        <button type="submit" class="btn-upload">
                            <i class="fas fa-save"></i>
                            <span>Update Photo</span>
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

        .edit-container {
            max-width: 750px;
            margin: 40px auto;
            padding: 0 20px;
            font-family: 'Poppins', sans-serif;
        }

        .edit-card {
            background: var(--light-color);
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--card-shadow);
            transition: var(--transition);
        }

        .edit-card:hover {
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
            background: var(--secondary-gradient);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 20px;
            box-shadow: 0 8px 15px rgba(108, 92, 231, 0.3);
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
            border-color: var(--secondary-color);
            box-shadow: 0 0 0 3px rgba(108, 92, 231, 0.2);
            outline: none;
        }

        /* Current Photo */
        .current-photo {
            background: var(--light-gray);
            border-radius: var(--border-radius);
            padding: 20px;
            text-align: center;
            border: 1px solid var(--border-color);
        }

        .current-photo img {
            max-width: 100%;
            max-height: 300px;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
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
            border-color: var(--secondary-light);
            background: rgba(108, 92, 231, 0.05);
        }

        .upload-placeholder {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .upload-icon {
            width: 80px;
            height: 80px;
            background: rgba(108, 92, 231, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }

        .upload-icon i {
            color: var(--secondary-color);
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
            background: var(--secondary-gradient);
            color: var(--light-color);
            border: none;
            border-radius: 30px;
            padding: 10px 20px;
            font-weight: 600;
            cursor: pointer;
            box-shadow: 0 5px 15px rgba(108, 92, 231, 0.3);
            transition: var(--transition);
            margin-top: 10px;
        }

        .browse-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(108, 92, 231, 0.5);
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
            background: var(--secondary-color);
            border: none;
            border-radius: 50%;
            color: var(--light-color);
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            box-shadow: 0 3px 8px rgba(108, 92, 231, 0.3);
            transition: var(--transition);
        }

        .remove-preview:hover {
            background: #5549c9;
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
            background: var(--secondary-gradient);
            border: none;
            border-radius: 30px;
            color: var(--light-color);
            font-weight: 600;
            cursor: pointer;
            box-shadow: 0 5px 15px rgba(108, 92, 231, 0.3);
            transition: var(--transition);
        }

        .btn-upload:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(108, 92, 231, 0.5);
        }

        .btn-upload i {
            margin-right: 8px;
        }

        @media (max-width: 768px) {
            .card-header {
                padding: 20px;
                flex-direction: column;
                text-align: center;
            }

            .header-icon {
                margin-right: 0;
                margin-bottom: 15px;
            }

            .card-body {
                padding: 20px;
            }

            .form-actions {
                flex-direction: column;
                gap: 15px;
            }

            .btn-cancel,
            .btn-upload {
                width: 100%;
                justify-content: center;
                margin-right: 0;
            }

            .upload-area {
                padding: 20px;
            }

            .upload-icon {
                width: 60px;
                height: 60px;
            }
        }

        @media (max-width: 480px) {
            .edit-container {
                padding: 0 10px;
                margin: 20px auto;
            }

            .header-text h3 {
                font-size: 20px;
            }

            input[type="text"] {
                padding: 12px 12px 12px 40px;
                font-size: 14px;
            }

            .upload-text p {
                font-size: 14px;
            }

            .browse-btn {
                padding: 8px 16px;
                font-size: 14px;
            }
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Elements
            const uploadArea = document.getElementById('uploadArea');
            const fileInput = document.getElementById('photo-upload');
            const browseButton = document.getElementById('browseButton');
            const uploadPreview = document.getElementById('uploadPreview');
            const previewImage = document.getElementById('previewImage');
            const removePreview = document.getElementById('removePreview');
            const errorClose = document.querySelector('.error-close');

            uploadArea.addEventListener('dragover', function(e) {
                e.preventDefault();
                uploadArea.classList.add('active');
            });

            uploadArea.addEventListener('dragleave', function() {
                uploadArea.classList.remove('active');
            });

            uploadArea.addEventListener('drop', function(e) {
                e.preventDefault();
                uploadArea.classList.remove('active');

                if (e.dataTransfer.files.length) {
                    handleFiles(e.dataTransfer.files);
                }
            });

            fileInput.addEventListener('change', function() {
                if (this.files.length) {
                    handleFiles(this.files);
                }
            });

            browseButton.addEventListener('click', function() {
                fileInput.click();
            });

            removePreview.addEventListener('click', function() {
                uploadPreview.classList.remove('active');
                fileInput.value = '';
            });

            if (errorClose) {
                errorClose.addEventListener('click', function() {
                    const errorNotification = this.closest('.error-notification');
                    if (errorNotification) {
                        errorNotification.style.display = 'none';
                    }
                });
            }


            function handleFiles(files) {
                const file = files[0];

                if (!file.type.match('image.*')) {
                    alert('Please select an image file (JPG, PNG, etc.)');
                    return;
                }

                if (file.size > 5 * 1024 * 1024) {
                    alert('Please select an image smaller than 5MB');
                    return;
                }

                const reader = new FileReader();

                reader.onload = function(e) {
                    previewImage.src = e.target.result;
                    uploadPreview.classList.add('active');
                };

                reader.readAsDataURL(file);
            }
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.dashboard.dashboard.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PROJECT WEB SKRIPSI\PPDB_MA_NU_LU\resources\views/backend/gallery/photo/edit.blade.php ENDPATH**/ ?>