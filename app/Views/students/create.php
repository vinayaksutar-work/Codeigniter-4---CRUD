<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="row justify-content-center ">
        <div class="col-sm-12 col-md-8 col-lg-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between ">
                    <h2>Add Data</h2>
                    <h2><a href="<?= base_url('/') ?>" class="btn btn-info btn-sm">Back</a></h2> 
                </div>
                <div class="card-body">
                    <form action="<?= base_url('students/store') ?>" method="post">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Enter Email">
                        </div>
                        <div class="form-group">
                            <label for="">Phone</label>
                            <input type="text" name="phone" class="form-control" placeholder="Enter Phone">
                        </div>
                        <div class="form-group">
                            <label for="">Course</label>
                            <input type="text" name="course" class="form-control" placeholder="Enter Course">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>