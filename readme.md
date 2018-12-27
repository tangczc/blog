<h1>基于Laravel5的blog系统</h1>
<hr/>
<h3>项目部署</h3>
<p>来自<a href="http://dmmylove.cn/articles/12">Laravel 部署到阿里云/腾讯云</a></p>
<hr>
<h4>更新列表</h4>
<code>sudo apt-get update</code>
<code>sudo apt-get upgrade</code>
<h4>安装常用软件</h4>
<code>sudo apt-get install -y vim git zip unzip</code>
<h4>安装PHP7</h4>
<code>

    sudo apt-get install -y software-properties-common

    sudo LC_ALL=en_US.UTF-8 add-apt-repository ppa:ondrej/php

    sudo apt-get update

    apt-cache search php7.1

    sudo apt-get install -y php7.1

    sudo apt-get install -y php7.1-mysql

    sudo apt-get install -y php7.1-fpm

    sudo apt-get install -y php7.1-curl php7.1-xml php7.1-mcrypt php7.1-json php7.1-gd php7.1-mbstring
</code>
<h4>安装MySQL</h4>
<code>sudo apt-get install -y mysql-server</code>
<h4>安装 Nginx</h4>
<code>sudo apt-get install -y nginx</code>
<h4>配置PHP7</h4>
<code>
    sudo vim /etc/php/7.1/fpm/php.ini

    //修改 cgi.fix_pathinfo=0

    sudo vim /etc/php/7.1/fpm/pool.d/www.conf

    //修改 listen = /var/run/php7.1-fpm.sock
    
</code>
<h4>配置 Nginx</h4>
<code>
    sudo vim /etc/nginx/sites-available/default
</code>
<code>
    //修改如下，根据自己的项目情况修改对应信息:'server_domain_or_IP' 替换为你的网站域名或IP地址<br>
server {

    root /var/www/blog/public;

    index index.php index.html index.htm;
    
    server_name server_domain_or_IP;
    
    location / {
        try_files $uri $uri/ /index.php?$query_string;      
    }

    location ~ \.php$ {
        try_files $uri /index.php =404;
        fastcgi_split_path_info ^(.+\.php)(/.+)$;
        fastcgi_pass unix:/var/run/php7.1-fpm.sock;
        fastcgi_index index.php;
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
        include fastcgi_params;
    }
}
</code>
<h4>拉取代码</h4>
<code>
    cd /var/www

    git clone 地址
</code>
<h4>安装 Composer 并使用 Composer 安装代码依赖</h4>
<p> 访问 <a href="https://getcomposer.org/download/" >composer</a> 官网 获取下面四行代码最新版，直接粘贴执行安装 Composer</p>
<code>
    php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"

    php -r "if (hash_file('SHA384', 'composer-setup.php') === '669656bab3166a7aff8a7506b8cb2d1c292f042046c5a994c43155c0be6190fa0355160742ab2e1c88d40d5be660b410') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"

    php composer-setup.php

    php -r "unlink('composer-setup.php');"

    //然后移动 composer.phar

    mv composer.phar /usr/local/bin/composer

    //进入项目目录

    cd /var/www/blog

    //执行 composer install
    
    composer install
</code>
<h4>创建 .env 文件</h4>
<code>
    cd /var/www/blog
    
    cp .env.example .env
<code>
<h4>修改.env<h4>
<code>
    vim .env
    

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=blog
    DB_USERNAME=homestead //你的数据库名
    DB_PASSWORD=secret     //你的数据库密码

</code>
<h4>生成 laravel key</h4>
<code>
    cd /var/www/laravel-project

    php artisan key:generate
</code>
<h4>数据迁移</h4>
<code>
    cd /var/www/blog

    php artisan migrate
</code>
<h4>权限修改</h4>
<code>
    sudo chown -R www-data:www-data /var/www
    
    sudo chmod -R 777 /var/www/laravel-project/storage
</code>
<h4>重启 Nginx 和 PHP7 fpm</h4>
<code>
    service nginx restart
    
    service php7.1-fpm restart
</code>
