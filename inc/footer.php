<script src="js/vendor/bootstrap.js"></script>
<script src="js/main.js"></script>

<script>
    function delEmployee(id){
        let isDel = confirm("Voulez vous vraiment l'effacer ?");
        if (isDel){
            window.location.href = 'http://<?= $_SERVER['HTTP_HOST'] ?>/inc/del-user.php?id=' + id + '';
        }
    }
</script>

</body>
</html>