<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>නව පණිවිඩය</title>
    <link rel="stylesheet" href="css/sendDataSheet.css" type="text/css">
    <style>
        input,select{
            font-size:100%; margin-left:20px; width:290px; margin-bottom:10px;
        }
        label{
            width: 160px; display: block; float:left; clear:left;
        }
        button{
            font-size:100%; margin-left:20px; margin-bottom:10px; margin-top:10px;
        }
    </style>
</head>
<body>
<div id="whole">
    <div  id = "titlebar" style = "color:white">
        නව පණිවිඩය
    </div>
    <div  id = "body" style="color: black">
        <form action="post">
            <fieldset>
                <label for = "cmbSelect">අංශය තේරීම :
                    <select id = "cmbSelect">
                        <option> ප්‍රධාන පරිශීලක</option>
                        <option> ආයතන</option>
                        <option> ගිනුම් අංශය</option>
                        <option> සංවර්ධන අංශය</option>
                        <option> ඉඩම් අංශය</option>
                        <option> සමාජ සේවා අංශය</option>
                        <option> දිවි නැගුම අංශය</option>
                        <option> ක්ෂේත්‍ර</option>
                        <option> ලියාපදිංචි අංශය</option>
                        <option> මුදල් හා චෙක්පත් අංශය</option>
                        <option> ප්‍රධාන නිලධාරී</option>
                    </select>
                </label><br>

                <label for="registeredNo">ලියාපදිංචි අංකය
                    <input type="text" id = "registeredNo" name ="letterRegNo">
                </label><br>
                <label for = "date">දිනය:
                    <input type="date" id = "date" name ="letterDate">
                </label><br>
                <label for ="sender">ලිපිය එවූ පාර්ශවය:
                    <input type="text" id = "sender" name ="senderOfLetter">
                </label><br>
                <label for ="subject">විෂය:
                    <input type="text" id = "subject" name ="letterSubject">
                </label><br>

            </fieldset>
        </form>
    </div>
    <div id = "sendSection" style = "color:black">
        <button style="background-color: mistyrose; width: 100px; height: 30px;">යැවීම</button>
        <button style="background-color: mistyrose; width: 150px; height: 30px;">ගොනු අමුනන්න</button>
        <button style="background-color: mistyrose; width: 100px; height: 30px;">මකන්න</button>


    </div>

</div>

</body>
</html>