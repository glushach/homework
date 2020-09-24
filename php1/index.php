<?php

function getAmountMonthAndCostsBank($cost, $percent, $commission, $extraCost, $fixPay){

  $fullCost = $cost + $extraCost;
  $minMonth = $fullCost - $fixPay;

  $maxMounth = 0;
  $shotPercent = $percent * 0.01;
  $costsBank = 0;
  $mounth;
  $yourRate = 0;

  $Fix = 0;

  for($mounth = 1; 0<=$minMonth; $mounth++){

    $costsBank = round($minMonth * $shotPercent + $commission);
    
    $maxMounth = $costsBank + $minMonth;
    $minMonth = $maxMounth - $fixPay;
  
    $yourRate = $yourRate + $costsBank;
    
    $yourFullRate = $yourRate + $extraCost;
  }
  return "Ты за $mounth месяцев заплатишь $yourFullRate издержек по кредиту";
}
  echo getAmountMonthAndCostsBank(34499, 4, 500, 0, 5000); //банк HomoCredit
  echo "<br/>";
  echo getAmountMonthAndCostsBank(34499, 3, 1000, 0, 5000); //банк Softbank
  echo "<br/>";
  echo getAmountMonthAndCostsBank(34499, 2, 0, 6666, 5000); //банк StrawberryBank
  echo "<br/><br/>";
  echo "Тебе выгодно взять кредит от банка HomoCredit";
?>
