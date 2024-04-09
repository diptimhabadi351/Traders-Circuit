<?php $currentPage = 'profile'; ?>
<?php include('../../component/header.php') ?>
<?php include('../../component/navbar.php') ?>

<div class="profile-main main-sec p-3">

    <div class="vertical-pill">
        <div class="d-flex align-items-start">
            <div class="nav flex-column nav-pills me-5" style="width: 15%;" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <button class="nav-link active" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="true">Profile</button>
                <button class="nav-link" id="v-pills-financial-tab" data-bs-toggle="pill" data-bs-target="#v-pills-financial" type="button" role="tab" aria-controls="v-pills-financial" aria-selected="false">Financial Details</button>
                <button class="nav-link" id="v-pills-terms-tab" data-bs-toggle="pill" data-bs-target="#v-pills-terms" type="button" role="tab" aria-controls="v-pills-terms" aria-selected="false">Terms & Condition</button>
                <button class="nav-link" id="v-pills-policy-tab" data-bs-toggle="pill" data-bs-target="#v-pills-policy" type="button" role="tab" aria-controls="v-pills-policy" aria-selected="false">Privacy Policy</button>
                <button class="nav-link" id="v-pills-policy-tab" data-bs-toggle="modal" data-bs-target="#exampleModal2" type="button" role="tab" aria-controls="v-pills-policy" aria-selected="false">Logout</button>
                <button class="nav-link mt-3" id="v-pills-policy-tab" data-bs-toggle="modal" data-bs-target="#exampleModal3" type="button" role="tab" aria-controls="v-pills-policy" aria-selected="false">Delete Account</button>
            </div>
            <div class="tab-content" id="v-pills-tabContent" style="width: 85%;">
                <div class="tab-pane fade show active" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
                    <div class="prof-right-inn">
                        <div class="profile-image">
                            <div class="img-uploader-content">
                                <input type="file" class="filepond" name="filepond" accept="image/png, image/jpeg, image/gif" />
                            </div>
                        </div>
                        <div class="img-prof-content-main">
                            <div class="img-prof-content">
                                <h5 class="text-center" style="font-weight: 700;">110</h5>
                                <h5 class="m-0 text-center">Subscribed</h5>
                            </div>
                            <div class="img-prof-content">
                                <h5 class="text-center" style="font-weight: 700;">930</h5>
                                <h5 class="m-0 text-center">Subscribers</h5>
                            </div>
                            <div class="img-prof-content">
                                <h5 class="text-center" style="font-weight: 700;">4101</h5>
                                <h5 class="m-0 text-center">No of clicks</h5>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mt-3 mb-5">
                        <button class="btn red-btn">Payment : Yet to be alloted</button>
                    </div>
                    <div class="form p-4 mb-4" style="border: 1px solid #ccc;border-radius: 10px;">
                        <div class="row">
                            <h4 class="mb-3" style="font-weight: 600;">Personal Details</h4>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="fullName">First name</label>
                                    <input type="text" class="form-control mb-3" id="fullName" placeholder="Full Name" value="Jimmy">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="profession">Last name</label>
                                    <input type="text" class="form-control mb-3" id="lastNmae" placeholder="Designer" value="Turner">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="profession">Gender</label>
                                    <input type="text" class="form-control mb-3" id="gender" placeholder="Gender" value="Male">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="address">Age</label>
                                    <input type="text" class="form-control mb-3" id="age" placeholder="Address" value="22">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="location">Email address</label>
                                    <input type="text" class="form-control mb-3" id="emailAddress" placeholder="Email address">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" class="form-control mb-3" id="phone" placeholder="Write your phone number here" value="+1 (530) 555-12121">
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="form p-4 mb-4" style="border: 1px solid #ccc;border-radius: 10px;">
                        <div class="row">
                            <h4 class="mb-3" style="font-weight: 600;">Address</h4>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="fullName">Street Address</label>
                                    <input type="text" class="form-control mb-3" id="Street" placeholder="Street Name" value="Jimmy">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="profession">City</label>
                                    <input type="text" class="form-control mb-3" id="City" placeholder="City" value="Turner">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="profession">State</label>
                                    <input type="text" class="form-control mb-3" id="State" placeholder="State" value="Mumbai">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="address">Zip code</label>
                                    <input type="text" class="form-control mb-3" id="Zip" placeholder="Zip-code" value="221474">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form p-4" style="border: 1px solid #ccc;border-radius: 10px;">
                        <div class="row">
                            <h4 class="mb-3" style="font-weight: 600;">Social Media Links</h4>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="fullName">Instagram</label>
                                    <input type="text" class="form-control mb-3" id="Instagram" placeholder="Instagram" value="www.link.com">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="profession">Facebook</label>
                                    <input type="text" class="form-control mb-3" id="Facebook" placeholder="Facebook" value="www.link.com">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="profession">Youtube</label>
                                    <input type="text" class="form-control mb-3" id="Youtube" placeholder="Youtube" value="www.link.com">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="address">LinkedIn</label>
                                    <input type="text" class="form-control mb-3" id="LinkedIn" placeholder="LinkedIn" value="www.link.com">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mt-4">
                        <div class="form-group text-end">
                            <button class="btn red-btn" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Save</button>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-financial" role="tabpanel" aria-labelledby="v-pills-financial-tab" tabindex="0">
                    <div class="form p-4 mb-4" style="border: 1px solid #ccc;border-radius: 10px;">
                        <div class="row">
                            <h4 class="mb-4" style="font-weight: 600;">Pan Card</h4>
                            <div class="col-md-12">
                                <div class="form-group d-flex gap-4 mb-3">
                                    <label for="fullName" class="mr-2" style="font-weight: 600;">Enter Pan no.</label>
                                    <input type="text" class="form-control w-50" id="pan-no" value="">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mt-3">
                                    <label class="mr-2 mb-3" style="font-weight: 600;">Front Side :</label>
                                    <!-- <input type="file" name="file"> -->
                                    <div class="multiple-file-upload">
                                        <input type="file" class="filepond pan-frontside" name="filepond" id="product-images" multiple data-allow-reorder="true" data-max-file-size="3MB" data-max-files="1">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mt-3">
                                    <label class="mr-2" style="font-weight: 600;">Back Side :</label>
                                    <!-- <input type="file" name="file"> -->
                                    <div class="multiple-file-upload">
                                        <input type="file" class="filepond pan-backside" name="filepond" id="backside" multiple data-allow-reorder="true" data-max-file-size="3MB" data-max-files="5">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="form p-4 mb-4" style="border: 1px solid #ccc;border-radius: 10px;">
                        <div class="row">
                            <h4 class="mb-4" style="font-weight: 600;">Aadhaar Card</h4>
                            <div class="col-md-12">
                                <div class="form-group d-flex gap-4 mb-3">
                                    <label for="fullName" class="mr-2" style="font-weight: 600;">Enter Aadhaar no.</label>
                                    <input type="text" class="form-control w-50" id="pan-no" value="">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mt-3">
                                    <label class="mr-2 mb-3" style="font-weight: 600;">Front Side :</label>
                                    <!-- <input type="file" name="file"> -->
                                    <div class="multiple-file-upload">
                                        <input type="file" class="filepond aadhar-frontside" name="filepond" id="backside" multiple data-allow-reorder="true" data-max-file-size="3MB" data-max-files="5">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mt-3">
                                    <label class="mr-2" style="font-weight: 600;">Back Side :</label>
                                    <!-- <input type="file" name="file"> -->
                                    <div class="multiple-file-upload">
                                        <input type="file" class="filepond aadhar-backside" name="filepond" id="backside" multiple data-allow-reorder="true" data-max-file-size="3MB" data-max-files="5">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form p-4 mb-4" style="border: 1px solid #ccc;border-radius: 10px;">
                        <div class="row">
                            <h4 class="mb-3" style="font-weight: 600;">Banking Details</h4>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="fullName">Bank Name</label>
                                    <input type="text" class="form-control mb-3" id="bank" value="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="fullName">Account Number</label>
                                    <input type="text" class="form-control mb-3" id="ac-no" value="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="fullName">IFSC Code</label>
                                    <input type="text" class="form-control mb-3" id="bank" value="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="fullName">Upload Cancelled Cheque</label>
                                    <!-- <input type="file" name="file" class="form-control mb-3" id="cheque" value=""> -->
                                    <div class="multiple-file-upload">
                                        <input type="file" class="filepond cheque" name="filepond" id="backside" multiple data-allow-reorder="true" data-max-file-size="3MB" data-max-files="5">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="form p-4" style="border: 1px solid #ccc;border-radius: 10px;">
                        <div class="row">
                            <h4 class="mb-3" style="font-weight: 600;">Add GST no (if any)*</h4>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="fullName">GST no.</label>
                                    <input type="text" class="form-control mb-3" id="GST" placeholder="Instagram" value="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mt-4">
                        <div class="form-group text-end">
                            <button class="btn red-btn" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Save</button>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-terms" role="tabpanel" aria-labelledby="v-pills-terms-tab" tabindex="0">
                    <div class="reff-view">
                        <div class="row">
                            <div class="col-md-4 left">
                                <h6 class="card-title mt-2 mb-4">
                                    <a href="inner-page/profile.php">
                                        <img src="../src/assets/img/arrow-left.svg" alt="">
                                    </a>
                                    Terms and condition
                                </h6>
                            </div>
                        </div>
                        <p>Vorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                        <p>Vorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                        <p>Vorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-policy" role="tabpanel" aria-labelledby="v-pills-policy-tab" tabindex="0">
                    <div class="reff-view">
                        <div class="row">
                            <div class="col-md-4 left">
                                <h6 class="card-title mt-2 mb-4">
                                    <a href="inner-page/profile.php">
                                        <img src="../src/assets/img/arrow-left.svg" alt="">
                                    </a>
                                    Privacy Policy
                                </h6>
                            </div>
                        </div>
                        <p>Vorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                        <p>Vorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                        <p>Vorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h2 class="modal-title text-center fs-5" id="exampleModalLabel">Are you sure you want to log out?</h2>
            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="mod-btn grey-btn" data-bs-dismiss="modal">Yes</button>
                <button type="button" class=" mod-btn red-btn">No</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h2 class="modal-title text-center fs-5" id="exampleModalLabel">Are you sure you want to send the admin an account deletion request?</h2>
            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="mod-btn grey-btn" data-bs-dismiss="modal">Yes</button>
                <button type="button" class=" mod-btn red-btn">No</button>
            </div>
        </div>
    </div>
