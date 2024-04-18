<?php $currentPage = "third-parties" ?>
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
                                <a href="">Manage Third parties / </a>
                                <a href="" class="ml-1"> Edit</a>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <h6 class="card-title">Manage Third parties</h6>
                                </div>
                            </div>
                            <div class="about-content">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group ">
                                            <label for="company-name" class="label">Name</label>
                                            <input type="text" class="form-control" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group ">
                                            <label for="company-name" class="label">Dependency</label>
                                            <input type="text" class="form-control" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group ">
                                            <label for="company-name" class="label">Purchase Date</label>
                                            <input type="text" class="form-control" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group ">
                                            <label for="company-name" class="label">Purchase Price</label>
                                            <input type="text" class="form-control" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group ">
                                            <label class="label">Tier</label>
                                            <input type="text" class="form-control" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group ">
                                            <label class="label">Renewal Date</label>
                                            <input type="date" class="form-control" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group ">
                                            <label class="label">Link to Renew</label>
                                            <input type="text" class="form-control" value="">
                                        </div>
                                    </div>
                                    
                                </div>
                                </form>
                                <div class="dashboard-btns">
                                    <a href="../../admin-dashboard/pages/manage-third-parties/third-parties.php" class="border-btn">Cancel</a>
                                    <a href="../../admin-dashboard/pages/manage-third-parties/third-parties.php" class="red-btn">Submit</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include '../../component/footer.php'; ?>
    
