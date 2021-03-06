<!DOCTYPE html>
<html lang="en" xmlns:wb=“http://open.weibo.com/wb”>
  <head>
    <title>Home - ZhaoXiaoxiao.cn</title>
    <meta charset="utf-8"/>
    <meta name="keywords" content="赵小小,互联网,产品经理,用户体验,移动互联网,ios,android,安卓,苹果,操作系统,应用,程序,app,设计,产品">
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js">
      </script>
    <![endif]-->
    <link href="style1.css" rel="stylesheet" type="text/css"/>
    <link href='http://fonts.googleapis.com/css?family=Candal' rel='stylesheet' 
     type='text/css'>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-40579608-1', 'zhaoxiaoxiao.cn');
      ga('send', 'pageview');

    </script>
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="js/jquery.knob.js"></script>
    <script type="text/javascript" src="js/jquery.knob.clock.js"></script>
  </head>
  <body>
    <header>
      <div id="clock">
        <script>
          function clock() {
              var $s = $(".second"),
                  $m = $(".minute"),
                  $h = $(".hour");
                  d = new Date(),
                  s = d.getSeconds(),
                  m = d.getMinutes(),
                  h = d.getHours();
                  if (h>=12) {h=h-12;};
              $s.val(s).trigger("change");
              $m.val(m).trigger("change");
              $h.val(h).trigger("change");
              setTimeout("clock()", 1000);
          }
          clock();
        </script>
        <div style="width:320px; height:320px; right:21px;">
            <div style="position:absolute;left:10px;top:10px">
                <input class="knob hour" data-min="0" data-max="12" data-bgColor="#333" data-fgColor="#ffec03" data-displayInput=false data-width="300" data-height="300" data-thickness=".3">
            </div>
            <div style="position:absolute;left:60px;top:60px">
                <input class="knob minute" data-min="0" data-max="60" data-bgColor="#333" data-displayInput=false data-width="200" data-height="200" data-thickness=".45">
            </div>
            <div style="position:absolute;left:110px;top:110px">
                <input class="knob second" data-min="0" data-max="60" data-bgColor="#333" data-fgColor="rgb(127, 255, 0)" data-displayInput=default data-width="100" data-height="100" data-thickness=".3">
            </div>
        </div>
      </div>
      <div id="what">
        <div class="sitebranding">
          <p class="title">Unnamed</p>
        </div>
        <div class="nav">
          <li>
          <a href="../blog" target="_blank">Blog</a>
          </li>
        </div>
      </div>
    </header>
    <div class="content">
      <p>Blogs:</p>
      <ul>
        <?php
          require("config.php");
          $con = mysql_connect($db_host,$db_username,$db_password);
          if (!$con)
            {
            die('Could not connect: ' . mysql_error());
            }

          mysql_select_db($db_name, $con);

          $result = mysql_query("SELECT * FROM checklist 
            WHERE Category='Blog'");

          while($row = mysql_fetch_array($result))
            {
            echo "<a href=" . $row['url'] . "><h4>" . $row['name'] . "</h4></a>";
            }
        ?>
      </ul>
      <p>Ohters:</p>
      <ul>
        <?php
          $result = mysql_query("SELECT * FROM checklist 
            WHERE Category='Other'");

          while($row = mysql_fetch_array($result))
            {
            echo "<a href=" . $row['url'] . "><h4>" . $row['name'] . "</h4></a>";
            }
        ?>
      </ul>
      <?php
        mysql_close($con);
      ?>
    </div>
    <footer>
      <div class="pageinfo">
      <a href="http://www.miitbeian.gov.cn/" target="-blank">晋ICP备13002397</a>&nbsp; Copyright © 2015. Zhao Xiaoxiao.&nbsp; All rights reserved.
      </div>
      <dl class="about">
        <!--
        <dt>IDentity</dt>
        <dd>ZhaoXiaoxiao</dd>
        <dt>Born</dt>
        <dd>1989, China</dd>
        -->
        <dt>Contact me @:</dt>
        <dd>
          <a class="reference external" href="mailto:ullivr@gmail.com">Email</a>, 
          <a class="reference external" href="https://www.facebook.com/xiaolong.zhao.357" target="_blank">Facebook</a>,
          <a class="reference external" href="http://www.linkedin.com/pub/xiaolong-zhao/70/23b/867" target="_blank">LinkedIn</a>, 
          <a class="reference external" href="https://plus.google.com/u/0/113215403433000710473/posts" target="_blank">Google+</a>,
          <a class="reference external" href="https://twitter.com/ullivr" target="_blank">Twitter</a>,
          <a class="reference external" href="http://preview.getprismatic.com/profile/Xiaolong_Zhao" target="_blank">Prismatic</a>,
          <a class="reference external" href="https://github.com/ullivr" target="_blank">Github</a>
        </dd>
        <!--
        <dt>Experiences</dt>
        <dd>
          <ul class="about_dd">
            <li>2014.4--now,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Self-Media & Influencer Group(Initial Proprietor of <a href="http://baike.baidu.com/subview/9852388/13243393.htm" target="_blank">罗辑思维</a>). &nbsp;Product Manager</li>
            <li>2013.6--2014.3, <a href="http://cleaderwin.com" target="_blank">&nbsp;CleaderWin,Ltd.</a> &nbsp;Assistant Product Manager</li>
            <li>2011.8--2013.5, <a href="http://originalbooks.taobao.com" target="_blank">&nbsp;Xiao&Co</a>(Taobao Store). &nbsp;Entrepreneur</li>
          </ul>
        </dd>
        <br>
        <dt>Education</dt>
        <dd>
          <ul class="about_dd">
            <li>2007.9--2011.6, Psychology, Xinlian College of Henan Normal University </li>
          </ul>
        </dd>
        <br>
        <dt>Interests</dt>
        <dd>
          <ul class="about_dd">
            <li>Astrology & Horoscope</li>
            <li>User Research & Internet Product Design</li>
            <li>Front End Coding</li>
          </ul>
        </dd>
      -->
      </dl>
    </footer>
    <script src="http://tjs.sjs.sinajs.cn/open/api/js/wb.js" type="text/javascript" 
     charset="utf-8"></script>
  </body>
</html>