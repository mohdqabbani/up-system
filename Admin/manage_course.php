<?php
include_once './includes/header.php';
include_once '../includes/dispatcher.php';
if (isset($_POST['insert'])) {
    $course = new course_method();
    $course->course_name = $_POST['course_name'];
    $course->course_hours = $_POST['course_hours'];
    $course->course_time = $_POST['course_time'];
    $days  = implode('', $_POST['course_days']);
    $course->course_day = $days;
    $course->course_start_date = $_POST['course_start_date'];
    $course->course_end_date = $_POST['course_end_date'];
    $course->course_fees = $_POST['course_fees'];
    if ($course->insertCourse() == true) {
        echo "<script type='text/javascript'>window.location.href = 'manage_course.php?insert=true';</script>";
        exit();
    }
}
?>
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div id="divsuccess" class="alert alert-danger" style="display: none;">
                            <P id="success"> Success Action </P>
                        </div>
                        <div class="card-header">Registration Form</div>
                        <div class="card-body">
                            <div class="card-title">
                                <h3 class="text-center title-2">Manage Registration</h3>
                            </div>
                            <hr>
                            <form action="" method="post" novalidate="novalidate">
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Course Name</label>
                                    <input id="cc-pament" name="course_name" type="text" class="form-control" aria-required="true" aria-invalid="false>
                                           </div>
                                           <div class="form-group has-success">
                                           <label for="cc-name" class="control-label mb-1">Course Hours </label>
                                    <input id="cc-name" name="course_hours" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                           autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                                    <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                </div>
                                <div class="form-group">
                                    <label for="cc-number" class="control-label mb-1">Course Time</label>
                                    <select name="course_time" id="select" class="form-control">
                                        <option value="2-3">2-3</option>
                                        <option value="3-4">3-4</option>

                                    </select>
                                </div>


                                <div class="form-group has-success">
                                    <label for="cc-name" class="control-label mb-1">Course Days :</label><br>
                                    <input type="checkbox" name="course_days[]" value="Sunaday">Sunday
                                    <input type="checkbox" name="course_days[]" value="Monday">Monday
                                    <input type="checkbox" name="course_days[]" value="Tusday">Tusday
                                    <input type="checkbox" name="course_days[]" value="Wensday">Wensday 
                                    <input type="checkbox" name="course_days[]" value="Thursday">Thursday
                                    <input type="checkbox" name="course_days[]" value="Saturday">Saturday
                                   
                                </div>

                                <div class="form-group has-success">
                                    <label for="cc-name" class="control-label mb-1">Course Sart Date</label>
                                    <input id="cc-name" name="course_start_date" type="date" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                           autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                                    <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                </div>

                                <div class="form-group has-success">
                                    <label for="cc-name" class="control-label mb-1">Course End Date </label>
                                    <input id="cc-name" name="course_end_date" type="date" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                           autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                                    <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                </div>

                                <div class="form-group has-success">
                                    <label for="cc-name" class="control-label mb-1">Course Fees</label>
                                    <input id="cc-name" name="course_fees" type="number" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                           autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                                    <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
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
                    <table class="table table-data2">
                        <thead>
                            <tr>
                                <th>
                                    <label class="au-checkbox">
                                        <input type="checkbox">
                                        <span class="au-checkmark"></span>
                                    </label>
                                </th>
                                <th>REG ID</th>
                                <th>STUDENT ID</th>
                                <th>ADMIN ID</th>
                                <th>COURSE NAME</th>
                                <th>COURSE HOURS</th>
                                <th>COURSE TIME</th>
                                <th>COURSE DAYE</th>
                                <th>COURSE START DATE</th>
                                <th>COURSE EMD DATE</th>
                                <th>COURSE TEST RESULT</th>
                                <th>COURSE FEES</th>
                                <th>PAYMENT METHOD</th>
                                <th>PAYMENT TYPE</th>
                                <th>DISCOUNT AMOUNT</th>
                                <th>DISCOUNT PERCENTAGE</th>
                                <th>EDIT</th>
                                <th>DELETE</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="tr-shadow">
                                <td>
                                    <label class="au-checkbox">
                                        <input type="checkbox">
                                        <span class="au-checkmark"></span>
                                    </label>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <

                                <td><button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                        <i class="zmdi zmdi-edit"></i>
                                    </button></td>
                                <td><button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                        <i class="zmdi zmdi-delete"></i>
                                    </button></td>


                            </tr>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- END DATA TABLE -->
<?php include_once './includes/footer.php'; ?>