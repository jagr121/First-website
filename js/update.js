$("#send").on("click", function() {
	var name = $("#name").val().trim();
	var fullname = $("#fullname").val().trim();
	var area = $("#area").val().trim();
	var population = $("#population").val().trim();

	if(name == "")	{
		$("#errorMess").text("Введите название страны");
		return false;
	} else if (area == "")	{
		$("#errorMess").text("Введите площадь");
		return false;
	} else if (population == "")	{
		$("#errorMess").text("Введите численность населения");
		return false;
	}

	$("errorMess").text("");

	$.ajax({
		url: 'ajax/input.php',
		type: 'POST',
		cache: false,
		data: { 'name': name, 'fullname': fullname, 'area': area, 'population': population},
		dataType: 'html',
		beforeSend: function()
		{
			$("#send").prop("disabled", true);
		},
		success: function(data)
		{
			if (!data){
				alert ("Были ошибки, сообщение не отправлено");
			}
			else {
				$("#databaseForm").trigger("reset");
			}
				$("#send").prop("disabled", false);
		}
	});
});
