<?php
require_once("include/check_admin_login.php");
require_once("include/css.php");
?>
</head>

<body>
    <div class="wrapper">
        <?php
        require_once("include/sidebar.php");
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
                                    <h5 class="mb-0 text-primary">Add Branch</h5>
                                </div>
                                <hr>
                                <form class="row g-3">
                                    <div class="col-md-4">
                                        <label for="inputFirstName" class="form-label">Branch name</label>
                                        <input type="text" name="branchname" class="form-control" id="inputFirstName" placeholder="Enter branch name" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="inputLastName" class="form-label">City</label>
                                        <input type="text" name="city" class="form-control" id="inputLastName" placeholder="Enter city" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="inputEmail" class="form-label">Pincode</label>
                                        <input type="number" pattern="[0-9]{6}" name="pincode" class="form-control" id="inputEmail" placeholder="Enter pincode" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputLastName" class="form-label">Email</label>
                                        <input type="email" name="email" class="form-control" id="inputLastName" placeholder="Enter email" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputPassword" class="form-label">Password</label>
                                        <input type="password" name="password" placeholder="Enter password" class="form-control" id="inputPassword" required>
                                    </div>
                                    <div class="col-12">
                                        <label for="inputAddress" class="form-label">Remarks</label>
                                        <textarea class="form-control" name="remarks" id="inputAddress" rows="3" placeholder="Add remarks"></textarea>
                                    </div>
                                    <div class="col-12 text-end">
                                        <button type="submit" class="btn btn-primary px-5">Add Branch</button>
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
                                    <h5 class="mb-0 text-danger">View Branch</h5>
                                </div>
                                <hr>
                                <table id="example" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th width='2.5%'>Sr.no</th>
                                            <th>Name</th>
                                            <th>City</th>
                                            <th>Pincode</th>
                                            <th>Email</th>
                                            <th width="40%">Remarks</th>
                                            <th>Operations</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>global</td>
                                            <td>Las vegas</td>
                                            <td>364001</td>
                                            <td>demo@gmail.com</td>
                                            <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque.</td>
                                            <td>


                                                <div class="row">
                                                    <div class="col-4">
                                                        <a href="">
                                                            <h3><i class="lni lni-trash"></i></h3>
                                                        </a>
                                                    </div>
                                                    <div class="col-8">
                                                        <a href="">
                                                            <h3> <i class="lni lni-pencil-alt"></i></h3>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end row-->
            </div>
        </div>

    </div>
    <?php
    require_once("include/script.php");
    ?>
</body>

</html>