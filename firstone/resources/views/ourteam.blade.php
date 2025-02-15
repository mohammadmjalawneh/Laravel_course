<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <link rel="icon" href="{{url(''.'img/favicon.png')}}">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Optional theme -->
    </head>
    <style type="text/css">
    img{
    width: 2rem;height: 2rem;
    }
    .demo
    {
    padding: 100px 0;
    }
    .heading-title
    {
    margin-bottom: 100px;
    }
    .our-team{
    box-shadow: 0 0 1px 1px rgba(0, 0, 0, 0.15);
    text-align: center;
    overflow: hidden;
    position: relative;
    transition: all 0.3s ease-in-out 0s;
    }
    .our-team .pic:before{
    content: "";
    background: #716a9e;
    position: absolute;
    top: 10px;
    left: 10px;
    bottom: 10px;
    right: 10px;
    opacity: 0.78;
    transform: scale(0);
    transition: all 0.3s ease-in-out 0s;
    }
    .our-team:hover .pic:before{
    transform: scale(1);
    }
    .our-team .pic img{
    width: 100%;
    height: auto;
    }
    .our-team .social{
    list-style: none;
    padding: 0;
    margin: 0;
    width: 100%;
    position: absolute;
    top: 40%;
    opacity: 0;
    transition: all 0.3s ease-in-out 0s;
    }
    .our-team:hover .social{
    opacity: 1;
    }
    .our-team .social li{
    display: inline-block;
    position: relative;
    transition: all 0.3s ease-in-out 0s;
    }
    .our-team .social li:nth-child(1){
    transform: translate3d(22px, -19px, 0px);
    }
    .our-team:hover .social li:nth-child(1){
    transform: translate3d(62px, -19px, 0px);
    }
    .our-team .social li:nth-child(2){
    transform: translate3d(36px, 38px, 0px);
    }
    .our-team:hover .social li:nth-child(2){
    transform: translate3d(36px, 8px, 0px);
    }
    .our-team .social li:nth-child(3){
    transform: translate3d(-18px, -75px, 0px);
    }
    .our-team:hover .social li:nth-child(3){
    transform: translate3d(-18px, -46px, 0px);
    }
    .our-team .social li:nth-child(4){
    transform: translate3d(-5px, -19px, 0px);
    }
    .our-team:hover .social li:nth-child(4){
    transform: translate3d(-43px, -19px, 0px);
    }
    .our-team .social li a{
    display: block;
    width: 35px;
    height: 35px;
    line-height: 35px;
    background: #333;
    font-size: 16px;
    color: #fff;
    margin: 0 15px 0 0;
    transform: rotate(45deg);
    transition: all 0.3s ease-in-out 0s;
    }
    .our-team .social li a:hover{
    line-height: 35px;
    background: #fff;
    color: #333;
    transform: rotate(-45deg);
    }
    .our-team .social li a i{
    transform: rotate(-45deg);
    transition: all 0.3s ease-in-out 0s;
    }
    .our-team .social li a:hover i{
    transform: rotate(45deg);
    }
    .our-team .team-content{
    padding: 15px 10px;
    background: #fff;
    position: relative;
    transition: all 0.3s ease-in-out 0s;
    }
    .our-team .title{
    font-size: 18px;
    font-weight: 700;
    color: #333;
    text-transform: uppercase;
    margin: 0 0 12px 0;
    }
    .our-team small{
    display: block;
    font-size: 14px;
    color: #999;
    margin-bottom: 8px;
    }
    .our-team .team-layer{
    width: 100%;
    padding: 34px 10px;
    background: #f7f7f7;
    border-bottom: 2px solid #716a9e;
    position: absolute;
    bottom: -50px;
    left: 0;
    opacity: 0;
    transition: all 0.3s ease-in-out 0s;
    }
    .our-team:hover .team-layer{
    bottom: 0;
    opacity: 1;
    }
    .our-team .team-layer a{
    display: inline-block;
    font-size: 18px;
    font-weight: 700;
    color: #333;
    text-transform: uppercase;
    margin: 0 0 12px 0;
    transition: all 0.3s ease-in-out 0s;
    }
    .our-team .team-layer a:hover{
    color: #716a9e;
    }
    .our-team .post{
    display: block;
    font-size: 14px;
    color: #999;
    text-transform: capitalize;
    }
    @media only screen and (max-width: 990px){
    .our-team{ margin-bottom: 35px; }
    }@charset "utf-8";
    .site-footer
{
  background-color:#26272b;
  padding:45px 0 20px;
  font-size:15px;
  line-height:24px;
  color:#737373;
}
.site-footer hr
{
  border-top-color:#bbb;
  opacity:0.5
}
.site-footer hr.small
{
  margin:20px 0
}
.site-footer h6
{
  color:#fff;
  font-size:16px;
  text-transform:uppercase;
  margin-top:5px;
  letter-spacing:2px
}
.site-footer a
{
  color:#737373;
}
.site-footer a:hover
{
  color:#3366cc;
  text-decoration:none;
}
.footer-links
{
  padding-left:0;
  list-style:none
}
.footer-links li
{
  display:block
}
.footer-links a
{
  color:#737373
}
.footer-links a:active,.footer-links a:focus,.footer-links a:hover
{
  color:#3366cc;
  text-decoration:none;
}
.footer-links.inline li
{
  display:inline-block
}
.site-footer .social-icons
{
  text-align:right
}
.site-footer .social-icons a
{
  width:40px;
  height:40px;
  line-height:40px;
  margin-left:6px;
  margin-right:0;
  border-radius:100%;
  background-color:#33353d
}
.copyright-text
{
  margin:0
}
@media (max-width:991px)
{
  .site-footer [class^=col-]
  {
    margin-bottom:30px
  }
}
@media (max-width:767px)
{
  .site-footer
  {
    padding-bottom:0
  }
  .site-footer .copyright-text,.site-footer .social-icons
  {
    text-align:center
  }
}
.social-icons
{
  padding-left:0;
  margin-bottom:0;
  list-style:none
}
.social-icons li
{
  display:inline-block;
  margin-bottom:4px
}
.social-icons li.title
{
  margin-right:15px;
  text-transform:uppercase;
  color:#96a2b2;
  font-weight:700;
  font-size:13px
}
.social-icons a{
  background-color:#eceeef;
  color:#818a91;
  font-size:16px;
  display:inline-block;
  line-height:44px;
  width:44px;
  height:44px;
  text-align:center;
  margin-right:8px;
  border-radius:100%;
  -webkit-transition:all .2s linear;
  -o-transition:all .2s linear;
  transition:all .2s linear
}
.social-icons a:active,.social-icons a:focus,.social-icons a:hover
{
  color:#fff;
  background-color:#29aafe
}
.social-icons.size-sm a
{
  line-height:34px;
  height:34px;
  width:34px;
  font-size:14px
}
.social-icons a.facebook:hover
{
  background-color:#3b5998
}
.social-icons a.twitter:hover
{
  background-color:#00aced
}
.social-icons a.linkedin:hover
{
  background-color:#007bb6
}
.social-icons a.dribbble:hover
{
  background-color:#ea4c89
}
@media (max-width:767px)
{
  .social-icons li.title
  {
    display:block;
    margin-right:0;
    font-weight:600
  }
}
    /* CSS Document */
    </style>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand pr-5" href="http://127.0.0.1:8000/"><i style="font-size: 2rem;" class="fa fa-twitter"></i></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="http://127.0.0.1:8000/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('../ourteam')}}">Our Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('../contactus')}}">Contact us</a>
                    </li>
                </ul>
            </div>
        </nav>
