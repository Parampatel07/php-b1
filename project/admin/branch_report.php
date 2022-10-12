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
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <h5 class="card-title">Total fees report</h5>
                            </div>
                            <div class="col-6">
                                <div class="row ">
                                    <div class="col-1"></div>
                                    <div class="col-4">
                                        <label for="">Enter Start date</label>
                                        <input type="date" name="startdate" class="form-control" id="startdate">
                                    </div>
                                    <div class="col-4">
                                        <label for="">Enter End date</label>
                                        <input type="date" name="enddate" class="form-control" id="enddate">
                                    </div>
                                    <div class="col-1">
                                        <input type="button" value="Search" class="btn btn-info mt-3 mr-2">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="card mt-4">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example2" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Mobile</th>
                                                    <th>Course</th>
                                                    <th>Package Name</th>
                                                    <th>Amount</th>
                                                    <th>PayMode</th>
                                                    <th>Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tiger Nixon</td>
                                                    <td>System Architect</td>
                                                    <td>Edinburgh</td>
                                                    <td>61</td>
                                                    <td>2011/04/25</td>
                                                    <td>$320,800</td>
                                                    <td>20/12/2020</td>
                                                </tr>
                                                <tr>
                                                    <td>Tiger Nixon</td>
                                                    <td>System Architect</td>
                                                    <td>Edinburgh</td>
                                                    <td>61</td>
                                                    <td>2011/04/25</td>
                                                    <td>$320,800</td>
                                                    <td>20/12/2020</td>
                                                </tr>
                                                <tr>
                                                    <td>Tiger Nixon</td>
                                                    <td>System Architect</td>
                                                    <td>Edinburgh</td>
                                                    <td>61</td>
                                                    <td>2011/04/25</td>
                                                    <td>$320,800</td>
                                                    <td>20/12/2020</td>
                                                </tr>
                                                <tr>
                                                    <td>Tiger Nixon</td>
                                                    <td>System Architect</td>
                                                    <td>Edinburgh</td>
                                                    <td>61</td>
                                                    <td>2011/04/25</td>
                                                    <td>$320,800</td>
                                                    <td>20/12/2020</td>
                                                </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <?php
    require_once("include/script.php");
    ?>
    	<script>
		$(document).ready(function() {
			var table = $('#example2').DataTable( {
				lengthChange: false,
				buttons: [ 'copy', 'excel', 'pdf', 'print']
			} );
		 
			table.buttons().container()
				.appendTo( '#example2_wrapper .col-md-6:eq(0)' );
		} );
	</script>
</body>

</html>