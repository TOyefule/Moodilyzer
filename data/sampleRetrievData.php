<?php
@include 'connection.php';
//devnote - use an external script to handle the connection so this script can handle the payload

$sq = "Select * From Votes";
$rs = mysqli_query($conn, $sq);
$list = '';
while ($entry = mysqli_fetch_assoc($rs)):
  $id = $entry['uid'];
  $mood = $entry['vote'];
  $date = $entry['date'];

  $list .= '{"user": "' . $id . '", "mood" : "' . $mood . '", "date": "' . $date . '"},';
endwhile;
$list = substr($list, 0, -1);
print '{"votes": [';
print $list;
print ']}';


