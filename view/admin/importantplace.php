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
                            <div class="card-title fh">
                                <h1>ประวัติ</h1>
                                <hr/>
                            </div>
                            <form action="">
                                <fieldset class="form-group">
                                    <label for="">TEXT:</label>
                                    <input type="text" class="form-control"/>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card" id="1">
                        <img class="card-img-top" src="/img/ex-1168.jpg" alt="Card image cap">
                        <div class="card-block">
                            <h4 class="card-title">Card title</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btEdit btModal" data-toggle="modal" id="test" data-target="#md-Editplace">
                                <i class="fa fa-gear"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card" id="2">
                        <img class="card-img-top" src="/img/ex-1168.jpg" alt="Card image cap">
                        <div class="card-block">
                            <h4 class="card-title">Card title</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btEdit btModal" data-toggle="modal" id="test" data-target="#md-Editplace">
                                <i class="fa fa-gear"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card" id="3">
                        <img class="card-img-top" src="/img/ex-1168.jpg" alt="Card image cap">
                        <div class="card-block">
                            <h4 class="card-title">Card title</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btEdit btModal" data-toggle="modal" id="test" data-target="#md-Editplace">
                                <i class="fa fa-gear"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="md-Editplace" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog impt" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                </div>
                <div class="modal-body">
                    <form action="">
                        <fieldset class="form-group">
                            <label for="title">Title:</label>
                            <input type="text" class="form-control" name="title"/>
                        </fieldset>
                        <fieldset class="form-group">
                            <label for="title">Description:</label>
                            <textarea class="form-control" name="description"></textarea>
                        </fieldset>
                        <fieldset class="form-group">
                            <label for="title">Photo:</label>
                            <input type="text" class="form-control" name="photo"/>
                        </fieldset>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

<?php require_once( ROOT_VIEW . 'admin/footer.php' ); ?>