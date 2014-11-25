<html>
<head>
<title>Test</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<h1>Hello, world! We're glad you're here.</h1>
<h2>11/25</h2>

<h2>Service Times</h2>
<ul>
    <?php foreach( array('9:00 am', '11:00 am', '1:00 pm') as $time ): ?>
        <li><?php echo $time ?></li>
    <?php endforeach ?>
</ul>

</body>
</html>
