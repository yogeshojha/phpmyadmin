<?php
/* $Id$ */

// first created 2002/04/29 Arthit Suriyawongkul & Warit Wanasathian
// last modified 2004/08/22 Arthit Suriyawongkul

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr';
$left_font_family = 'sans-serif';
$right_font_family = 'sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('ไบต์', 'กิโลไบต์', 'เมกกะไบต์', 'กิกะไบต์', 'เทอราไบต์', 'เพตตะไบต์', 'เอกซะไบต์');

$day_of_week = array('อา.', 'จ.', 'อ.', 'พ.', 'พฤ.', 'ศ.', 'ส.');
$month = array('ม.ค.', 'ก.พ.', 'มี.ค.', 'เม.ย.', 'พ.ค.', 'มิ.ย.', 'ก.ค.', 'ส.ค.', 'ก.ย.', 'ต.ค.', 'พ.ย.', 'ธ.ค.');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d %B %Y  %Rน.';

$timespanfmt = '%s วัน, %s ชั่วโมง, %s นาที, %s วินาที';

$strAPrimaryKey = 'ได้เพิ่มไพรมารีคีย์แล้วใน %s';
$strAbortedClients = 'ยกเลิก';
$strAbsolutePathToDocSqlDir = 'กรุณาใส่ absolute path ของไดเรกทอรี docSQL บนเว็บเซิร์ฟเวอร์';
$strAccessDenied = 'ไม่อนุญาตให้ใช้งาน';
$strAction = 'กระทำการ';
$strAddAutoIncrement = 'เพิ่มค่า AUTO_INCREMENT';
$strAddDeleteColumn = 'เพิ่ม/ลบ คอลัมน์ (ฟิลด์)';
$strAddDeleteRow = 'เพิ่ม/ลบ แถว';
$strAddNewField = 'เพิ่มฟิลด์ใหม่';
$strAddPrivilegesOnDb = 'เพิ่มสิทธิของฐานข้อมูลต่อไปนี้';
$strAddPrivilegesOnTbl = 'เพิ่มสิทธิของตารางต่อไปนี้';
$strAddSearchConditions = 'เพิ่มเงื่อนไขในการค้นหา:';
$strAddToIndex = 'เพิ่มดัชนีคอลัมน์ %s';
$strAddUser = 'เพิ่มผู้ใช้ใหม่';
$strAddUserMessage = 'เพิ่มผู้ใช้ใหม่เรียบร้อยแล้ว';
$strAddedColumnComment = 'เพิ่ม หมายเหตุ สำหรับคอลัมน์';
$strAddedColumnRelation = 'เพิ่ม รีเลชัน สำหรับคอลัมน์';
$strAdministration = 'การดูแลระบบ';
$strAffectedRows = 'แถวที่มีผล:';
$strAfter = 'หลัง %s';
$strAfterInsertBack = 'ส่งกลับ';
$strAfterInsertNewInsert = 'แทรกระเบียนใหม่';
$strAll = 'ทั้งหมด';
$strAllTableSameWidth = 'ให้แสดงตารางทุกอัน ด้วยความกว้างเท่ากันหรือไม่?';
$strAlterOrderBy = 'เรียงค่าในตารางตาม';
$strAnIndex = 'ได้เพิ่มดัชนีแล้วใน %s';
$strAnalyzeTable = 'วิเคราะห์ตาราง';
$strAnd = 'และ';
$strAny = 'ใดๆ';
$strAnyHost = 'โฮสต์ใดๆ';
$strAnyUser = 'ผู้ใช้ใดๆ';
$strArabic = 'อารบิค'; 
$strArmenian = 'อาร์เมเนีย';
$strAscending = 'น้อยไปมาก';
$strAtBeginningOfTable = 'ที่จุดเริ่มต้นของตาราง';
$strAtEndOfTable = 'ที่จุดสุดท้ายของตาราง';
$strAttr = 'แอตทริบิวต์';
$strAutodetect = 'ตรวจหาอัตโนมัติ';
$strAutomaticLayout = 'จัดตำแหน่งอัตโนมัติ';

$strBack = 'ย้อนกลับ';
$strBaltic = 'บอลติก';
$strBeginCut = 'เริ่มจุดตัด';
$strBeginRaw = 'เริ่มข้อมูลดิบ';
$strBinary = ' ข้อมูลไบนารี ';
$strBinaryDoNotEdit = ' ข้อมูลไบนารี - ห้ามแก้ไข ';
$strBookmarkDeleted = 'ลบคำค้นที่จดไว้เรียบร้อยแล้ว';
$strBookmarkLabel = 'ป้ายชื่อ';
$strBookmarkOptions = 'ตัวเลือกที่คั่น';
$strBookmarkQuery = 'คำค้นนี้ถูกจดไว้แล้ว';
$strBookmarkThis = 'จดคำค้นนี้ไว้';
$strBookmarkView = 'ดูอย่างเดียว';
$strBrowse = 'เปิดดู';
$strBulgarian = 'บัลเกเรีย';
$strBzError = 'phpMyAdmin ไม่สามารถบีบอัดข้อมูล dump ได้ เนื่องจากส่วนขยาย Bz2 ใน php รุ่นนี้นั้นเสีย. ขอแนะนำเป็นอย่างยิ่งให้ตั้งไดเรกทีฟ <code>$cfg[\'BZipDump\']</code> ในไฟล์คอนฟิกของ phpMyAdmin เป็น <code>FALSE</code>. ถ้าคุณต้องการที่จะใช้ความสามารถของส่วนขยายการบีบอัด Bz2, คุณควรจะอัพเกรด php เป็นรุ่นถัดไป. รายละเอียดดูได้ที่ php bug report %s.';
$strBzip = '"bzipped"';

