<?php
include_once 'includes/header.php';
include_once '../includes/dispatcher.php';
$student = new student_method();
if (isset($_POST['insert'])) {

    $student->std_name = $_POST['std_name'];
    $student->std_mobile = $_POST['std_mobile'];
    $student->std_email = $_POST['std_email'];
    $student->std_address = $_POST['std_address'];
    $student->std_age = $_POST['std_age'];
    $student->std_gender = $_POST['std_gender'];
    $student->std_dob = $_POST['std_dob'];
    $student->std_ref_mobile = $_POST['std_ref_mobile'];
    $student->std_notes = $_POST['std_notes'];

    if ($_FILES['std_photo']['error'] == 0 && $_FILES['std_id_copy']['error'] == 0) {
        //Student Photo 
        $std_name = $_FILES['std_photo']['name'];
        $std_tmp = $_FILES['std_photo']['tmp_name'];
        $path = "../images/students_photo/";
        move_uploaded_file($std_tmp, $path . $std_name);

        // Student ID Copy
        $id_name = $_FILES['std_id_copy']['name'];
        $id_tmp = $_FILES['std_id_copy']['tmp_name'];
        $path = "../images/students_id_copy/";
        move_uploaded_file($id_tmp, $path . $id_name);
        $student->std_photo = $id_name;
        $student->std_id_copy = $id_name;
    }
    if ($student->insertStudent() == true) {
        echo "<script type='text/javascript'>window.location.href = 'manage_student.php?insert=true';</script>";
        exit();
    }
}
?>

<body>
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">Student</div>
                            <div class="card-body">
                                <div class="card-title">
                                    <h3 class="text-center title-2">Manage student</h3>
                                </div>
                                <hr>
                                <form action="" method="post" novalidate="novalidate" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="cc-payment" class="control-label mb-1">Student Name</label>
                                        <input id="cc-pament" name="std_name" type="text" class="form-control" aria-required="true" aria-invalid="false>
                                               </div>
                                               <div class="form-group has-success " >
                                               <label for="cc-name" class="control-label mb-1">Student Mobile </label>
                                        <input id="cc-name" name="std_mobile" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                               autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                                        <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="cc-number" class="control-label mb-1">Student Email</label>
                                        <input id="cc-number" name="std_email" type="email" class="form-control cc-number identified visa" value="" data-val="true"
                                               data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                               autocomplete="cc-number">
                                        <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                    </div>

                                    <div class="form-group has-success">
                                        <label for="cc-name" class="control-label mb-1">Student Photo </label>
                                        <input id="cc-name" name="std_photo" type="file" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                               autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                                        <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                    </div>

                                    <div class="form-group has-success">
                                        <label for="cc-name" class="control-label mb-1">Student ID Photo</label>
                                        <input id="cc-name" name="std_id_copy" type="file" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                               autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                                        <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                    </div>

                                    <div class="form-group has-success">
                                        <label for="cc-name" class="control-label mb-1">Student Adress </label>
                                        <input id="cc-name" name="std_address" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                               autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                                        <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                    </div>

                                    <div class="form-group has-success">
                                        <label for="cc-name" class="control-label mb-1">Student Age</label>
                                        <input id="cc-name" name="std_age" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                               autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                                        <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                    </div>

                                    <div class="form-group has-success">

                                        <label for="cc-number" class="control-label mb-1">Gender</label>
                                        <select name="std_gender" id="select" class="form-control">
                                            <option value="Male" >Male</option>
                                            <option value="Female">Femael</option>

                                        </select>
                                    </div>

                                    <div class="form-group has-success">
                                        <label for="cc-name" class="control-label mb-1">Student Date</label>
                                        <input id="cc-name" name="std_dob" type="date" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                               autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                                        <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                    </div>

                                    <div class="form-group has-success">
                                        <label for="cc-name" class="control-label mb-1">Student Reference Mobile</label>
                                        <input id="cc-name" name="std_ref_mobile" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                               autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                                        <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                    </div>

                                    <div class="form-group has-success">
                                        <label for="cc-name" class="control-label mb-1">Student Notes</label>
                                        <textarea name="std_notes" id="textarea-input" rows="9" placeholder="note..." class="form-control"></textarea>
                                    </div>



                                    <div>
                                        <button name="insert" id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                            <i class="fa fa-lock fa-lg"></i>&nbsp;
                                            <span id="payment-button-amount">Insert</span>
                                            <span id="payment-button-sending" style="display:none;">Sending…</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>


                    <!-- DATA TABLE -->
                    <h3 class="title-5 m-b-35">data table</h3>
                    <div class="table-data__tool">
                        <div class="table-data__tool-left">
                            <div class="rs-select2--light rs-select2--md">
                                <select class="js-select2" name="property">
                                    <option selected="selected">All Properties</option>
                                    <option value="">Option 1</option>
                                    <option value="">Option 2</option>
                                </select>
                                <div class="dropDownSelect2"></div>
                            </div>
                            <div class="rs-select2--light rs-select2--sm">
                                <select class="js-select2" name="time">
                                    <option selected="selected">Today</option>
                                    <option value="">3 Days</option>
                                    <option value="">1 Week</option>
                                </select>
                                <div class="dropDownSelect2"></div>
                            </div>
                            <button class="au-btn-filter">
                                <i class="zmdi zmdi-filter-list"></i>filters</button>
                        </div>
                        <div class="table-data__tool-right">
                            <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                <i class="zmdi zmdi-plus"></i>add item</button>
                            <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                                <select class="js-select2" name="type">
                                    <option selected="selected">Export</option>
                                    <option value="">Option 1</option>
                                    <option value="">Option 2</option>
                                </select>
                                <div class="dropDownSelect2"></div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive table-responsive-data2">
                        <table class="table table-data">
                            <thead>
                                <tr>
                                    <th>
<!--                                        <label class="au-checkbox">
                                            <input type="checkbox">
                                            <span class="au-checkmark"></span>
                                        </label>-->
                                    </th>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Birthday</th>
                                    <th>Notes</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $studentSet = $student->fetchall();
                                foreach ($studentSet as $value) {
                                    echo '<tr class="tr-shadow">';
                                    echo "<td>";
//                                    echo '<label class="au-checkbox">';
//                                    echo '<input type="checkbox">';
//                                    echo ' <span class="au-checkmark"></span>';
//                                    echo " </label>";
                                    echo "</td>";
                                    echo "<td>{$value['std_id']}</td>";
                                    echo "<td>{$value['std_name']}</td>";
                                    echo "<td>{$value['std_mobile']}</td>";
                                    echo "<td>{$value['std_email']}</td>";
                                    echo "<td>{$value['std_address']}</td>";
                                    
                                    echo "<td>{$value['std_dob']}</td>";
                                    echo "<td>{$value['notes']}</td>";
                                    echo '<td><button name="Edit" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                    <i class="zmdi zmdi-edit"></i>
                                </button></td>';
                                    echo '<td><button name="Delete" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                    <i class="zmdi zmdi-delete"></i>
                                </button></td>';
                                    echo "</tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- END DATA TABLE -->
                </div>
            </div>
        </div>
    </div>


</body>



<?php include_once 'includes/footer.php'; ?>

