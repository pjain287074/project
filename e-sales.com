server {
    listen 80 default_server;
    listen [::]:80 default_server;

    root /var/www/ignoumca/public;
    index index.php index.html index.htm index.nginx-debian.html;

    server_name _;
    error_log /var/log/nginx/error.log warn;
    access_log /var/log/nginx/access.log json;
    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

	location ~ \.php$ {
        try_files $uri =404;
        fastcgi_split_path_info ^(.+\.php)(/.+)$;
        fastcgi_pass unix:/var/run/php/php7.2-fpm.sock;
        fastcgi_index index.php;
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
        include fastcgi_params;
    }
    location ~ /\.ht {
            deny all;
    }
}
