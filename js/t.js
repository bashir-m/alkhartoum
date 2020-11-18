/*
 edited by :Osman Mohammed Ahmed 
 Email :kabtod@gmail.com 
*/
document.addEventListener('DOMContentLoaded',function(){
        $("#reg1").click(function(){
		$(".reg-2:visible").slideToggle(1000);
		$(".reg-1:hidden").slideToggle(1000);

			
		}); 				//show section id=reg: 
		
		$("#reg2").click(function(){
		$(".reg-1:visible").slideToggle(1000);
		$(".reg-2:hidden").slideToggle(1000);

			
		}); 				//show section id=reg:
		$("#drop").click(function(){
		var html=""; 							//html variable
		var x=$("#dept").val();					//get DropDownList value To (x variable == department Code)
		var req;			// Request variable
		var i=1;
		
		req=new XMLHttpRequest();					
		req.open("GET", 'http://localhost/basheerAPI/public/api/student/'+x,true);	//Call url from server - push x value 
		req.setRequestHeader("authorization", "Bearer z71gwN8qy7G7uy9xGIEVtomyDxt8f1ZHz03WGyjjvpBfKk6uRAXHPNQA8jkj"); //token header 
		req.send();								//send request to server 
		html +="<table class='table table-bordered table-hover'><thead class='btn-dark'><tr><th>م</th><th>رقم الاستمارة</th><th>اسم الطالب</th><th>نوع القبول</th><th>القسم</th><th>حالة التسجيل</th><th>اجراء</th></tr> </thead><tbody><tr>";
		req.onload=function(data){
			json=JSON.parse(req.responseText); //Parse Response Data  to Json 
			json.forEach(function(val) {		//loop into json data 
				var keys = Object.keys(val);
				html +=  "<td>" +  i++ + "</td>";
				//keys.forEach(function(key) {
					
					
					html +=  "<td>" +  val['stdid'] + "</td>"; //put data into html table form 
					html +=  "<td>" +  val['std_Name'] + "</td>"; //put data into html table form 
					html +=  "<td>" +  val['typeaddmission'] + "</td>"; //put data into html table form 
					html +=  "<td>" +  val['department'] + "</td>"; //put data into html table form 
					html +=  "<td>" +  val['regstatus'] + "</td>"; //put data into html table form 
				//});
				html += "<td><a href='insert.php?id="+val.id+"&stdid="+val.stdid+"&name="+val.std_Name+"&dept="+val.department+"'><button class='btn btn-block btn-info ' type='button' id='tt'>أضغط هنا لتسجيل الطالب</button></a></td></tr>";
			});			
		html+='</tbody></table>';
			$('#list').html(html);         // send html  to <div> have class="list"
		}		
	});
});
   
 
   