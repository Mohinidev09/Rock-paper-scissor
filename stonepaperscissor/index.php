<html>
    <head>
        <title>
            STONE PAPER SCISSOR
        </title>
        <style>
            body{
                background-color: yellow;
                color: black;
            }
            h1{
                color: blue;
            }
             h4{
                color: blue;
            }
            ul{
                color: blue;
            }
            
        </style>
    </head>  
    <body>
        <h1> STONE PAPER SCISSOR</h1><br>
        <img src="img1/rock-paper-scissors-neon-icons.jpg" alt="rockpaperscissor">
        <br>
        <br>
        <h4>RULES</h4>
        <ul>
            <li>Paper beats Rock<br></li>
             <li>Rock beats Scissor<br></li>
              <li>Scissor beats Paper<br></li>
        </ul>
    </body>
    </html>
<?php

class Match
{
   
 public function input(&$player)
    {
      for($n=1;$n<5;$n++)
 { echo "player".$n;
          echo "=";
      $player[$n]= rand(1,3);
       $k=$player[$n];
        if($k==1)
        {
            echo "Rock";
        }
        else if($k==2)
        {
            echo "Paper";
        }
        else
        {
            echo "scissor";
        }
      
     echo "</br></br>";  
 }
            
    }
      public function check($a=NULL,$b=Null)
      {
          $p=$a;
          $q=$b;
          
          
          if($p==1&&$q==2)
          {
              if($a==$q)
              {
                  return 1;
              }
               else 
               {
                    return 0;
               }
 
          }
          elseif ($p==1&&$q==3)
          {
              
             if($a==$p)
              {
                  return 1;
              }
              else 
              {
                  return 0;
              }
            }
         elseif ($p==2&&$q==1) 
           {
             if($a==$p)
              {
                  return 1;
              }
               else 
              {
                    return 0;
               }
          
      
             }
          elseif ($p==2&&$q==3)
           {
                  
              if($a==$q)
              {
                  return 1;
              }
               else
                {
                    return 0;
                }
              
          }
          elseif ($p==3&&$q==1)
            {
              
              
              if($a==$q)
              {
                  return 1;
              }
               else 
              {
                    return 0;
              }
          
         }
         elseif ($p==3&&$q==2)
         {
          
          
          if($a==$p)
              {
                  return 1;
              }
                else 
              {
                    return 0;
               }
      
          }
         else {
            return 0;
        
            }
      }       
    public function player1output(&$player,&$p1)
    {
        for($i=1;$i<5;$i++)
        {
             if($i==1)
            {
                 echo " player1's total score against player".$i." = NIL</br>";
                 continue;
                
            }
            
            $res1=$this->check($player[1], $player[$i]);
            $p1[$i]=$p1[$i]+$res1;
            echo "  player1's total score against player".$i." = ".$p1[$i]."<br>";
          
        }
        echo "</br>"; 
    }
    public function player2output(&$player,&$p2)
    {
         
        for($i=1;$i<5;$i++)
        {
            if($i==2)
            {
                 echo " player2's total score against player".$i." = NIL</br>";
                 continue;
                
            }
            $res2= $this->check($player[2],$player[$i]);
               $p2[$i]=$p2[$i]+$res2;
            echo " player2's total score against player".$i." = ".$p2[$i]."</br>";
            
        }
           echo "</br>"; 
    }
      public  function player3output(&$player,&$p3)
    {
           
          
        for($i=1;$i<5;$i++)
        {
            if($i==3)
            {
                 echo " player3's total score against player".$i." = NIL</br>";
                continue;
            }
            $res3= $this->check($player[3],$player[$i]);
               $p3[$i]=$p3[$i]+$res3;
            echo "  player3's total score against player".$i." = ".$p3[$i]."<br>";
        }
          echo "</br>"; 
    }
    public function player4output(&$player,&$p4)
    {
         
        for($i=1;$i<5;$i++)
        {
            if($i==4)
            {
                 echo " player4's total score against player".$i." = NIL</br>";
                continue;
            }
            $res4= $this->check($player[4],$player[$i]);
               $p4[$i]=$p4[$i]+$res4;
            echo "  player4's total score against player".$i." = ".$p4[$i]."<br>";
        }
          echo "</br>"; 
    }
  
}

 $playername=array();
 $x=array(0,0,0,0,0);
 $b=array(0,0,0,0,0);
 $c=array(0,0,0,0,0);
 $d=array(0,0,0,0,0);
 

 for($s=1;$s<=50;$s++)
 {
     echo "ITERATION".$s."<br>";
$match1=new Match();
$match1->input($playername);
$match1->player1output($playername,$x);
$match1->player2output($playername,$b);
$match1->player3output($playername,$c);
$match1->player4output($playername,$d);
 }
 ?>


 