<?php $currentPage = "manage-transcation" ?>
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
                                <h6 class="card-title">Article details</h6>
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
                        <div class="widget-content widget-content-area br-8 position-btn">
                            <div class="view-details">
                                <table>
                                    <tr class="title">
                                        <td>Article Name :</td>
                                        <td>Category :</td>
                                        <td class="description">Description :</td>
                                        <td>Tags :</td>
                                        <td class="images-h">Thumbnail image :</td>
                                        <td class="images-h">Image :</td>
                                    </tr>
                                    <tr>
                                        <td>Lorem ipsum</td>
                                        <td>Lorem ipsum</td>
                                        <td class="description">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</td>
                                        <td>Lorem ipsum</td>
                                        <td class="images-h"><img src="../src/assets/img/video.png" ></td>
                                        <td class="images-h"><img src="../src/assets/img/video.png" ></td>
                                    </tr>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  BEGIN FOOTER  -->

        <!--  END FOOTER  -->
    </div>
</div>
<!-- END MAIN CONTAINER -->

<?php include '../component/footer.php'; ?>