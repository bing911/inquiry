<?php
set_time_limit(0);
header('Content-Type: text/html; charset=UTF-8');

    /* ����ѡ�����ݿ� */   
 
$link = mysql_connect("localhost", "root", "root")        or die("Could not connect");  
  print "Connected successfully";    
mysql_select_db("keywords") or die("Could not select database");
    /* ִ�� SQL ��ѯ */    
 
$query = "SELECT url,page_title FROM `contents` where host='grindingmillforsale.com'";   
 $result = mysql_query($query) or die("Query failed");  
 
  /* �� HTML �д�ӡ��� */  
 
 //print "<table>\n";   
 while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {        
	//print "\t<tr>\n";        
	foreach ($line as $col_value) {            
		//print "\t\t<td>$col_value</td>\n"; 
print $line->page_title;		
	}        
	//print "\t</tr>\n";    
 }    
 //print "</table>\n";
 
    /* �ͷ���Դ */
    
//mysql_free_result($result);    
 
/* �Ͽ����� */   
 
mysql_close($link);
?>