<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Anil Labs - Codeigniter mail templates</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
   <!-- <h4><?php echo 'My Full Name  is  '."<em>$fullname</em>"; ?></h4>
   <h4><?php echo 'My Phone number is   '."<em>$phone</em>"; ?></h4>
   <h4><?php echo 'My Address is   '."<em>$address</em>"; ?></h4>
   <h4><?php echo 'This is my message.'."<br>"."<em>$message</em>"; ?></h4> -->


   <table class="table table-striped">
       <tr>
         <th style="background-color:#d6d2d2">Անուն Ազգանուն</th>
         <th style="background-color: #a8f1b9"><?php echo $fullname ?></th>
       </tr> 
       <tr>
         <th style="background-color:#d6d2d2">Հեռ․ համար</th>
         <th style="background-color: #a8f1b9"><?php echo $phone ?></th>
       </tr> 
       <tr>
         <th style="background-color:#d6d2d2">Հասցե</th>
         <th style="background-color: #a8f1b9"><?php echo $address ?></th>
       </tr>
       <tr>
         <th style="background-color:#d6d2d2">Հաղորդագրություն</th>
         <th style="background-color: #a8f1b9"><?php echo $message ?></th>
       </tr>
 
   </table>
   
   <table class="table table-striped">
   	  <h4>Order Product</h4>   

      <tr class="" style="background-color:#d6d2d2">
        <th>Արտադրանքի անվանում</th>
        <th>Արտադրանքի քաշը (կգ)</th>
        <th>Արտադրանքի ընդհանուր գումար</th>
      </tr>
       	<?php foreach($product as $value ){
       		$name   = $value['Արտադրանքի անվանում'];
       		$count  = $value['Արտադրանքի քաշը (կգ)'];
       		$total  = $value['Արտադրանքի ընդհանուր գումար'];

       	 ?>
      <tr class="" style="background-color: #a8f1b9">
        <td><?php echo "<em>$name</em>" ?></td>
        <td><?php echo "<em>$count</em>" ?></td>
        <td><?php echo "<em>$total</em>".' դրամ' ?></td>
      </tr>
     <?php } ?>
 
   </table>
</div>
</body>
</html>