$strCSVOptions = 'ตัวเลือก CSV';
$strCalendar = 'ปฏิทิน';
$strCannotLogin = 'ไม่สามารถล็อกอินเข้าเซิร์ฟเวอร์ MySQL ได้';
$strCantLoad = 'ไม่สามารถเรียกส่วนขยาย %s,<br />กรุณาตรวจสอบการตั้งค่าของ PHP';
$strCantLoadRecodeIconv = 'ไม่สามารถเรียกใช้ตัวช่วย iconv หรือ recode เพื่อแปลงชุดตัวอักษร, ทางเลือก: 1) ตั้งค่าให้ PHP สามารถใช้ตัวช่วยเหล่านี้ได้ หรือ 2) ตั้งค่าให้ phpMyAdmin ไม่ต้องแปลงชุดตัวอักษร';
$strCantRenameIdxToPrimary = 'เปลี่ยนชื่อดัชนีเป็น PRIMARY ไม่ได้!';
$strCantUseRecodeIconv = 'ไม่สามารถใช้ฟังก์ชั่น iconv หรือ libiconv หรือ recode_string ทั้งๆ ที่สามารถเรียกตัวช่วย สำหรับฟังก์ชั่นเหล่านั้นขึ้นมาได้แล้ว. ลองตรวจสอบการตั้งค่าของ PHP';
$strCardinality = 'Cardinality';
$strCarriage = 'ปัดแคร่: \\r';
$strCaseInsensitive = 'ไม่สนใจตัวเล็กตัวใหญ่';
$strCaseSensitive = 'สนใจตัวเล็กตัวใหญ่';
$strCentralEuropean = 'ยุโรปกลาง';
$strChange = 'เปลี่ยน';
$strChangeCopyMode = 'สร้างผู้ใช้ใหม่ ให้มีสิทธิเหมือนกัน และ ...';
$strChangeCopyModeCopy = '... เก็บของเก่าไว้.';
$strChangeCopyModeDeleteAndReload = ' ... ลบของเก่าจากตารางผู้ใช้ แล้วเรียกใช้รายการสิทธิ์ใหม่หลังจากนั้น.';
$strChangeCopyModeJustDelete = ' ... ลบของเก่าทิ้งไปจากตารางผู้ใช้.';
$strChangeCopyModeRevoke = ' ... เรียกคืนสิทธิ์ทั้งหมดจากเดิม แล้วลบมันหลังจากนั้น.';
$strChangeCopyUser = 'เปลี่ยนข้อมูลล็อกอิน / ทำสำเนาผู้ใช้';
$strChangeDisplay = 'เลือกฟิลด์ที่ต้องการแสดง';
$strChangePassword = 'เปลี่ยนรหัสผ่าน';
$strCharset = 'ชุดตัวอักษร';
$strCharsetOfFile = 'ชุดอักขระของไฟล์ (character set):';
$strCharsets = 'ชุดตัวอักษร';
$strCharsetsAndCollations = 'ชุดตัวอักษร และการเรียงลำดับ';
$strCheckAll = 'เลือกทั้งหมด';
$strCheckPrivs = 'ตรวจสอบสิทธิ';
$strCheckPrivsLong = 'ตรวจสอบสิทธิสำหรับฐานข้อมูล &quot;%s&quot;.';
$strCheckTable = 'ตรวจสอบตาราง';
$strChoosePage = 'เลือกหน้าที่ต้องการแก้ไข';
$strColComFeat = 'แสดงหมายเหตุของคอลัมน์';
$strCollation = 'การเรียงลำดับ';
$strColumnNames = 'ชื่อคอลัมน์';
$strColumnPrivileges = 'สิทธิเฉพาะคอลัมน์';
$strCommand = 'คำสั่ง';
$strComments = 'หมายเหตุ';
$strCompleteInserts = 'คำสั่ง INSERT เต็มรูปแบบ';
$strCompression = 'บีบอัดข้อมูล';
$strConfigFileError = 'phpMyAdmin ไม่สามารถอ่านแฟ้มคอนฟิกูเรชั่นของคุณได้<br />โดยปกติ อาจจะเป็นเพราะตัว PHP หาไฟล์ไม่เจอ หรือไม่สามารถประมวลผล (parse) ไฟล์ได้<br />ลองเรียกไฟล์คอนฟิกูเรชั่นขึ้นมาโดยตรง (กดลิงค์ด้านล่าง) และดูว่ามี error message อะไรหรือไม่  ลองตรวจสอบดูเครื่องหมาย quote หรือ semicolon ว่าใส่ครบหรือเปล่า<br />ถ้าคุณเห็นหน้าว่างๆ แสดงว่าทุกอย่างเป็นปกติดี';
$strConfigureTableCoord = 'กรุณาตั้งค่าโคออร์ดิเนตของตาราง %s';
$strConnections = 'การเชื่อมต่อ';
$strCookiesRequired = 'ต้องอนุญาตใช้ใช้ \'คุ๊กกี้\' (cookie) เสียก่อน จึงจะผ่านจุดนี้ไปได้';
$strCopyTable = 'คัดลอกตารางไปยัง (ฐานข้อมูล<b>.</b>ตาราง):';
$strCopyTableOK =  'คัดลอกตาราง %s ไปเก็บในชื่อ %s เรียบร้อยแล้ว.';
$strCopyTableSameNames = 'คัดลอกตารางไปที่เดิมไม่ได้';
$strCouldNotKill = 'phpMyAdmin ไม่สามารถฆ่าเธรด %s. บางทีมันอาจจะถูกปิดไปแล้วก็ได้.';
$strCreate = 'สร้าง';
$strCreateIndex = 'สร้างดัชนีโดยคอลัมน์ %s';
$strCreateIndexTopic = 'สร้างดัชนีใหม่';
$strCreateNewDatabase = 'สร้างฐานข้อมูลใหม่';
$strCreateNewTable = 'สร้างตารางในฐานข้อมูลนี้ %s';
$strCreatePage = 'เริ่มหน้าใหม่';
$strCreatePdfFeat = 'การสร้างเอกสาร PDF';
$strCriteria = 'เงื่อนไข';
$strCroatian = 'โครเอเชีย';
$strCyrillic = 'ซิริลิค';
$strCzech = 'เช็ค';
$strCzechSlovak = 'เช็ค-สโลวัก';

$strDBComment = 'หมายเหตุของฐานข้อมูล: ';
$strDBGContext = 'คอนเท็กซ์';
$strDBGContextID = 'หมายเลขคอนเท็กซ์';
$strDBGHits = 'ฮิต';
$strDBGLine = 'บรรทัด';
$strDBGMaxTimeMs = 'เวลามากสุด, มิลลิวินาที';
$strDBGMinTimeMs = 'เวลาน้อยสุด, มิลลิวินาที';
$strDBGModule = 'โมดูล';
$strDBGTimePerHitMs = 'เวลา/ฮิต, มิลลิวินาที';
$strDBGTotalTimeMs = 'เวลาทั้งหมด, มิลลิวินาที';
$strDBRename = 'เปลี่ยนชื่อฐานข้อมูลเป็น';
$strDanish = 'เดนมาร์ก';
$strData = 'ข้อมูล';
$strDataDict = 'พจนานุกรมข้อมูล';
$strDataOnly = 'เฉพาะข้อมูล';
$strDatabase = 'ฐานข้อมูล';
$strDatabaseHasBeenDropped = 'โยนฐานข้อมูล %s ทิ้งไปเรียบร้อยแล้ว';
$strDatabases = 'ฐานข้อมูล';
$strDatabasesDropped = '%s ฐานข้อมูลได้ถูกทิ้งไปเรียบร้อยแล้ว.';
$strDatabasesStats = 'สถิติฐานข้อมูล';
$strDatabasesStatsDisable = 'ยกเลิกการเก็บสถิติ';
$strDatabasesStatsEnable = 'ให้มีการเก็บสถิติ';
$strDatabasesStatsHeavyTraffic = 'โปรดทราบ: การเปิดใช้การเก็บสถิติของฐานข้อมูล อาจจะทำให้มีปริมาณการถ่ายโอนข้อมูลจำนวนมาก ระหว่างเว็บเซิร์ฟเวอร์ และเซิร์ฟเวอร์ MySQL.';
$strDbPrivileges = 'สิทธิเจาะจงเฉพาะฐานข้อมูล';
$strDbSpecific = 'เฉพาะฐานข้อมูล';
$strDefault = 'ค่าปริยาย';
$strDefragment = 'จัดระเบียบตาราง';
$strDelete = 'ลบ';
$strDeleteAndFlush = 'ลบผู้ใช้ และเรียกใช้รายการสิทธิ์ใหม่หลังจากนั้น.';
$strDeleteAndFlushDescr = 'นี่เป็นวิธีที่หมดจดที่สุด แต่การโหลดสิทธิใช้งานใหม่ จะต้องใช้เวลาสักระยะ.';
$strDeleted = 'ลบเรียบร้อยแล้ว';
$strDeletedRows = 'แถวที่ถูกลบ:';
$strDeleting = 'กำลังลบ %s';
$strDescending = 'มากไปน้อย';
$strDescription = 'รายละเอียด';
$strDictionary = 'พจนานุกรม';
$strDisabled = 'ระงับการใช้อยู่';
$strDisplayFeat = 'ความสามารถด้านการแสดงผล';
$strDisplayOrder = 'ลำดับการแสดง:';
$strDisplayPDF = 'แสดงสกีมาของ PDF';
$strDoAQuery = 'ทำ "คำค้นจากตัวอย่าง" (wildcard: "%")';
$strDoYouReally = 'ต้องการจะ ';
$strDocu = 'เอกสารอ้างอิง';
$strDrop = 'โยนทิ้ง';
$strDropSelectedDatabases = 'โยนฐานข้อมูลที่เลือกไว้ทิ้ง';
$strDropUsersDb = 'โยนฐานข้อมูลที่มีชื่อเดียวกับผู้ใช้ทิ้ง.';
$strDumpXRows = 'ดัมพ์แถว %s แถว เริ่มที่แถว %s';
$strDumpingData = 'dump ตาราง';
$strDynamic = 'ไม่คงที่';

