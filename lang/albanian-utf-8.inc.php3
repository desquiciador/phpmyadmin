<?php
/* $Id$ */

/**
 * Translated by: Laurent Dhima <laurenti at users.sourceforge.net>
 */

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr';
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = '.';
$number_decimal_separator = ',';
$byteUnits = array('Bytes', 'KB', 'MB', 'GB');

$day_of_week = array('Djl', 'Hën', 'Mar', 'Mër', 'Enj', 'Pre', 'Sht'); //albanian days
$month = array('Jan', 'Shk', 'Mar', 'Pri', 'Maj', 'Qer', 'Kor', 'Gsh', 'Sht', 'Tet', 'Nën', 'Dhj'); //albanian months
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d %B, %Y at %I:%M %p'; //albanian time


$strAccessDenied = 'Hyrja nuk u pranua';
$strAction = 'Aksioni';
$strAddDeleteColumn = 'Shto/Fshi fushën';
$strAddDeleteRow = 'Shto/Fshi kriterin';
$strAddNewField = 'Shto një fushë të re';
$strAddPriv = 'Shto një privilegj të ri';
$strAddPrivMessage = 'Ke shtuar një privilegj të ri.';
$strAddSearchConditions = 'Shto kushte kërkimi (trupi i specifikimit "where"):';
$strAddToIndex = 'Shto tek treguesi i &nbsp;%s&nbsp;kolonës(ave)';
$strAddUser = 'Shto një përdorues të ri';
$strAddUserMessage = 'Ke shtuar një përdorues të ri.';
$strAffectedRows = 'Rrjeshtat e prekur:';
$strAfter = 'Mbas %s';
$strAfterInsertBack = 'Mbrapa';
$strAfterInsertNewInsert = 'Shto një record të ri';
$strAll = 'Të gjithë';
$strAlterOrderBy = 'Transformo tabelën e renditur sipas';
$strAnalyzeTable = 'Analizo tabelën';
$strAnd = 'Dhe';
$strAnIndex = 'Një tregues u shtua tek %s';
$strAny = 'Çfarëdo';
$strAnyColumn = 'Çfarëdo kolone';
$strAnyDatabase = 'Çfarëdo database';
$strAnyHost = 'Çfarëdo host';
$strAnyTable = 'Çfarëdo tabelë';
$strAnyUser = 'Çfarëdo përdorues';
$strAPrimaryKey = 'Një kyç primar u shtua tek %s';
$strAscending = 'Ngjitje';
$strAtBeginningOfTable = 'Në fillim të tabelës';
$strAtEndOfTable = 'Në fund të tabelës';
$strAttr = 'Pronësi';

$strBack = 'Mbrapa';
$strBinary = 'Binar';
$strBinaryDoNotEdit = 'Të dhëna të tipit Binar - mos modifiko';
$strBookmarkDeleted = 'Bookmark u fshi.';
$strBookmarkLabel = 'Etiketë';
$strBookmarkQuery = 'Query SQL shtuar të preferuarve';
$strBookmarkThis = 'Shtoja të preferuarve këtë query SQL';
$strBookmarkView = 'Vizualizo vetëm';
$strBrowse = 'Shfaq';
$strBzip = '"kompresuar me bzip2"';

