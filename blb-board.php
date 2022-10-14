<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Better Life Bingo</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="scripts.js"></script>
</head>
<body>
    <?php 
        $bingosArr = array("test","test");
    ?>
<div class="tile-grid" id="gameboard">
	<svg class="tile" data-x="0" data-y="0" class="tile" viewBox="0 0 120 100" xmlns="http://www.w3.org/2000/svg">
		<title>--Subject2--</title>
		<rect fill="currentColor" width="120" height="100" />
		<text transform="translate(0,35)" fill="white" stroke="#efefef" stroke-width=".25">--Subject0--</text>
	</svg>
	<svg class="tile" data-x="1" data-y="0" class="tile" viewBox="0 0 120 100" xmlns="http://www.w3.org/2000/svg">
		<title>--Subject2--</title>
		<rect fill="currentColor" width="120" height="100" />
		<text transform="translate(0,35)" fill="white" stroke="#efefef" stroke-width=".25">--Subject1--</text>
	</svg>
	<svg class="tile" data-x="2" data-y="0" class="tile" viewBox="0 0 120 100" xmlns="http://www.w3.org/2000/svg">
		<title>--Subject2--</title>
		<rect fill="currentColor" width="120" height="100" />
		<text transform="translate(0,35)" fill="white" stroke="#efefef" stroke-width=".25">--Subject2--</text>
	</svg>
	<svg class="tile" data-x="3" data-y="0" class="tile" viewBox="0 0 120 100" xmlns="http://www.w3.org/2000/svg">
		<title>--Subject2--</title>
		<rect fill="currentColor" width="120" height="100" />
		<text transform="translate(0,35)" fill="white" stroke="#efefef" stroke-width=".25">--Subject3--</text>
	</svg>
	<svg class="tile" data-x="4" data-y="0" class="tile" viewBox="0 0 120 100" xmlns="http://www.w3.org/2000/svg">
		<title>--Subject2--</title>
		<rect fill="currentColor" width="120" height="100" />
		<text transform="translate(0,35)" fill="white" stroke="#efefef" stroke-width=".25">--Subject4--</text>
	</svg>
	<svg class="tile" data-x="0" data-y="1" class="tile" viewBox="0 0 120 100" xmlns="http://www.w3.org/2000/svg">
		<title>--Subject2--</title>
		<rect fill="currentColor" width="120" height="100" />
		<text transform="translate(0,35)" fill="white" stroke="#efefef" stroke-width=".25">--Subject0--</text>
	</svg>
	<svg class="tile" data-x="1" data-y="1" class="tile" viewBox="0 0 120 100" xmlns="http://www.w3.org/2000/svg">
		<title>--Subject2--</title>
		<rect fill="currentColor" width="120" height="100" />
		<text transform="translate(0,35)" fill="white" stroke="#efefef" stroke-width=".25">--Subject1--</text>
	</svg>
	<svg class="tile" data-x="2" data-y="1" class="tile" viewBox="0 0 120 100" xmlns="http://www.w3.org/2000/svg">
		<title>--Subject2--</title>
		<rect fill="currentColor" width="120" height="100" />
		<text transform="translate(0,35)" fill="white" stroke="#efefef" stroke-width=".25">--Subject2--</text>
	</svg>
	<svg class="tile" data-x="3" data-y="1" class="tile" viewBox="0 0 120 100" xmlns="http://www.w3.org/2000/svg">
		<title>--Subject2--</title>
		<rect fill="currentColor" width="120" height="100" />
		<text transform="translate(0,35)" fill="white" stroke="#efefef" stroke-width=".25">--Subject3--</text>
	</svg>
	<svg class="tile" data-x="4" data-y="1" class="tile" viewBox="0 0 120 100" xmlns="http://www.w3.org/2000/svg">
		<title>--Subject2--</title>
		<rect fill="currentColor" width="120" height="100" />
		<text transform="translate(0,35)" fill="white" stroke="#efefef" stroke-width=".25">--Subject4--</text>
	</svg>
	<svg class="tile" data-x="0" data-y="2" class="tile" viewBox="0 0 120 100" xmlns="http://www.w3.org/2000/svg">
		<title>--Subject2--</title>
		<rect fill="currentColor" width="120" height="100" />
		<text transform="translate(0,35)" fill="white" stroke="#efefef" stroke-width=".25">--Subject0--</text>
	</svg>
	<svg class="tile" data-x="1" data-y="2" class="tile" viewBox="0 0 120 100" xmlns="http://www.w3.org/2000/svg">
		<title>--Subject2--</title>
		<rect fill="currentColor" width="120" height="100" />
		<text transform="translate(0,35)" fill="white" stroke="#efefef" stroke-width=".25">--Subject1--</text>
	</svg>
	<svg class="freespace" data-x="2" data-y="2" class="tile" viewBox="0 0 120 100" xmlns="http://www.w3.org/2000/svg">
		<title>--Subject2--</title>
		<rect fill="currentColor" width="120" height="100" />
		<text transform="translate(0,35)" fill="white" stroke="#efefef" stroke-width=".25">--FreeSpace--</text>
	</svg>
	<svg class="tile" data-x="3" data-y="2" class="tile" viewBox="0 0 120 100" xmlns="http://www.w3.org/2000/svg">
		<title>--Subject2--</title>
		<rect fill="currentColor" width="120" height="100" />
		<text transform="translate(0,35)" fill="white" stroke="#efefef" stroke-width=".25">--Subject3--</text>
	</svg>
	<svg class="tile" data-x="4" data-y="2" class="tile" viewBox="0 0 120 100" xmlns="http://www.w3.org/2000/svg">
		<title>--Subject2--</title>
		<rect fill="currentColor" width="120" height="100" />
		<text transform="translate(0,35)" fill="white" stroke="#efefef" stroke-width=".25">--Subject4--</text>
	</svg>
	<svg class="tile" data-x="0" data-y="3" class="tile" viewBox="0 0 120 100" xmlns="http://www.w3.org/2000/svg">
		<title>--Subject2--</title>
		<rect fill="currentColor" width="120" height="100" />
		<text transform="translate(0,35)" fill="white" stroke="#efefef" stroke-width=".25">--Subject0--</text>
	</svg>
	<svg class="tile" data-x="1" data-y="3" class="tile" viewBox="0 0 120 100" xmlns="http://www.w3.org/2000/svg">
		<title>--Subject2--</title>
		<rect fill="currentColor" width="120" height="100" />
		<text transform="translate(0,35)" fill="white" stroke="#efefef" stroke-width=".25">--Subject1--</text>
	</svg>
	<svg class="tile" data-x="2" data-y="3" class="tile" viewBox="0 0 120 100" xmlns="http://www.w3.org/2000/svg">
		<title>--Subject2--</title>
		<rect fill="currentColor" width="120" height="100" />
		<text transform="translate(0,35)" fill="white" stroke="#efefef" stroke-width=".25">--Subject2--</text>
	</svg>
	<svg class="tile" data-x="3" data-y="3" class="tile" viewBox="0 0 120 100" xmlns="http://www.w3.org/2000/svg">
		<title>--Subject2--</title>
		<rect fill="currentColor" width="120" height="100" />
		<text transform="translate(0,35)" fill="white" stroke="#efefef" stroke-width=".25">--Subject3--</text>
	</svg>
	<svg class="tile" data-x="4" data-y="3" class="tile" viewBox="0 0 120 100" xmlns="http://www.w3.org/2000/svg">
		<title>--Subject2--</title>
		<rect fill="currentColor" width="120" height="100" />
		<text transform="translate(0,35)" fill="white" stroke="#efefef" stroke-width=".25">--Subject4--</text>
	</svg>
	<svg class="tile" data-x="0" data-y="4" class="tile" viewBox="0 0 120 100" xmlns="http://www.w3.org/2000/svg">
		<title>--Subject2--</title>
		<rect fill="currentColor" width="120" height="100" />
		<text transform="translate(0,35)" fill="white" stroke="#efefef" stroke-width=".25">--Subject0--</text>
	</svg>
	<svg class="tile" data-x="1" data-y="4" class="tile" viewBox="0 0 120 100" xmlns="http://www.w3.org/2000/svg">
		<title>--Subject2--</title>
		<rect fill="currentColor" width="120" height="100" />
		<text transform="translate(0,35)" fill="white" stroke="#efefef" stroke-width=".25">--Subject1--</text>
	</svg>
	<svg class="tile" data-x="2" data-y="4" class="tile" viewBox="0 0 120 100" xmlns="http://www.w3.org/2000/svg">
		<title>--Subject2--</title>
		<rect fill="currentColor" width="120" height="100" />
		<text transform="translate(0,35)" fill="white" stroke="#efefef" stroke-width=".25">--Subject2--</text>
	</svg>
	<svg class="tile" data-x="3" data-y="4" class="tile" viewBox="0 0 120 100" xmlns="http://www.w3.org/2000/svg">
		<title>--Subject2--</title>
		<rect fill="currentColor" width="120" height="100" />
		<text transform="translate(0,35)" fill="white" stroke="#efefef" stroke-width=".25">--Subject3--</text>
	</svg>
	<svg class="tile" data-x="4" data-y="4" class="tile" viewBox="0 0 120 100" xmlns="http://www.w3.org/2000/svg">
		<title>--Subject2--</title>
		<rect fill="currentColor" width="120" height="100" />
		<text transform="translate(0,35)" fill="white" stroke="#efefef" stroke-width=".25">--Subject4--</text>
	</svg>
</div>
<svg id="covfefe" xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'></svg>
</body>
</html>