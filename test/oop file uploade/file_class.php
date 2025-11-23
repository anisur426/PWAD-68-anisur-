<?php
class fileClass
{
    public $fileinfo;
    public function __construct($file)
    {
        $this->fileinfo = $file;
    }
    public function upload()
    {
        $info = $this->fileinfo;
        $name = $info['name'];
        $temname = $info['tmp_name'];
        $filesize = $info['size'];
        $allowedsize = 512000;
        $allowedtypes = ["jpg", "png"];
        $error = array();
        $data = pathinfo($name);
        $ext = strtolower($data['extension']);
        if ($filesize > $allowedsize) {
            $error[] = "file size must be within 512000";
        }
        if (!in_array($ext, $allowedtypes)) {
            $error[] = "file type must be jpg and png";
        }
        if (count($error) > 0) {
            foreach ($error as $err) {
                echo $err . "<br>";
            }
        } else {
            move_uploaded_file($temname, '/upload' . $name . $temname);
            echo "<h3>upload successful</h3>";
        }
    }
}
