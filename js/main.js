$(document).ready(function()
{
    var pic = 1;
    var element = $("#pic-slider");
    var left = $("#slider-right");
    var right = $("#slider-left");
    var pic_limit = 3;


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


});