<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<?php foreach($styles as $style): ?>
    <link href="<?php echo URL::base(); ?>public/css/<?php echo $style; ?>.css" 
    rel="stylesheet" type="text/css" />
<?php endforeach; ?>
<?php foreach($scripts as $script): ?>
    <script type="text/javascript" src="<?php echo URL::base(); ?>public/js/<?php echo $script; ?>.js"></script>
<?php endforeach; ?>

<link href='http://fonts.googleapis.com/css?family=Fredoka+One' rel='stylesheet' type='text/css'>

<title>Чат Прогерам</title>
<body>

<?php if (isset($content) and !empty($content)) echo $content; ?>

</body>
</html>