<html>
<head>
<title>Test</title>
</head>
<body>
<h1>Hello, world! We're glad you're here.</h1>
<h2>11/25</h2>

<h2>Service Times</h2>
<ul>
    <?php foreach( arary('9:00 a.m.', '11:00 a.m.', '1:00 p.m') as $time ): ?>
        <li><?php echo $time ?></li>
    <?php endforeach ?>
</ul>

</body>
</html>
