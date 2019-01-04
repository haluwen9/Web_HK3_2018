<?php
	
if (count($dashboardController->orderList) == 0)
	echo "<hr><br><p align=\"center\">Không có hóa đơn nào!!!</p>";
else
{
	echo "	<table class=\"table ListProducts\">
				<thead>
					<tr>
						<th scope=\"col\">Id</th>
						<th scope=\"col\">Người mua</th>
						<th scope=\"col\">diffshipaddr</th>
						<th scope=\"col\">Tổng tiền</th>
						<th></th>
					</tr>
				</thead>
				<tbody>";
	
	foreach ($dashboardController->orderList as $order)
	echo "
		<tr>
			<th scope=\"row\">{$order->id}</th>
			<td>{$order->userId}</td>
			<td>{$order->diffShipAddr}</td>
			<td>{$order->totalPrice}</td>
			<td>
				

					<!-- Button trigger modal Info order -->
					<button type=\"button\" class=\"btn btn-success btn-sm\" data-toggle=\"modal\" data-target=\"#InfoUser{$order->id}\">Chi tiết</button>
					<!-- Modal Info Product -->
					<div class=\"modal fade bd-example-modal-lg\" id=\"InfoUser{$order->id}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"InfoUserModalLabel\" aria-hidden=\"true\">
					
					  <div class=\"modal-dialog modal-lg\" role=\"document\">
						<div class=\"modal-content container\">
							<div class=\"modal-header\">
								<h3 class=\"modal-title\" id=\"InfoProductModalLabel\">Thông tin</h3>
								<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
									<span aria-hidden=\"true\">&times;</span>
								</button>
							</div>
							
							<div class=\"modal-body\">
							  <div class\"row\">
							  
							  </div>
							  <div class\"row\">
								<table class=\"table table-hover\">
								  <thead>
									<tr>
									  <th scope=\"col\">STT</th>
									  <th scope=\"col\">Tên sản phẩm</th>
									  <th scope=\"col\">Số lượng</th>
									  <th scope=\"col\">Giá mỗi sản phẩm</th>
									  <th scope=\"col\">Tổng</th>
									</tr>
								  </thead>
								  <tbody>
									<tr>
									  <th scope=\"row\">1</th>
									  <td>Mark</td>
									  <td>Otto</td>
									  <td>Mark</td>
									  <td>Otto</td>
									</tr>
								  </tbody>
								</table>
							  </div>
							</div>
							
							<div class=\"modal-footer\">
								<button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Đóng</button>
							</div>
						</div>
					  </div>
					</div>
					
					<!-- Button trigger modal remove order-->
					<button type=\"button\" class=\"btn btn-danger btn-sm\" data-toggle=\"modal\" data-target=\"#RemoveOrder{$order->id}\">Xóa</button>
					<!-- Modal remove Order -->
					<div class=\"modal fade\" id=\"RemoveOrder{$order->id}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"RemoveOrderModalLabel\" aria-hidden=\"true\">
					  <div class=\"modal-dialog\" role=\"document\">
						<div class=\"modal-content\">
						  <div class=\"modal-header\">
							<h5 class=\"modal-title\" id=\"RemoveOrderModalLabel\">Xóa danh mục</h5>
							<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
							  <span aria-hidden=\"true\">&times;</span>
							</button>
						  </div>
						  <div class=\"modal-body\">
							Bạn có muốn xóa hóa đơn này?
						  </div>
						  <div class=\"modal-footer\">
							<form action=\"?page=dashboard&Dashboard=ManageOrder\" method=\"post\">
								<input type=\"text\" name=\"id\" value=\"{$order->id}\" style=\"display:none;\">
								<button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Không</button>
								<input type=\"submit\" name=\"remove\" class=\"btn btn-primary\" value=\"Có\">
							</form>
						  </div>
						</div>
					  </div>
					</div>
				
				
				
			</td>
		</tr>";

	echo "</tbody></table>";
}
?>