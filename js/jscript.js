//Проверка паролей на javascript
//	автор:Зарипов Юра
//	сайт:goldblog.com.ua

var min_length=6;//минимальная длина пароля
function passValid(form,pass1,pass12,submit)//проверка длины пароля
{
  PASS12=document.getElementById(pass12);//индикатор длины пароля
  PASS1count=document.forms[form].pass1.value.length;//количество символов в пароле
  MARG_LEFT= 10*PASS1count-100;//высчитываем смещение индикатора в зависимости от количества символов в пароле
  if(MARG_LEFT<0)//если индикатор не полностью выдвинут, тогда выдвигаем
  {
  PASS12.style.marginLeft=MARG_LEFT+"px";
  }
  if(MARG_LEFT>=0)//если индикатор полностью выдвинут, тогда не выдвигаем
  {
  	PASS12.style.marginLeft="0px";
  }
  //задаем цвет индикатора в зависимости от количества символов
  if(PASS1count<4){PASS12.style.background="#f00";}
  else if((PASS1count>=4) && (PASS1count<6)){PASS12.style.background="#FF9F00";}
  else if((PASS1count>=6) && (PASS1count<8)){PASS12.style.background="#CBFE01";}
  else if((PASS1count>=8)){PASS12.style.background="#0EFE01";}

}

function isRavno(form,pass1,pass2,pass22,submit)//сравниваем пароли
 {
 	PASS1=document.forms[form].pass1.value;//первый пароль
 	PASS1count=document.forms[form].pass1.value.length;//количество символов в 1 пароле
    PASS2=document.forms[form].pass2.value;//второй пароль
    PASS22=document.getElementById(pass22);//индикатор совпадения паролей
    SUBMIT=document.forms[form].submit; //кнопка отправки формы
    if(PASS1==PASS2)//если совпадают формируем индикатор совпадения паролей
    {

        PASS22.style.color="#558701";
    	PASS22.innerHTML="Пароли совпадают";

    	//если количество символов в пароле больше или равно минимальной длине, делаем кнопку отправки активной
    	if(PASS1count>=min_length);

    }
    else  //если не совпадают формируем индикатор совпадения паролей
    {

        PASS22.style.color="#D5172B";
    	PASS22.innerHTML="Паролі не совпадают";
    	// делаем кнопку отправки не активной
    }
 }

