 <?php
	foreach ($dashboardController->userList as $user)
	{
		$fullname = $user->firstname." ".$user->lastname;
		$address = $user->streetAddress.", ".$user->province.", ".$user->county;
		echo "						
			<tr>
				<th scope=\"row\" class=\"User\">{$user->id}</th>
				<td>{$user->lastname}</td>
				<td>{$user->firstname}</td>
				<td>{$user->email}</td>
				<td>{$user->tel}</td>
				<td>
					<!-- Button trigger modal Info user -->
					<button type=\"button\" class=\"btn btn-success btn-sm\" data-toggle=\"modal\" data-target=\"#InfoUser{$user->id}\">Chi tiết</button>
					<!-- Modal Info Product -->
					<div class=\"modal fade\" id=\"InfoUser{$user->id}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"InfoUserModalLabel\" aria-hidden=\"true\">
					  <div class=\"modal-dialog\" role=\"document\">
						<div class=\"modal-content container\">
							<div class=\"modal-header\">
								<h3 class=\"modal-title\" id=\"InfoProductModalLabel\">Thông tin</h3>
								<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
									<span aria-hidden=\"true\">&times;</span>
								</button>
							</div>
						  
							<div class=\"modal-body\">
								<div class=\"form-row\">
									<div class=\"form-group col-sm-12\">
										<label for=\"LastName\"><b>Họ và tên: </b>{$fullname}</label>
									</div>
								</div>

								<div class=\"form-row\">
									<div class=\"form-group col-sm-12\">
										<label for=\"LastName\"><b>Địa chỉ: </b>{$address}</label>
									</div>
								</div>
								
								<div class=\"form-row\">
									<div class=\"form-group col-sm-12\">
										<label for=\"LastName\"><b>Quốc gia: </b>{$user->country}</label>
									</div>
								</div>
								
								<div class=\"form-row\">
									<div class=\"form-group col-sm-12\">
										<label for=\"LastName\"><b>Số điện thoại: </b>{$user->country}</label>
									</div>
								</div>
								
								<div class=\"form-row\">
									<div class=\"form-group col-sm-12\">
										<label for=\"LastName\"><b>Facebook: </b><a href=\"https://www.facebook.com/{$user->facebook}\">/{$user->facebook}</a></label>
									</div>
								</div>

								<div class=\"form-row\">
									<div class=\"form-group col-sm-12\">
										<label for=\"LastName\"><b>Twitter: </b><a href=\"https://twitter.com/{$user->twitter}\">@{$user->twitter}</a></label>
									</div>
								</div>

								<div class=\"form-row\">
									<div class=\"form-group col-sm-12\">
										<label for=\"LastName\"><b>Google: </b><a href=\"https://plus.google.com/{$user->google}\">{$user->google}</a></label>
									</div>
								</div>									
							</div>
							
							<div class=\"modal-footer\">
								<button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Đóng</button>
							</div>
						</div>
					  </div>
					</div>
					
					<!-- Button trigger modal update user -->
					<button type=\"button\" class=\"btn btn-primary btn-sm\" data-toggle=\"modal\" data-target=\"#UpdateUser{$user->id}\">Cập nhật</button>
					<!-- Modal Update Product -->
					<div class=\"modal fade\" id=\"UpdateUser{$user->id}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"UpdateUserModalLabel\" aria-hidden=\"true\">
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
										<input type=\"text\" name=\"lastname\" class=\"form-control\" id=\"LastName\" value=\"{$user->lastname}\" placeholder=\"Họ và tên đệm . . .\">
									</div>
									
									<div class=\"form-group col-sm-6\">
										<label for=\"FirstName\">Tên</label>
										<input type=\"text\" name=\"firstname\" class=\"form-control\" id=\"FirstName\" value=\"{$user->firstname}\" placeholder=\"Tên . . .\">
									</div>
								</div>


								<div class=\"form-row\">
									<div class=\"form-group col-sm-4\">
										<label for=\"PriceProduct\">Quốc gia</label>
										<input type=\"text\" name=\"country\" class=\"form-control\" id=\"PriceProduct\" value=\"{$user->country}\" placeholder=\"\">
									</div>
									
									<div class=\"form-group col-sm-4\">
										<label for=\"SaleProduct\">Tỉnh</label>
										<input type=\"text\" name=\"county\" class=\"form-control\" id=\"SaleProduct\" value=\"{$user->county}\" placeholder=\" \">
									</div>
									
									<div class=\"form-group col-sm-4\">
										<label for=\"SaleProduct\">Quận / Huyện</label>
										<input type=\"text\" name=\"province\" class=\"form-control\" id=\"SaleProduct\" value=\"{$user->province}\" placeholder=\" \">
									</div>
								</div>
								
								
								<div class=\"form-row\" >
									<div class=\"form-group col-sm-12\">
										<label for=\"SaleProduct\">Địa chỉ</label>
										<input type=\"text\" name=\"streetAddress\" class=\"form-control\" id=\"SaleProduct\" value=\"{$user->streetAddress}\" placeholder=\" \">
									</div>
								</div>
								
								
								<div class=\"form-row\" >									
									<div class=\"form-group col-sm-9\">
										<label for=\"SaleProduct\">Số điện thoại</label>
										<input type=\"text\" name=\"telephone\" class=\"form-control\" id=\"SaleProduct\" value=\"{$user->tel}\" placeholder=\" \">
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
					<button type=\"button\" class=\"btn btn-danger btn-sm\" data-toggle=\"modal\" data-target=\"#RemoveUser{$user->id}\">Xóa</button>
					<!-- Modal Remove Product -->
					<div class=\"modal fade\" id=\"RemoveUser{$user->id}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"RemoveUserModalLabel\" aria-hidden=\"true\">
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
							<form action=\"?page=dashboard&Dashboard=ManageUser\" method=\"post\">
								<input type=\"text\" name=\"id\" value=\"{$user->id}\" style=\"display:none;\">
								<button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Không</button>
								<input type=\"submit\" name=\"remove\" class=\"btn btn-primary\" value=\"Có\">
							</form>
						  </div>
						</div>
					  </div>
					</div>
				</td>
			</tr>";
	}
?>
							