$strEdit = 'แก้ไข';
$strEditPDFPages = 'แก้ไขหน้า PDF';
$strEditPrivileges = 'แก้ไขสิทธิ';
$strEffective = 'มีผล';
$strEmpty = 'ลบข้อมูล';
$strEmptyResultSet = 'MySQL คืนผลลัพธ์ว่างเปล่ากลับมา (null / 0 แถว).';
$strEnabled = 'เปิดใช้อยู่';
$strEnd = 'ท้ายสุด';
$strEndCut = 'สิ้นสุดจุดตัด';
$strEndRaw = 'สิ้นสุดข้อมูลดิบ';
$strEnglish = 'อังกฤษ';
$strEnglishPrivileges = ' โปรดทราบ: ชื่อของสิทธิใน MySQL จะแสดงเป็นภาษาอังกฤษ ';
$strError = 'ผิดพลาด';
$strEstonian = 'เอสโตเนีย';
$strExcelOptions = 'ตัวเลือก Excel';
$strExplain = 'อธิบาย SQL';
$strExport = 'ส่งออก';
$strExtendedInserts = 'แทรกหลายระเบียนในคราวเดียว';
$strExtra = 'เพิ่มเติม';

$strFailedAttempts = 'ความพยายามล้มเหลว';
$strField = 'ฟิลด์';
$strFieldHasBeenDropped = 'โยนฟิลด์ %s ทิ้งไปเรียบร้อยแล้ว';
$strFields = 'จำนวนฟิลด์';
$strFieldsEmpty = ' จำนวนฟิลด์คือ ว่างเปล่า! ';
$strFieldsEnclosedBy = 'คร่อมฟิลด์ด้วย';
$strFieldsEscapedBy = 'เครื่องหมายสำหรับ escape char';
$strFieldsTerminatedBy = 'จบฟิลด์ด้วย';
$strFileCouldNotBeRead = 'อ่านไฟล์ไม่ได้';
$strFileNameTemplate = 'รูปแบบของชื่อไฟล์';
$strFileNameTemplateHelp = 'ใช้ __DB__ สำหรับชื่อฐานข้อมูล, __TABLE__ สำหรับชื่อตาราง และ ตัวเลือก %s strftime%s ใดๆ สำหรับการระบุเวลา, ส่วนขยายของไฟล์ (นามสกุล)จะถูกเติมโดยอัตโนมัติ. ข้อความอื่นๆ จะถูกคงไว้ดังเดิม.';
$strFileNameTemplateRemember = 'จำรูปแบบ';
$strFixed = 'คงที่';
$strFlushTable = 'ล้างตาราง (flush)';
$strFormEmpty = 'ค่าในแบบฟอร์มหายไป !';
$strFormat = 'รูปแบบ';
$strFullText = 'ทั้งข้อความ';
$strFunction = 'ฟังก์ชั่น';

$strGenBy = 'สร้างโดย';
$strGenTime = 'เวลาในการสร้าง';
$strGeneralRelationFeat = 'ความสามารถด้านรีเลชันทั่วไป';
$strGeorgian = 'จอร์เจีย';
$strGerman = 'เยอรมัน';
$strGlobal = 'โกลบอล';
$strGlobalPrivileges = 'สิทธิแบบโกลบอล';
$strGlobalValue = 'ค่าแบบโกลบอล';
$strGo = 'ลงมือ';
$strGrantOption = 'มอบสิทธิ';
$strGreek = 'กรีก';
$strGzip = '"gzipped"';

$strHasBeenAltered = 'เปลี่ยนเสร็จแล้ว';
$strHasBeenCreated = 'สร้างเสร็จแล้ว';
$strHaveToShow = 'ต้องเลือกให้แสดงอย่างน้อยหนึ่งคอลัมน์';
$strHebrew = 'ฮิบรู';
$strHexForBinary = 'ใช้เลขฐานสิบหกสำหรับช่องข้อมูลไบนารี';
$strHome = 'หน้าบ้าน';
$strHomepageOfficial = 'โฮมเพจอย่างเป็นทางการของ phpMyAdmin';
$strHost = 'โฮสต์';
$strHostEmpty = 'ชื่อโฮสต์ยังว่างอยู่!';
$strHungarian = 'ฮังการี';

$strIcelandic = 'ไอซ์แลนด์';
$strId = 'ID';
$strIdxFulltext = 'ข้อความเต็ม (fulltext)';
$strIfYouWish = 'ถ้าต้องการเรียกดู เฉพาะบางคอลัมน์ ให้ระบุรายชื่อฟิลด์มาด้วย (คั่นแต่ละชื่อด้วยเครื่องหมายลูกน้ำ)';
$strIgnore = 'ไม่สนใจ';
$strIgnoringFile = 'ไม่สนใจไฟล์ %s';
$strImportDocSQL = 'นำเข้าไฟล์ docSQL';
$strImportFiles = 'นำเข้าไฟล์';
$strImportFinished = 'นำเข้าเสร็จแล้ว';
$strInUse = 'ใช้อยู่';
$strIndex = 'ดัชนี';
$strIndexHasBeenDropped = 'โยนดัชนี %s ทิ้งไปเรียบร้อยแล้ว';
$strIndexName = 'ชื่อดัชนี :';
$strIndexType = 'ชนิดของดัชนี :';
$strIndexes = 'ดัชนี';
$strInnodbStat = 'สถานะของ InnoDB';
$strInsecureMySQL = 'จากไฟล์เก็บค่ากำหนดของคุณ คุณไม่ได้ตั้งรหัสผ่านสำหรับ root ซึ่งจะถูกใช้เป็นชื่อปริยายซึ่งมีสิทธิพิเศษ.  เซิร์ฟเวอร์ MySQL ที่ทำงานด้วยค่าปริยายนี้ อาจถูกบุกรุกได้ คุณควรจะแก้ไขรูรั่วอันนี้ทันที เพื่อความปลอดภัย';
$strInsert = 'แทรก';
$strInsertAsNewRow = 'แทรกเป็นแถวใหม่';
$strInsertNewRow = 'แทรกแถวใหม่';
$strInsertTextfiles = 'แทรกข้อมูลจากไฟล์ข้อความเข้าไปในตาราง';
$strInsertedRowId = 'แทรกเลขประจำแถว:';
$strInsertedRows = 'แถวที่ถูกแทรก:';
$strInstructions = 'วิธีใช้';
$strInternalRelations = 'รีเลชันภายใน';

$strJapanese = 'ญี่ปุ่น';
$strJumpToDB = 'กระโดดไปที่ฐานข้อมูล &quot;%s&quot;.';
$strJustDelete = 'แค่ลบผู้ใช้ออกจากตารางแสดงสิทธิเข้าถึง';

$strKeepPass = 'กรุณาอย่าเปลี่ยนรหัสผ่าน';
$strKeyname = 'ชื่อคีย์';
$strKill = 'ฆ่าทิ้ง';
$strKorean = 'เกาหลี';

$strLaTeX = 'LaTeX';
$strLaTeXOptions = 'ตัวเลือก LaTeX';
$strLandscape = 'แนวนอน';
$strLatexCaption = 'คำอธิบายตาราง';
$strLatexContinued = '(ต่อ)';
$strLatvian = 'ลัตเวีย';
$strLengthSet = 'ความยาว/เซต*';
$strLimitNumRows = 'ระเบียนต่อหน้า';
$strLineFeed = 'ขึ้นบรรทัดใหม่: \\n';
$strLinesTerminatedBy = 'จบแถวด้วย';
$strLinkNotFound = 'ไม่พบลิงก์';
$strLinksTo = 'เชื่อมไปยัง';
$strLithuanian = 'ลิธัวเนีย';
$strLoadMethod = 'วิธีการ LOAD';
$strLocalhost = 'โลคอล';
$strLocationTextfile = 'เลือกไฟล์ข้อความจาก';
$strLogPassword = 'รหัสผ่าน:';
$strLogServer = 'เซิร์ฟเวอร์';
$strLogUsername = 'ชื่อผู้ใช้:';
$strLogin = 'เข้าสู่ระบบ';
$strLoginInformation = 'ข้อมูลล็อกอิน';
$strLogout = 'ออกจากระบบ';

