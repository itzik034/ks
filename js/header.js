$(document).ready(function()
{
    var clickIt = false;
    var isShown = false;
    function showMenu()
    {
        var menu = $("#menu-profile");
        var pm = $("#profile-menu");
        var p = menu.position();
        var h = menu.height();
        var w = menu.width();
        
        pm.css('top', p.top + (h * 2) + 10);
        pm.css('left', p.left + (w / 2));
        pm.css('width', (w + 12));
        isShown = true;
    }

    $("#menu-profile").mouseenter(function()
    {
        showMenu();
        $("#profile-menu").addClass("profile-menu-is-active");
    });
    
    $("#menu-profile").click(function()
    {
        showMenu();
        clickIt = true;
        $("#profile-menu").addClass("profile-menu-is-active");
    });

    $("#menu-profile").mouseleave(function()
    {
        $("#profile-menu").removeClass("profile-menu-is-active");
    });
  });