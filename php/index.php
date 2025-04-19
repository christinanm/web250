<?php
	 if (isset( $_GET["p"])) {
		 $pageName = $_GET["p"] . ".php";
		 $titles = [
            'home' => 'Home',
            'introduction' => 'Introduction',
            'contract' => 'Contract',
            'fizz_buzz' => 'Fizz Buzz',
            'intro_form' => 'Intro Form',
            'business_card' => 'Business Card',
            // add more mappings if needed
        ];
        
        $pageTitle = $titles[$_GET["p"]] ?? ucfirst(str_replace('_', ' ', $_GET["p"]));
	 }
	 else {
		 $pageName = "home.php";
         $pageTitle = "Home";
	 }

	 $pagePath ="contents/$pageName";
?>


<!DOCTYPE html>
<html lang = "en"> 
<head>
    <meta charset="UTF-8">
    <meta name = "viewport" content="width=device-width, initial-scale=1">
    <title>Christina Mekheil's Capricious Mongoose ✧ WEB250 ✧ <?php echo $pageTitle ?></title>
    <link rel="stylesheet" href="./styles/default.css">
	<link rel="icon" type="image/x-icon" href="./images/favicon.ico">
    <!-- <link href="https://fonts.googleapis.com/"
    rel="stylesheet"> pick fonts later --> 

    <script src="https://lint.page/kit/880bd5.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
    <h1>Christina Mekheil's Capricious Mongoose ✧ WEB250 </h1>
    <ul>
        <li><a href="?p=home">Home </a></li> 
        <li><a href="?p=introduction">Introduction </a></li> 
        <li><a href="?p=contract">Contract </a></li>   
        <li><a href="./business_card.html">Business Card</a></li>
        <li><a href="?p=fizz_buzz">Fizz Buzz</a></li>
        <li><a href="?p=intro_form">Intro Form</a></li>

            <li>
            <a href="#">External Sites &#x25BE; </a>
            <ul class="dropdown-nav">
                <li><a href="../index.html">Static Site </a></li>
                <li><a href="./superduper_static/">Multipage Static </a></li> 
                <li><a href="./superduper_php/">Multipage PHP </a></li> 
                <li><a href="./joy/">Joy of PHP </a></li> 
                <li><a href="./joy/samsusedcars.html">Sam's Used Cars </a></li> 
                <li><a href=" ../car_app/">Capricious Mongoose's Used Cars </a></li> 
            </ul>
            </li>

        </ul>
</header>
		<main>
			<h2><?php echo ($pageTitle)?></h2>
			<?php include ($pagePath)?>
		</main>
		<footer>
    <br> 
    
    <ul>
        <li><a href="https://github.com/christinanm" target="_blank" rel="noopener noreferrer">GitHub </a></li> 
        <li><a href="https://christinanm.github.io/" target="_blank" rel="noopener noreferrer">GitHub.io </a></li> 
        <li><a href="https://christinanm.github.io/web215/" target="_blank" rel="noopener noreferrer">WEB215.io </a></li> 
        <li><a href="https://christinanm.github.io/web250/" target="_blank" rel="noopener noreferrer">WEB250.io </a> </li> 
        <li><a href="https://www.freecodecamp.org/christinamekheil" target="_blank" rel="noopener noreferrer">freeCodeCamp </a></li> 
        <li><a href="https://www.codecademy.com/profiles/cmekhei0" target="_blank" rel="noopener noreferrer">Codecademy </a></li> 
        <li><a href="https://jsfiddle.net/u/christinanm/fiddles/" target="_blank" rel="noopener noreferrer">JSFiddle </a></li> 
        <li><a href="https://www.linkedin.com/in/christina-mekheil/" target="_blank" rel="noopener noreferrer">LinkedIn </a></li>
    </ul>
    
    <br>
    Designed by <i><a href = "./business_card.html">Christina's Consulting</a></i> &copy;2025
		</footer>
		<!-- <script src="/scripts/script.js"></script> -->
		
</body>
</html>