$strMIME_MIMEtype = 'MIME-type';
$strMIME_available_mime = 'MIME-types ที่มีอยู่';
$strMIME_available_transform = 'การแปลงที่เรียกใช้ได้';
$strMIME_description = 'รายละเอียด';
$strMIME_nodescription = 'ไม่ปรากฏรายละเอียดสำหรับการแปลงนี้.<br />กรุณาสอบถามผู้เขียนว่า,  %s ทำอะไร.';
$strMIME_transformation_options = 'ตัวเลือกการแปลง';
$strMaximumSize = 'ขนาดใหญ่สุด: %s%s';
$strModifications = 'บันทึกการแก้ไขเรียบร้อยแล้ว';
$strModify = 'แก้ไข';
$strModifyIndexTopic = 'แก้ไขดัชนี';
$strMoreStatusVars = 'More status variables';
$strMoveTable = 'ย้ายตารางไป (database<b>.</b>table):';
$strMoveTableOK = 'ตาราง %s ถูกย้ายไป %s แล้ว';
$strMoveTableSameNames = 'ย้ายตารางไปที่เดิมไม่ได้';
$strMultilingual = 'หลายภาษา';
$strMySQLCharset = 'ชุดตัวอักษร (charset) ของ MySQL';
$strMySQLReloaded = 'เรียก MySQL ขึ้นมาใหม่แล้ว';
$strMySQLSaid = 'MySQL แสดง: ';
$strMySQLServerProcess = 'MySQL %pma_s1% ทำงานอยู่บน %pma_s2% ในชื่อ %pma_s3%';
$strMySQLShowProcess = 'แสดงงานที่ทำอยู่ของ MySQL';
$strMySQLShowStatus = 'แสดงสถานะของ MySQL';
$strMySQLShowVars = 'แสดงตัวแปรระบบของ MySQL';

$strName = 'ชื่อ';
$strNext = 'ต่อไป';
$strNo = 'ไม่';
$strNoDatabases = 'ไม่มีฐานข้อมูล';
$strNoDatabasesSelected = 'ยังไม่ได้เลือกฐานข้อมูล.';
$strNoDescription = 'ไม่มีรายละเอียด';
$strNoDropDatabases = 'คำสั่ง "DROP DATABASE" ถูกปิดไว้';
$strNoExplain = 'ไม่ต้องอธิบาย SQL';
$strNoFrames = 'เบราเซอร์ที่<b>ใช้เฟรมได้</b> จะช่วยให้ใช้ phpMyAdmin ได้ง่ายขึ้น';
$strNoIndex = 'ยังไม่ได้กำหนดดัชนีใดๆ!';
$strNoIndexPartsDefined = 'ไม่ได้กำหนดส่วนใดๆ ของดัชนี!';
$strNoModification = 'ไม่มีการเปลี่ยนแปลง';
$strNoOptions = 'รูปแบบนี้ไม่มีตัวเลือก';
$strNoPassword = 'ไม่มีรหัสผ่าน';
$strNoPhp = 'ไม่เอาโค้ด PHP';
$strNoPrivileges = 'ไม่มีสิทธิ';
$strNoQuery = 'ไม่มีคำค้น SQL!';
$strNoRights = 'คุณไม่มีสิทธิที่จะเข้ามาตรงนี้!';
$strNoRowsSelected = 'ยังไม่ได้เลือกแถว';
$strNoTablesFound = 'ไม่พบตารางใด ๆ ในฐานข้อมูล';
$strNoUsersFound = 'ไม่พบผู้ใช้ใดๆ.';
$strNoValidateSQL = 'ไม่ต้องตรวจสอบ SQL';
$strNone = 'ไม่มี';
$strNotNumber = 'ค่านี้ไม่ใช่ตัวเลข!';
$strNotOK = 'ไม่ตกลง';
$strNotSet = 'ไม่พบตาราง <b>%s</b> ใน %s';
$strNotValidNumber = ' ไม่ใช่หมายเลขแถวที่ถูกต้อง!';
$strNull = 'ว่างเปล่า (null)';
$strNumSearchResultsInTable = 'พบ %s ผลลัพธ์ที่ตรงในตาราง <i>%s</i>';
$strNumSearchResultsTotal = '<b>รวม:</b> <i>%s</i> ผลลัพธ์ที่ตรง';
$strNumTables = 'ตาราง';

$strOK = 'ตกลง';
$strOftenQuotation = 'โดยปกติจะเป็นเครื่องหมายอัญประกาศ (เครื่องหมายคำพูด)<br />"เท่าที่จำเป็น" หมายถึง ให้ใส่เครื่องหมายคร่อม เฉพาะกับฟิลด์ชนิด char และ varchar เท่านั้น';
$strOperations = 'กระบวนการ';
$strOptimizeTable = 'ปรับแต่งตาราง';
$strOptionalControls = 'กำหนดว่าจะเขียน หรืออ่านตัวอักขระพิเศษ อย่างไร';
$strOptionally = 'เท่าที่จำเป็น';
$strOr = 'หรือ';
$strOverhead = 'เกินความจำเป็น';
$strOverwriteExisting = 'เขียนทับแฟ้มที่มีอยู่แล้ว';

