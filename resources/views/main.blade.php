
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
                            <img src="img/icons/language.png" alt="" />
                        </div>
                        <div class="service-desc">
                            <h5>translate</h5>
                            <p>You can translation.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Section: service -->
<!-- Section: wordbook -->
<!-- Add Wordbook -->
<div class="modal fade" id="wordbook_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content modal-sm">
            <div class="modal-header modal-sm">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">新しいワードブック</h4>
            </div>
            <div class="modal-body">
                <input type="text" class="form-control" placeholder="ワードブックの名" id="wb_name" name="wb_name"><br>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" >Close</button>
                <button type="button" class="btn btn-primary" name="submit" id="submit">Submit</button>
            </div>
        </div>
    </div>
</div>
<!-- Add Word -->
<div class="modal fade" id="word_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content modal-lg">
            <div class="modal-header modal-lg">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">ワード管理</h4>
            </div>
            <div class="modal-body">
                <input type="hidden" id="no" value="">
                <input type="text" class="form-control-static" placeholder="漢字" id="kanzi">
                <input type="text" class="form-control-static" placeholder="ひらがな" id="hiragana">
                <input type="text" class="form-control-static" placeholder="韓国語" id="korean">
                <input type="button" class="btn-success btn-sm" value="追加" onclick="add_row()"><br>
                <table class="table table-hover" id="wordlist">
                    <thead>
                    <th style="text-align: center">漢字</th>
                    <th style="text-align: center">ひらがな</th>
                    <th style="text-align: center">韓国語</th>
                    <th style="text-align: center">削除</th>
                    </thead>
                    <tbody id="tbody" style="text-align: center"></tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" id="emptytable">Close</button>
                <button type="button" class="btn btn-primary" name="submit" id="submit" onclick="sendlist()">Submit</button>
            </div>
        </div>
    </div>
</div>
<!-- End Add Word -->
<!-- Word List -->
<div class="modal fade" id="wordlist_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content modal-lg">
            <div class="modal-header modal-lg">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">ワードリスト</h4>
            </div>
            <div class="modal-body">
                <table class="table table-hover" id="show_wordlist" border="1">
                    <thead>
                    <th style="text-align: center">漢字</th>
                    <th style="text-align: center">ひらがな</th>
                    <th style="text-align: center">韓国語</th>
                    </thead>
                    <tbody id="list_tbody" style="text-align: center"></tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" id="emptytable">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- End Word List -->

<!-- Test Modal -->
<div class="modal fade" id="test_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content modal-lg">
            <div class="modal-header modal-lg">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">テスト</h4>
            </div>
            <div class="modal-body">
                <form>
                    <label class="checkbox-inline">
                        <input type="checkbox" id="check1" value="kanzi"> 漢字
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" id="check2" value="hiragana"> ひらがな
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" id="check3" value="korean"> 韓国語
                    </label>
                </form>
                <table class="table table-hover" id="test_wordlist" border="1">
                    <thead>
                    <th style="text-align: center" id="test_kanzi">漢字</th>
                    <th style="text-align: center" id="test_hiragana">ひらがな</th>
                    <th style="text-align: center" id="test_korean">韓国語</th>
                    </thead>
                    <tbody id="test_tbody" style="text-align: center"></tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info" id="start_test" onclick="start_test(this)">Start</button>
                <button type="button" class="btn btn-default" data-dismiss="modal" id="emptytable">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- End Test Modal -->

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
    <div class="container" name="container" id="container">
        <div class="row">
            <div class="col-lg-2 col-lg-offset-5">
                <hr class="marginbot-50">
            </div>
        </div>
        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#wordbook_modal">
            New WordBook
        </button><br><br>
        <div id="list" name="list"></div>
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

    <!-- Search -->
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-lg-offset-5">
                <hr class="marginbot-50">
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="custom-search-input">
                        <div class="input-group col-md-12">
                            <input type="text" class="form-control input-lg" id="keyword" placeholder="Search"/>
                            <span class="input-group-btn">
                                <button class="btn btn-success btn-lg" type="button" id="search" onclick="search()">
                                    <i class="glyphicon glyphicon-search"></i>
                                </button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div><br>
        <!-- End Search -->

        <!-- Search Result -->
        <div class="col-lg-12">
            <div class="boxed-grey" id="search_result">
            </div>
        </div>
        <!-- End Search Result -->

        <!-- Translate -->
        <div class="heading-contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="wow bounceInDown" data-wow-delay="0.4s">
                            <div class="section-heading">
                                <h2>Translate</h2>
                                <i class="fa fa-2x fa-angle-down"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2 col-lg-offset-5">
                <hr class="marginbot-50">
            </div>
        </div>
        <select class="form-control" id="selectBox">
            <option value="jp">韓国語　→　日本語</option>
            <option value="kr">日本語　→　韓国語</option>
        </select>
        <textarea class="form-control" rows="3" style="resize: vertical;" id="textfield"></textarea><br>
        <button class="btn btn-success btn-lg btn-block" type="button" onclick="translate_text()">
            <i class="glyphicon glyphicon-globe"></i>
        </button><br><br>
        <!-- End Translate -->

        <!-- Translate Result -->
        <div class="col-lg-12">
            <div class="boxed-grey" id="translate_result">
            </div>
        </div><br>
        <!-- End Translate Result -->
    </div>
