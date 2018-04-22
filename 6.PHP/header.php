<!--header.php-->
<nav role="navigation" class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand">Store</a>
            <button type="button" class="navbar-toggle" data-target="#navbarCollapse" data-toggle="collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="navbar-collapse collapse" id="navbarCollapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">All Products</a></li>
                <li><a href="#">Help</a></li>
                <li><a href="#">Department <span class="caret"></span></a></li>
            </ul>
            <form class="navbar-form navbar-left" role="search">
                <div class="input-group">
                    <span class="input-group-btn">
                    <button type="submit" class="btn btn-info">Go</button>
                    </span>
                    <label for="search" class="sr-only">Search</label>
                    <input type="text" id="search" class="form-control" placeholder="Search">
                    <span class="glyphicon glyphicon-search form-control-feedback"></span>
                </div>
            </form>
            
            <form class="navbar-form navbar-right">
            <input class="btn btn-success" type="button" value="Login">
            </form>
        </div>
    </div>
</nav>