$strPHP40203 = 'คุณกำลังใช้ PHP รุ่น 4.2.3, ซึ่งมีบั๊กร้ายแรงเกี่ยวกับ multi-byte strings (mbstring). กรุณาดูรายงานบั๊ก PHP หมายเลข 19404. เราไม่แนะนำให้คุณใช้ PHP รุ่นนี้กับ phpMyAdmin.';
$strPHPVersion = 'รุ่นของ PHP';
$strPageNumber = 'หมายเลขหน้า:';
$strPaperSize = 'ขนาดกระดาษ';
$strPartialText = 'ข้อความบางส่วน';
$strPassword = 'รหัสผ่าน';
$strPasswordChanged = 'เปลี่ยนรหัสผ่านของ %s เรียบร้อยแล้ว';
$strPasswordEmpty = 'รหัสผ่านยังว่างอยู่!';
$strPasswordNotSame = 'รหัสผ่านไม่ตรงกัน!';
$strPdfDbSchema = 'schema ของฐานข้อมูล "%s" - หน้า %s';
$strPdfInvalidTblName = 'ไม่มีตาราง "%s"!';
$strPdfNoTables = 'ไม่มีตาราง';
$strPerHour = 'ต่อชั่วโมง';
$strPerMinute = 'ต่อนาที';
$strPerSecond = 'ต่อวินาที';
$strPhoneBook = 'สมุดโทรศัพท์';
$strPhp = 'สร้างโค้ด PHP';
$strPmaDocumentation = 'เอกสารการใช้ phpMyAdmin';
$strPmaUriError = '<b>ต้อง</b>กำหนดค่า <tt>$cfg[\'PmaAbsoluteUri\']</tt> ในไฟล์คอนฟิกูเรชั่นเสียก่อน';
$strPolish = 'โปแลนด์';
$strPortrait = 'แนวตั้ง';
$strPos1 = 'จุดเริ่มต้น';
$strPrevious = 'ก่อนหน้า';
$strPrimary = 'ไพรมารี';
$strPrimaryKeyHasBeenDropped = 'โยนไพรมารีคีย์ทิ้งไปเรียบร้อยแล้ว';
$strPrimaryKeyName = 'ชื่อของไพรมารีคีย์ จะต้องเป็น PRIMARY เท่านั้น';
$strPrimaryKeyWarning = '(ชื่อของไพรมารีคีย์<b>จะต้องเป็น</b> "PRIMARY" เท่านั้น!)';
$strPrint = 'พิมพ์';
$strPrintView = 'แสดง';
$strPrivDescAllPrivileges = 'ให้สิทธิทุกอย่าง ยกเว้นการให้สิทธิแก่ผู้อื่น (GRANT).';
$strPrivDescAlter = 'อนุญาตให้เปลี่ยนโครงสร้างของตารางที่มีอยู่เดิม.';
$strPrivDescCreateDb = 'อนุญาตให้สร้างฐานข้อมูล และตารางใหม่.';
$strPrivDescCreateTbl = 'อนุญาตให้สร้างตารางใหม่.';
$strPrivDescCreateTmpTable = 'อนุญาตให้สร้างตารางชั่วคราว.';
$strPrivDescDelete = 'อนุญาตให้ลบข้อมูล';
$strPrivDescDropDb = 'อนุญาตให้ทิ้งฐานข้อมูล และตาราง';
$strPrivDescDropTbl = 'อนุญาตให้ทิ้งตาราง';
$strPrivDescExecute = 'อนุญาตให้รัน stored procedure (ไม่มีผลใน MySQL รุ่นนี้)';
$strPrivDescFile = 'อนุญาตให้นำเข้าข้อมูล และส่งออกข้อมูล ไปที่ไฟล์';
$strPrivDescGrant = 'อนุญาตให้เพิ่มผู้ใช้ และสิทธิเข้าถึง โดยไม่ต้องเรียกใช้ตารางสิทธิใหม่';
$strPrivDescIndex = 'อนุญาตให้สร้าง และทิ้ง ดัชนี';
$strPrivDescInsert = 'อนุญาตให้เพิ่ม และแทนที่ ข้อมูล';
$strPrivDescLockTables = 'อนุญาตให้ล็อกตารางสำหรับเธรดปัจจุบัน';
$strPrivDescMaxConnections = 'จำกัดจำนวนการเชื่อมต่อใหม่ ที่ผู้ใช้จะสามารถเปิดได้ ต่อชั่วโมง';
$strPrivDescMaxQuestions = 'จำกัดจำนวนของคำค้น ที่ผู้ใช้จะสามารถส่งมาที่เซิร์ฟเวอร์ได้ ต่อชั่วโมง';
$strPrivDescMaxUpdates = 'จำกัดจำนวนของคำสั่ง ที่จะเปลี่ยนแปลงตาราง หรือฐานข้อมูลใดๆ ที่ผู้ใช้จะสามารถสั่งได้ ต่อชั่วโมง';
$strPrivDescProcess3 = 'อนุญาตให้ทำลายโพรเซสของผู้ใช้อื่น';
$strPrivDescProcess4 = 'อนุญาตให้ดูคำค้นทั้งหมดในรายการโพรเซส';
$strPrivDescReferences = 'ไม่มีผลใน MySQL รุ่นนี้';
$strPrivDescReload = 'อนุญาตให้เรียกใช้ค่ากำหนดของเซิร์ฟเวอร์ใหม่ และล้างแคชของเซิร์ฟเวอร์';
$strPrivDescReplClient = 'มอบสิทธิให้ผู้ใช้ ในการถามว่า slaves หรือ masters อยู่ที่ไหน.';
$strPrivDescSelect = 'อนุญาตให้อ่านข้อมูลได้.';
$strPrivDescShowDb = 'สามารถเรียกดูรายการฐานข้อมูลทั้งหมดได้';
$strPrivDescShutdown = 'อนุญาตให้ปิดเซิร์ฟเวอร์ได้';
$strPrivDescUpdate = 'อนุญาตให้เปลี่ยนข้อมูลได้.';
$strPrivDescUsage = 'ไม่มีสิทธิใดๆ.';
$strPrivileges = 'สิทธิ';
$strPrivilegesReloaded = 'สิทธิได้ถูกเรียกใช้ใหม่เรียบร้อยแล้ว';
$strProcesslist = 'รายการโพรเซส';
$strPutColNames = 'ใส่ชื่อฟิลด์ที่แถวแรก';

$strQBE = 'คำค้นจากตัวอย่าง';
$strQBEDel = 'ลบ';
$strQBEIns = 'เพิ่ม';
$strQueryFrame = 'หน้าต่างคำค้น';
$strQueryOnDb = 'คำค้นบนฐานข้อมูล <b>%s</b>:';
$strQuerySQLHistory = 'SQL-history';
$strQueryStatistics = '<b>สถิติคำค้น</b>: มี %s คำค้น ถูกส่งไปที่เซิร์ฟเวอร์ นับตั้งแต่เริ่มระบบ.';
$strQueryTime = 'คำค้นใช้เวลา %01.4f วินาที';
$strQueryType = 'ชนิดคำค้น';

$strReType = 'พิมพ์ใหม่';
$strReceived = 'ได้รับ';
$strRecords = 'ระเบียน';
$strReferentialIntegrity = 'ตรวจสอบความสมบูรณ์ของการอ้างถึง:';
$strRefresh = 'เรียกใหม่';
$strRelationNotWorking = 'ความสามารถเพิ่มเติมสำหรับ linked Tables ได้ถูกระงับเอาไว้ ตามเหตุผลที่แจ้งไว้ใน %shere%s';
$strRelationView = 'มุมมองรีเลชัน';
$strRelationalSchema = 'รีเลชันแนล สกีมา';
$strRelations = 'รีเลชัน';
$strReloadFailed = 'รีโหลด MySQL ใหม่ไม่สำเร็จ';
$strReloadMySQL = 'รีโหลด MySQL ใหม่';
$strReloadingThePrivileges = 'ปรับปรุงสิทธิเข้าถึงใหม่อีกรอบ';
$strRemoveSelectedUsers = 'ถอนผู้ใช้ที่เลือก';
$strRenameTable = 'เปลี่ยนชื่อตารางเป็น';
$strRenameTableOK = 'ตาราง %s ได้ถูกเปลี่ยนชื่อเป็น %s';
$strRepairTable = 'ซ่อมแซมตาราง';
$strReplace = 'เขียนทับ';
$strReplaceNULLBy = 'แทนที่ NULL เป็น';
$strReplaceTable = 'เขียนทับด้วยข้อมูลจากไฟล์';
$strReset = 'เริ่มใหม่';
$strResourceLimits = 'ขีดจำกัดของทรัพยากร';
$strRevoke = 'เพิกถอน';
$strRevokeAndDelete = 'เพิกถอน active privileges ทั้งหมดจากผู้ใช้ และลบผู้ใช้ทิ้งหลังจากนั้น.';
$strRevokeAndDeleteDescr = 'ผู้ใช้ต่างๆ ยังคงมีสิทธิ USAGE จนกว่า ข้อมูลสิทธิ จะถูกเรียกใช้ใหม่อีกที.';
$strRevokeMessage = 'คุณได้เพิกถอนสิทธิของ %s';
$strRomanian = 'โรมาเนีย';
$strRowLength = 'ความยาวแถว';
$strRowSize = ' ขนาดแถว ';
$strRows = 'แถว';
$strRowsFrom = 'แถว เริ่มจากแถวที่';
$strRowsModeFlippedHorizontal = 'แนวนอน (หมุนหัวเรื่อง)';
$strRowsModeHorizontal = 'แนวนอน';
$strRowsModeOptions = 'อยู่ใน %s และซ้ำหัวแถวทุกๆ %s เซลล์';
$strRowsModeVertical = 'แนวตั้ง';
$strRowsStatistic = 'สถิติของแถว';
$strRunQuery = 'ประมวลผลคำค้น';
$strRunSQLQuery = 'ประมวลผลคำค้นบนฐานข้อมูล %s';
$strRunning = 'ทำงานอยู่บน %s';
$strRussian = 'รัสเซีย';

