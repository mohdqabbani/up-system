<?php
include_once '../Admin/includes/header.php';
include_once '../includes/course_method.php';
$course = new course_method();
$courseSet = $course->fetchAll();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Full Registration form </title>
    </head>
    <body>
        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">Registration Form</div>
                                <div class="card-body">
                                    <div class="card-title">
                                        <h3 class="text-center title-2">Manage Registration</h3>
                                    </div>
                                    <hr>
                                    <form action="" method="post" novalidate="novalidate">
                                        <div class="form-group">
                                            <label  for="cc-name" class="control-label mb-1">Course Name</label>
                                            <select class="form-control cc-name valid">
                                                <?php
                                                foreach ($courseSet as $value) {
                                                  echo "<option value=''>{$value['course_name']}</option>";  
                                                }
                                                
                                                ?>
                                            </select>

                                        </div>
                                        <div class="form-group">
                                            <label  for="cc-name" class="control-label mb-1">Course Hours</label>
                                            <select class="form-control cc-name valid">
                                                <?php
                                                foreach ($courseSet as $value) {
                                                  echo "<option value=''>{$value['course_hours']}</option>";  
                                                }
                                                
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label  for="cc-name" class="control-label mb-1">Course Time</label>
                                            <select class="form-control cc-name valid">
                                                <?php
                                                foreach ($courseSet as $value) {
                                                  echo "<option value=''>{$value['course_time']}</option>";  
                                                }
                                                
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label  for="cc-name" class="control-label mb-1">Course Days</label>
                                            <input  name="course_days[]" type="checkbox">Saturday  
                                            <input  name="course_days[]" type="checkbox" >Sunday
                                            <input  name="course_days[]" type="checkbox" >Monday  
                                            <input  name="course_days[]" type="checkbox" >Tuesday   
                                            <input  name="course_days[]" type="checkbox" >Wednesday  
                                            <input  name="course_days[]" type="checkbox" >Thursday   
                                        </div>
                                        <div class="form-group">
                                            <label  for="cc-name" class="control-label mb-1">Course Start Date</label>
                                           <select class="form-control cc-name valid">
                                                <?php
                                                foreach ($courseSet as $value) {
                                                  echo "<option value=''>{$value['course_start_date']}</option>";  
                                                }
                                                
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label  for="cc-name" class="control-label mb-1">Course End Date</label>
                                            <select class="form-control cc-name valid">
                                                <?php
                                                foreach ($courseSet as $value) {
                                                  echo "<option value=''>{$value['course_end_date']}</option>";  
                                                }
                                                
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label  for="cc-name" class="control-label mb-1">Test Result</label>
                                            <input  name="course_test_result" type="text" class="form-control cc-name valid">
                                        </div>
                                        <div class="form-group">
                                            <label  for="cc-name" class="control-label mb-1">Course Fees</label>
                                            <select class="form-control cc-name valid">
                                                <?php
                                                foreach ($courseSet as $value) {
                                                  echo "<option value=''>{$value['course_fees']}</option>";  
                                                }
                                                
                                                ?>
                                            </select>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label  for="cc-name" class="control-label mb-1">Payment Method</label>
                                            <select class="control-label mb-1">
                                                <option>Visa</option>
                                                <option>Cash</option>
                                                <option>Check</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label  for="cc-name" class="control-label mb-1">Payment Type</label>
                                            <select class="control-label mb-1">
                                                <option>Cash</option>
                                                <option>Payments</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label  for="cc-name" class="control-label mb-1">Discount Amount</label>
                                            <input  name="discount_amount" type="text" class="form-control cc-name valid">
                                        </div>
                                        <div class="form-group">
                                            <label  for="cc-name" class="control-label mb-1">Discount Percentage</label>
                                            <input  name="discount_percentage" type="text" class="form-control cc-name valid">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" name="add" class="btn btn-lg btn-info btn-block">Insert</button>
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
                        <!-- END DATA TABLE -->

                    </div>
                </div>
            </div>
        </div>

    </body>
</html>
<?php include_once '../Admin/includes/footer.php'; ?>