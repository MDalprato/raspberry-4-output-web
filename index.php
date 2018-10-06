 <?php 
 
    $companyName = "Control";
    $output0Name = "Out 0";
    $output1Name = "Out 1";
    $output2Name = "Out 2";
    $output3Name = "Out 3";
    $outputAllName = "All";
    
        $waitFor =  1000000;
        
  
         if(isset($_GET['output0_toggle'])){
                 $gpio_on = shell_exec("/usr/local/bin/gpio write 7 0");
                 usleep($waitFor);
                 $gpio_off = shell_exec("/usr/local/bin/gpio write 7 1");
         }
         
         if(isset($_GET['output1_toggle'])){
                 $gpio_on = shell_exec("/usr/local/bin/gpio write 0 0");
                 usleep($waitFor);
                 $gpio_off = shell_exec("/usr/local/bin/gpio write 0 1");
         }
         
         if(isset($_GET['output2_toggle'])){
                 $gpio_on = shell_exec("/usr/local/bin/gpio write 2 0");
                 usleep($waitFor);
                 $gpio_off = shell_exec("/usr/local/bin/gpio write 2 1");
         }
         
         if(isset($_GET['output3_toggle'])){
                 $gpio_on = shell_exec("/usr/local/bin/gpio write 3 0");
                 usleep($waitFor);
                 $gpio_off = shell_exec("/usr/local/bin/gpio write 3 1");
         }
         
    
         
 

           if(isset($_GET['outputAll_toggle'])){
                 $gpio_on = shell_exec("/usr/local/bin/gpio write 7 0");
                 $gpio_on = shell_exec("/usr/local/bin/gpio write 0 0");
                 $gpio_on = shell_exec("/usr/local/bin/gpio write 2 0");
                 $gpio_on = shell_exec("/usr/local/bin/gpio write 3 0");
                 
                 usleep($waitFor);
                 
                 $gpio_on = shell_exec("/usr/local/bin/gpio write 7 1");
                 $gpio_on = shell_exec("/usr/local/bin/gpio write 0 1");
                 $gpio_on = shell_exec("/usr/local/bin/gpio write 2 1");
                 $gpio_on = shell_exec("/usr/local/bin/gpio write 3 1");
         }
         
         
         ?>
         