$strSQL = 'SQL';
$strSQLOptions = 'ตัวเลือก SQL';
$strSQLParserBugMessage = 'อาจจะมีการเปลี่ยนแปลงบางอย่าง ที่คุณพบว่ามันเป็นข้อผิดพลาดของตัวอ่านคำสั่ง SQL. กรุณาตรวจสอบคำค้นของคุณให้ถี่ถ้วน โดยเฉพาะการเปิด/ปิดเครื่องหมายคำพูด (quotes) ให้ถูกต้อง. อีกสาเหตุหนึ่งที่เป็นไปได้คือ คุณอาจจะอัพโหลดแฟ้มไบนารีข้างนอกช่วงของเครื่องหมายคำพูด. คุณสามารถที่จะลองคำค้นของคุณที่คอมมานด์ไลน์ของ MySQL ซึ่งคุณอาจจะพบข้อผิดพลาดบางอย่างในนั้น. หากเซิร์ฟเวอร์ MySQL แจ้งข้อผิดพลาดมา, ให้ลองอ่านดู มันอาจจะช่วยให้คุณวินิจฉัยปัญหาได้ดีขึ้น. ถ้าคุณยังพบปัญหากับ parser ใน phpMyAdmin อยู่ แต่ไม่พบปัญหากับ parser ในคอมมานด์ไลน์, ให้ลองลดความยาวของคำค้น SQL ลง จนกระทั่งเหลือคำค้น SQL เดี่ยวๆ ที่ยังทำให้เกิดปัญหาอยู่อีก, แล้วแจ้งข้อผิดพลาดดังกล่าวมาที่เรา, ส่งมันมาพร้อมกับตัวข้อมูลที่คุณค้น ซึ่งได้จากส่วนของ CUT ด้านล่าง.';
$strSQLParserUserError = 'อาจจะมีข้อผิดพลาดบางอย่างในคำค้น SQL ของคุณ. หาก MySQL server ได้แจ้งข้อผิดพลาดมาด้านล่างนี้ ให้ลองอ่านดู มันอาจจะช่วยให้คุณวินิจฉัยปัญหาได้ดีขึ้น';
$strSQLQuery = 'คำค้น SQL';
$strSQLResult = 'ผลลัพธ์ SQL';
$strSQPBugInvalidIdentifer = 'ชื่อตัวแปรไม่ถูกต้อง';
$strSQPBugUnclosedQuote = 'ไม่ได้ปิดเครื่องหมายคำพูด';
$strSQPBugUnknownPunctuation = 'มีเครื่องหมายวรรคตอนที่ไม่รู้จัก';
$strSave = 'บันทึก';
$strScaleFactorSmall = 'อัตราย่อน้อยเกินไป ที่จะจัดให้สกีมาอยู่ในหน้าเดียว';
$strSearch = 'ค้นหา';
$strSearchFormTitle = 'ค้นหาในฐานข้อมูล';
$strSearchInTables = 'ในตาราง:';
$strSearchNeedle = 'คำ หรือ ค่าที่ต้องการค้นหา (wildcard: "%"):';
$strSearchOption1 = 'อย่างน้อยหนึ่งคำ';
$strSearchOption2 = 'ทุกคำ';
$strSearchOption3 = 'เหมือนทั้งวลี';
$strSearchOption4 = 'รูปแบบคำพ้อง (regular expression)';
$strSearchResultsFor = 'ผลการค้นหา "<i>%s</i>" %s:';
$strSearchType = 'ค้น:';
$strSelectADb = 'โปรดเลือกฐานข้อมูล';
$strSelectAll = 'เลือกทั้งหมด';
$strSelectFields = 'เลือกฟิลด์ (อย่างน้อยหนึ่งฟิลด์):';
$strSelectNumRows = 'ในคำค้น';
$strSelectTables = 'เลือกตาราง';
$strSend = 'ส่งมาเป็นไฟล์';
$strSent = 'ถูกส่ง';
$strServer = 'เซิร์ฟเวอร์';
$strServerChoice = 'ตัวเลือกเซิร์ฟเวอร์';
$strServerNotResponding = 'เซิร์ฟเวอร์ดังกล่าวไม่ตอบสนอง';
$strServerStatus = 'ข้อมูลรันไทม์';
$strServerStatusUptime = 'เซิร์ฟเวอร์ MySQL นี้รันมาเป็นเวลา %s. เริ่มตอน %s.';
$strServerTabProcesslist = 'โพรเซส';
$strServerTabVariables = 'ตัวแปร';
$strServerTrafficNotes = '<b>การจราจรของเซิร์ฟเวอร์</b>: ตารางนี้แสดงสถิติของการจราจรบนเครือข่าย สำหรับเซิร์ฟเวอร์ MySQL นี้ ตั้งแต่มันเริ่มทำงาน.';
$strServerVars = 'ตัวแปร และค่ากำหนด ของเซิร์ฟเวอร์';
$strServerVersion = 'รุ่นของเซิร์ฟเวอร์';
$strSessionValue = 'ค่าเซสชั่น';
$strSetEnumVal = 'ถ้าชนิดของฟิลด์เป็น "enum" หรือ "set" โปรดใส่ค่าตามรูปแบบ: \'a\',\'b\',\'c\'...<br />ถ้าต้องการใส่เครื่องหมาย backslash ("\\") หรือ อัญประกาศเดี่ยว ("\'") เข้าไปในค่าเหล่านั้น ให้ใส่เครื่องหมาย แบ๊กแสลช นำหน้า (ตัวอย่าง: \'\\\\xyz\' or \'a\\\'b\')';
$strShow = 'แสดง';
$strShowAll = 'แสดงทั้งหมด';
$strShowColor = 'แสดงสี';
$strShowDatadictAs = 'รูปแบบพจนานุกรมข้อมูล';
$strShowFullQueries = 'แสดงคำค้นแบบเต็ม';
$strShowGrid = 'แสดงกริด';
$strShowPHPInfo = 'แสดงข้อมูลของ PHP';
$strShowTableDimension = 'แสดงมิติของตาราง';
$strShowTables = 'แสดงตาราง';
$strShowThisQuery = ' แสดงคำค้นนี้อีกที ';
$strShowingRecords = 'แสดงระเบียนที่ ';
$strSimplifiedChinese = 'จีน (แผ่นดินใหญ่)';
$strSingly = '(เดี่ยว)';
$strSize = 'ขนาด';
$strSlovak = 'สโลวัก';
$strSlovenian = 'สโลเวเนีย';
$strSort = 'เรียง';
$strSortByKey = 'เรียงโดยคีย์';
$strSpaceUsage = 'เนื้อที่ที่ใช้';
$strSpanish = 'สเปน';
$strSplitWordsWithSpace = 'คำถูกแบ่งด้วยช่องว่าง (" ").';
$strStatCheckTime = 'ตรวจสอบครั้งสุดท้ายเมื่อ';
$strStatCreateTime = 'สร้างเมื่อ';
$strStatUpdateTime = 'ปรับปรุงครั้งสุดท้ายเมื่อ';
$strStatement = 'คำสั่ง';
$strStatus = 'สถานะ';
$strStrucCSV = 'ข้อมูล CSV (คั่นด้วยเครื่องหมายลูกน้ำ ",")';
$strStrucData = 'ทั้งโครงสร้างและข้อมูล';
$strStrucDrop = 'เพิ่มคำสั่ง DROP TABLE';
$strStrucExcelCSV = 'ข้อมูล CSV สำหรับไมโครซอฟต์เอ็กเซล';
$strStrucOnly = 'เฉพาะโครงสร้าง';
$strStructPropose = 'เสนอโครงสร้างตาราง';
$strStructure = 'โครงสร้าง';
$strSubmit = 'ส่ง';
$strSuccess = 'ทำคำค้นเสร็จเรียบร้อยแล้ว';
$strSum = 'ผลรวม';
$strSwedish = 'สวีเดน';
$strSwitchToTable = 'สลับไปที่ตารางที่ถูกทำสำเนาไว้';

