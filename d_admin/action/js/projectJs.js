function dashboard(){
document.getElementById('menuHeading').innerHTML= 'DASHBOARD';
// $("body").load('/capstoneProject/d_admin/index.php');
//console.log(232);
}

//----------------------------------------------------------------------------------------------------------//

function order(){
document.getElementById('menuHeading').innerHTML= 'ORDER';

var xhr = new XMLHttpRequest();

	xhr.onreadystatechange = function(){
		if (xhr.readyState < 4) {
 			document.getElementById('contentBody').innerHTML = '<img class="img img-circle" src="images/contentImages/loader1.gif" style="width:30%; margin-left:300px;">'
 		}
		else if (xhr.readyState == 4 && xhr.status == 200){
			document.getElementById('contentBody').innerHTML = xhr.responseText;
		}
	}

	xhr.open('Get', 'admin/pages/admin_order.php', true);

	xhr.send(null);
}
//----------------------------------------------------------------------------------------------------------//

function cProduct(){
// alert('Hello i m create');
document.getElementById('menuHeading').innerHTML= 'CREATE PRODUCT';

var xhr = new XMLHttpRequest();

	xhr.onreadystatechange = function(){
		if (xhr.readyState < 4) {
 			document.getElementById('contentBody').innerHTML = '<img class="img img-circle" src="images/contentImages/loader1.gif" style="width:30%; margin-left:300px;">'
 		}
		else if (xhr.readyState == 4 && xhr.status == 200){
			document.getElementById('contentBody').innerHTML = xhr.responseText;
		}
	}

	xhr.open('Get', 'admin/pages/admin_create.php', true);

	xhr.send(null);
}

//----------------------------------------------------------------------------------------------------------//

function edit(){
// alert('Hello i m edit')	;
document.getElementById('menuHeading').innerHTML= 'EDIT';

var xhr = new XMLHttpRequest();

	xhr.onreadystatechange = function(){
		if (xhr.readyState < 4) {
 			document.getElementById('contentBody').innerHTML = '<img class="img img-circle" src="images/contentImages/loader1.gif" style="width:30%; margin-left:300px;">'
 		}
		else if (xhr.readyState == 4 && xhr.status == 200){
			document.getElementById('contentBody').innerHTML = xhr.responseText;
		}
	}

	xhr.open('Get', 'admin/pages/admin_edit.php', true);

	xhr.send(null);
}

//----------------------------------------------------------------------------------------------------------//

function setting(){
// alert('Hello i m setting');
document.getElementById('menuHeading').innerHTML= 'SETTING';

var xhr = new XMLHttpRequest();

	xhr.onreadystatechange = function(){
		if (xhr.readyState < 4) {
 			document.getElementById('contentBody').innerHTML = '<img class="img img-circle" src="images/contentImages/loader1.gif" style="width:30%; margin-left:300px;">'
 		}
		else if (xhr.readyState == 4 && xhr.status == 200){
			document.getElementById('contentBody').innerHTML = xhr.responseText;
		}
	}

	xhr.open('Get', 'admin/pages/admin_setting.php', true);

	xhr.send(null);
}

//----------------------------------------------------------------------------------------------------------//


function crm(){
// alert('Hello i m setting');
document.getElementById('menuHeading').innerHTML= 'customer_care';

var xhr = new XMLHttpRequest();

	xhr.onreadystatechange = function(){
		if (xhr.readyState < 4) {
 			document.getElementById('contentBody').innerHTML = '<img class="img img-circle" src="images/contentImages/loader1.gif" style="width:30%; margin-left:300px;">'
 		}
		else if (xhr.readyState == 4 && xhr.status == 200){
			document.getElementById('contentBody').innerHTML = xhr.responseText;
		}
	}

	xhr.open('Get', 'admin/pages/customer_care.php', true);

	xhr.send(null);
}

//----------------------------------------------------------------------------------------------------------//
//----------------------------------------------------------------------------------------------------------//
//----------------------------------------------------------------------------------------------------------//



function addproduct(){
	$("#saveProduct").removeAttr('onmouseover');
	$("#saveProduct").click(function(){
		  var category = $("#category").val();
		  var p_name = $("#productName").val();
		 var p_price = $("#productPrice").val();
		 var p_quantity = $("#productQuantity").val();
		 var p_description = $("#productDescription").val();
		var files = $("#productImage")[0].files[0];


		// if(category=="Select Category" || p_name == "" || p_price == "" 
		// 	|| p_quantity == "" || p_description == "" || p_image == ""){
		//  //alert ('please fill in all field.')
		// }else{

		//var frm = document.getElementById('productForm');
		var formdata = new FormData();
		formdata.append("cat", category);
		formdata.append("name", p_name);
		formdata.append("prc", p_price);
		formdata.append("qty", p_quantity);
		formdata.append("description", p_description);
		formdata.append("file", files);
			$.ajax({
				type: 'post', 
				url: 'includes/insertFiles/insertProduct.php',
				data : formdata,
				processData: false,
				cache: false,
   				contentType: false,
   				// beforeSend:function(){
   				// 	$("#preview").attr('src', files);
   				// },
				success: function(data){
					document.getElementById('notification1').style.visibility = 'visible'
					document.getElementById('notification1').innerHTML = "<div class='alert alert-success alert-dismissible fade in' role='alert'><button class='close' data-dismiss='alert' aria-label='close'><span aria-hidden='true'> &times</span></button><div> " 
					+ data + " </div></div>";
					 //console.log(data);

					$("#productForm")[0].reset();
				}
			})
			//}
	})
}


//----------------------------------------------------------------------------------------------------------//
//------------------------  MAILING SECTION START----------------------------------------------------------------------------------//
//----------------------------------------------------------------------------------------------------------//

function sms(){
	$("#sentmail").removeAttr('onmouseover');
	$("#sentmail").on('click', function(){
		var receiver  = $("#rec").val();
		var sender  = $("#sen").val()
		var subject  = $("#sub").val();
		var body  = $("#bod").val();

		$.ajax({
			url: "/capstoneProject/d_admin/includes/contentFiles/sms.php",
			type : "POST",
			data :{
				receiver : receiver,
				sender : sender,
				subject : subject,
				body : body
			},

			success : function(data){
				document.getElementById('shosho').innerHTML=data;
				$("#mailform")[0].reset();
			}
		})
	})
}







//----------------------------------------------------------------------------------------------------------//
//----------------------------------------------------------------------------------------------------------//
//----------------------------------------------------------------------------------------------------------//
