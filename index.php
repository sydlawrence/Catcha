<?php
	include('Catcha.class.php');

?>
<!DOCTYPE html> 
<!--
                      MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM                   
                      MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM                   
                      MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM                   
                ~MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM~             
                ~MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM~             
                ~MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM~             
                ~MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM~             
           MMMMMMMMMMMMMMMMM~~~~~~,,,,,,,,,,,~~~~~~MMMMMMMMMMMMMMMMM        
           MMMMMMMMMMMMMMMMM~~~~~~,,,,,,,,,,,~~~~~~MMMMMMMMMMMMMMMMM        
           MMMMMMMMMMMMMMMMM~~~~~~,,,,,,,,,,,~~~~~~MMMMMMMMMMMMMMMMM        
     MMMMMMMMMMMMMMMMM,,,,,,      ,,,,,,,,,,,      ,,,,,,MMMMMMMMMMMMMMMMM  
     MMMMMMMMMMMMMMMMM,,,,,,      ,,,,,,,,,,,      ,,,,,,MMMMMMMMMMMMMMMMM  
     MMMMMMMMMMMMMMMMM,,,,,,      ,,,,,,,,,,,      ,,,,,,MMMMMMMMMMMMMMMMM  
     MMMMMMMMMMMMMMMMM,,,,,,      ,,,,,,,,,,,      ,,,,,,MMMMMMMMMMMMMMMMM  
     MMMMMM,,,,,+MMMMM      MMMMMM,,,,,,,,,,,MMMMMM      MMMMM+,,,,,MMMMMM  
     MMMMMM,,,,,+MMMMM      MMMMMM,,,,,,,,,,,MMMMMM      MMMMM+,,,,,MMMMMM  
     MMMMMM,,,,,+MMMMM      MMMMMM,,,,,,,,,,,MMMMMM      MMMMM+,,,,,MMMMMM  
     MMMMMM~~~~~?MMMMM      MMMMMM,,,,,,,,,,,MMMMMM      MMMMM?~~~~~MMMMMM  
     MMMMMM~~~~~?MMMMM      MMMMMM,,,,,,,,,,,MMMMMM      MMMMM?~~~~~MMMMMM
     MMMMMM~~~~~?MMMMM      MMMMMM,,,,,,,,,,,MMMMMM      MMMMM?~~~~~MMMMMM
     MMMMMM~~~~~?MMMMM      MMMMMM,,,,,,,,,,,MMMMMM      MMMMM?~~~~~MMMMMM
     MMMMMM~~~~~~,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,~~~~~~MMMMMM
     MMMMMM~~~~~~,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,~~~~~~MMMMMM
     MMMMMM~~~~~~,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,~~~~~~MMMMMM
           MMMMM8~~~~~,,,,,,MMMMMM,,,,,,,,,,,MMMMMM,,,,,,~~~~~8MMMMMMMMMMM
           MMMMM8~~~~~,,,,,,MMMMMM,,,,,,,,,,,MMMMMM,,,,,,~~~~~8MMMMMMMMMMM
           MMMMM8~~~~~,,,,,,MMMMMM,,,,,,,,,,,MMMMMM,,,,,,~~~~~8MMMMMMMMMMM
           MMMMM8~~~~~,,,,,,MMMMMM,,,,,,,,,,,MMMMMM,,,,,,~~~~~8MMMMMMMMMMM
                ~MMMMM~~~~~~,,,,,,MMMMMMMMMMM,,,,,,~~~~~~MMMMMDMMMMM
                ~MMMMM~~~~~~,,,,,,MMMMMMMMMMM,,,,,,~~~~~~MMMMMDMMMMM
                ~MMMMM~~~~~~,,,,,,MMMMMMMMMMM,,,,,,~~~~~~MMMMMDMMMMM
                ~MMMMM~~~~~~,,,,,,MMMMMMMMMMM,,,,,,~~~~~~MMMMMDMMMMM
     MMMMMMNNNNNNNNNNNMMMMMM~~~~~~~~~~~~~~~~~~~~~~~MMMMMMNNNNNNNNNNNMMMMMM
     MMMMMMNNNNNNNNNNNMMMMMM~~~~~~~~~~~~~~~~~~~~~~~MMMMMMNNNNNNNNNNNMMMMMM
     MMMMMMNNNNNNNNNNNMMMMMM~~~~~~~~~~~~~~~~~~~~~~~MMMMMMNNNNNNNNNNNMMMMMM
     MMMMMMDDDDDZ     NNNNNNDDDDDDDDDDDDDDDDDDDDDDDNNNNNN     ZDDDDDMMMMMM
     MMMMMMDDDDDZ     NNNNNNDDDDDDDDDDDDDDDDDDDDDDDNNNNNN     ZDDDDDMMMMMM
     MMMMMMDDDDDZ     NNNNNNDDDDDDDDDDDDDDDDDDDDDDDNNNNNN     ZDDDDDMMMMMM
     MMMMMMDDDDDZ     NNNNNNDDDDDDDDDDDDDDDDDDDDDDDNNNNNN     ZDDDDDMMMMMM
