<?
ob_clean();//清除缓冲区内容
header('Content-Type: application/json; charset=utf-8');
$text = $_REQUEST['text'] ?? 'random';//指定文本内容
$number = $_REQUEST['number'] ?? 'random';//指定第几条
$type = $_REQUEST['type'] ?? 'text';//指定返回类型 text或json
if(!file_exists("api/$text") || $type == 'random'){
    $dir = scandir('api');//获取api目录下的所有文件
    $dir = array_diff($dir, ['.', '..']);//排除当前目录和上一级目录
    if($dir == false || $dir == null){
        if($type == 'json'){
            echo json_encode([
                'code' => 500,
                'msg' => '获取文件列表失败,可能是没有语录或者没有权限,请设置775权限',
                'result' => "酷侠GitHub:https://github.com/kx9007"
            ], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);//添加JSON_UNESCAPED_UNICODE参数，防止中文编码问题
            exit;//退出脚本
        }else{
            echo "获取文件列表失败,可能是没有语录或者没有权限,请设置775权限\n";
            echo "酷侠GitHub:https://github.com/kx9007";
            exit;//退出脚本
        }
    }
    
    $text = "api/" . $dir[array_rand($dir)];//随机获取一个文件并添加路径前缀
}else{
    $text = "api/$text";
}

if($number == 'random'){
    $lines = file($text, FILE_IGNORE_NEW_LINES);//读取文件内容并忽略换行符
    $number = $lines[array_rand($lines)];//随机获取一个内容
}else{
    $lines = file($text, FILE_IGNORE_NEW_LINES);//读取文件内容并忽略换行符
    $number = $lines[$number - 1];//数组下标从0开始，所以要减1
}
if($type == 'text'){
    echo $number;//返回文本内容
}else{
    echo json_encode([
        'code' => 200,
        'msg' => '获取成功',
        'result' => $number
    ], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);//添加JSON_UNESCAPED_UNICODE参数，防止中文编码问题
    //返回json格式内容
    exit;//退出脚本
}