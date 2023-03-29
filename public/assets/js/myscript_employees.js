$(document).ready(function(){
	$('#btnLoadE').click(function(){
		$.get("http://localhost:3000/api/employees").done(function (data){
			console.table(data);

			$.each(data, function(key,product){
				$('#tblEmployees2 > tbody:last-child').append(
					'<tr>'+
					'<td>'+ product.cve_emp + '</td>' +
					'<td>'+ product.first_name + '</td>' +
					'<td>'+ product.last_name + '</td>' +
					'<td>'+ product.email + '</td>' +
					'<td>'+ product.gender + '</td>' +
					'<td>'+ product.salary + '</td>' +
					'<td>'+ product.department + '</td>' +
					'</tr>'
					
				);
			})
		})
	});
	$('#btnLoadEmployees').click(function () {
        
        loadEmployees();
    });

    function loadEmployees ()
    {	

        $('#tblEmployees').DataTable( {
        	"ajax": {
	            "url": "http://localhost:3000/api/employees",
	            "dataSrc": ""
	        },
            "columns": [
                { "data": "cve_emp" },
                { "data": "first_name" },
                { "data": "last_name" },
                { "data": "email" },
                { "data": "gender" },
                { "data": "salary" },
                { "data": "department" }
            ],
            
        } );

    }



	$('#btnSendEmployee').click(function () {
        var emp_data = {
            first_name: $('#first_name').val(),
            last_name: $('#last_name').val(),
            email: $('#email').val(),
            gender: $('#gender').val(),
            birth_date: $('#birth_date').val(),
            hire_date: $('#hire_date').val(),
            salary: $('#salary').val(),
            department: $('#department').val() 

        };
        $.ajax({
            url : 'http://localhost:8080/api/employee/',        
            type : 'POST',
            dataType : 'json',
            contentType: 'application/json',
            data : JSON.stringify(emp_data),
            success : function(json) {
                alert(json);
                loadEmployees();
            },
            error : function(xhr, status) {
                alert('Disculpe, existió un problema');
            },
            complete : function(xhr, status) {
                alert('Petición realizada');
            }
        });    
    });

    

    
});



    
