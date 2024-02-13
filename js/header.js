$(document).ready(function()
{
    var profile = $("#menu-profile");
    var menu = $("#profile-menu");
    var p_position = profile.position();

    profile.click(function()
    {
        var menu_width = profile.width() + 10;
        var menu_top = Math.floor(p_position.top) + (profile.height() * 2) + 10;
        var menu_left = Math.floor(p_position.left) + (menu.width() / 3) + 5;

        menu.addClass("profile-menu-is-active");
        menu.css('top', menu_top);
        menu.css('left', menu_left);
        menu.css('width', menu_width);
    });
    
    /*
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
    */
});