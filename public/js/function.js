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

var getJSON = function(url) {
    return new Promise(function(resolve, reject) {
        var xhr = new XMLHttpRequest();
        xhr.open('get', url, true);
        xhr.responseType = 'json';
        xhr.onload = function() {
            var status = xhr.status;
            if (status == 200) {
                resolve(xhr.response);
            } else {
                reject(status);
            }
        };
        xhr.send();
    });
};
var postJSON = function(url,data) {
    return new Promise(function(resolve, reject) {
        var xhr = new XMLHttpRequest();
        xhr.open('post', url, true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.onload = function() {
            var status = xhr.status;
            if (status == 200) {
                resolve(JSON.parse(xhr.response));
            } else {
                reject(status);
            }
        };
        function convert(jData) {
            var txt = "";
            for (var key in jData) {
                if (jData.hasOwnProperty(key)) {
                    txt += key+"="+jData[key]+"&";
                }
            }
            return txt;
        }
        xhr.send( convert(data) );
    });
};

postJSON('/test/12', {name:'asd',asd:'qqwe'} ).then(function(data) {
    //alert('Your public IP address is: | ' + data.name);
}, function(status) {
    console.log('Failed.')
});

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