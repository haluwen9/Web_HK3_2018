<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Quản lý - Bông Xù Store</title>
	<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
	
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

	<!-- site css -->
	<link rel="stylesheet" href="assets\css\style-dashboard.css">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800,700,400italic,600italic,700italic,800italic,300italic" rel="stylesheet" type="text/css">
    <!-- <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'> -->
    
	
	<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
	
  </head>
  <body>
    
	<!--nav-->
    <nav role="navigation" class="navbar navbar-custom">
        <div class="container-fluid">
			<!-- nav left -->
			<ul class="nav">
				<li class="nav-item">
					<a class="nav-link" href="."><h5>Bông Xù Store</h5></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="?page=dashboard"><h5>Quản lý</h5></a>
				</li>
			</ul>
			
			<!-- nav right -->
			<ul class="nav">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown">
						<img src="files\img\demo.png" class="rounded-circle ava">
					</a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
						<h6 class="dropdown-header">Admin</h6>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Thông tin</a>
						<a class="dropdown-item" href="#">Cài đặt</a>
						<a class="dropdown-item" href="?ctrl=logout">Đăng xuất</a>
					</div>
				</li>
			</ul>
		</div>
	</nav>
	
	
	<!-- Sidebar vs Content -->
    <div class="container-fluid main-area">
        <div class="row row-offcanvas row-offcanvas-left">
			<!-- Sidebar -->	
			<div class="col-md-2 d-none d-md-block bg-light sidebar">
				<ul class="list-group sidebar-custom">
					<li class="list-group-item bg-light">
						<i class="glyphicon glyphicon-align-justify"></i>
						<h4><a href="#">Quản lý cửa hàng</a></h4>
					</li>

					<hr>
					<!--
					<li class="list-group-item bg-light">
						<input type="text" class="form-control search-query rounded-0" placeholder="Search">
					</li>
					-->
					
					<li>
						<a class="list-group-item bg-light" href="?page=dashboard&Dashboard=ManageProduct"><i class="glyphicon glyphicon-certificate"></i>Quản lý sản phẩm</a>
						<!--
						<div class="collapse" id="ListProducts" class="list-group-item">
							<a href="#AddProduct" class="list-group-item bg-light" data-toggle="modal" data-target="#AddProduct">Thêm sản phẩm  <span class="glyphicon glyphicon-chevron-right"></span></a>
							<a href="#UpdateProduct" class="list-group-item bg-light">Cập nhật sản phẩm  <span class="glyphicon glyphicon-chevron-right"></span></a>
							<a href="#DeleteProduct" class="list-group-item bg-light">Xóa sản phẩm  <span class="glyphicon glyphicon-chevron-right"></span></a>
						</div>
						-->
					</li>

					<li>
						<a class="list-group-item bg-light" href="?page=dashboard&Dashboard=ManageCategory"><i class="glyphicon glyphicon-certificate"></i>Quản lý danh mục</a>
						<!--
						<div class="collapse" id="ListCategory" class="list-group-item">
							<a href="#UpdateCategory" class="list-group-item bg-light">Thêm loại  <span class="glyphicon glyphicon-chevron-right"></span></a>
							<a href="#DeleteCategory" class="list-group-item bg-light">Xóa loại  <span class="glyphicon glyphicon-chevron-right"></span></a>
						</div>
						-->
					</li>
					
					<li>
						<a class="list-group-item bg-light" href="?page=dashboard&Dashboard=ManageOrder"><i class="glyphicon glyphicon-th-list"></i>Quản lý hóa đơn</a>
						<!--
						<div class="collapse" id="Orders" class="list-group-item">
							<a href="#GetAllOrders" class="list-group-item bg-light">Xuất hóa đơn  <span class="glyphicon glyphicon-chevron-right"></span></a>
							<a href="#UpdateOrderState" class="list-group-item bg-light">Cập nhật hóa đơn  <span class="glyphicon glyphicon-chevron-right"></span></a>
							<a href="#DeleteOrder" class="list-group-item bg-light">Xóa hóa đơn  <span class="glyphicon glyphicon-chevron-right"></span></a>
						</div>
						-->
					</li>
					
					<li>
						<a class="list-group-item bg-light" href="?page=dashboard&Dashboard=ManageUser"><i class="glyphicon glyphicon-th-list"></i>Quản lý người dùng</a>
					</li>
				</ul>
			</div>	
			
			<!-- content-->
			<div class="col-xs-12 col-sm-10 content">
			
				<!-- content manage Product -->
				<div class="panel panel-default" id="ManageProduct">
					
					<h2>Quản lý</h2>
					
					<div class="container">
						<div class="row">
							<h3 class="d-inlineblock col-sm-10">Danh sách sản phẩm</h3>
							
							<!-- Button trigger modal Add Product-->
							<div class="row">
								<div class="col-sm-1"></div>
								<button type="button" class="btn btn-primary col-sm-10" data-toggle="modal" data-target="#AddProduct">Thêm sản phẩm</button>							
							</div>
							<!-- Modal Add Product -->
							<form action="?page=dashboard" method="post" class="col-sm-12">
								<div class="modal fade" id="AddProduct" tabindex="-1" role="dialog" aria-labelledby="AddProductModalLabel" aria-hidden="true">
								  <div class="modal-dialog" role="document">
									<div class="modal-content container">
										<div class="modal-header">
											<h3 class="modal-title" id="AddProductModalLabel">Thêm sản phẩm</h3>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
									  
										<div class="modal-body">
											<div class="form-group">
												<label for="NameProduct">Tên sản phẩm</label>
												<input type="text" name="NameProduct" class="form-control" id="NameProduct" placeholder="Tên . . .">
											</div>
											
											<div class="form-group">
												<label for="CategoryProduct">Loại sản phẩm</label>
												<input type="text" name="CategoryProduct" class="form-control" id="CategoryProduct" placeholder="Loại . . .">
											</div>

											
											<div class="form-row">
												<div class="form-group col-sm-6">
													<label for="PriceProduct">Giá bán</label>
													<input type="text" name="PriceProduct" class="form-control" id="PriceProduct" placeholder="Giá . . .">
												</div>
												
												<div class="form-group col-sm-6">
													<label for="SaleProduct">Giảm giá</label>
													<input type="text" name="SaleProduct" class="form-control" id="SaleProduct" placeholder="Giảm giá . . .">
												</div>
											</div>
											
											<div class="form-row" >
												<div class="form-group col-sm-12">
													<div class="custom-file">
														<input type="file" name="ImageProduct" class="form-control custom-file-input" id="customFile">
														<label class="custom-file-label" for="customFile">Ảnh sản phẩm</label>
													</div>
												</div>
											</div>	
										</div>
										
										<div class="modal-footer">
											<input type="submit" class="btn btn-primary btn-lg btn-block" value="Thêm sản phẩm">
										</div>
									</div>
								  </div>
								</div>
							</form>
						<br>
						<?php include_once"Layout/dashboard-table-product.php"?>
						</div>
					<br>
					</div>
					
				</div>
		
				<!-- content manage Category -->
				<div class="panel panel-default" id="ManageCategory">
					<h2>Quản lý</h2>

					<div class="container table-hover">
						<h3>Danh sách danh mục</h3>
						<?php include_once("Layout/dashboard-table-category.php"); ?>
						
						<!-- Button trigger modal Add Category-->
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AddCategory">Thêm danh mục mới</button>
						<!-- Modal Add Category -->
						<form action="" class="col-sm-12">
							<div class="modal fade" id="AddCategory" tabindex="-1" role="dialog" aria-labelledby="AddCategoryModalLabel" aria-hidden="true">
							  <div class="modal-dialog" role="document">
								<div class="modal-content container">
									<div class="modal-header">
										<h3 class="modal-title" id="AddProductModalLabel">Thêm danh mục</h3>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
								  
									<div class="modal-body">
										<div class="form-group">
											<label for="NameProduct">Tên danh mục mới</label>
											<input type="text" class="form-control" id="NameProduct" placeholder="Tên . . .">
										</div>
									</div>
									
									<div class="modal-footer">
										<input type="submit" class="btn btn-primary btn-lg btn-block" value="Thêm sản phẩm">
									</div>
								</div>
							  </div>
							</div>
						</form>
					<br>
					</div>
				</div>
			
				<!-- content manage Order -->
				<div class="panel panel-default" id="ManageOrder">
					<h2>Quản lý</h2>

					<div class="container table-hover">
						<h3>Danh sách hóa đơn</h3>
						<table class="table ListProducts">
							<thead>
								<tr>
								<th scope="col">Id</th>
								<th scope="col">Người mua</th>
								<th scope="col">Loại sản phẩm</th>
								<th scope="col">Giá</th>
								<th scope="col">Giảm giá</th>
								<th></th>
								</tr>
							</thead>
							<tbody>

								<tr>
									<th scope="row">1</th>
									<td>Mark</td>
									<td>Otto</td>
									<td>@mdo</td>
									<td>@mdo</td>
									<td>
										<form action="" method="">
										
											<!-- Button trigger modal update order -->
											<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#UpdateOrder">Chi tiết</button>
											<!-- Modal Update Order -->
											<div class="modal fade" id="UpdateOrder" tabindex="-1" role="dialog" aria-labelledby="UpdateOrderModalLabel" aria-hidden="true">
											  <div class="modal-dialog" role="document">
												<div class="modal-content container">
													<div class="modal-header">
														<h3 class="modal-title" id="UpdateProductModalLabel">Cập nhật sản phẩm</h3>
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">&times;</span>
														</button>
													</div>
												  
													<div class="modal-body">
														<div class="form-group">
															<label for="NameProduct">Tên sản phẩm</label>
															<input type="text" class="form-control" id="NameProduct" placeholder="Tên . . .">
														</div>
														
														<div class="form-group">
															<label for="CategoryProduct">Loại sản phẩm</label>
															<input type="text" class="form-control" id="CategoryProduct" placeholder="Loại . . .">
														</div>
													</div>
													
													<div class="modal-footer">
														<button type="button" class="btn btn-primary btn-lg btn-block">Cập nhật</button>
													</div>
												</div>
											  </div>
											</div>
											
											<!-- Button trigger modal remove product-->
											<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#RemoveProduct">Xóa</button>
											<!-- Modal Remove Product -->
											<div class="modal fade" id="RemoveProduct" tabindex="-1" role="dialog" aria-labelledby="RemoveProductModalLabel" aria-hidden="true">
											  <div class="modal-dialog" role="document">
												<div class="modal-content">
												  <div class="modal-header">
													<h5 class="modal-title" id="RemoveProductModalLabel">Xóa sản phẩm</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													  <span aria-hidden="true">&times;</span>
													</button>
												  </div>
												  <div class="modal-body">
													Sản phẩm sẽ bị xóa. Bạn chắc chứ?
												  </div>
												  <div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
													<button type="button" class="btn btn-primary">Save changes</button>
												  </div>
												</div>
											  </div>
											</div>
										
										</form>
										
									</td>
								</tr>
							</tbody>
						</table>
						
						
