<?php
include "connect.php";
$connection=connect();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF8">
    <meta charset="UTF-8">
    <meta http-equiv="Refresh" content="30">
    <title>Notifications</title>
    <link rel="stylesheet" href="css/notification_list.css">
</head>
<body>
<div class="Background">
    <div class="system">
        <img src="img/new.jpg" alt="bope">
    </div>
    <div class="heading">
        <p>නිවේදන</p>
    </div><!--Heading-->

    <div class="Details">
        <?php
        $query = "SELECT section,letter_id,date FROM notification WHERE unread=1 ORDER BY date DESC LIMIT 50";
        mysqli_set_charset($connection, 'utf8');
        $result=mysqli_query($connection,$query);
        ?>
        <table border="=1" cellpadding="10"  width="100%">
            <tbody>

            <?php if ($result): ?>
                <?php while ($row = mysqli_fetch_array($result)): ?>
                    <tr>
                        <td>
                            <a href="resend.php?letter_id=<?php echo $row['letter_id']; ?>"><?php echo $row['section'] . " අංශයට යවන ලඳ " . $row['letter_id'] . " අනු අංකය සහිත ලිපියෙහි වරදක් ඇත."; ?></a>
                        </td>
                        <td><?php echo $row['date']; ?></td>
                    </tr>
                <?php endwhile; ?>
            <?php endif; ?>

            </tbody>
        </table>
    </div><!--Details-->
    <br><br>
</div><!--Background-->
</body>
</html>


