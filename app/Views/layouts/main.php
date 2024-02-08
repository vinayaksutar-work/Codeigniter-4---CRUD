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
<script>
    $(document).ready(function () {
        $('.confirm_delete_btn').click(function (e) { 
            e.preventDefault();
            var id = $(this).val();
            swal({
                title: "Are you sure?",
                text: "Once deleted, You will not be able to recover this imaginary file!",
                type: "warning",
                buttons: true,
                dangerMode: true,
                })
                .then((willDelete) => {
                    if(willDelete)
                    {
                        $.ajax({
                            url: "student/confirm-delete/"+id,
                            success: function(response){
                                swal({
                                    title: response.status,
                                    text: response.status_text,
                                    icon: response.status_icon,
                                    button: "OK"
                                    }).then((confirmed) =>{
                                        window.location.reload();
                                    });
                                }
                        });
                    }
                    else
                    {
                        swal("You have canceled on deleting this data");
                    }
            });
        });
    });
</script>
</body>
</html>