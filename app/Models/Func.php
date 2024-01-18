<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use ImageKit\ImageKit;
// require_once __DIR__ . '/../../vendor/autoload.php';

class Func extends Model
{
    use HasFactory;

    public static function uploadFile($file, $folder) : String
    {
        // $imageKit = new ImageKit(
        //     "public_8/f8Je2oCQEeAb96NrBthZ3Wf9U=",
        //     "private_/XAqMJct2zr8e9pZl0OGt/+R1VI=",
        //     "https://ik.imagekit.io/cgmiweb/",
        // );

        // $imageURL = $imageKit->url(
        //     [
        //         'path' => $file,
        //         'transformation' => [
        //             [
        //                 'height' => '1000',
        //                 'width' => '1000',
        //             ]
        //         ]
        //     ]
        // );
        // $uploadFile = $imageKit->uploadFile([
        //     'file' => base64_encode($file),
        //     'fileName' => $file->getClientOriginalName(),
        //     "tags" => ["tag1", "tag2"],
        // ]);


        // $result = json_decode($uploadFile);
        // dd($uploadFile);
        // $url = $result->result->url;
        $target_dir = $folder."/";
        $temp_target_file = $target_dir . basename($file["name"]);
        $imageFileType = strtolower(pathinfo($temp_target_file, PATHINFO_EXTENSION));
        $target_file = $target_dir . uniqid('', true) . '.' . $imageFileType;
        move_uploaded_file($file["tmp_name"], $target_file);
        return $target_file;
    }
}
