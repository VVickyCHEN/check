<?php
namespace app\index\controller;
use baiduphp\AipSpeech; 
use think\Request;
class Index
{
    // http://localhost/tp5/gk/index/index/methonName()
    public function index(Request $request)
    {
       return $this-> gg($request);
        // return '<p>十年磨一剑 <strong style="font-size: 5em;"> ；）</strong></p>';
    }
    public function cool(Request $request)
    {
        if(isset($_FILES["picture"])) //如果接收到了上传的数据
        {
            return file_get_contents($_FILES["picture"]["tmp_name"]); //file_get_contents() 函数把整个文件读入一个字符串中。                                                                                                                       //tmp_name表示文件上传后                                                                                                                        //在服务端存储的临时文件名                                                                                                                        //一般是系统默认。可以在php.ini                                                                                                                        //的upload_tmp_dir 指定
        }
        else
        {
            return "error!";
        }
        if($_POST)
        {
            $data =$_POST;
 
            $name = 'static/GGGG.txt';
            file_put_contents($name, $data);
             

            return   $data['post'];
        }
        elseif ($_GET) {
            $data =$_GET;
 
            $name = 'static/GGGG.txt';
            file_put_contents($name, 'get');
             

            return   $data['post'];
        }       
        else
        {
           
            return "Hello";
        }
       
    }
    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }
    public function gg(Request $request)
    {       
        // header("Content-Type: application/octet-stream; charset=UTF-8");Content-Type","text/html; encoding=gb18030
        header("Content-Type: text/html; charset=UTF-8");
        // 指定允许其他域名访问    
        header('Access-Control-Allow-Origin:*');    
        // 响应类型    
        header('Access-Control-Allow-Methods:POST');    
        // 响应头设置    
        header('Access-Control-Allow-Headers:x-requested-with,content-type'); 
        if($_POST)
        {
            $data =$_POST;
            $_POST['vol'];
        }
        else
        {
           
            $data= array(
                 // 'vol' => 7,
            // 'spd' => 4,
            // 'pit'=> 6,
            // 'per' => 4
                'vol' => 7,
                'spd' => 4,
                'pit'=> 5,
                'per' => 3
            );
        }
         $file = 'static/'.'rand.txt'; //先读取文件
        //file_get_contents() 函数把整个文件读入一个字符串中
         $contents = file_get_contents($file);
        //获取文件的编码方式
         $encoding = mb_detect_encoding($contents, array('GB2312','GBK','UTF-16','UCS-2','UTF-8','BIG5','ASCII'));
         $tex = mb_convert_encoding ($contents, 'UTF-8',$encoding);
         $tex = substr($tex,0,512);
        //  $tttime = strlen($tex)/512;
        //  $tt=[];
        //  $ttt='';
        //  $strat=0;
        //  $end=1;
 

        //  for ($j=$tttime; $j >= 0; $j--) { 
           
        //     for ($i=0; $i < strlen($tex); $i++) {
 
        //         if(strlen($tex)/$tttime*$strat>strlen($tex))
        //         {
 
        //         }
        //         if(strlen($tex)/$tttime*$strat<strlen($tex))
        //         {
        //             if($i>=strlen($tex)/$tttime*$strat&&$i<strlen($tex)/$tttime*($end))
        //             {
        //                 $ttt.=$tex[$i]; 
        //                 if($i>=strlen($tex)/$tttime*($end)-1&&$i<=strlen($tex)/$tttime*($end))
        //                 {                          
        //                     $strat++;
        //                     $end++;                                                        
        //                     array_push($tt,$ttt);
        //                     $ttt='';   
        //                 }                    
        //             }
        //         }
               
                
        //     }
        // }
        
        
        // // $cbody = file($file); //file（）函数作用是返回一行数组，txt里有三行数据，因此一行被识别为一个数组，三行被识别为三个数组
        // // for($i=0;$i<count($cbody);$i++){ //count函数就是获取数组的长度的，长度为3 因为一行被识别为一个数组 有三行

        // // echo $cbody[$i];echo "<br/>"; //最后是循环输出每个数组，在每个数组输出完毕后 ，输出一个换行，这样就可以达到换行效果
        // // }
        // // echo convert_uuencode(implode($cbody));
       
        $client = new AipSpeech(APP_ID, API_KEY, SECRET_KEY);
     
        $result = $client->synthesis($tex, 'zh', 1, $data);
 
       
        
        if(!is_array($result)){ 
               $name = 'static/'.md5($result).'.mp3';
                  file_put_contents($name, $result);
                  return "http://192.168.1.173".$request->url().$name;
        }
        // return "http://192.168.1.173".$request->url().$name;
        // $result=[];
        // $client = new AipSpeech(APP_ID, API_KEY, SECRET_KEY);
        // for ($i=0; $i <count($tt) ; $i++) {             
        //    array_push($result,$client->synthesis($tt[$i], 'zh', 1, $data));
        // }
 
        // $name=[];
        // $voicepath=[];
        // // ini_set ('memory_limit', '128M');
        // for ($i=0; $i <count($result); $i++) { 
        //     if(!is_array($result[$i])){ 
        //         array_push($name,'static/'.md5($result[$i]).'.mp3');
        //         file_put_contents($name[$i], $result[$i]);  
        //         array_push($voicepath,"http://192.168.1.173".$request->url().$name[$i]);               
        //     }
        // }
        // return $voicepath[3];
       
    }
    
 
//  --------------------------------------------------------------------------------------
    //httpPost
    function doHttpPost($url, $params)
    {
                // 指定允许其他域名访问    
        header('Access-Control-Allow-Origin:*');    
        // 响应类型    
        header('Access-Control-Allow-Methods:POST');    
        // 响应头设置    
        header('Access-Control-Allow-Headers:x-requested-with,content-type');  
        // $httpHeader=createHttpHeader();
        $curlPost=$url.'?'.$params;
        $ch=curl_init();
        curl_setopt($ch,CURLOPT_URL,$curlPost);
        // curl_setopt($ch,CURLOPT_HTTPHEADER,$httpHeader);
        curl_setopt($ch,CURLOPT_HEADER,false);
        curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
        curl_setopt($ch,CURLOPT_POST,1);
        curl_setopt($ch,CURLOPT_POSTFIELDS,$curlPost);
        curl_setopt($ch,CURLOPT_TIMEOUT,30);
        curl_setopt($ch,CURLOPT_DNS_USE_GLOBAL_CACHE,false);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        $data=curl_exec($ch);
        curl_close($ch);

        $file = md5($data);
        if(!file_exists($file))
        {
            file_put_contents($file,'');
        }
 
        file_put_contents($file, $current);
        return $data;
    }
 

  public function gettoken()
  {
 
     // 你的 APPID AK SK
     $appid  = '11456610';
     $apikey = 'T3CDlrr8O2G8i6aLKTnHpw69';
     $secretkey = 'kLtGIxlkFu2Eo3TxkTaT0AYgkTUdCoTG';
 
    $url = 'https://openapi.baidu.com/oauth/2.0/token';
    $post_data['grant_type']       = 'client_credentials';
    $post_data['client_id']      =  $apikey ;
    $post_data['client_secret'] = $secretkey;
    $o = "";
    foreach ( $post_data as $k => $v ) 
    {
    	$o.= "$k=" . urlencode( $v ). "&" ;
    }
    $post_data = substr($o,0,-1);
     
    $res = $this->doHttpPost($url, $post_data);

    return $res;
    //  var_dump($res);
    // return  $url.'?'.$post_data;
  }

 
}
