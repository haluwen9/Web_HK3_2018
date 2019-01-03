<?php
if (count($dashboardControllerProduct->productList) == 0)
	echo "<hr><br><p align=\"center\">Không có sản phẩm nào nào. Hãy thêm sản phẩm!!!</p>";
else
{
	echo "
	<table class=\"table ListProducts\">
		<thead>
			<tr>
				<th scope=\"col\">Id</th>
				<th scope=\"col\">Tên sản phẩm</th>
				<th scope=\"col\">Loại sản phẩm</th>
				<th scope=\"col\">Giá</th>
				<th scope=\"col\">Giảm giá</th>
				<th></th>
			</tr>
		</thead>
		<tbody>";
		
	foreach ($dashboardControllerProduct->productList as $product)
		echo "
			<tr>
				<th scope=\"row\">{$product->id}</th>
				<td>{$product->name}</td>
				<td>{$product->category}</td>
				<td>{$product->price}</td>
				<td>{$product->sale}</td>
				<td>										
					<!-- Button trigger modal update product -->
					<button type=\"button\" class=\"btn btn-primary btn-sm\" data-toggle=\"modal\" data-target=\"#UpdateProduct\">Cập nhật</button>
					<!-- Modal Update Product -->
					<div class=\"modal fade\" id=\"UpdateProduct\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"RemoveProductModalLabel\" aria-hidden=\"true\">
					  <div class=\"modal-dialog\" role=\"document\">
						<div class=\"modal-content container\">
							<div class=\"modal-header\">
								<h3 class=\"modal-title\" id=\"UpdateProductModalLabel\">Cập nhật sản phẩm</h3>
								<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
									<span aria-hidden=\"true\">&times;</span>
								</button>
							</div>
						  
							<div class=\"modal-body\">
								<div class=\"form-group\">
									<label for=\"NameProduct\">Tên sản phẩm</label>
									<input type=\"text\" class=\"form-control\" id=\"NameProduct\" placeholder=\"Tên . . .\">
								</div>
								
								<div class=\"form-group\">
									<label for=\"CategoryProduct\">Loại sản phẩm</label>
									<input type=\"text\" class=\"form-control\" id=\"CategoryProduct\" placeholder=\"Loại . . .\">
								</div>

								
								<div class=\"form-row\">
									<div class=\"form-group col-sm-6\">
										<label for=\"PriceProduct\">Giá bán</label>
										<input type=\"text\" class=\"form-control\" id=\"PriceProduct\" placeholder=\"Giá . . .\">
									</div>
									
									<div class=\"form-group col-sm-6\">
										<label for=\"SaleProduct\">Giảm giá</label>
										<input type=\"text\" class=\"form-control\" id=\"SaleProduct\" placeholder=\"Giảm giá . . .\">
									</div>
								</div>
								
								<div class=\"form-row\" >
									<div class=\"form-group col-sm-12\">
										<div class=\"custom-file\">
											<input type=\"file\" class=\"form-control custom-file-input\" id=\"customFile\">
											<label class=\"custom-file-label\" for=\"customFile\">Ảnh sản phẩm</label>
										</div>
									</div>
								</div>	
							</div>
							
							<div class=\"modal-footer\">
								<button type=\"button\" class=\"btn btn-primary btn-lg btn-block\">Cập nhật</button>
							</div>
						</div>
					  </div>
					</div>

					<!-- Button trigger modal remove product-->
					<button type=\"button\" class=\"btn btn-danger btn-sm\" data-toggle=\"modal\" data-target=\"#RemoveProduct\">Xóa</button>
					<!-- Modal Remove Product -->
					<div class=\"modal fade\" id=\"RemoveProduct\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"RemoveProductModalLabel\" aria-hidden=\"true\">
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
							<button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Không</button>
							<button type=\"button\" class=\"btn btn-primary\">Có</button>
						  </div>
						</div>
					  </div>
					</div>
					
				</td>
			</tr>";
	echo "</tbody></table>";
}
?>