<header>

<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #fff;">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">
      <img src="/img/pigeon.png" width="30" height="30" class="d-inline-block align-top mb-2" alt="PFCU"></a>
      <span class="navbar-brand logofont mb-3 h1">Pigeon Forge Credit Union</span>

      


    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      
      <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
          <a class="nav-link whypfcu" id="whypfcu" href="../why-pfcu">Why PFCU</a>
        </li>



        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Personal
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
            <a class="dropdown-item dropdown sub-menu-link" href="/redirect.php"><h4><strong>Bank</strong></h4></a>
            <a class="dropdown-item sub-menu" href="/banking/checking.php">Checking ></a>
            <a class="dropdown-item sub-menu" href="/banking/savings.php">Savings ></a>
            <a class="dropdown-item sub-menu" href="/redirect.php">Certificates of Deposits (CDs) ></a>
            <a class="dropdown-item sub-menu" href="/redirect.php">Credit Cards ></a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="/redirect.php"><small><strong>See More ></strong></small></a>
          </div>
        </li>



        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Business
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
          <a class="dropdown-item dropdown sub-menu-link" href="/redirect.php"><h4><strong>Bank</strong></h4></a>
            <a class="dropdown-item sub-menu" href="/redirect.php">Checking ></a>
            <a class="dropdown-item sub-menu" href="/redirect.php">Money Market ></a>
            <a class="dropdown-item sub-menu" href="/redirect.php">Business Rewards Visa ></a>
            <a class="dropdown-item sub-menu" href="/redirect.php">Business HSA ></a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="/redirect.php"><small><strong>See More ></strong></small></a>
          </div>
        </li>

        <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto"> -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown" href="/redirect.php">ATM & Branch</a>
        </li>

<li class="nav-item dropdown">
        <div aria-hidden="true" class="nav-separator"></div>
</li>
        <!-- <form class="form-inline">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button type="submit" class="btn btn-outline-light">Search</button>
          </form>
-->
<!-- <li>
           <form method='post' action="">
                <button type="submit" id="but_logout" name="but_logout" class="btn btn-light btn-signout">Sign out</button>
</form>
</li>

<a class="btn btn-light btn-apply" button type="submit" a href="#">Open new account</a>
</ul> -->



<li class="nav-item dropdown">
<a class="btn btn-light btn-apply dropdown-toggle mr-2" data-toggle="dropdown" button type="submit" a href="/account"><?php echo $_SESSION['username'];?></a>
      <ul class = "dropdown-menu" role = "menu">
<!-- <div class="dropdown-menu"> -->
                    <a href="/account" class="dropdown-item">My account</a>
                    <a href="#" class="dropdown-item">Open new account</a>
                    <form method='post' action="">
                    <button type="submit" id="but_logout" name="but_logout" class="btn btn-light btn-lg btn-block btn-signout">Sign out</button>
            </form>
      </ul>
</li>

<!-- 
<div class="search-form w-form mt-3">
    <form class="form-inline">
        <input type="text" class="search-field w-input" placeholder="Search" value name="q" id="s" autocomplete="off">
        <input type="submit" class="search-button w-button" value="Search">
     </form>
</div> -->


      </ul>
      
    </div>
  </div>
</nav>
</header>