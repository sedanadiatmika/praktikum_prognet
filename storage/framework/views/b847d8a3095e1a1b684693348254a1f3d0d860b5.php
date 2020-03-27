<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <link>
    <title>Verif</title>
</head>
<body>
<h1>Halo <?php echo e($user['name']); ?></h1>
<p>Klik link berikut untuk verifikasi email</p>

<a href="<?php echo e(url('user/verify',$user['email'])); ?>">LINK</a>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\MODUL1\resources\views/email/verifyuser.blade.php ENDPATH**/ ?>