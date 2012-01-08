function itemClicked(item)
{
   return loadLightBox(item.id);
}
function loadLightBox(page)
{
	$('overlay').style.display='block';
	new Ajax.Updater('box', '/item/view/'+page+'?xml', { method: 'get' });
	window.location.hash=page;
	try
	{
	    var pageTracker = _gat._getTracker(_portfolio_gaa);
        pageTracker._trackPageview(location.pathname + location.search + location.hash);
    }
    catch(err){}
}
function unloadLightBox()
{
	$('overlay').style.display='none';
	$('box').update('<img id="spinner" src="/img/spinner.gif"/>');
	window.location.hash='';
}
function checkFragment()
{
	if(window.location.hash.length > 0)
	{
		loadLightBox(window.location.hash.substr(1));
	}
}