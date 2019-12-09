/*FooTable Init*/
$(function () {
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
				$editorTitle.text('Add a new App User');
				$modal.modal('show');
			},
			editRow: function(row){
				var values = row.val();
				$editor.find('#id').val(values.id);
				$editor.find('#username').val(values.username);
				$editor.find('#fullname').val(values.fullname);
                $editor.find('#unitid').val(values.unitid);
                $editor.find('#lganame').val(values.lganame);
                $editor.find('#wardname').val(values.wardname);
                $editor.find('#stationname').val(values.stationname);
				$editor.find('#signupdate').val(values.signupdate);
				$editor.find('#lastdate').val(values.lastdate);

				$modal.data('row', row);
				$editorTitle.text('Edit the ' + values.username);
				$modal.modal('show');
			},
			deleteRow: function(row){
				if (confirm('Are you sure you want to delete the row?')){
					row.delete();
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
                fullname: $editor.find('#fullname').val(),
                unitid: $editor.find('#unitid').val(),
                lganame: $editor.find('#lganame').val(),
                wardname: $editor.find('#wardname').val(),
                stationname: $editor.find('#stationname').val(),
				signupdate: moment($editor.find('#signupdate').val(), 'YYYY-MM-DD'),
				lastdate: moment($editor.find('#lastdate').val(), 'YYYY-MM-DD')
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
