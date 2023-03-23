<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "flipkart";

try{
    $db = mysqli_connect($server,$user,$password,$database);
    if(mysqli_error($db)){
        echo "connection error";
        die;
    }
}catch(Exception $e){
    echo "An Error Has Occured";
    die;
}

// Function for product_category Table
function AddCategory($name,$description,$image){
    global $db;
    $timestamp = date("Y-m-d h:i:s");
    $query = "insert into product_category (name,description,image,created_at,modified_at) values('$name','$description','$image','$timestamp','$timestamp')";
    $result = mysqli_query($db,$query);
    if($result>0){
        return true;
    }
    else{
       return false;
    }
}

function UpdateCategory($id,$name,$description,$image){
    global $db;
    $timestamp = date("Y-m-d h:i:s");
    $query = "update product_category set name='$name',description='$description',image='$image',modified_at='$timestamp' where id='$id'";
    $result = mysqli_query($db,$query);
    if($result>0){
        return true;
    }
    else{
       return false;
    }
}

function DeleteCategory($id){
    global $db;
    $timestamp = date("Y-m-d h:i:s");
    $query = "update product_category set deleted_at='$timestamp' where id='$id'";
    $result = mysqli_query($db,$query);
    if($result>0){
        return true;
    }
    else{
       return false;
    }
}

function GetCategory($id){
    global $db;
    $query = "select * from product_category where id='$id'";
    $result = mysqli_query($db,$query);
    if(mysqli_num_rows($result)>0){
        return mysqli_fetch_assoc($result);
    }
    else{
       return [];
    }    
}

function GetCategoryName($id){
    global $db;
    $query = "select name from product_category where id='$id'";
    $result = mysqli_query($db,$query);
    if(mysqli_num_rows($result)>0){
        return mysqli_fetch_assoc($result)['name'];
    }
    else{
       return '';
    }    
}


function GetCategories(){
    global $db;
    $query = "select * from product_category";
    $result = mysqli_query($db,$query);
    if(mysqli_num_rows($result)>0){
        return mysqli_fetch_all($result,MYSQLI_ASSOC);
    }
    else{
       return [];
    }    
}



// // Function for product_inventory Table

    // function AddInventory($quantity){
    //     global $db;
    //     $timestamp = date("Y-m-d h:i:s");
    //     $query = "insert into product_inventory (quantity,created_at,modified_at) values('$quantity','$timestamp','$timestamp')";
    //     $result = mysqli_query($db,$query);
    //     if($result>0){
    //         return true;
    //     }
    //     else{
    //        return false;
    //     }
    // }

    // function UpdateInventory($id,$quantity){
    //     global $db;
    //     $timestamp = date("Y-m-d h:i:s");
    //     $query = "update product_inventory set quantity='$quantity',modified_at='$timestamp' where id='$id'";
    //     $result = mysqli_query($db,$query);
    //     if($result>0){
    //         return true;
    //     }
    //     else{
    //        return false;
    //     }
    // }

    // function DeleteInventory($id){
    //     global $db;
    //     $timestamp = date("Y-m-d h:i:s");
    //     $query = "update product_inventory set deleted_at='$timestamp' where id='$id'";
    //     $result = mysqli_query($db,$query);
    //     if($result>0){
    //         return true;
    //     }
    //     else{
    //        return false;
    //     }
    // }

    // function GetInventory($id){
    //     global $db;
    //     $query = "select * from product_inventory where id='$id'";
    //     $result = mysqli_query($db,$query);
    //     if(mysqli_num_rows($result)>0){
    //         return mysqli_fetch_assoc($result);
    //     }
    //     else{
    //        return [];
    //     }    
    // }

    // function GetInventoryQuantity($id){
    //     global $db;
    //     $query = "select quantity from product_inventory where id='$id'";
    //     $result = mysqli_query($db,$query);
    //     if(mysqli_num_rows($result)>0){
    //         return mysqli_fetch_assoc($result)['quantity'];
    //     }
    //     else{
    //        return '';
    //     }    
    // }

    // function GetInventories(){
    //     global $db;
    //     $query = "select * from product_inventory";
    //     $result = mysqli_query($db,$query);
    //     if(mysqli_num_rows($result)>0){
    //         return mysqli_fetch_all($result,MYSQLI_ASSOC);
    //     }
    //     else{
    //        return [];
    //     }    
    // }




