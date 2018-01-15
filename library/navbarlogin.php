

 <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="index.php">
      		BRO<b style="color: #CD6155">KOMPUTER</b>
      </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">

      <ul class="nav navbar-nav navbar-left">
        <li class="halaman"><a href="index.php">HOME</a></li>
        <li class="halaman"><a href="pesan.php">PESAN</a></li>
        <li class="halaman"><a href="artikel.php">ARTIKEL</a></li>

        
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="disable"><a href="">Hai, <?php echo $_SESSION['nama']; ?>!</a></li>
        <li>
         <li class="able"><a href="totalkosong.php" >
         <span class="glyphicon glyphicon-shopping-cart"></span>TRANSAKSI</a></li>
        <li class="able">
          <a class='user' href="index.php?keluar=y">
          <span class="glyphicon glyphicon-log-out"></span>KELUAR
          </a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>