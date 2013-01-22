
function init() {

var menu = "<ul class='nav nav-tabs nav-stacked'>" +
				"<li class='nav-header'>Getting Started</li>" +
				"<li><a href='docs.html'>Multiverse</a></li>" +
				"<li><a href='GettingStarted.html'>Getting Started</a></li>" +
				"<li class='nav-header'>Installation</li>" +
				"<li><a href='Download.html'>Download</a></li>" +
				"<li><a href='Installing.html'>Install</a></li>" +
				"<li><a href='Upgrade.html'>Upgrade</a></li>" +
				"<li class='nav-header'>General topics</li>" +
				"<li><a href='urls.html'>URLs</a></li>" +
				"<li><a href='APIControllers.html'>API Controllers</a></li>" +
				"<li><a href='APIModels.html'>API Models</a></li>" +
				"<li><a href='APPControllers.html'>Application Controllers</a></li>" +
				"<li><a href='APPViews.html'>Application Views</a></li>" +
				"<li><a href='Media.html'>Media</a></li>" +
				"<li><a href='Debugger.html'>Debug API</a></li>" +
				"<li class='nav-header'>Classes</li>" +
				"<li><a href='AbstractCore.html'>AbstractCore</a></li>" +
				"<li><a href='API.html'>API</a></li>" +
				"<li><a href='Core.html'>Core</a></li>" +
				"<li><a href='Handling.html'>Handling</a></li>" +
				"<li><a href='Loader.html'>Loader</a></li>" +
				"<li><a href='OutputHandler.html'>OutputHandler</a></li>" +
				"<li><a href='Database.html'>Database</a></li>" +
			"</ul>";
document.getElementById("navBar").innerHTML = menu;

}

window.onload = init;