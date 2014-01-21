<?php

class SMS {
   
    public function sendSms($phone , $type , $order_id){
        $message = self::getMessage($type , $order_id);
        $path = self::generatePath($phone , $message['client']) ;
        // Sending SMS to Client
        $ch = curl_init ($path);
        curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt ($ch, CURLOPT_REFERER, $path);
        $page = curl_exec ($ch);
        curl_close($ch);
        unset($ch);
        
        // Sending SMS to admin1
        $path = self::generatePath('8801617224224' , $message['admin']) ;
        $ch = curl_init ($path);
        curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt ($ch, CURLOPT_REFERER, $path);
        $page = curl_exec ($ch);
        curl_close($ch);
        unset($ch);
        
        // Sending SMS to admin2
        $path = self::generatePath('8801817073779' , $message['admin']) ;
        $ch = curl_init ($path);
        curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt ($ch, CURLOPT_REFERER, $path);
        $page = curl_exec ($ch);
        curl_close($ch);
        unset($ch);
        
        
    } // End of Send SMS
    
     private function generatePath( $phone, $message) {
         $from = 'LondonCos';
         $phone = $phone ; 
         $message = urlencode($message);
         $path ='http://121.241.242.114/bulksms/bulksms?username=abw-demo&password=demo123&type=0&dlr=1&destination='.$phone.'&source='.$from.'&message='.$message;
         
         return $path ; 
     }// End of getPath
     
     
     private function getMessage($type , $order_id) {
         $message = array();
        if($type=='new'){
            $message['client'] = 'We receive your order successfully at London Cosmetics BD .'
                    . 'Your Order ID is - '.$order_id.'. We will contact with you as soon as possible . Thank you for being with us';
            
            $message['admin'] = 'You have a new Order at London Cosmetics BD . Invoice NO #  '.$order_id;
        }
        elseif($type=='pending'){
            $message['client'] = 'Your order status of Order ID # '.$order_id.' at Londoncosmetics is now at Pending . Thank you for being with us';
             $message['admin'] = 'Order status of Invoice NO # '.$order_id.' at Londoncosmetics is now at Pending' ;
        }
        elseif($type=='dispass'){
            $message['client'] = 'Your order status of Order ID # '.$order_id.' at Londoncosmetics is now at dispass . Thank you for being with us';
             $message['admin'] = 'Order status of Invoice NO # '.$order_id.' at Londoncosmetics is now at dispass' ;
        }
        elseif($type=='success'){
            $message['client'] = 'We have delivered your order successfully  of Order ID # '.$order_id.' . Thank you for being with us';
            $message['admin'] = 'Order status of Invoice NO # '.$order_id.' at Londoncosmetics is now at Success' ;
        }
         
         return $message ; 
     }// End of getMessage

    
} // End of class



?>