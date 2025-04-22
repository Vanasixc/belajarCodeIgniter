<?= $this->extend('layouts/template') ?>

<?= $this->section('content') ?>
<!-- login form -->
<div class="ml-3 mr-3">
    <form name="loginform" method="post" action="">
        <div class="form-group">
            <label for="userID">Username</label>
            <input type="text" class="form-control" name="user" id="userID" placeholder="type username here">
        </div>
        <div class="form-group">
            <label for="passID">Password</label>
            <input type="password" class="form-control" name="pass" id="passID" placeholder="type password here">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-info" value="Login">
        </div>
    </form>
</div>
<!-- end of login form -->
<?= $this->endSection() ?>