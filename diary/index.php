<?php 
  include 'session.php';
  include 'format.php'; 
?>
<?php 
  $today = date('Y-m-d');
  $year = date('Y');
  if(isset($_GET['year'])){
    $year = $_GET['year'];
  }

  //$conn = $pdo->open();
?>
<?php include 'header.php'; ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <?php include 'navbar.php'; ?>
  <?php include 'menubar.php'; ?>
    <div class="content-wrapper">
<main>
    <!-- ======================== -->
    <!-- Just Copy The Code Below -->
    <section class="text-card">
        <div class="content">
            <div class="author-section">
                <a href="#" class="author-avator-link"><img class="author-avator" src="https://static01.nyt.com/vi-assets/images/share/1200x1200_t.png" alt="The New York Times Logo" width="40"></a>
                <a href="#" class="author-name-link"><h6 class="author-name">THE NEW YORK TIMES</h6></a>
            </div>
            <div class="scrollbar text" id="style-7">
  
    <p style="">
      Scroll box automatic set in scroll in vertical scrollbar....<br /><br />
      Scroll box automatic set in scroll in vertical scrollbar....<br /><br />
      Scroll box automatic set in scroll in vertical scrollbar....<br /><br />

    </p>

</div>
<button class="btn">
 Share
</button>
<div style="float: right;">
     <a href="#" class="author-name-link"><h6 class="author-name">Muffadal</h6></a>
</div>

        </div>
    </section>
    
  <section class="text-card">
        <div class="content">
            <div class="author-section">
                <a href="#" class="author-avator-link"><img class="author-avator" src="https://static01.nyt.com/vi-assets/images/share/1200x1200_t.png" alt="The New York Times Logo" width="40"></a>
                <a href="#" class="author-name-link"><h6 class="author-name">THE NEW YORK TIMES</h6></a>
            </div>
            <div class="scrollbar text" id="style-7">
  
    <p style="">
      Scroll box automatic set in scroll in vertical scrollbar....<br /><br />
      Scroll box automatic set in scroll in vertical scrollbar....<br /><br />
      Scroll box automatic set in scroll in vertical scrollbar....<br /><br />

    </p>

</div>
<button class="btn">
 Share
</button>
<div style="float: right;">
     <a href="#" class="author-name-link"><h6 class="author-name">Muffadal</h6></a>
</div>

        </div>
    </section>
      <section class="text-card">
        <div class="content">
            <div class="author-section">
                <a href="#" class="author-avator-link"><img class="author-avator" src="https://static01.nyt.com/vi-assets/images/share/1200x1200_t.png" alt="The New York Times Logo" width="40"></a>
                <a href="#" class="author-name-link"><h6 class="author-name">THE NEW YORK TIMES</h6></a>
            </div>
            <div class="scrollbar text" id="style-7">
  
    <p style="">
      Scroll box automatic set in scroll in vertical scrollbar....<br /><br />
      Scroll box automatic set in scroll in vertical scrollbar....<br /><br />
      Scroll box automatic set in scroll in vertical scrollbar....<br /><br />

    </p>

</div>
<button class="btn">
 Share
</button>
<div style="float: right;">
     <a href="#" class="author-name-link"><h6 class="author-name">Muffadal</h6></a>
</div>

        </div>
    </section>
      <section class="text-card">
        <div class="content">
            <div class="author-section">
                <a href="#" class="author-avator-link"><img class="author-avator" src="https://static01.nyt.com/vi-assets/images/share/1200x1200_t.png" alt="The New York Times Logo" width="40"></a>
                <a href="#" class="author-name-link"><h6 class="author-name">THE NEW YORK TIMES</h6></a>
            </div>
            <div class="scrollbar text" id="style-7">
  
    <p style="">
      Scroll box automatic set in scroll in vertical scrollbar....<br /><br />
      Scroll box automatic set in scroll in vertical scrollbar....<br /><br />
      Scroll box automatic set in scroll in vertical scrollbar....<br /><br />

    </p>

</div>

<button class="btn" onclick="copyToClipboard('#p1')">
 Share
</button>
<div style="float: right;">
     <a href="#" class="author-name-link"><h6 class="author-name">Muffadal</h6></a>
</div>
<div style="opacity: 0;" id="p1">
    <h6 class="author-name">THE NEW YORK TIMES</h6>
     <p style="">
      Scroll box automatic set in scroll in vertical scrollbar....<br /><br />
      Scroll box automatic set in scroll in vertical scrollbar....<br /><br />
      Scroll box automatic set in scroll in vertical scrollbar....<br /><br />
    </p>
    <h6 class="author-name">Muffadal</h6>
</div>
        </div>
    </section>
</main>
</div>
  	<?php include 'footer.php'; ?>
  	<?php include 'scripts.php'; ?>