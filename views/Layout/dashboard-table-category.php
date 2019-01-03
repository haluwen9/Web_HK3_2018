<?php

if (count($dashboardController->categoryList) == 0)
	echo "<hr><br><p align=\"center\">Không có danh mục nào. Hãy thêm danh mục!!!</p>";
else
{
	echo "
	<table class=\"table ListCategory\">
		<thead>
			<tr>
			<th scope=\"col\">Id</th>
			<th scope=\"col\">Tên danh mục</th>
			<th scope=\"col\">Số lượng sản phẩm</th>
			<th></th>
			</tr>
		</thead>
		<tbody>";
		
	foreach ($dashboardController->categoryList as $category)
		echo "
			<tr>
				<th scope=\"row\">{$category->id}</th>
				<td>{$category->name}</td>
				<td>{$dashboardController->countProductByCategory($category->id)}</td>
				<td>					
					<!-- Button trigger modal update category -->
					<button type=\"button\" class=\"btn btn-primary btn-sm\" data-toggle=\"modal\" data-target=\"#UpdateCategory{$category->id}\">Cập nhật</button>
					<!-- Modal Update category -->
					<div class=\"modal fade\" id=\"UpdateCategory{$category->id}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"UpdateCategoryModalLabel\" aria-hidden=\"true\">
					  <div class=\"modal-dialog\" role=\"document\">
						<div class=\"modal-content container\">
							<form action=\"?page=dashboard&Dashboard=ManageCategory\" method=\"post\">
								<div class=\"modal-header\">
									<h3 class=\"modal-title\" id=\"UpdateCategoryModalLabel\">Cập nhật danh mục</h3>
									<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
										<span aria-hidden=\"true\">&times;</span>
									</button>
								</div>
							  
								<div class=\"modal-body\">
									<div class=\"form-group\">
										<label for=\"NameCategory\">Tên mới cho danh mục</label>
										<input type=\"text\" name=\"newNameCategory\" class=\"form-control\" id=\"NameCategory\" placeholder=\"Tên mới . . .\">
									</div>
								</div>
								
								<div class=\"modal-footer\">
									<input type=\"text\" name=\"id\" value=\"{$category->id}\" style=\"display:none;\">
									<input type=\"submit\" name=\"update\" class=\"btn btn-primary\" value=\"Cập nhật\">
								</div>
							</form>
						</div>
					  </div>
					</div>
					
					<!-- Button trigger modal remove category-->
					<button type=\"button\" class=\"btn btn-danger btn-sm\" data-toggle=\"modal\" data-target=\"#RemoveCategory{$category->id}\">Xóa</button>
					<!-- Modal remove category -->
					<div class=\"modal fade\" id=\"RemoveCategory{$category->id}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"RemoveCategoryModalLabel\" aria-hidden=\"true\">
					  <div class=\"modal-dialog\" role=\"document\">
						<div class=\"modal-content\">
						  <div class=\"modal-header\">
							<h5 class=\"modal-title\" id=\"RemoveCategoryModalLabel\">Xóa danh mục</h5>
							<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
							  <span aria-hidden=\"true\">&times;</span>
							</button>
						  </div>
						  <div class=\"modal-body\">
							Bạn có muốn xóa danh mục này?
						  </div>
						  <div class=\"modal-footer\">
							<form action=\"?page=dashboard&Dashboard=ManageCategory\" method=\"post\">
								<input type=\"text\" name=\"id\" value=\"{$category->id}\" style=\"display:none;\">
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