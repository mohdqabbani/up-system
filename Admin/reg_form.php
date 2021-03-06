<?php

include_once 'includes/header.php';
include_once '../includes/dispatcher.php';

if (isset($_GET['Register_Student'])) {
    echo '<script>window.location.href="manage_student.php"</script>';
}
if (isset($_GET['Register_Course'])) {

    $name = $_GET['Register_Course'];

    header("Location: manage_registration.php");
}
?>
<script>
    $('document').ready(function () {
        $('#name').keyup(function () {
            var std_name = $("#name").val();

            $.ajax({
                type: 'GET',
                url: "search.php?user_name=" + std_name,
                cache: false,
                success: function (data) {
                    $('#nameList').fadeIn();
                    $('#nameList').html(data);
                    
                }
            });


        });
        $(document).on('click', 'li', function () {
            $('#name').val($(this).text());
            $('#nameList').fadeOut();
            $('#nameList').
        });


    });
</script>
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
                                <form action="" method="get" novalidate="novalidate">
                                    <div class="form-group">
                                        <label  for="cc-name" class="control-label mb-1">Student Search</label>
                                        <input id="name"  name="std_name" type="text" class="form-control cc-name valid">
                                        <div id="nameList"></div>
                                    </div>
                                </form>
                                <form method="get">
                                    <div class="form-group">
                                        <button class="btn-lg btn-danger" type="submit" name="Register_Course">Register Course </button>
                                        <button  class="btn-lg btn-danger" type="submit" name="Register_Student">Register Student</button>
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



<?php include_once 'includes/footer.php'; ?>

