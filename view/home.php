<?php require_once( ROOT_VIEW . 'header.php' ); ?>

    <div id="sub-container" class="sub-container">
        <section class="slide">
            <div class="bt pre" id="slidePre"> <i class="fa fa-angle-left"></i> </div>
            <div class="bt next" id="slideNext"> <i class="fa fa-angle-right"></i> </div>
            <div id="slide" class="slideShow">
                <div class="photo" style="background-color: #222222">a</div>
                <div class="photo" style="background-color: #adf">s</div>
                <div class="photo" style="background-color: #758">d</div>
                <div class="photo" style="background-color: #324">f</div>
            </div>
        </section>
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="row">
                        <div class="card margin">
                            <div class="category">
                                #สำคัญ
                            </div>
                            <div class="card-body">
                                <header>
                                    <i class="fa fa-key"></i> asdasd <span>asd</span>
                                </header>
                            </div>
                            <div class="card-content">
                                as
                            </div>
                            <div class="card-body">
                                <footer>
                                    asd
                                </footer>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="card margin">
                            <div class="category">
                                #as
                            </div>
                            <div class="card-body">
                                <header>
                                    <i class="fa fa-key"></i> asdasd <span>asd</span>
                                </header>
                            </div>
                            <div class="card-content">
                                as
                            </div>
                            <div class="card-body">
                                <footer>
                                    asd
                                </footer>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card margin">
                        <div class="category">
                            #as
                        </div>
                        <div class="card-body">
                            <header>
                                <i class="fa fa-key"></i> asdasd <span>asd</span>
                            </header>
                        </div>
                        <div class="img"></div>
                        <div class="card-content">
                            as
                        </div>
                        <div class="card-body">
                            <footer>
                                asd
                            </footer>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        var slide = (function () {
            var my = {},
                current = 0,
                sl = document.getElementById( 'slide' ).children,
                size = sl.length,
                p;

            function nextImg() {
                console.log( current );
                var temp = sl[ current ];
                for(var i=0; i<sl.length; i++) {
                    if( i==current ) {
                        sl[i].className = sl[i].className + " current";
                    } else {
                        sl[i].className = "photo";
                    }
                }
                if( current+1 == size ) {
                    current = 0;
                } else {
                    current++;
                }
            }

            function play() {
                nextImg();
                p = setTimeout(play, 5000 );
            }

            my.show = function () {
                play();
            };

            document.getElementById("slideNext").addEventListener("click", function(){
                clearTimeout(p);
                play();
            });
            document.getElementById("slidePre").addEventListener("click", function(){
                if( current == 1 ) {
                    current = size-1;
                } else if( current == 0 ) {
                    current = size-2;
                } else {
                    current = current-2;
                }
                clearTimeout(p);
                play();
            });

            return my;
        }());
        slide.show();
    </script>

<?php require_once( ROOT_VIEW . 'footer.php' ); ?>