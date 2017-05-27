

# PIN-Identify-by-fangzheng
## 方正教务系统验证码识别

### 目前字典大致为2200条左右，识别率基本站稳85%,可以确保请求三次之中一定有一次是识别正确的，内网环境下单次完成时间在1.5s-2s，外网环境下完成时间可能会在2.5-3s之间，
* <b>PIN Identify by fangzheng.php</b> 为主文件<br/>
* <b>PIN Identify lib.php</b> 为其函数库<br/>
* <b>downloadImg.php</b> 用于download验证码<br/>
* <b>AddDictionary.php</b> 用于添加字典<br/>
* <b>zidian.sql</b> 为字典，建一个叫'yzm'的数据库导入即可<br/>

[正确率测试 地址](http://kuri-su.cc/PIN/Identify_online.php "kuri-su.cc")<br/><br/>
[正确率批量测试 地址](http://kuri-su.cc/PIN/AccuracyTest.php "kuri-su.cc")<br/>
<font color=red>批量测试设置了一次加载五个方正验证码，大概等待时间在17s左右，而且可能会因为请求不到验证码而中断</font>
<br/><br/>
[kuri-su.cc](http://kuri-su.cc "kuri-su.cc")
<br/>测试页面出现错误的情况已经修复

不嫌弃的话给个star吧wwww
<hr/>

#####  <font color=#5dadff>PS：目前认为运算效率的瓶颈在 similar_text()  这个核心函数上，函数的作用在于对比两个字符串的相似程度，但是其算法时间复杂度T(n) = O(n^3) ，所以准备用T(n) = O(m*n)动态规划实现一个相类似的函数去代替该函数，以提高性能，时间未定。。。</font>

<hr/>

##There are 2,300 records in the current dictionary，Recognition rate of about 85%，You can make sure that the request is sure to be correct once，The single recognition run time may be between 2.5-3s。

* <b>PIN Identify by fangzheng.php</b> is main file<br/>
* <b>PIN Identify lib.php</b> is function lib<br/>
* <b>downloadImg.php</b> Used to download the verification code<br/>
* <b>AddDictionary.php</b> Used to add a dictionary<br/>
* <b>zidian.sql</b> Is a dictionary，Build a database called 'yzm' and imported<br/>

[to Accuracy test](http://kuri-su.cc/PIN/Identify_online.php "kuri-su.cc")<br/><br/>
[to Batch test accuracy](http://kuri-su.cc/PIN/AccuracyTest.php "kuri-su.cc")<br/>
<font color='red'>Batch test set a load of five Founder verification code, probably waiting for about 17s time, and may not be required because the request code is interrupted</font>
<br/><br/>
[kuri-su.cc](http://kuri-su.cc "kuri-su.cc")