</div>
<?php include('../../component/footer.php') ?>

<script>
    FilePond.registerPlugin(
        FilePondPluginImagePreview,
        FilePondPluginImageExifOrientation,
        FilePondPluginFileValidateSize,
    );
    FilePond.create(
        document.querySelector('.pan-frontside')
    );
</script>
<script>
    FilePond.registerPlugin(
        FilePondPluginImagePreview,
        FilePondPluginImageExifOrientation,
        FilePondPluginFileValidateSize,
    );
    FilePond.create(
        document.querySelector('.pan-backside')
    );
</script>
<script>
    FilePond.registerPlugin(
        FilePondPluginImagePreview,
        FilePondPluginImageExifOrientation,
        FilePondPluginFileValidateSize,
    );
    FilePond.create(
        document.querySelector('.aadhar-frontside')
    );
</script>
<script>
    FilePond.registerPlugin(
        FilePondPluginImagePreview,
        FilePondPluginImageExifOrientation,
        FilePondPluginFileValidateSize,
    );
    FilePond.create(
        document.querySelector('.aadhar-backside')
    );
</script>
<script>
    FilePond.registerPlugin(
        FilePondPluginImagePreview,
        FilePondPluginImageExifOrientation,
        FilePondPluginFileValidateSize,
    );
    FilePond.create(
        document.querySelector('.cheque')
    );
</script>