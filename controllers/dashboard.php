<?php	

include_once("models/product_model.php");
include_once("models/order_model.php");
include_once("models/user_model.php");

#include_once("controllers/utilities.php");


//if (!isset($_SESSION["Dashboard"])) 
	//$_SESSION["Dashboard"] = "ManageProduct";

$NameProduct = NULL;
if (isset($_POST["NameProduct"])) $NameProduct = $_POST["NameProduct"];
	

$Dashboard;
if (isset($_GET["Dashboard"])) 
	$Dashboard = $_GET["Dashboard"];
else 
	$Dashboard = 'ManageProduct';

// Product

class dashboardControllerProduct
{
    private $productModel;
	public $productList;
	
    public function __construct()
    {
        $this->productModel = new productModel;
		$this->productList = $this->productModel->getAllProducts();
    }
}

//Category
class dashboardControllerCategory
{
    private $productModel;
	public $categoryList;
	
    public function __construct()
    {
        $this->productModel = new productModel;
		$this->categoryList = $this->productModel->getCategories();
    }
	
	public function countProductByCategory($category)
	{
		return count($this->productModel->getAllProducts());
		#return count($this->productModel->getProductsByCategory($category));
	}
}

// User
class dashboardControllerUser
{
    private $userModel;
	public $userList;
	
    public function __construct()
    {
        $this->userModel = new userModel;
        $this->userList = $this->userModel->getAllUsers();
    }
}

$dashboardControllerProduct = new dashboardControllerProduct();
$dashboardControllerCategory = new dashboardControllerCategory();
$dashboardControllerUser = new dashboardControllerUser();

include_once("views\dashboard.php");
?>