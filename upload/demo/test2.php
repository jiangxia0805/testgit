<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/12
 * Time: 15:12
 */
function file2dir($sourcefile, $dir)
{
    if( is_dir($sourcefile) ){ // 如果你希望同样移动目录里的文件夹
        return dir2dir($sourcefile, $dir);
    }
    if( ! file_exists($sourcefile)){
        return false;
    }
    $filename = basename($sourcefile);
    return copy($sourcefile, $dir .'/'. $filename);
}
function dir2dir($sourcedir, $dir)
{
    if( ( !is_dir($sourcedir) ) || ( !is_dir($dir) )  ){
        return false;
    }
    // 要复制到新目录
    $newPath = $dir.'/'.basename($sourcedir);
    if( ! realpath( $newPath)  ){ //
        mkdir($newPath);
    }
    foreach(glob($sourcedir.'/*') as $filename)
    {

        var_dump( file2dir($filename, $newPath) );
    }
}

dir2dir("/www/admin", "/www/admin-back");