<html>
<body>

<!-- POST 요청 처리 -->
Welcome <?php echo $_POST["name"]; ?>! <br />
Your email address is <?php echo $_POST["email"]; ?> 

<!-- GET 요청 처리 -->
<!-- Welcome <?php echo $_GET["name"]; ?>! <br />
Your email address is <?php echo $_GET["email"]; ?>  -->

<!-- 요청 처리 (GET, POST 둘다 처리) -->
<!-- Welcome <?php echo $_REQUEST["name"]; ?>! <br />
Your email address is <?php echo $_REQUEST["email"]; ?> -->

</body>
</html> 