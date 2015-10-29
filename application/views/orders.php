<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
        <title>All Orders</title>
        <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="/assets/css/main.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>
        
        <script>
            $( document ).ready(function() {
                $("select").change(function(){                 
                   $(this).parent().children().last().val($(this).val());
                    $(this).parent().submit();
                });
                $("#search").change(function(){                 
                   $(this).parent().children().last().val($(this).val());
                    $(this).parent().submit();
                });
            });
        
        </script>      

        <style type="text/css">
            
            .navbar {
                background-color: white;  
            }
            
            h1 {
                font-size: 150%;
            }

        </style>
	</head>
	<body> 
        <div class="container">
            <?php $this->load->view('partials/nav-admin'); ?>

            <!-- Order Table -->
            <h1>All Orders</h1>
            <form action='/dashboard/update_search' method='post'>
                <select id="search" name="search">
                        <option <?php if($this->input->post('search') == 'show_all') echo "selected = 'selected'";?>value="show_all">Show All</option>
                        <option <?php if($this->input->post('search') == 'shipped') echo "selected = 'selected'";?>value="shipped">Shipped</option>
                        <option <?php if($this->input->post('search') == 'process') echo "selected = 'selected'";?>value="process">Order in Process</option>
                </select>
            </form>
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Date</th>
                    <th>Billing Address</th>
                    <th>Total</th>
                    <th>Status</th>
                </tr>
                <?php foreach($orders as $order){
                        $time = strtotime($order['created_at']);
                        $timeToView = date('m/j/o', $time);?>
                    <tr>
                        <td><a href="/orders/show/<?= $order['id']?>"><?= $order['id']?></a></td>
                        <td><?= $order['first_name']." ". $order['last_name'] ?></td>
                        <td><?=  $timeToView?></td>
                        <td><?= $order['address']?></td>
                        <td>$<?= $order['total'] ?></td>
                        <td><form action='/orders/update_status' method='post'>
                            <input type="hidden" name="order_id" value="<?= $order['id']?>">
                            <select name="status">
                                <?php if($order['status'] == 'Order in process'){?>
                                    <option value="Order in process"><?= $order['status'] ?></option>
                                    <option value="Shipped">Shipped</option>
                                    <option value="Cancelled">Cancelled</option>
                                <?php }else if($order['status'] == 'Shipped'){ ?>
                                    <option value="Shipped"><?= $order['status'] ?></option>
                                    <option value="Cancelled">Cancelled</option>
                                    <option value="Order in process">Order in process</option>
                                <?php }else{ ?>
                                    <option value="Cancelled"><?= $order['status'] ?></option>
                                    <option value="Shipped">Shipped</option>
                                    <option value="Order in process">Order in process</option>
                                <?php } ?>
                            </select>
                        </form></td>
                    </tr>
                <?php } ?>
            </table>
        </div> 
    </body>
</html>