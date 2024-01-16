
<?php
include 'connec.php' ;

$sql='SELECT * FROM pokemon';
$result=$connec->query($sql);/*le resultat demander = connection -> la requet (sql) */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
<style>
    :root {
        --primary: #e3d220;
        --secondary: ##8f8f8f;
        --gray-darker: #2C3E50;
        --primary-font: 'Roboto', sans-serif;
        --secondary-font: 'Pontiac', sans-serif;
      }
      
    body{
        background-color:var();
    }

    .main_main{
        display: flex;
        gap: 20px;
        flex-wrap: wrap;
        justify-content: center;
    }
    .main_hero{
        width: 1943px;
        padding-bottom: 123px;
    }
    .pokemon{
        
        
        
    }

    .carte{
        display:flex;
        flex-direction:column;
        align-items:stretch;
        flex-wrap:wrap;
        border:25px ridge rgba(0,0,0,.3);
        height: 826px;
        background-color:var(--primary);
        align-items: center;
    }
    .image{
        border:25px solid rgba(0,0,0,.3);
        height: 150px;
        width: 150px;
    
    }
    .img_bg{
        display:flex;
        justify-content: center;
    
    }
    </style>
</head>
<body>
<header>
    <img class="main_hero" src="../pokemon/reel.png" alt="">
</header>



    <main class="main_main">


<?php

while ($row=$result->fetch_assoc()){                              



?>

    <section class="pokemon">
        <div class="carte">
                <div class="img_bg">
                <img src=" <?= $row['pok_image_online'] ?>" class="image">




                </div>
                <h1><?= $row['pok_nom'] ?></h1>
                <h3>Poke Taille : <?= $row['pok_taille'] ?></h3>
    </div>
    </section>
    




<?php

}

?>



</main>
<!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>
</html>