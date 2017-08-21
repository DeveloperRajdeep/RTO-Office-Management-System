<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
  <script src="src/facebox.js" type="text/javascript"></script>
   <script src="src/jquery-1.9.0.min.js" type="text/javascript"></script>
 <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
	  loadingImage : 'src/loading.gif',
      closeImage   : 'src/closelabel.png',
      })
    })

  </script>
  
  <a rel="facebox" href="addcar.php"> add new </a>