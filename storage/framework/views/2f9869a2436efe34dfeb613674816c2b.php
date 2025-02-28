


<?php $__env->startSection('content'); ?>
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

                        
                        <?php if($errors->any()): ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Oops!</strong> There were some problems with your input.
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        <?php endif; ?>

                        <div class="card-body">
                            <form action="<?php echo e(route('articles.update', $artikel->id)); ?>" method="POST"
                                enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PUT'); ?>

                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="title">Title</label>
                                            <input type="text" class="form-control" id="title" name="title"
                                                value="<?php echo e(old('title', $artikel->title)); ?>" required>
                                            <?php if($errors->has('title')): ?>
                                                <div class="alert alert-danger mt-1">
                                                    <?php echo e($errors->first('title')); ?>

                                                </div>
                                            <?php endif; ?>
                                        </div>

                                        <div class="form-group">
                                            <label for="image">Upload New Image (Optional)</label>
                                            <input type="file" class="form-control" id="image" name="image"
                                                accept="image/*">
                                            <?php if($artikel->image): ?>
                                                <p>Current image: <img src="<?php echo e(asset('storage/' . $artikel->image)); ?>"
                                                        alt="Current Image" width="100"></p>
                                            <?php endif; ?>
                                            <?php if($errors->has('image')): ?>
                                                <div class="alert alert-danger mt-1">
                                                    <?php echo e($errors->first('image')); ?>

                                                </div>
                                            <?php endif; ?>
                                        </div>

                                        <div class="form-group">
                                            <label for="content">Content</label>
                                            <textarea id="content" name="content" class="form-control" rows="10" required><?php echo e(old('content', $artikel->content)); ?></textarea>
                                            <?php if($errors->has('content')): ?>
                                                <div class="alert alert-danger mt-1">
                                                    <?php echo e($errors->first('content')); ?>

                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="col-md-4">

                                        <div class="form-group">
                                            <label for="author">Author</label>
                                            <input type="text" class="form-control" id="author" name="author"
                                                value="<?php echo e(old('author', $artikel->author)); ?>" required>
                                            <?php if($errors->has('author')): ?>
                                                <div class="alert alert-danger mt-1">
                                                    <?php echo e($errors->first('author')); ?>

                                                </div>
                                            <?php endif; ?>
                                        </div>


                                        <div class="form-group">
                                            <label for="short_description">Deskripsi Singkat</label>
                                            <textarea class="form-control" id="short_description" name="short_description" rows="3" required><?php echo e(old('short_description', $artikel->short_description)); ?></textarea>
                                            <?php if($errors->has('short_description')): ?>
                                                <div class="alert alert-danger mt-1">
                                                    <?php echo e($errors->first('short_description')); ?>

                                                </div>
                                            <?php endif; ?>
                                        </div>

                                        <div class="form-group">
                                            <label for="published_date">Published Date</label>
                                            <input type="date" class="form-control" id="published_date"
                                                name="published_date"
                                                value="<?php echo e(old('published_date', $artikel->published_date ? $artikel->published_date->format('Y-m-d') : '')); ?>"
                                                required>
                                            <?php if($errors->has('published_date')): ?>
                                                <div class="alert alert-danger mt-1">
                                                    <?php echo e($errors->first('published_date')); ?>

                                                </div>
                                            <?php endif; ?>
                                        </div>


                                        <div class="form-group">
                                            <label for="status">Status</label>
                                            <select class="form-control" id="status" name="status" required>
                                                <option value="Published"
                                                    <?php echo e(old('status', $artikel->status) == 'Published' ? 'selected' : ''); ?>>
                                                    Published</option>
                                                <option value="Draft"
                                                    <?php echo e(old('status', $artikel->status) == 'Draft' ? 'selected' : ''); ?>>
                                                    Draft
                                                </option>
                                            </select>
                                            <?php if($errors->has('status')): ?>
                                                <div class="alert alert-danger mt-1">
                                                    <?php echo e($errors->first('status')); ?>

                                                </div>
                                            <?php endif; ?>
                                        </div>

                                    </div>
                                </div>

                                <div class="form-group mt-3">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-save"></i> Update
                                    </button>
                                    <a href="<?php echo e(route('news.berita')); ?>" class="btn btn-secondary">
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.dashboard.dashboard.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PROJECT WEB SKRIPSI\PPDB_MA_NU_LU\resources\views/backend/news/edit-artikel.blade.php ENDPATH**/ ?>