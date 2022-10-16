<!DOCTYPE html>
<html lang="en">
<head>
  <style>
    body {
background-color: #FFEBCD
}
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>READY PiZZA</title>
</head>
<body>
    <h1 align="Center">THANK YOU</h1>
    <hr />
      <p>Thank you for ordering from Black Goose Bistro. We Have received the following information about your order :</p>
        <br>
        <p style="color:tomato;">
        <strong>Your Information</strong>
      </p>
      
    <table>
        <tr>
            <td><b>Nama</b></td>
            <td><b>:</b></td>
            <td><?php echo $_POST['name']?></td>
</tr>
<tr>
            <td><b>Address</b></td>
            <td><b>:</b></td>
            <td><?php echo $_POST['address']?></td>
        </tr>
        <tr>
            <td><b>Telephone</b></td>
            <td><b>:</b></td>
            <td><?php echo $_POST['telephone']?></td>
        </tr>
        <tr>
            <td><b>Email</b></td>
            <td><b>:</b></td>
            <td><?php echo $_POST['email']?></td>
        </tr>
</table>
        <p><b>Delivery instructions:</b><?php echo $_POST['instrusctions']?></p>
        <br>
        <p style="color:tomato;">
        <strong>Your Pizza</strong>
      </p>
      <table>
      <tr>
            <td><b>Crust</b></td>
            <td><b>:</b></td>
            <td><?php echo $_POST['crust']?></td>
        </tr>
        <tr>
            <td><b>Toppings</b></td>
            <td><b>:</b></td>
            <td><?php echo $_POST['toppings[]']?></td>
        </tr>
        <tr>
            <td><b>NUMBER</b></td>
            <td><b>:</b></td>
            <td><?php echo $_POST['pizza']?></td>
        </tr>
      </table>
      <hr color="coral" />
      <p>This is for educational purposes only, No pizzas will be delived</p>
    
</body>
</html>