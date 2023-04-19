<script>
    logoutuser('../server/logout.php',render)

    function render(data){
        location.href='./index.php'
    }
</script>