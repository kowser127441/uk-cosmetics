<?php

include ('./smsClass.php');

class Checkout extends SMS{
	
	private $user_id ; 
	private $date_time;
	private $earn_point ; 
	private $buy_point ;
	private $address;
	private $payment;
	private $cart;
    private $phone_no ; 
	
	private $order_id;
	
	public function __counstruct(){
		
		session_start();
		include('connection.php');
		
		
		
		
		
	} // End of Construct
	
	
	
	public function checkout($address,$payment){
		
		
		$this->user_id = $_SESSION[user_access];
		$this->date_time = $date = date('Y-m-d'); 
		
		$this->address = $address;
		$this->payment = $payment ; 
		
        $this->phone_no = '88'.self::getPhone();
         //echo $this->phone_no;
         //die();
    	
        
		// get product buy point
		$this->buy_point=self::getBuyPoint();
		
		// Get user Earn point
			$user_sql = mysql_query("SELECT earn_point FROM user WHERE email ='$this->user_id'");
			while($user_p_data=mysql_fetch_array($user_sql))
			{
				$this->earn_point=$user_p_data['earn_point'];
			}
		
		
		if($this->payment=='point'){
			
		
			// Checking both point 
			if($this->earn_point > $this->buy_point)
			{
				
				$query="INSERT INTO order_table (user_id, date , shipping_address,payment_type,buy_point) VALUES 
		   		 ('$this->user_id','$this->date_time','$this->address','$this->payment','$this->buy_point')";
				 
				 if(!mysql_query($query))
				 {
						$_SESSION['error']; 
						//die();
				 }
				 else
				 {
					 $this->order_id = mysql_insert_id();
					 
					 // Update user earn Point
					 mysql_query("UPDATE user SET earn_point=earn_point-'$this->buy_point'  WHERE email='$this->user_id'");
					 
					
					if(self::insertProductTable() == true)
					{
						$_SESSION['success']='Successful';	
                        $send_sms = new SMS();
                         $send_sms->sendSms($this->phone_no , 'new', $this->order_id);
					}
						 
				 }
				
			}
			
			else // when points not matched
			{
				$_SESSION['error']= 'You do not have enough points to buy this product !!'.$this->payment; 
			}
			
		}
		
		elseif($this->payment=='cash') { //when not by CASH
		
		$query="INSERT INTO order_table (user_id, date , shipping_address,payment_type) VALUES 
		   		 ('$this->user_id','$this->date_time','$this->address','$this->payment')";
				 
				 if(!mysql_query($query))
				 {
						$_SESSION['error']= mysql_error(); 
						//die();
				 }
				 else
				 {
					 $this->order_id= mysql_insert_id();
					 
					  // Update user earn Point
					 mysql_query("UPDATE user SET earn_point=earn_point+'$this->earn_point' WHERE email='$this->user_id'");
					 
					
					if(self::insertProductTable() == true)
					{
						$_SESSION['success']='Successful';	
                        $send_sms = new SMS();
                         $send_sms->sendSms($this->phone_no , 'new', $this->order_id);
					}
						 
				 }
		
		
		}
		
		
		
		
		
	
	} // End of Checkout
	
	
	private function getBuyPoint(){
			
			$buy_point = 0 ; 
			
		$max=count($_SESSION['cart']);
	    for($i=0;$i<$max;$i++){
			$pid=$_SESSION['cart'][$i]['productid'];
			$q=$_SESSION['cart'][$i]['qty'];
			
			$buy_point_sql=mysql_query("SELECT buy_point FROM product WHERE product_id='$pid'");
			while($b_p_data=mysql_fetch_array($buy_point_sql))
			{
				$buy_point = $buy_point+$b_p_data['buy_point']*$q;	
			}
			
			
		}
		
		return $buy_point;
			
			
	} // End of getBuyPoint
	
	private function insertProductTable(){
		
				$ok = 0 ; 
				 $max=count($_SESSION['cart']);
				for($i=0;$i<$max;$i++){
					$pid=$_SESSION['cart'][$i]['productid'];
					$q=$_SESSION['cart'][$i]['qty'];
					$insert="INSERT INTO orders_product (order_id,product_id,quantity) VALUES 
					('$this->order_id','$pid','$q')";
					
					if(!mysql_query($insert))
					{
						$ok = false ;	
					}
					else
					{
						$ok = true ;
					}
					
				}
				
				return $ok;
		
	} // end of insertProductTable
    
    // EMAIL FUNCTION
    public function email($to,$subject,$message,$headers)

    {

        mail($to,$subject,$message,$headers);

    }
    
    
       private function getPhone(){
            $email = $_SESSION['user_email'];
            $sql = mysql_query("SELECT mobile FROM user WHERE email='$email'");
            while($data=  mysql_fetch_array($sql)){
                $mobile = $data[0];
            }
            return $mobile ; 
        } // End of get Phone 
	
	
	
	
	
} // END OF CLASS



?>