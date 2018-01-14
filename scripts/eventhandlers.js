// ****************************** navbar effetcts **************************

const navMouseIn = function() {
    const all = document.getElementsByClassName("hidden-nav");
  	for (let i = 0; i < all.length; i++) {
  		all[i].style.display = "inline-block";
  	}
  	document.getElementById("navbar").style.backgroundColor = "rgba(147, 112, 87, 0.7)";
}

const navMouseOut = function() {
    const all = document.getElementsByClassName("hidden-nav");
  	for (let i = 0; i < all.length; i++) {
  		all[i].style.display = "none";
  	}
  	document.getElementById("navbar").style.backgroundColor = "transparent";
}

const spinner = function(el) {
   el.classList.add("fa-spin")
}

const all = document.getElementsByClassName("social");
for (let i = 0; i < all.length; i++) {
  all[i].addEventListener("mouseover", spinner(all[i]))
}

// document.getElementById("navbar").addEventListener("mouseover", navMouseIn());
// document.getElementById("navbar").addEventListener("mouseout", navMouseOut());


/***SKILLS***/
$('div.skillbar').each(function () {
    $(this).find('div.skillbar-bar').css({
        width: $(this).attr('data-percent')
    });
});

window.sr = ScrollReveal();
sr.reveal('.chips', { duration: 1500 });
sr.reveal('.portfolio_row', { duration: 1500 });
sr.reveal('.card', { duration: 1500 });
sr.reveal('#contact-message', { duration: 2000 });

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


// // ****************************** page change effetcts **************************

// // what should we do when scrolling occurs
// var runOnScroll =  function(evt) {
//   // not the most exciting thing, but a thing nonetheless
//   const all = document.getElementsByClassName("scrollDiv");
//   console.log(all)
//   for (let i = 0; i < all.length; i++) {
//     console.log(all[i].className)
//     if(all[i].className.includes("next")) {
//       all[i].classList.add("active")
//       all[i].classList.remove("invisible")
//       all[i].classList.remove("next")
//       if(i < all.length - 1) {
//         all[i+1].classList.add("next")
//       } else {
//         all[0].classList.add("next")
//       }
//     } else if(all[i].className.includes("active")) {
//       all[i].classList.add("previous")
//       all[i].classList.add("invisible")
//       all[i].classList.remove("active")
//     } else if(all[i].className.includes("previous")) {
//       all[i].classList.remove("previous")
//       all[i].classList.add("previous")

//     }
//   }
// };

// // and then make each element do something on scroll
// document.getElementById("main").addEventListener("click", runOnScroll);

// // global lock, so put this code in a closure of some sort so you're not polluting.
// var locked = false;
// var runOnScroll =  function(evt) {
//   if(locked) return;
//   locked = true;
//   // ...your code goes here...
//   locked = false;
// };



// // ****************************** hint effetcts **************************

// var $toastContent = $('<span>Click anywhere to change the page</span>').add($('<button class="btn-flat toast-action">Close</button>'));
//   Materialize.toast($toastContent, 10000);
