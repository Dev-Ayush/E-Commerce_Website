<?php

// functions.php
2
function check_txnid($tnxid){
3
    global $link;
4
    return true;
5
    $valid_txnid = true;
6
    //get result set
7
    $sql = mysql_query("SELECT * FROM `payments` WHERE txnid = '$tnxid'", $link);
8
    if ($row = mysql_fetch_array($sql)) {
9
        $valid_txnid = false;
10
    }
11
    return $valid_txnid;
12
}
13
 
14
function check_price($price, $id){
15
    $valid_price = false;
16
    //you could use the below to check whether the correct price has been paid for the product
17
     
18
    /*
19
    $sql = mysql_query("SELECT amount FROM `products` WHERE id = '$id'");
20
    if (mysql_num_rows($sql) != 0) {
21
        while ($row = mysql_fetch_array($sql)) {
22
            $num = (float)$row['amount'];
23
            if($num == $price){
24
                $valid_price = true;
25
            }
26
        }
27
    }
28
    return $valid_price;
29
    */
30
    return true;
31
}
32
 
33
function updatePayments($data){
34
    global $link;
35
     
36
    if (is_array($data)) {
37
        $sql = mysql_query("INSERT INTO `payments` (txnid, payment_amount, payment_status, itemid, createdtime) VALUES (
38
                '".$data['txn_id']."' ,
39
                '".$data['payment_amount']."' ,
40
                '".$data['payment_status']."' ,
41
                '".$data['item_number']."' ,
42
                '".date("Y-m-d H:i:s")."'
43
                )", $link);
44
        return mysql_insert_id($link);
45
    }
46
}
?>