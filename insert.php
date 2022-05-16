
    <?php

$username = "root"; 
$password = "";     
$database = new PDO("mysql:host=localhost;dbname=book;charset=utf8;",$username,$password);

if($database){
    echo 'تم اتصال بقاعدة البيانات';
    }

if(isset($_POST['send'])){
$BName = $_POST['BName'];
$BNo = $_POST['BNo'];
$Bpage = $_POST['Bpage'];
$price = $_POST['price'];

$addData = $database->prepare("INSERT INTO bookdata(BName,BNo,Bpage,price)
VALUE(:BName,:BNo,:Bpage,:price)");

$addData->bindParam("BName",$BName);  
$addData->bindParam("BNo",$BNo);  
$addData->bindParam("Bpage",$Bpage);  
$addData->bindParam("price",$price);  


if($addData->execute()){
    echo "تم ارسال البيانات بنجاح";
 }else{
     echo "فشل اضافة البيانات";
 
 }
 
 };

?>

<form method = "POST">

BName   :   <input type="text" name = "BName" required/>
 <br>
 BNo :  <input type="text" name = "BNo" required/>
 <br>
 Bpage    :   <input type="text" name = "Bpage" required/>
 <br>
 price    :  <input type="text" name = "price" required/>
 <br>
<button type = "submit" name = "send">sent</button>
</form>