$strCantLoadMySQL = 'nuk arrij të ngarkoj ekstensionin MySQL,<br />kontrollo konfigurimin e PHP.';
$strCantLoadRecodeIconv = 'I pamundur ngarkimi i ekstensionit iconv apo recode të nevoitshëm për konvertimin e karaktereve, konfiguroni php për të lejuar përdorimin e këtyre ekstensioneve ose disaktivoni konvertimin e set të karaktereve në phpMyAdmin.';
$strCantRenameIdxToPrimary = 'I pamundur riemërtimi i treguesit në PRIMAR!';
$strCantUseRecodeIconv = 'I pamundur përdorimi i funksioneve iconv apo libiconv apo recode_string për shkak se ekstensioni duhet të ngarkohet. Kontrolloni konfigurimin e php.';
$strCardinality = '';
$strCarriage = 'Kthimi në fillim: \\r';
$strChange = 'Modifiko';
$strChangeDisplay = 'Zgjidh fushën që dëshiron të shohësh';
$strChangePassword = 'Ndrysho password';
$strCheckAll = 'Seleksionoi të gjithë';
$strCheckDbPriv = 'Kontrollo të drejtat e database';
$strCheckTable = 'Kontrollo tabelën';
$strChoosePage = 'Ju lutem zgjidhni faqen që dëshironi të modifikoni';
$strColumn = 'Kollona';
$strColumnNames = 'Emrat e kollonave';
$strCompleteInserts = 'Të shtuarat komplet';
$strConfigFileError = 'phpMyAdmin nuk arrin të lexojë file e konfigurimit!<br />Kjo mund të ndodhë kur php gjen një parse error në të apo kur php nuk arrin t\'a gjejë këtë file.<br />Ju lutem ngarkoheni direkt file e konfigurimit duke përdorur link-un e mëposhtëm dhe lexoni mesazhin(et) e gabimeve php që merrni. Në shumicën e rasteve mund t\'ju mungojë një apostrofë apo një presje.<br />Nëse faqja që do t\'ju hapet është bosh (e bardhë), atëhere gjithçka është në rregull.';
$strConfigureTableCoord = 'Ju lutem, konfiguroni koordinatat për tabelën %s';
$strConfirm = 'I sigurt që dëshiron t\'a bësh?';
$strCookiesRequired = 'Nga kjo pikë e tutje, cookies duhet të jenë të aktivuara.';
$strCopyTable = 'Kopjo tabelën tek (database<b>.</b>tabela):';
$strCopyTableOK = 'Tabela %s u kopjua tek %s.';
$strCreate = 'Krijo';
$strCreateIndex = 'Krijo një tregues tek &nbsp;%s&nbsp;columns';
$strCreateIndexTopic = 'Krijo një tregues të ri';
$strCreateNewDatabase = 'Krijo një database të re';
$strCreateNewTable = 'Krijo një tabelë të re tek database %s';
$strCreatePage = 'Krijo një Faqe të re';
$strCriteria = 'Kriteri';

$strData = 'Të dhëna';
$strDatabase = 'Database ';
$strDatabaseHasBeenDropped = 'Database %s u eleminua.';
$strDatabases = 'database';
$strDatabasesStats = 'Statistikat e databases';
$strDatabaseWildcard = 'Database (wildcards e lejuara):';
$strDataOnly = 'Vetëm të dhëna';
$strDefault = 'Paracaktuar';
$strDelete = 'Fshi';
$strDeleted = 'Rrjeshti u fshi';
$strDeletedRows = 'Rrjeshtat e fshirë:';
$strDeleteFailed = 'Fshirja dështoi!';
$strDeleteUserMessage = 'Ke fshirë përdoruesin %s.';
$strDelPassMessage = 'Ke fshirë password për';
$strDescending = 'Zbritës';
$strDisplay = 'Vizualizo';
$strDisplayOrder = 'Mënyra e vizualizimit:';
$strDisplayPDF = 'Shfaq skemën e PDF';
$strDoAQuery = 'Zbato "query nga shembull" (karakteri jolly: "%")';
$strDocu = 'Dokumentet';
$strDoYouReally = 'Konfermo: ';
$strDrop = 'Elemino';
$strDropDB = 'Elemino database %s';
$strDropTable = 'Elemino tabelën';
$strDumpingData = 'Dump i të dhënave për tabelën';
$strDumpXRows = 'Dump i %s rrjeshta duke filluar nga rrjeshti %s.';
$strDynamic = 'dinamik';

