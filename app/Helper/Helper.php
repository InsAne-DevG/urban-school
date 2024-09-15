<?php

namespace App\Helper;

class Helper
{
    public static function error_processor($validator)
    {
        $err_keeper = [];
        
        foreach ($validator->errors()->getMessages() as $index => $error) {
            array_push($err_keeper, ['code' => $index, 'message' => $error[0]]);
        }
        return $err_keeper;
    }
    
    public static function saveToS3($type , $file , $disk , $previousImageName=null){
        
        $imageName = time().'.'.$file->extension();

        $file->move(public_path($disk), $imageName);

        if ($previousImageName && $disk) {
            $previousImagePath = public_path($disk) . '/' . $previousImageName;
            if (file_exists($previousImagePath)) {
                unlink($previousImagePath);
            }
        }
    
        return $imageName;
    }
}
