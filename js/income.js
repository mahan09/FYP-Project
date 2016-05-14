var result =["very low, you should be living with your parents in order to save accomodation and travelling cost. Make sure you sign up for 16 - 25 rail card for travelling discount and open student bank account and do not spend your student loans straight away and stay away from applying for credit cards","Low, however you can still manage your budget and money if you live with your parents and apply for all students discount options which are avaliable.","decent You should be living with your parents, if not then your student accomodation should not be very expensive. Watch out on your spendings, do not buy uneccesary stuffs which are not valuable or useful to you","good you can apply for credit cards if you wish, however make sure plan when to pay back the money in order to stay away from interest. Apply for all students discount options which are avaliable to you and do not do shopping or buying from expensive places","Stable  however you should do your shopping from cheaper places and you do not require to apply for any credit cards or bursaries. You can live or without your parents. You can visit social places with your friends but not too much and ensure you apply for all students discounts which are avaliable to you.","Very good, you can live without your parents and apply for a good student accomodation near your University. You can do shopping in wide range of places and go out with your friends many times. However, make sure your monthly expense doesnt go above £200 otherwise it will be dangerious","Excellent, you can do almost anything you desire such as applying for credit cards or buy gifts or presents for yourself. However make sure you go to cheap places not very expensive ones. It can be very temptating when you are financially stable, however make sure you check how much money you have in your bank account every time and ensure your spending does not increase above £400 each month"];

var mainloan=["400-600","600-1000","1000-1300","1300-1600","1600-1900","1900-2600","2600-3000"];

var maingrant=["200-500","500-900","900-1200","1200-1500","1500-1900","1900-2500","2500-3000"];

var income= ["100-150", "150-200", "200-250","250-300","300-350","350-400","400-450"];

var expense= ["100-200", "200-300", "300-400","400-500","500-600","600-700","700-800"];

var accomodation= ["Living with parent", "Living with parent", "Living with parent","Student Accomodation","Student Accomodation","Student Accomodation","Student Accomodation"];









/* This function gets the information entered in the dropdown into a variable*/
function search()
{
             var ChooseMainLoan = document.getElementById("MainLoan").value;
             var ChooseMainGrant = document.getElementById("MainGrant").value;
             var ChooseIncome = document.getElementById("IncomeList").value;
             var ChooseExpense = document.getElementById("MonthlyExpense").value;
             var ChooseAcc = document.getElementById("studentacm").value;
            
           

             


/* here it displays what you entered into the dropdown as a list at the botton on the page*/	

	
document.body.innerHTML += '</br>';

	
        for(i=0;i<10;i++)
/* This if statment gets what is entered in the choose category and views the matching job*/ 
{
		if((ChooseMainGrant===maingrant[i]))
{
             
      
       document.getElementById("sample").innerHTML+=("<h3>Your Financial Status is - "+result[i]+"</h3> <br />");
}
}


{
		if((ChooseMainLoan===mainloan[i]))
{
             
      
       document.getElementById("sample").innerHTML+=("<h3>Your Financial Status is - "+result[i]+"</h3> <br />");
}
}


{
		if((ChooseIncome===income[i]))
{
             
      
       document.getElementById("sample").innerHTML+=("<h3>Your Financial Status is - "+result[i]+"</h3> <br />");
}
}

{
		if((ChooseExpense===expense[i]))
{
             
      
       document.getElementById("sample").innerHTML+=("<h3>Your Financial Status is - "+result[i]+"</h3> <br />");
}
}




}
/* everything is executed when you press the button*/
	var btn = document.getElementById("submit");
	btn.addEventListener("click",search,false);
 