<div class="demo">
    <div class="container">
        <div class="row text-center">
            <h1 class="heading-title "> Our Team </h1>
        </div>
        <div class="row">
            @foreach($info1 as $key=>$value)
            <div class="col-md-3 col-sm-6">
                <div class="our-team">
                    <div class="pic">
                        <img src="{{url('../img/'.$info1[$key]['image'])}}" alt=""/>
                        <ul class="social">
                            <li><a href="{{url('https://www.facebook.com/'.$info1[$key]['face'])}}"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="{{url('https://www.twitter.com/'.$info1[$key]['twet'])}}"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="{{url('https://www.gmail.com/'.$info1[$key]['Email'])}}"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="{{url($info1[$key]['linkedin'])}}"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                        <div class="team-content">
                            <h3 class="title">{{$info1[$key]['name']}}</h3>
                            <small class="post">web developer</small>
                            <small>Email: <b>{{$info1[$key]['Email']}}</b></small>
                            <div class="team-layer">
                                <a href="#">{{$info1[$key]['name']}}</a>
                                <span class="post">web developer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
  <!-- Site footer -->
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>About</h6>
            <p class="text-justify">Scanfcode.com <i>CODE WANTS TO BE SIMPLE </i> is an initiative  to help the upcoming programmers with the code. Scanfcode focuses on providing the most efficient code or snippets as the code wants to be simple. We will help programmers build up concepts in different programming languages that include C, C++, Java, HTML, CSS, Bootstrap, JavaScript, PHP, Android, SQL and Algorithm.</p>
          </div>


          <div class="col-xs-6 col-md-3">
            <h6>Quick Links</h6>
            <ul class="footer-links">
              <li><a href="http://scanfcode.com/about/">About Us</a></li>
              <li><a href="http://scanfcode.com/contact/">Contact Us</a></li>
              <li><a href="http://scanfcode.com/contribute-at-scanfcode/">Contribute</a></li>
              <li><a href="http://scanfcode.com/privacy-policy/">Privacy Policy</a></li>
              <li><a href="http://scanfcode.com/sitemap/">Sitemap</a></li>
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by 
         <a href="#">Scanfcode</a>.
            </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
            </ul>
          </div>
        </div>
      </div>
</footer>
</body>
</html>