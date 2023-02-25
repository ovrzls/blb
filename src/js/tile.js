window.addEventListener('DOMContentLoaded', (event) => {
	const tiles = document.getElementsByClassName('tile');
	let tileMap = 	[[0,0,0,0,0],
					 [0,0,0,0,0],
					 [0,0,1,0,0],
					 [0,0,0,0,0],
					 [0,0,0,0,0]];

	for (let tile of tiles) {
		tile.addEventListener( 'click', clickHandler, false )
	}

	function clickHandler(e) {
		const indexX = e.currentTarget.getAttribute('data-x');
		const indexY = e.currentTarget.getAttribute('data-y');
		
		if( tileMap[ indexY ][ indexX ] == 1 ) {
			tileMap[ indexY ][ indexX ] = 0;
			e.currentTarget.classList.remove('active');
		} else {
			tileMap[ indexY ][ indexX ] = 1;
			e.currentTarget.classList.add('active');
		}
		if( checkRow(indexY) || checkCol(indexX) || checkDiag() ) {
			console.log("winner");
			covfefe();
		}
	}

	function checkRow(y) {
		let sum = 0;
		for (var i = 0; i <= 4; i++) {
			sum += tileMap[y][i];
		}
		if ( sum == 5 )
			return true;
		else
			return false;
	}
	function checkCol(x) {
		let sum = 0;
		for (var i = 0; i <= 4; i++) {
			sum += tileMap[i][x];
		}
		if ( sum == 5 )
			return true;
		else
			return false;
	}
	function checkDiag(){
		let sumA = tileMap[0][0] + tileMap[1][1] + tileMap[2][2] + tileMap[3][3] + tileMap[4][4];
		let sumB = tileMap[0][4] + tileMap[1][3] + tileMap[2][2] + tileMap[3][1] + tileMap[4][0];
		if ( sumA == 5 || sumB == 5 )
			return true;
		else
			return false;
	}
});

function covfefe() {
	const colorArray = new Array( 'aliceblue', 'antiquewhite', 'aqua', 'aquamarine', 'azure', 'beige', 'bisque', 'black', 'blanchedalmond', 'blue', 'blueviolet', 'brown', 'burlywood', 'cadetblue', 'chartreuse', 'chocolate', 'coral', 'cornflowerblue', 'cornsilk', 'crimson', 'cyan', 'darkblue', 'darkcyan', 'darkgoldenrod', 'darkgray', 'darkgreen', 'darkgrey', 'darkkhaki', 'darkmagenta', 'darkolivegreen', 'darkorange', 'darkorchid', 'darkred', 'darksalmon', 'darkseagreen', 'darkslateblue', 'darkslategray', 'darkslategrey', 'darkturquoise', 'darkviolet', 'deeppink', 'deepskyblue', 'dimgray', 'dimgrey', 'dodgerblue', 'firebrick', 'floralwhite', 'forestgreen', 'fuchsia', 'gainsboro', 'ghostwhite', 'gold', 'goldenrod', 'gray', 'grey', 'green', 'greenyellow', 'honeydew', 'hotpink', 'indianred', 'indigo', 'ivory', 'khaki', 'lavender', 'lavenderblush', 'lawngreen', 'lemonchiffon', 'lightblue', 'lightcoral', 'lightcyan', 'lightgoldenrodyellow', 'lightgray', 'lightgreen', 'lightgrey', 'lightpink', 'lightsalmon', 'lightseagreen', 'lightskyblue', 'lightslategray', 'lightslategrey', 'lightsteelblue', 'lightyellow', 'lime', 'limegreen', 'linen', 'magenta', 'maroon', 'mediumaquamarine', 'mediumblue', 'mediumorchid', 'mediumpurple', 'mediumseagreen', 'mediumslateblue', 'mediumspringgreen', 'mediumturquoise', 'mediumvioletred', 'midnightblue', 'mintcream', 'mistyrose', 'moccasin', 'navajowhite', 'navy', 'oldlace', 'olive', 'olivedrab', 'orange', 'orangered', 'orchid', 'palegoldenrod', 'palegreen', 'paleturquoise', 'palevioletred', 'papayawhip', 'peachpuff', 'peru', 'pink', 'plum', 'powderblue', 'purple', 'red', 'rosybrown', 'royalblue', 'saddlebrown', 'salmon', 'sandybrown', 'seagreen', 'seashell', 'sienna', 'silver', 'skyblue', 'slateblue', 'slategray', 'slategrey', 'snow', 'springgreen', 'steelblue', 'tan', 'teal', 'thistle', 'tomato', 'turquoise', 'violet', 'wheat', 'white', 'whitesmoke', 'yellow', 'yellowgreen');
    const mysvg = document.getElementById("covfefe");
    const svgns = 'http://www.w3.org/2000/svg';
    const xlinkns = 'http://www.w3.org/1999/xlink';
    const svgWidth = mysvg.clientWidth;
    const svgHeight = mysvg.clientHeight;
    init();
    function init() {
    	mysvg.style.zIndex = "999";
        for (let x = 0; x < 35; x++) {
            createShape();
        }
    }
    function createShape() {
        let r = getRadius(),
            x = getX(),
            y = getY(),
            strokeW = getStrokeWidth(r),
            strokeC = getStrokeColor(),
            fill = getFill();
        let shape = document.createElementNS(svgns, 'circle');
            shape.setAttributeNS(null, 'id', getid(x,y));
            shape.setAttributeNS(null, 'cx', getX());
            shape.setAttributeNS(null, 'cy', getY());
            shape.setAttributeNS(null, 'r', getRadius());
            shape.setAttributeNS(null, 'fill', getFill());
            shape.setAttributeNS(null, 'stroke', getStrokeColor());
            shape.setAttributeNS(null, 'stroke-width', getStrokeWidth());
            shape.setAttributeNS(null, 'opacity', randomNum( 50, 100 ) / 100 );
        console.log( 20 * r / ( svgWidth * .1 ));
        mysvg.appendChild(shape);
    }
    function getid(x,y) {
        return "cir-" + x + "-" + y;
    }
    function getRadius() {
        return randomNum( 22, ( svgWidth * .05 ) );
    }
    function getX() {
        return randomNum( 0, svgWidth );
    }
    function getY() {
        return randomNum( 0, svgHeight );
    }
    function getStrokeWidth(radius) {
        return randomNum( 2, 22 );
    }
    function getStrokeColor() {
        return colorArray[randomNum( 1, colorArray.length )];
    }
    function getFill() {
        return colorArray[randomNum( 1, colorArray.length )];
    }
    function randomNum(min, max){
        let ceiling = max - min;
        return ( Math.floor( Math.random() * max ) + min );
    }
}
