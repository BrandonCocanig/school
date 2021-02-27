<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>HomePage</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="indexAssets/styles/eCommerceStyle.css" rel="stylesheet" type="text/css">
<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.-->
<script>var __adobewebfontsappname__="dreamweaver"</script><script src="http://use.edgefonts.net/montserrat:n4:default;source-sans-pro:n2:default.js" type="text/javascript"></script>
</head>

<body>
<div id="mainWrapper">
  <header> 
    <!-- This is the header content. It contains Logo and links -->
    <div id="logo"><img src="indexAssets/images/mw0IEDr (2).jpg" width="30" height="30" alt="sample logo"> 
      <!-- Company Logo text --> Blue Stars Blog</div>

  <?php 
  session_start();
if ( isset( $_SESSION['username'] ) ) {
	$user = $_SESSION['username'];
	echo "<div id='headerLinks'><a href='websitelogin.php' title='Login/Register'>$user</a> <a href= './logout.php'>logout? </a></div>";
} else {
    echo "<div id='headerLinks'><a href='websitelogin.php' title='Login/Register'>Login/Register</a></div>";
}
	?>
	
      </header>

  <section id="offer"> 
    <!-- The offer section displays a banner text for promotions -->
    <h2>Welcome</h2>
    <p>REALLY AWESOME Webstie here, Absoulutly No Security Flaws. I Swear ❤</p>
  </section>
  <div id="content">
    <section class="sidebar"> 
      <!-- This adds a sidebar with 1 searchbox,2 menusets, each with 4 links -->
      <input type="text"  id="search" value="search">
      <div id="menubar">
        <nav class="menu">
          <h2><!-- Title for menuset 1 -->MENU ITEM 1 </h2>
          <hr>
          <ul>
            <!-- List of links under menuset 1 -->
            <li><a href="posts/post3.php" title="Link">Lasted Blog Post</a></li>
            <li><a href="#" title="Link">Link 2</a></li>
            <li><a href="#" title="Link">Link 3</a></li>
            <li class="notimp"><!-- notimp class is applied to remove this link from the tablet and phone views --><a href="#"  title="Link">Link 4</a></li>
          </ul>
        </nav>
</div>
    </section>
    <section class="mainContent">
      <div class="productRow">
        <article class="productInfo">
          <div> <a href="posts/post.php"> <img alt="sample" src="https://secure.i.telegraph.co.uk/multimedia/archive/01452/Casper_1452757c.jpg" width="200" height="150"></div>
          <br>
          <p class="productContent">Casper The Cat</p>
        </article>
        <article class="productInfo">
          <div> <a href="posts/post2.php"> <img alt="sample" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/44/Shellshock-bug.png/843px-Shellshock-bug.png"></div>
          <br>
          <p class="productContent">ShellShock</p>
        </article>
        <article class="productInfo">
          <div> <a href="posts/post3.php"> <img alt="sample" src="https://images.idgesg.net/images/article/2017/08/microsoft_windows_10_logo_bandage_data_map-100732004-large.jpg" width="200" height="150"></div>
          <br>
          <p class="productContent">Windows 10 November 2019 Update</p>
        </article>
      </div>
</section>
  </div>
  <footer> 
    <div>
      <p>SIte by: Brandon Cocanig</p>
      <p>2019 </p>
    </div>
    <div>
      <p></p>
    </div>
    <div class="footerlinks">
      <p><a href="about_us.html" title="Link">About</a></p>
      <p><a href="#" title="Link">extra link</a></p>
      <p><a href="#" title="Link">extra link</a></p>
    </div>
  </footer>
</div>
</body>
</html>
