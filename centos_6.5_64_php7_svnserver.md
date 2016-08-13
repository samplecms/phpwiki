
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
        
        
php -v 
yum remove php-common*
yum install php70w php70w-opcache php70w-mbstring php70w-crypt
yum -y install httpd

mongodb install:

yum install php70w-pecl-mongo mongodb mongodb-devel mongodb-server
vi /etc/mongodb.conf

      
      logpath = /data/mongodb/mongodb.log
      dbpath =/data/mongodb
          
mkdir -p /data/mongodb
chown mongodb:mongodb -R /data/mongodb

/etc/init.d/mongod start




