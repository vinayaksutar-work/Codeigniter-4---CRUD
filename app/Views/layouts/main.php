<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<link rel="stylesheet" href="style.css">
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
<script>
    $(document).ready(function () {
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this imaginary file!",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Yes, delete it!",
            closeOnConfirm: false
    },
        function(){
        swal("Deleted!", "Your imaginary file has been deleted.", "success");
        });
    });
</script>
</body>
</html>