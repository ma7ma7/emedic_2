<script src="<?= $js ."jquery-3.3.1.min.js"; ?>"></script>
<script src="<?= $js ."jquery-ui.min.js"; ?>"></script>
<script>
var availableTags = [
	"ActionScript",
	"AppleScript",
	"Asp",
	"BASIC",
	"C",
	"C++",
	"Clojure",
	"COBOL",
	"ColdFusion",
	"Erlang",
	"Fortran",
	"Groovy",
	"Haskell",
	"Java",
	"JavaScript",
	"Lisp",
	"Perl",
	"PHP",
	"Python",
	"Ruby",
	"Scala",
	"Scheme"
];
$( "#autocomplete" ).autocomplete({
	source: availableTags
});
</script>
<script src="<?= $js ."script.js"; ?>"></script>
</body>
</html>