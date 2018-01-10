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
window.addEventListener("click", runOnScroll);

// // global lock, so put this code in a closure of some sort so you're not polluting.
// var locked = false;
// var runOnScroll =  function(evt) {
//   if(locked) return;
//   locked = true;
//   // ...your code goes here...
//   locked = false;
// };
