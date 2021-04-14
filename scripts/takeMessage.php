<?php
    $login = $_COOKIE['user'];
    $connect = new mysqli('localhost', 'root', '','nier_database');
    $result = $connect->query("select * from `messages`");
    while($row = $result->fetch_row())
    {
        echo 
        "<table>
            <tr>
                <td class='row'>$row[1]</td>
                <td class='fromUser'>$row[2]</td>
                <td></td>
                <td>$row[3]</td>
            </tr>
        </table>";
    }
?>