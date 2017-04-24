    <nav class="navbar  navbar-fixed-top" style="background-color: white";">
    <!-- from above navbar-inversed is remove it because the color of link is not changing  -->
      <!--style is used for changing background color  -->
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
           <a class="navbar-brand" href="#"><img src="images/logo 2.png" alt="Punjab Coatings" title="punjab coating"></a>
       
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li ><a class="color-me" href="index.php">Home</a></li>
            <li><a href="Abouts us.php">About us</a></li>
            <li><a href="{{ url('products') }}">Products</a></li>
            <li><a href="contact us.php">Contact us</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