$strTable = 'ตาราง ';
$strTableComments = 'หมายเหตุของตาราง';
$strTableEmpty = 'ชื่อตารางยังว่างอยู่!';
$strTableHasBeenDropped = 'โยนตาราง %s ทิ้งไปเรียบร้อยแล้ว';
$strTableHasBeenEmptied = 'ลบข้อมูลในตาราง %s เรียบร้อยแล้ว';
$strTableHasBeenFlushed = 'ล้างตาราง %s เรียบร้อยแล้ว';
$strTableMaintenance = 'การดูแลรักษาตาราง';
$strTableOfContents = 'สารบัญ';
$strTableOptions = 'ตัวเลือกตาราง';
$strTableStructure = 'โครงสร้างตาราง';
$strTableType = 'ชนิดตาราง';
$strTables = '%s ตาราง';
$strTblPrivileges = 'สิทธิเจาะจงเฉพาะตาราง';
$strTextAreaLength = 'เนื่องจากความยาวของมัน <br />ฟิลด์นี้ ไม่อาจแก้ไขได้';
$strThai = 'ไทย';
$strTheContent = 'ได้แทรกข้อมูล จากไฟล์ของคุณเรียบร้อยแล้ว';
$strTheContents = 'สำหรับแถวที่มีไพรมารีคีย์ หรือ unique key เหมือนกัน เนื้อหาจากไฟล์ จะแทนที่เนื้อหาเดิมในตาราง';
$strTheTerminator = 'จุดสิ้นสุดของฟิลด์';
$strTheme = 'หน้าตา';
$strThisHost = 'โฮสต์นี้';
$strThisNotDirectory = 'นี่ไม่ใช่ไดเรกทอรี';
$strThreadSuccessfullyKilled = 'เธรด %s ถูกทำลายเรียบร้อยแล้ว.';
$strTime = 'เวลา';
$strTotal = 'ทั้งหมด';
$strTotalUC = 'รวม';
$strTraditionalChinese = 'จีน (ไต้หวัน)';
$strTraditionalSpanish = 'สเปน (ดั้งเดิม)';
$strTraffic = 'การจราจร';
$strTransformation_image_jpeg__inline = 'แสดงรูปขนาดเล็กที่กดเข้าไปดูภาพใหญ่ได้; ตัวเลือก: ความกว้าง, ความสูง หน่วยเป็นพิกเซล (คงสัดส่วนเดิม)';
$strTransformation_image_jpeg__link = 'แสดงลิงก์ไปยังรูป (ดาวน์โหลดข้อมูลไบนารีโดยตรง/blob).';
$strTransformation_image_png__inline = 'ดูรูปชนิด image/jpeg ทันที';
$strTransformation_text_plain__formatted = 'สงวนการจัดรูปแบบเดิมในฟิลด์ไว้ -- ไม่แทรก escape character.';
$strTransformation_text_plain__unformatted = 'แสดงโค้ด HTML เป็น HTML entities. การจัดรูปแบบแบบ HTML จะไม่ถูกแสดง';
$strTruncateQueries = 'ตัดทอนคำค้นที่แสดง';
$strTurkish = 'ตุรกี';
$strType = 'ชนิด';

$strUkrainian = 'ยูเครน';
$strUncheckAll = 'ไม่เลือกเลย';
$strUnicode = 'ยูนิโค้ด';
$strUnique = 'เอกลักษณ์';
$strUnknown = 'ไม่ระบุ';
$strUnselectAll = 'ไม่เลือกเลย';
$strUpdComTab = 'โปรดอ่านเอกสารเกี่ยวกับ วิธีการปรับปรุงตาราง Column_comments (เก็บหมายเหตุของคอลัมน์) ของคุณ';
$strUpdatePrivMessage = 'คุณได้ปรับปรุงสิทธิสำหรับ %s แล้ว';
$strUpdateProfileMessage = 'ปรับปรุงโพรไฟล์เรียบร้อยแล้ว';
$strUpdateQuery = 'ปรับปรุงคำค้น';
$strUsage = 'ใช้งาน';
$strUseBackquotes = 'ใส่ \'backqoute\' ให้กับชื่อตารางและฟิลด์';
$strUseTables = 'ใช้ตาราง';
$strUseTextField = 'ใช้ช่องใส่ข้อความ (text field)';
$strUseThisValue = 'ใช้ค่านี้';
$strUser = 'ผู้ใช้';
$strUserAlreadyExists = 'มีผู้ใช้ %s อยู่แล้ว!';
$strUserEmpty = 'ชื่อผู้ใช้ยังว่างอยู่!';
$strUserName = 'ชื่อผู้ใช้';
$strUserNotFound = 'ไม่พบผู้ใช้ที่เลือกในตารางแสดงสิทธิ';
$strUserOverview = 'ข้อมูลทั่วไปของผู้ใช้';
$strUsersDeleted = 'ลบผู้ใช้ที่เลือกไว้เรียบร้อยแล้ว.';
$strUsersHavingAccessToDb = 'ผู้ใช้มีสิทธิเข้าถึงฐานข้อมูล &quot;%s&quot;';

$strValidateSQL = 'ตรวจสอบ SQL';
$strValidatorError = 'ไม่สามารถเริ่มตัวตรวจสอบ SQL ได้. กรุณาตรวจสอบว่า คุณได้ติดตั้ง php extensions ที่จำเป็น ดังที่อธิบายไว้ใน %sdocumentation%s เรียบร้อยแล้ว';
$strValue = 'ค่า';
$strVar = 'ตัวแปร';
$strViewDump = 'ดูโครงสร้างของตาราง';
$strViewDumpDB = 'ดูโครงสร้างของฐานข้อมูล';

$strWebServerUploadDirectory = 'ไดเรกทอรีสำหรับอัพโหลด ที่เว็บเซิร์ฟเวอร์';
$strWebServerUploadDirectoryError = 'ไม่สามารถใช้งาน ไดเรกทอรีที่ตั้งไว้สำหรับอัพโหลดได้';
$strWelcome = '%s ยินดีต้อนรับ';
$strWestEuropean = 'ยุโรปตะวันตก';
$strWildcard = 'ไวล์การ์ด';
$strWithChecked = 'ทำกับที่เลือก:';
$strWritingCommentNotPossible = 'การเขียนหมายเหตุนั้นเป็นไปไม่ได้';
$strWritingRelationNotPossible = 'การเขียนรีเลชันนั้นเป็นไปไม่ได้';
$strWrongUser = 'อนุญาตให้เข้าใช้ไม่ได้ ชื่อผู้ใช้หรือรหัสผ่านผิด';

$strXML = 'XML';

$strYes = 'ใช่';

$strZeroRemovesTheLimit = 'โปรดทราบ: ถ้าเปลี่ยนค่าเหล่านี้เป็น 0 (ศูนย์) จะหมายถึง ไม่มีขีดจำกัด.';
$strZip = '"ถูกบีบอัดอยู่ (zip)"';

// To translate:
$strAccessDeniedExplanation = 'phpMyAdmin tried to connect to the MySQL server, and the server rejected the connection. You should check the host, username and password in config.inc.php and make sure that they correspond to the information given by the administrator of the MySQL server.';  //to translate
$strAddConstraints = 'Add constraints';  //to translate
$strAddDropDatabase = 'Add DROP DATABASE';//to translate
$strAddHeaderComment = 'Add custom comment into header (\\n splits lines)';  //to translate
$strAddIfNotExists = 'Add IF NOT EXISTS';  //to translate
$strAddIntoComments = 'Add into comments';//to translate
$strAfterInsertSame = 'Go back to this page';  //to translate

$strBookmarkAllUsers = 'Let every user access this bookmark';  //to translate
$strBrowseForeignValues = 'Browse foreign values';  //to translate

$strCheckOverhead = 'Check overheaded';  //to translate
$strCommentsForTable = 'COMMENTS FOR TABLE';  //to translate
$strConnectionError = 'Cannot connect: invalid settings.';  //to translate
$strConstraintsForDumped = 'Constraints for dumped tables';  //to translate
$strConstraintsForTable = 'Constraints for table';  //to translate
$strCreationDates = 'Creation/Update/Check dates';  //to translate

$strDatabaseEmpty = 'The database name is empty!';  //to translate
$strDatabaseExportOptions = 'Database export options';//to translate
$strDatabaseNoTable = 'This database contains no table!';//to translate
$strDefaultValueHelp = 'For default values, please enter just a single value, without backslash escaping or quotes, using this format: a';  //to translate
$strDelOld = 'The current Page has References to Tables that no longer exist. Would you like to delete those References?';  //to translate
$strDelayedInserts = 'ใช้ delayed inserts';  //to translate
$strDisableForeignChecks = 'Disable foreign key checks';  //to translate
$strDropDatabaseStrongWarning = 'You are about to DESTROY a complete database!';  //to translate
$strDumpSaved = 'Dump has been saved to file %s.';  //to translate

