<script src="<?= $js ."jquery-3.3.1.min.js"; ?>"></script>
<script src="<?= $js ."jquery-ui.min.js"; ?>"></script>
<script>
    var arr = <?php echo json_encode($table_result); ?>;
    var selected_value;
    $( "#autocomplete" ).autocomplete({
        source: arr
    });

    // $('#autocomplete').on('blur', function(){
    //     $('#myresult').val(
    //         $('#autocomplete').val()
    //     );
    // });
    </script>
<script src="<?= $js ."script.js"; ?>"></script>
</body>
</html>