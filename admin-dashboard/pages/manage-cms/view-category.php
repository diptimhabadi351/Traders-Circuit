<?php $currentPage = "manage-cms" ?>
<?php include('../../component/header.php'); ?>
<?php include('../../component/sidebar.php'); ?>

<div id="load_screen">
    <div class="loader">
        <div class="loader-content">
            <div class="spinner-grow align-self-center"></div>
        </div>
    </div>
</div>

<div class="main-container" id="container">
    <div class="overlay"></div>
    <div class="search-overlay"></div>
    <div id="content" class="main-content">
        <div class="layout-px-spacing">
            <div class="middle-content container-xxl p-0">
                <div class="row layout-top-spacing ">
                    <div class="top-tabel">
                    </div>
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-8 position-btn">
                            <div class="breadcrumb">
                                <a href="">Manage CMS / </a>
                                <a href="" class="ml-1"> Manage Categories / </a>
                                <a href="" class="ml-1"> View</a>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <h6 class="card-title">Manage Categories</h6>
                                </div>
                            </div>
                            <div class="about-content">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group ">
                                            <label for="company-name" class="label">Category Name</label>
                                            <input type="text" class="form-control" id="company-name" value="Account Management" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group ">
                                            <label for="company-name" class="label">Date</label>
                                            <input type="date" class="form-control" id="company-name" value="19/03/2024" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group ">
                                            <label for="company-name" class="label">Category Description</label>
                                            <textarea class="form-control" readonly>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, Lorem Ipsum has been the industry's </textarea>
                                        </div>
                                    </div>
                                </div>
                                </form>
                                <div class="dashboard-btns">
                                <a href="../../admin-dashboard/pages/manage-cms/manage-categories.php" class="border-btn">Cancel</a>
                                    <a href="../../admin-dashboard/pages/manage-cms/manage-categories.php" class="reds-btns">Submit</a>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include '../../component/footer.php'; ?>
    <script>
        CKEDITOR.replace("ckplot");
        CKEDITOR.instances["ckplot"].setData("")
    </script>
    <script>
        FilePond.registerPlugin(
            FilePondPluginImagePreview,
            FilePondPluginImageExifOrientation,
            FilePondPluginFileValidateSize,
        );
        FilePond.create(
            document.querySelector('.filepond')
        );
    </script>