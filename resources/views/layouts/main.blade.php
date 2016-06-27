<!doctype html>
<html>
    <head>
        <title>Neocodis: Case Studies</title>
        <link href="/favicon.ico" type="image/x-icon" rel="icon">
        <link href="/favicon.ico" type="image/x-icon" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        
        <!-- jQuery and jQueryUI -->
        <script src="/plugins/jquery-ui-1.11.4.custom/external/jquery/jquery.js"></script>
        <link rel="stylesheet" href="/plugins/jquery-ui-1.11.4.custom/jquery-ui.min.css">
        <script src="/plugins/jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>
        
        <!-- START BOOTSTRAP 3 -->
        <link rel="stylesheet" href="/plugins/bootstrap-3.3.6-dist/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link rel="stylesheet" href="/plugins/bootstrap-3.3.6-dist/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
        <script src="/plugins/bootstrap-3.3.6-dist/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        
        <!-- Main CSS -->
        <link rel="stylesheet" href="/css/main.css">
        
        
        @yield('header')
    </head>
    <body>
        <div class="menu_mini">X</div>
        <div class="left"><div class="left_in">@include('parts.left')</div></div>
        <div class="right
             <?php 
             if(in_array($element['Helper']['site'], array('zss6'))){ echo ' right_white '; } 
             elseif(in_array($element['Helper']['site'], array('shecco'))){ echo ' right_white '; } 
             ?>
             ">@yield('content')</div>
        
        <div class="sm"><div class="sm_in">@include('parts.sm')</div></div>
        
        
<script>
    $(document).ready(function(){
        menu_mini_listener();
    });
    function menu_mini_listener(){
        $('.menu_mini').on('click', function(){
            if($('.left').position().left==0){
                $('.left').animate({
                    left:'-300px'
                },300);
            }else{
                $('.left').animate({
                    left:'0px'
                },300);
            }
        });
    }
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-79501844-1', 'auto');
  ga('send', 'pageview');

</script>
    </body>
</html>