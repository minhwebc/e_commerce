<!DOCTYPE html>
<html>
	<head>
		<title>Home</title>
		<meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="/assets/css/main.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>

        <style type="text/css">

            .jumbotron, .navbar {
                background-color: white;
                border: 1px solid e7e7e7;
            }

        </style>
	</head>
	<body> 
        <div class="container">
            <?php $this->load->view('/partials/nav-admin'); ?>

            <!-- Hero Unit -->
            <div class="jumbotron">
                  <h1>Welcome to the Admin Console</h1>
                  <p>The adminstrative console provides a convenient, user friendly way to create new products, 
                      edit product information, view customer orders, and edit customer information. </p>
            </div>

            <!-- Content Row-1 -->
            <div class="row">
                <div class="col-md-4">
                    <h1>Manage Users</h1>
                    <p>As an admin, you'll be able to add, remove, and edit users for the application.</p>
                </div>
                    <div class="col-md-4">
                    <h1>Manage products</h1>
                    <p>In the products view, you will be able to edit product information as well as add new products to the system.</p>
                </div>
                    <div class="col-md-4">
                    <h1>Manage Orders</h1>
                    <p>The orders view will allow you to delete customer orders or change the status of customer orders.</p>
                </div>
            </div>
        </div> 
    </body>
</html>