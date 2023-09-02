<?php 
include_once("models/Students.php");

$id = $_GET['id'];
$student = Student::show($id);

?>

<?php include('../component/top.php'); ?>
<?php include('../component/header.php'); ?>

<!-- content -->
<div class="flex bg-slate-100 rounded-xl p-3 m-3">
    <div class="basis-1/5">
        <p class="font-bold">Nama</p>
        <p class="font-bold">Nis</p>
    </div>
    <div class="basis-4/5">
        <p><?= $student['name'] ?></p>
        <p><?= $student['nis'] ?></p>
    </div>
</div>
<div class="grid gap-2">
    <a href="home.php" class="bg-blue-500 hover:bg-blue-800 p-3 rounded-xl text-white m-3 text-center">Kembali</a>
</div>
<!-- end -->
<?php include('../component/footer.php'); ?>
<?php include('../component/bottom.php'); ?>