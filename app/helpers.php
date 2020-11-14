<?php 
        
    if(! function_exists('page_title'))
    {
        function page_title($title)
        {
            $base_title = 'MIMI';

            if($title === '')
            {
                return $base_title ;
            }else {
                return $title .' | ' .$base_title;
            }
        }
    }

	if(! function_exists('total'))
    {
        function total($cart)
        {
            $prix =$cart->prix;
            $qte = $cart->qty;
            $total = $prix*$qte;

            return $total;
        }
    }
