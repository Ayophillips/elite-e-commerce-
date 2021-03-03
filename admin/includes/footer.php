<!-- footer -->

	<div class="footer_agile_inner_info_w3l">
		
		<p class="copy-right">&copy 2017 Elite shoppy. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
	</div>

<!-- //footer -->
<script>
function updateSizes(){
	alert("update Sizes");
}


	function get_child_options(){
		var parentID = jQuery('#parent').val();
		jQuery.ajax({
			url: '/elite/admin/parsers/child_categories.php',
			type: 'POST',
			data: {parentID : parentID},
			success: function(data){
				jQuery('#child').html(data);
			},
			error: function(){alert("Something went wrong with the child options.")},
		});
	}
	jQuery('select[name="parent"]').change(get_child_options);
</script>