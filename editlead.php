<?php include('./constant/layout/head.php'); ?>
<?php include('./constant/layout/header.php'); ?>

<?php include('./constant/layout/sidebar.php'); ?>

<?php // include('./constant/connect.php');

$sql = "SELECT * from `inquiry_data` where  id='" . $_GET['id'] . "'";
$result = $connect->query($sql)->fetch_assoc();  ?>

<div class="page-wrapper">

    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Edit Lead Management</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="javascript:void(0)">Home</a>
                </li>
                <li class="breadcrumb-item active">
                    Edit Lead
                </li>
            </ol>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8" style="margin-left: 10%;">
                <div class="card">
                    <div class="card-title">
                    </div>
                    <div id="add-brand-messages"></div>
                    <div class="card-body">
                        <div class="input-states">
                            <form class="row" method="POST" id="submitBrandForm" action="php_action/editLead.php?id=<?php echo $_GET['id']; ?>" enctype="multipart/form-data">
                                <div class="form-group col-md-6">
                                    <label class="control-label">Name</label>
                                    <input type="text" class="form-control" id="leadName" placeholder="Lead Name" name="name" value="<?php echo $result['name'];  ?>" required="" pattern="^[a-z A-z]+$" />
                                </div>
                                <div class="form-group col-md-6">
                                    <label class=" control-label">Phone</label>
                                    <input type="text" class="form-control" id="categoriesName" placeholder="Phone" name="phone" value="<?php echo $result['phone'];  ?>" required="" pattern="^[0-9]+$" />
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="control-label">Email</label>
                                    <input type="text" class="form-control" id="categoriesName" value="<?php echo $result['email'];  ?>" placeholder="Email" name="email" required="" />
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="control-label">City</label>
                                    <input type="text" class="form-control" id="categoriesName" value="<?php echo $result['location']; ?>" placeholder="City" name="location" />
                                </div>
                                <!-- <div class="form-group col-md-6">
                                    <label class="control-label">Interested In</label>
                                    <input type="text" class="form-control" id="categoriesName" placeholder="Interested In" name="interest" value="<?php // echo $result['interest'];  ?>" required="" />
                                </div> -->
                                <div class="form-group col-md-6">
                                    <label class="control-label">Message</label>
                                    <textarea class="form-control" id="message" name="message" rows="10" cols="10"><?= $result['message'] ?></textarea>
                                </div>
                                <!-- <div class="form-group col-md-6">
                                    <label class=" control-label">Source</label>
                                    <select class="form-control" id="categoriesStatus" name="source">
                                        <option value="Call" <?php
                                                                if ($result['source'] == "Call") {
                                                                    echo "selected";
                                                                }
                                                                ?>>Call</option>
                                        <option value="Organic" <?php
                                                                if ($result['source'] == "Organic") {
                                                                    echo "selected";
                                                                }
                                                                ?>>Organic</option>
                                        <option value="SocialMedia" <?php
                                                                    if ($result['source'] == "SocialMedia") {
                                                                        echo "selected";
                                                                    }
                                                                    ?>>Social Media</option>
                                        <option value="Website" <?php
                                                                if ($result['source'] == "Website") {
                                                                    echo "selected";
                                                                }
                                                                ?>>Website</option>
                                        <option value="Campaign" <?php
                                                                    if ($result['source'] == "Campaign") {
                                                                        echo "selected";
                                                                    }
                                                                    ?>>Campaign</option>
                                    </select>
                                </div> -->
                                <div class="form-group col-md-6">
                                    <label class=" control-label">Status</label>
                                    <select class="form-control" id="categoriesStatus" name="status">
                                        <option value="1" <?php
                                                            if ($result['status'] == 1) {
                                                                echo "selected";
                                                            }
                                                            ?>>New</option>
                                        <option value="2" <?php
                                                            if ($result['status'] == 2) {
                                                                echo "selected";
                                                            }
                                                            ?>>Working</option>

                                        <option value="3" <?php
                                                            if ($result['status'] == 3) {
                                                                echo "selected";
                                                            }
                                                            ?>>Contacted</option>
                                        <option value="4" <?php if ($result['status'] == 4) {
                                                                echo "selected";
                                                            }
                                                            ?>>Qualified</option>
                                        <option value="5" <?php
                                                            if ($result['status'] == 5) {
                                                                echo "selected";
                                                            }
                                                            ?>>Failed</option>
                                        <option value="6" <?php
                                                            if ($result['status'] == 6) {
                                                                echo "selected";
                                                            }
                                                            ?>>Closed</option>
                                    </select>
                                </div>
                                <!-- code -->
                                <div class="form-group col-md-6">
                                    <label class="control-label">Follow ups</label>
                                    <select class="form-control" id="follow_ups" name="follow_ups">
                                        <option value="1" <?php
                                                            if ($result['follow_ups'] == 1) {
                                                                echo "selected";
                                                            }
                                                            ?>>1</option>
                                        <option value="2" <?php
                                                            if ($result['follow_ups'] == 2) {
                                                                echo "selected";
                                                            }
                                                            ?>>2</option>

                                        <option value="3" <?php
                                                            if ($result['follow_ups'] == 3) {
                                                                echo "selected";
                                                            }
                                                            ?>>3</option>
                                        <option value="4" <?php if ($result['follow_ups'] == 4) {
                                                                echo "selected";
                                                            }
                                                            ?>>4</option>
                                        <option value="5" <?php
                                                            if ($result['follow_ups'] == 5) {
                                                                echo "selected";
                                                            }
                                                            ?>>5</option>
                                        <option value="6" <?php
                                                            if ($result['follow_ups'] == 6) {
                                                                echo "selected";
                                                            }
                                                            ?>>6</option>
                                        <option value="7" <?php
                                                            if ($result['follow_ups'] == 7) {
                                                                echo "selected";
                                                            }
                                                            ?>>7</option>
                                        <option value="8" <?php
                                                            if ($result['follow_ups'] == 8) {
                                                                echo "selected";
                                                            }
                                                            ?>>8</option>
                                        <option value="9" <?php
                                                            if ($result['follow_ups'] == 9) {
                                                                echo "selected";
                                                            }
                                                            ?>>9</option>
                                        <option value="10" <?php
                                                            if ($result['follow_ups'] == 10) {
                                                                echo "selected";
                                                            }
                                                            ?>>10</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="control-label">Percentage</label>
                                    <select class="form-control" id="percentage" name="percentage">
                                        <option value="10" <?php
                                                            if ($result['percentage'] == 10) {
                                                                echo "selected";
                                                            }
                                                            ?>>10%</option>
                                        <option value="20" <?php
                                                            if ($result['percentage'] == 20) {
                                                                echo "selected";
                                                            }
                                                            ?>>20%</option>

                                        <option value="30" <?php
                                                            if ($result['percentage'] == 30) {
                                                                echo "selected";
                                                            }
                                                            ?>>30%</option>
                                        <option value="40" <?php if ($result['percentage'] == 40) {
                                                                echo "selected";
                                                            }
                                                            ?>>40%</option>
                                        <option value="50" <?php
                                                            if ($result['percentage'] == 50) {
                                                                echo "selected";
                                                            }
                                                            ?>>50%</option>
                                        <option value="60" <?php
                                                            if ($result['percentage'] == 60) {
                                                                echo "selected";
                                                            }
                                                            ?>>60%</option>
                                        <option value="70" <?php
                                                            if ($result['percentage'] == 70) {
                                                                echo "selected";
                                                            }
                                                            ?>>70%</option>
                                        <option value="80" <?php
                                                            if ($result['percentage'] == 80) {
                                                                echo "selected";
                                                            }
                                                            ?>>80%</option>
                                        <option value="90" <?php
                                                            if ($result['percentage'] == 90) {
                                                                echo "selected";
                                                            }
                                                            ?>>90%</option>
                                        <option value="100" <?php
                                                            if ($result['percentage'] == 100) {
                                                                echo "selected";
                                                            }
                                                            ?>>100%</option>
                                    </select>
                                </div>
                                <!-- code -->
                                <div class="form-group col-md-12">
                                    <button type="submit" name="create" id="createCategoriesBtn" class="btn btn-primary btn-flat m-b-30 m-t-30">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--  Author Name: Mayuri K. = www.mayurik.com
 for any PHP, Codeignitor or Laravel work contact me at mayuri.infospace@gmail.com  -->
        <?php include('./constant/layout/footer.php'); ?>