// Function for discount Table
function AddDiscount($name,$description,$discount_percent,$active){
    global $db;
    $timestamp = date("Y-m-d h:i:s");
    $query = "insert into discount (name,description,discount_percent,active,created_at,modified_at) values('$name','$description','$discount_percent','$active','$timestamp','$timestamp')";
    $result = mysqli_query($db,$query);
    if($result>0){
        return true;
    }
    else{
       return false;
    }
}

function UpdateDiscount($id,$name,$description,$discount_percent,$active){
    global $db;
    $timestamp = date("Y-m-d h:i:s");
    $query = "update discount set name='$name',description='$description',discount_percent='$discount_percent',active='$active',modified_at='$timestamp' where id='$id'";
    $result = mysqli_query($db,$query);
    if($result>0){
        return true;
    }
    else{
       return false;
    }
}

function DeleteDiscount($id){
    global $db;
    $timestamp = date("Y-m-d h:i:s");
    $query = "update discount set deleted_at='$timestamp' where id='$id'";
    $result = mysqli_query($db,$query);
    if($result>0){
        return true;
    }
    else{
       return false;
    }
}

function GetDiscount($id){
    global $db;
    $query = "select * from discount where id='$id'";
    $result = mysqli_query($db,$query);
    if(mysqli_num_rows($result)>0){
        return mysqli_fetch_assoc($result);
    }
    else{
       return [];
    }    
}

function GetDiscountPercent($id){
    global $db;
    $query = "select discount_percent from discount where id='$id'";
    $result = mysqli_query($db,$query);
    if(mysqli_num_rows($result)>0){
        return mysqli_fetch_assoc($result)['discount_percent'];
    }
    else{
       return '';
    }    
}

function GetDiscounts(){
    global $db;
    $query = "select * from discount";
    $result = mysqli_query($db,$query);
    if(mysqli_num_rows($result)>0){
        return mysqli_fetch_all($result,MYSQLI_ASSOC);
    }
    else{
       return [];
    }    
}

// Function for product Table
function AddProduct($name,$description,$SKU,$category_id,$inventory,$price,$discount_id,$featured){
    global $db;
    $timestamp = date("Y-m-d h:i:s");
    $query = "insert into product (name,description,SKU,category_id,inventory,price,discount_id,featured,created_at,modified_at) values('$name','$description','$SKU','$category_id','$inventory','$price','$discount_id','$featured','$timestamp','$timestamp')";
    $result = mysqli_query($db,$query);
    if($result>0){
        return true;
    }
    else{
       return false;
    }
}

function UpdateProduct($id,$name,$description,$SKU,$category_id,$inventory,$price,$discount_id,$featured){
    global $db;
    $timestamp = date("Y-m-d h:i:s");
    $query = "update product set name='$name',description='$description',SKU='$SKU',category_id='$category_id',inventory='$inventory',price='$price',discount_id='$discount_id',featured='$featured',modified_at='$timestamp' where id='$id'";
    $result = mysqli_query($db,$query);
    if($result>0){
        return true;
    }
    else{
       return false;
    }
}

function DeleteProduct($id){
    global $db;
    $timestamp = date("Y-m-d h:i:s");
    $query = "update product set deleted_at='$timestamp' where id='$id'";
    $result = mysqli_query($db,$query);
    if($result>0){
        return true;
    }
    else{
       return false;
    }
}

function GetProduct($id){
    global $db;
    $query = "select * from product where id='$id'";
    $result = mysqli_query($db,$query);
    if(mysqli_num_rows($result)>0){
        return mysqli_fetch_assoc($result);
    }
    else{
       return [];
    }    
}

function GetProducts(){
    global $db;
    $query = "select * from product";
    $result = mysqli_query($db,$query);
    if(mysqli_num_rows($result)>0){
        return mysqli_fetch_all($result,MYSQLI_ASSOC);
    }
    else{
       return [];
    }    
}

function GetProductsByCategory($id){
    global $db;
    $query = "select * from product where category_id='$id'";
    $result = mysqli_query($db,$query);
    if(mysqli_num_rows($result)>0){
        return mysqli_fetch_all($result,MYSQLI_ASSOC);
    }
    else{
       return [];
    }    
}

