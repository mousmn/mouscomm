var keyCode = e.keyCode || e.which;
if (keyCode == 9) {
   e.preventDefault();
      insertAtCaret('txt', '\t')
}
