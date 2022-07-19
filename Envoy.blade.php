@servers(['dev' => ['root@htoomaungthait.xyz'], 'prod' => ['root@192.168.1.2']])

@task('simple-deploy-dev', ['on' => 'dev'])
    cd /usr/share/nginx/seaandlakemm.com
    git pull
    php artisan optimize:clear
@endtask