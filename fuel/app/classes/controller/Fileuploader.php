<?php

class Controller_Fileuploader extends Controller
{
    const PATH_TO_TEMP_FOLDER  = 'temp/';
    const PATH_TO_STAMP        = 'media/image/begitop_stamp.png';

    static public function tempFolder()
    {
        $lTempFolder = self::PATH_TO_TEMP_FOLDER.'temp_'.date('Y_m_d').'/';
        if (!file_exists($lTempFolder))
            mkdir($lTempFolder, 0777);
        return $lTempFolder;
    }

    static protected function generateName($aName)
    {
        return time().'_'.mt_rand(1,99).mt_rand(1,99).
            strtolower(strrchr($aName, '.'));
    }

    public function action_upload()
    {
        $lFile = Arr::get($_FILES, 'files_to_load');

        if (!$lFile['tmp_name'])
            throw new Exception('File does not exist: '.$lFile['name']);

        $lTempFolder = self::tempFolder();
        $lNewName    = self::generateName($lFile['name']);

        if (!move_uploaded_file(
            $lFile['tmp_name'],
            $lTempFolder . $lNewName)
        )
            throw new Exception('Error uploading: '.$lFile['name']);

        die(json_encode([
            'status' => 'ok',
            'file_name'   => $lNewName,
            'folder_path' => $lTempFolder
        ], JSON_UNESCAPED_UNICODE));
    }
}