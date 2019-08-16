var UserLoggedIn;
var timer;
function logout() {
	// alert("you have reached logout");
		$.post("includes/handlers/ajax/logout.php", function() {
		window.location.replace("login.php");
	});
}
function openPage(url) { 
	if(timer != null) { // if the timer is not null when we open a new page
		clearTimeout(timer); // clear out the remaining time
	}
	if(url.indexOf("?") == -1) { // if url doesn't have a question mark
		url = url + "?"; // add a question mark to the url to signify first passed parameter
	}
	var encodedUrl = encodeURI(url + "&UserLoggedIn=" + UserLoggedIn) // inbuilt javascript function to encode url (replace unknown characters with url equivalent)
	console.log(encodedUrl);
	window.load(encodedUrl);
	$("body").scrollTop(0); // created jquery object around the body of the page, when we change page, it will automatically scroll to the top (doing this because the scroll is attached to the window)
	history.pushState(null, null, url); // put the destination page url in the address bar

}