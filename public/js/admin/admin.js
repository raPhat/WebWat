function loaded(){
    document.querySelector("#adminLogin").addEventListener("submit", function(e){
        e.preventDefault();

        postJSON(this.action, {
            email: this.querySelector(".iEmail").value,
            password: this.querySelector(".iPassword").value}
        ).then(function(data) {
                if( data.status ) {
                    location.reload();
                }
        }, function(status) {
            console.log('Failed.')
        });
    });
}

loaded();