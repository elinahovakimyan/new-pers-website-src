// ****************************** navbar effetcts **************************

const navMouseIn = function() {
    const all = document.getElementsByClassName("hidden-nav");
  	for (let i = 0; i < all.length; i++) {
  		all[i].style.display = "inline-block";
  	}
  	document.getElementById("navbar").style.backgroundColor = "rgba(58, 200, 216, 0.7)";
}

const navMouseOut = function() {
    const all = document.getElementsByClassName("hidden-nav");
  	for (let i = 0; i < all.length; i++) {
  		all[i].style.display = "none";
  	}
  	document.getElementById("navbar").style.backgroundColor = "transparent";
}




  $("#main").tiltedpage_scroll({
    sectionContainer: "> section",     // In case you don't want to use <section> tag, you can define your won CSS selector here
    angle: 50,                         // You can define the angle of the tilted section here. Change this to false if you want to disable the tilted effect. The default value is 50 degrees.
    opacity: true,                     // You can toggle the opacity effect with this option. The default value is true
    scale: true,                       // You can toggle the scaling effect here as well. The default value is true.
    outAnimation: true                 // In case you do not want the out animation, you can toggle this to false. The defaul value is true.
  });







// ****************************** page change effetcts **************************

// what should we do when scrolling occurs
var runOnScroll =  function(evt) {
  // not the most exciting thing, but a thing nonetheless
  const all = document.getElementsByClassName("scrollDiv");
  console.log(all)
  for (let i = 0; i < all.length; i++) {
    console.log(all[i].className)
    if(all[i].className.includes("next")) {
      all[i].classList.add("active")
      all[i].classList.remove("invisible")
      all[i].classList.remove("next")
      if(i < all.length - 1) {
        all[i+1].classList.add("next")
      } else {
        all[0].classList.add("next")
      }
    } else if(all[i].className.includes("active")) {
      all[i].classList.add("previous")
      all[i].classList.add("invisible")
      all[i].classList.remove("active")
    } else if(all[i].className.includes("previous")) {
      all[i].classList.remove("previous")
      all[i].classList.add("previous")

    }
  }
};

// and then make each element do something on scroll
document.getElementById("main").addEventListener("click", runOnScroll);

// global lock, so put this code in a closure of some sort so you're not polluting.
var locked = false;
var runOnScroll =  function(evt) {
  if(locked) return;
  locked = true;
  // ...your code goes here...
  locked = false;
};













// ****************************** hint effetcts **************************

var $toastContent = $('<span>Click anywhere to change the page</span>').add($('<button class="btn-flat toast-action">Close</button>'));
  Materialize.toast($toastContent, 10000);
