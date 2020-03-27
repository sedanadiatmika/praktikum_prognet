<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <?php echo e("Selamat datang ".Auth::guard('admin')->user()->name); ?>

    <br>
    <a href="<?php echo e(url('admin/logout')); ?>">
        <button>
            Logout
        </button>
    </a>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\MODUL1\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>