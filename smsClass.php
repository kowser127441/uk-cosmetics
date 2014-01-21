<?php

class SMS {
   
    public function sendSms($phone , $type , $order_id){
        $customer_name = self::getCusname($order_id);
        $total_amount = self::getTotalAmount($order_id);
       // var_dump($order_id , $customer_name,$total_amount)  ; 
       // die();
        $message = self::getMessage($type , $order_id , $total_amount ,  $customer_name , $phone);
        $path = self::generatePath($phone , $message['client']) ;
        
        
        
        // Sending SMS to Client
        if($type=='new' || $type=='dispass' || $type=='success' || $type=='cancel'){
            $ch = curl_init ($path);
            curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt ($ch, CURLOPT_REFERER, $path);
            $page = curl_exec ($ch);
            curl_close($ch);
            unset($ch);
        } 
        
        // Sending SMS to admin
        if($type=='new' || $type=='cancel'){
            // Admin-1
            $path = self::generatePath('8801617224224' , $message['admin']) ;
            $ch = curl_init ($path);
            curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt ($ch, CURLOPT_REFERER, $path);
            $page = curl_exec ($ch);
            curl_close($ch);
            unset($ch);
            
            // Admin- 2 
            $path = self::generatePath('8801817073779' , $message['admin']) ;
            $ch = curl_init ($path);
            curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt ($ch, CURLOPT_REFERER, $path);
            $page = curl_exec ($ch);
            curl_close($ch);
            unset($ch);
        
        }
        
        // Sending SMS to admin2
        
        
    } // End of Send SMS
    
     private function generatePath( $phone, $message) {
         $from = 'LondonCos';
         $phone = $phone ; 
         $message = urlencode($message);
         $path ='http://121.241.242.114/bulksms/bulksms?username=abw-london&password=london56&type=0&dlr=1&destination='.$phone.'&source='.$from.'&message='.$message;
         
         return $path ; 
     }// End of getPath
     
     
     private function getMessage($type , $order_id , $total_amount ,  $customer_name , $phone) {
         $message = array();
        if($type=='new'){
            $message['client'] = 'Dear '.$customer_name.', Thanks for ordering at London Cosmetics.'
                    . 'Your order No # '.$order_id.', your order value = BDT '.$total_amount .'. Thanks for being with us .';
            
            $message['admin'] = 'You have a new order, Order ID# '.$order_id.'. Customer Name: '.$customer_name.' , Mobile no: ' .$phone;
        }
        elseif($type=='pending'){
            $message['client'] = 'Your order status of Order ID'.$order_id.' at Londoncosmetics is now at Pending . Thank you for being with us';
           // $message['admin'] = 'Order status of Invoice NO #'.$order_id.' at Londoncosmetics is now at Pending' ;
        }
        elseif($type=='dispass'){
            $message['client'] = 'Dear '.$customer_name.', Your order no # '.$order_id.',Your order amout BDT '.$total_amount .' has dispatched from London Cosmetics. Thanks for being with us. ';
            // $message['admin'] = 'Order status of Invoice NO #'.$order_id.' at Londoncosmetics is now at dispass' ;
        }
        elseif($type=='success'){
            $message['client'] = 'Dear '.$customer_name.', Your order no # '.$order_id.',Your order amout BDT '.$total_amount .' is sucessfully delivered. Thanks for being with us.';
           // $message['admin'] = 'Order status of Invoice NO #'.$order_id.' at Londoncosmetics is now at Success' ;
        }
        
        elseif($type=='cancel'){
            $message['client'] = 'Dear '.$customer_name.', Your order has been cancle due to security reason.
Your order no# '.$order_id.', Your order value BDT '.$total_amount .'.Thanks for being with us';
            $message['admin'] = 'Order no# '.$order_id.', Order amount BDT '.$total_amount .',has been cancel.' ;
        }
         
         return $message ; 
     }// End of getMessage
     
     
      private function getCusname($order_id) {
        
          $sql = mysql_query("SELECT last_name FROM user WHERE email = (SELECT user_id FROM order_table WHERE order_id='$order_id')");
          while($data = mysql_fetch_array($sql)){
              $name = $data[0];
          }
         return $name ; 
     }// End of getCusname
     
     
     private function getTotalAmount($order_id) {
        
          $total_amount = 0 ;
										
            $t_p_sql = mysql_query("SELECT * FROM orders_product WHERE order_id='$order_id'");
            while($t_p_data = mysql_fetch_array($t_p_sql))
            {
                    $t_p_id = $t_p_data['product_id'];
                    $t_p_qty = $t_p_data['quantity'];

                    $price_sql = mysql_query("SELECT * FROM product WHERE product_id='$t_p_id'");
                    while($price_data = mysql_fetch_array($price_sql))
                    {
                            $t_p_price = $price_data['sale_price'] - $price_data['discount'];	

                    }

                    $qty_price = $t_p_price * $t_p_qty ; 

                    $total_amount = $total_amount + $qty_price ; 
            }
            
            return $total_amount ; 
           
     }// End of getTotalAmount

	
} // End of class



?>