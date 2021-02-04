<script src="js/notify.min.js"></script>
<script src="js/main.js"></script>
<script>
    <?php if (isset($_SESSION['flash'])){ ?>
        //alert('<?//= $_SESSION['flash']['msg'] ?>//');
        $.notify("<?= $_SESSION['flash']['msg'] ?>", "<?= $_SESSION['flash']['type'] ?>");
    <?php unset($_SESSION['flash']); } ?>
</script>

</body>
</html>