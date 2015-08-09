/*var keyCode = e.keyCode || e.which;
if (keyCode == 9) {
   e.preventDefault();
      insertAtCaret('txt', '\t')
}*/

$("textarea").keydown(function(e){
	if(e.keycode === 9){
		var start = this.selectionStart;
		var end = this.selectionEnd;

		var $this = $(this);
		var value = $this.val();

		$this.val(value.substring(0, start)
				+ "\t"
				+ value.substring(end));

		this.selectionStart = this.selectionEnd = start + 1;

		e.preventDefault();
	}
});
