<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q1</title>
</head>
<body>
    <?php 
        $name = "MUHAMMAD AFIEQ BIN ROSLI";
        $matricNo = "CI230134";
        $course = "BIS";
        $yearOfStudy = "2";
        $address = "NO24, JALAN WAJA 3, TAMAN WAJA";
    ?>

    <table border='1'>
        <tr>
            <td>Name</td>
            <td><?php echo "$name"; ?></td> 
        </tr>
            <td>Matric Number :</td>
            <td><?php echo "$matricNo"; ?></td>
        <tr>
            <td>Course : </td>
            <td><?php echo "$course"; ?></td>
        </tr>
            <td>Year Of Study : </td>
            <td><?php echo "$yearOfStudy"; ?></td>
        <tr>
            <td>Address : </td>
            <td><?php echo "$address"; ?></td>
        </tr>
    </table>
    
</body>
</html>
