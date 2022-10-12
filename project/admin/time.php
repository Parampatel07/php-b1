<?php
session_start();
date_default_timezone_set('asia/kolkata');
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
                <div class="card">
                    <div class="card-body">
                        <div>
                            <h5 class="card-title">Special title treatment</h5>
                        </div>
          
                        <div class="alert alert-success border-0 bg-success alert-dismissible fade show py-2">
                            <div class="d-flex align-items-center">
                                <div class="font-35 text-white"><i class="bx bxs-check-circle"></i>
                                </div>
                                <div class="ms-3">
                                    <h6 class="mb-0 text-white">time</h6>
                                </div>
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
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