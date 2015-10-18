<?php require_once(ROOT_VIEW . 'header.php'); ?>

    <div id="sub-container" class="sub-container">
        <div class="container">

            <div class="card">
                <div class="card-body">
                    <header>
                        <h2><i class="fa fa-book"></i> สมุดเยี่ยม</h2>
                    </header>


                </div>
                <div class="card-content">
                    <form>
                        <input type=hidden name=fields value="Name,Email,Comments">
                        Name: <input type=text name=Name size=50><br>
                        Email Address: <input type=text name=Email size=50><br>
                        Comments: <br><textarea name=Comments rows=5 cols=60>
                    </textarea>
                        <br>
                        <input type=submit value="Submit">
                    </form>
                </div>
                <div class="card-body">
                    <footer></footer>
                </div>

            </div>
        </div>
    </div>

<?php require_once(ROOT_VIEW . 'footer.php'); ?>