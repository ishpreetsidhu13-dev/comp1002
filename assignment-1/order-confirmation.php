<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Order Confirmation</title>
</head>
<body>
    <h1>Thank You for Your Order!</h1>
    <p>Here’s what we received:</p>
    <ul>
        <li><strong>Name:</strong> <?php echo htmlspecialchars($_POST['fullname']); ?></li>
        <li><strong>Email:</strong> <?php echo htmlspecialchars($_POST['email']); ?></li>
        <li><strong>Number of Pizzas:</strong> <?php echo htmlspecialchars($_POST['quantity']); ?></li>
        <li><strong>Size:</strong> <?php echo htmlspecialchars($_POST['size']); ?></li>
        <li><strong>Crust:</strong> <?php echo htmlspecialchars($_POST['crust']); ?></li>
        <li><strong>Shape:</strong> <?php echo htmlspecialchars($_POST['shape']); ?></li>
        <li><strong>Toppings:</strong> <?php echo implode(", ", $_POST['toppings'] ?? []); ?></li>
        <li><strong>Delivery Type:</strong> <?php echo htmlspecialchars($_POST['delivery']); ?></li>
    </ul>
</body>
</html>
