<?php
// 기본 데이터를 로딩
include "dbHelper.php";

// usercore 테이블 행번호 저장
$userKeyNo = $_REQUEST["userKeyNo"];


// 데이터베이스에 접속
$mysqli = new mysqli($host, $user, $password, $dbname);
if (mysqli_connect_errno())
{
    echo 'Connect faild : '.mysqli_connect_error().'\n';
    $mysqli->close();
    exit();
}
// utf8로 charset 변경
$mysqli->set_charset("utf8");

//check data
$sqlFind1001 = "SELECT * FROM `farmdefence`.`price` WHERE `codeNo` > 100";
$resultFind1001 = SendSqlQuery($sqlFind1001, "Find1001", $mysqli);

if($resultFind1001->num_rows > 1)
{
    echo "error : exist default price data";
    $mysqli->close();
    exit();
}

$sqlInsert =
"INSERT INTO `farmdefence`.`price` (`no`, `codeNo`, `price`, `bonus`, `amount`)
VALUES (NULL, '101', '1100', '0', '10'), (NULL, '102', '5500', '10', '55'),
(NULL, '103', '11000', '20', '120'), (NULL, '104', '33000', '30', '390'),
(NULL, '105', '66000', '50', '900'), (NULL, '201', '10', '0', '6000'),
(NULL, '202', '50', '10', '33000'), (NULL, '203', '120', '20', '86400'),
(NULL, '204', '250', '30', '195000'),
(NULL, '301', '5', '0', '5'), (NULL, '302', '5000', '0', '1'),
(NULL, '1001', '200', '0', '0'),
(NULL, '1002', '300', '0', '0'), (NULL, '1003', '400', '0', '0'),
(NULL, '1004', '500', '0', '0'), (NULL, '1005', '600', '0', '0'),
(NULL, '1006', '800', '0', '0'), (NULL, '1007', '1000', '0', '0'),
(NULL, '1008', '1200', '0', '0'), (NULL, '1009', '1400', '0', '0'),
(NULL, '1010', '1700', '0', '0'), (NULL, '1011', '2000', '0', '0'),
(NULL, '1012', '2300', '0', '0'), (NULL, '1013', '2600', '0', '0'),
(NULL, '1014', '2900', '0', '0'), (NULL, '1015', '3200', '0', '0'),
(NULL, '1016', '3500', '0', '0'), (NULL, '1017', '3800', '0', '0'),
(NULL, '1018', '4100', '0', '0'), (NULL, '1019', '4400', '0', '0'),
(NULL, '1020', '4800', '0', '0'), (NULL, '1021', '5200', '0', '0'),
(NULL, '1022', '5600', '0', '0'), (NULL, '1023', '6000', '0', '0'),
(NULL, '1024', '6400', '0', '0'), (NULL, '1025', '6800', '0', '0'),
(NULL, '1026', '7200', '0', '0'), (NULL, '1027', '7600', '0', '0'),
(NULL, '1028', '8000', '0', '0'), (NULL, '1029', '8400', '0', '0'),
(NULL, '1030', '8900', '0', '0'), (NULL, '1031', '9400', '0', '0'),
(NULL, '1032', '9900', '0', '0'), (NULL, '1033', '10400', '0', '0'),
(NULL, '1034', '10900', '0', '0'), (NULL, '1035', '11400', '0', '0'),
(NULL, '1036', '11900', '0', '0'), (NULL, '1037', '12400', '0', '0'),
(NULL, '1038', '12900', '0', '0'), (NULL, '1039', '13400', '0', '0'),
(NULL, '1040', '13900', '0', '0'), (NULL, '2001', '200', '0', '0'),
(NULL, '2002', '300', '0', '0'), (NULL, '2003', '400', '0', '0'),
(NULL, '2004', '500', '0', '0'), (NULL, '2005', '600', '0', '0'),
(NULL, '2006', '800', '0', '0'), (NULL, '2007', '1000', '0', '0'),
(NULL, '2008', '1200', '0', '0'), (NULL, '2009', '1400', '0', '0'),
(NULL, '2010', '1700', '0', '0'), (NULL, '2011', '2000', '0', '0'),
(NULL, '2012', '2300', '0', '0'), (NULL, '2013', '2600', '0', '0'),
(NULL, '2014', '2900', '0', '0'), (NULL, '2015', '3200', '0', '0'),
(NULL, '2016', '3500', '0', '0'), (NULL, '2017', '3800', '0', '0'),
(NULL, '2018', '4100', '0', '0'), (NULL, '2019', '4400', '0', '0'),
(NULL, '2020', '4800', '0', '0'), (NULL, '2021', '5200', '0', '0'),
(NULL, '2022', '5600', '0', '0'), (NULL, '2023', '6000', '0', '0'),
(NULL, '2024', '6400', '0', '0'), (NULL, '2025', '6800', '0', '0'),
(NULL, '2026', '7200', '0', '0'), (NULL, '2027', '7600', '0', '0'),
(NULL, '2028', '8000', '0', '0'), (NULL, '2029', '8400', '0', '0'),
(NULL, '2030', '8900', '0', '0'), (NULL, '2031', '9400', '0', '0'),
(NULL, '2032', '9900', '0', '0'), (NULL, '2033', '10400', '0', '0'),
(NULL, '2034', '10900', '0', '0'), (NULL, '2035', '11400', '0', '0'),
(NULL, '2036', '11900', '0', '0'), (NULL, '2037', '12400', '0', '0'),
(NULL, '2038', '12900', '0', '0'), (NULL, '2039', '13400', '0', '0'),
(NULL, '2040', '13900', '0', '0'), (NULL, '3001', '200', '0', '0'),
(NULL, '3002', '300', '0', '0'), (NULL, '3003', '400', '0', '0'),
(NULL, '3004', '500', '0', '0'), (NULL, '3005', '600', '0', '0'),
(NULL, '3006', '800', '0', '0'), (NULL, '3007', '1000', '0', '0'),
(NULL, '3008', '1200', '0', '0'), (NULL, '3009', '1400', '0', '0'),
(NULL, '3010', '1700', '0', '0'), (NULL, '3011', '2000', '0', '0'),
(NULL, '3012', '2300', '0', '0'), (NULL, '3013', '2600', '0', '0'),
(NULL, '3014', '2900', '0', '0'), (NULL, '3015', '3200', '0', '0'),
(NULL, '3016', '3500', '0', '0'), (NULL, '3017', '3800', '0', '0'),
(NULL, '3018', '4100', '0', '0'), (NULL, '3019', '4400', '0', '0'),
(NULL, '3020', '4800', '0', '0'), (NULL, '3021', '5200', '0', '0'),
(NULL, '3022', '5600', '0', '0'), (NULL, '3023', '6000', '0', '0'),
(NULL, '3024', '6400', '0', '0'), (NULL, '3025', '6800', '0', '0'),
(NULL, '3026', '7200', '0', '0'), (NULL, '3027', '7600', '0', '0'),
(NULL, '3028', '8000', '0', '0'), (NULL, '3029', '8400', '0', '0'),
(NULL, '3030', '8900', '0', '0'), (NULL, '3031', '9400', '0', '0'),
(NULL, '3032', '9900', '0', '0'), (NULL, '3033', '10400', '0', '0'),
(NULL, '3034', '10900', '0', '0'), (NULL, '3035', '11400', '0', '0'),
(NULL, '3036', '11900', '0', '0'), (NULL, '3037', '12400', '0', '0'),
(NULL, '3038', '12900', '0', '0'), (NULL, '3039', '13400', '0', '0'),
(NULL, '3040', '13900', '0', '0')";

$resultInsert = SendSqlQuery($sqlInsert, "Insert", $mysqli);

echo "complete";
$mysqli->close();
exit();