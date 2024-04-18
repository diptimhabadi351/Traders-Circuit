<?php $currentPage = "manage-sub-admin" ?>
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
                                <a href="">Manage Sub Admin / </a>
                                <a href="" class="ml-1"> Edit Sub Admin</a>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <h6 class="card-title">Sub Admin</h6>
                                </div>
                            </div>
                            <div class="about-content">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="" class="label">Name</label>
                                            <input type="text" class="form-control" id="" value="Vinodhini Vijayaraj" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6"></div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="" class="label">Email</label>
                                            <input type="email" class="form-control" id="" value="vinodhini@gmail.com" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6"></div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="" class="label">Password</label>
                                            <input type="password" class="form-control" id="" value="ffsa*****" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6"></div>
                                    <div class="col-md-9">
                                        <div class="form-group d-flex">
                                            <label for="" class="label mr-4">Permission</label>
                                            <div class="checkboxes">
                                                <div class="form-group ">
                                                    <input type="checkbox" class="form-control" id="" value="" checked readonly>
                                                    <label for="" class="label">Manage Users</label>
                                                </div>
                                                <div class="form-group ">
                                                    <input type="checkbox" class="form-control" id="" value="" readonly>
                                                    <label for="" class="label">Manage Products</label>
                                                </div>
                                                <div class="form-group ">
                                                    <input type="checkbox" class="form-control" id="" value="" readonly>
                                                    <label for="" class="label">Manage CMS</label>
                                                </div>
                                                <div class="form-group ">
                                                    <input type="checkbox" class="form-control" id="" value="" readonly>
                                                    <label for="" class="label">Manage Recommendation</label>
                                                </div>
                                                <div class="form-group ">
                                                    <input type="checkbox" class="form-control" id="" value="" readonly>
                                                    <label for="" class="label">Manage Affiliate</label>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                </form>
                                <div class="dashboard-btns">
                                    <a href="../../admin-dashboard/pages/manage-sub-admin/manage-sub-admin.php" class="red-btn">Back</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include '../../component/footer.php'; ?>
    