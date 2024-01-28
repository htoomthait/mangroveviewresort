@servers(['dev' => ['root@htoomaungthait.xyz'], 'prod' => ['root@seaandlakemm.com']])

@task('simple-deploy-dev', ['on' => 'dev'])
    cd /usr/share/nginx/seaandlakemm.com
    git pull
    php artisan optimize:clear
@endtask

@task('simple-deploy-prod', ['on' => 'prod'])
    cd /usr/share/nginx/seaandlakemm.com
    git pull
    php artisan optimize:clear
@endtask
