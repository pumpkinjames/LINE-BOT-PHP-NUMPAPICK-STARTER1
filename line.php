 <?php
  

function send_LINE($msg){
 $access_token = 'pVYT4woODIG7epOZC7MRlCHwCOOCZ9qEhSM5oksiAN4koYZ5/8P1VDz70q8PeKuvILVgyyAFL1Z0Zdg9yfAvC+9o/WsB1zWO6dQF92C9EG293uPoMAa+TZp/xyoHBsMTqpRLpS/L1/PtWS7wnmnP6wdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'U9c4c56f5ea0c7d6ac4d0c4886618a87a',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
