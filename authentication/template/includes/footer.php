<script src="<?= $js ."jquery-3.3.1.min.js"; ?>"></script>
<script src="<?= $js ."jquery-ui.min.js"; ?>"></script>
<script>
    var arr = <?php echo json_encode($table_result); ?>;
    console.log(arr[1]); 
    $( "#autocomplete" ).autocomplete({
        source: arr
    });
    </script>
<script src="<?= $js ."script.js"; ?>"></script>
</body>
</html>