function GetProductsByDicount($id){
    global $db;
    $query = "select * from product where discount_id='$id'";
    $result = mysqli_query($db,$query);
    if(mysqli_num_rows($result)>0){
        return mysqli_fetch_all($result,MYSQLI_ASSOC);
    }
    else{
       return [];
    }    
}

// Function for product_images Table
function AddProductImg($product_id,$image){
    global $db;
    $timestamp = date("Y-m-d h:i:s");
    $query = "insert into product_images (product_id,url) values('$product_id','$image')";
    $result = mysqli_query($db,$query);
    if($result>0){
        return true;
    }
    else{
       return false;
    }
}

function UpdateProductImg($id,$product_id,$image){
    global $db;
    $timestamp = date("Y-m-d h:i:s");
    $query = "update product_images set product_id='$product_id',url='$image' where id='$id'";
    $result = mysqli_query($db,$query);
    if($result>0){
        return true;
    }
    else{
       return false;
    }
}


function GetProductImages($product_id){
    global $db;
    $query = "select * from product_images where product_id=$product_id";
    $result = mysqli_query($db,$query);
    if(mysqli_num_rows($result)>0){
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
    else{
       return [];
    }    
}

function GetImages(){
    global $db;
    $query = "select * from product_images";
    $result = mysqli_query($db,$query);
    if(mysqli_num_rows($result)>0){
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
    else{
       return [];
    }    
}

function GetProductThumbnail($product_id){
    global $db;
    $query = "select * from product_images where product_id=$product_id LIMIT 1"; 
    $result = mysqli_query($db,$query);
    if(mysqli_num_rows($result)>0){
        $image = mysqli_fetch_assoc($result);
        return $image['url'];
    }
    else{
       return [];
    }    
}

// Function for user table 

function CreateUser($name,$email,$password){
    global $db;
    $query = "insert into user (name,email,password) values('$name','$email','$password')";
    $result = mysqli_query($db,$query);
    if($result>0){
        return true;
    }
    else{
       return false;
    }
}

function GetUser($email,$password){
    global $db;
    $query = "select * from user where email='$email' and password='$password' "; 
    $result = mysqli_query($db,$query);
    if(mysqli_num_rows($result)>0){
        return mysqli_fetch_assoc($result);
    }
    else{
       return [];
    }
}

// Function for Application Table

function AddApplication($name,$subtitle,$display_subtitle,$logo,$display_logo,$email,$phone,$address){
    global $db;
    $query = "insert into application (name,subtitle,display_subtitle,logo,display_logo,email,phone,address) values('$name','$subtitle','$display_subtitle','$logo','$display_logo','$email','$phone','$address')";
    $result = mysqli_query($db,$query);
    if($result>0){
        return true;
    }
    else{
       return false;
    }
}

function UpdateApplication($id,$name,$subtitle,$display_subtitle,$logo,$display_logo,$email,$phone,$address){
    global $db;
    $query = "update application set name='$name',subtitle='$subtitle',display_subtitle='$display_subtitle',logo='$logo',display_logo='$display_logo',email='$email',phone='$phone',address='$address' where id='$id'";
    $result = mysqli_query($db,$query);
    if($result>0){
        return true;
    }
    else{
       return false;
    }
}

function GetApplication($id){
    global $db;
    $query = "select * from application where id='$id'";
    $result = mysqli_query($db,$query);
    if(mysqli_num_rows($result)>0){
        return mysqli_fetch_assoc($result);
    }
    else{
       return [];
    }    
}

function GetApplicationName($id){
    global $db;
    $query = "select name from application where id='$id'";
    $result = mysqli_query($db,$query);
    if(mysqli_num_rows($result)>0){
        return mysqli_fetch_assoc($result)['name'];
    }
    else{
       return '';
    }    
}


function GetApplications(){
    global $db;
    $query = "select * from application";
    $result = mysqli_query($db,$query);
    if(mysqli_num_rows($result)>0){
        return mysqli_fetch_all($result,MYSQLI_ASSOC);
    }
    else{
       return [];
    }    
}


?>