<html>
<?php
    require_once("HeadingView.php")
?>
<body>
<?php
    require_once("NavView.php")
?>

<div class="Container">
    <div class="row">
        <div class="col-md-12 col-md-offset-2 col-sm-6">
        <h2> Councillors </h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-md-offset-2 col-sm-6">
        <input class="form-control" type="text" placeholder="Search" aria-label="Search">
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12 col-md-offset-2 col-sm-6">
        <div class="dropdown">
        <b>Filter by</B>
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Party Group
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Upcoming</a>
            <a class="dropdown-item" href="#">Popular</a>
        </div>
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Location
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Nelson</a>
            <a class="dropdown-item" href="#">Christchurch</a>
        </div>
        </div>
        <br>
<div class="row bootstrap snippets">
<div class="col-md-4 col-md-offset-2 col-sm-6">
    <div class="card">
        <div class="card-body">
        <a href=""><h5 class="card-title">Rachel Reese</h5></a>
            <p class="card-text">Some quick example text to build on the panel title and make up the bulk of the panel's content.</p>
        </div>
        <a href="#!" class="btn btn-primary">Follow</a>
    </div>
</div>
<div class="col-md-4 col-md-offset-2 col-sm-6">
    <div class="card">
        <div class="card-body">
        <a href=""><h5 class="card-title">Luke Acland</h5></a>
            <p class="card-text">Some quick example text to build on the panel title and make up the bulk of the panel's content.</p>
        </div>
        <a href="#!" class="btn btn-primary">Follow</a>
    </div>
</div>
<div class="col-md-4 col-md-offset-2 col-sm-6">
    <div class="card">
        <div class="card-body">
        <a href=""><h5 class="card-title">Ian Barker</h5></a>
            <p class="card-text">Some quick example text to build on the panel title and make up the bulk of the panel's content.</p>
        </div>
        <a href="#!" class="btn btn-primary">Follow</a>
    </div>
</div>
<br>
<br>
<br>
<div class="col-md-4 col-md-offset-2 col-sm-6">
    <div class="card">
        <div class="card-body">
        <a href=""><h5 class="card-title">Mel Courtney</h5></a>
            <p class="card-text">Some quick example text to build on the panel title and make up the bulk of the panel's content.</p>
        </div>
        <a href="#!" class="btn btn-primary">Follow</a>
    </div>
</div>
<div class="col-md-4 col-md-offset-2 col-sm-6">
    <div class="card">
        <div class="card-body">
        <a href=""><h5 class="card-title">Bill Dahlberg</h5></a>
            <p class="card-text">Some quick example text to build on the panel title and make up the bulk of the panel's content.</p>
        </div>
        <a href="#!" class="btn btn-primary">Follow</a>
    </div>
</div>
<div class="col-md-4 col-md-offset-2 col-sm-6">
    <div class="card">
        <div class="card-body">
        <a href=""><h5 class="card-title">Kate Fulton</h5></a>
            <p class="card-text">Some quick example text to build on the panel title and make up the bulk of the panel's content.</p>
        </div>
        <a href="#!" class="btn btn-primary">Follow</a>
    </div>
</div>
</div>
</div>
</div>



<?php
    require_once("FooterView.php")
?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>