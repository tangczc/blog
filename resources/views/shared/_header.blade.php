<header class = "header"> 
    <div class='motto'>
        <p>我要用手中的键盘把世界写的明明白白</p>
    </div>
    <div class="author">
       <a href = "{{route('curriculum_vitea')}}">
            <img src="{{asset('storage/images/blog-tx.jpg')}}" alt="头像" title = "简历" />
       </a><br/><br/>
       <a href="{{route('curriculum_vitea')}}" class="author-name">李晨</a>
       <div class='author-link'>
        <a href="/">首页</a>
        <a href="{{route('articles.find','Java')}}">Java</a>
        <a href="{{route('articles.find','Liunx')}}">Liunx</a>        
       </div> 
       <div class='author-link1'>
        <a href="{{route('articles.find','PHP')}}">PHP</a>
        <a href="{{route('articles.find','Python')}}">Python</a>
       </div>
       <div class="others">
         <a href="https://github.com/tangczc" >
            <img src="{{asset('storage/images/github.png')}}" class='github' title="https://github.com/tangczc"/>
         </a>
         <a href="mailto:lee.chen1406@gmail.com">
            <img src="{{asset('storage/images/email.png')}}" class='email' title="lee.chen1406@gmail.com"/>
         </a>
       </div> 
    </div>
</header>