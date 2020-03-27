<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <link rel="stylesheet" href="<?php echo e(asset('css/register.css')); ?>">
    <title>Verify Email</title>
</head>

<body>
<form action="<?php echo e(url('register')); ?>" method="POST" enctype="multipart/form-data">

<p>Silahkan verifikasi email terlebih dahulu untuk login</p>
<p>Klik link berikut apabila email verifikasi belum terkirim</p>
<a href="/verifyagain">LINK</a>


</form>
</body>
</html>

<?php /**PATH C:\xampp\htdocs\praktikum_prognet\resources\views/user/verify.blade.php ENDPATH**/ ?>