$strEdit = 'Modifiko';
$strEditPDFPages = 'Modifiko Faqe PDF';
$strEditPrivileges = 'Modifiko Privilegjet';
$strEffective = 'Efektiv';
$strEmpty = 'Zbraz';
$strEmptyResultSet = 'MySQL ka kthyer një të përbashkët boshe (p.sh. zero rrjeshta).';
$strEnd = 'Fund';
$strEnglishPrivileges = 'Shënim: emrat e privilegjeve të MySQL janë në Anglisht';
$strError = 'Gabim';
$strExplain = 'Shpjego kodin SQL';
$strExport = 'Eksporto';
$strExportToXML = 'Eksporto në formatin XML';
$strExtendedInserts = 'Të shtuara të zgjeruara';
$strExtra = 'Extra';

$strField = 'Fushë';
$strFieldHasBeenDropped = 'Fusha %s u eleminua';
$strFields = 'Fusha';
$strFieldsEmpty = ' Numratori i fushave është bosh! ';
$strFieldsEnclosedBy = 'Fushë e përbërë nga';
$strFieldsEscapedBy = 'Fushë e kufizuar nga';
$strFieldsTerminatedBy = 'Fushë e mbaruar nga';
$strFixed = 'fiks';
$strFlushTable = 'Rifillo ("FLUSH") tabelën';
$strFormat = 'Formati';
$strFormEmpty = 'Mungon një vlerë në form!';
$strFullText = 'Tekst komplet';
$strFunction = 'Funksion';

$strGenBy = 'Gjeneruar nga';
$strGenTime = 'Gjeneruar më';
$strGo = 'Zbato';
$strGrants = 'Lejo';
$strGzip = '"kompresuar me gzip"';

$strHasBeenAltered = 'u modifikua.';
$strHasBeenCreated = 'u krijua.';
$strHaveToShow = 'Zgjidh të paktën një Kolonë për t\'a vizualizuar';
$strHome = 'Home';
$strHomepageOfficial = 'Home page zyrtare e phpMyAdmin';
$strHomepageSourceforge = 'Home page e phpMyAdmin tek sourceforge.net';
$strHost = 'Host';
$strHostEmpty = 'Emri i host është bosh!';

$strIdxFulltext = 'Teksti komplet';
$strIfYouWish = 'Për të ngarkuar të dhënat vetëm për disa kollona të tabelës, specifiko listën e fushave (të ndara me presje).';
$strIgnore = 'Injoro';
$strIndex = 'Treguesi';
$strIndexHasBeenDropped = 'Treguesi %s u eleminua';
$strIndexes = 'Tregues';
$strIndexName = 'Emri i treguesit&nbsp;:';
$strIndexType = 'Tipi i treguesit&nbsp;:';
$strInsert = 'Shto';
$strInsertAsNewRow = 'Shto një rrjesht të ri';
$strInsertedRows = 'Rrjeshta të shtuar:';
$strInsertNewRow = 'Shto një rrjesht të ri';
$strInsertTextfiles = 'Shto një file teksti në tabelë';
$strInstructions = 'Instruksione';
$strInUse = 'në përdorim';
$strInvalidName = '"%s" është një fjalë e rezervuar; nuk mund t\'a përdorësh si emër për database/tabelë/fushë.';

$strKeepPass = 'Mos ndrysho password';
$strKeyname = 'Emri kyçit';
$strKill = 'Hiq';

$strLength = 'Gjatësia';
$strLengthSet = 'Gjatësia/Set*';
$strLimitNumRows = 'record për faqe';
$strLineFeed = 'Fundi i rrjeshtit: \\n';
$strLines = 'Record';
$strLinesTerminatedBy = 'Rrjeshta të mbaruar me';
$strLinkNotFound = 'Link nuk u gjet';
$strLinksTo = 'Lidhje me';
$strLocationTextfile = 'Pozicioni i file';
$strLogin = 'Lidh';
$strLogout = 'Shkëput';
$strLogPassword = 'Password:';
$strLogUsername = 'Emri i përdoruesit:';

