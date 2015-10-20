function onScroll() {
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
}

function leftMenu() {
    function toggleMenu( width ) {
        if( width < 769 ) {
            document.getElementById('aLeft').classList.add('toggle');
            document.getElementById('aRight').classList.add('toggle');
        } else {
            document.getElementById('aLeft').classList.remove('toggle');
            document.getElementById('aRight').classList.remove('toggle');
        }
    }
    window.onresize = function() {

        toggleMenu( window.innerWidth );

    };
    toggleMenu( window.innerWidth );
}

function toggleMenu() {
    document.getElementById('aLeft').classList.toggle('toggle');
    document.getElementById('aRight').classList.toggle('toggle');
}

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
        xhr.send( convert(data) );
    });
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
