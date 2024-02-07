<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<div class="container mt-5 ">
    <div class="row">
        <div class="col-sm-12">

            <!-- <?php if(session()->getFlashdata('status'))
                {
            ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Hey! </strong><?= session()->getFlashdata('status') ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php
                }
             ?> -->

            <div class="card">
                <div class="card-header d-flex justify-content-between ">
                    <h2>Student Data</h2>
                    <h2><a href="<?= base_url('students/create') ?>" class="btn btn-info btn-sm">Add</a></h2> 
                </div>
                <div class="card-body p-lg-5 ">
                    <div class="table-responsive">
                        <table class="table table-bordered text-center " id="myDataTable">
                            <thead class="thead-light">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Course</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if($students): ?>
                                    <?php foreach($students as $row): ?>
                                        <tr>
                                            <td><?= $row['id']; ?></td>
                                            <td><?= $row['name']; ?></td>
                                            <td><?= $row['email']; ?></td>
                                            <td><?= $row['phone']; ?></td>
                                            <td><?= $row['course']; ?></td>
                                            <td>
                                                <a href="<?= base_url('student/edit/'.$row['id'])?>" class="btn btn-success btn-sm ">Update</a>
                                                <a href="<?= base_url('student/delete/'.$row['id'])?>" class="confirm_delete_btn btn btn-danger btn-sm ">Delete</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>