$strMissingBracket = 'Mungojnë Thonjëza';
$strModifications = 'Ndryshimet u shpëtuan';
$strModify = 'Modifiko';
$strModifyIndexTopic = 'Modifiko një tregues';
$strMoveTable = 'Sposto tabelën në (database<b>.</b>tabela):';
$strMoveTableOK = 'Tabela %s u spostua tek %s.';
$strMySQLCharset = 'Set karakteresh MySQL';
$strMySQLReloaded = 'MySQL u rifillua.';
$strMySQLSaid = 'Mesazh nga MySQL: ';
$strMySQLServerProcess = 'MySQL %pma_s1% në ekzekutim tek %pma_s2% si %pma_s3%';
$strMySQLShowProcess = 'Vizualizo proceset në ekzekutim';
$strMySQLShowStatus = 'Vizualizo informacionet e runtime të MySQL';
$strMySQLShowVars = 'Vizualizo të ndryshueshmet e sistemit të MySQL';

$strName = 'Emri';
$strNext = 'Në vazhdim';
$strNo = ' Jo ';
$strNoDatabases = 'Asnjë database';
$strNoDescription = 'asnjë Përshkrim';
$strNoDropDatabases = 'Komandat "DROP DATABASE" janë disaktivuar.';
$strNoFrames = 'phpMyAdmin funksionon më mirë me browser që suportojnë frames';
$strNoIndex = 'Asnjë tregues i përcaktuar!';
$strNoIndexPartsDefined = 'Asnjë pjesë e treguesit është përcaktuar!';
$strNoModification = 'Asnjë ndryshim';
$strNone = 'Askush';
$strNoPassword = 'Asnjë Password';
$strNoPhp = 'pa kod PHP';
$strNoPrivileges = 'Asnjë Privilegj';
$strNoQuery = 'Asnjë query SQL!';
$strNoRights = 'Nuk ke të drejta të mjaftueshme për të kryer këtë operacion!';
$strNoTablesFound = 'Nuk gjenden tabela në database.';
$strNotNumber = 'Ky nuk është një numër!';
$strNotSet = '<b>%s</b> tabela nuk u gjet ose nuk është përcaktuar tek %s';
$strNotValidNumber = ' nuk është një rrjesht i vlefshëm!';
$strNoUsersFound = 'Nuk u gjet asnjë përdorues.';
$strNull = 'Null';
$strNumSearchResultsInTable = '%s korrispondon(jnë) tek tabela <i>%s</i>';
$strNumSearchResultsTotal = '<b>Gjithsej:</b> <i>%s</i> korrispondues(ë)';

$strOftenQuotation = 'Zakonisht nga dopjo thonjza. ME DËSHIRË tregon që vetëm fushat <I>char</I> dhe <I>varchar</I> duhet të delimitohen nga karakteri i treguar.';
$strOperations = 'Operacione';
$strOptimizeTable = 'Optimizo tabelën';
$strOptionalControls = 'Me dëshirë. Ky karakter kontrollon si të shkruash apo lexosh karakteret specialë.';
$strOptionally = 'ME DËSHIRË';
$strOptions = 'Mundësi';
$strOr = 'Ose';
$strOverhead = 'Tejkalim';

$strPageNumber = 'Numri i faqes:';
$strPartialText = 'Tekst i pjesëshëm';
$strPassword = 'Password';
$strPasswordEmpty = 'Password është bosh!';
$strPasswordNotSame = 'Password nuk korrispondon!';
$strPdfDbSchema = 'Skema e database "%s" - Faqja %s';
$strPdfInvalidPageNum = 'Numri i faqes së PDF i papërcaktuar!';
$strPdfInvalidTblName = 'Tabela "%s" nuk ekziston!';
$strPhp = 'Krijo kodin PHP';
$strPHPVersion = 'Versioni i PHP';
$strPmaDocumentation = 'Dokumente të phpMyAdmin';
$strPmaUriError = 'Direktiva <tt>$cfg[\'PmaAbsoluteUri\']</tt> DUHET të përcaktohet tek file i konfigurimit!';
$strPos1 = 'Fillim';
$strPrevious = 'Paraardhësi';
$strPrimary = 'Primar';
$strPrimaryKey = 'Kyç primar';
$strPrimaryKeyHasBeenDropped = 'Kyçi primar u eleminua';
$strPrimaryKeyName = 'Emri i kyçit primar duhet të jetë... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>duhet</b> të jetë emri i, dhe <b>vetëm i</b>, një kyçi primar!)';
$strPrintView = 'Vizualizo për stampim';
$strPrivileges = 'Privilegje';
$strProperties = 'Pronësi';

