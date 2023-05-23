<?php
session_start();
?>
<?php include "./connection/config.php" ?>




<?php

if (isset($_GET['id'])) {


    $sql = " SELECT * from record_tbl where record_id = '$_GET[id]'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
?>

        <div class="modal fade" id="myModal">

            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Visit Request</h5>
                        <button type="button" class="close" data-dismiss="modal" onclick="return location.reload()">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="white-box">
                            <form class="form-horizontal form-material" method="POST" enctype="multipart/form-data">
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Record Type</label>
                                    <input type="text" placeholder="Purpose..." name="purpose" class="form-control" />
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Student ID</label>
                                    <input type="text" placeholder="2023-13612" value="<?= $_SESSION['school_id'] ?>" name="student_id" class="form-control" />
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Visit Date</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="date" class="form-control p-0 border-0" name="visit_date" required name="date" />
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Record ID</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="text" class="form-control p-0 border-0" value="<?= $row['record_id'] ?>" required name="record_id" />
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <div class="col-sm-12">
                                        <input type="submit" name="submit" required class="btn btn-success" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php
    }
}
?>