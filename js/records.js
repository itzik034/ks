$(document).ready(function()
{
    var tid;
    
    function showPopup(t_id)
    {
        $("#popup-window").css("top", "0");
        $("#popup-window").css("opacity", "1");
        $("#popup-window-msg").css("top", "0");
        $("#popup-window-msg").css("opacity", "1");
        tid = t_id;
        var t_name = "";
        get_teacher_first_name(tid, function(tfn)
        {
            t_name += tfn;
            get_teacher_last_name(tid, function(tln)
            {
                t_name += "&nbsp;";
                t_name += tln;
                $("#popup-split-top").html("למחוק את " + t_name + "?");
                $("#popup-split-top").css("direction", "rtl");
            });
        });
        
    }

    function hidePopup()
    {
        $("#popup-window").css("top", "-10000px");
        $("#popup-window").css("opacity", "0");
        $("#popup-window-msg").css("top", "-10000px");
        $("#popup-window-msg").css("opacity", "0");
    }

    $("#clk").click(function()
    {
        showPopup('2');
    });

    $("#popup-ok").click(function()
    {
        var t_name = "";
        get_teacher_first_name(tid, function(tfn)
        {
            t_name += tfn;
            get_teacher_last_name(tid, function(tln)
            {
                t_name += " ";
                t_name += tln;
                alert(t_name + " נמחק");
            });
        });
        hidePopup();
    });

    $("#popup-cancel").click(function()
    {
        hidePopup();
    });

    $(".delete-teacher").click(function()
    {
        var t_id2 = $(this).attr('id');
        showPopup(t_id2);
    });

    function get_teacher_first_name(t_id1, callback)
    {
        $.ajax(
            {
                url: 'action/action.php',
                type: 'GET',
                data: { action: 't_f_name', t_id: t_id1 },
                success: function(response) 
                {
                    callback(response);
                }
            });
    }

    function get_teacher_last_name(t_id1, callback)
    {
        $.ajax(
            {
                url: 'action/action.php',
                type: 'GET',
                data: { action: 't_l_name', t_id: t_id1 },
                success: function(response) 
                {
                    callback(response);
                }
            });
    }
});