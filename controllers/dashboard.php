<?php	

include_once("models/product_model.php");
include_once("models/order_model.php");
include_once("models/user_model.php");

$a = 0;

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
	public function deleteProduct($id)
	{
		$this->productModel->deleteProduct($id);
	}
}

//Category
class dashboardControllerCategory
{
    private $productModel;
	public $categoryList;
	
    public function __construct()
    {
        $this->productModel = new productModel();
		$this->categoryList = $this->productModel->getCategories();
    }
	
	public function countProductByCategory($CategoryID)
	{
		return count($this->productModel->getAllProducts());
		#return count($this->productModel->getProductsByCategory($CategoryID));
	}
	
	public function insertCategory($name)
	{
		$this->productModel->insertCategory($name);
	}
	
	public function updateCategory($id, $name)
	{
		$Category = new ProductCategory($id, $name);
		$this->productModel->updateCategory($Category);
	}
	
	public function deleteCategory($id)
	{
		$this->productModel->deleteCategory($id);
	}
}

// Order
class dashboardControllerOrder
{
	private $orderModel;
	public $orderList;
	
	public function __construct()
    {
        $this->orderModel = new orderModel();
        $this->orderList = $this->orderModel->getAllOrders();
    }
}

// User
class dashboardControllerUser
{
    private $userModel;
	public $userList;
	
    public function __construct()
    {
        $this->userModel = new userModel();
        $this->userList = $this->userModel->getAllUsers();
    }
	
	public function deleteUser($id)
	{
		$this->userModel->deleteUser($id);
	}
}

// Load dashboard
$Dashboard;
if (isset($_GET["Dashboard"])) 
	$Dashboard = $_GET["Dashboard"];
else 
	$Dashboard = 'ManageProduct';


$dashboardController;
switch ($Dashboard)
{
	case 'ManageCategory':
		$dashboardController = new dashboardControllerCategory();
		if (isset($_POST['id']))
		{
			// Remove
			$id = $_POST['id'];
			if (isset($_POST['remove']))
			{
				$dashboardController->deleteCategory($id);
				header("Location: index.php?page=dashboard&Dashboard=ManageCategory");
			}
			else 
				// Update
				if (isset($_POST['update']))
				{
					$dashboardController->updateCategory($id, $_POST['newNameCategory']);
					header("Location: index.php?page=dashboard&Dashboard=ManageCategory");
				}
		}

		// Add
		if (isset($_POST['add']) && isset($_POST['NameProduct']))
		{
			$a = $_POST['NameProduct'];
			$dashboardController->insertCategory($_POST['NameProduct']);
			header("Location: index.php?page=dashboard&Dashboard=ManageCategory");
		}
		break;
		
	case 'ManageOrder':
		$dashboardController = new dashboardControllerOrder();
		break;	
			
	case 'ManageUser':
		$dashboardController = new dashboardControllerUser();

		break;
	
	default:
		$dashboardController = new dashboardControllerProduct();
		if (isset($_POST['id']))
		{
			$id = $_POST['id'];
			if (isset($_POST['remove']))
			{
				$dashboardController->deleteProduct($id);
				header("Location: index.php?page=dashboard");
			}
			else
			{
				
			}
		}
}

include_once("views\dashboard.php");
?>