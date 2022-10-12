<?php
require_once("include/css.php");
?>
</head>

<body>
    <div class="wrapper">
        <?php
        require_once("include/branch_sidebar.php");
        ?>
        <div class="page-wrapper">
            <div class="page-content">
                <!--end breadcrumb-->
                <div class="row">
                    <div class="col-xl-12 mx-auto">
                        <div class="card border-top border-0 border-4 border-primary">
                            <div class="card-body p-5">
                                <div class="card-title d-flex align-items-center">
                                    <div><i class="bx bxs-user me-1 font-22 text-primary"></i>
                                    </div>
                                    <h5 class="mb-0 text-primary">Add Fees</h5>
                                </div>
                                <hr>
                                <form class="row g-3">
                                    <div class="col-md-4">
                                        <label for="inputFirstName" class="form-label">Name</label>
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter your Name" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="inputEmail" class="form-label">Mobile number</label>
                                        <input type="number" name="mobnumber" class="form-control" id="mobnumber" placeholder="Enter mobile number" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="inputEmail" class="form-label">Course</label>
                                        <input type="text" name="course" class="form-control" id="cousre" placeholder="Enter course" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="inputFirstName" class="form-label">Package name</label>
                                        <input type="text" name="pacname" class="form-control" id="pacname" placeholder="Enter your Package Name" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="inputEmail" class="form-label">Amount</label>
                                        <input type="number" name="amount" class="form-control" id="amount" placeholder="Enter Amount" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="inputEmail" class="form-label">Select Payment Mode</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="paymode" id="cash">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Cash
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="paymode" id="online" checked>
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Online transfer
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="paymode" id="cheque" checked>
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Cheque
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="inputLastName" class="form-label">Enter Address</label>
                                        <textarea name="address" class="form-control" id="address" class="form-control" required maxlength="500">Enter Address</textarea>
                                    </div>
                                    <div class="col-12 text-end">
                                        <button type="submit" class="btn btn-primary px-5">Add Package</button>
                                        <button type="reset" class="btn btn-danger px-5">Clear all</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 mx-auto">
                        <div class="card border-top border-0 border-4 border-danger">
                            <div class="card-body p-5">
                                <div class="card-title d-flex align-items-center">
                                    <div><i class="bx bxs-user me-1 font-22 text-danger"></i>
                                    </div>
                                    <h5 class="mb-0 text-danger">View Fees</h5>
                                </div>
                                <hr>
                                <table id="example" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th width='2.5%'>Sr.no</th>
                                            <th>Name</th>
                                            <th>Mobile</th>
                                            <th>Course</th>
                                            <th>Package</th>
                                            <th>Amount</th>
                                            <th>Paymode</th>
                                            <th width="60%">Address</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>global</td>
                                            <td>9502365215</td>
                                            <td>Php</td>
                                            <td>fullstack</td>
                                            <td>7500</td>
                                            <td>Cash</td>
                                            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores.</td>
                                           
                                        </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        require_once("include/footer.php");
        ?>
    </div>
    <?php
    require_once("include/script.php");
    ?>
</body>

</html>