<?php
if (count($dashboardController->productList) == 0)
	echo "<hr><br><p align=\"center\">Không có sản phẩm nào nào. Hãy thêm sản phẩm!!!</p>";
else
{
	$count = count($dashboardController->productList);
	echo "
	<div class=\"row\">
		<div class=\"col-sm-1\"></div>
		<h6 style=\"magrin-left:50px;\" class=\"col-sm-11\">Tổng số sản phẩm: {$count}</h6>
	</div>
	<table class=\"table ListProducts\">
		<thead>
			<tr>
				<th scope=\"col\">ID</th>
				<th scope=\"col\">Tên sản phẩm</th>
				<th scope=\"col\">Loại sản phẩm</th>
				<th scope=\"col\">Giá</th>
				<th scope=\"col\">Giảm giá</th>
				<th></th>
			</tr>
		</thead>
		<tbody>";
		
	foreach ($dashboardController->productList as $product)
	{
		$arrStringLink = explode('/', $product->imageLink);
		$nameFileImage = $arrStringLink[count($arrStringLink)-1];
		
		$temp = $dashboardController->getCategoryById($product->category);
				 #$dashboardController->countProductByCategory($category->id)
		echo "
			<tr>
				<th scope=\"row\">{$product->id}</th>
				<td>{$product->name}</td>
				<td>{$temp}</td>
				<td>{$product->price}</td>
				<td>{$product->sale}</td>
				<td>										
					<!-- Button trigger modal update product -->
					<button type=\"button\" class=\"btn btn-primary btn-sm\" data-toggle=\"modal\" data-target=\"#UpdateProduct{$product->id}\">Cập nhật</button>
					<!-- Modal Update Product -->
					<div class=\"modal fade\" id=\"UpdateProduct{$product->id}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"RemoveProductModalLabel\" aria-hidden=\"true\">
					  <div class=\"modal-dialog\" role=\"document\">
						<div class=\"modal-content container\">
						  
						  <form action=\"?page=dashboard&Dashboard=ManageProduct\" method=\"post\">
							<div class=\"modal-header\">
								<h3 class=\"modal-title\" id=\"UpdateProductModalLabel\">Cập nhật sản phẩm</h3>
								<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
									<span aria-hidden=\"true\">&times;</span>
								</button>
							</div>
						  
							<div class=\"modal-body\">
								<div class=\"form-group\">
									<label for=\"NameProduct\">Tên sản phẩm</label>
									<input type=\"text\" class=\"form-control\" id=\"NameProduct\" value=\"{$product->name}\" placeholder=\"Tên . . .\">
								</div>
								
								<div class=\"form-group\">
									<label for=\"CategoryProduct\">Loại sản phẩm</label>
									<input type=\"text\" class=\"form-control\" id=\"CategoryProduct\" value=\"{$temp}\" placeholder=\"Loại . . .\">
								</div>

								
								<div class=\"form-row\">
									<div class=\"form-group col-sm-6\">
										<label for=\"PriceProduct\">Giá bán</label>
										<input type=\"text\" class=\"form-control\" id=\"PriceProduct\" value=\"{$product->price}\" placeholder=\"Giá . . .\">
									</div>
									
									<div class=\"form-group col-sm-6\">
										<label for=\"SaleProduct\">Giảm giá</label>
										<input type=\"text\" class=\"form-control\" id=\"SaleProduct\" value=\"{$product->sale}\" placeholder=\"Giảm giá . . .\">
									</div>
								</div>
								
								<div class=\"form-row\" >
									<div class=\"form-group col-sm-12\">
										<div class=\"custom-file\">
											<input type=\"file\" class=\"form-control custom-file-input\" id=\"customFile\">
											<label class=\"custom-file-label\" for=\"customFile\">{$nameFileImage}</label>
										</div>
									</div>
								</div>	
							</div>
							
							<div class=\"modal-footer\">
								<input type=\"text\" name=\"id\" value=\"{$product->id}\" style=\"display:none;\">
								<button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Hủy</button>
								<input type=\"submit\" name=\"update\" class=\"btn btn-primary\" value=\"Cập nhật\">
							</div>
						  </form>
						</div>
					  </div>
					</div>
					
					
					<!-- Button trigger modal remove product-->
					<button type=\"button\" class=\"btn btn-danger btn-sm\" data-toggle=\"modal\" data-target=\"#Product{$product->id}\">Xóa</button>
					<!-- Modal Remove Product -->
					
					<div class=\"modal fade\" id=\"Product{$product->id}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"RemoveProductModalLabel\" aria-hidden=\"true\">
					  <div class=\"modal-dialog\" role=\"document\">
						<div class=\"modal-content\">
						  <div class=\"modal-header\">
							<h5 class=\"modal-title\" id=\"RemoveProductModalLabel\">Xóa sản phẩm</h5>
							<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
							  <span aria-hidden=\"true\">&times;</span>
							</button>
						  </div>
						  <div class=\"modal-body\">
							Sản phẩm sẽ bị xóa. Bạn muốn xóa sản phẩm này?
						  </div>
						  <div class=\"modal-footer\">
							<form action=\"?page=dashboard&Dashboard=ManageProduct\" method=\"post\">
								<input type=\"text\" name=\"id\" value=\"{$product->id}\" style=\"display:none;\">
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
	
	echo "</tbody></table>";
	
}
?>