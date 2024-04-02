<?php $currentPage = "manage-cms" ?>
<?php include('../component/header.php'); ?>
<?php include('../component/sidebar.php'); ?>


<!-- BEGIN LOADER -->
<div id="load_screen">
    <div class="loader">
        <div class="loader-content">
            <div class="spinner-grow align-self-center"></div>
        </div>
    </div>
</div>
<!--  END LOADER -->
<!--  BEGIN MAIN CONTAINER  -->
<div class="main-container" id="container">
    <div class="overlay"></div>
    <div class="search-overlay"></div>
    <div id="content" class="main-content">
        <div class="layout-px-spacing">
            <div class="middle-content container-xxl p-0">
                <div class="row layout-top-spacing ">
                    <div class="top-tabel">
                        <div class="row">
                            <div class="col-md-4 left">
                                <h6 class="card-title">Add Article Details</h6>
                            </div>
                            <div class="col-md-8 float-right">
                                <a class="extra-btn" href="manage-cms.php">
                                    <img class="back-btn" src="../src/assets/img/left-arrow.svg">
                                    Back
                                </a>
                            </div>
                        </div>


                    </div>
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-8 position-btn h-10">
                            <div class="view-details Article">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group ">
                                            <label for="company-name" class="label">Article Name</label>
                                            <input type="text" class="form-control" id="company-name" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="category" class="label">Select category</label>
                                            <select name="category" class="form-select category" id="category">
                                                <option value=""></option>
                                                <option value="">Option 1</option>
                                                <option value="">Option 2</option>
                                                <option value="">Option 3</option>
                                                <option value="">Option 4</option>
                                                <option value="">Option 5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1" class="label">Decription</label>
                                            <textarea class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1" class="label">Article link</label>
                                            <input type="url" name='' class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="label">Tags</label>
                                            <input name='basic' class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6"></div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="label">Thumbnail image</label>
                                            <div class="image-preview-container">
                                                <div class="preview">
                                                    <img id="image1" />
                                                </div>
                                                <label for="file-upload1">Upload Image</label>
                                                <input class="form-control" type="file" id="file-upload1"
                                                    accept="image/*" onchange="previewImage1(event);" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="label">Image</label>
                                            <div class="image-preview-container">
                                                <div class="preview">
                                                    <img id="image2" />
                                                </div>
                                                <label for="file-upload2">Upload Image</label>
                                                <input class="form-control" type="file" id="file-upload2"
                                                    accept="image/*" onchange="previewImage2(event);" />
                                            </div>
                                        </div>
                                    </div>

                                    <a href="" class="download-btn">Save</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php include '../component/footer.php'; ?>
            <script>
                const previewImage1 = (event) => {
                    const imageFiles = event.target.files;
                    const imageFilesLength = imageFiles.length;
                    if (imageFilesLength > 0) {
                        const imageSrc = URL.createObjectURL(imageFiles[0]);
                        const imagePreviewElement = document.querySelector("#image1");
                        imagePreviewElement.src = imageSrc;
                        imagePreviewElement.style.display = "block";
                    }
                };

                const previewImage2 = (event) => {
                    const imageFiles = event.target.files;
                    const imageFilesLength = imageFiles.length;
                    if (imageFilesLength > 0) {
                        const imageSrc = URL.createObjectURL(imageFiles[0]);
                        const imagePreviewElement = document.querySelector("#image2");
                        imagePreviewElement.src = imageSrc;
                        imagePreviewElement.style.display = "block";
                    }
                };

                // cka-editor
                CKEDITOR.replace('editor', {
                    skin: 'moono',
                    enterMode: CKEDITOR.ENTER_BR,
                    shiftEnterMode: CKEDITOR.ENTER_P,
                    toolbar: [{ name: 'basicstyles', groups: ['basicstyles'], items: ['Bold', 'Italic', 'Underline', "-", 'TextColor', 'BGColor'] },
                    { name: 'styles', items: ['Format', 'Font', 'FontSize'] },
                    { name: 'scripts', items: ['Subscript', 'Superscript'] },
                    { name: 'justify', groups: ['blocks', 'align'], items: ['JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock'] },
                    { name: 'paragraph', groups: ['list', 'indent'], items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent'] },
                    { name: 'links', items: ['Link', 'Unlink'] },
                    { name: 'insert', items: ['Image'] },
                    { name: 'spell', items: ['jQuerySpellChecker'] },
                    { name: 'table', items: ['Table'] }
                    ],
                });

// cka-editor
            </script>