<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>Control Panel</title>
		<meta name="description" content="Circular Progress Button with SVG" />
		<meta name="keywords" content="circular progress button, progress indicator, svg line animation, radial progress, css" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>
	</head>
	<body>
		<div class="container">
			<!-- Top Navigation -->
			<div class="codrops-top clearfix">
				<span class="right"><a class="codrops-icon codrops-icon-drop" href="http://www.marcodalprato.it"><span>marcodalprato.it</span></a></span>
			</div>
			<header class="codrops-header">
				<h1><?=$companyName?></span></h1>	
			</header>
			<section>
				<div class="box">
				
				  <form method="get" action="/index.php?output0=Cancello0">
				  
					<!-- progress button -->
					<div class="progress-button">
						<button type="submit" type="submit" name="output0_toggle" value="<?=$output0Name?>" ><span><?=$output0Name?></span></button>
						<svg class="progress-circle" width="70" height="70"><path d="m35,2.5c17.955803,0 32.5,14.544199 32.5,32.5c0,17.955803 -14.544197,32.5 -32.5,32.5c-17.955803,0 -32.5,-14.544197 -32.5,-32.5c0,-17.955801 14.544197,-32.5 32.5,-32.5z"/></svg>
						<svg class="checkmark" width="70" height="70"><path d="m31.5,46.5l15.3,-23.2"/><path d="m31.5,46.5l-8.5,-7.1"/></svg>
						<svg class="cross" width="70" height="70"><path d="m35,35l-9.3,-9.3"/><path d="m35,35l9.3,9.3"/><path d="m35,35l-9.3,9.3"/><path d="m35,35l9.3,-9.3"/></svg>
					</div><!-- /progress-button -->
					
					<!-- progress button -->
					<div class="progress-button">
						<button type="submit" type="submit" name="output1_toggle" ><span><?=$output1Name?></span></button>
						<svg class="progress-circle" width="70" height="70"><path d="m35,2.5c17.955803,0 32.5,14.544199 32.5,32.5c0,17.955803 -14.544197,32.5 -32.5,32.5c-17.955803,0 -32.5,-14.544197 -32.5,-32.5c0,-17.955801 14.544197,-32.5 32.5,-32.5z"/></svg>
						<svg class="checkmark" width="70" height="70"><path d="m31.5,46.5l15.3,-23.2"/><path d="m31.5,46.5l-8.5,-7.1"/></svg>
						<svg class="cross" width="70" height="70"><path d="m35,35l-9.3,-9.3"/><path d="m35,35l9.3,9.3"/><path d="m35,35l-9.3,9.3"/><path d="m35,35l9.3,-9.3"/></svg>
					</div><!-- /progress-button -->
					
					<div class="progress-button">
						<button type="submit" type="submit" name="output2_toggle" ><span><?=$output2Name?></span></button>
						<svg class="progress-circle" width="70" height="70"><path d="m35,2.5c17.955803,0 32.5,14.544199 32.5,32.5c0,17.955803 -14.544197,32.5 -32.5,32.5c-17.955803,0 -32.5,-14.544197 -32.5,-32.5c0,-17.955801 14.544197,-32.5 32.5,-32.5z"/></svg>
						<svg class="checkmark" width="70" height="70"><path d="m31.5,46.5l15.3,-23.2"/><path d="m31.5,46.5l-8.5,-7.1"/></svg>
						<svg class="cross" width="70" height="70"><path d="m35,35l-9.3,-9.3"/><path d="m35,35l9.3,9.3"/><path d="m35,35l-9.3,9.3"/><path d="m35,35l9.3,-9.3"/></svg>
					</div><!-- /progress-button -->
					
					<!-- progress button -->
					<div class="progress-button">
						<button type="submit" type="submit" name="output3_toggle" ><span><?=$output3Name?></span></button>
						<svg class="progress-circle" width="70" height="70"><path d="m35,2.5c17.955803,0 32.5,14.544199 32.5,32.5c0,17.955803 -14.544197,32.5 -32.5,32.5c-17.955803,0 -32.5,-14.544197 -32.5,-32.5c0,-17.955801 14.544197,-32.5 32.5,-32.5z"/></svg>
						<svg class="checkmark" width="70" height="70"><path d="m31.5,46.5l15.3,-23.2"/><path d="m31.5,46.5l-8.5,-7.1"/></svg>
						<svg class="cross" width="70" height="70"><path d="m35,35l-9.3,-9.3"/><path d="m35,35l9.3,9.3"/><path d="m35,35l-9.3,9.3"/><path d="m35,35l9.3,-9.3"/></svg>
					</div><!-- /progress-button -->
					
					
					<hr>
					
						<!-- progress button -->
					<div class="progress-button">
						<button type="submit" type="submit" name="outputAll_toggle" ><span><?=$outputAllName?></span></button>
						<svg class="progress-circle" width="70" height="70"><path d="m35,2.5c17.955803,0 32.5,14.544199 32.5,32.5c0,17.955803 -14.544197,32.5 -32.5,32.5c-17.955803,0 -32.5,-14.544197 -32.5,-32.5c0,-17.955801 14.544197,-32.5 32.5,-32.5z"/></svg>
						<svg class="checkmark" width="70" height="70"><path d="m31.5,46.5l15.3,-23.2"/><path d="m31.5,46.5l-8.5,-7.1"/></svg>
						<svg class="cross" width="70" height="70"><path d="m35,35l-9.3,-9.3"/><path d="m35,35l9.3,9.3"/><path d="m35,35l-9.3,9.3"/><path d="m35,35l9.3,-9.3"/></svg>
					</div><!-- /progress-button -->
					
			
					
				 </form>
					    
			
					
				</div>
		
				


	
         
			</section>
		
		</div><!-- /container -->
		<script src="js/classie.js"></script>
		<script src="js/uiProgressButton.js"></script>
		<script>
			[].slice.call( document.querySelectorAll( '.progress-button' ) ).forEach( function( bttn, pos ) {
				new UIProgressButton( bttn, {
					callback : function( instance ) {
						var progress = 0,
							interval = setInterval( function() {
								progress = Math.min( progress + Math.random() * 0.1, 1 );
								instance.setProgress( progress );

								if( progress === 1 ) {
									instance.stop( pos === 1 || pos === 3 ? -1 : 1 );
									clearInterval( interval );
								}
							}, 150 );
					}
				} );
			} );
		</script>
	</body>
</html>