</div>
<div style="clear: both"></div>
<footer>
    <div class="container">
        <ul class="horizon">
            <li><a href="#">HOME</a></li>
            <li><a href="admin"><i class="fa fa-lock"></i> ผู้ดูแล</a></li>
            <li><i class="fa fa-copyright"></i> KARJ & SHINE</li>
        </ul>
    </div>
</footer>
<!--<script src="/js/bootstrap.min.js"></script>-->
<script>
    window.onscroll = function() {
        changeFixed( window.scrollY );

        function changeFixed( height ) {
            if( height > 0 ) {
                document.getElementById('header').classList.add('fixed');
                document.getElementById('sub-container').classList.add('scroll');
            } else {
                document.getElementById('header').classList.remove('fixed');
                document.getElementById('sub-container').classList.remove('scroll');
            }
        }
    };

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
</body>
</html>