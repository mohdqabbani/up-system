<?php
include_once 'includes/header.php';
include_once '../includes/dispatcher.php';

$admin = new admin_method();
if (isset($_POST['insert'])) {

    $admin->admin_name = $adminName = filter_input(INPUT_POST, 'admin_name', FILTER_SANITIZE_STRING);
    $admin->admin_username = $adminUserName = filter_input(INPUT_POST, 'admin_username', FILTER_SANITIZE_STRING);
    $admin->admin_password = $adminPassword = filter_input(INPUT_POST, 'admin_password', FILTER_SANITIZE_STRING);
    $admin->admin_status = $adminStatus = filter_input(INPUT_POST, 'admin_status', FILTER_SANITIZE_NUMBER_INT);

    if ($admin->insertAdmin() == true) {
        echo "<script type='text/javascript'>window.location.href = 'Manage_admin.php?insert=true';</script>";
        //header("location:Manage_admin.php?insert=true");

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
                        <div class="card-header">Admin</div>
                        <div class="card-body">
                            <div class="card-title">
                                <h3 class="text-center title-2">Manage Admin</h3>
                            </div>
                            <hr>
                            <form action="" method="post" novalidate="novalidate">
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Full Name</label>
                                    <input id="cc-pament" name="admin_name" type="text" class="form-control" aria-required="true" aria-invalid="false>
                                           </div>
                                           <div class="form-group has-success">
                                           <label for="cc-name" class="control-label mb-1">User Name </label>
                                    <input id="cc-name" name="admin_username" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                           autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                                    <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                </div>
                                <div class="form-group">
                                    <label for="cc-number" class="control-label mb-1">Pass Word</label>
                                    <input id="cc-number" name="admin_password" type="password" class="form-control cc-number identified visa" value="" data-val="true"
                                           data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                           autocomplete="cc-number">
                                    <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                </div>
                                <div class="form-group">
                                    <label for="cc-number" class="control-label mb-1">Status</label>
                                    <select name="admin_status" id="select" class="form-control">
                                        <option value="0">not active</option>
                                        <option value="1">active</option>

                                    </select>
                                </div>
                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                        </div>



                        <div>
                            <button name="insert" id="payment-button" type="submit" class="btn btn-lg btn-info btn-block" onclick="successFunc()">
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
                                <label class="au-checkbox">
                                    <input type="checkbox">
                                    <span class="au-checkmark"></span>
                                </label>
                            </th>
                            <th>ID</th>
                            <th>FULL NAME</th>
                            <th>USER NAME</th>
                            <th>PASSWORD</th>
                            <th>status</th>
                            <th>EDIT</th>
                            <th>DELETE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $adminSet = $admin->fetchall();
                        foreach ($adminSet as $value) {
                            echo '<tr class="tr-shadow">';
                            echo "<td>";
                            echo '<label class="au-checkbox">';
                            echo '<input type="checkbox">';
                            echo ' <span class="au-checkmark"></span>';
                            echo " </label>";
                            echo "</td>";
                            echo "<td>{$value['admin_id']}</td>";
                            echo "<td>{$value['admin_name']}</td>";
                            echo "<td>{$value['admin_username']}</td>";
                            echo "<td>{$value['admin_password']}</td>";
                            echo "<td>{$value['admin_status']}</td>";
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

</body>


<?php include_once 'includes/footer.php'; ?>
