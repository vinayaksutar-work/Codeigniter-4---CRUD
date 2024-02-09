<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<link rel="stylesheet" href="<?= base_url("assets/css/style.css") ?>">
<link rel="stylesheet" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<title>Codeigniter 4</title>
</head>
<body>
<div class="app">
    <?= $this->include('layouts/navbar') ?>
    <?= $this->renderSection('content') ?>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function () {
        $('#myDataTable').DataTable();
    });
</script>
<!-- <script>
    $(document).ready(function () {
        <?php if(session()->getFlashdata('status')){ ?>
        alertify.set('notifier','position', 'top-center');
        alertify.success('<?= session()->getFlashdata('status') ?>');
        <?php } ?>
    });
</script> -->

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(document).ready(function () {
        <?php if(session()->getFlashdata('status')){ ?>
            Swal.fire({
                title: "<?= session()->getFlashdata('status') ?>",
                text: "<?= session()->getFlashdata('status_text') ?>",
                icon: "<?= session()->getFlashdata('status_icon') ?>",
                button: "OK"
            });
        <?php } ?>
    });
</script>
</body>
</html>