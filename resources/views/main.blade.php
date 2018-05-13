
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ソンソル　－　ワードブック</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

    <!-- Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/animate.css" rel="stylesheet" />
    <!-- Squad theme CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link href="color/default.css" rel="stylesheet">

    <!-- =======================================================
      Theme Name: Squadfree
      Theme URL: https://bootstrapmade.com/squadfree-free-bootstrap-template-creative/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
    ======================================================= -->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
<!-- Preloader -->
<div id="preloader">
    <div id="load"></div>
</div>

<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="/">
                <h1>ワードブック</h1>
            </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#intro">Home</a></li>
                <li><a href="#service">Service</a></li>
                <li><a href="#wordbook">Wordbook</a></li>
                <li><a href="#search">Search</a></li>
                <li><a href="#exam">Exam</a></li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<!-- Section: intro -->
<section id="intro" class="intro">

    <div class="slogan">
        <h2><span class="text_color">ソンソルのワードブック</span> </h2>
        <h4>勉強、頑張りましょう！</h4>
    </div>
    <div class="page-scroll">
        <a href="#service" class="btn btn-circle">
            <i class="fa fa-angle-double-down animated"></i>
        </a>
    </div>
</section>
<!-- /Section: intro -->

<!-- Section: service -->
<section id="service" class="home-section text-center bg-gray">
    <div class="heading-about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="wow bounceInDown" data-wow-delay="0.4s">
                        <div class="section-heading">
                            <h2>サービス</h2>
                            <i class="fa fa-2x fa-angle-down"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-lg-offset-5">
                <hr class="marginbot-50">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3" style="cursor: pointer" onclick="location.href='#wordbook'">
                <div class="wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="service-box">
                        <div class="service-icon">
                            <img src="img/icons/book.png" alt="" />
                        </div>
                        <div class="service-desc">
                            <h5>Wordbook</h5>
                            <p>Show my wordbooks and create new wordbooks.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3" style="cursor: pointer" onclick="location.href='#exam'">
                <div class="wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-box">
                        <div class="service-icon">
                            <img src="img/icons/exam.png" alt="" />
                        </div>
                        <div class="service-desc">
                            <h5>Exam</h5>
                            <p>Test to my wordbooks</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3" style="cursor: pointer" onclick="location.href='#search'">
                <div class="wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-box">
                        <div class="service-icon">
                            <img src="img/icons/search3.png" alt="" />
                        </div>
                        <div class="service-desc">
                            <h5>search</h5>
                            <p>If you don't know a word meanning, You can search word meaning.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="wow fadeInRight" data-wow-delay="0.2s">
                    <div class="service-box">
                        <div class="service-icon">
                            <img src="img/icons/question.png" alt="" />
                        </div>
                        <div class="service-desc">
                            <h5>?????</h5>
                            <p>Vestibulum tincidunt enim in pharetra malesuada. Duis semper magna metus electram accommodare.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Section: service -->
<!-- Section: wordbook -->
<!-- 모달 팝업 -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">新しいワードブック</h4>
            </div>
            <div class="modal-body">
                <input type="text" class="form-control-static" placeholder="漢字" id="kanzi">
                <input type="text" class="form-control-static" placeholder="ひらがな" id="hiragana">
                <input type="text" class="form-control-static" placeholder="韓国語" id="korean">
                <input type="button" class="btn-success btn-sm" value="追加" onclick="add_row()"><br>
                <span id="list">
                    <table class="table table-hover">
                        <thead>
                            <th><input type="checkbox" id="all_check" name="all_check" class="checkbox checkbox-inline" onclick="check_all()"></th>
                            <th>漢字</th>
                            <th>ひらがな</th>
                            <th>韓国語</th>
                            <th>削除</th>
                        </thead>
                        <tbody id="tbody"> </tbody>
                    </table>
                </span>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" name="submit" id="submit">Submit</button>
            </div>
        </div>
    </div>
</div>

<section id="wordbook" class="home-section text-center">
    <div class="heading-about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="wow bounceInDown" data-wow-delay="0.4s">
                        <div class="section-heading">
                            <h2>ワードブック</h2>
                            <i class="fa fa-2x fa-angle-down"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-lg-offset-5">
                <hr class="marginbot-50">
            </div>
        </div>
        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
            New WordBook
        </button>
        <div class="row">
            <div class="col-md-3" style="cursor: pointer;" onclick="location.href='/search'">
                <div class="wow bounceInUp" data-wow-delay="0.2s">
                    <div class="team boxed-grey">
                        <div class="inner">
                            <h5>내 단어장</h5>
                            <p class="subtitle">Pixel Crafter</p>
                            <div class="avatar"><img src="img/team/1.jpg" alt="" class="img-responsive img-circle" /></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Section: wordbook -->
