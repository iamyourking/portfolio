<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jérémy Tchiss'</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="animate.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="jquery-3.3.1.min.js"></script>
</head>
<body>
    <div id="main-page">
        <div class="maincontent"> <br> <br>
            <h1 class=" animated bounce">Bienvenue sur le blog de Jérémy</h1> <br>
            <a style="font-size: 35px;" class="mainlink">Entrer ! 🕺🏿</a>                
        </div>
    </div>
             
    <div id="next-page">
        <div class="nextcontent">
            <div class="container-fluid">
                <div class="row navbar"></div>
                <div class="row">
                    <div class="col-3 sidebar">
                        <ul>
                            <li>Home</li>
                            <hr>
                            <li>Login</li>
                            <hr>
                            <li>C.V</li>
                            <hr>
                            <li>Projects</li>
                            <hr>
                            <li>News</li>
                        </ul>
                    </div>
                    <div class="col-5 content"></div>
                    <div class="col-4 panelid"></div>
                </div>
            </div>

        </div>
    </div>
</body>

<script>
    $(document).ready(function() {
 
    $.fn.animateRotate = function(angle, duration, easing, complete) {
        var args = $.speed(duration, easing, complete);
        var step = args.step;
    return this.each(function(i, e) {
        args.complete = $.proxy(args.complete, e);
        args.step = function(now) {
            $.style(e, 'transform', 'rotate(' + now + 'deg)');
            if (step) return step.apply(e, arguments);
        };

            $({deg: 0}).animate({deg: angle}, args);
        });
    };
    $("#main-page").css("background-color", "#27ae60");
    $("#main-page").css("height", "100vh");
    $("#main-page").css("width", "100%");
    $("#main-page").fadeIn();
    $(".maincontent").fadeIn();
 
    $(".mainlink").on("click", function() {
    $(".maincontent").fadeOut();
    $("#main-page").animate({
        width: "25px",
        height: "375px"
    }, function() {
        $(this).animateRotate(90);
    });
     
    setTimeout(function() {
        $("#main-page").fadeOut();       
    }, 1500);
     
    setTimeout(function() {
        $("#next-page").animateRotate(0, 0);
        $("#next-page").css("height", "25px");
        $("#next-page").css("width", "375px");
        $("#next-page").fadeIn();
        $("#next-page").animate({
            backgroundColor: "#27ae60"
        }, function() {
            $(this).animate({
                height: "100vh"
            }, function() {
                $(this).animate({
                    width: "100%"
                }, function() {
                    $(".nextcontent").fadeIn(300);
                });
            });
        });
    }, 800);
});

$(".nextlink").on("click", function() {
        $(".nextcontent").fadeOut();
        $("#next-page").animate({
            width: "25px",
            height: "375px"
        }, function() {
            $(this).animateRotate(-90);
        });
         
        setTimeout(function() {
            $("#next-page").fadeOut();          
        }, 1500);
         
        setTimeout(function() {
        $("#main-page").animateRotate(0, 0);
        $("#main-page").css("height", "25px");
        $("#main-page").css("width", "375px");
            $("#main-page").fadeIn();
            $("#main-page").animate({
                height: "100vh"
            }, function() {
                $(this).animate({
                    width: "100%"
                }, function() {
                    $(".maincontent").fadeIn(300);
                });
            });
        }, 1400);
    });
     
});
</script>

</html>