<!-- Button trigger modal Add Product
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AddProduct">Thêm sản phẩm</button>
-->						
						<!-- Modal Add Product -->
<!--						<form action="" class="col-sm-12">
							<div class="modal fade" id="AddProduct" tabindex="-1" role="dialog" aria-labelledby="AddProductModalLabel" aria-hidden="true">
							  <div class="modal-dialog" role="document">
								<div class="modal-content container">
									<div class="modal-header">
										<h3 class="modal-title" id="AddProductModalLabel">Thêm sản phẩm</h3>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
								  
									<div class="modal-body">
										<div class="form-group">
											<label for="NameProduct">Tên sản phẩm</label>
											<input type="text" class="form-control" id="NameProduct" placeholder="Tên . . .">
										</div>
										
										<div class="form-group">
											<label for="CategoryProduct">Loại sản phẩm</label>
											<input type="text" class="form-control" id="CategoryProduct" placeholder="Loại . . .">
										</div>

										
										<div class="form-row">
											<div class="form-group col-sm-6">
												<label for="PriceProduct">Giá bán</label>
												<input type="text" class="form-control" id="PriceProduct" placeholder="Giá . . .">
											</div>
											
											<div class="form-group col-sm-6">
												<label for="SaleProduct">Giảm giá</label>
												<input type="text" class="form-control" id="SaleProduct" placeholder="Giảm giá . . .">
											</div>
										</div>
										
										<div class="form-row" >
											<div class="form-group col-sm-12">
												<div class="custom-file">
													<input type="file" class="form-control custom-file-input" id="customFile">
													<label class="custom-file-label" for="customFile">Ảnh sản phẩm</label>
												</div>
											</div>
										</div>	
									</div>
									
									<div class="modal-footer">
										<input type="submit" class="btn btn-primary btn-lg btn-block" value="Thêm sản phẩm">
									</div>
								</div>
							  </div>
							</div>
						</form>
-->						
						<br>
					</div>
				</div>
			
				<!-- content manage User -->
				<div class="panel panel-default" id="ManageUser">
					<h2>Quản lý</h2>

					<div class="container table-hover">

						<h3>Danh sách tài khoản</h3>
						<table class="table ListProducts">
							<thead>
								<tr>
									<th scope="col">Tên đăng nhập</th>
									<th scope="col">Họ và tên đệm</th>
									<th scope="col">Tên</th>
									<th scope="col">Email</th>
									<th scope="col">Số điện thoại</th>
									<th scope="col">Tùy chọn</th>
								</tr>
							</thead>
							<tbody>
							    <?php include("Layout/dashboard-table-user.php") ?>
							</tbody>
						</table>

					<br>
					</div>
				</div>
			
			</div>
		</div>
    </div>
	
	
    <!--footer-->
    <div class="site-footer">
		<div class="container-fluid">
			<br>
			<h5>Bông Xù Store</h5>
			<br>
		</div>
    </div>
	
	
	

	
	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	
	<?php
		echo " 
			<script>
				document.getElementById('{$Dashboard}').style.display = 'block';
			</script>";
		echo $NameProduct;
	?>
</body>
</html>
