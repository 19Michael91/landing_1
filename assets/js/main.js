jQuery(document).ready(function($){


        // Фиксированная шапка при скролле
        $("#top-line").removeClass("default");
        $(window).scroll(function(){
            if($(this).scrollTop() > 30) {
                $("#top-line").addClass("default").fadeIn("fast");
            } else {
                $("#top-line").removeClass("default").fadeIn("fast");
            };
        });


        //Плавный скролл по якорям
        $('a[href^="#"]').click(function () {
            elementClick = $(this).attr("href");
            destination = $(elementClick).offset().top;
            // if($.browser.safari){
            //     $('body').animate( {scrollTop: destination}, 1000 );
            // } else {
                $('body').animate( {scrollTop: destination}, 1000 );
            //}
            return false;
        });


        // Проверка текущего URL
        // var url = document.location.href,
            /*
                Алгоритм:
                        1. Проветяем текущее URL;
                                var url = document.location.href;
                        2. Ищем длину подстроки "/WP_LGL/";
                                var siteName = "/WP_LGL/";
                                var lengthSiteName = siteName.length; // 8
                        3. Ищем позицию подстроки "/WP_LGL/" в url;
                                var positoinSiteName =  url.indexOf(siteName);
                        4. Ищем позицию вхождения подстроки с именем страницы
                                var positionPageName = positoinSiteName + lengthSiteName;
                        5. Ищем продолжение строки до конца после подстроки "/WP_LGL/";
                                var pageName = url.slice(positionPageName)
                        6. Если значение переменной pageName не равно "posts/"
            */


        var url = document.location.href;
        var siteName = "/WP_LGL/";
        var lengthSiteName = siteName.length;
        var positoinSiteName =  url.indexOf(siteName);
        var positionPageName = positoinSiteName + lengthSiteName;
        var pageName = url.slice(positionPageName)


        if (pageName == "posts/" || pageName != "" && pageName != "#header" && pageName != "#destination" && pageName != "#ittinery" && pageName != "#contact") {
            $("#a_header").attr("href", "/WP_LGL/#header");
            $("#a_destination").attr("href", "/WP_LGL/#destination");
            $("#a_ittinery").attr("href", "/WP_LGL/#ittinery");
            $("#a_contact").attr("href", "/WP_LGL/#contact");
            $("header").css("height", "960px");
        };
});
