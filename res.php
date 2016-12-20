<?php
$template=$_POST['template'];//模板路径和名字
$Gfile=$_POST['getfile'];//要生成的第一个文件名
$arr = preg_split("/([a-zA-Z]+)/", $Gfile, 0, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE); 
$getfileName=$arr[0];
$fileStartNum=$arr[1];
$fileTxtName=$_POST['fileTxtName'];
$fileTxt ='config/'.$fileTxtName.'.txt';
$contentTxt = file_get_contents($fileTxt);
$downArr = explode("\r\n", $contentTxt);
$dir=explode("/", $template);
//var_dump($dir);
foreach( $downArr as $k=>$v){   
    if( !$v )   
        unset( $downArr[$k] );   
}  

$fileNum=count($downArr);//12;
$fileEndNum=intval($fileStartNum)+intval($fileNum)-1;

$list = array();

for($i=$fileStartNum,$j=0;$i<=$fileEndNum;$i++,$j++){
	if(intval($i)>=10){
		$i=intval($i);
	}else{
		$i='0'.intval($i);
	}
	$list[$i] = array('fname'=>$getfileName,'andorid' =>$downArr[$j]);
}

$content = file_get_contents($template);
echo $content;
$patterns = array('ANDROID', 'NUM','FNAME');
foreach ($list as $key => $value) {
	$replacements = array($value['andorid'],$key,$value['fname']);
	$new = str_replace($patterns, $replacements, $content);
	file_put_contents($dir[0]."/".$getfileName.$key.'.html', $new);
}
echo "<script>alert('生成成功！');</script>";
?>