$strQBE = 'Query nga shembull';
$strQBEDel = 'Fshi';
$strQBEIns = 'Shto';
$strQueryOnDb = 'SQL-query tek database <b>%s</b>:';

$strRecords = 'Record';
$strReferentialIntegrity = 'Kontrollo integritetin e informacioneve:';
$strRelationView = 'Shiko relacionin';
$strReloadFailed = 'Rinisja e MySQL dështoi.';
$strReloadMySQL = 'Rifillo MySQL';
$strRememberReload = 'Kujtohu të rinisësh MySQL.';
$strRenameTable = 'Riemërto tabelën në';
$strRenameTableOK = 'Tabela %s u riemërtua %s';
$strRepairTable = 'Riparo tabelën';
$strReplace = 'Zëvëndëso';
$strReplaceTable = 'Zëvëndëso të dhënat e tabelës me file';
$strReset = 'Rinis';
$strReType = 'Rifut';
$strRevoke = 'Hiq';
$strRevokeGrant = 'Hiq të drejtat';
$strRevokeGrantMessage = 'Ke hequr privilegjet e të drejtave për %s';
$strRevokeMessage = 'Ke anulluar privilegjet për %s';
$strRevokePriv = 'Anullo privilegjet';
$strRowLength = 'Gjatësia e rrjeshtit';
$strRows = 'Rrjeshta';
$strRowsFrom = 'rrjeshta duke filluar nga';
$strRowSize = 'Dimensioni i rrjeshtit';
$strRowsModeHorizontal = ' horizontal ';
$strRowsModeOptions = ' në modalitetin %s dhe përsërit headers mbas %s qeli ';
$strRowsModeVertical = ' vertikal ';
$strRowsStatistic = 'Statistikat e rrjeshtave';
$strRunning = 'në ekzekutim tek %s';
$strRunQuery = 'Dërgo Query';
$strRunSQLQuery = 'Zbato query SQL tek database %s';

$strSave = 'Shpëto';
$strScaleFactorSmall = 'Faktori i shkallës është shumë i vogël për të plotësuar skemën në faqe';
$strSearch = 'Kërko';
$strSearchFormTitle = 'Kërko në database';
$strSearchInTables = 'Tek tabela(at):';
$strSearchNeedle = 'Fjala(ë) apo vlera(at) për t\'u kërkuar (karakteri Jolly: "%"):';
$strSearchOption1 = 'të paktën njërën nga fjalët';
$strSearchOption2 = 'të gjitha fjalët';
$strSearchOption3 = 'fraza precize';
$strSearchOption4 = 'si ekspresion i rregullt';
$strSearchResultsFor = 'Kërko rezultatet për "<i>%s</i>" %s:';
$strSearchType = 'Gjej:';
$strSelect = 'Seleksiono';
$strSelectADb = 'Të lutem, seleksiono një database';
$strSelectAll = 'Seleksiono Gjithçka';
$strSelectFields = 'Seleksiono fushat (të paktën një):';
$strSelectNumRows = 'tek query';
$strSelectTables = 'Seleksiono Tabelat';
$strSend = 'Shpëtoje me emër...';
$strServerChoice = 'Zgjedhja e server';
$strServerVersion = 'Versioni i MySQL';
$strSetEnumVal = 'N.q.s. fusha është "enum" apo "set", shtoni të dhënat duke përdorur formatin: \'a\',\'b\',\'c\'...<br />Nëse megjithatë do t\'u duhet të vini backslashes ("\") apo single quote ("\'") para këtyre vlerave, backslash-ojini (për shembull \'\\\\xyz\' o \'a\\\'b\').';
$strShow = 'Shfaq';
$strShowAll = 'Shfaqi të gjithë';
$strShowColor = 'Shfaq ngjyrën';
$strShowCols = 'Shfaq kollonat';
$strShowGrid = 'Shfaq rrjetën';
$strShowingRecords = 'Vizualizimi i record ';
$strShowPHPInfo = 'Trego info mbi PHP';
$strShowTableDimension = 'Trego dimensionin e tabelave';
$strShowTables = 'Shfaq tabelat';
$strShowThisQuery = 'Tregoje përsëri këtë query';
$strSingly = '(një nga një)';
$strSize = 'Dimensioni';
$strSort = 'Rrjeshtimi';
$strSpaceUsage = 'Hapsira e përdorur';
$strSplitWordsWithSpace = 'Fjalët janë të ndara nga një hapsirë (" ").';
$strSQL = 'SQL';
$strSQLQuery = 'query SQL';
$strSQLResult = 'Rezultati SQL';
$strStatement = 'Instruksione';
$strStrucCSV = 'të dhëna CSV';
$strStrucData = 'Struktura dhe të dhëna';
$strStrucDrop = 'Shto \'drop table\'';
$strStrucExcelCSV = 'CSV për të dhëna Ms Excel';
$strStrucOnly = 'Vetëm struktura';
$strStructPropose = 'Propozo strukturën e tabelës';
$strStructure = 'Struktura';
$strSubmit = 'Dërgoje';
$strSuccess = 'Query u zbatua me sukses';
$strSum = 'Gjithsej';

