<?php

if (!isset($_COOKIE['limited_offer'])) {
    
    setcookie('limited_offer', '1', time() + (60 * 10), "/"); 
    $showOffer = true;
} else {
    
    $showOffer = false;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Limited-Time Offer</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 30px;
        }
        .offer {
            background-color: #fffae6;
            border: 1px solid #ffc107;
            padding: 20px;
            margin-bottom: 20px;
            font-size: 18px;
            color: #333;
        }
    </style>
</head>
<body>

<?php if ($showOffer): ?>
    <div class="offer">
        🎉 Welcome! You get <strong>10% off</strong> (valid for 10 minutes).
    </div>
<?php else: ?>
    <p>The limited-time offer has expired.</p>
<?php endif; ?>

</body>
</html>
