const pageArr = [
	'first',
	'second',
	'third',
	'fourth',
	'fifth',
];

const getRandomNum = function(min, max) {
  return Math.floor(Math.random() * (max - min)) + min;
}

const itemChange = function(i) {
	//loop over array incrementing and decrementing the index
	setInterval(function() {

		if(i < pageArr.length) {

			//LOOPING OVER DIV-S AND SPECIFYING CLASSNAMES

			if(i > 0) {
				document.getElementById(pageArr[i-1]).classList.remove("active");
				document.getElementById(pageArr[i-1]).classList.add("invisible");
			}
			document.getElementById(pageArr[i]).classList.remove("invisible");
			document.getElementById(pageArr[i]).classList.add("active");

			i += 1;

		} else {
			document.getElementById(pageArr[pageArr.length-1]).classList.remove("active");
			document.getElementById(pageArr[pageArr.length-1]).classList.add("invisible");
			document.getElementById(pageArr[0]).classList.add("active");

			i = 0;

		}

	}, getRandomNum(600, 1500));

	return;

}

//calling the function on windows.load

document.getElementById("main").addEventListener("load", itemChange(0));














//ANIMATION COOOOL ART

// const canvas = document.getElementById("canvas");
// const context = canvas.getContext("2d");

// #1 (10 points)

// const createPoints = function(count, canvasWidth, canvasHeight) {

// 	// TODO: Implement this function which takes as arguments a count, canvasWidth and canvasHeight and returns an array of points with different x and y locations (this is where you use the rand method I provided above).  All generated boxes need to be inside the canvas (which is why canvasWidth and canvasHeight are given as arguments).

// const colorArray = [
// 	'#2D5F73',
// 	'#538EA6',
// 	'#F2D1B3',
// 	'#F2B8A2',
// 	'#F28C8C'
// ]

// const rand = function(num) {
// 	return Math.floor(Math.random() * num) + 1;
// }

// const createHex = function() {
// 	return '#' + rand(999999);
// }

// const createPoints = function(count, canvasWidth, canvasHeight) {
// 	const pointArr = [];
// 	const inner = function(index) {

// 		if(index>=count) {
// 			return;
// 		}
// 		pointArr[index] = {
// 			x: rand(canvasWidth-40)+20,
// 	        y: rand(canvasHeight-40)+20,
// 	        width: 30,
// 	        height: 30,
// 	        r: 20,
// 	        xDelta: rand(4),
// 	        yDelta: rand(4),
// 	        color: colorArray[rand(5)-1]
// 		}

// 		inner(index+1)
// 	}

// 	inner(0)
// 	return pointArr;

// }

// const drawCircle = function(x,y,r) {
// 	context.beginPath();
// 	context.arc(x, y, r, 0, 2 * Math.PI, false);
// 	context.fill();
// 	context.stroke();
// }

// const points = createPoints(150, canvas.width, canvas.height);

// const draw = function() {
// 	const forEach = function(arr, i) {
//         if(i === arr.length)
//             return;

//         const point = arr[i];

//   //       context.fillStyle = point.color;
// 		// context.fillRect(point.x, point.y, point.width, point.height)

// 		context.fillStyle = point.color;
// 		context.strokeStyle = point.color;
//         drawCircle(point.x, point.y, point.r)

//         forEach(arr, i + 1);
//     };

//     forEach(points, 0);
// }

// const update = function() {
// 	const forEach = function(arr, i) {
//         if(i === arr.length)
//             return;

//         const point = arr[i];

//         if(point.x >= canvas.width - point.r || point.x <= point.r) {
//         	point.xDelta = -point.xDelta
//         } else if(point.y >= canvas.height - point.r || point.y <= point.r) {
//         	point.yDelta = -point.yDelta
//         }

//         point.x = point.x + point.xDelta;
//         point.y = point.y - point.yDelta;

//         forEach(arr, i + 1);
//     };

//     forEach(points, 0);
// }

// const loop = function() {
// 	//If you want without the background use the code below
// 	//context.clearRect(0, 0, canvas.width , canvas.height );
// 	draw();
// 	update();
// 	requestAnimationFrame(loop)
// }

// loop()
