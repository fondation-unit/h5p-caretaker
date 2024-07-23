<?php

spl_autoload_register(function ($class) {
    static $classmap;
    // DIRECTORY_SEPARATOR is not defined here (?)

    if (!isset($classmap)) {
        $classmap = [
            "H5PCaretaker\H5PFileHandler" => "H5PFileHandler.php",
            "H5PCaretaker\LibretextData" => "filehandlers/LibretextData.php",
            "H5PCaretaker\FileUtils" => "utils/FileUtils.php",
            "H5PCaretaker\GeneralUtils" => "utils/GeneralUtils.php",
            "H5PCaretaker\H5PUtils" => "utils/H5PUtils.php",
            "H5PCaretaker\JSONUtils" => "utils/JSONUtils.php",
            "H5PCaretaker\ReportUtils" => "utils/ReportUtils.php",
            "H5PCaretaker\ContentFile" => "models/ContentFile.php",
            "H5PCaretaker\Content" => "models/Content.php",
            "H5PCaretaker\ContentTree" => "models/ContentTree.php",
            "H5PCaretaker\AccessibilityReport" =>
                "reports/AccessibilityReport.php",
            "H5PCaretaker\AccessibilityReport2" =>
                "reports/AccessibilityReport2.php",
            "H5PCaretaker\LicenseReport" => "reports/LicenseReport.php",
            "H5PCaretaker\LicenseReport2" => "reports/LicenseReport2.php",
        ];
    }

    if (isset($classmap[$class])) {
        require_once __DIR__ . "/" . $classmap[$class];
    }
});