MMMMMDDDDDDDDDDDZ           NNNNNNDDDDDDDDDDDNNNNNN           ZDDDDDDDDDDDMMMMM
MMMMMDDDDDDDDDDDZ           NNNNNNDDDDDDDDDDDNNNNNN           ZDDDDDDDDDDDMMMMM
MMMMMDDDDDDDDDDDZ           NNNNNNDDDDDDDDDDDNNNNNN           ZDDDDDDDDDDDMMMMM
MMMMMDDDDDDDDDDDZ     NNNNNNDDDDDDMMMMMMMMMMMDDDDDDNNNNNN     ZDDDDDDDDDDDMMMMM
MMMMMDDDDDDDDDDDZ     NNNNNNDDDDDDMMMMMMMMMMMDDDDDDNNNNNN     ZDDDDDDDDDDDMMMMM
MMMMMDDDDDDDDDDDZ     NNNNNNDDDDDDMMMMMMMMMMMDDDDDDNNNNNN     ZDDDDDDDDDDDMMMMM
MMMMMDDDDDDDDDDDZ     NNNNNNDDDDDDMMMMMMMMMMMDDDDDDNNNNNN     ZDDDDDDDDDDDMMMMM
     MMMMMMDDDDDDDDDDDNNNNNN$$$$$$$$$$$$$$$$$$$$$$$NNNNNNDDDDDDDDDDDMMMMMM
     MMMMMMDDDDDDDDDDDNNNNNN$$$$$$$$$$$$$$$$$$$$$$$NNNNNNDDDDDDDDDDDMMMMMM
     MMMMMMDDDDDDDDDDDNNNNNN$$$$$$$$$$$$$$$$$$$$$$$NNNNNNDDDDDDDDDDDMMMMMM
           MMMMMMMMMMM$$$$$$$$$$$$OOOOOOOOOOO$$$$$$$$$$$$MMMMMMMMMMMMMMMMM
           MMMMMMMMMMM$$$$$$$$$$$$OOOOOOOOOOO$$$$$$$$$$$$MMMMMMMMMMMMMMMMM
           MMMMMMMMMMM$$$$$$$$$$$$OOOOOOOOOOO$$$$$$$$$$$$MMMMMMMMMMMMMMMMM
           MMMMMMMMMMM$$$$$$$$$$$$OOOOOOOOOOO$$$$$$$$$$$$MMMMMMMMMMMMMMMMM
           MMMMMNOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOONMMMMMMMMMMM
           MMMMMNOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOONMMMMMMMMMMM
           MMMMMNOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOONMMMMMMMMMMM
     MMMMMM~~~~~:           MMMMMMMMMMMMMMMMMMMMMMM           :~~~~~MMMMMMMMMMM
     MMMMMM~~~~~:           MMMMMMMMMMMMMMMMMMMMMMM           :~~~~~MMMMMMMMMMM
     MMMMMM~~~~~:           MMMMMMMMMMMMMMMMMMMMMMM           :~~~~~MMMMMMMMMMM
     MMMMMM~~~~~:           MMMMMMMMMMMMMMMMMMMMMMM           :~~~~~MMMMMMMMMMM
     MMMMMMMMMMMMMMMMMMMMMMMMMMMMM           MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
     MMMMMMMMMMMMMMMMMMMMMMMMMMMMM           MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
     MMMMMMMMMMMMMMMMMMMMMMMMMMMMM           MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
     MMMMMMMMMMMMMMMMMMMMMMMMMMMMM           MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
--> 
<html>  
  <head>  
    <title>Catcha - Put the cat among the pigeons</title>
    

      
    <link rel="stylesheet" href="../css/style.css?v=32">
    <link rel="stylesheet" href="../css/screen.css?v=32">       
    <link rel="stylesheet" href="css/style.css">  
      
  </head>  
  <body>  
  
    <header>
  		<h1>My Playground <a href="http://twitter.sydlawrence.com">@sydlawrence</a></h1>
  	</header>
  	<div id="main">
  	
      <h1>Catcha</h1>

      <h2>Can you spot the cat among the pigeons</h2>
      
      <p>The only Captcha you will ever need.</p>
      
      <?php
      if (isset($_REQUEST['submit'])) {
      	$name = $_REQUEST['name'];
      	if (!Catcha::check()) {
      		echo "<h2 style='color:#f00;'>Oh hai ".$name ."! U mst b a bot!</h2>";
      		echo "<img src='bot.jpg' width=200 />";
      	} else {
      		echo "<h2 style='color:#f00;'>Thanks ".$name ." :) you must be human!</h2>";
      	}
      }
      ?>
      
      <form method="post">
      	<p>
      		<label for="name">Your Name:</label>
      		<input type="text" name="name" placeholder="Tell me your name" />
      	</p>
      	<p>
      		<?php echo Catcha::render() ?>
      	</p>
      	<p>
      		<label>&nbsp;</label>
      		<button type="submit">Submit</button>
      	</p>
      	<input type="hidden" name="submit" value="true" />
      </form>
      
      <div id="credits">
      	<h2>Credits</h2>
      	<p>Thanks to <a href="http://twitter.com/#!/espike">Rich Halliwell</a> for the idea :)</p>
      	<p>Cat &amp; pigeon mages taken from <a href="http://instagram.com">Instagram</a> api</p>
      	<p>Bot image from <a href="http://nonsensethoughts.com/post/19257615521">nonesensethoughts.com</a>
      </div>
  	
  	
  	
  	
  	
  	
  	
  	
    </div>

  	<footer style="padding-bottom:0;">
  	  <div class="addthis_toolbox addthis_default_style" style="float:left;width:400px;padding:0;padding-left:20px;">
        <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
        <a class="addthis_button_tweet"></a>
        <a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
      </div>
      <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=xa-4eb96f9e279edd99"></script>
  	
  		<a href="http://sydlawrence.com">Handcrafted by Syd</a>
  	</footer>
  	
		<a href="http://sydl.me/awesomebuttons"><img style="position: absolute; top: 0; right: 0; border: 0;z-index:999" src="https://a248.e.akamai.net/assets.github.com/img/7afbc8b248c68eb468279e8c17986ad46549fb71/687474703a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f6461726b626c75655f3132313632312e706e67" alt="Fork me on GitHub"></a>

      
    <script type="text/javascript">
    
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-7654450-4']);
      _gaq.push(['_trackPageview']);
    
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    
    </script>
       
  </body>  
</html>  