$strTable = 'tabela ';
$strTableComments = 'Komente mbi tabelën';
$strTableEmpty = 'Emri i tabelës është bosh!';
$strTableHasBeenDropped = 'Tabela %s u eleminua';
$strTableHasBeenEmptied = 'Tabela %s u zbraz';
$strTableHasBeenFlushed = 'Tabela %s u rifreskua';
$strTableMaintenance = 'Administrimi i tabelës';
$strTables = '%s tabela(at)';
$strTableStructure = 'Struktura e tabelës';
$strTableType = 'Tipi i tabelës';
$strTextAreaLength = ' Për shkak të gjtësisë saj,<br /> kjo fushë nuk mund të modifikohet ';
$strTheContent = 'Përmbajtja e file u shtua.';
$strTheContents = 'Përmbajtja e file zëvëndëson rrjeshtat e tabelës me të njëjtin kyç primar apo kyç të vetëm.';
$strTheTerminator = 'Karakteri përfundues i fushave.';
$strTotal = 'Gjithsej';
$strType = 'Tipi';

$strUncheckAll = 'Deseleksionoi të gjithë';
$strUnique = 'I vetëm';
$strUnselectAll = 'Deseleksiono Gjithçka';
$strUpdatePrivMessage = 'Ke rifreskuar lejet për %s.';
$strUpdateProfile = 'Rifresko profilin:';
$strUpdateProfileMessage = 'Profili u rifreskua.';
$strUpdateQuery = 'Rifresko Query';
$strUsage = 'Përdorimi';
$strUseBackquotes = 'Përdor backquotes me emrat e tabelave dhe fushave';
$strUser = 'Përdorues';
$strUserEmpty = 'Emri i përdoruesit është bosh!';
$strUserName = 'Emri i përdoruesit';
$strUsers = 'Përdorues';
$strUseTables = 'Përdor tabelat';

$strValue = 'Vlera';
$strViewDump = 'Vizualizo dump (skema) e tabelës';
$strViewDumpDB = 'Vizualizo dump (skema) e database';

$strWelcome = 'Mirësevini tek %s';
$strWithChecked = 'N.q.s.të seleksionuar:';
$strWrongUser = 'Emri i përdoruesit apo password i gabuar. Ndalohet hyrja.';

$strYes = ' Po ';

$strZip = '"kompresuar me zip"';

// To translate
$strComments = 'Comments';  //to translate
?>
