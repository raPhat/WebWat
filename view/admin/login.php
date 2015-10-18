<?php require_once( ROOT_VIEW . 'admin/header.php' ); ?>
<div class="thumbnail cLogin">
    <div class="page-header">
        <h1><i class="fa fa-sign-in"></i> Login <small>for management.</small></h1>
    </div>
    <div class="caption">
        <form action="">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control"/>
            </div>
            <hr/>
            <button class="btn btn-success btn-lg">LOGIN</button>
            <button class="btn btn-default">Forget?</button>
        </form>
    </div>
</div>
<?php require_once( ROOT_VIEW . 'admin/footer.php' ); ?>