<!doctype html>
<html lang="en">

<head>
    You have recieved a New Email
</head>

<body>
    <div class="container" style=" width: 50vw;">
        <table class="table">
            <tr>
                <td>From: </td>
                <td>{{$firstName}} {{$lastName}}</td>
            </tr>
            <tr>
                <td>Email: </td>
                <td>{{$email}}</td><br>
            </tr>
        </table>
        <h2>Message Content:</h2>
        <div style="border: 3px solid #ff6666; border-radius: 6px; padding: 30px 20px; display: inline-block; ">{{$messageContent}}</div>
    </div>
</body>

</html>