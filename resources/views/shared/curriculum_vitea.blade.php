<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>个人简历</title>
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
	<div style="text-align: center;">
		<embed src="{{asset('storage/pdf/curriculum.pdf')}}" height="900px" width="100%" /> 
	</div>
   	
	@include('shared._footer')
</body>
</html>