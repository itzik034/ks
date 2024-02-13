$(document).ready(function()
{
    var pic = 1;
    var element = $("#pic-slider");
    var left = $("#slider-right");
    var right = $("#slider-left");
    var pic_limit = 3;
    var left2 = $("#left-arrow2");
    var right2 = $("#right-arrow2");


    left.click(function()
    {
        pic++;
        if(pic > pic_limit)
        {
            pic = 1;
        }
        element.html('<img class="slider-images-class" src="/ks/img/slider/pic' + pic + '.jpg">');
    });
    
    right.click(function()
    {
        pic--;
        if(pic <= 0)
        {
            pic = pic_limit;
        }
        element.html('<img class="slider-images-class" src="/ks/img/slider/pic' + pic + '.jpg">');
    });


    right2.click(function()
    {
        alert(1);
    });

    left2.click(function()
    {
        alert(2);
    });

});