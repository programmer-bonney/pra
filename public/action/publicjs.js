
function payMethod(){
			var meth = $("#method").val();

			if(meth == 'Orange Money'){
				$("#visa").hide();
				$("#orange").show();
			}else{
				$("#visa").show();
				$("#orange").hide();
			}
		}
		

		 function curren(){
		 	var currt = $("#currt").val();
			var rate = $("#rate").val();
			 var prz = $("#mainPrice1").val();
			 var qty = $("#quantity").val();
			var bill = '';

			// var me = $("#showpp").text();
			// console.log(me);

			if(currt == 'USD'){
				var bill = qty * prz;
				document.getElementById('showpp').innerHTML='Your Total Bill is ' +  bill + ' USD';
				document.getElementById('fp').value= bill + ' USD';
				//console.log(bill);
			}
			else if(currt == 'LRD'){
				var bill = qty * parseInt(prz) * rate;
				document.getElementById('showpp').innerHTML='Your Total Bill is ' +  bill + '  LD';
				document.getElementById('fp').value= bill + ' LRD';
			}else{
				alert('PLEASE SELECT A METHOD');
			}
		  }

		

		 function curren1(){
		 	var currt = $("#currt1").val();
			var rate = $("#rate").val();
			 var prz = $("#price1").val();
			 var qty = $("#quantity1").val();
			var bill = '';

			// var me = $("#showpp").text();
			// console.log(me);

			if(currt == 'USD'){
				var bill = qty * prz;
				document.getElementById('showpp1').innerHTML='Your Total Bill is ' +  bill + ' USD';
				//document.getElementById('fp').value= bill + ' USD';
				//console.log(bill);
			}
			else if(currt == 'LRD'){
				var bill = qty * parseInt(prz) * rate;
				document.getElementById('showpp1').innerHTML='Your Total Bill is ' +  bill + '  LD';
				//document.getElementById('fp').value= bill + ' LRD';
			}else{
				alert('PLEASE SELECT A METHOD');
			}
		  }