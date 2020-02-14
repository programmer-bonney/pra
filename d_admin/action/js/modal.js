
function addingCategories(){
	$(document).ready(function(){
		$("#addCate").removeAttr('onmouseover');
		$("#addCate").on('click', function(){
			var newCategory = $("#newCat").val();


			$.ajax({
				type : "Post",
				url  : 'includes/insertFiles/insertCategory.php',
				data :{
					newCategory : newCategory	
				},
				success : function(data){
							document.getElementById('notic').innerHTML = "<div class='alert alert-success alert-dismissible fade in' role='alert'><button class='close' data-dismiss='alert' aria-label='close'><span aria-hidden='true'> &times</span></button><div> " 
							+ data + " </div></div>";
							

					$("#catForm")[0].reset();
				}
			})
		})
	})
}


function product(){
	var ary = [];
 
 $(".productClass").click(function(){
 	//(".me").removeAttr('onmouseover');
 	var focusProduct = $(this).text();
 	document.getElementById('deleteP').value = focusProduct;
 })
 //console.log(1);
}

function deletes(){
	var nam = document.getElementById('deleteP').value;
	
	$.ajax({
		url : 'includes/deleteFiles/deleteProduct.php',
		type : "Post",
		data : {
			productSelected : nam
		},
		success : function(data){
			document.getElementById('note').innerHTML = "<div class='alert alert-success alert-dismissible fade in' role='alert'><button class='close' data-dismiss='alert' aria-label='close'><span aria-hidden='true'> &times</span></button><div> " 
					+ data + " </div></div>";
			$("#deleteForm")[0].reset();
		}
	})
	
}




function chooseProduct(){
	$("#searchBar").keyup(function(){
		var name = $("#searchBar").val();
		//console.log(name);
		$.ajax({
		url : 'includes/deleteFiles/searchDelete.php',
		type : "Post",
		data : {
			productSelected : name
		},
		success : function(data){
			//document.getElementById('note').innerHTML = "<div class='alert alert-success alert-dismissible fade in' role='alert'><button class='close' data-dismiss='alert' aria-label='close'><span aria-hidden='true'> &times</span></button><div> " 
			//		+ data + " </div></div>";
			//$("#deleteForm")[0].reset();
			document.getElementById('productShow').innerHTML = data;
		}
	})
		//console.log('yeea') ;
	})

}