<!-- Section: search -->
<section id="search" class="home-section text-center">
    <div class="heading-contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="wow bounceInDown" data-wow-delay="0.4s">
                        <div class="section-heading">
                            <h2>サーチ</h2>
                            <i class="fa fa-2x fa-angle-down"></i>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-lg-2 col-lg-offset-5">
                <hr class="marginbot-50">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="boxed-grey">

                    <div id="sendmessage">Your message has been sent. Thank you!</div>
                    <div id="errormessage"></div>
                    <form id="contact-form" action="" method="post" role="form" class="contactForm">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">
                                        Name</label>
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group">
                                    <label for="email">
                                        Email Address</label>
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                        <div class="validation"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="subject">
                                        Subject</label>
                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                    <div class="validation"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">
                                        Message</label>
                                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                    <div class="validation"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-skin pull-right" id="btnContactUs">
                                    Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="widget-contact">
                    <h5>Main Office</h5>

                    <address>
                        <strong>SongSol</strong><br>
                        <abbr title="Phone">P:</abbr> 010-2680-5634
                    </address>

                    <address>
                        <strong>Email</strong><br>
                        <a href="mailto:#">email.name@example.com</a>
                    </address>
                    <address>
                        <strong>We're on social networks</strong><br>
                        <ul class="company-social">
                            <li class="social-facebook"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li class="social-twitter"><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li class="social-dribble"><a href="#" target="_blank"><i class="fa fa-dribbble"></i></a></li>
                            <li class="social-google"><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </address>

                </div>
            </div>
        </div>

    </div>
</section>
<!-- /Section: search -->
<!-- Section: exam -->
<section id="exam" class="home-section text-center">
    <div class="heading-contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="wow bounceInDown" data-wow-delay="0.4s">
                        <div class="section-heading">
                            <h2>テスト</h2>
                            <i class="fa fa-2x fa-angle-down"></i>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-lg-2 col-lg-offset-5">
                <hr class="marginbot-50">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="boxed-grey">

                    <div id="sendmessage">Your message has been sent. Thank you!</div>
                    <div id="errormessage"></div>
                    <form id="contact-form" action="" method="post" role="form" class="contactForm">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">
                                        Name</label>
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group">
                                    <label for="email">
                                        Email Address</label>
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                        <div class="validation"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="subject">
                                        Subject</label>
                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                    <div class="validation"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">
                                        Message</label>
                                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                    <div class="validation"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-skin pull-right" id="btnContactUs">
                                    Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="widget-contact">
                    <h5>Main Office</h5>

                    <address>
                        <strong>Squas Design, Inc.</strong><br>
                        Tower 795 Folsom Ave, Beautiful Suite 600<br>
                        San Francisco, CA 94107<br>
                        <abbr title="Phone">P:</abbr> (123) 456-7890
                    </address>

                    <address>
                        <strong>Email</strong><br>
                        <a href="mailto:#">email.name@example.com</a>
                    </address>
                    <address>
                        <strong>We're on social networks</strong><br>
                        <ul class="company-social">
                            <li class="social-facebook"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li class="social-twitter"><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li class="social-dribble"><a href="#" target="_blank"><i class="fa fa-dribbble"></i></a></li>
                            <li class="social-google"><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </address>

                </div>
            </div>
        </div>

    </div>
</section>
<!-- /Section: exam -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="wow shake" data-wow-delay="0.4s">
                    <div class="page-scroll marginbot-30">
                        <a href="#intro" id="totop" class="btn btn-circle">
                            <i class="fa fa-angle-double-up animated"></i>
                        </a>
                    </div>
                </div>
                <p>&copy;SquadFREE. All rights reserved.</p>
                <div class="credits">
                    <!--
                      All the links in the footer should remain intact.
                      You can delete the links only if you purchased the pro version.
                      Licensing information: https://bootstrapmade.com/license/
                      Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Squadfree
                    -->
                    <a href="https://bootstrapmade.com/bootstrap-one-page-templates/">Bootstrap One Page Templates</a> by BootstrapMade
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Core JavaScript Files -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/jquery.scrollTo.js"></script>
<script src="js/wow.min.js"></script>
<!-- Custom Theme JavaScript -->
<script src="js/custom.js"></script>
<script src="contactform/contactform.js"></script>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script>
    var no = 1;
    function add_row() {
        var tbody   = document.getElementById('tbody');
        var row     = tbody.insertRow(tbody.rows.length);
        var cell1   = row.insertCell(0);
        var cell2   = row.insertCell(1);
        var cell3   = row.insertCell(2);
        var cell4   = row.insertCell(3);
        var cell5   = row.insertCell(4);
        cell1.innerHTML = '<th><input type="checkbox" id="check" name="check" value="${content.IDX}"></th>';
        cell2.innerHTML = document.getElementById('kanzi').value;
        cell3.innerHTML = document.getElementById('hiragana').value;
        cell4.innerHTML = document.getElementById('korean').value;
        cell5.innerHTML = '<th><input type="button" class="btn-danger btn-sm" value="削除" onclick="del_row(this)"></th>';
        this.no++;
    }

    function del_row(obj) {
        $(obj).parent().parent().remove();
    }
    
    $(function () {
        $('#all_check').click(function() {
            if($('#all_check').prop('checked')) {
                $('input[name=check]:checkbox').each(function () {
                    $(this).prop('checked', true);
                });
            } else {
                $('input[name=check]:checkbox').each(function () {
                    $(this).prop('checked', false);
                })
            }
        })
    })

    $("#submit").click(function () {
        var count    = 0;
        var wordbook = new Array();
        var wordtype = new Object();
        var checkbox = $("input[name=check]:checked");
        checkbox.each(function (i) {
            var tr = checkbox.parent().parent().eq(i);
            var td = tr.children();

            var kanzi     = td.eq(1).text();
            var hiragana  = td.eq(2).text();
            var korean    = td.eq(3).text();
            wordtype.kanzi = kanzi;
            wordtype.hiragana = hiragana;
            wordbook.push(wordtype);
        });
        console.log(wordbook);
    });
</script>
</body>

</html>
