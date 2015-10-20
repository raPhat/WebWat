<?php require_once( ROOT_VIEW . 'admin/header.php' ); ?>
<?php require_once( ROOT_VIEW . 'admin/menu.php' ); ?>

    <section class="aRight" id="aRight">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="card card-inverse card-primary text-center">
                        <div class="card-block">
                            <blockquote class="card-blockquote">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-sm-12">
                    <div class="card">
                        <div class="card-block">
                            as
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-block">
                            <div class="card-title fh">
                                <h1>ประวัติ</h1>
                                <hr/>
                            </div>
                            <form name="HistoryForm">
                                <fieldset class="form-group">
                                    <textarea id="e" class="form-control editor" name="content">
                                        <?=App::$text['history']?>
                                    </textarea>
                                </fieldset>
                                <button class="btn btn-success btn-md sendForm" type="submit">บันทึก</button>
                                <button class="btn btn-secondary btn-md">ล้าง</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php require_once( ROOT_VIEW . 'admin/footer.php' ); ?>