</section>
<!-- /Section: search -->
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
    var list_word = [];
    var colindex = '';
    var no = 1;
    function add_row() {
        var tbody   = document.getElementById('tbody');
        var row     = tbody.insertRow(tbody.rows.length);
        var cell1   = row.insertCell(0);
        var cell2   = row.insertCell(1);
        var cell3   = row.insertCell(2);
        var cell4   = row.insertCell(3);
        cell1.innerHTML = document.getElementById('kanzi').value;
        cell2.innerHTML = document.getElementById('hiragana').value;
        cell3.innerHTML = document.getElementById('korean').value;
        cell4.innerHTML = '<th><input type="button" class="btn-danger btn-sm" value="削除" onclick="del_row(this)"></th>';
        this.no++;
    }

    function del_row(obj) {
        $(obj).parent().parent().remove();
    }

    $(function () {
        $('#emptytable').click( function() {
            $( '#wordlist > tbody').empty();
            $( '#kanzi').val('');
            $( '#hiragana').val('');
            $( '#korean').val('');
        });
    });

    function sendlist() { // 변환 함수
        var table = document.getElementById('wordlist');
        var data = [];

        var headers = [];
        for(var i=0; i<table.rows[0].cells.length; i++) {
            headers[i] = table.rows[0].cells[i].innerHTML.toLowerCase().replace(/ /gi,'');
        }

        for(var i=1; i<table.rows.length; i++) {
            var tableRow = table.rows[i];
            var rowData = {};

            for(var j=0; j<tableRow.cells.length - 1; j++) {
                rowData[headers[j]] = tableRow.cells[j].innerHTML;
            }
            data.push(rowData);
        }

        $.post(
            '/api/word',
            {'wordlist':data,
             'no':$("#no").val()
            },
            function (res) {
                if (res == 'true'){
                    alert('추가 완료!');
                    window.location.reload();
                } else console.log(res);
            }
        )
    }

    /*Test*/
    function test(list_num) {
        $( '#show_wordlist > tbody').empty();
        $("#no").val($(list_num).attr('id'));
        this.no = $("#no").val();
    }

    $("#check1").change(function () {
        if ($("#check1").is(":checked")) {
            colindex = $(this).parent().children().index(this);
            $('table th:nth-child('+(colindex + 1) + ')').show();
            $('table td:nth-child('+(colindex + 1) + ')').show();
        } else {
            colindex = $(this).parent().children().index(this);
            $('table th:nth-child('+(colindex + 1) + ')').hide();
            $('table td:nth-child('+(colindex + 1) + ')').hide();
        };
    });
    $("#check2").change(function () {
        if ($("#check2").is(":checked")) {
            colindex = $(this).parent().children().index(this);
            $('table th:nth-child('+(colindex + 2) + ')').show();
            $('table td:nth-child('+(colindex + 2) + ')').show();
        } else {
            colindex = $(this).parent().children().index(this);
            $('table th:nth-child('+(colindex + 2) + ')').hide();
            $('table td:nth-child('+(colindex + 2) + ')').hide();
        };
    });
    $("#check3").change(function () {
        if ($("#check3").is(":checked")) {
            var colindex = $(this).parent().children().index(this);
            $('table th:nth-child('+(colindex + 3) + ')').show();
            $('table td:nth-child('+(colindex + 3) + ')').show();
        } else {
            colindex = $(this).parent().children().index(this);
            $('table th:nth-child('+(colindex + 3) + ')').hide();
            $('table td:nth-child('+(colindex + 3) + ')').hide();
        };
    });

    function start_test(val) {
        $("#check1").prop("checked",true);
        $("#check2").prop("checked",true);
        $("#check3").prop("checked",true);
        $( '#test_wordlist > tbody').empty();
        $.get('/api/test/' + $("#no").val(),null,function (res) {
            list_word = res;
            var test_tbody = document.getElementById('test_tbody');
            for(var i = 0; i < res.length; i++) {
                var row = test_tbody.insertRow(test_tbody.rows.length);
                var cell1 = row.insertCell(0);
                var cell2 = row.insertCell(1);
                var cell3 = row.insertCell(2);
                cell1.innerHTML = res[i]['kanzi'];
                cell2.innerHTML = res[i]['hiragana'];
                cell3.innerHTML = res[i]['korean'];
            }
            $('table th:nth-child('+(colindex + 1) + ')').show();
            $('table th:nth-child('+(colindex + 2) + ')').show();
            $('table th:nth-child('+(colindex + 3) + ')').show();
        });
    };

    /*Add Wordbook*/
    $("#submit").click(function (e) {
        var wb_name = $("#wb_name").val();
        e.preventDefault();
        $.post(
            '/api/wordbook',
            {'name':wb_name},
            function (res) {
                console.log(res);
                if (res == 'true') {
                    alert('생성 완료');
                    window.location.reload();
                }
            })
    });

    $(document).ready(function () {
        $.get('/api/wordbook',null,function (res) {
            var options = {
                year: "numeric", month: "short", day: "numeric"
            };
            for(var i = 0; i < res.length; i++) {
                $("#list").append('<div class="col-md-3 wow bounceInUp" data-wow-delay="0.2s">' +
                    '                    <div class="team boxed-grey">' +
                    '                        <div class="row" id="card" name="card">' +
                    '                            <div class="card border-success mb-6" style="max-width: 25rem;">' +
                    '                                <div class="card-header bg-transparent border-success"><h3>'+res[i]['name']+'</h3></div>' +
                    '                                <div class="card-body text-success">' +
                    '                                    <h5 class="card-title"></h5>' +
                    '                                    <p class="card-text"><button class="btn btn-info" data-toggle="modal" data-target="#word_modal" id="wordbook_no" onclick="word_manage(this)">ワード管理</button><br><p>' +
                    '                                    <p class="card-text"><button class="btn btn-info" data-toggle="modal" data-target="#wordlist_modal" id="wordbook_list_no" onclick="show_word_list(this)">ワードリスト</button><br><p>' +
                    '                                    <p class="card-text"><button class="btn btn-info" data-toggle="modal" data-target="#test_modal" id="test_no" onclick="test(this)">テスト</button><br><p>' +
                    '                                    <p class="card-text"><button class="btn btn-info" id="delete_wordbook" onclick="del_wordbook(this)">ワードブック削除</button><br><p>' +
                    '                                </div>' +
                    '                                <div class="card-footer bg-transparent border-success">'+new Date(res[i]['created_at']).toLocaleDateString("ja-JP",options)+'</div>' +
                    '                            </div>' +
                    '                        </div>' +
                    '                    </div>' +
                    '                </div>'
                );
                $("#wordbook_no").attr("id",res[i]['no']);
                $("#wordbook_list_no").attr("id",res[i]['no']);
                $("#test_no").attr("id",res[i]['no']);
            }
        });
    });

    function del_wordbook(list_num) {
        $("#no").val($(list).attr('id'));
        $.get('/api/word/' + $("#no").val(),null,function (res) {
            if (res == 'true') {
                alert('삭제 완료');
                window.location.reload();
            }
        })
    }

    function word_manage(list) {
        $("#no").val($(list).attr('id'));
        $.get('/api/word/' + $("#no").val(),null,function (res) {
            var tbody = document.getElementById('tbody');
            for(var i = 0; i < res.length; i++) {
                var row = tbody.insertRow(tbody.rows.length);
                var cell1 = row.insertCell(0);
                var cell2 = row.insertCell(1);
                var cell3 = row.insertCell(2);
                var cell4 = row.insertCell(3);
                cell1.innerHTML = res[i]['kanzi'];
                cell2.innerHTML = res[i]['hiragana'];
                cell3.innerHTML = res[i]['korean'];
                cell4.innerHTML = '<th style="text-align: center"><input type="button" class="btn-danger btn-sm" value="削除" onclick="del_row(this)"></th>';
            }
        });
    }

    function show_word_list(list_num) {
        console.log(list_num);
        $( '#show_wordlist > tbody').empty();
        $("#no").val($(list_num).attr('id'));
        $.get('/api/word/' + $("#no").val(),null,function (res) {
            var list_tbody = document.getElementById('list_tbody');
            for(var i = 0; i < res.length; i++) {
                var row = list_tbody.insertRow(list_tbody.rows.length);
                var cell1 = row.insertCell(0);
                var cell2 = row.insertCell(1);
                var cell3 = row.insertCell(2);
                cell1.innerHTML = res[i]['kanzi'];
                cell2.innerHTML = res[i]['hiragana'];
                cell3.innerHTML = res[i]['korean'];
            }
        });
    }

    function search() {
        var keyword = document.getElementById("keyword").value;
        $.get(
            '/api/search/' + keyword,
            function (res) {
                console.log(res);
                $("#search_result").html(res);
            });
    }

    function translate_text() {
        var text = document.getElementById("textfield").value;
        var select = $("#selectBox option:selected").val();

        $.post(
            '/api/trans',
            {'text': text,
             'select':select},
            function (res) {
                console.log(res['message']['result']['translatedText']);
                $("#translate_result").html(res['message']['result']['translatedText']);
            });
    }

    function shuffle(a) {
        var j, x, i;
        for (i = a.length; i; i -= 1) {
            j = Math.floor(Math.random() * i);
            x = a[i - 1];
            a[i - 1] = a[j];
            a[j] = x;
        }
    }
</script>
</body>
</html>