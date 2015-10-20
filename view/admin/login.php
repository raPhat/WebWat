<?php require_once( ROOT_VIEW . 'admin/header.php' ); ?>
<div class="container">
    <div class="thumbnail cLogin">
        <div class="page-header">
            <h1><i class="fa fa-sign-in"></i> Login <small>for management.</small></h1>
        </div>
        <div class="caption">
            <form action="/admin/login" method="post" id="adminLogin">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control iEmail"/>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control iPassword"/>
                </div>
                <hr/>
                <button class="btn btn-success btn-lg" type="submit">LOGIN</button>
                <!--            <button class="btn btn-default">Forget?</button>-->
            </form>
        </div>
    </div>
</div>
<?php require_once( ROOT_VIEW . 'admin/footer.php' ); ?>