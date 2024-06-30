<?php
$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html>

<head>
	 <!-- Favicons -->
	 <link href="<?= base_url()?>vendor/image/logotese.png" rel="icon">
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?= base_url('vendor/'); ?>css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('vendor/'); ?>Image/fontawesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('vendor/'); ?>Image/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="<?= base_url('vendor/'); ?>style(home).css">

	<!-- JavaScript -->
	<script src="<?= base_url('vendor/'); ?>js/jquery-3.7.0.min.js"></script>
	<script src="<?= base_url('vendor/'); ?>js/bootstrap.min.js"></script>
	<title>Dashboard</title>
</head>

<body>
	<style>
		.sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 200px; /* Adjust the width as needed */
            background-color: #2371b9; /* Adjust the background color as needed */
            color: #fff; /* Adjust the text color as needed */
            overflow-y: auto; /* Enable scrolling if sidebar height exceeds viewport */
            z-index: 1000; /* Ensure sidebar appears above other content */
        }
		.global-container {
            margin-left: 200px; /* Adjust this value to match sidebar width */
            padding: 20px;
            width: calc(100% - 200px); /* Adjust content width to account for sidebar */
            background-color: #f0f0f0; /* Background color for content */
        }
	</style>
	<!-- Header -->
	<header>
		<nav>
			<div class="user-profile" id="user" onClick="toggleMenu()">
				<a><img src="<?= base_url('vendor/'); ?>Image/User.jpg" class="user-pic" alt="">&ensp; <?php echo $username; ?>
					<span><i class="fa-solid fa-caret-down"></i></span></a>
			</div>
		</nav>
		<div class="sub-menu-warp" id="subMenu">
			<div class="sub-menu">
				<div class="user-info">
					<p>User</p>
				</div>
				<hr>
				<a href="<?= base_url('Login/logout'); ?>" class="sub-menu-link">
					<p><i class="fa-solid fa-right-from-bracket"></i>&ensp; Log Out</p>
					<span>></span>
				</a>
			</div>
		</div>
	</header>

	<!-- Sidebar -->
	<div class="sidebar">
        <a href="<?= base_url('Dashboard/dashboard/') ?>" class="active">
            <i class="fa-light fa-house"></i>&ensp; Home
        </a>
	</div>

	<!-- Main -->
	<main>
		<div class="global-container">
			<div class="container my-3 bd-layout">
				<div class="col-12 pt-4 pb-2">
					<div class="mb-3">
						<a type="button" class="btn btn-primary" href="<?php echo base_url('Proses/input1'); ?>">&plusmn; Add</a>
					</div>
					<div class="card container" id="main">
						<div class="card-body">
							<table class="table table-striped table-bordered">
								<thead>
									<tr>
										<th scope="col">No.</th>
										<th scope="col">Supplier Name</th>
										<th scope="col">Part Number</th>
										<th scope="col">Quantity</th>
										<th scope="col">Length</th>
										<th scope="col">Width</th>
										<th scope="col">Height</th>
										<th scope="col">Volume</th>
										<th scope="col">Weight</th>
									</tr>
								</thead>
								<tbody>
									<?php
									if ($table->num_rows() > 0) {
										foreach ($table->result() as $no =>$row) {
									?>
											<tr>
												<td align="center"><?= $no + 1; ?></td>
												<td align="center"><?= $row->supplier ?></td>
												<td align="center"><?= $row->part ?></td>
												<td align="center"><?= $row->quantity ?></td>
												<td align="center"><?= $row->length ?></td>
												<td align="center"><?= $row->width ?></td>
												<td align="center"><?= $row->height ?></td>
												<td align="center"><?= $row->volume ?></td>
												<td align="center"><?= $row->weight ?></td>
											</tr>
										<?php
										}
									} else {
										?>
										<tr>
											<td align="center"></td>
											<td align="center"></td>
											<td align="center"></td>
											<td align="center"></td>
											<td align="center"></td>
											<td align="center"></td>
											<td align="center"></td>
											<td align="center"></td>
											<td align="center"></td>
										</tr>
										<tr>
											<td align="center"></td>
											<td align="center"></td>
											<td align="center"></td>
											<td align="center"></td>
											<td align="center"></td>
											<td align="center"></td>
											<td align="center"></td>
											<td align="center"></td>
											<td align="center"></td>
										</tr>
										<tr>
											<td align="center"></td>
											<td align="center"></td>
											<td align="center"></td>
											<td align="center"></td>
											<td align="center"></td>
											<td align="center"></td>
											<td align="center"></td>
											<td align="center"></td>
											<td align="center"></td>
										</tr>
										<tr>
											<td align="center"></td>
											<td align="center"></td>
											<td align="center"></td>
											<td align="center"></td>
											<td align="center"></td>
											<td align="center"></td>
											<td align="center"></td>
											<td align="center"></td>
											<td align="center"></td>
										</tr>
									<?php
									}
									?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>

	<script>
		let subMenu = document.getElementById("subMenu");
		let user = document.getElementById("user");

		function toggleMenu() {
			document.addEventListener('mouseup', function(e) {
				if (!user.contains(e.target) && !subMenu.contains(e.target)) {
					subMenu.classList.remove("open-menu");
				}
			});

			subMenu.classList.toggle("open-menu");
		}
	</script>
</body>

</html>