$strEncloseInTransaction = 'Enclose export in a transaction';  //to translate
$strExcelEdition = 'Excel edition';  //to translate
$strExecuteBookmarked = 'Execute bookmarked query';  //to translate

$strFileAlreadyExists = 'File %s already exists on server, change filename or check overwrite option.';  //to translate
$strFlushPrivilegesNote = 'โปรดทราบ: phpMyAdmin gets the users\' privileges directly from MySQL\'s privilege tables. The content of this tables may differ from the privileges the server uses if manual changes have made to it. In this case, you should %sreload the privileges%s before you continue.'; //to translate

$strIgnoreInserts = 'Use ignore inserts';  //to translate
$strInternalNotNecessary = '* An internal relation is not necessary when it exists also in InnoDB.';  //to translate

$strJustDeleteDescr = 'The &quot;deleted&quot; users will still be able to access the server as usual until the privileges are reloaded.'; //to translate

$strLatexContent = 'Content of table __TABLE__';//to translate
$strLatexContinuedCaption = 'Continued table caption';//to translate
$strLatexIncludeCaption = 'Include table caption';//to translate
$strLatexLabel = 'Label key';//to translate
$strLatexStructure = 'Structure of table __TABLE__';//to translate
$strLoadExplanation = 'The best method is checked by default, but you can change if it fails.';  //to translate

$strMIMETypesForTable = 'MIME TYPES FOR TABLE';  //to translate
$strMIME_transformation = 'Browser transformation';//to translate
$strMIME_transformation_note = 'For a list of available transformation options and their MIME-type transformations, click on %stransformation descriptions%s';//to translate
$strMIME_transformation_options_note = 'Please enter the values for transformation options using this format: \'a\',\'b\',\'c\'...<br />If you ever need to put a backslash ("\") or a single quote ("\'") amongst those values, backslashes it (for example \'\\\\xyz\' or \'a\\\'b\').';//to translate
$strMIME_without = 'MIME-types printed in italics do not have a seperate transformation function';//to translate
$strMustSelectFile = 'You should select file which you want to insert.';  //to translate
$strMySQLConnectionCollation = 'MySQL connection collation';  //to translate

$strNeedPrimaryKey = 'You should define a primary key for this table.';  //to translate
$strNoPermission = 'The web server does not have permission to save the file %s.';  //to translate
$strNoSpace = 'Insufficient space to save the file %s.';  //to translate

$strOperator = 'Operator';  //to translate

$strPrintViewFull = 'Print view (with full texts)';  //to translate
$strPrivDescReplSlave = 'Needed for the replication slaves.'; //to translate
$strPrivDescSuper = 'อนุญาตให้เชื่อมต่อ, แม้ว่าจำนวนการเชื่อมต่อจะถึงระดับสูงสุดแล้ว; Required for most administrative operations like setting global variables or killing threads of other users.'; //to translate

$strQueryWindowLock = 'Do not overwrite this query from outside the window';  //to translate

$strRelationsForTable = 'RELATIONS FOR TABLE';  //to translate
$strRenameDatabaseOK = 'Database %s has been renamed to %s';  //to translate

$strSQLExportType = 'Export type';  //to translate
$strSaveOnServer = 'Save on server in %s directory';  //to translate
$strSecretRequired = 'The configuration file now needs a secret passphrase (blowfish_secret).';  //to translate
$strStrucNativeExcel = 'ข้อมูล Native MS Excel';  //to translate

$strTakeIt = 'take it';  //to translate
$strToggleScratchboard = 'toggle scratchboard';  //to translate
$strTransformation_application_octetstream__download = 'Display a link to download the binary data of a field. First option is the filename of the binary file. Second option is a possible fieldname of a table row containing the filename. If you provide a second option you need to have the first option set to an empty string';  //to translate
$strTransformation_text_plain__dateformat = 'Takes a TIME, TIMESTAMP or DATETIME field and formats it using your local dateformat. First option is the offset (in hours) which will be added to the timestamp (Default: 0). Second option is a different dateformat according to the parameters available for PHPs strftime().';//to translate
$strTransformation_text_plain__external = 'สำหรับ ลีนุกซ์ เท่านั้น: Launches an external application and feeds the fielddata via standard input. Returns standard output of the application. Default is Tidy, to pretty print HTML code. For security reasons, you have to manually edit the file libraries/transformations/text_plain__external.inc.php and insert the tools you allow to be run. The first option is then the number of the program you want to use and the second option are the parameters for the program. The third parameter, if set to 1 will convert the output using htmlspecialchars() (Default is 1). A fourth parameter, if set to 1 will put a NOWRAP to the content cell so that the whole output will be shown without reformatting (Default 1)';//to translate
$strTransformation_text_plain__imagelink = 'Displays an image and a link, the field contains the filename; first option is a prefix like "http://domain.com/", second option is the width in pixels, third is the height.';  //to translate
$strTransformation_text_plain__link = 'Displays a link, the field contains the filename; first option is a prefix like "http://domain.com/", second option is a title for the link.';  //to translate
$strTransformation_text_plain__substr = 'แสดงข้อความบางส่วนเท่านั้น. First option is an offset to define where the output of your text starts (Default 0). Second option is an offset how much text is returned. If empty, returns all the remaining text. The third option defines which chars will be appended to the output when a substring is returned (Default: ...) .';//to translate

$strUpgrade = 'You should upgrade to %s %s or later.';  //to translate
$strUseHostTable = 'ใช้ Host Table';  //to translate

$strViewDumpDatabases = 'View dump (schema) of databases';//to translate

$strWindowNotFound = 'The target browser window could not be updated. Maybe you have closed the parent window or your browser is blocking cross-window updates of your security settings';  //to translate

$strPersian = 'Persian';  //to translate
$strAddFields = 'Add %s field(s)';  //to translate
$strInsertBookmarkTitle = 'Please insert bookmark title';  //to translate
$strNoThemeSupport = 'No themes support, please check your configuration and/or your themes in directory %s.';  //to translate
$strUseTabKey = 'Use TAB key to move from value to value, or CTRL+arrows to move anywhere';  //to translate
$strEscapeWildcards = 'Wildcards _ and % should be escaped with a \ to use them literally';  //to translate
$strBinLogName = 'Log name';  //to translate
$strBinLogPosition = 'Position';  //to translate
$strBinLogEventType = 'Event type';  //to translate
$strBinLogServerId = 'Server ID';  //to translate
$strBinLogOriginalPosition = 'Original position';  //to translate
$strBinLogInfo = 'Information';  //to translate
$strBinaryLog = 'Binary log';  //to translate
$strSelectBinaryLog = 'Select binary log to view';  //to translate
$strDBCopy = 'Copy database to';  //to translate
$strCopyDatabaseOK = 'Database %s has been copied to %s';  //to translate
$strSwitchToDatabase = 'Switch to copied database';  //to translate
$strPasswordHashing = 'Password Hashing';  //to translate
$strCompatibleHashing = 'MySQL&nbsp;4.0 compatible';  //to translate
$strIndexWarningPrimary = 'PRIMARY and INDEX keys should not both be set for column `%s`';//to translate
$strIndexWarningUnique = 'UNIQUE and INDEX keys should not both be set for column `%s`';//to translate
$strIndexWarningMultiple = 'More than one %s key was created for column `%s`';//to translate
$strIndexWarningTable = 'Problems with indexes of table `%s`';//to translate
$strNoActivity = 'No activity since %s seconds or more, please login again';  //to translate
$strApproximateCount = 'May be approximate. See FAQ 3.11';  //to translate
$strSQLExportCompatibility = 'SQL export compatibility';  //to translate
$strMbOverloadWarning = 'You have enabled mbstring.func_overload in your PHP configuration. This option is incompatible with phpMyAdmin and might cause breaking of some data!';  //to translate
$strMbExtensionMissing = 'The mbstring PHP extension was not found and you seem to be using multibyte charset. Without mbstring extension phpMyAdmin is unable to split strings correctly and it may result in unexpected results.';  //to translate
$strAfterInsertNext = 'Edit next row';  //to translate
?>
