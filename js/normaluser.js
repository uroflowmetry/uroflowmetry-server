/*FooTable Init*/
$(document).ready(function () {
	"use strict";

	/*Init FooTable*/
	$('#footable_1,#footable_3').footable();

	/*Editing FooTable*/

	var $modal = $('#editor-modal'),
	$editor = $('#editor'),
	$editorTitle = $('#editor-title'),
	ft = FooTable.init('#footable_2', {
		editing: {
			enabled: true,
			addRow: function(){
				$modal.removeData('row');
				$editor[0].reset();
				$editorTitle.text('Add a new Normal User');
				$modal.modal('show');
			},
			editRow: function(row){
				var values = row.val();
				$editor.find('#id').val(values.id);
				$editor.find('#username').val(values.username);
				$editor.find('#email').val(values.email);
                $editor.find('#fullname').val(values.fullname);
                // $editor.find('#userlevel').val(values.usrelevel);
				// $editor.find('#signupdate').val(values.signupdate);
				// $editor.find('#lastdate').val(values.lastdate);

				$modal.data('row', row);
				$editorTitle.text('Edit the ' + values.username);
				$modal.modal('show');
			},
			deleteRow: function(row){
				if (confirm('Are you sure you want to delete the row?')){
                    var values = row.val();
    				var id=values.id;
                    row.delete();
                    alert(id)
                    $.ajax({
                        url: "/dashboard/realtime",
                        type: "POST",
                        data:{
                            "_token": "{{ csrf_token() }}"
                        },
                        success:function(result){

                        }
                    });
				}
			}
		}
	}),
	uid = 10;

	$editor.on('submit', function(e){
		if (this.checkValidity && !this.checkValidity()) return;
		e.preventDefault();
		var row = $modal.data('row'),
			values = {
				id: $editor.find('#id').val(),
				username: $editor.find('#username').val(),
				email: $editor.find('#email').val(),
                fullname: $editor.find('#fullname').val(),
                // userlevel: $editor.find('#userlevel').val(),
				// signupdate: moment($editor.find('#signupdate').val(), 'YYYY-MM-DD'),
				// lastdate: moment($editor.find('#lastdate').val(), 'YYYY-MM-DD')
			};

		if (row instanceof FooTable.Row){
			row.val(values);
		} else {
			values.id = uid++;
			ft.rows.add(values);
		}
		$modal.modal('hide');
	});
});
