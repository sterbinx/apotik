
function initSelect2(obj,url,param) {
	$(obj).select2({
        placeholder: 'Pilih Salah Satu',
        ajax: {
          	url: url,
          	dataType: 'json',
          	processResults: function (data) {
	            return {
	              	results:  $.map(data, function (item) {
	                	return {
	                        text: item.text,
	                        id: item.id
	                    }
	                })
	            };
          },
          cache: true
        }
    });
}

$('.datepicker').datepicker({
	autoclose: true,
	format: "dd/mm/yyyy",
	orientation: "bottom"
});
