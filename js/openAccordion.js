// $(document).ready(function () {
//   location.hash && $(location.hash + '.collapse').collapse('show');
// });

function expandAccordionExt() {
	accordionNumber = window.location.hash;
	$(accordionNumber).collapse({
  toggle: true
})
	console.log(accordionNumber);
}