<?php
$UA          = $_SERVER['HTTP_USER_AGENT']; //获取访问者UA
$IP          = $_SERVER["HTTP_X_FORWARDED_FOR"]; //XFF获取访问者IP
$Browser_ver = "iChunQiu Browser 2018.R3.16229"; //允许访问的浏览器 & VERSION
$Tips1       = "You should use [" . $Browser_ver . "] to view this page !"; //提示语1
$Tips2       = "Your IP Address Are Not Allow To Connect, Please Use Privacy IP !"; //提示语2
$Tips3       = "You Not Say Magic_Code!";
$Tips4       = "You Magic_Code Is Wrong!";
echo "<script src=\"/js/jquery-3.3.1.min.js\" type=\"text/javascript\"></script>";
echo "<script src=\"/js/console.js\" type=\"text/javascript\"></script>";
echo "<!--
                        _ooOoo_
                       o8888888o
                       88\" . \"88
                       (| -_- |)
                        O\ = /O
                    ____/`---'\____
                  .   ' \\| |// `.
                   / \\||| : |||// \
                 / _||||| -:- |||||- \
                   | | \\\ - /// | |
                 | \_| ''\---/'' | |
                  \ .-\__ `-` ___/-. /
               ___`. .' /--.--\ `. . __
            .\"\" '< `.___\_<|>_/___.' >'\"\".
           | | : `- \`.;`\ _ /`;.`/ - ` : | |
             \ \ `-. \_ __\ /__ _/ .-` / /
     ======`-.____`-.___\_____/___.-`____.-'======
                        `=---='
     .............................................
              佛祖保佑             永无BUG
      佛曰:
              写字楼里写字间，写字间里程序员；
              程序人员写程序，又拿程序换酒钱。
              酒醒只在网上坐，酒醉还来网下眠；
              酒醉酒醒日复日，网上网下年复年。
              但愿老死电脑间，不愿鞠躬老板前；
              奔驰宝马贵者趣，公交自行程序员。
              别人笑我忒疯癫，我笑自己命太贱；
              不见满街漂亮妹，哪个归得程序员？
               -->\r\n";
if ($UA != 'iChunQiu Browser 2018.R3.16229') //判断浏览器UA
{
    header('Location: /', '', '403');
    echo "<title>ERROR!</title>\r\n";
    echo "<h1>HTTP 403 Forbidden</h1>\r\n";
    echo "浏览器类型禁止访问，请使用i春秋浏览器2018 R3版访问！";
    header("Set-Cookie:Tips1=" . $Tips1 . "");
} elseif (!filter_var($IP, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE)) //判断IP
{
    header('Location: /', '', '403');
    echo "<title>ERROR!</title>\r\n";
    echo "<h1>HTTP 403 Forbidden</h1>\r\n";
    echo "禁止非法IP访问！";
    header("Set-Cookie:Tips2=" . $Tips2 . "");
} elseif (!$_COOKIE["Magic_Code"]) {
    header('Location: /', '', '403');
    echo "<title>ERROR!</title>\r\n";
    echo "<h1>HTTP 403 Forbidden</h1>\r\n";
    echo "未检测到[Magic_Code]饼干！\r\n";
    header("Set-Cookie:Tips3=" . $Tips3 . "");
}elseif ($_COOKIE["Magic_Code"]!=1) {
    header('Location: /', '', '403');
    echo "<title>ERROR!</title>\r\n";
    echo "<h1>HTTP 403 Forbidden</h1>\r\n";
    echo "Magic_Code错误！";
    header("Set-Cookie:Tips4=" . $Tips4 . "");
}else {
    include 'Vm1wR1lWbFhSbkpOVm1oVFYwZG9jVlZ0TVRSaFJuQllZMFZLVUZWVU1Eaz0.php';
}
?>
