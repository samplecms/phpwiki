系统
========

yum update

mv /etc/yum.repos.d/CentOS-Base.repo /etc/yum.repos.d/CentOS-Base.repo.backup
wget -O /etc/yum.repos.d/CentOS-Base.repo http://mirrors.aliyun.com/repo/Centos-6.repo
yum clean all
yum makecache


查看 centos 版本
# cat /etc/centos-release 
注意选择对应源


        7.x
        
        rpm -Uvh https://dl.fedoraproject.org/pub/epel/epel-release-latest-7.noarch.rpm
        rpm -Uvh https://mirror.webtatic.com/yum/el7/webtatic-release.rpm
        
        CentOS/RHEL 6.x:
        rpm -Uvh https://mirror.webtatic.com/yum/el6/latest.rpm
        
    
安装PHP
======


                php -v 
                yum remove php*
                
                yum install httpd 
                yum install php70w 
                yum install  php70w-* --skip-broken
                
                
        



mongodb.so install:
=====


        yum install openssl openssl-devel
        
        pecl install mongodb
        
        vi /etc/php.d/mongodb.ini
        
        写入
        
        extension=mongodb.so


git:
        
        ssh-keygen -t rsa -b 4096 -C "test@wstaichi.com"

        more /root/.ssh/id_rsa.pub
        
        复制内容到
        
        https://github.com/settings/ssh
        
        
        
monogodb install:
        
        
         wget http://fastdl.mongodb.org/linux/mongodb-linux-x86_64-3.2.0.tgz
         
         tar -zxvf mongodb-linux-x86_64-3.2.0.tgz
        
         mkdir -p /www/data
         
         mv mongodb-linux-x86_64-3.2.0 /www/data
         
         mv mongodb-linux-x86_64-3.2.0/ mongodb
         
         mkdir db
         
         mkdir log
         
         /www/data/mongodb/bin/mongod --dbpath /www/data/db --logpath /www/data/log/db.log  --port 19843
         
         

##./bin/mongod --dbpath=./db --logpath=./log/mongodb.log --fork --auth
 

SVN
=============

        # yum -y install subversion
        
        svnserve -d -r /www/svn/
        
        svnadmin create /www/svn/pro
        
 
vi /etc/rc.local

        service httdp restart

        svnserve -d -r /www/svn/

        /www/data/mongodb/bin/mongod --dbpath /www/data/db --logpath /www/data/log/db.log  --port 19843


        
will test
==========
        
post-commit
==========
        
        export LANG=en_US.UTF-8
         
        
        /usr/bin/svn update /www/ -username name -password pwd

SVN权限
========

        chmod +x post-commit
        
        chown -R apache:apache $WEB
        
WEB
=======


        chown -R apache:apache WEBDIR
        
        
        
        




