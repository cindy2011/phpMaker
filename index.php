<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="cdncss/style.css">
</head>

<body>
    <form action="res.php" method="post" id="res">
        <div class="content">
        <p>内部使用，做啥兼容，请在chrome浏览器下使用！！！请配置好config下面的8-26.txt</p>
            <input type="text" value="" placeholder="请输入要生成的第一个文件名例如：download59" name="getfile" required="required">
            <input type="text" value="" placeholder="请输入模板文件的路径和名字例如：pages/824.html" name='template' required="required">
            <input type="text" value="" placeholder="请输入配置的txt的名字例如：8-26" name='fileTxtName' required="required">            
            <input type="submit" value="提交之后会在本目录下自动生成你需要的文件">
    </form>
    </div>
    <p>
    模板文件中ANDROID代表android的下载包地址<br>
    FNAME代表文件名中的字符<br>
    NUM代表文件名中的数字</p>
    <p>例子如下：<br>
     <pre>
iOS http://ad.laohu.com/wd_yt.php?c=740207  http://download.shengli.com/www/yt/download59.html
iOS http://ad.laohu.com/wd_yt.php?c=740208  http://download.shengli.com/www/yt/download60.html
iOS http://ad.laohu.com/wd_yt.php?c=740209  http://download.shengli.com/www/yt/download61.html
iOS http://ad.laohu.com/wd_yt.php?c=740210  http://download.shengli.com/www/yt/download62.html
     </pre></p>
     <p>要生成的第一个文件名是：download59<br>配置的txt的名字是8-26.txt写8-26即可</p>

</body>
</html>
