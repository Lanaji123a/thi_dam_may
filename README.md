#Để kết nối Amazon RDS với EC2 trên AWS, bạn cần thực hiện các bước sau:

#Đảm bảo rằng bạn đã tạo Amazon RDS instance và EC2 instance và chúng đang chạy.

#Tạo một Security Group cho Amazon RDS instance và cho phép truy cập từ EC2 instance của bạn. Bạn cũng nên kiểm tra xem Security Group của EC2 instance có cho phép truy cập vào cổng của RDS instance không.

#Đăng nhập vào EC2 instance và cài đặt MySQL client. Nếu EC2 instance của bạn đang chạy trên hệ điều hành Amazon Linux hoặc Ubuntu, bạn có thể cài đặt MySQL client bằng cách chạy lệnh sau:
sudo yum install mysql
hoặc sudo apt-get install mysql-client
#Sau khi cài đặt MySQL client, bạn có thể kết nối tới Amazon RDS instance bằng cách sử dụng lệnh sau:
$mysql -h <Endpoint> -P <Port> -u <Username> -p

#Trong đó:
<Endpoint> là địa chỉ endpoint của Amazon RDS instance của bạn.
<Port> là số cổng của RDS instance (mặc định là 3306).
<Username> là tên đăng nhập để truy cập vào RDS instance của bạn.
-p là tùy chọn để yêu cầu mật khẩu.

#cai dv
sudo yum update -y

sudo yum install httpd -y
sudo service httpd start
sudo systemctl enable httpd

cd /var/www/html

sudo vi index.html
#for ubuntu

