 <?php
	foreach ($dashboardControllerUser->userList as $user)
		echo "						
			<tr>
				<th scope=\"row\" class=\"User\">{$user->id}</th>
				<td>{$user->lastname}</td>
				<td>{$user->firstname}</td>
				<td>{$user->email}</td>
				<td>{$user->tel}</td>
				<td>
					<!-- Button trigger modal update user -->
					<button type=\"button\" class=\"btn btn-success btn-sm\" data-toggle=\"modal\" data-target=\"#InfoUser\">Chi tiết</button>
					
					<!-- Button trigger modal update user -->
					<button type=\"button\" class=\"btn btn-primary btn-sm\" data-toggle=\"modal\" data-target=\"#UpdateUser\">Cập nhật</button>
					<!-- Modal Update Product -->
					<div class=\"modal fade\" id=\"UpdateUser\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"UpdateUserModalLabel\" aria-hidden=\"true\">
					  <div class=\"modal-dialog\" role=\"document\">
						<div class=\"modal-content container\">
							<div class=\"modal-header\">
								<h3 class=\"modal-title\" id=\"UpdateProductModalLabel\">Cập nhật tài khoản</h3>
								<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
									<span aria-hidden=\"true\">&times;</span>
								</button>
							</div>
						  
							<div class=\"modal-body\">
								<div class=\"form-row\">
									<div class=\"form-group col-sm-6\">
										<label for=\"LastName\">Họ và tên đệm</label>
										<input type=\"text\" class=\"form-control\" id=\"LastName\" placeholder=\"Họ và tên đệm . . .\">
									</div>
									
									<div class=\"form-group col-sm-6\">
										<label for=\"FirstName\">Tên</label>
										<input type=\"text\" class=\"form-control\" id=\"FirstName\" placeholder=\"Tên . . .\">
									</div>
								</div>


								<div class=\"form-row\">
									<div class=\"form-group col-sm-4\">
										<label for=\"PriceProduct\">Quốc gia</label>
										<input type=\"text\" class=\"form-control\" id=\"PriceProduct\" placeholder=\"\">
									</div>
									
									<div class=\"form-group col-sm-4\">
										<label for=\"SaleProduct\">Tỉnh</label>
										<input type=\"text\" class=\"form-control\" id=\"SaleProduct\" placeholder=\" \">
									</div>
									
									<div class=\"form-group col-sm-4\">
										<label for=\"SaleProduct\">Quận / Huyện</label>
										<input type=\"text\" class=\"form-control\" id=\"SaleProduct\" placeholder=\" \">
									</div>
								</div>
								
								
								<div class=\"form-row\" >
									<div class=\"form-group col-sm-12\">
										<label for=\"SaleProduct\">Địa chỉ</label>
										<input type=\"text\" class=\"form-control\" id=\"SaleProduct\" placeholder=\" \">
									</div>
								</div>
								
								
								<div class=\"form-row\" >
									<div class=\"form-group col-sm-6\">
										<label for=\"SaleProduct\">Địa chỉ</label>
										<input type=\"text\" class=\"form-control\" id=\"SaleProduct\" placeholder=\" \">
									</div>
									
									<div class=\"form-group col-sm-6\">
										<label for=\"SaleProduct\">Địa chỉ</label>
										<input type=\"text\" class=\"form-control\" id=\"SaleProduct\" placeholder=\" \">
									</div>
								</div>
								
								<div class=\"form-row\" >
									
								</div>
								
							</div>
							
							<div class=\"modal-footer\">
								<button type=\"button\" class=\"btn btn-primary btn-lg btn-block\">Cập nhật</button>
							</div>
						</div>
					  </div>
					</div>
					
					<!-- Button trigger modal remove user-->
					<button type=\"button\" class=\"btn btn-danger btn-sm\" data-toggle=\"modal\" data-target=\"#RemoveUser\">Xóa</button>
					<!-- Modal Remove Product -->
					<div class=\"modal fade\" id=\"RemoveUser\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"RemoveUserModalLabel\" aria-hidden=\"true\">
					  <div class=\"modal-dialog\" role=\"document\">
						<div class=\"modal-content\">
						  <div class=\"modal-header\">
							<h5 class=\"modal-title\" id=\"RemoveProductModalLabel\">Xóa tài khoản</h5>
							<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
							  <span aria-hidden=\"true\">&times;</span>
							</button>
						  </div>
						  <div class=\"modal-body\"> Tài khoản sẽ bị xóa. Bạn muốn chứ?</div>
						  <div class=\"modal-footer\">
							<button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Không</button>
							<button type=\"button\" class=\"btn btn-primary\">Có</button>
						  </div>
						</div>
					  </div>
					</div>
				</td>
			</tr>"
?>
							