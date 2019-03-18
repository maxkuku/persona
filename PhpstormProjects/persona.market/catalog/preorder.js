$(document).ready(function() {
	$('#button-preorder').click(function() {
		$.ajax({
			url: 'index.php?route=extension/module/preorder',
			type: 'post',
			dataType: 'json',
			data: $("#form-product-alert").serialize(),
			success: function(json) {
				$('.alert-success, .alert-danger').remove();
					
				if (json['error']) {
					$('#form-product-alert').before('<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '</div>');
				}

				if (json['success']) {
					$('#form-product-alert').before('<div class="alert alert-success"><i class="fa fa-check-circle"></i> ' + json['success'] + '</div>');
					$('#form-product-alert').get(0).reset();

					setTimeout(function () {
						$('#preorder-box').modal('hide');
					}, 1500);
				}
			}
		});
	});
});

function addPreOrder(module_id, product_id) {
	$.ajax({
		url: 'index.php?route=extension/module/preorder/add&product_id=' + product_id,
		type: 'post',
		dataType: 'json',
		data: $('#' + module_id + 'product' + product_id + ' input[type=\'radio\']:checked, #' + module_id + 'product' + product_id + ' input[type=\'checkbox\']:checked, #' + module_id + 'product' + product_id + ' select'),
		success: function(json) {
			$('.alert-success, .alert-danger').remove();

			if (json['name']) {
				
				if (json['option']) {
					$.each(json['option'], function(index, value) {
						$('#preorder_option').append('<input type="hidden" name="preorder_option[' + index + ']" value="' + value + '">');
					}); 
				}
				
				$('input[name=\'preorder_product_id\']').val(product_id);
				$('#preorder_name').html(json['name']);
				$("#preorder-box").modal('show');
			}
		}
	});
}

function addPreOrderProduct() {
	$.ajax({
		url: 'index.php?route=extension/module/preorder/add',
		type: 'post',
		dataType: 'json',
		data: $('#product input[type=\'radio\']:checked, #product input[type=\'checkbox\']:checked, #product select, #product input[type=\'hidden\']'),
		success: function(json) {
			$('.alert-success, .alert-danger').remove();

			if (json['name']) {
				
				if (json['option']) {
					$.each(json['option'], function(index, value) {
						$('#preorder_option').append('<input type="hidden" name="preorder_option[' + index + ']" value="' + value + '">');
					}); 
				}
				
				$('input[name=\'preorder_product_id\']').val($('input[name=\'product_id\']').val());
				$('#preorder_name').html(json['name']);
				$("#preorder-box").modal('show');
			}
		}
	});
}