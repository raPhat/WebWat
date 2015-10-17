</div>
<div style="clear: both"></div>
<footer>
    <div class="container">
        <ul class="horizon">
            <li><a href="#">HOME</a></li>
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

    var slide = function( slide ) {
        var current;
    };
</script>
</body>
</html>