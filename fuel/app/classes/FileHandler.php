<?php

class FileHandler
{
    const AVATAR_FOLDER        = 'avatars/';
    const PATH_TO_TEMP_FOLDER  = 'temp/';

    static public function generateName($aName)
    {
        return time().'_'.mt_rand(1,99).mt_rand(1,99).
            strtolower(strrchr($aName, '.'));
    }

    static public function tempFolder()
    {
        $lTempFolder = self::PATH_TO_TEMP_FOLDER.'temp_'.date('Y_m_d').'/';
        if (!file_exists($lTempFolder))
            mkdir($lTempFolder, 0777);
        return $lTempFolder;
    }

    static public function createFolder($aFolderName, $aPathToFolder)
    {
        $lFullName = $aPathToFolder . $aFolderName;
        if (!file_exists($aPathToFolder))
            throw new Exception('Invalid path: ' . $aPathToFolder);

        if (file_exists($lFullName))
            throw new Exception('Already exsist: ' . $lFullName);

        if (!mkdir($lFullName, 0777))
            throw new Exception('Can\'t create: ' . $lFullName);

        return $lFullName.'/';
    }

    static public function isExsist($aFolderName, $aPathToFolder)
    {
        $lFullName = $aPathToFolder . $aFolderName.'/';
        if(file_exists($lFullName))
            return $lFullName;
        return false;
    }

    static public function deleteFiles($aFiles)
    {
        foreach($aFiles as $lValue)
        {
            if (!file_exists($lValue))
                throw new Exception('Invalid file: ' . $lValue);
            if (!unlink($lValue))
                throw new Exception('Error deleting: ' . $lValue);
        }
    }

    static public function deleteFolders($aFullName)
    {
        foreach($aFullName as $lValue)
        {
            if (!file_exists($lValue))
                return;

            if (!is_dir($lValue))
                throw new Exception('Not folder ' . $lValue);

            if (!rmdir($lValue))
                throw new Exception('Error deleting: ' . $lValue);
        }
    }

    static public function prepareFiles($aFiles, $aPathFolder, $aAnnex = false, $aFileTypes = false)
    {
        if (!file_exists($aPathFolder))
            throw new Exception('Invalid path of source: ' . $aPathFolder);
        $lFileFormats = array('.gif', '.png', '.jpg', '.bmp', '.jpeg');
        if ($aFileTypes)
            $lFileFormats = array_merge($lFileFormats, $aFileTypes);
        $lRandomPart = mt_rand(1,99);
        $lTime = time();
        foreach ($aFiles as $lKey => $lValue)
        {
            if (!file_exists($aPathFolder . $lValue))
                throw new Exception('File does not exist : ' . $aPathFolder . $lValue);

            $lAttr = strtolower(strrchr($lValue, '.'));
            if (!in_array($lAttr, $lFileFormats))
                throw new Exception('Invalid file attr: *.'.$lAttr);

            $lNewNames[$lValue] = $aAnnex . $lTime .'_' . $lRandomPart . $lAttr;
            $lRandomPart++;
        }
        return $lNewNames;
    }

    static public function moveFiles($aFiles, $aMoveFrom, $aMoveTo)
    {
        if (!file_exists($aMoveFrom))
            throw new Exception('Invalid folder path: '.$aMoveFrom);

        if (!file_exists($aMoveTo))
            throw new Exception('Invalid folder path: '.$aMoveTo);

        foreach($aFiles as $lKey => $lValue)
        {
            $lTempName = $aMoveFrom . $lKey;
            if (!file_exists($lTempName))
                throw new Exception('Invalid file: '.$lTempName);
            if (!rename($lTempName , $aMoveTo . $lValue))
                throw new Exception('Error copy file from: '.$lTempName. ' to '.$aMoveTo . $lValue);
        }
        return true;
    }


    static public function copyFiles(
        $aFile, &$NameFile, $aPathFrom, $aPathTo = false, $aAnnex = false,
        $aFileTypes = false
    ) {
        $lCheckedImg = [];

        if (!file_exists($aPathFrom))
            throw new Exception('Invalid path of source: ' . $aPathFrom);

        if (!file_exists($aPathTo))
            throw new Exception('Invalid path of destination: ' . $aPathTo);

        $lFileFormats = array('.gif', '.png', '.jpg', '.bmp', '.jpeg');
        if ($aFileTypes)
        {
          $lFileFormats = array_merge($lFileFormats, $aFileTypes);
        }
        $lRandomPart = mt_rand(1,99);
        foreach ($aFile as $lKey => $lValue)
        {
            if (!file_exists($aPathFrom . $lValue))
                throw new Exception('Invalid path of source: ' . $aPathFrom . $lValue);

            $lAttr = strtolower(strrchr($lValue, '.'));
            if (!in_array($lAttr, $lFileFormats))
                throw new Exception('Invalid file attr: *.'.$lAttr);


            $NameFile[$lValue] = $aAnnex . time() . '_' . $lRandomPart . $lAttr;

            $lCheckedImg[] = array(
                'name_source'      => $aPathFrom . $lValue,
                'name_destination' => $aPathTo . $NameFile[$lValue]
            );
            $lRandomPart++;
        }

        $lTemp = [];
        for ($i = count($lCheckedImg); $i--; )
        {
            $lTemp[] = $lCheckedImg[$i]['name_destination'];
            if (!copy($lCheckedImg[$i]['name_source'], $lCheckedImg[$i]['name_destination']))
            {
                self::deleteFiles($lTemp);
                throw new Exception(
                    'Error copying file from '.$lCheckedImg[$i]['name_source'].
                    ' to '.$lCheckedImg[$i]['name_destination']
                );
            }
        }
    }
}