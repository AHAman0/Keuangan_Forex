<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card bg-light mb-3 fw-bold text center">
                <h2 class="card-header">Login</h2>
            </div>
            <div class="card-body">
                <form action="<?php echo base_url('Controller/Login'); ?>" method="post">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Name</label>
                    <input type="text" class="form-control" id="nama" name="nama" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>