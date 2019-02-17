<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$title}}</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="icon" href="{{asset('storage/images/title-icon.png')}}" type="image/x-icon"/>
    <link rel="stylesheet" href="/css/article.css">
</head>
<body id="mydiv">
<header class="header">
<div class='motto'>
        <p>我要用手中的键盘把世界写的明明白白</p>
</div>
</header>
<script type="text/javascript">
		window.onload = function() {
		    //配置
		    var config = {
		        vx: 4,	//小球x轴速度,正为右，负为左
		        vy: 4,	//小球y轴速度
		        height: 2,	//小球高宽，其实为正方形，所以不宜太大
		        width: 2,
		        count: 200,		//点个数
		        color: "121, 162, 185", 	//点颜色
		        stroke: "130,255,255", 		//线条颜色
		        dist: 6000, 	//点吸附距离
		        e_dist: 20000, 	//鼠标吸附加速距离
		        max_conn: 10 	//点到点最大连接数
		    }

		    //调用
		    CanvasParticle(config);
		}
	</script>
	<script type="text/javascript" src="{{asset('js/canvas-particle.js')}}"></script>
    <div class="article_title">
        <h1>{{$title}}</h1>      
        <img src="https://img.icons8.com/color/48/000000/calendar.png"><div class="time">{{$time}}</div>
        <a class="btn btn-success back" onclick="history.back(-1)" role="button">返回</a>
        <hr/>
        
    </div>
    <div class="article_body">
	@include('editor::decode')
        <div>
            @php
                echo EndaEditor::MarkDecode($text)
            @endphp
		</div>
		
	</div>
	@include('shared._footer')
</body>
</html>