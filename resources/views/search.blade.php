@extends('main')
@section('content')
    {{ HTML::style('css/bootstrap.css') }} {{ HTML::style('css/bootstrap-grid.css') }} {{ HTML::script('js/jquery-3.3.1.min.js') }} {{ HTML::script('js/bootstrap.min.js') }}
    <input type="text" id="text" class="text-danger">
    <input type="button" onclick="ddd()" value="검색" class="btn-outline-danger">
    <div id="result" style="border: 1px solid blue">
        asdasd
    </div>
    <script type="text/javascript">
        var search = document.getElementById("text");
        function ddd() {
            console.log(search.value);
            $.ajax({
                type: "GET",
                url: "/word/" + search.value,
                dataType:"json",
                success: function (data) {
                    console.log(data);
                    document.getElementById("result").innerText = data;
                }
            });
        }
    </script>
@endsection