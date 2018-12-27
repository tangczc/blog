<!DOCTYPE html>
<html>
<head>
    <title>@yield('title','Li Chen - Li Chen\'s Blog')</title>
    <link rel="icon" href="{{asset('storage/images/title-icon.png')}}" type="image/x-icon"/>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body id="mydiv">
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
    @include('shared._header')
    <div class='container' style="margin-left:500px;">        
        @yield("content")
	</div>
	@include('shared._footer')
</body>
</html>