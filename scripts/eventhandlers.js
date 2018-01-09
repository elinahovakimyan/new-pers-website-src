const navMouseIn = function() {
    const all = document.getElementsByClassName("hidden-nav");
	for (let i = 0; i < all.length; i++) {
		all[i].style.display = "inline-block";
	}
	document.getElementById("navbar").style.backgroundColor = "rgba(135, 202, 229, 0.8)";
}

const navMouseOut = function() {
    const all = document.getElementsByClassName("hidden-nav");
	for (let i = 0; i < all.length; i++) {
		all[i].style.display = "none";
	}
	document.getElementById("navbar").style.backgroundColor = "transparent";
}