<?php require_once(ROOT_VIEW . 'header.php'); ?>

    <div id="sub-container" class="sub-container">

        <div id="imptPage" class="container cd js-masonry" data-masonry-options='{ "columnWidth": 20, "itemSelector": ".item" }'>
            <div class="item">
                <div class="card margin">
                    <div class="img"></div>
                    <br/><br/><br/><br/><br/>
                </div>
            </div>
            <div class="item">
                <div class="card margin">
                    <div class="img"></div>
                </div>
            </div>
            <div class="item">
                <div class="card margin">
                    <div class="img"></div>
                </div>
            </div>
            <div class="item w2">
                <div class="card margin">
                    <div class="img"></div>
                </div>
            </div>
            <div class="item">
                <div class="card margin">
                    <div class="img"></div>

                </div>
            </div>
            <div class="item">
                <div class="card margin">
                    <div class="img"></div>

                </div>
            </div>
        </div>


    </div>
    <script>
        var container = document.querySelector('#imptPage');
        var msnry = new Masonry( container, {
            // options
            columnWidth: 20,
            itemSelector: '.item'
        });
    </script>
<?php require_once(ROOT_VIEW . 'footer.php'); ?>