<main>
    <div class="container-fluid">
        <h1 class="mt-4"></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?php echo site_url('admin/user') ?>">User</a></li>
            <li class="breadcrumb-item active">User Baru</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                <form action="<?php echo site_url('admin/user/save') ?>" method="post">
                    <div class="mb-3">
                        <label for="username" >USERNAME <code>*</code></label>
                        <input type="hidden" class="form-control" name="id" value="<?php $user->id;?>" required />
                        <input type="text" class="form-control <?php echo form_error('username') ? 'is_invalid':'' ?>" name="username" placeholder="USERNAME" required />
                        <div class="invalid-feedback">
                            <?php echo form_error('username') ?>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="full_name">FULL NAME <code>*</code></label>
                        <input type="text" class="form-control" name="full_name" placeholder="FULL NAME" required />
                    </div>
                    <div class="mb-3">
                        <label for="full_name">PHONE</label>
                        <input type="number" class="form-control" name="phone" placeholder="PHONE" required />
                    </div>
                    <div class="mb-3">
                        <label for="full_name">EMAIL</label>
                        <input type="text" class="form-control" name="email" placeholder="EMAIL" required />
                    </div>
                    <div class="mb-3">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">PASSWORD</label>
                        <input type="password" class="form-control" id="password" name="password" autocomplete="off" placeholder="PASSWORD" required>
                    </div>
                    <div class="mb-3">
                        <label for="role">Role</label>
                            <select name="role" id="role" class="form-select" require>
                                <option selected>Choose...</option>
                                <option value="admin">ADMIN</option>
                                <option value="sekretaris">SEKRETARIS</option>
                            </select>
                    </div>
                    <button class="btn btn-primary" type="submit"><i class="fas fa-plus"></i> Save</button>
                </form>
            </div>
        </div>
        <div style="height: 100vh"></div>
    </div>
</main>