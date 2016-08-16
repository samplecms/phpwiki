php7.0不适用此方法
=========

yum info mongo-10gen

vi /etc/yum.repos.d/10gen.repo

输入



      [10gen] 
      
      name=10gen Repository 
      
      baseurl=http://downloads-distro.mongodb.org/repo/redhat/os/x86_64 
      
      gpgcheck=0 


yum info mongo-10gen-server

yum install mongo-10gen-server

yum install mongo-10gen

service mongod start

以后有更新了，停掉mongodb，执行yum update mongo-10gen mongo-10gen-server 即可。

5、服务器配置:vi /etc/mongod.conf


# mongo.conf   
  
#where to log   

logpath=/var/log/mongo/mongod.log   
  
logappend=true #以追加方式写入日志   
  
# fork and run in background   
fork = true  
  
#port = 27017 #端口   
  
dbpath=/var/lib/mongo #数据库文件保存位置   

directoryperdb=true

# Enables periodic logging of CPU utilization and I/O wait   

#启用定期记录CPU利用率和 I/O 等待   

#cpu = true  
  
# Turn on/off security.  Off is currently the default  

# 是否以安全认证方式运行，默认是不认证的非安全方式   

#noauth = true  

#auth = true  
  
# Verbose logging output.   

# 详细记录输出   

#verbose = true  
  
# Inspect all client data for validity on receipt (useful for  

# developing drivers)用于开发驱动程序时的检查客户端接收数据的有效性   

#objcheck = true  
  
# Enable db quota management 启用数据库配额管理，默认每个db可以有8个文件，可以用quotaFiles参数设置 

#quota = true  

# 设置oplog记录等级   

# Set oplogging level where n is   

#   0=off (default)   

#   1=W   

#   2=R   

#   3=both   

#   7=W+some reads   

#oplog = 0  
  
# Diagnostic/debugging option 动态调试项   

#nocursors = true  
  
# Ignore query hints 忽略查询提示   

#nohints = true  

# 禁用http界面，默认为localhost：28017  
# Disable the HTTP interface (Defaults to localhost:27018).这个端口号写的是错的   
#nohttpinterface = true  
  
# 关闭服务器端脚本，这将极大的限制功能   

# Turns off server-side scripting.  This will result in greatly limited   

# functionality   

#noscripting = true  

# 关闭扫描表，任何查询将会是扫描失败   

# Turns off table scans.  Any query that would do a table scan fails.   

#notablescan = true  

# 关闭数据文件预分配   

# Disable data file preallocation.   

#noprealloc = true  

# 为新数据库指定.ns文件的大小，单位:MB   

# Specify .ns file size for new databases.   

# nssize = <size>   
  
# Accout token for Mongo monitoring server.   

#mms-token = <token>   

# mongo监控服务器的名称   

# Server name for Mongo monitoring server.   

#mms-name = <server-name>   


# mongo监控服务器的ping 间隔   

# Ping interval for Mongo monitoring server.   

#mms-interval = <seconds>   
  
# Replication Options 复制选项   

# in replicated mongo databases, specify here whether this is a slave or master 在复制中，指定当前是从属关系   

#slave = true  

#source = master.example.com   

# Slave only: specify a single database to replicate   

#only = master.example.com   

# or   

#master = true  

#source = slave.example.com  
